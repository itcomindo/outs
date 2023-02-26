<?php
defined('ABSPATH') || exit;
/**
 * limit login attemps
 * function to create limit login attemps, if user login failed 5 times, then user ip address will be blocked for 100 hour using htaccess file
*/
function limit_login_attemps()
{
    $option = carbon_get_theme_option('enabling_limit_login_attempts_mn');
    if ($option == true) {
        // get user ip address
        $ip = $_SERVER['REMOTE_ADDR'];
        // get user login failed count
        $count = get_transient('login_failed_' . $ip);

        // if user login failed count is 5, then block user ip address for 100 hour
        if ($count >= 5) {
            $file = ABSPATH . '.htaccess';
            $content = file_get_contents($file);
            $content .= "\n# BEGIN Limit Login Attempts\n";
            $content .= "<Limit GET POST>\n";
            $content .= "order allow,deny\n";
            $content .= "deny from $ip\n";
            $content .= "allow from all\n";
            $content .= "</Limit>\n";
            $content .= "# END Limit Login Attempts\n";
            file_put_contents($file, $content);
        }
    } else {
        // don nothing
    }
}
add_action('wp_login_failed', 'limit_login_attemps');

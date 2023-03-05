<?php
defined('ABSPATH') || exit;

/**
 * ferboden login attemps
 * if someone to try login using username that in the list, then user ip address will be blocked forever using htaccess file
*/

function ferboden_login_attemps() {
    $option = carbon_get_theme_option('enabling_ferboden_login_mn');
    if ($option == true) {
        $LF = carbon_get_theme_option('list_ferboden_login_mn');
        $LF = explode(',', $LF);
        // make it as ferboden login list
        $ferboden_login_list = $LF;
        // when user visit wp-login.php, then get user ip address
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // if user login using username that in the list, then user ip address will be blocked forever using htaccess file
        if (in_array($_POST['log'], $ferboden_login_list)) {
            $file = ABSPATH . '.htaccess';
            $content = file_get_contents($file);
            $content .= "\n# BEGIN Ferboden Login Attempts Coz Use Ferboden Word\n";
            $content .= "<Limit GET POST>\n";
            $content .= "order allow,deny\n";
            $content .= "deny from $ip\n";
            $content .= "allow from all\n";
            $content .= "</Limit>\n";
            $content .= "# END Ferboden Login Attempts\n";
            file_put_contents($file, $content);
        } else {
            // don nothing
        }
    } else {
        // don nothing
    }
}
add_action('wp_login_failed', 'ferboden_login_attemps');

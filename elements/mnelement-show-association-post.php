<?php
defined('ABSPATH') || exit;
function mnel_show_association_posts()
{
    $option = carbon_get_theme_option('enable_disable_associated_post_mn');
    if ($option == true) {
        $theAssociationPost = carbon_get_post_meta(get_the_ID(), 'crb_association');
        if (!empty($theAssociationPost)) {
            $theAssPosts = $theAssociationPost;
            echo '<div class="theAssPostPr">';
            echo '<h3 class="globalSectionSubHead">Associated Posts</h3>';
            echo '<div class="theAssPostWr">';
            foreach ($theAssPosts as $theAssPost) {
                // get the post ID
                $postID = $theAssPost['id'];
                $title = get_the_title($postID);
                $permalink = get_the_permalink($postID);
                // post thumbnail
                $attr = array(
                    'class' => 'theAssPostThumb',
                    'alt' => $title,
                    'title' => $title,
                    'src' => get_the_post_thumbnail_url($postID, 'full'),
                );
                $featuredImage = get_the_post_thumbnail($postID, 'full', $attr);
?>
                <div class="theAssPostItem">
                    <div class="theAssPostItemTop">
                        <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                            <?php echo $featuredImage; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>
                        </a>
                    </div>
                    <div class="theAssPostItemBot">
                        <h3 class="theAssPostHead">
                            <a title="<?php echo $title; ?>" href="<?php echo $permalink; ?>">
                                <?php echo $title; ?>
                            </a>
                        </h3>
                    </div>
                </div>
<?php
            }
            echo '</div>';
            echo '</div>';
        }
    }
}
// load flickity when needed
function load_flickity_js_if_option_is_true()
{
    $option = carbon_get_theme_option('enable_disable_associated_post_mn');
    if ($option == true) {
        $theAssociationPost = carbon_get_post_meta(get_the_ID(), 'crb_association');
        if (!empty($theAssociationPost)) {
            wp_enqueue_script('assPostFlickityJs', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jq'), '2.2.2', true);
            if (!wp_script_is('assPostFlickityJs', 'enqueued')) {
                wp_enqueue_script('assPostFlickityJs', get_template_directory_uri() . '/libs/flickity.pkgd.min.js', array('jq'), '2.2.2', true);
            }
            wp_enqueue_style('assPostFlickityCss', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css', array(), '2.2.2', 'all');
            if (!wp_style_is('assPostFlickityCss', 'enqueued')) {
                wp_enqueue_style('assPostFlickityCss', get_template_directory_uri() . '/libs/flickity.min.css', array(), '2.2.2', 'all');
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'load_flickity_js_if_option_is_true');
function load_flickity_option()
{
    $option = carbon_get_theme_option('enable_disable_associated_post_mn');
    if ($option == true) {
        $theAssociationPost = carbon_get_post_meta(get_the_ID(), 'crb_association');
        if (!empty($theAssociationPost)) {
            echo '<script>
            window.addEventListener("DOMContentLoaded", (event) => {
            jQuery(function(){
                jQuery(".theAssPostWr").flickity({
            // options
            cellAlign: "center",
            contain: true,
            wrapAround: true,
            autoPlay: 3000,
            pauseAutoPlayOnHover: false,
            prevNextButtons: false,
            pageDots: true,
        });
            });
            });
            </script>';
        }
    }
}
add_action('wp_footer', 'load_flickity_option');
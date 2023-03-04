<?php
function mnel_show_mobile_floating_share()
{
    if (is_single()) {
        $title = get_the_title();
        // replace spaces with %20
        $title = str_replace(' ', '%20', $title);
        $permalink = get_the_permalink();
    } elseif (is_tag()) {
        $title= single_tag_title('', false);
        $title = str_replace(' ', '%20', $title);
        $permalink = get_tag_link(get_queried_object_id());

    }
?>

        <div id="mobFloShareItemWr">
            <a title="Facebook" rel="noopener, nofollow" target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"><i class="fa-brands fa-square-facebook"></i></a>
            <a title="Twitter" rel="noopener, nofollow" target="_blank" class="twitter" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&url=<?php echo $permalink; ?>"><i class="fa-brands fa-square-twitter"></i></a>
            <a title="Linkedin" rel="noopener, nofollow" target="_blank" class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&summary=&source="><i class="fa-brands fa-linkedin"></i></a>
        </div>
<?php
}
?>
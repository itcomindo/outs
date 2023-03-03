<?php
function mnel_show_mobile_floating_share()
{
?>

        <div id="mobFloShareItemWr">
            <a title="Facebook" rel="noopener, nofollow" target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
            <a title="Twitter" rel="noopener, nofollow" target="_blank" class="twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
            <a title="Linkedin" rel="noopener, nofollow" target="_blank" class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>
<?php
}
?>
<?php get_header(); ?>
<section class="liste">
    <h2>Page</h2>
    <?php
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?><article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_date(); ?></p>
                    <div>
                        <?php
                        if (has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }
                    ?></div>
                    <div><?php
                        the_content();
                    ?></div>
                </article>
                <?php
            }
        }
    ?>
</section><?php
get_footer();
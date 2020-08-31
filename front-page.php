<?php get_header(); ?>
<section class="sidebars-primary">
    <?php
    if (is_active_sidebar('bigstars-principal')){
        dynamic_sidebar('bigstars-principal');
    }
    ?>
</section>
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
        ?><section class="sidebars-secondary"><?php
        if (is_active_sidebar('bigstars-secondaire')){
            dynamic_sidebar('bigstars-secondaire');
        }
    ?></section>
</section><?php
get_footer();
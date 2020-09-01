<?php get_header(); ?>
<?php if (have_posts()){
    while (have_posts()){
        the_post(); ?>
        <article>
            <?php the_date();?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <?php
                    if (has_post_thumbnail()){
                        the_post_thumbnail('thumbnail');
                    }
            ?></div>
        </article>
    <?php
    }
}
get_footer(); ?>
<?php get_header(); ?>
<?php if (have_posts()){
    while (have_posts()){
        the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink() ?>"></a><?php the_title() ?></h2>
        </article>
    <?php
    } else {
        ?><p>Vide</p><?php
    }
}
<?php get_footer(); ?>
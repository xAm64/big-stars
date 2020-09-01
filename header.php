<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?php bloginfo('name') ?></title>
	<meta name="viewport" contant="width=device-width, initial-scale=1">
    <meta name="Author" content="Manex">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head() ?>
</head>
<body>
    <header>
        <h2><?php the_title() ?></h2>
        <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
    </header>
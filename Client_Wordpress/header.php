<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <!--?php
            wp_nav_menu(array(
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
            ));
        ?-->
        
<?php
  wp_nav_menu(array(
    'menu' => 'Main Navigation',
    'container_id' => 'cssmenu',
    'walker' => new CSS_Menu_Walker()
  ));
?>

    </nav>
    <header>
        <div class="header-search"><?php get_search_form(); ?></div>
        <a href="http://www.rebeccaschoenrock.com/viera/index.php"><img src="http://www.rebeccaschoenrock.com/viera/images/logo.png"/></a>
    </header>

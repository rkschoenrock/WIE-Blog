<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container"> <!-- Begin Container Div -->

        <header class="row">
            <div class="twelve columns">
                <h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
        </header>

        <nav class="row">
            <div class="twelve columns">
                    <div class="centermenu">
                    <?php
                        wp_nav_menu(array(
                            'sort_column' => 'menu_order',
                            'container_class' => 'blank-menu-header'
                        ));
                    ?>
                    <div class="header-search"><?php get_search_form(); ?></div>
                </div>
            </div>
        </nav>

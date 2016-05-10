<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="description" content="">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


    <title>
        <?php wp_title(' | ', true, 'right'); ?>
        <?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container-fluid">
    <div id="mainNav">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </div>
                <div class="navbar-collapse collapse">

                    <?php

                        $args = array(
                            'menu'          => 'header-menu',
                            'menu_class'    => 'nav navbar-nav',
                            'container'     => 'false'
                        );

                        wp_nav_menu($args);

                    ?>

                </div>
            </div>
        </div>
    </div>
    <div id="mainContent">

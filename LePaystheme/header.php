<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Le Pays</title> -->
    <?php wp_head() ?>
    <style>
        a {
            margin-left:2.0em;
            color: white;
        }
    </style>
</head>
<body>







    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <!-- <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            } 
        ?> -->
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/lejournallepays.png" alt="logo" width="80"> -->
        <a class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_lePays.png" alt="logo" width="100" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <?php
            wp_nav_menu( 
                    array(
                    'theme_location' => 'header-menu',
                    'container' =>false,
                    // 'container_class' => 'my_extra_menu_class',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNav',
                    'menu_class' => 'navbar-nav mr-auto',
                    'depth' => 2,
                    )
                );
        ?>
    </nav>
    <div class="container">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_field('favicon', 'option') ?>" type="image/x-icon"/>
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='<?php echo get_template_directory_uri() ?>/dist/lib/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/lib/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/scss/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lg-thumbnail.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/lg-fullscreen.min.css">
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/jquery/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src='<?php echo get_template_directory_uri() ?>/dist/lib/fancybox/jquery.fancybox.js'></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lightgallery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lg-thumbnail.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/dist/js/lg-fullscreen.min.js"></script>
</head>
<body>
<header>
    <?php
    $header_option = get_field('theme_header_option', 'option');
    ?>
    <div class="header-top">
        <div class="container">
            <div class="content">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <figure>
                            <img src="<?= getimage(get_field('logo_header', 'option')) ?>">
                        </figure>
                    </a>
                </div>
                <div class="right">
                    <div class="mail">
                        <figure>
                            <img src="<?= getimage(get_field('img_icon_1', 'option')) ?>">
                        </figure>
                        <span>
                            <?= get_field('content_header_1', 'option') ?>
                        </span>
                    </div>
                    <div class="phone">
                        <figure>
                            <img src="<?= getimage(get_field('img_icon_2', 'option')) ?>">
                        </figure>
                        <p>
                           <span>
                                <?= get_field('content_header_2', 'option') ?>
                           </span>
                        </p>
                    </div>
                    <div class="search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                            <path d="M10.8242 1C16.0742 1 20.3242 5.25 20.3242 10.5C20.3242 15.75 16.0742 20 10.8242 20C5.57422 20 1.32422 15.75 1.32422 10.5C1.32422 6.8 3.43422 3.6 6.52422 2.03" stroke="#3E4349" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.3242 21L19.3242 19" stroke="#3E4349" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <form action="<?php echo home_url('/'); ?>" role="search">
                            <input type="text" placeholder="Tìm kiếm" name="s">
                            <input type="hidden" name="key">
                        </form>
                    </div>
                </div>
                <div class="nav-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($header_option === 'default') {
        get_template_part('parts/default', '1');
    } elseif ($header_option === 'header_1') {
        get_template_part('parts/header-1', '2');
    } else {
        get_template_part('parts/default', '1');
    }
    ?>
</header>
<main>
<div class="main_body">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potec</title>
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
        <div class="header-top">
            <div class="container">
                <div class="content">
                    <div class="logo">
                        <a href="#">
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo.png" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="right">
                        <div class="mail">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                                    <path d="M17.7647 20.5H6.58824C3.23529 20.5 1 18.8235 1 14.9118V7.08824C1 3.17647 3.23529 1.5 6.58824 1.5H17.7647C21.1176 1.5 23.3529 3.17647 23.3529 7.08824V14.9118C23.3529 18.8235 21.1176 20.5 17.7647 20.5Z" stroke="#3E4349" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.7644 7.64697L14.2661 10.4411C13.115 11.3576 11.2261 11.3576 10.0749 10.4411L6.58789 7.64697" stroke="#3E4349" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </figure>
                            <span>sales@potec.net.vn</span>
                        </div>
                        <div class="phone">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M20.324 17.0135C20.324 17.3555 20.248 17.707 20.0865 18.049C19.925 18.391 19.716 18.714 19.4405 19.018C18.975 19.531 18.462 19.9015 17.8825 20.139C17.3125 20.3765 16.695 20.5 16.03 20.5C15.061 20.5 14.0255 20.272 12.933 19.8065C11.8405 19.341 10.748 18.714 9.66504 17.9255C8.57254 17.1275 7.53704 16.244 6.54904 15.2655C5.57054 14.2775 4.68704 13.242 3.89854 12.159C3.11954 11.076 2.49254 9.993 2.03654 8.9195C1.58054 7.8365 1.35254 6.801 1.35254 5.813C1.35254 5.167 1.46654 4.5495 1.69454 3.9795C1.92254 3.4 2.28354 2.868 2.78704 2.393C3.39504 1.7945 4.06004 1.5 4.76304 1.5C5.02904 1.5 5.29504 1.557 5.53254 1.671C5.77954 1.785 5.99804 1.956 6.16904 2.203L8.37304 5.3095C8.54404 5.547 8.66754 5.7655 8.75304 5.9745C8.83854 6.174 8.88604 6.3735 8.88604 6.554C8.88604 6.782 8.81954 7.01 8.68654 7.2285C8.56304 7.447 8.38254 7.675 8.15454 7.903L7.43254 8.6535C7.32804 8.758 7.28054 8.8815 7.28054 9.0335C7.28054 9.1095 7.29004 9.176 7.30904 9.252C7.33754 9.328 7.36604 9.385 7.38504 9.442C7.55604 9.7555 7.85054 10.164 8.26854 10.658C8.69604 11.152 9.15204 11.6555 9.64604 12.159C10.159 12.6625 10.653 13.128 11.1565 13.5555C11.6505 13.9735 12.059 14.2585 12.382 14.4295C12.4295 14.4485 12.4865 14.477 12.553 14.5055C12.629 14.534 12.705 14.5435 12.7905 14.5435C12.952 14.5435 13.0755 14.4865 13.18 14.382L13.902 13.6695C14.1395 13.432 14.3675 13.2515 14.586 13.1375C14.8045 13.0045 15.023 12.938 15.2605 12.938C15.441 12.938 15.631 12.976 15.84 13.0615C16.049 13.147 16.2675 13.2705 16.505 13.432L19.6495 15.6645C19.8965 15.8355 20.0675 16.035 20.172 16.2725C20.267 16.51 20.324 16.7475 20.324 17.0135Z" stroke="#3E4349" stroke-width="2" stroke-miterlimit="10"/>
                                </svg>
                            </figure>
                            <p><span>0917 976 688</span> - <span>0243 823 2266 </span></p>
                        </div>
                        <div class="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <path d="M10.8242 1C16.0742 1 20.3242 5.25 20.3242 10.5C20.3242 15.75 16.0742 20 10.8242 20C5.57422 20 1.32422 15.75 1.32422 10.5C1.32422 6.8 3.43422 3.6 6.52422 2.03" stroke="#3E4349" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.3242 21L19.3242 19" stroke="#3E4349" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <input type="text" placeholder="Tìm kiếm">
                        </div>
                    </div>
                    <div class="nav-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bot">
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="#">Máy bơm bùn đặc chủng</a>
                            <i class="fas fa-caret-down"></i>
                            <nav class="menu-dropdown">
                                <ul>
                                    <li><a href="#">KETO</a></li>
                                    <li><a href="#">HẢI NAM</a></li>
                                    <li><a href="#">SUNBO PUMP</a></li>
                                    <li><a href="#">DP PUMP</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li>
                            <a href="#">Giải pháp nano chống ăn mòn - nhiệt đới hóa - ceramic</a>
                            <i class="fas fa-caret-down"></i>
                            <nav class="menu-dropdown">
                                <ul>
                                    <li><a href="#">Xanoxx/ Nanoworks</a></li>
                                    <li><a href="#">CorrosionX</a></li>
                                    <li><a href="#">EonCoat</a></li> 
                                </ul>
                            </nav>
                        </li>
                        <li>
                            <a href="#">Sản phẩm khác</a>
                            <i class="fas fa-caret-down"></i>
                            <nav class="menu-dropdown">
                                <ul>
                                    <li><a href="#">Công cụ hỗ trợ trong lĩnh vực ANQP</a></li>
                                    <li><a href="#">Xăng dầu và thiết bị ngành xăng dầu</a></li>
                                    <li><a href="#">Vòng bi</a></li> 
                                    <li><a href="#">Đồng hồ</a></li> 
                                    <li><a href="#">Van</a></li> 
                                    <li><a href="#">Bơm</a></li> 
                                </ul>
                            </nav>
                        </li>
                        <li><a href="#">Dự án thực hiện</a></li>
                    </ul>
                    <div class="close-menu">
                        <i class="far fa-times"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>

    
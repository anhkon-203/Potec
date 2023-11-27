<div class="overlay"></div>
</main>
</div>
<footer>
    <div class="footer-wrapper" style="background: url('<?php echo getimage(get_field('background_footer', 'option')); ?>') no-repeat; background-size: cover;">
        <div class="container">
            <div class="content">
                <div class="left">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <figure>
                                <img src="<?= getimage(get_field('logo_footer', 'option')) ?>">
                            </figure>
                        </a>
                    </div>
                    <span class="slogan">
                        <?= get_field('title_footer_menu', 'option') ?>
                    </span>
                    <div class="method-contact">
                        <?php
                        $support_footer = get_field('support_footer', 'option');
                        if ($support_footer) :
                            foreach ($support_footer as $key => $value) :
                                ?>
                                <div class="child">
                                    <figure>
                                        <img src="<?= getimage($value['img']) ?>">
                                    </figure>
                                    <div class="text">
                                        <span><?= $value['title'] ?></span>
                                        <h4><?= $value['content'] ?></h4>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="right">
                    <div class="top">
                        <div class="name">
                            <h3><?= get_field('title_link_footer', 'option') ?></h3>
                        </div>
                        <?php
                        $elMenuFooter = wp_get_nav_menu_items('Menu footer');
                        $menuFooter = array();

                        foreach ($elMenuFooter as $value) {
                            $menuFooter[] = (array)$value;
                        }

                        ?>

                        <ul>
                            <?php foreach ($menuFooter as $item): ?>
                                <li><a href="<?= $item['url']; ?>"><?= $item['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                    <div class="bot">
                        <div class="name">
                            <h3><?= get_field('title_social', 'option') ?></h3>
                        </div>
                        <div class="social">
                            <?php $social = get_field('connect_social', 'option'); ?>
                            <?php if ($social): ?>
                                <?php foreach ($social as $item): ?>
                                    <a href="<?= $item['links'] ?>">
                                        <figure>
                                            <img src="<?= getimage($item['icons']) ?>">
                                        </figure>
                                    </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <figure style="width: 600px; height: 470px !important;">
                <?= get_field('embed_map', 'option') ?>
            </figure>
        </div>
    </div>
    <span class="copyright">
        <?= get_field('copyright', 'option') ?>
    </span>
</footer>

<script>
    jQuery(document).ready(function() {
        var padtnerslideSwiper = new Swiper(".list-partner", {
            grabCursor: true,
            slideToClickedSlide: true,
            loop: true,
            slidesPerView: "auto",
            speed: 3000,
            freeMode: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: true,
                reverseDirection: true,
            },
            navigation: {
                nextEl: '.slider-button-next-2',
                prevEl: '.slider-button-prev-2',
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                720: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 15
                }
            }
        });
        var mainslideSwiper = new Swiper(".list-feedback", {
            grabCursor: true,
            slideToClickedSlide: true,
            loop: false,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                720: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50
                }
            }
        });
    });
    $(".nav-menu").click(function() {
        $(".header-bot").addClass("active-menu");
        $(".overlay").fadeIn();
    })
    $(".close-menu").click(function() {
        $(".header-bot").removeClass("active-menu");
        $(".overlay").fadeOut();
    })
    $(".overlay").click(function() {
        $(".header-bot").removeClass("active-menu");
        $(".overlay").fadeOut();
    })
</script>
</body>
</html>
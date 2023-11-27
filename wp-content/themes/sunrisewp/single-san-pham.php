<?php get_header(); ?>

<?php
// section sản phẩm
$hide_show_product_detail = get_field('hide_show_product_detail', get_the_ID());
// section thông số kỹ thuật
$hide_show_specifications = get_field('hide_show_specifications', get_the_ID());
// section ảnh thông số kỹ thuật
$hide_show_specifications_img = get_field('hide_show_specifications_img', get_the_ID());
// section sản phẩm liên quan
$hide_show_list_product = get_field('hide_show_list_product', get_the_ID());
// Lấy dữ liệu của trường 'list' cho bài viết hiện tại
$list_sp = get_field('list', get_the_ID());
$anh_thong_so = get_field('group', get_the_ID());
$list_product_skin = get_field('list_product_skin', get_the_ID());

?>

    <!--    // section sản phẩm-->
<?php if ($hide_show_product_detail != false) : ?>
    <section class="section-detailpr-1">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $list_sp['title'] ?>
                </h2>
            </div>
            <div class="content row">
                <div class="col-lg-7">
                    <div class="col-left">
                        <div class="image-pr">
                            <div class="left">
                                <div class="other-imagepr swiper">
                                    <div class="swiper-wrapper">
                                        <div class="child swiper-slide">
                                            <!-- load 1 ảnh trong gallery   -->
                                            <?php $gallery = $list_sp['img_product']; ?>
                                            <?php if ($gallery) : ?>
                                                <?php
                                                // Chỉ lấy ảnh đầu tiên từ danh sách
                                                $first_image = reset($gallery);
                                                ?>
                                                <figure>
                                                    <img src="<?= esc_url($first_image['url']); ?>"
                                                         alt="<?= esc_attr($first_image['alt']); ?>">
                                                </figure>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($gallery) : ?>
                                            <?php foreach ($gallery as $item) : ?>
                                                <div class="child swiper-slide">
                                                    <figure>
                                                        <img src="<?= $item['url'] ?>" alt="">
                                                    </figure>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="slider-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" viewBox="0 0 25 12"
                                         fill="none">
                                        <path d="M12.5 3.51468e-05C13.5095 3.52351e-05 14.5191 0.356082 15.2834 1.05499L24.6863 9.65278C25.1046 10.0352 25.1046 10.6682 24.6863 11.0506C24.2681 11.433 23.5759 11.433 23.1576 11.0506L13.7547 2.45279C13.0625 1.81983 11.9376 1.81982 11.2453 2.45279L1.84237 11.0506C1.42414 11.433 0.731903 11.433 0.313673 11.0506C-0.104557 10.6682 -0.104557 10.0352 0.313673 9.65278L9.71663 1.05499C10.481 0.356082 11.4905 3.50586e-05 12.5 3.51468e-05Z"
                                              fill="#EF7522"/>
                                    </svg>
                                </div>
                                <div class="slider-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="12" viewBox="0 0 25 12"
                                         fill="none">
                                        <path d="M12.5 11.3374C11.4905 11.3374 10.4809 10.9813 9.71659 10.2824L0.313672 1.68462C-0.104557 1.3022 -0.104557 0.669234 0.313672 0.286815C0.731902 -0.0956049 1.42414 -0.0956049 1.84237 0.286815L11.2453 8.88461C11.9375 9.51758 13.0624 9.51758 13.7547 8.88461L23.1576 0.286815C23.5759 -0.0956049 24.2681 -0.0956049 24.6863 0.286815C25.1046 0.669234 25.1046 1.3022 24.6863 1.68462L15.2834 10.2824C14.519 10.9813 13.5095 11.3374 12.5 11.3374Z"
                                              fill="#EF7522"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="right">
                                <div class="main-imagepr swiper">
                                    <div class="swiper-wrapper">
                                        <?php if ($gallery) : ?>
                                            <?php foreach ($gallery as $item) : ?>
                                                <div class="child swiper-slide">
                                                    <figure>
                                                        <img src="<?= $item['url'] ?>" alt="">
                                                    </figure>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="col-right">
                        <div class="name">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="desc">
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="document">
                            <?php if ($list_sp['title_download'] != null) : ?>
                                <h3><?= $list_sp['title_download'] ?></h3>
                            <?php endif; ?>
                            <?php
                            $attachment_id = $list_sp['file_download'];
                            $file_url = wp_get_attachment_url($attachment_id);
                            ?>
                            <?php if ($list_sp['title_download'] != null && $list_sp['content_download'] != null) : ?>
                                <ul>
                                    <li>
                                        <?php
                                        // $attachment_id là ID của tệp đính kèm trong WordPress
                                        $attachment_id = $list_sp['file_download'];

                                        // Lấy URL của tệp đính kèm
                                        $file_url = wp_get_attachment_url($attachment_id);
                                        ?>
                                        <?php if ($file_url) : ?>
                                            <a target="_blank" href="<?= esc_url($file_url); ?>">
                                                <?= $list_sp['content_download'] ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                     viewBox="0 0 17 18" fill="none">
                                                    <path d="M16 7.5V11.25C16 15 14.5 16.5 10.75 16.5H6.25C2.5 16.5 1 15 1 11.25V6.75C1 3 2.5 1.5 6.25 1.5H10"
                                                          stroke="#EF7522" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M16 7.5H13C10.75 7.5 10 6.75 10 4.5V1.5L16 7.5Z"
                                                          stroke="#EF7522"
                                                          stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M4.75 9.75H9.25" stroke="#EF7522" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M4.75 12.75H7.75" stroke="#EF7522" stroke-width="1.5"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="action">
                            <a href="<?= $list_sp['url'] ?>">
                                <?= $list_sp['btn_text'] ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                     fill="none">
                                    <path d="M10.9224 11.9546L15.877 7.00005L10.9224 2.04548" stroke="#F3F3F3"
                                          stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M2.00102 7L15.7383 7" stroke="#F3F3F3" stroke-width="2.5"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!-- section thông số kỹ thuật-->
<?php if ($hide_show_specifications != false) : ?>
    <?php $list_specifications = get_field('list_specifications', get_the_ID()); ?>
    <section class="section-detailpr-2">
        <div class="container">
            <div class="content">
                <nav class="tabs-control">
                    <ul>
                        <?php if (have_rows('list_specifications', get_the_ID())) : ?>
                            <?php $tab_index = 1; ?>
                            <?php while (have_rows('list_specifications', get_the_ID())) : the_row(); ?>
                                <?php $tab_title = get_sub_field('title'); ?>
                                <li><a style="text-decoration: none!important;"
                                       href="#<?= $tab_index ?>">
                                    </a>
                                    <?= $tab_title ?>
                                </li>
                                <?php $tab_index++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="tabs">
                    <?php if (have_rows('list_specifications', get_the_ID())) : ?>
                        <?php $tab_index = 1; ?>
                        <?php while (have_rows('list_specifications', get_the_ID())) : the_row(); ?>
                            <?php $tab_content = get_sub_field('content'); ?>
                            <div id="<?= $tab_index ?>" class="tabs-content">
                                    <p>
                                        <?= $tab_content ?>
                                    </p>
                            </div>
                            <?php $tab_index++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--    section ảnh thông số kỹ thuật-->
<?php if ($hide_show_specifications_img != false) : ?>
    <section class="section-detailpr-3">
        <div class="container">
            <div class="title">
                <h2>
                    <?= $anh_thong_so['title_image_specifications'] ?>
                </h2>
            </div>
            <div class="content">
                <figure>
                    <img src="<?= getimage($anh_thong_so['img_specifications']) ?>" alt="">
                </figure>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--    // section sản phẩm liên quan-->
<?php if ($hide_show_list_product != false ) :?>
    <section class="section-detailpr-4">
    <div class="container">
    <div class="content row">
    <div class="col-lg-3">
        <div class="col-left">
            <div class="text">
                <div class="name">
                    <h2><?= $list_product_skin['title'] ?></h2>
                </div>
                <div class="desc">
                    <p><?= $list_product_skin['content'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($hide_show_list_product != false) :
        $post_id = get_the_ID();

        $terms = get_the_terms($post_id, 'danh-muc-san-pham');

        if ($terms && !is_wp_error($terms)) {
            $term_slugs = wp_list_pluck($terms, 'slug');
        } else {
            $term_slugs = array(); // Nếu không có thuộc tính, sử dụng một mảng trống
        }

        // Truy vấn các sản phẩm có chung thuộc tính
        $args = array(
            'post_type' => 'san-pham', // Thay 'san-pham' bằng loại bài viết của bạn
            'posts_per_page' => -1,
            'post__not_in' => array($post_id), // Loại bỏ bài viết hiện tại
            'tax_query' => array(
                array(
                    'taxonomy' => 'danh-muc-san-pham',
                    'field' => 'slug',
                    'terms' => $term_slugs,
                ),
            ),
        );

        $related_products = new WP_Query($args);

        if ($related_products->have_posts()) :
            ?>
            <div class="col-lg-9">
                <div class="col-right">
                    <div class="slide-pr-other swiper">
                        <div class="swiper-wrapper">
                            <?php while ($related_products->have_posts()) : $related_products->the_post(); ?>
                                <!-- Mã HTML cho từng sản phẩm liên quan -->
                                <div class="child swiper-slide">
                                    <div class="image">
                                        <figure>
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        </figure>
                                        <div class="action">
                                            <a href="<?php the_permalink(); ?>">
                                                Chi tiết
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                                                    <path d="M10.9214 11.9546L15.876 7.00002L10.9214 2.04545" stroke="#F3F3F3" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M2.00004 6.99994L15.7373 6.99994" stroke="#F3F3F3" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="name">
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                        <div class="desc">
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="slider-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25" viewBox="0 0 12 25"
                             fill="none">
                            <path d="M0.662633 12.5C0.662633 11.4905 1.01868 10.4809 1.71758 9.71659L10.3154 0.313672C10.6978 -0.104558 11.3308 -0.104558 11.7132 0.313672C12.0956 0.731902 12.0956 1.42414 11.7132 1.84237L3.11539 11.2453C2.48242 11.9375 2.48242 13.0624 3.11539 13.7547L11.7132 23.1576C12.0956 23.5759 12.0956 24.2681 11.7132 24.6863C11.3308 25.1046 10.6978 25.1046 10.3154 24.6863L1.71758 15.2834C1.01868 14.519 0.662633 13.5095 0.662633 12.5Z"
                                  fill="#EF7522"/>
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="25" viewBox="0 0 12 25"
                             fill="none">
                            <path d="M11.3374 12.5C11.3374 13.5095 10.9813 14.5191 10.2824 15.2834L1.68462 24.6863C1.3022 25.1046 0.669234 25.1046 0.286815 24.6863C-0.0956048 24.2681 -0.0956048 23.5759 0.286815 23.1576L8.88461 13.7547C9.51758 13.0625 9.51758 11.9376 8.88461 11.2453L0.286815 1.84237C-0.0956046 1.42414 -0.0956046 0.731903 0.286815 0.313673C0.669234 -0.104557 1.3022 -0.104557 1.68462 0.313673L10.2824 9.71663C10.9813 10.481 11.3374 11.4905 11.3374 12.5Z"
                                  fill="#EF7522"/>
                        </svg>
                    </div>
                </div>
            </div>
        <?php
        endif;
        wp_reset_postdata(); // Reset lại query để sử dụng các hàm khác sau đó
    endif;
    ?>
    </div>
    </div>
    </section>
<?php endif; ?>

    <script>
        jQuery(document).ready(function () {
            var productThumbs = new Swiper('.other-imagepr', {
                loop: true,
                slideToClickedSlide: true,
                navigation: {
                    nextEl: '.slider-button-next',
                    prevEl: '.slider-button-prev',
                },
                breakpoints: {
                    0: {
                        direction: 'horizontal',
                        slidesPerView: 2,
                        loopedSlides: 2,
                        spaceBetween: 20,
                    },
                    720: {
                        direction: 'vertical',
                        slidesPerView: 3,
                        loopedSlides: 3,
                        spaceBetween: 30,
                    },
                }
            });
            var productSlider = new Swiper('.main-imagepr', {
                spaceBetween: 0,
                loop: true,
                loopedSlides: 3,
                resizeObserver: true,
                breakpoints: {
                    0: {
                        direction: 'horizontal',
                    },
                    720: {
                        direction: 'vertical',
                    },
                }
            });
            productSlider.controller.control = productThumbs;
            productThumbs.controller.control = productSlider;
        });
        $(document).ready(function ($) {
            $('.tabs-content').hide();
            $('.tabs-content:first').show();
            $('.tabs-control li:first').addClass('active');
            $('.tabs-control li').click(function (event) {
                $('.tabs-control li').removeClass('active');
                $(this).addClass('active');
                $('.tabs-content').hide();

                var selectTab = $(this).find('a').attr("href");

                $(selectTab).fadeIn();
            });
        });
        var productList = new Swiper('.slide-pr-other', {
            spaceBetween: 25,
            centeredSlides: false,
            loop: true,
            slideToClickedSlide: true,
            direction: 'horizontal',
            slidesPerView: 3,
            loopedSlides: 3,
            navigation: {
                nextEl: '.slider-button-next',
                prevEl: '.slider-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    loopedSlides: 1,
                    spaceBetween: 10
                },
                720: {
                    slidesPerView: 2,
                    loopedSlides: 2,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 3,
                    loopedSlides: 3,
                    spaceBetween: 25
                },
            }
        });
    </script>

<?php get_footer(); ?>
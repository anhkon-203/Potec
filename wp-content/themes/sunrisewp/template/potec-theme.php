<?php /* Template Name: Potec Theme  */ ?>

<?php get_header(); ?>
<?php
//     banner
$hide_show_banner_skin_homepage = get_field('hide_show_banner_skin_homepage', get_the_ID());
// section giới thiệu
$hide_show_orther_skin_homepage = get_field('hide_show_orther_skin_homepage', get_the_ID());
// section danh mục sản phẩm
$hide_show_list_product_skin_1 = get_field('hide_show_list_product_skin_1', get_the_ID());
// section đối tác nói gì
$hide_show_partners_about_us_skin_1 = get_field('hide_show_partners_about_us_skin_1', get_the_ID());
// section khách hàng tin cậy
$hide_show_cus_skin_1 = get_field('hide_show_cus_skin_1', get_the_ID());
// section dự án nổi bật
$hide_show_project_skin_1 = get_field('hide_show_project_skin_1', get_the_ID());
// section tin tức
$hide_show_news_skin_1 = get_field('hide_show_news_skin_1', get_the_ID());
$news_skin_1 = get_field('news_skin_1', get_the_ID());

// about
// section về chúng tôi
$hide_show_about_us_skin_2 = get_field('hide_show_about_us_skin_2', get_the_ID());
// section tầm nhìn
$hide_show_view_skin_1 = get_field('hide_show_view_skin_1', get_the_ID());
// section sứ mệnh
$hide_show_mission_skin_2 = get_field('hide_show_mission_skin_2', get_the_ID());
// section giá trị cốt lõi
$hide_show_core_values_skin = get_field('hide_show_mission_skin_3', get_the_ID());
// khách hàng tin cậy
$hide_show_cus_skin_2 = get_field('hide_show_cus_skin_2', get_the_ID());
// section khách hàng nói gì về chúng tôi
$hide_show_partners_about_us_skin_3 = get_field('hide_show_partners_about_us_skin_3', get_the_ID());
// liên hệ
// section liên hệ
$hide_show_contact_skin = get_field('hide_show_contact_skin', get_the_ID());
?>

    <!--    banner-->
<?php if ($hide_show_banner_skin_homepage != false) : ?>
    <?php $list_banner_skin_homepage = get_field('banner_skin_homepage', get_the_ID()); ?>
    <?php foreach ($list_banner_skin_homepage as $key => $value) : ?>
        <section class="banner-homepage block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php
                 if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="swiper-wrapper">
                <?php
                $slider_banner_skin_homepage = $value['slider'];
                if (!empty($slider_banner_skin_homepage)):
                    foreach ($slider_banner_skin_homepage as $key => $slider) :
                        ?>
                        <div class="child swiper-slide">
                            <figure>
                                <img src="<?= getimage($slider['img']) ?>" alt="">
                            </figure>
                            <div class="container">
                                <div class="text">
                                    <div class="title">
                                        <h1>
                                            <?= $slider['title'] ?>
                                        </h1>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            <?= $slider['content'] ?>
                                        </p>
                                    </div>
                                    <div class="action">
                                        <a href="<?= $slider['url'] ?>">
                                            <?= $slider['btn_text'] ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                 viewBox="0 0 18 14"
                                                 fill="none">
                                                <path d="M10.9214 11.9546L15.876 7.00005L10.9214 2.04548"
                                                      stroke="#F3F3F3"
                                                      stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M2.00004 7L15.7373 7" stroke="#F3F3F3" stroke-width="2.5"
                                                      stroke-miterlimit="10" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="slider-pagination"></div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--     section giới thiệu-->
<?php if ($hide_show_orther_skin_homepage != false) : ?>
    <?php $list_orther_skin_homepage = get_field('orther_skin_homepage', get_the_ID()); ?>
    <?php foreach ($list_orther_skin_homepage as $key => $value) : ?>
        <section class="section-homepage-1 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content-1">
                    <div class="col-left">
                        <div class="image">
                            <figure>
                                <img src="<?= getimage($value['list']['img_1']) ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="text">
                            <div class="name">
                                <h2><?= $value['list']['title'] ?></h2>
                            </div>
                            <div class="desc">
                                <p>
                                    <?= $value['list']['content_1'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-2">
                    <div class="col-left">
                        <div class="text">
                            <p>
                                <?= $value['list']['content_2'] ?>
                            </p>
                        </div>
                        <div class="action">
                            <a href="<?= $value['list']['links'] ?>">
                                <?= $value['list']['btn'] ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                     fill="none">
                                    <path d="M10.9214 11.9546L15.876 7.00005L10.9214 2.04548" stroke="#F3F3F3"
                                          stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M2.00004 7L15.7373 7" stroke="#F3F3F3" stroke-width="2.5"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="image">
                            <figure>
                                <img src="<?= getimage($value['list']['img_2']) ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section danh mục sản phẩm-->
<?php if ($hide_show_list_product_skin_1 != false) : ?>
    <?php $list_list_product_skin_1 = get_field('list_product_1', get_the_ID()); ?>
    <?php foreach ($list_list_product_skin_1 as $key => $value) : ?>
        <section class="section-hompage-2 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content row">
                    <div class="col-lg-3">
                        <div class="col-left">
                            <div class="category">
                                <div class="name">
                                    <h2>
                                        <?= $value['list']['title'] ?>
                                    </h2>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= $value['list']['content'] ?>
                                    </p>
                                </div>
                                <div class="action">
                                    <a href="<?= $value['list']['links'] ?>">
                                        <?= $value['list']['btn'] ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                             viewBox="0 0 18 14"
                                             fill="none">
                                            <path d="M10.9214 11.9545L15.876 6.99999L10.9214 2.04542" stroke="#EF7522"
                                                  stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M2.00004 6.99988L15.7373 6.99988" stroke="#EF7522"
                                                  stroke-width="2.5"
                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="col-right">
                            <div class="list">
                                <?php foreach ($value['list']['products'] as $k => $lst) : ?>
                                    <div class="child">
                                        <a href="<?= $lst['url'] ?>">
                                            <div class="image">
                                                <figure>
                                                    <img src="<?= getimage($lst['img_product']) ?>" alt="">
                                                </figure>
                                                <div class="action">
                                                    <p>
                                                        <?= $lst['btn_text'] ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                             viewBox="0 0 18 14" fill="none">
                                                            <path d="M10.9214 11.9546L15.876 7.00005L10.9214 2.04548"
                                                                  stroke="#F3F3F3" stroke-width="2.5"
                                                                  stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.00004 7L15.7373 7" stroke="#F3F3F3"
                                                                  stroke-width="2.5"
                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <div class="name">
                                            <span>
                                                <?= $lst['name_product'] ?>
                                            </span>
                                                </div>
                                                <div class="desc">
                                                    <p>
                                                        <?= $lst['desc_product'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section đối tác nói gì-->
<?php if ($hide_show_partners_about_us_skin_1 != false) : ?>
    <?php $list_partners_about_us_skin_1 = get_field('partners_about_us_skin_1', get_the_ID()); ?>
    <?php foreach ($list_partners_about_us_skin_1 as $key => $value) : ?>
        <section class="section-homepage-3 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content-1">
                    <div class="title">
                        <div class="name">
                            <h2>
                                <?= $value['list']['title'] ?>
                            </h2>
                        </div>
                        <div class="desc">
                            <p>
                                <?= $value['list']['content'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="list-feedback">
                        <div class="swiper-wrapper">
                            <?php foreach ($value['list']['list_person'] as $k => $lst) : ?>
                                <div class="child swiper-slide">
                                    <div class="desc">
                                        <p>
                                            <?= $lst['excerpt'] ?>
                                        </p>
                                    </div>
                                    <div class="user">
                                        <div class="avatar">
                                            <figure>
                                                <img src="<?= getimage($lst['avatar']) ?>" alt="">
                                            </figure>
                                        </div>
                                        <div class="name">
                                            <h4>
                                                <?= $lst['name'] ?>
                                            </h4>
                                            <span>
                                        <?= $lst['position'] ?>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="content content-2">
                    <?php $list_logo_1 = $value['list']['list_logo_1'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="content content-3">
                    <?php $list_logo_1 = $value['list']['list_logo_2'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="content content-4">
                    <?php $list_logo_1 = $value['list']['list_logo_3'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section khách hàng tin cậy-->
<?php if ($hide_show_cus_skin_1 != false) : ?>
    <?php $list_cus_skin_1 = get_field('cus_skin_1', get_the_ID()); ?>
    <?php foreach ($list_cus_skin_1 as $key => $value) : ?>
        <section class="section-homepage-4 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="title">
                    <div class="name">
                        <h2>
                            <?= $value['list']['title'] ?>
                        </h2>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $value['list']['content'] ?>
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="swiper list-partner">
                        <div class="swiper-wrapper">
                            <?php $list_logo = $value['list']['list_logo'];
                            foreach ($list_logo as $list) : ?>
                                <div class="child swiper-slide">
                                    <figure>
                                        <img src="<?php echo esc_url($list['url']) ?>" alt="">
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slider-button-prev-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="30" viewBox="0 0 14 30" fill="none">
                            <path d="M0.00063163 15C0.000631683 13.7885 0.427887 12.5771 1.26657 11.6599L11.5839 0.376407C12.0428 -0.125469 12.8024 -0.125469 13.2613 0.376407C13.7202 0.878282 13.7202 1.70897 13.2613 2.21085L2.94394 13.4943C2.18438 14.325 2.18438 15.6749 2.94394 16.5056L13.2613 27.7892C13.7202 28.291 13.7202 29.1217 13.2613 29.6236C12.8024 30.1255 12.0428 30.1255 11.5839 29.6236L1.26657 18.34C0.427887 17.4228 0.000631577 16.2114 0.00063163 15Z"
                                  fill="#EF7522"/>
                        </svg>
                    </div>
                    <div class="slider-button-next-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="30" viewBox="0 0 15 30" fill="none">
                            <path d="M14.2113 15C14.2113 16.2114 13.784 17.4229 12.9453 18.3401L2.62799 29.6236C2.16909 30.1255 1.40953 30.1255 0.950623 29.6236C0.49172 29.1217 0.49172 28.291 0.950623 27.7892L11.268 16.5057C12.0275 15.675 12.0275 14.3251 11.268 13.4944L0.950623 2.21085C0.49172 1.70897 0.49172 0.878283 0.950623 0.376408C1.40953 -0.125467 2.16909 -0.125467 2.62799 0.376408L12.9453 11.66C13.784 12.5772 14.2113 13.7886 14.2113 15Z"
                                  fill="#EF7522"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section dự án nổi bật-->
<?php if ($hide_show_project_skin_1 != false) : ?>
    <?php $list_project_skin_1 = get_field('list_project_1', get_the_ID()); ?>
    <?php foreach ($list_project_skin_1 as $key => $value) : ?>
        <section class="section-homepage-5 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content">
                    <div class="top">
                        <div class="title">
                            <div class="name">
                                <h2>
                                    <?= $value['list']['title'] ?>
                            </div>
                            <div class="action">
                                <a href="<?= $value['list']['url'] ?>">
                                    <?= $value['list']['btn_text'] ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                                         fill="none">
                                        <path d="M10.9214 12L15.876 7.01968L10.9214 2.03933" stroke="#EF7522"
                                              stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M2.00004 7.01953L15.7373 7.01953" stroke="#EF7522" stroke-width="2.5"
                                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="project-main swiper">
                            <div class="swiper-wrapper">
                                <?php $item = $value['list']['post']; ?>
                                <?php foreach ($item as $post) : ?>
                                    <!-- get customfield trong post -->
                                    <?php $custom_field = get_post_meta($post->ID, 'project_category', true); ?>
                                    <div class="child swiper-slide">
                                        <div class="item">
                                            <div class="left">
                                                <div class="name">
                                                    <h4>
                                                        <?= $post->post_title ?>
                                                    </h4>
                                                </div>
                                                <div class="date">
                                                <span>
                                                    <?= get_the_date('F , Y', $post->ID) ?>
                                                </span>
                                                </div>
                                                <div class="category">
                                                    <p>Hạng mục: <span>
                                                            <?= $custom_field ?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="desc">
                                                    <p>
                                                        <?= wp_trim_words(get_the_excerpt($post->ID, false, true), 25) ?>
                                                    </p>
                                                </div>
                                                <div class="action">
                                                    <a href="<?= get_permalink($post->ID) ?>">
                                                        Chi tiết
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                             viewBox="0 0 18 14" fill="none">
                                                            <path d="M10.9214 11.9546L15.876 7.00005L10.9214 2.04548"
                                                                  stroke="#F3F3F3" stroke-width="2.5"
                                                                  stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M2.00004 7L15.7373 7" stroke="#F3F3F3"
                                                                  stroke-width="2.5"
                                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                                  stroke-linejoin="round"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="image">
                                                    <figure>
                                                        <?php
                                                        $img_thumbnail_project = get_the_post_thumbnail_url($post->ID);
                                                        ?>
                                                        <img src="<?= (!empty($img_thumbnail_project)) ? $img_thumbnail_project : getimage(img_default()) ?>"
                                                             alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <div class="project-orther swiper">
                            <div class="swiper-wrapper">
                                <?php $item = $value['list']['post']; ?>
                                <?php foreach ($item as $post) : ?>
                                    <div class="child swiper-slide">
                                        <figure>
                                            <?php  $img_thumbnail_project_bot = get_the_post_thumbnail_url($post->ID); ?>
                                            <img src="<?= (!empty($img_thumbnail_project_bot)) ? $img_thumbnail_project_bot : getimage(img_default()) ?>"
                                                 alt="">
                                        </figure>
                                        <div class="text">
                                        <span>
                                            <?= $post->post_title ?>
                                        </span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="slider-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="30" viewBox="0 0 14 30"
                                 fill="none">
                                <path d="M0.00063163 15C0.000631683 13.7885 0.427887 12.5771 1.26657 11.6599L11.5839 0.376407C12.0428 -0.125469 12.8024 -0.125469 13.2613 0.376407C13.7202 0.878282 13.7202 1.70897 13.2613 2.21085L2.94394 13.4943C2.18438 14.325 2.18438 15.6749 2.94394 16.5056L13.2613 27.7892C13.7202 28.291 13.7202 29.1217 13.2613 29.6236C12.8024 30.1255 12.0428 30.1255 11.5839 29.6236L1.26657 18.34C0.427887 17.4228 0.000631577 16.2114 0.00063163 15Z"
                                      fill="#EF7522"/>
                            </svg>
                        </div>
                        <div class="slider-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="30" viewBox="0 0 15 30"
                                 fill="none">
                                <path d="M14.2113 15C14.2113 16.2114 13.784 17.4229 12.9453 18.3401L2.62799 29.6236C2.16909 30.1255 1.40953 30.1255 0.950623 29.6236C0.49172 29.1217 0.49172 28.291 0.950623 27.7892L11.268 16.5057C12.0275 15.675 12.0275 14.3251 11.268 13.4944L0.950623 2.21085C0.49172 1.70897 0.49172 0.878283 0.950623 0.376408C1.40953 -0.125467 2.16909 -0.125467 2.62799 0.376408L12.9453 11.66C13.784 12.5772 14.2113 13.7886 14.2113 15Z"
                                      fill="#EF7522"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section tin tức-->
<?php if ($hide_show_news_skin_1 != false) : ?>
    <?php foreach ($news_skin_1 as $key => $value) : ?>
        <section class="section-homepage-6 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="title">
                    <div class="name">
                        <h2>
                            <?= $value['list']['title'] ?>
                        </h2>
                    </div>
                    <div class="desc">
                        <p>
                            <?= $value['list']['content'] ?>
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="top row">
                        <?php
                        $list_post = $value['list']['post'];
                        ?>

                        <?php for ($i = 0; $i < 2; $i++) : ?>
                            <?php $post_news = $list_post[$i];
                            $img_thumbnail_news_top = get_the_post_thumbnail_url($post_news->ID)
                            ?>
                            <div class="col-md-<?= ($i == 0) ? '8' : '4' ?>">
                                <div class="<?= ($i == 0) ? 'col-left' : 'col-right' ?>">
                                    <div class="image">
                                        <figure>
                                            <img src="<?= (!empty($img_thumbnail_news_top)) ? $img_thumbnail_news_top : getimage(img_default()) ?>"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <div class="date">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 20 20" fill="none">
                                                    <path d="M13.9582 2.96675V1.66675C13.9582 1.32508 13.6749 1.04175 13.3332 1.04175C12.9915 1.04175 12.7082 1.32508 12.7082 1.66675V2.91675H7.29153V1.66675C7.29153 1.32508 7.0082 1.04175 6.66653 1.04175C6.32487 1.04175 6.04153 1.32508 6.04153 1.66675V2.96675C3.79153 3.17508 2.69987 4.51675 2.5332 6.50841C2.51653 6.75008 2.71653 6.95008 2.94987 6.95008H17.0499C17.2915 6.95008 17.4915 6.74175 17.4665 6.50841C17.2999 4.51675 16.2082 3.17508 13.9582 2.96675Z"
                                                          fill="white"/>
                                                    <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM12.3667 12.4916L11.95 12.9166H11.9417L9.41667 15.4416C9.30833 15.55 9.08333 15.6666 8.925 15.6833L7.8 15.85C7.39167 15.9083 7.10833 15.6166 7.16667 15.2166L7.325 14.0833C7.35 13.925 7.45833 13.7083 7.56667 13.5916L10.1 11.0666L10.5167 10.6416C10.7917 10.3666 11.1 10.1666 11.4333 10.1666C11.7167 10.1666 12.025 10.3 12.3667 10.6416C13.1167 11.3916 12.875 11.9833 12.3667 12.4916Z"
                                                          fill="white"/>
                                                </svg>
                                            </figure>
                                            <span><?= get_the_date('d F, Y', $post_news->ID) ?></span>
                                        </div>
                                        <div class="name">
                                            <a href="<?= get_permalink($post_news->ID) ?>"><?= $post_news->post_title ?></a>
                                        </div>
                                        <?php if ($i == 1) : ?>
                                            <div class="desc">
                                                <p><?= wp_trim_words(get_the_excerpt($post_news->ID, false, true), 25) ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="bot row">
                        <?php $list_post_2 = $value['list']['post']; ?>

                        <?php
                        $displayed_posts_ids = array(); // Mảng lưu trữ ID của các bài viết đã hiển thị
                        for ($i = 0; $i < 4; $i++) :
                            $post_news_2 = $list_post_2[$i];

                            // Kiểm tra xem bài viết đã hiển thị chưa, nếu đã hiển thị rồi thì bỏ qua
                            if (in_array($post_news_2->ID, $displayed_posts_ids)) {
                                continue;
                            }
                            $displayed_posts_ids[] = $post_news_2->ID; // Thêm ID của bài viết vào mảng
                            $img_thumbnail = get_the_post_thumbnail_url($post_news_2->ID);
                            ?>
                            <div class="col-lg-3 col-6">
                                <div class="child">
                                    <a href="<?= get_permalink($post_news_2->ID) ?>">
                                        <div class="image">
                                            <figure>
                                                <img src="<?= (!empty($img_thumbnail)) ? $img_thumbnail : getimage(img_default()) ?>"
                                                     alt="">
                                            </figure>
                                        </div>
                                        <div class="text">
                                            <div class="date">
                                                <figure>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         viewBox="0 0 20 20" fill="none">
                                                        <path d="M13.9582 2.96675V1.66675C13.9582 1.32508 13.6749 1.04175 13.3332 1.04175C12.9915 1.04175 12.7082 1.32508 12.7082 1.66675V2.91675H7.29153V1.66675C7.29153 1.32508 7.0082 1.04175 6.66653 1.04175C6.32487 1.04175 6.04153 1.32508 6.04153 1.66675V2.96675C3.79153 3.17508 2.69987 4.51675 2.5332 6.50841C2.51653 6.75008 2.71653 6.95008 2.94987 6.95008H17.0499C17.2915 6.95008 17.4915 6.74175 17.4665 6.50841C17.2999 4.51675 16.2082 3.17508 13.9582 2.96675Z"
                                                              fill="#7C7C7B"/>
                                                        <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM12.3667 12.4916L11.95 12.9166H11.9417L9.41667 15.4416C9.30833 15.55 9.08333 15.6666 8.925 15.6833L7.8 15.85C7.39167 15.9083 7.10833 15.6166 7.16667 15.2166L7.325 14.0833C7.35 13.925 7.45833 13.7083 7.56667 13.5916L10.1 11.0666L10.5167 10.6416C10.7917 10.3666 11.1 10.1666 11.4333 10.1666C11.7167 10.1666 12.025 10.3 12.3667 10.6416C13.1167 11.3916 12.875 11.9833 12.3667 12.4916Z"
                                                              fill="#7C7C7B"/>
                                                    </svg>
                                                </figure>
                                                <span><?= get_the_date('d F, Y', $post_news_2->ID) ?></span>
                                            </div>
                                            <div class="name">
                                                <span><?= $post_news_2->post_title ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>

                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <script>
        jQuery(document).ready(function () {
            var mainslideSwiper = new Swiper(".banner-homepage", {
                grabCursor: true,
                slidesPerView: 1,
                spaceBetween: 0,
                slideToClickedSlide: true,
                loop: false,
                pagination: {
                    el: '.slider-pagination',
                    clickable: true,
                },
            });
        });
        jQuery(document).ready(function () {
            var productSlider = new Swiper('.project-main', {
                spaceBetween: 0,
                centeredSlides: false,
                loop: true,
                direction: 'horizontal',
                loopedSlides: 4,
                resizeObserver: true,
            });
            var productThumbs = new Swiper('.project-orther', {
                centeredSlides: false,
                loop: true,
                slideToClickedSlide: true,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.slider-button-next',
                    prevEl: '.slider-button-prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        loopedSlides: 2,
                        spaceBetween: 10
                    },
                    720: {
                        slidesPerView: 3,
                        loopedSlides: 3,
                        spaceBetween: 15
                    },
                    1024: {
                        slidesPerView: 4,
                        loopedSlides: 4,
                        spaceBetween: 20
                    }
                }
            });
            productSlider.controller.control = productThumbs;
            productThumbs.controller.control = productSlider;
        });
    </script>


    <!--about -->

    <!--section về chúng tôi-->
<?php if ($hide_show_about_us_skin_2 != false) : ?>
    <?php $about_us_skin_2 = get_field('about_us_skin_2', get_the_ID()); ?>
    <?php foreach ($about_us_skin_2 as $key => $value) : ?>
        <section class="section-about-1 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content row">
                    <div class="col-lg-6">
                        <div class="col-left">
                            <div class="image">
                                <figure>
                                    <img src="<?= getimage($value['list']['img']) ?>" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-right">
                            <div class="text">
                                <div class="name">
                                    <h2>
                                        <?= $value['list']['title'] ?>
                                    </h2>
                                </div>
                                <div class="desc">
                                    <p>
                                        <?= $value['list']['content'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section tầm nhìn-->
<?php if ($hide_show_view_skin_1 != false) : ?>
    <?php $view_skin_1 = get_field('view_skin_1', get_the_ID()); ?>
    <?php foreach ($view_skin_1 as $key => $value) : ?>
        <section class="section-about-2 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content row">
                    <div class="col-lg-7">
                        <div class="col-left">
                            <div class="image">
                                <div class="image-1">
                                    <figure>
                                        <img src="<?= getimage($value['list']['image_1']) ?>" alt="">
                                    </figure>
                                </div>
                                <div class="image-2">
                                    <figure>
                                        <img src="<?= getimage($value['list']['image_2']) ?>" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="col-right">
                            <div class="text">
                                <div class="name">
                                    <h2><?= $value['list']['title'] ?></h2>
                                </div>
                                <div class="desc">
                                    <div class="child">
                                        <p><?= $value['list']['content'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section sứ mệnh-->
<?php if ($hide_show_mission_skin_2 != false) : ?>
    <?php $mission_skin_2 = get_field('mission_skin_2', get_the_ID()); ?>
    <?php foreach ($mission_skin_2 as $key => $value) : ?>
        <section class="section-about-3 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="title">
                    <div class="name">
                        <h2><?= $value['list']['title'] ?></h2>
                    </div>
                </div>
                <div class="content row">
                    <?php foreach ($value['list']['list_mission'] as $key => $value) : ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= getimage($value['icon']) ?>" alt="">
                                    </figure>
                                </div>
                                <div class="name">
                                    <h4><?= $value['title'] ?></h4>
                                </div>
                                <div class="desc">
                                    <p><?= $value['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section giá trị cốt lõi-->
<?php if ($hide_show_core_values_skin != false) : ?>
    <?php $core_values_skin = get_field('value_skin_3', get_the_ID()); ?>
    <?php foreach ($core_values_skin as $key => $value) : ?>
        <section class="section-about-4 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="title">
                    <div class="name">
                        <h2><?= $value['list']['title'] ?></h2>
                    </div>
                </div>
                <div class="content row">
                    <?php foreach ($value['list']['list_value'] as $key => $value) : ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="child">
                                <div class="image">
                                    <figure>
                                        <img src="<?= getimage($value['icon']) ?>" alt="">
                                    </figure>
                                </div>
                                <div class="name">
                                    <h4><?= $value['title'] ?></h4>
                                </div>
                                <div class="desc">
                                    <p><?= $value['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section khách hàng tin cậy-->
<?php if ($hide_show_cus_skin_2 != false) : ?>
    <?php $list_cus_skin_2 = get_field('cus_skin_2', get_the_ID()); ?>
    <?php  foreach ($list_cus_skin_2 as $key => $value) : ?>
        <section class="section-homepage-4 section-about-5 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="title">
                    <div class="name">
                        <h2><?= $value['list']['title'] ?></h2>
                    </div>
                    <div class="desc">
                        <p><?= $value['list']['content'] ?></p>
                    </div>
                </div>
                <div class="content">
                    <div class="swiper list-partner">
                        <div class="swiper-wrapper">
                            <?php $list_logo = $value['list']['list_logo'];
                            foreach ($list_logo as $list) : ?>
                                <div class="child swiper-slide">
                                    <figure>
                                        <img src="<?php echo esc_url($list['url']) ?>" alt="">
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
    <!--section khách hàng nói gì về chúng tôi-->
<?php if ($hide_show_partners_about_us_skin_3 != false) : ?>
    <?php $partners_about_us_skin_3 = get_field('partners_about_us_skin_3', get_the_ID()); ?>
    <?php foreach ($partners_about_us_skin_3 as $key => $value) : ?>
        <section class="section-homepage-3 section-about-6 block" data-order="<?= $value['no_number'] ?>"
                 style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
                 <?php endif; ?>
                 <?= $value['background']['color_bg'] ?> no-repeat;
                     background-size:cover;">
            <div class="container">
                <div class="content-1">
                    <div class="title">
                        <div class="name">
                            <h2><?= $value['list']['title'] ?></h2>
                        </div>
                        <div class="desc">
                            <p><?= $value['list']['content'] ?></p>
                        </div>
                    </div>
                    <div class="list-feedback">
                        <?php $list_feedback = $value['list']['list']; ?>
                        <div class="swiper-wrapper">
                            <?php foreach ($list_feedback as $k =>$v) :?>

                                <div class="child swiper-slide">
                                    <div class="desc">
                                        <p>
                                            <?= $v['excerpt'] ?>
                                        </p>
                                    </div>
                                    <div class="user">
                                        <div class="avatar">
                                            <figure>
                                                <img src="<?= getimage($v['avatar']) ?>" alt="">
                                            </figure>
                                        </div>
                                        <div class="name">
                                            <h4>
                                                <?= $v['name'] ?>
                                            </h4>
                                            <span>
                                        <?= $v['position'] ?>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="content content-2">
                    <?php $list_logo_1 = $value['list']['list_logo_1'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="content content-3">
                    <?php $list_logo_1 = $value['list']['list_logo_2'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="content content-4">
                    <?php $list_logo_1 = $value['list']['list_logo_3'];
                    foreach ($list_logo_1 as $list) : ?>
                        <div class="child">
                            <figure>
                                <img src="<?php echo esc_url($list['url']) ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
<!--section liên hệ-->
<?php if ($hide_show_contact_skin != false) : ?>
    <?php $contact_skin = get_field('list_contact', get_the_ID()); ?>
    <?php  foreach ($contact_skin as $key => $value) : ?>
    <section class="section-contact block" data-order="<?= $value['no_number'] ?>"
             style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                 url('<?= getimage($value['background']['img_bg']) ?>')
             <?php endif; ?>
             <?= $value['background']['color_bg'] ?> no-repeat;
                 background-size:cover;">
        <div class="container">
            <div class="title">
                <h2><?= $value['list_contact']['title'] ?></h2>
            </div>
            <div class="name">
                <h4><?= $value['list_contact']['company_name'] ?></h4>
            </div>
            <div class="content row">
                <div class="col-lg-8">
                    <div class="col-left">
                        <?php
                            $shortcode = $value['list_contact']['do_shortcode'];
                        ?>
                        <?= do_shortcode($shortcode) ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-right">
                        <div class="contact">
                            <?php
                                $list_contact = $value['list_contact']['contact'];
                                foreach ($list_contact as $k => $v) :

                            ?>
                            <div class="child">
                                <figure>
                                    <img src="<?= getimage($v['image_icon']) ?>" alt="">
                                </figure>
                                <div class="text">
                                    <span>
                                        <?= $v['tittle_contact'] ?>
                                    </span>
                                    <h4>
                                        <?= $v['content_contact'] ?>
                                    </h4>
                                </div>
                            </div>
                                <?php endforeach; ?>
                        </div>
                        <div class="socail">
                            <h4>
                                <?= $value['list_contact']['title_social'] ?>
                            </h4>
                            <div class="list">
                                <?php
                                $list_social = $value['list_contact']['social_list'];
                                ?>
                                <?php foreach ($list_social as $k => $v) : ?>
                                <a href="<?= $v['url_social'] ?>">
                                    <figure>
                                        <img src="<?= getimage($v['icon_social']) ?>" alt="">
                                    </figure>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var blocks = $('.block');
        blocks.sort(function (a, b) {
            var orderA = parseInt($(a).data('order'));
            var orderB = parseInt($(b).data('order'));
            return orderA - orderB;
        });
        console.log(blocks);
        // Di chuyển khối đến cuối container theo thứ tự đã sắp xếp
        blocks.appendTo('.main_body');
    });
</script>

<?php get_header(); ?>
<?php
session_start();
$term_now = get_queried_object();
//section banner
$hide_show_slider_product = get_field('hide_show_slider_product', $term_now);
$list_orther_skin_homepage = get_field('slider_product_skin', $term_now);
// section hỗ trợ
$hide_show_support = get_field('hide_show_contact', $term_now);
// section vì sao chọn
$hide_show_why_choose = get_field('hide_show_select_1', $term_now);
$list_show_why_choose = get_field('select_skin_1', $term_now);
// section sản phẩm
$hide_show_list_product_1 = get_field('hide_show_list_product_1', $term_now);
$list_product_skin_1 = get_field('list_product__skin_1', $term_now);

?>
<!--// section banner-->
<?php if ($hide_show_slider_product != false) : ?>
    <?php $list_orther_skin_homepage = get_field('slider_product_skin', $term_now); ?>
    <?php foreach ($list_orther_skin_homepage as $key => $value) : ?>
        <section class="section-baner-pr">
            <div class="image-banner">
                <figure>
                    <img src="<?= getimage($value['list']['img_banner']) ?>" alt="">
                </figure>
            </div>
            <div class="content">
                <div class="left">
                    <div class="text">
                        <span>
                            <?= $value['list']['title_1'] ?>
                        </span>
                        <div class="title">
                            <h2>
                                <?= $value['list']['title_product'] ?>
                            </h2>
                        </div>
                        <div class="desc">
                            <p>
                                <?= $value['list']['content_product'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="swiper slide-baner-pr">
                        <div class="swiper-wrapper">
                            <?php $list_img = $value['list']['img_product'] ?>
                            <?php foreach ($list_img as $key => $value) : ?>
                                <div class="child swiper-slide">
                                    <figure>
                                        <img src="<?php echo esc_url($value['url']) ?>" alt="">
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
<!--// section hỗ trợ-->
<?php if ($hide_show_support != false) : ?>
    <?php $list_orther_skin_homepage = get_field('contact_skin', $term_now); ?>
    <?php foreach ($list_orther_skin_homepage as $key => $value) : ?>
        <div class="suppot" data-order="<?= $value['no_number'] ?>"
             style="background:<?php if (!empty($value['background']['img_bg'])): ?>
                     url('<?= getimage($value['background']['img_bg']) ?>')
             <?php endif; ?>
             <?php if (!empty($value['background']['color'])): ?>
                 <?= $value['background']['color'] ?>
             <?php endif; ?>
             <?php if (empty($value['background']['color'])): ?>
                     #3E4349;
             <?php endif; ?>
                     background-size:cover;">
            <div class="container">
                <div class="content">
                <span>
                    <?= $value['content']['title'] ?>
                </span>
                    <a href="<?= $value['content']['url'] ?>"
                       class="action">
                        <?= $value['content']['btn_text'] ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
                            <path d="M10.9214 11.9546L15.876 7.00005L10.9214 2.04548" stroke="#F3F3F3"
                                  stroke-width="2.5"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.00004 7L15.7373 7" stroke="#F3F3F3" stroke-width="2.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<!--// section vì sao chọn-->
<?php if ($hide_show_why_choose != false) : ?>
    <?php foreach ($list_show_why_choose as $key => $value) : ?>
        <section class="section-pr-1">
            <div class="container">
                <div class="title">
                    <h2>
                        <?= $value['list']['title'] ?>
                    </h2>
                </div>
                <div class="content">
                    <?php $list_reason = $value['list']['list_reason'] ?>
                    <?php foreach ($list_reason as $key => $value) : ?>
                        <div class="child">
                            <a href="#">
                                <figure>
                                    <img src="<?= getimage($value['image']) ?>" alt="">
                                </figure>
                                <div class="text">
                                <span>
                                    <?= $value['content'] ?>
                                </span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>
<?php
$protocol = isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] === 'https' ? 'https://' : 'http://';
$domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
$path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = $protocol . $domain . $path;

$current_category = get_queried_object();

if ($current_category instanceof WP_Term && is_a($current_category, 'WP_Term')) {
    $parent_category_id = $current_category->parent ?: $current_category->term_id;
    $dmsp = get_terms(array(
        'taxonomy' => 'danh-muc-san-pham',
        'hide_empty' => false,
        'parent' => $parent_category_id,
    ));
    if (get_query_var('paged')) {
        $current_category = $current_category->term_id;
    }
} else {
    $dmsp = array();
}

foreach ($dmsp as $key => $value) {
    $dmsp[$key]->dem = 0;
    $dmsp[$key]->active = 0;

    $term_link = get_term_link($value->term_id);
    $is_current_paged = is_tax('danh-muc-san-pham') && get_query_var('paged') && $term_link == $url;

    if ($term_link == $url || $is_current_paged) {
        $dmsp[$key]->active = 1;
        $current_category = $value->term_id;
    }

    foreach ($dmsp as $k => $item) {
        if ($item->parent == $value->term_id) {
            $dmsp[$key]->dem = 1;
            $item_link = get_term_link($item->term_id);
            $is_current_child_paged = is_tax('danh-muc-san-pham') && get_query_var('paged') && $item_link == $url;

            if ($item_link == $url || $is_current_child_paged) {
                $dmsp[$key]->active = 1;
                $dmsp[$k]->active = 1;
                $current_category = $item->term_id;
            }
        }
    }
}


if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$args = array(
    'post_type' => 'san-pham',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged
);
if ($current_category) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'danh-muc-san-pham',
            'field' => 'id',
            'terms' => $current_category,
        ),
    );
}

$query = new WP_Query($args);
?>

<!-- sản phẩm-->
<section class="section-pr-2">
    <div class="container">
        <div class="title">
            <h2>Sản phẩm</h2>
        </div>
        <div class="content">
            <div class="col-left">
                <div class="name">
                    <?php
                    $current_category = get_queried_object();

                    // Lấy danh sách danh mục cha của danh mục hiện tại
                    $ancestors = get_ancestors($current_category->term_id, 'danh-muc-san-pham');
                    $top_level_category_id = empty($ancestors) ? $current_category->term_id : end($ancestors);
                    $parent_category = get_term($top_level_category_id, 'danh-muc-san-pham');

                    // Lấy danh sách danh mục cấp 2
                    $categories_level2 = get_terms(array(
                        'taxonomy' => 'danh-muc-san-pham',
                        'hide_empty' => false,
                        'parent' => $parent_category->term_id,
                    ));
                    ?>
                    <div>
                        <a class="text-decoration-none" href="<?php echo esc_url(get_term_link($parent_category->term_id)); ?>">
                            <h3 class="mb-3">Danh mục</h3>
                        </a>
                    </div>
                    <?php if (!empty($categories_level2)): ?>
                        <nav>
                            <ul>
                                <?php foreach ($categories_level2 as $category_level2): ?>
                                    <?php
                                    // Lấy danh sách danh mục cấp 3
                                    $categories_level3 = get_terms(array(
                                        'taxonomy' => 'danh-muc-san-pham',
                                        'hide_empty' => false,
                                        'parent' => $category_level2->term_id,
                                    ));
                                    ?>
                                    <li class="category<?php if ($category_level2->term_id == $current_category->term_id) echo ' active'; ?>">
                                        <div class="top">
                                            <a href="<?php echo esc_url(get_term_link($category_level2->term_id)); ?>"><?php echo $category_level2->name; ?></a>
                                            <?php if (!empty($categories_level3)): ?>
                                                <script>
                                                    // nếu đang ở trang danh mục cấp 3 thì tự động click vào class open
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        const cate_lv3 = <?php echo $current_category->term_id; ?>;
                                                        if (cate_lv3) {
                                                            const cate_lv3_el = document.querySelector('.category' + cate_lv3);
                                                            const bot = cate_lv3_el.querySelector('.bot');
                                                            if (cate_lv3_el) {
                                                                $('.open').click();
                                                                bot.style.display = 'block';
                                                            }
                                                        }
                                                    });
                                                </script>
                                            <span class="open<?php if ($category_level2->term_id == $current_category->term_id) echo ' active'; ?>">
                                        <i class="far fa-chevron-down"></i>
                                             </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (!empty($categories_level3)): ?>
                                            <div class="bot">
                                                <ul>
                                                    <?php foreach ($categories_level3 as $category_level3): ?>
                                                        <li class="category<?php if ($category_level3->term_id == $current_category->term_id) echo ' active'; ?>">
                                                            <a href="<?php echo esc_url(get_term_link($category_level3->term_id)); ?>"><?php echo $category_level3->name; ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-right" id="product-section">
                <div class="list">
                    <?php
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="child">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image">
                                        <figure>
                                            <?php the_post_thumbnail(); ?>
                                        </figure>
                                    </div>
                                    <div class="text">
                                        <div class="name">
                                            <span><?php the_title(); ?></span>
                                        </div>
                                        <div class="desc">
                                            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata(); // Khôi phục dữ liệu post gốc
                    else :
                        echo '<h2 class="text-center">Không có sản phẩm nào.</h2>';
                    endif;
                    ?>
                </div>

                <?php if (!empty($query->max_num_pages && $query->max_num_pages > 1)): ?>
                    <nav class="number-page">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(add_query_arg('paged', max(1, $paged - 1), $url)); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                         fill="none">
                                        <path d="M18 34.125C9.105 34.125 1.875 26.895 1.875 18C1.875 9.105 9.105 1.875 18 1.875C26.895 1.875 34.125 9.105 34.125 18C34.125 26.895 26.895 34.125 18 34.125ZM18 4.125C10.35 4.125 4.125 10.35 4.125 18C4.125 25.65 10.35 31.875 18 31.875C25.65 31.875 31.875 25.65 31.875 18C31.875 10.35 25.65 4.125 18 4.125Z"
                                              fill="#1B1717"/>
                                        <path d="M19.8899 24.42C19.6049 24.42 19.3199 24.315 19.0949 24.09L13.7999 18.795C13.3649 18.36 13.3649 17.64 13.7999 17.205L19.0949 11.91C19.5299 11.475 20.2499 11.475 20.6849 11.91C21.1199 12.345 21.1199 13.065 20.6849 13.5L16.1849 18L20.6849 22.5C21.1199 22.935 21.1199 23.655 20.6849 24.09C20.4749 24.315 20.1899 24.42 19.8899 24.42Z"
                                              fill="#1B1717"/>
                                    </svg>
                                </a>
                            </li>
                            <?php
                            // Lặp qua các trang và hiển thị nút tương ứng
                            for ($i = 1; $i <= $query->max_num_pages; $i++) {
                                $is_current = $i == $paged ? ' class="active"' : '';
                                echo '<li' . $is_current . '><a href="' . esc_url(add_query_arg('paged', $i, $url)) . '">' . $i . '</a></li>';
                            }
                            ?>
                            <li>
                                <a href="<?php echo esc_url(add_query_arg('paged', min($query->max_num_pages, $paged + 1), $url)); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                                         fill="none">
                                        <path d="M18 34.125C9.105 34.125 1.875 26.895 1.875 18C1.875 9.105 9.105 1.875 18 1.875C26.895 1.875 34.125 9.105 34.125 18C34.125 26.895 26.895 34.125 18 34.125ZM18 4.125C10.35 4.125 4.125 10.35 4.125 18C4.125 25.65 10.35 31.875 18 31.875C25.65 31.875 31.875 25.65 31.875 18C31.875 10.35 25.65 4.125 18 4.125Z"
                                              fill="#1B1717"/>
                                        <path d="M16.1095 24.42C15.8245 24.42 15.5395 24.315 15.3145 24.09C14.8795 23.655 14.8795 22.935 15.3145 22.5L19.8145 18L15.3145 13.5C14.8795 13.065 14.8795 12.345 15.3145 11.91C15.7495 11.475 16.4695 11.475 16.9045 11.91L22.1995 17.205C22.6345 17.64 22.6345 18.36 22.1995 18.795L16.9045 24.09C16.6795 24.315 16.3945 24.42 16.1095 24.42Z"
                                              fill="#1B1717"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lấy phần tử có class 'active' (đã được chọn)
        var activeCategory = document.querySelector('.category.active');

        // Nếu có phần tử được chọn, thực hiện scroll xuống
        if (activeCategory) {
            var offsetTop = activeCategory.offsetTop + -600;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
    var swiper = new Swiper(".slide-baner-pr", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 3,
            slideShadows: true
        },
        keyboard: {
            enabled: true
        },
        mousewheel: {
            thresholdDelta: 70
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
    });
    $(".open").click(function () {
        var container = $(this).parents(".category");
        var answer = container.find(".bot");

        answer.slideToggle(300);

        if (container.hasClass("active")) {
            container.removeClass("active");
        } else {
            container.addClass("active");
        }
    });


</script>
<?php get_footer(); ?>

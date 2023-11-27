<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
$args = array(
    'post_type' => 'post',
    'post_status ' => 'publish',
    's' => no_sql_injection(xss($_GET['s'])),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query = new WP_Query($args);
$args = array(
    'post_type' => 'san-pham',
    'post_status ' => 'publish',
    's' => no_sql_injection(xss($_GET['s'])),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query_product = new WP_Query($args);
$args = array(
    'post_type' => 'du-an',
    'post_status ' => 'publish',
    's' => no_sql_injection(xss($_GET['s'])),
    'sentence' => true,
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query_project = new WP_Query($args);
get_header();
?>
<style>
    .result {
        background: url('<?php echo get_template_directory_uri(); ?>/dist/img/img-1.png') center/cover no-repeat;
        background-size: 100% 100%;
        text-align: center;
        color: white;
        padding: 16rem 0;
    }

    .result img {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .underline {
        display: block;
        margin: 0 auto;
        width: 100px;
        height: 2px;
        background: green;
        margin-bottom: 20px;
    }

    .card {
        margin-bottom: 20px;
    }
    .custom-img{
        width: 100%;
        height: 300px;
        /*ảnh không thể bị vỡ*/
        object-fit: cover;
        /*bo tròn ảnh*/
        border-radius: 10px;
    /*độ đục của ảnh*/
        opacity: 0.8;
    }

</style>

<div class="result mb-3">
    <h3 class="fs-1 text-uppercase">
        <?php
        /* translators: %s: search query. */
        printf(esc_html__('Kết quả tìm kiếm: %s'), '' . get_search_query() . '');
        ?>
    </h3>
</div>
<?php if ($query->have_posts()): ?>
    <div class="container">
        <h2 class="text-center text-uppercase fs-1">Tin tức</h2>
        <span class="underline"></span>
        <div class="row">
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 g-3">
                    <div class="card border-0">
                        <?php
                        $img_post_news = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <img src="<?= (!empty($img_post_news)) ? $img_post_news : getimage(img_default()) ?>"
                             alt="" class="custom-img">
                        <div class="card-body">
                            <a href="<?= the_permalink(); ?>" class="text-decoration-none text-dark">
                                <h3 class="card-title fw-bold fs-1 ">
                                    <?= the_title(); ?>
                                </h3>
                            </a>
                            <p class="card-text fw-normal fs-3">
                                <?= wp_trim_words(get_the_excerpt(get_the_ID(), false, true), 25); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>
<?php if ($query_product->have_posts()): ?>
    <div class="container">
        <h2 class="text-center text-uppercase fs-1">Sản phẩm</h2>
        <span class="underline"></span>
        <div class="row">
            <?php while ($query_product->have_posts()): $query_product->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 g-3">
                    <div class="card border-0">
                        <?php
                        $img_post_product = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <img src="<?= (!empty($img_post_product)) ? $img_post_product : getimage(img_default()) ?>"
                             alt="" class="custom-img">
                        <div class="card-body">
                            <a href="<?= the_permalink(); ?>" class="text-decoration-none text-dark">
                                <h3 class="card-title fw-bold fs-1 ">
                                    <?= the_title(); ?>
                                </h3>
                            </a>
                            <p class="card-text fw-normal fs-3">
                                <?= wp_trim_words(get_the_excerpt(get_the_ID(), false, true), 25); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>
<?php if ($query_project->have_posts()): ?>
    <div class="container">
        <h2 class="text-center text-uppercase fs-1">Dự án</h2>
        <span class="underline"></span>
        <div class="row">
            <?php while ($query_project->have_posts()): $query_project->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 g-3">
                    <div class="card border-0">
                        <?php
                        $img_post_project = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <img src="<?= (!empty($img_post_project)) ? $img_post_project : getimage(img_default()) ?>"
                             alt="" class="custom-img">
                        <div class="card-body">
                            <a href="<?= the_permalink(); ?>" class="text-decoration-none text-dark">
                                <h3 class="card-title fw-bold fs-1 ">
                                    <?= the_title(); ?>
                                </h3>
                            </a>
                            <p class="card-text fw-normal fs-3">
                                <?= wp_trim_words(get_the_excerpt(get_the_ID(), false, true), 25); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>
<?php if (!$query_product->have_posts() && !$query->have_posts() && !$query_project->have_posts()): ?>
    <h2 class="text-center text-uppercase fs-1">Kết quả tìm kiếm không khả dụng</h2>
    <span class="underline"></span>
<?php endif; ?>
<?php get_footer(); ?>

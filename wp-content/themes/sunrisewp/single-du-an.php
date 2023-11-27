<?php get_header(); ?>
<?php
// section chi tiết dự án
$hide_show_project_detail = get_field('hide_show_project_detail', get_the_ID());
// section hình ảnh chi tiết dự án
$hide_show_list_image_project = get_field('hide_show_list_image_project', get_the_ID());

?>
<!--section chi tiết dự án-->
<?php if ($hide_show_project_detail != false ) :?>
<?php $project_detail_skin = get_field('project_detail_skin', get_the_ID()); ?>
<?php foreach ($project_detail_skin as $key => $value) : ?>
<section class="section-detail-prj-1" data-order="<?= $value['no_number'] ?>"
         style="background:<?php
         if (!empty($value['background']['img_bg'])): ?>
                 url('<?= getimage($value['background']['img_bg']) ?>')
         <?php endif; ?>
         <?= $value['background']['color_bg'] ?> no-repeat;
                 ">
    <div class="content">
        <div class="col-left">
            <div class="text">
                <div class="title">
                    <h3><?= $value['list']['title'] ?></h3>
                </div>
                <div class="name">
                    <h4><?= the_title() ?></h4>
                </div>
                <div class="category">
                    <p>Hạng mục: <span>
                            <?php
                             echo  get_field('project_category');
                            ?>
                        </span> </p>
                </div>
                <div class="desc">
                    <p>
                        <?php
                        the_content();
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="image">
                <figure>
                    <img src="<?= getimage($value['list']['img_product']) ?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>
<?php endif; ?>
<!-- section hình ảnh chi tiết dự án -->
<?php if ($hide_show_list_image_project != false) : ?>
<?php $list_image_project = get_field('list_image_project_skin', get_the_ID()); ?>
<?php foreach ($list_image_project as $key => $value) : ?>
<section class="section-detail-prj-2">
    <div class="container">
        <div class="title">
            <h2><?= $value['list']['title'] ?></h2>
        </div>
        <div class="content js-gallery">
            <?php foreach ($value['list']['image'] as $k => $v) : ?>
            <div class="child" data-src="<?php echo esc_url($v['url']) ?>">
                <figure>
                   <img src="<?php echo esc_url($v['url']) ?>" alt="">
                </figure>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>
<?php endif; ?>

<script>
    var elements = document.getElementsByClassName('js-gallery');
    for (let item of elements) {
        lightGallery(item, {
            allowMediaOverlap: true,
            animateThumb: true,
            toggleThumb: true,
            share:false,
            plugins: [lgThumbnail, lgFullscreen],
            fullScreen: true,
            showZoomInOutIcons: false,
            actualSize: true,
        })
    }
</script>

<?php get_footer(); ?>
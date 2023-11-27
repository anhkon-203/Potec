<?php get_header(); ?>
<?php /* Template Name: Tin tức - Theme */ ?>
<?php
$list_new = get_field('list',get_the_ID());

?>
<section class="section-news-1">
    <div class="container">
        <div class="title">
            <h2><?= ($list_new['title_1']) ?></h2>
        </div>
        <div class="content row">
            <div class="col-lg-8">
                <div class="col-left">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    ?>
                    <?php $query = new WP_Query($args); ?>
                    <?php  while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="news-main">
                        <div class="image">
                            <?php
                            $img_post_1 = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <figure>
                                <img src="<?= (!empty($img_post_1)) ? $img_post_1 : getimage(img_default()) ?>"
                                      alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="text">
                            <div class="name">
                                <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                            </div>
                            <div class="desc">
                                <p><?= the_excerpt() ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged'=> $paged,

                        );
                    ?>
                    <div class="news-other">
                        <div class="list">
                            <?php $the_query = new WP_Query($args); ?>
                            <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="child">
                                <div class="image">
                                    <?php
                                    $img_post_2 = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    ?>
                                    <figure>
                                        <img src="<?= (!empty($img_post_2)) ? $img_post_2 : getimage(img_default()) ?>"
                                             alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="text">
                                    <div class="top">
                                        <div class="date">
                                            <figure>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M13.9592 2.96663V1.66663C13.9592 1.32496 13.6758 1.04163 13.3342 1.04163C12.9925 1.04163 12.7092 1.32496 12.7092 1.66663V2.91663H7.29251V1.66663C7.29251 1.32496 7.00918 1.04163 6.66751 1.04163C6.32584 1.04163 6.04251 1.32496 6.04251 1.66663V2.96663C3.79251 3.17496 2.70084 4.51663 2.53418 6.50829C2.51751 6.74996 2.71751 6.94996 2.95084 6.94996H17.0508C17.2925 6.94996 17.4925 6.74163 17.4675 6.50829C17.3008 4.51663 16.2092 3.17496 13.9592 2.96663Z" fill="#7C7C7B"/>
                                                    <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM12.3667 12.4916L11.95 12.9166H11.9417L9.41667 15.4416C9.30833 15.55 9.08333 15.6666 8.925 15.6833L7.8 15.85C7.39167 15.9083 7.10833 15.6166 7.16667 15.2166L7.325 14.0833C7.35 13.925 7.45833 13.7083 7.56667 13.5916L10.1 11.0666L10.5167 10.6416C10.7917 10.3666 11.1 10.1666 11.4333 10.1666C11.7167 10.1666 12.025 10.3 12.3667 10.6416C13.1167 11.3916 12.875 11.9833 12.3667 12.4916Z" fill="#7C7C7B"/>
                                                </svg>
                                            </figure>
                                            <span><?= the_date() ?></span>
                                        </div>
                                        <div class="share">
                                            <span>Chia sẻ</span>
                                            <div class="socail">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                                <figure>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <g clip-path="url(#clip0_512_2454)">
                                                                <path d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51563 10.9932 3.51563C11.9776 3.51563 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z" fill="#1B1717" fill-opacity="0.7"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_512_2454">
                                                                <rect width="18" height="18" fill="white"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </figure>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                                <figure>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <g clip-path="url(#clip0_512_2455)">
                                                                <path d="M5.66262 16.3125C12.4534 16.3125 16.1687 10.6851 16.1687 5.80646C16.1687 5.64825 16.1652 5.48653 16.1582 5.32833C16.8809 4.80566 17.5046 4.15825 18 3.41653C17.3269 3.71601 16.6122 3.9116 15.8804 3.99661C16.651 3.53474 17.2279 2.80917 17.5043 1.95439C16.7794 2.38398 15.9867 2.68702 15.1601 2.85052C14.6031 2.25873 13.8667 1.8669 13.0648 1.7356C12.2628 1.6043 11.4399 1.74085 10.7233 2.12413C10.0067 2.50742 9.43635 3.11609 9.10039 3.85604C8.76442 4.596 8.68157 5.42602 8.86465 6.21778C7.39687 6.14413 5.96095 5.76284 4.64999 5.09863C3.33902 4.43443 2.18227 3.50214 1.25473 2.3622C0.7833 3.17499 0.639042 4.1368 0.851273 5.05213C1.0635 5.96746 1.6163 6.76765 2.3973 7.29005C1.81097 7.27144 1.23748 7.11357 0.724219 6.8295V6.87521C0.723693 7.72817 1.01857 8.555 1.55873 9.21514C2.09889 9.87528 2.85099 10.328 3.68719 10.4963C3.14404 10.6449 2.57399 10.6666 2.02113 10.5596C2.25709 11.2931 2.71618 11.9347 3.33433 12.3948C3.95248 12.8549 4.69884 13.1105 5.46926 13.126C4.16132 14.1534 2.54563 14.7107 0.882422 14.708C0.587465 14.7076 0.292799 14.6895 0 14.6539C1.68964 15.7379 3.65515 16.3136 5.66262 16.3125Z" fill="#1B1717" fill-opacity="0.7"/>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_512_2455">
                                                                <rect width="18" height="18" fill="white"/>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name">
                                        <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php if(!empty($the_query->max_num_pages && $the_query->max_num_pages > 1)): ?>
                        <nav class="number-page">
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url(add_query_arg('paged', max(1, $paged - 1))); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                            <path d="M18 34.125C9.105 34.125 1.875 26.895 1.875 18C1.875 9.105 9.105 1.875 18 1.875C26.895 1.875 34.125 9.105 34.125 18C34.125 26.895 26.895 34.125 18 34.125ZM18 4.125C10.35 4.125 4.125 10.35 4.125 18C4.125 25.65 10.35 31.875 18 31.875C25.65 31.875 31.875 25.65 31.875 18C31.875 10.35 25.65 4.125 18 4.125Z" fill="#1B1717" />
                                            <path d="M19.8899 24.42C19.6049 24.42 19.3199 24.315 19.0949 24.09L13.7999 18.795C13.3649 18.36 13.3649 17.64 13.7999 17.205L19.0949 11.91C19.5299 11.475 20.2499 11.475 20.6849 11.91C21.1199 12.345 21.1199 13.065 20.6849 13.5L16.1849 18L20.6849 22.5C21.1199 22.935 21.1199 23.655 20.6849 24.09C20.4749 24.315 20.1899 24.42 19.8899 24.42Z" fill="#1B1717" />
                                        </svg>
                                    </a>
                                </li>
                                <?php
                                // Lặp qua các trang và hiển thị nút tương ứng
                                for ($i = 1; $i <= $the_query->max_num_pages; $i++) {
                                    $is_current = $i == $paged ? ' class="active"' : '';
                                    echo '<li' . $is_current . '><a href="' . esc_url(add_query_arg('paged', $i)) . '">' . $i . '</a></li>';
                                }
                                ?>
                                <a href="<?php echo esc_url(add_query_arg('paged', min($the_query->max_num_pages, $paged + 1))); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                        <path d="M18 34.125C9.105 34.125 1.875 26.895 1.875 18C1.875 9.105 9.105 1.875 18 1.875C26.895 1.875 34.125 9.105 34.125 18C34.125 26.895 26.895 34.125 18 34.125ZM18 4.125C10.35 4.125 4.125 10.35 4.125 18C4.125 25.65 10.35 31.875 18 31.875C25.65 31.875 31.875 25.65 31.875 18C31.875 10.35 25.65 4.125 18 4.125Z" fill="#1B1717" />
                                        <path d="M16.1095 24.42C15.8245 24.42 15.5395 24.315 15.3145 24.09C14.8795 23.655 14.8795 22.935 15.3145 22.5L19.8145 18L15.3145 13.5C14.8795 13.065 14.8795 12.345 15.3145 11.91C15.7495 11.475 16.4695 11.475 16.9045 11.91L22.1995 17.205C22.6345 17.64 22.6345 18.36 22.1995 18.795L16.9045 24.09C16.6795 24.315 16.3945 24.42 16.1095 24.42Z" fill="#1B1717" />
                                    </svg>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-right">
                    <div class="title">
                        <h4><?= $list_new['title_2'] ?></h4>
                    </div>
                    <div class="list">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'noi-bat',
                                ),
                            ),
                            'posts_per_page' => 4,
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();

                                ?>
                                <div class="child">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure>
                                            <?php
                                            $post_img = get_the_post_thumbnail_url();
                                            ?>
                                            <img src="<?= (!empty($post_img)) ? $post_img : getimage(img_default()) ?>"
                                                 alt="">
                                        </figure>
                                        <div class="text">
                                            <div class="date">
                                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                                            </div>
                                            <div class="name">
                                                <span><?php the_title(); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
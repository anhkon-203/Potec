<?php get_header(); ?>

<section class="section-news-1 news-detail">
    <div class="container">
        <div class="content row">
            <div class="col-lg-8">
                <div class="col-left">
                    <div class="detail">
                        <div class="title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="action">
                            <div class="date">
                                <figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M13.9592 2.96675V1.66675C13.9592 1.32508 13.6758 1.04175 13.3342 1.04175C12.9925 1.04175 12.7092 1.32508 12.7092 1.66675V2.91675H7.29251V1.66675C7.29251 1.32508 7.00918 1.04175 6.66751 1.04175C6.32584 1.04175 6.04251 1.32508 6.04251 1.66675V2.96675C3.79251 3.17508 2.70084 4.51675 2.53418 6.50841C2.51751 6.75008 2.71751 6.95008 2.95084 6.95008H17.0508C17.2925 6.95008 17.4925 6.74175 17.4675 6.50841C17.3008 4.51675 16.2092 3.17508 13.9592 2.96675Z" fill="#7C7C7B"/>
                                        <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM12.3667 12.4916L11.95 12.9166H11.9417L9.41667 15.4416C9.30833 15.55 9.08333 15.6666 8.925 15.6833L7.8 15.85C7.39167 15.9083 7.10833 15.6166 7.16667 15.2166L7.325 14.0833C7.35 13.925 7.45833 13.7083 7.56667 13.5916L10.1 11.0666L10.5167 10.6416C10.7917 10.3666 11.1 10.1666 11.4333 10.1666C11.7167 10.1666 12.025 10.3 12.3667 10.6416C13.1167 11.3916 12.875 11.9833 12.3667 12.4916Z" fill="#7C7C7B"/>
                                    </svg>
                                </figure>
                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                            </div>
                            <div class="share">
                                <span>Chia sẻ</span>
                                <div class="socail">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                    <figure>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_616_3944)">
                                                    <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="#1B1717" fill-opacity="0.7"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_616_3944">
                                                        <rect width="20" height="20" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </figure>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                        <figure>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_616_3945)">
                                                    <path d="M6.2918 18.1251C13.8371 18.1251 17.9652 11.8724 17.9652 6.45167C17.9652 6.27589 17.9613 6.0962 17.9535 5.92042C18.7566 5.33967 19.4496 4.62033 20 3.7962C19.2521 4.12896 18.458 4.34627 17.6449 4.44074C18.5011 3.92755 19.1421 3.12135 19.4492 2.17159C18.6438 2.64892 17.763 2.98563 16.8445 3.1673C16.2257 2.50976 15.4075 2.07439 14.5164 1.9285C13.6253 1.78261 12.711 1.93433 11.9148 2.3602C11.1186 2.78607 10.4848 3.46238 10.1115 4.28455C9.73825 5.10672 9.64619 6.02897 9.84961 6.9087C8.21874 6.82686 6.62328 6.40321 5.16665 5.6652C3.71002 4.9272 2.42474 3.89132 1.39414 2.62472C0.870333 3.52782 0.710047 4.59649 0.945859 5.61353C1.18167 6.63057 1.79589 7.51966 2.66367 8.10011C2.01219 8.07943 1.37498 7.90402 0.804688 7.58839V7.63917C0.804104 8.58691 1.13175 9.50561 1.73192 10.2391C2.3321 10.9726 3.16777 11.4756 4.09687 11.6626C3.49338 11.8277 2.85999 11.8518 2.2457 11.7329C2.50788 12.548 3.01798 13.2609 3.70481 13.7721C4.39164 14.2833 5.22093 14.5673 6.07695 14.5845C4.62369 15.726 2.82848 16.3452 0.980469 16.3423C0.652739 16.3418 0.325333 16.3217 0 16.2821C1.87738 17.4866 4.06128 18.1263 6.2918 18.1251Z" fill="#1B1717" fill-opacity="0.7"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_616_3945">
                                                        <rect width="20" height="20" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="desc">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <div class="author">
                        <?php
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author_meta('display_name', $author_id);
                        ?>
                        <h4><?php echo esc_html($author_name); ?></h4>
                    </div>

                    <nav class="tag" style="margin-top: 10px !important;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <?php
                            $post_tags = get_the_tags();
                            if ($post_tags) {
                                $tag_list = array();
                                foreach ($post_tags as $tag) {
                                    $tag_list[] = '<li style="display: inline-block; margin-right: 10px !important;"><a>#' . esc_html($tag->name) . '</a></li>';
                                }
                                echo implode(', ', $tag_list);
                            }
                            ?>
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-right">
                    <div class="title">
                        <h4>Tin nổi bật</h4>
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
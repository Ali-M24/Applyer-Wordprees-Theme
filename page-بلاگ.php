<?php
/* Template Name: Archives */
get_header();
?>
<div class="BlogBody">
    <div class="blog-content">
        <div class="blog-top-section">
            <?php
            $uri = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
            $current_page_number = is_numeric(end($uri)) ? end($uri) : (get_query_var('paged') ? get_query_var('paged') : 1);
            $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'paged' => $current_page_number));
            $the_suggested_query = new WP_Query(array(
                'posts_per_page' => 3,
            ));
            $the_bold_query = new WP_Query(array(
                'posts_per_page' => 1,
            ));
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            ?>
            <?php if ($the_bold_query->have_posts()) : while ($the_bold_query->have_posts()) : $the_bold_query->the_post(); ?>
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'my-fun-size');
                        $thumbnail_url = $thumbnail_data[0];
                    }
                    ?>
                    <div style="background-size: cover; background-image: url('<?php echo $thumbnail_url ?>');" class="bold-post">
                        <div class="bold-post-info">
                            <a href="<?php the_permalink(); ?>">
                                <span class="bold-post-info-title">
                                    <?php the_title() ?>
                                </span>
                            </a>
                            <div class="bold-post-info-desc">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1Z" />
                                    </svg><?php comments_number(); ?></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="white" d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3A1.5 1.5 0 0 1 21 6.5V10z" />
                                    </svg>
                                    <?php get_the_date(); ?></span>

                            </div>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            else : endif; ?>

            <div class="suggested-post-box">
                <span class="post-box-title">پیشنهادی</span>
                <?php if ($the_suggested_query->have_posts()) : while ($the_suggested_query->have_posts()) : $the_suggested_query->the_post(); ?>
                        <div class="suggested-post">
                            <div class="little-post-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="post-info">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="title"><?php the_title(); ?></div>
                                </a>
                                <div class="post-info-desc">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1Z" />
                                        </svg><?php comments_number(); ?></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3A1.5 1.5 0 0 1 21 6.5V10z" />
                                        </svg><?php get_the_date(); ?></span>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                else : endif; ?>

            </div>
        </div>
        <div class="new-posts">
            <h3 class="new-title">جدیدترین مقالات</h3>
            <div class="posts">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post-decoration">
                            <div class="post-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-title"><?php the_title(); ?></div>
                            </a>
                            <div class="post-desc"><?php the_excerpt() ?></div>
                            <div class="post-info-desc">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1Z" />
                                    </svg><?php comments_number(); ?></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19.5 4h-3V2.5a.5.5 0 0 0-1 0V4h-7V2.5a.5.5 0 0 0-1 0V4h-3A2.503 2.503 0 0 0 2 6.5v13A2.503 2.503 0 0 0 4.5 22h15a2.502 2.502 0 0 0 2.5-2.5v-13A2.502 2.502 0 0 0 19.5 4zM21 19.5a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5V11h18v8.5zm0-9.5H3V6.5C3 5.672 3.67 5 4.5 5h3v1.5a.5.5 0 0 0 1 0V5h7v1.5a.5.5 0 0 0 1 0V5h3A1.5 1.5 0 0 1 21 6.5V10z" />
                                    </svg>
                                    <?php echo get_the_date(); ?></span>
                            </div class="post-info-desc">
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                else : endif; ?>
            </div>
            <div class="blog-pagination">
                <!--                    <button class="pagination-btn selected">1</button>-->
                <!--                    <button class="pagination-btn">2</button>-->
                <!--                    <button class="pagination-btn">3</button>-->
                <!--                    <button class="pagination-btn">4</button>-->
                <?php
                echo paginate_links(array(
                    'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total'        => $wp_query->max_num_pages,
                    'current'      => max(1, $current_page_number),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf('<i></i> %1$s', __('قبلی', 'text-domain')),
                    'next_text'    => sprintf('%1$s <i></i>', __('بعدی', 'text-domain')),
                    'add_args'     => false,
                    'add_fragment' => '',
                ));
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
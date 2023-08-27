<?php get_header(); ?>
<div class="BlogBody">
     <div class="blog-content">
          <?php
          $uri = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));
          $current_page_number = is_numeric(end($uri)) ? end($uri) : (get_query_var('paged') ? get_query_var('paged') : 1);
          $wp_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 10, 'paged' => $current_page_number));
          $the_suggested_query = new WP_Query(array(
               'posts_per_page' => 3,
          ));
          ?>
          <div style="margin-top: 64px;" class="new-posts">
               <h3 class="new-title">دسته بندی ها</h3>
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
               <div class="pagination__links">
                    <?php
                    echo paginate_links(array(
                         'total' => $wp_query->max_num_pages,
                         'current' => max(1, $current_page_number),
                    ));
                    ?>
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
                         'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
                         'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
                         'add_args'     => false,
                         'add_fragment' => '',
                    ));
                    ?>
               </div>
          </div>
     </div>
</div>
<?php get_footer(); ?>
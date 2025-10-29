<div class="container pt-100 pb-50">
   <div class="row align-items-center mb-40">
      <div class="col-xl-5 col-lg-4 mb-lg-20">
         <h2 class="section-title mb-0">Explore More Categories</h2>
      </div>
      <div class="col-xl-7 col-lg-8">
         <ul class="nav nav-tabs news-tablist border-0 d-flex justify-content-lg-end" role="tablist">
            <?php
            $categories = get_categories(array(
               'orderby'    => 'count',
               'order'      => 'DESC',
               'number'     => 6,
               'hide_empty' => true,
            ));

            $is_first_tab = true;
            foreach ($categories as $category) :
               $tab_id = 'tab_' . $category->slug;
            ?>
               <li class="nav-item">
                  <button class="nav-link <?php echo $is_first_tab ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo esc_attr($tab_id); ?>" type="button" role="tab"><?php echo esc_html($category->name); ?></button>
               </li>
            <?php
               $is_first_tab = false;
            endforeach;
            ?>
         </ul>
      </div>
   </div>
   <div class="tab-content product-tab-content">
      <?php
      $is_first_tab = true;
      foreach ($categories as $category) :
         $tab_id = 'tab_' . $category->slug;
         $category_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 2,
            'post_status'    => 'publish',
            'cat'            => $category->term_id,
            'orderby'        => 'date',
            'order'          => 'DESC',
         ));
      ?>
         <div class="tab-pane fade <?php echo $is_first_tab ? 'show active' : ''; ?>" id="<?php echo esc_attr($tab_id); ?>" role="tabpanel">
            <div class="row justify-content-center">
               <?php
               if ($category_query->have_posts()) :
                  while ($category_query->have_posts()) : $category_query->the_post();
                     $featured_image = has_post_thumbnail()
                        ? get_the_post_thumbnail_url(get_the_ID(), 'homepage-tab-img')
                        : get_template_directory_uri() . '/assets/img/new-stories/news-1.jpg';
               ?>
                     <div class="col-md-6">
                        <div class="news-card mb-50">
                           <div class="hover-anim-img round-6 overflow-hidden mb-30">
                              <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="round-6 transition">
                           </div>
                           <div class="news-info text-center">
                              <ul class="news-metainfo list-unstyle mb-15">
                                 <li><i class="ri-time-line"></i><?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp'))) . ' ago'; ?></li>
                                 <li><i class="ri-message-3-line"></i><?php echo esc_html(get_comments_number()); ?> Comments</li>
                                 <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></li>
                              </ul>
                              <h3 class="fs-36 fw-semibold ls-3 mb-22">
                                 <a href="<?php the_permalink(); ?>" class="hover-anim-blue"><?php echo esc_html(get_the_title()); ?></a>
                              </h3>
                              <a href="<?php the_permalink(); ?>" class="btn style-two fw-semibold">Read More<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/long-arrow-blue-2.svg" alt="Arrow"></a>
                           </div>
                        </div>
                     </div>
                  <?php
                  endwhile;
                  wp_reset_postdata();
               else :
                  ?>
                  <div class="col-md-12">
                     <p>No posts found in this category.</p>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      <?php
         $is_first_tab = false;
      endforeach;
      ?>
   </div>
</div>
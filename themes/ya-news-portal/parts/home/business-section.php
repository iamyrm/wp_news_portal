<div class="container pb-70">
   <div class="row align-items-center mb-25">
      <div class="col-md-6 mb-sm-15">
         <h5 class="section-subtitle fw-semibold mb-0">Business Posts</h5>
      </div>
      <div class="col-md-6 text-md-end">
         <?php
         $business_cat = get_category_by_slug('business');
         if ($business_cat) {
            $business_link = get_category_link($business_cat->term_id);
         }
         ?>
         <a href="<?php echo esc_url($business_link); ?>" class="link style-three fw-bold">
            See All Business Posts <i class="ri-arrow-right-s-line"></i>
         </a>
      </div>
   </div>
   <div class="row justify-content-center">


      <?php
      $args = array(
         'post_type'      => 'post',
         'category_name'  => 'business',
         'posts_per_page' => 6,
         'orderby'        => 'date',
         'order'          => 'DESC'
      );

      // The Query
      $custom_business_query = new WP_Query($args);



      // The Loop
      if ($custom_business_query->have_posts()) :
         while ($custom_business_query->have_posts()) : $custom_business_query->the_post(); ?>
            <div class="col-xl-4 col-md-6">
               <div class="news-card style-two mb-30">
                  <?php
                  $featured_image = has_post_thumbnail()
                     ? get_the_post_thumbnail_url(get_the_ID(), 'homepage-business-img')
                     : get_template_directory_uri() . '/assets/img/featured/news-1.jpg';
                  ?>
                  <div class="hover-anim-img mb-15 round-6 overflow-hidden">
                     <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_html(get_the_title()); ?>" class="round-6 transition">
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-9">
                        <li>
                           <i class="ri-time-line"></i>
                           <?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp'))) . ' ago'; ?>
                        </li>
                        <li>
                           <?php
                           $categories = get_the_category();
                           if (!empty($categories)) {
                              $first_cat = $categories[0];
                              echo '<a href="' . esc_url(get_category_link($first_cat->term_id)) . '">' . esc_html($first_cat->name) . '</a>';
                           }
                           ?>
                        </li>
                     </ul>
                     <h3 class="fs-22 ls-3 xmb-4"><a href="news-details-style-one.html"
                           class="hover-anim-blue"><?php echo esc_html(get_the_title()); ?></a></h3>
                     <p>
                        <?php
                        if (has_excerpt()) {
                           echo esc_html(get_the_excerpt());
                        } else {
                           echo esc_html(wp_trim_words(get_the_content(), 15, '...'));
                        }
                        ?>
                     </p>

                     <div class="news-action-wrap d-flex align-items-center">
                        <div class="news-action-status lh-1 d-flex align-items-center">
                           <ul class=" list-unstyle d-flex align-items-center">
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/heart.png" alt="Heart">
                              </li>
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/angry.png" alt="Angry">
                              </li>
                           </ul>
                           <span class="fs-14 ls-2 fw-medium">34</span>
                        </div>
                        <div class="news-action position-relative">
                           <span><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/smile-plus.svg" alt="Smile"></span>
                           <ul class="d-flex align-items-center justify-content-between list-unstyle lh-1">
                              <li><button class="submit bg-transparent p-0 border-0"><img
                                       src="<?php echo get_template_directory_uri() ?>/assets/img/icons/thumb.png" alt="Thumb"></button></li>
                              <li><button class="submit bg-transparent p-0 border-0"><img
                                       src="<?php echo get_template_directory_uri() ?>/assets/img/icons/crying.png" alt="Thumb"></button></li>
                              <li><button class="submit bg-transparent p-0 border-0"><img
                                       src="<?php echo get_template_directory_uri() ?>/assets/img/icons/heart.png" alt="Thumb"></button></li>
                              <li><button class="submit bg-transparent p-0 border-0"><img
                                       src="<?php echo get_template_directory_uri() ?>/assets/img/icons/angry.png" alt="Thumb"></button></li>
                              <li><button class="submit bg-transparent p-0 border-0"><img
                                       src="<?php echo get_template_directory_uri() ?>/assets/img/icons/worried.png" alt="Thumb"></button></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile;
      else : ?>
         <p>No posts found.</p>
      <?php endif;

      // Reset Post Data
      wp_reset_postdata();
      ?>
   </div>
</div>
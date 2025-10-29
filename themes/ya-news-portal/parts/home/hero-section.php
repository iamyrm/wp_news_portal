<div class="hero-wrap style-one pt-70 pb-70">
   <div class="container">
      <div class="row">
         <?php
         $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC'
         );

         $latest_posts = new WP_Query($args);
         $index = 0;

         if ($latest_posts->have_posts()) : ?>
            <div class="col-xl-8">
               <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                  <?php if ($index === 0) : ?>
                     <div class="news-card style-one position-relative index-1 round-5 mb-30">
                        <div class="circle-text-wrap position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/circle-text.png" alt="Fire" class="circle-text">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/fire.png" alt="Fire" class="center-img position-absolute">
                        </div>
                        <?php
                        $featured_image = has_post_thumbnail()
                           ? get_the_post_thumbnail_url(get_the_ID(), 'homepage-hero-img')
                           : get_template_directory_uri() . '/assets/img/hero/news-1.jpg';
                        ?>
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="round-5">
                        <div class="news-info">
                           <ul class="news-metainfo style-one list-unstyle d-inline-block">
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
                           <h1 class="ls-2">
                              <a href="<?php the_permalink(); ?>">
                                 <span><?php echo esc_html(get_the_title()); ?></span>
                              </a>
                           </h1>
                        </div>
                     </div>
                  <?php endif; ?>
                  <?php $index++; ?>
               <?php endwhile; ?>
            </div>

            <div class="col-xl-4 pe-xl-1">
               <div class="thumb-news-wrapper mb-30">
                  <h5 class="section-subtitle fw-semibold lh-1">Latest Posts</h5>
                  <?php
                  // Reset index to loop through posts again for the thumbnail section
                  $latest_posts->rewind_posts();
                  $index = 0;

                  while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                     <?php if ($index > 0) : ?>
                        <div class="thumbnail-news-card style-one d-flex flex-wrap align-items-md-center align-items-start mb-25">
                           <div class="news-img rounded-circle">
                              <?php
                              $featured_image = has_post_thumbnail()
                                 ? get_the_post_thumbnail_url(get_the_ID(), 'homepage-hero-img')
                                 : get_template_directory_uri() . '/assets/img/hero/news-thumb-1.png';
                              ?>
                              <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="rounded-circle">
                           </div>
                           <div class="news-info">
                              <ul class="news-metainfo list-unstyle">
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
                              <h3 class="fs-22 fw-semibold ls-3 mb-0">
                                 <a href="<?php the_permalink(); ?>" class="hover-anim-blue"><?php echo esc_html(get_the_title()); ?></a>
                              </h3>
                           </div>
                        </div>
                     <?php endif; ?>
                     <?php $index++; ?>
                  <?php endwhile; ?>
               </div>
            </div>
         <?php else : ?>
            <div class="col-xl-12">
               <p>No posts found.</p>
            </div>
         <?php endif; ?>

         <?php wp_reset_postdata(); ?>
      </div>
   </div>
</div>
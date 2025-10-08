<!DOCTYPE html>
<html <?php language_attributes(); ?>
   <?php yanews_schema_type(); ?>>

<head>
   <!-- Required meta tags -->
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <!--  Preloader Start -->
   <div class="preloader-area" id="preloader">
      <div id="loader"></div>
   </div>
   <!--  Preloader End -->

   <!-- Theme Switcher Start -->
   <div class="switch-theme-mode">
      <label id="switch" class="switch">
         <input type="checkbox" onchange="toggleTheme()" id="slider">
         <span class="slider round"></span>
      </label>
   </div>
   <!-- Theme Switcher End -->

   <!-- Custom Cursor -->
   <div class="cursor"></div>
   <div class="cursor-inner"></div>

   <!-- Navbar Area Start -->
   <div class="navbar-area style-one position-relative" id="navbar">
      <div class="container">
         <div class="navbar-top">
            <div class="row align-items-center">
               <div class="col-lg-2 col-md-4">
                  <ul class="social-profile style-one list-unstyled">
                     <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details2')) ?>" target="_blank"><img
                              src="<?php echo get_template_directory_uri() ?>/assets/img/icons/facebook-blue.svg" alt="Facebook"></a></li>
                     <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details4')) ?>" target="_blank"><img
                              src="<?php echo get_template_directory_uri() ?>/assets/img/icons/pinterest-blue.svg" alt="Pinterest"></a></li>
                     <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details5')) ?>" target="_blank"><img
                              src="<?php echo get_template_directory_uri() ?>/assets/img/icons/instagram-blue.svg" alt="Instagram"></a></li>
                     <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details3')) ?>" target="_blank"><img
                              src="<?php echo get_template_directory_uri() ?>/assets/img/icons/twitter-blue.svg" alt="Icon"></a></li>
                  </ul>
               </div>
               <div class="col-lg-10 col-md-8 ps-lg-0">
                  <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
                     <div
                        class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-end">
                        <?php
                        // PC Menu
                        wp_nav_menu(array(
                           'theme_location' => 'header-menu',
                           'depth'          => 3,
                           'container'      => false,
                           'menu_class'     => 'navbar-nav md-none',
                           'fallback_cb'    => false,
                           'walker'         => new Bootstrap_5_WP_Nav_Menu_Walker(),
                        ));
                        ?>
                        <div
                           class="other-options d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                           <div class="option-item">
                              <ul class="d-flex align-items-center list-unstyle">
                                 <li><a href="blog-right-sidebar.html" class="fw-bold text-title"><img
                                          src="<?php echo get_template_directory_uri() ?>/assets/img/icons/sound.svg" alt="Play"><span
                                          class="md-d-none">Listen</span></a></li>
                                 <li><a href="blog-right-sidebar.html" class="fw-bold text-title"><img
                                          src="<?php echo get_template_directory_uri() ?>/assets/img/icons/play-button.svg" alt="Play"><span
                                          class="md-d-none">Watch</span></a></li>
                              </ul>
                           </div>
                           <div class="option-item">
                              <button class="btn style-three fw-semibold" data-bs-toggle="modal"
                                 data-bs-target="#newsletter-popup">Subscribe Now <img
                                    src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-black.svg" alt="Arrow"></button>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
         <div class="navbar-bottom">
            <div class="row align-items-center">
               <div class="col-lg-2 col-4">
                  <a href="<?php echo esc_html(home_url('/')); ?>" class="navbar-brand">
                     <?php if ((has_custom_logo())) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
                     ?>
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_html(bloginfo('name')); ?>" class="logo-light">
                     <?php
                     } else {
                     ?>
                        <h1 class="section-subtitle fw-semibold lh-1 text-black"><?php echo esc_html(bloginfo('name')); ?></h1>
                     <?php
                     } ?>
                  </a>
               </div>
               <div class="col-lg-10 col-8 ps-lg-0">
                  <div class="other-options d-flex align-items-center justify-content-end">
                     <?php /*   
                  <div class="option-item md-none">
                        <p class="fw-medium mb-0 ls-0">From pop culture to weird history, your votes rank the
                           lists</p>
                     </div> 
                     */ ?>
                     <div class="option-item md-none">
                        <ul class="d-flex align-items-center list-unstyle status">
                           <?php
                           $counts = wp_count_posts();
                           if ($counts->publish > 0) {
                           ?>
                              <li class="fs-14 font-secondary fw-semibold"><strong
                                    class="text-title fw-bold">
                                    <?php echo $counts->publish; ?>
                                 </strong> NEWS</li>
                           <?php
                           }
                           ?>

                           <?php
                           $user_counts = count_users();
                           $subscribers = isset($user_counts['avail_roles']['subscriber']) ? $user_counts['avail_roles']['subscriber'] : 0;

                           if ($subscribers > 0) :
                           ?>
                              <li class="fs-14 font-secondary fw-semibold">
                                 <strong class="text-title fw-bold"><?php echo $subscribers; ?></strong> SUBSCRIBERS
                              </li>
                           <?php
                           endif;
                           ?>

                           <?php /*
                           <li class="fs-14 font-secondary fw-semibold"><strong
                                 class="text-title fw-bold">442,90</strong> RANKINGS</li> */ ?>
                        </ul>
                     </div>
                     <div class="option-item">
                        <ul class="user-options d-flex align-items-center list-unstyle">
                           <li><button type="button" class="search-btn p-0 bg-transparent border-0"
                                 data-bs-toggle="modal" data-bs-target="#searchModal">
                                 <i class="ri-search-2-line"></i>
                              </button></li>

                           <li class="d-lg-none">
                              <a class="navbar-toggler d-lg-none" data-bs-toggle="offcanvas"
                                 href="<?php echo esc_html(home_url('/')); ?>#navbarOffcanvas" role="button"
                                 aria-controls="navbarOffcanvas">
                                 <span class="burger-menu">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                 </span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Navbar Area End-->

   <!-- Responsive Navbar Area Start-->
   <div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1"
      id="navbarOffcanvas">
      <div class="offcanvas-header">
         <a href="<?php echo esc_html(home_url('/')); ?>" class="logo d-inline-block">
            <?php if ((has_custom_logo())) {
               $custom_logo_id = get_theme_mod('custom_logo');
               $logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
            ?>
               <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_html(bloginfo('name')); ?>" class="logo">
            <?php
            } else {
            ?>
               <h1 class="section-subtitle fw-semibold lh-1 text-white"><?php echo esc_html(bloginfo('name')); ?></h1>
            <?php
            } ?>
         </a>
         <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
         </button>
      </div>
      <div class="offcanvas-body">
         <ul class="responsive-menu">
            <?php
            wp_nav_menu(array(
               'theme_location' => 'header-menu',
               'container' => false,
               'items_wrap' => '%3$s',
               'walker' => new Responsive_Menu_Walker(),
               'fallback_cb' => false
            ));
            ?>
         </ul>

         <?php /* 
         <div class="option-item d-lg-none">
            <p class="fw-medium mb-20 ls-0 text-offwhite">From pop culture to weird history, your votes rank the
               lists</p>
         </div>
         */ ?>
         <div class="option-item d-lg-none">
            <ul class="d-flex align-items-center list-unstyle status">
               <?php
               $counts = wp_count_posts();
               if ($counts->publish > 0): ?>
                  <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong
                        class="text-white fw-bold"><?php echo $counts->publish; ?></strong> NEWS</li>
               <?php endif; ?>
               <?php
               $user_counts = count_users();
               $subscribers = isset($user_counts['avail_roles']['subscriber']) ? $user_counts['avail_roles']['subscriber'] : 0;

               if ($subscribers > 0) :
               ?>
                  <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong class="text-white fw-bold"><?php echo $subscribers; ?></strong> SUBSCRIBERS</li>
               <?php
               endif;
               ?>
               <?php /*
               <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong
                     class="text-white fw-bold">442,90</strong> RANKINGS</li>
                     */ ?>
            </ul>
         </div>
      </div>
   </div>
   <!-- Responsive Navbar Area End-->

   <!-- Start Search Modal -->
   <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
      tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
               <input type="search"
                  class="form-control"
                  placeholder="<?php echo esc_attr__('Search here....', 'your-textdomain'); ?>"
                  value="<?php echo get_search_query(); ?>"
                  name="s"
                  title="<?php echo esc_attr__('Search for:', 'your-textdomain'); ?>" />
               <button type="submit"><i class="ri-search-2-line"></i></button>
            </form>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="ri-close-large-line"></i></button>
         </div>
      </div>
   </div>
   <!-- End Search Modal -->
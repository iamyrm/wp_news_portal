 <!-- Footer Start -->
 <footer class="footer-wrap style-one bg-title ptb-100">
    <div class="container">
       <div class="footer-top">
          <div class="row">
             <div class="col-lg-4 mb-md-15">
                <div class="footer-widget">
                   <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-block">
                      <?php if ((has_custom_logo())) {
                           $custom_logo_id = get_theme_mod('custom_logo');
                           $logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
                        ?>
                         <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_html(bloginfo('name')); ?>">
                      <?php
                        } else {
                        ?>
                         <h1 class="section-subtitle fw-semibold lh-1 text-white"><?php echo esc_html(bloginfo('name')); ?></h1>
                      <?php
                        } ?>
                   </a>
                   <?php
                     wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'menu_class'     => 'footer-menu style-one list-unstyled',
                        'container'      => false,
                        'fallback_cb'    => false,
                     ));
                     ?>

                </div>
             </div>
             <div class="col-lg-8">
                <div class="footer-widget">
                   <?php
                     wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'menu_class'     => 'footer-menu style-two list-unstyled d-flex flex-wrap align-items-center justify-content-lg-end',
                        'container'      => false,
                        'fallback_cb'    => false,
                     ));
                     ?>
                </div>
             </div>
          </div>
       </div>
       <div class="footer-bottom">
          <div class="row align-items-center">
             <div class="col-md-8 pe-xxl-5">
                <p class="copyright-text text-offwhite fs-15 mb-0"><span class="text-white"><?php echo esc_html(get_theme_mod('setting_site_details1')); ?></p>
             </div>
             <div class="col-md-4">
                <ul class="social-profile style-one text-md-end list-unstyled">
                   <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details2')) ?>" target="_blank"><i class="ri-facebook-fill"></i></a>
                   </li>
                   <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details4')) ?>" target="_blank"><i
                            class="ri-pinterest-fill"></i></a></li>
                   <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details5')) ?>" target="_blank"><i
                            class="ri-instagram-line"></i></a></li>
                   <li><a href="<?php echo esc_url(get_theme_mod('setting_site_details3')) ?>" target="_blank"><i class="ri-twitter-x-line"></i></a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- Footer End -->

 <!-- Back to Top -->
 <div id="progress-wrap" class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
       <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
 </div>

 <!-- Modal structure for video popup -->
 <div class="popup_modal">
    <div class="modal-content">
       <span class="close-modal"><i class="ri-close-large-fill"></i></span>
       <div class="video-container"></div>
    </div>
 </div>

 <!-- Newsletter Popup -->
 <div class="modal fade" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
       <div class="modal-content">
          <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
             <i class="ri-close-fill"></i>
          </button>
          <div class="modal-body">
             <div class="newsletter-bg bg-f"></div>
             <div class="newsletter-content d-flex flex-column justify-content-center">
                <h2 class="fs-36 ls-3">Join Our Newsletter &amp; Read The New Posts First</h2>
                <form action="<?php echo esc_url(home_url('/')); ?>#" class="newsletter-form">
                   <input type="email" placeholder="Email Address">
                   <button type="button" class="btn style-one">Subscribe<i
                         class="flaticon-arrow-right"></i></button>
                </form>
                <div class="form-check checkbox">
                   <input class="form-check-input" type="checkbox" id="test_21">
                   <label class="form-check-label" for="test_21">
                      I've read and accept <a href="privacy-policy.html">Privacy Policy</a>
                   </label>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 <?php wp_footer(); ?>
 </body>

 </html>
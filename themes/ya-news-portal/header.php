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
                        <ul class="navbar-nav md-none">
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link active">
                                 Home
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="index.html" class="nav-link active">Home One</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Two</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Three</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                 Latest
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="latest-news.html" class="nav-link">
                                       Latest News
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="news-details-style-one.html" class="nav-link">
                                       News Details
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                 Lifestyle
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="lifestyle-news.html" class="nav-link">
                                       Lifestyle News
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="news-details-style-two.html" class="nav-link">
                                       News Details
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                 Featured
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="featured-news.html" class="nav-link">
                                       Featured News
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="news-details-style-three.html" class="nav-link">
                                       News Details
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                 Pages
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="about-us.html" class="nav-link">
                                       About Us
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                       <span>Blog</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled">
                                       <li class="nav-item">
                                          <a href="blog-left-sidebar.html" class="nav-link">
                                             Blog Left Sidebar
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="blog-right-sidebar.html" class="nav-link">
                                             Blog Right Sidebar
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="blog-grid.html" class="nav-link">
                                             Blog Grid
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="blog-details.html" class="nav-link">
                                             Blog Details
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                       FAQ
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="my-account.html" class="nav-link">
                                       My Account
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">
                                       Terms & Conditions
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                       Privacy Policy
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">
                                       404 Error
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                 Categories
                              </a>
                              <ul class="dropdown-menu list-unstyled">
                                 <li class="nav-item">
                                    <a href="politics-news.html" class="nav-link">
                                       Politics
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="business-news.html" class="nav-link">
                                       Business
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="marketing-news.html" class="nav-link">
                                       Marketing
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="technology-news.html" class="nav-link">
                                       Technology
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="news-details-style-four.html" class="nav-link">
                                       News Details
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link">
                                 Contact
                              </a>
                           </li>
                        </ul>
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
                  <a href="index.html" class="navbar-brand">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Logo" class="logo-light">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" alt="Logo" class="logo-dark">
                  </a>
               </div>
               <div class="col-lg-10 col-8 ps-lg-0">
                  <div class="other-options d-flex align-items-center justify-content-end">
                     <div class="option-item md-none">
                        <p class="fw-medium mb-0 ls-0">From pop culture to weird history, your votes rank the
                           lists</p>
                     </div>
                     <div class="option-item md-none">
                        <ul class="d-flex align-items-center list-unstyle status">
                           <li class="fs-14 font-secondary fw-semibold"><strong
                                 class="text-title fw-bold">259,252</strong> VOTERS</li>
                           <li class="fs-14 font-secondary fw-semibold"><strong class="text-title fw-bold">1.4
                                 BILLION</strong> VOTES</li>
                           <li class="fs-14 font-secondary fw-semibold"><strong
                                 class="text-title fw-bold">442,90</strong> RANKINGS</li>
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
                                 href="index.html#navbarOffcanvas" role="button"
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
         <a href="index.html" class="logo d-inline-block">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" alt="Image" class="logo">
         </a>
         <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0"
            data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
         </button>
      </div>
      <div class="offcanvas-body">
         <ul class="responsive-menu">
            <li class="responsive-menu-list"><a href="javascript:void(0);" class="active">Home</a>
               <ul class="responsive-menu-items">
                  <li><a href="index.html" class="active">Home One</a></li>
                  <li><a href="index-2.html">Home Two</a></li>
                  <li><a href="index-3.html">Home Three</a></li>
               </ul>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);">Latest</a>
               <ul class="responsive-menu-items">
                  <li><a href="latest-news.html">Latest News</a></li>
                  <li><a href="news-details-style-one.html">News Details</a></li>
               </ul>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);">Lifestyle</a>
               <ul class="responsive-menu-items">
                  <li><a href="lifestyle-news.html">Lifestyle News</a></li>
                  <li><a href="news-details-style-two.html">News Details</a></li>
               </ul>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);">Featured</a>
               <ul class="responsive-menu-items">
                  <li><a href="featured-news.html">Featured News</a></li>
                  <li><a href="news-details-style-three.html">News Details</a></li>
               </ul>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);">Categories</a>
               <ul class="responsive-menu-items">
                  <li><a href="politics-news.html">Politics</a></li>
                  <li><a href="business-news.html">Business</a></li>
                  <li><a href="marketing-news.html">Marketing</a></li>
                  <li><a href="technology-news.html">Technology</a></li>
                  <li><a href="news-details-style-four.html">News Details</a></li>
               </ul>
            </li>
            <li class="responsive-menu-list"><a href="javascript:void(0);">Pages</a>
               <ul class="responsive-menu-items">
                  <li><a href="about-us.html">About Us</a></li>
                  <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a>
                     <ul class="responsive-menu-items">
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                     </ul>
                  </li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="error-404.html">404 Error</a></li>
               </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
         </ul>
         <div class="option-item d-lg-none">
            <p class="fw-medium mb-20 ls-0 text-offwhite">From pop culture to weird history, your votes rank the
               lists</p>
         </div>
         <div class="option-item d-lg-none">
            <ul class="d-flex align-items-center list-unstyle status">
               <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong
                     class="text-white fw-bold">259,252</strong> VOTERS</li>
               <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong class="text-white fw-bold">1.4
                     BILLION</strong> VOTES</li>
               <li class="fs-14 font-secondary fw-semibold text-offwhite"><strong
                     class="text-white fw-bold">442,90</strong> RANKINGS</li>
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
            <form>
               <input type="text" class="form-control" placeholder="Search here....">
               <button type="submit"><i class="ri-search-2-line"></i></button>
            </form>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="ri-close-large-line"></i></button>
         </div>
      </div>
   </div>
   <!-- End Search Modal -->
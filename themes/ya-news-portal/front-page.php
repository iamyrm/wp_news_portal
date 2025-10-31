<?php get_header(); ?>

<div class="bg-optional">
   <?php
   // Hero Section Start
   get_template_part('parts/home/hero', 'section');
   // Hero Section End 

   // Business Posts Start 
   get_template_part('parts/home/business', 'section');
   //   Business Posts End 
   ?>
</div>

<?php
//  Tab Section / New Stories Section Start 
get_template_part('parts/home/tab', 'section');
//  Tab Section / New Stories Section End 

//  Subscribe Section Start 
get_template_part('parts/home/subscribe', 'cta');
// Subscribe Section End 
?>

<!-- Main Topics Start -->
<div class="container pt-100 pb-70">
   <h2 class="section-title text-center mb-40">Main Topics</h2>
   <div class="main-topics-wrap d-flex flex-wrap justify-content-between overflow-hidden">
      <div class="news-card-wrap">
         <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-28">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-1.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Business</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>04 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>08 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Top Social Media Influencers to Follow Right Now</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-28">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-2.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Politics</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>10 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>16 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Influential Leaders Shaping Today's Political
                           Policies</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-28">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-3.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Economics</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>12 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>22 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Behind-the-Scenes Look at the Year's Biggest
                           Blockbuster</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-28">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-4.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Cleaning</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>13 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>28 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Impact of Major Environment News Stories in 2024</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-25">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-5.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Pet
                        Care</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>16 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>17 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Funniest and Most Shared Viral Memes of 2024</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-25">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-6.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Lifestyle</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>22 Hours ago</li>
                        <li><i class="ri-message-3-line"></i>18 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Innovations from Tech Giants Transforming Daily Life</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-25">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-7.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Marketing</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>01 Days ago</li>
                        <li><i class="ri-message-3-line"></i>14 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Heartwarming Stories That Captivated the Internet</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
               <div class="news-card mb-28">
                  <div class="hover-anim-img position-relative mb-18 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/main-topics/news-8.jpg" alt="News" class="round-6 transition">
                     <a href="business-news.html"
                        class="fs-14 ls-2 news-category bg_primary text-white d-inline-block position-absolute">Technology</a>
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-15">
                        <li><i class="ri-time-line"></i>02 days ago</li>
                        <li><i class="ri-message-3-line"></i>08 Comments</li>
                     </ul>
                     <h3 class="fs-22 ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Top Social Media Influencers to Follow Right Now</a>
                     </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="promo-box style-one bg-f position-relative index-1 round-6">
         <button
            class="close-promo-box border-0 bg-white d-flex flex-column align-items-center justify-content-center position-absolute"><i
               class="ri-close-fill"></i></button>
         <h5 class="fs-26 fw-semibold ls-3 text-white mb-0">Work Smarter. <br>
            Heat Your Deadlines</h5>
         <span
            class="fs-14 ls-2 fw-medium text-center bg_secondary text-title d-inline-block position-absolute">Your
            ad here</span>
      </div>
   </div>
</div>
<!-- Main Topics End -->

<!-- Featured Video Start -->
<div class="video-wrap style-one bg-f position-relative index-1">
   <div class="overlay style-three index-1"></div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1">
            <div class="video-info text-center">
               <div data-video-id="DGIXT7ce3vQ"
                  class="play-video style-one d-flex flex-column align-items-center justify-content-center rounded-circle bg-white text-title mx-auto">
                  <i class="ri-play-fill"></i>
               </div>
               <ul class="news-metainfo list-unstyle d-inline-block mb-12 bg-white">
                  <li class="text-title"><i class="ri-time-line"></i>8 Hours ago</li>
                  <li class="text-title"><i class="ri-message-3-line"></i>08 Comments</li>
                  <li class="text-title"><a href="lifestyle-news.html">Lifestyle</a></li>
               </ul>
               <h3 class="fs-54 ls-2 mb-22">
                  <a href="news-details-style-one.html" class="text-white">The Symbolism Behind African Ethnic
                     Attire and Its Vibrant Colors</a>
               </h3>
               <a href="my-account.html" class="btn style-three">For Subscribers <img
                     src="<?php echo get_template_directory_uri() ?>/assets/img/icons/mail-lock.svg" alt="Mail"></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Featured Video End -->

<!-- Network Feed Start -->
<div class="container pt-100 pb-50">
   <div class="row">
      <div class="col-md-5 pe-xxl-5 mb-sm-20">
         <div class="section-title-fixed">
            <h2 class="section-title mb-12">Network Feed</h2>
            <p class="mb-32">This year has been a whirlwind of drama and controversy in the world of
               celebrities. From unexpected breakups to shocking revelations whirlwind of drama and controversy
               in the world. </p>
            <a href="featured-news.html" class="btn style-one">View All News <img
                  src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-white.svg" alt="Arrow"></a>
         </div>
      </div>
      <div class="col-lg-6 offset-lg-1 col-md-7">
         <div class="news-card mb-50">
            <div class="hover-anim-img position-relative index-1 round-6 overflow-hidden mb-30">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/new-stories/news-5.jpg" alt="News" class="round-6 transition">
               <div class="news-action-wrap style-two index-2 position-absolute d-flex align-items-center">
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
                     <span class="fs-14 ls-2 fw-medium text-white">34</span>
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
               <div class="overlay style-two index-1"></div>
            </div>
            <div class="news-info">
               <ul class="news-metainfo list-unstyle mb-15">
                  <li><i class="ri-time-line"></i>20 Days ago</li>
                  <li><i class="ri-message-3-line"></i>06 Comments</li>
                  <li><a href="business-news.html">Business</a></li>
               </ul>
               <h3 class="fs-36 fw-semibold ls-3 mb-6"><a href="news-details-style-one.html"
                     class="hover-anim-blue">Human Interest: Heartwarming Stories That Captivated the
                     Internet</a></h3>
               <p class="mb-15">This year has been a whirlwind of drama and controversy in the world of
                  celebrities. From unexpected breakups to shocking revelations whirlwind of drama and
                  controversy in the world.</p>
               <a href="news-details-style-one.html" class="btn style-two fw-semibold">Read More<img
                     src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-blue-2.svg" alt="Arrow"></a>
            </div>
         </div>
         <div class="news-card mb-50">
            <div class="hover-anim-img position-relative index-1 round-6 overflow-hidden mb-30">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/new-stories/news-6.jpg" alt="News" class="round-6 transition">
               <div class="news-action-wrap style-two index-2 position-absolute d-flex align-items-center">
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
                     <span class="fs-14 ls-2 fw-medium text-white">34</span>
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
               <div class="overlay style-two index-1"></div>
            </div>
            <div class="news-info">
               <ul class="news-metainfo list-unstyle mb-15">
                  <li><i class="ri-time-line"></i>06 Days ago</li>
                  <li><i class="ri-message-3-line"></i>89 Comments</li>
                  <li><a href="technology-news.html">Politics</a></li>
               </ul>
               <h3 class="fs-36 fw-semibold ls-3 mb-6"><a href="news-details-style-one.html"
                     class="hover-anim-blue">What You Must to Prioritize in August, Based on Your Zodiac
                     Sign</a></h3>
               <p class="mb-15">This year has been a whirlwind of drama and controversy in the world of
                  celebrities. From unexpected breakups to shocking revelations whirlwind of drama and
                  controversy in the world.</p>
               <a href="news-details-style-one.html" class="btn style-two fw-semibold">Read More<img
                     src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-blue-2.svg" alt="Arrow"></a>
            </div>
         </div>
         <div class="news-card mb-50">
            <div class="hover-anim-img position-relative index-1 round-6 overflow-hidden mb-30">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/new-stories/news-7.jpg" alt="News" class="round-6 transition">
               <div class="news-action-wrap style-two index-2 position-absolute d-flex align-items-center">
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
                     <span class="fs-14 ls-2 fw-medium text-white">34</span>
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
               <div class="overlay style-two index-1"></div>
            </div>
            <div class="news-info">
               <ul class="news-metainfo list-unstyle mb-15">
                  <li><i class="ri-time-line"></i>23 Days ago</li>
                  <li><i class="ri-message-3-line"></i>13 Comments</li>
                  <li><a href="lifestyle-news.html">Lifestyle</a></li>
               </ul>
               <h3 class="fs-36 fw-semibold ls-3 mb-6"><a href="news-details-style-one.html"
                     class="hover-anim-blue">Tech Giants: Innovations from Leading Companies Transforming Our
                     Daily Lives</a></h3>
               <p class="mb-15">This year has been a whirlwind of drama and controversy in the world of
                  celebrities. From unexpected breakups to shocking revelations whirlwind of drama and
                  controversy in the world.</p>
               <a href="news-details-style-one.html" class="btn style-two fw-semibold">Read More<img
                     src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-blue-2.svg" alt="Arrow"></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Network Feed End -->

<!-- Ad Section Start -->
<div class="container">
   <div class="promo-box style-two promo-area bg-f position-relative index-1 round-6 overflow-hidden mb-100">
      <button
         class="close_promo-box border-0 bg-white d-flex flex-column align-items-center justify-content-center position-absolute"><i
            class="ri-close-fill"></i></button>
      <div class="row">
         <div class="col-lg-7">
            <div class="promo-text">
               <h3 class="fs-36 fw-semibold ls-3 text-white mb-15">Boost Your Business with Cutting-Edge
                  Marketing Solutions Today</h3>
               <span
                  class="fs-14 ls-2 fw-medium text-center bg_secondary text-title d-inline-block position-absolute">Your
                  ad here</span>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="promo-img pe-xxl-5 me-xxl-3">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/promo-img.png" alt="Image" class="d-block mx-auto">
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Ad Section End -->

<!-- Lifestyle Section Start -->
<div class="container pb-65">
   <div class="row align-items-center mb-40">
      <div class="col-md-7 mb-sm-20">
         <h2 class="section-title mb-0">Lifestyle Feed</h2>
      </div>
      <div class="col-md-5 text-md-end">
         <a href="featured-news.html" class="link style-three fw-semibold">See All Trending<i
               class="ri-arrow-right-s-line"></i></a>
      </div>
   </div>
   <div class="row gx-xxl-4">
      <div class="col-xl-6">
         <div class="news-card mb-35">
            <div class="news-img position-relative index-1 hover-anim-img overflow-hidden round-6 mb-30">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/lifestyle/news-1.jpg" alt="News Image" class="round-6 transition">
               <div class="overlay style-two index-1 round-6"></div>
               <div class="news-action-wrap style-two position-absolute index-2 d-flex align-items-center">
                  <div class="news-action-status lh-1 d-flex align-items-center">
                     <ul class=" list-unstyle d-flex align-items-center">
                        <li
                           class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/heart.png" alt="Heart">
                        </li>
                        <li
                           class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                           <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/thumb.png" alt="Thumb">
                        </li>
                     </ul>
                     <span class="fs-14 ls-2 fw-medium text-white">28</span>
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
            <div class="news-info">
               <ul class="news-metainfo list-unstyle mb-15">
                  <li><i class="ri-time-line"></i>23 Days ago</li>
                  <li><i class="ri-message-3-line"></i>87 Comments</li>
                  <li><a href="business-news.html">Children</a></li>
               </ul>
               <h3 class="fs-36 ls-3 mb-8"><a href="news-details-style-one.html">Personal Development: How to
                     Set and Achieve Your Goals Successfully</a></h3>
               <p class="mb-22">This year has been a whirlwind of drama and controversy in the world of
                  celebrities. From unexpected breakups to shocking revelations whirlwind of drama and
                  controversy in the world.</p>
               <a href="news-details-style-one.html" class="btn style-two fw-semibold">Read More<img
                     src="<?php echo get_template_directory_uri() ?>/assets/img/icons/long-arrow-blue.svg" alt="Arrow"></a>
            </div>
         </div>
      </div>
      <div class="col-xl-6">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="news-card style-two mb-35">
                  <div class="hover-anim-img mb-15 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/lifestyle/news-2.jpg" alt="News" class="round-6 transition">
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-12">
                        <li><i class="ri-time-line"></i>8 Hours ago</li>
                        <li><a href="business-news.html">Childres</a></li>
                     </ul>
                     <h3 class="fs-18 ls-3 mb-20"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Top Travel Destinations You Must Visit to Add to Your
                           Bucket List</a></h3>
                     <div class="news-action-wrap d-flex align-items-center">
                        <div class="news-action-status lh-1 d-flex align-items-center">
                           <ul class=" list-unstyle d-flex align-items-center">
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/thumb.png" alt="Heart">
                              </li>
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/angry.png" alt="Angry">
                              </li>
                           </ul>
                           <span class="fs-14 ls-2 fw-medium">28</span>
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
            <div class="col-md-6">
               <div class="news-card style-two mb-35">
                  <div class="hover-anim-img mb-15 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/lifestyle/news-3.jpg" alt="News" class="round-6 transition">
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-12">
                        <li><i class="ri-time-line"></i>6 Hours ago</li>
                        <li><a href="lifestyle-news.html">Lifestyle</a></li>
                     </ul>
                     <h3 class="fs-18 ls-3 mb-20"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Healthy Eating Made Easy: Delicious and Balanced Recipes
                           for Every Meal</a></h3>
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
            <div class="col-md-6">
               <div class="news-card style-two mb-35">
                  <div class="hover-anim-img mb-15 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/lifestyle/news-4.jpg" alt="News" class="round-6 transition">
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-12">
                        <li><i class="ri-time-line"></i>12 Days ago</li>
                        <li><a href="business-news.html">Beauty</a></li>
                     </ul>
                     <h3 class="fs-18 ls-3 mb-20"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Mindfulness Techniques to Effectively Reduce Stress and
                           Anxiety in Daily Life</a></h3>
                     <div class="news-action-wrap d-flex align-items-center">
                        <div class="news-action-status lh-1 d-flex align-items-center">
                           <ul class=" list-unstyle d-flex align-items-center">
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/worried.png" alt="Heart">
                              </li>
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/thumb.png" alt="Angry">
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
            <div class="col-md-6">
               <div class="news-card style-two mb-35">
                  <div class="hover-anim-img mb-15 round-6 overflow-hidden">
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/lifestyle/news-5.jpg" alt="News" class="round-6 transition">
                  </div>
                  <div class="news-info">
                     <ul class="news-metainfo list-unstyle mb-12">
                        <li><i class="ri-time-line"></i>5 Days ago</li>
                        <li><a href="lifestyle-news.html">Lifestyle</a></li>
                     </ul>
                     <h3 class="fs-18 ls-3 mb-20"><a href="news-details-style-one.html"
                           class="hover-anim-blue">Home Décor Trends: Refresh Your Living Space with These
                           Stylish Ideas</a></h3>
                     <div class="news-action-wrap d-flex align-items-center">
                        <div class="news-action-status lh-1 d-flex align-items-center">
                           <ul class=" list-unstyle d-flex align-items-center">
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/heart.png" alt="Heart">
                              </li>
                              <li
                                 class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-white">
                                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/crying.png" alt="Angry">
                              </li>
                           </ul>
                           <span class="fs-14 ls-2 fw-medium">94</span>
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
         </div>
      </div>
   </div>
</div>
<!-- Lifestyle Section End -->

<!-- Video News Start -->
<div class="bg_primary pt-100 pb-70">
   <div class="container">
      <div class="row align-items-center mb-50">
         <div class="col-md-7 mb-sm-10">
            <h2 class="section-title text-white mb-0">Video News</h2>
         </div>
         <div class="col-md-5 text-md-end">
            <a href="featured-news.html" class="link style-four fw-medium">All Video News<i
                  class="ri-arrow-right-s-line"></i></a>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-4 col-md-6">
            <div class="news-card style-three position-relative index-1 mb-30">
               <div class="overlay round-6 index-1"></div>
               <div class="hover-anim-img overflow-hidden round-6">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/video/news-1.jpg" alt="News" class="round-6 transition">
               </div>
               <div class="news-info index-2">
                  <ul class="news-metainfo style-three list-unstyle">
                     <li><i class="ri-time-line"></i>8 Hours ago</li>
                     <li><a href="featured-news.html">Politics</a></li>
                  </ul>
                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                     <h3 class="fs-22 fw-semibold ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-white text-white">Budgeting 101: Tips for Managing Your
                           Finances Effectively</a></h3>
                     <span data-video-id="DGIXT7ce3vQ"
                        class="play-video style-one d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">
                        <i class="ri-play-fill"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="news-card style-three position-relative index-1 mb-30">
               <div class="overlay round-6 index-1"></div>
               <div class="hover-anim-img overflow-hidden round-6">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/video/news-3.jpg" alt="News" class="round-6 transition">
               </div>
               <div class="news-info index-2">
                  <ul class="news-metainfo style-three list-unstyled mb-2">
                     <li><i class="ri-time-line"></i>8 Hours ago</li>
                     <li><a href="business-news.html">Business</a></li>
                  </ul>
                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                     <h3 class="fs-22 fw-semibold ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-white text-white">Fitness Tips for Consistently Building &
                           Maintaining a Workout</a></h3>
                     <span data-video-id="DGIXT7ce3vQ"
                        class="play-video style-one d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">
                        <i class="ri-play-fill"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="news-card style-three position-relative index-1 mb-30">
               <div class="overlay round-6 index-1"></div>
               <div class="hover-anim-img overflow-hidden round-6">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/video/news-2.jpg" alt="News" class="round-6 transition">
               </div>
               <div class="news-info index-2">
                  <ul class="news-metainfo style-three list-unstyled mb-2">
                     <li><i class="ri-time-line"></i>8 Hours ago</li>
                     <li><a href="lifestyle-news.html">Lifestyle</a></li>
                  </ul>
                  <div class="d-flex flex-wrap align-items-center justify-content-center">
                     <h3 class="fs-22 fw-semibold ls-3 mb-0"><a href="news-details-style-one.html"
                           class="hover-anim-white text-white">Exploring the World: Breathtaking Natural
                           Wonders You Need to See</a></h3>
                     <span data-video-id="pnb_DJTdnwo"
                        class="play-video style-one d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary text-white">
                        <i class="ri-play-fill"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Video News End -->

<!-- Author Section Start -->
<div class="container pt-100 pb-70">
   <h2 class="section-title text-center mb-50">Don't Miss Out</h2>
   <div class="row justify-content-center gx-xxl-30">
      <div class="col-xxl-3 col-xl-4 col-md-6 pe-xxl-15">
         <div class="thumbnail-news-card style-two d-flex flex-wrap mb-30">
            <div class="author-img rounded-circle">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/author/author-1.png" alt="Author">
            </div>
            <div class="news-info">
               <h3 class="fs-22 ls-3 fw-semibold mb-12"><a href="featured-news.html"
                     class="hover-anim-blue">Long News</a></h3>
               <p>This year has been a whirlwind of drama and controversy in the world of celebrities.</p>
               <a href="featured-news.html" class="link style-three fw-bold">Read Long News<i
                     class="ri-arrow-right-s-line"></i></a>
            </div>
         </div>
      </div>
      <div class="col-xxl-3 col-xl-4 col-md-6 pe-xxl-15 ps-xxl-42">
         <div class="thumbnail-news-card style-two d-flex flex-wrap mb-30">
            <div class="author-img rounded-circle">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/author/author-2.png" alt="Author">
            </div>
            <div class="news-info">
               <h3 class="fs-22 ls-3 mb-12"><a href="featured-news.html" class="hover-anim-blue">Politics
                     News</a></h3>
               <p>This year has been a whirlwind of drama and controversy in the world of celebrities.</p>
               <a href="featured-news.html" class="link style-three fw-bold">Read Politics News<i
                     class="ri-arrow-right-s-line"></i></a>
            </div>
         </div>
      </div>
      <div class="col-xxl-3 col-xl-4 col-md-6 pe-xxl-15 ps-xxl-42">
         <div class="thumbnail-news-card style-two d-flex flex-wrap mb-30">
            <div class="author-img rounded-circle">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/author/author-3.png" alt="Author">
            </div>
            <div class="news-info">
               <h3 class="fs-22 ls-3 mb-12"><a href="featured-news.html" class="hover-anim-blue">Podcasts
                     News</a></h3>
               <p>This year has been a whirlwind of drama and controversy in the world of celebrities.</p>
               <a href="featured-news.html" class="link style-three fw-bold">Read Podcast News<i
                     class="ri-arrow-right-s-line"></i></a>
            </div>
         </div>
      </div>
      <div class="col-xxl-3 col-xl-4 col-md-6 pe-xxl-15 ps-xxl-42">
         <div class="thumbnail-news-card style-two d-flex flex-wrap mb-30">
            <div class="author-img rounded-circle">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/author/author-4.png" alt="Author">
            </div>
            <div class="news-info">
               <h3 class="fs-22 ls-3 mb-12"><a href="featured-news.html" class="hover-anim-blue">Funny News</a>
               </h3>
               <p>This year has been a whirlwind of drama and controversy in the world of celebrities.</p>
               <a href="featured-news.html" class="link style-three fw-bold">Read Funny News<i
                     class="ri-arrow-right-s-line"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Author Section End  -->


<?php get_footer(); ?>
<div class="container">
   <div class="subscribe-box style-one position-relative index-1">
      <div class="row justify-content-center">
         <div class="col-lg-4">
            <div class="subscribe-img">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/subscribe.jpg" alt="Image">
            </div>
         </div>
         <div class="col-lg-8">
            <div class="subscribe-content">
               <h3 class="fs-26 fw-medium text-white ls-5 xmb-5">Subscribe for updates</h3>
               <p class="text-white fw-light mb-25">This year has been a whirlwind of drama and controversy in
                  the world.</p>
               <form action="<?php echo esc_url(home_url()); ?>" method="POST" class="subscribe-form position-relative">
                  <?php wp_nonce_field('subscribe_form_action', 'subscribe_form_nonce'); ?>
                  <input type="email" name="subscriber_email" placeholder="Enter your email" class="w-100">
                  <button type="submit" name="subscribe_submit" class="btn style-three fw-semibold">
                     Subscribe Now
                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/long-arrow-black.svg" alt="Arrow">
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
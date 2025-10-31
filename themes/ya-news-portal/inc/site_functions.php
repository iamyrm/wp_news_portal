<?php
// Enqueuing the site html css js and fonts
add_action('wp_enqueue_scripts', 'yanews_enqueue');
function yanews_enqueue()
{
   // CSS CODES
   wp_enqueue_style('yanews-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.0');
   wp_enqueue_style('yanews-swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '10.0.0');
   wp_enqueue_style('yanews-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1');
   wp_enqueue_style('yanews-remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), '3.0.0');
   wp_enqueue_style('yanews-header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0');
   wp_enqueue_style('yanews-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
   wp_enqueue_style('yanews-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0');
   wp_enqueue_style('yanews-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');
   wp_enqueue_style('yanews-dark-theme', get_template_directory_uri() . '/assets/css/dark-theme.css', array(), '1.0');
   wp_enqueue_style('yanews-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

   // JS CODES
   wp_enqueue_script('yanews-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
   wp_enqueue_script('yanews-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '10.0.0', true);
   wp_enqueue_script('yanews-popup-video', get_template_directory_uri() . '/assets/js/popup-video.js', array(), '1.0', true);
   wp_enqueue_script('yanews-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '2.3.4', true);
   wp_enqueue_script('yanews-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
   wp_enqueue_script('jquery');
}

// Adding metagas in the head tag of the html
add_filter('wp_head', 'addHeaderDetails');
function addHeaderDetails()
{
?>
   <!-- OG contents will here -->
   <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png">
<?php
}


add_action('after_setup_theme', 'yanews_after_theme_setup');
function yanews_after_theme_setup()
{
   // Adding Menus
   register_nav_menus(array('header-menu' => esc_html__('Header Menu', 'yanews')));
   register_nav_menus(array('footer-menu-1' => esc_html__('Footer Menu 1', 'yanews')));
   register_nav_menus(array('footer-menu-2' => esc_html__('Footer Menu 2', 'yanews')));
}

// Limit footer-menu-1 to show only 3 items
add_filter('wp_nav_menu_objects', function ($sorted_menu_items, $args) {
   if (isset($args->theme_location) && $args->theme_location === 'footer-menu-1') {
      $sorted_menu_items = array_slice($sorted_menu_items, 0, 3);
   }
   return $sorted_menu_items;
}, 10, 2);

// Redirect subscribers to the frontend if they try to access admin panel
add_action('admin_init', function () {
   if (current_user_can('subscriber') && !wp_doing_ajax()) {
      wp_redirect(home_url());
      exit;
   }
});

// Hide admin header bar for non editors
add_action('after_setup_theme', function () {
   if (!current_user_can('edit_posts')) {
      show_admin_bar(false);
   }
});

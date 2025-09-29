<?php
require 'inc/site_functions.php';
require 'inc/customizer.php';

add_action('after_setup_theme', 'yanews_setup');
function yanews_setup()
{
   load_theme_textdomain('yanews', get_template_directory() . '/languages');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_theme_support('responsive-embeds');
   add_theme_support('automatic-feed-links');
   add_theme_support('html5', array('search-form', 'navigation-widgets'));
   add_theme_support('appearance-tools');
   add_theme_support('woocommerce');
   global $content_width;
   if (!isset($content_width)) {
      $content_width = 1920;
   }
   register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'yanews')));
}

add_action('wp_footer', 'yanews_footer');
function yanews_footer()
{
?>
   <script>
      jQuery(document).ready(function($) {
         var deviceAgent = navigator.userAgent.toLowerCase();
         if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
            $("html").addClass("ios");
            $("html").addClass("mobile");
         }
         if (deviceAgent.match(/(Android)/)) {
            $("html").addClass("android");
            $("html").addClass("mobile");
         }
         if (navigator.userAgent.search("MSIE") >= 0) {
            $("html").addClass("ie");
         } else if (navigator.userAgent.search("Chrome") >= 0) {
            $("html").addClass("chrome");
         } else if (navigator.userAgent.search("Firefox") >= 0) {
            $("html").addClass("firefox");
         } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
            $("html").addClass("safari");
         } else if (navigator.userAgent.search("Opera") >= 0) {
            $("html").addClass("opera");
         }
      });
   </script>
<?php
}
add_filter('document_title_separator', 'yanews_document_title_separator');
function yanews_document_title_separator($sep)
{
   $sep = esc_html('|');
   return $sep;
}
add_filter('the_title', 'yanews_title');
function yanews_title($title)
{
   if ($title == '') {
      return esc_html('...');
   } else {
      return wp_kses_post($title);
   }
}
function yanews_schema_type()
{
   $schema = 'https://schema.org/';
   if (is_single()) {
      $type = "Article";
   } elseif (is_author()) {
      $type = 'ProfilePage';
   } elseif (is_search()) {
      $type = 'SearchResultsPage';
   } else {
      $type = 'WebPage';
   }
   echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}
add_filter('nav_menu_link_attributes', 'yanews_schema_url', 10);
function yanews_schema_url($atts)
{
   $atts['itemprop'] = 'url';
   return $atts;
}
if (!function_exists('yanews_wp_body_open')) {
   function yanews_wp_body_open()
   {
      do_action('wp_body_open');
   }
}
add_action('wp_body_open', 'yanews_skip_link', 5);
function yanews_skip_link()
{
   echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'yanews') . '</a>';
}
add_filter('the_content_more_link', 'yanews_read_more_link');
function yanews_read_more_link()
{
   if (!is_admin()) {
      return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'yanews'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
   }
}
add_filter('excerpt_more', 'yanews_excerpt_read_more_link');
function yanews_excerpt_read_more_link($more)
{
   if (!is_admin()) {
      global $post;
      return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'yanews'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
   }
}
add_filter('big_image_size_threshold', '__return_false');


add_action('wp_head', 'yanews_pingback_header');
function yanews_pingback_header()
{
   if (is_singular() && pings_open()) {
      printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
   }
}
add_action('comment_form_before', 'yanews_enqueue_comment_reply_script');
function yanews_enqueue_comment_reply_script()
{
   if (get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
function yanews_custom_pings($comment)
{
?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
<?php
}
add_filter('get_comments_number', 'yanews_comment_count', 0);
function yanews_comment_count($count)
{
   if (!is_admin()) {
      global $id;
      $get_comments = get_comments('status=approve&post_id=' . $id);
      $comments_by_type = separate_comments($get_comments);
      return count($comments_by_type['comment']);
   } else {
      return $count;
   }
}

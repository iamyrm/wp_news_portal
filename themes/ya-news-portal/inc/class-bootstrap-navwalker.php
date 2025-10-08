<?php

/**
 * Custom Bootstrap 5 Nav Walker for WordPress
 */
class Bootstrap_5_WP_Nav_Menu_Walker extends Walker_Nav_menu
{

   private $current_item;
   private $dropdown_toggle = '<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">%s</a>';

   function start_lvl(&$output, $depth = 0, $args = null)
   {
      $submenu = ($depth > 0) ? ' dropdown-submenu' : '';
      $output .= "\n<ul class=\"dropdown-menu list-unstyled$submenu depth_$depth\">\n";
   }

   function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
   {
      $this->current_item = $item;
      $classes = empty($item->classes) ? array() : (array)$item->classes;
      $classes[] = 'nav-item';
      if (in_array('menu-item-has-children', $classes)) {
         $classes[] = 'dropdown';
      }

      $class_names = join(' ', array_filter($classes));
      $class_names = ' class="' . esc_attr($class_names) . '"';
      $output .= '<li' . $class_names . '>';

      $atts = array();
      $atts['class'] = 'nav-link';
      $atts['href'] = !empty($item->url) ? $item->url : '#';

      // Dropdown parent
      if (in_array('menu-item-has-children', $classes)) {
         $atts['class'] .= ' dropdown-toggle';
         $atts['data-bs-toggle'] = 'dropdown';
         $atts['aria-expanded'] = 'false';
      }

      $attributes = '';
      foreach ($atts as $attr => $value) {
         if (!empty($value)) {
            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
            $attributes .= ' ' . $attr . '="' . $value . '"';
         }
      }

      $title = apply_filters('the_title', $item->title, $item->ID);
      $item_output = $args->before;
      $item_output .= '<a' . $attributes . '>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= $item_output;
   }

   function end_el(&$output, $item, $depth = 0, $args = null)
   {
      $output .= "</li>\n";
   }
}


class Responsive_WP_Nav_Menu_Walker extends Walker_Nav_Menu
{

   function start_lvl(&$output, $depth = 0, $args = null)
   {
      $indent = str_repeat("\t", $depth);
      $submenu_class = 'responsive-menu-items';
      $output .= "\n$indent<ul class=\"$submenu_class\">\n";
   }

   function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
   {
      $indent = str_repeat("\t", $depth);

      // Add classes
      $classes = empty($item->classes) ? array() : (array) $item->classes;
      if ($depth === 0) $classes[] = 'responsive-menu-list';
      $classes = array_filter($classes);
      $class_names = join(' ', $classes);
      $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

      $output .= $indent . '<li' . $class_names . '>';

      $atts = array();
      $atts['title'] = !empty($item->title) ? $item->title : '';
      $atts['href'] = !empty($item->url) ? $item->url : '#';

      // Build parent link
      $attributes = '';
      foreach ($atts as $attr => $value) {
         if (!empty($value)) {
            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
            $attributes .= " $attr=\"$value\"";
         }
      }
      $title = apply_filters('the_title', $item->title, $item->ID);
      $output .= '<a' . $attributes . '>' . $title . '</a>';

      // If item has children, add a separate toggle icon
      if (in_array('menu-item-has-children', $classes)) {
         $output .= ' <span class="dropdown-toggle-icon" onclick="event.stopPropagation(); this.parentElement.classList.toggle(\'open\');">&#9662;</span>';
      }
   }

   function end_el(&$output, $item, $depth = 0, $args = null)
   {
      $output .= "</li>\n";
   }
}

// OffCanvas menu
class Responsive_Menu_Walker extends Walker_Nav_Menu
{

   /**
    * Starts the list before the elements are added.
    */
   public function start_lvl(&$output, $depth = 0, $args = null)
   {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"responsive-menu-items\">\n";
   }

   /**
    * Starts the element output.
    */
   public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
   {
      $indent = ($depth) ? str_repeat("\t", $depth) : '';

      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      // Add responsive-menu-list class to parent items
      if ($args->walker->has_children) {
         $classes[] = 'responsive-menu-list';
      }

      // Check if menu item is current or ancestor
      $is_active = in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes);
      $active_class = $is_active ? ' active' : '';

      $output .= $indent . '<li class="' . implode(' ', $classes) . '">';

      $attributes = '';
      $attributes .= !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
      $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
      $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
      $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';

      // For parent items with children, use javascript:void(0) and add active class
      if ($args->walker->has_children) {
         $output .= '<a href="javascript:void(0);" class="' . $active_class . '">';
      } else {
         $output .= '<a' . $attributes . ' class="' . $active_class . '">';
      }

      $output .= apply_filters('the_title', $item->title, $item->ID);
      $output .= '</a>';
   }

   /**
    * Ends the element output, if needed.
    */
   public function end_el(&$output, $item, $depth = 0, $args = null)
   {
      $output .= "</li>\n";
   }

   /**
    * Ends the list of after the elements are added.
    */
   public function end_lvl(&$output, $depth = 0, $args = null)
   {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</ul>\n";
   }
}

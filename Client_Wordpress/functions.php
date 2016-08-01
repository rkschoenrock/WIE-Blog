<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
	/* Events Widget */
    register_sidebar( array(
        'name' 			=> ('Events Widget'),
        'id' 			=> 'events-widget',
        'description'   => 'Widget for our events',
        'before_widget' => '<div class="widget-events">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));

	/* First Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('First Footer Widget'),
		'id' 	 		=> 'footer-one',
		'description'	=> 'Left widget in the footer',
		'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));

	/* Second Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('Second Footer Widget'),
		'id' 	 		=> 'footer-two',
		'description'	=> 'Middle widget in the footer',
		'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));


	/* Third Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('Third Footer Widget'),
		'id' 	 		=> 'footer-three',
		'description'	=> 'Right widget in the footer',
		'before_widget' => '<div class="widget-footer widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));

    }
add_action('widgets_init', 'blank_widgets_init');


/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );


/*-------------- Enable Breadcrumbs --------------*/
function add_breadcrumbs() {
    $post_ancestors = get_post_ancestors($post);
    if (count($post_ancestors)) {
        $top_page = array_pop($post_ancestors);
        $children = wp_list_pages('title_li=&child_of=' . $top_page . '&echo=0');
    } elseif (is_page()) {
        $children = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0&depth=2');
    }
    if (is_page() && !is_front_page()) {
        $breadcrumb = "<nav id='breadcrumb'><ul>";
        $breadcrumb .= '<li><a href=" ' . get_bloginfo('url') . '">Home</a></li>';
        $post_ancestors = get_post_ancestors($post);
    if ($post_ancestors) {
        $post_ancestors = array_reverse($post_ancestors);
    foreach ($post_ancestors as $crumb)
        $breadcrumb .= '<li><a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a></li>';
    }
    $breadcrumb .= '<li><strong>' . get_the_title() . '</strong></li>';
    $breadcrumb .= "</ul></nav>";
    echo $breadcrumb;
    }
}


/*----------Dropdown Menu---------*/

//add_theme_support( 'menus' );
class CSS_Menu_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }

    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' =>'_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}

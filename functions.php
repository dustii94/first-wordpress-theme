<?php

// This is how you would use PHP to add CSS to a theme
function wpt_theme_styles() {

  wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/css/fontawesome.min.css');
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'iceberg_css', 'https://fonts.googleapis.com/css?family=Iceberg');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

// This is how you would use PHP to add JavaScript to a theme
function wpt_theme_js() {

  wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', '', false );
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', false );
  wp_enqueue_script( 'responsive_js', get_template_directory_uri() . '/js/responsive.js', array('jquery'), '', false );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

// This registers a navigation menu
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'menus' );

// This adds a home link
function home_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


// Thumnail support
add_theme_support( 'post-thumbnails' );

/**
 * Filter the except length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '... ';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

class breadcrumb {
  private $breadcrumb; // holds the HTML

  private $separator = ' / '; // the HTML divider between breadcrumbs

  private $domain;

  public function build($array) {
    $domain = home_url();

    $breadcrumbs = array_merge(array('home' => ''), $array);

    $count = 0;

    foreach($breadcrumbs as $title => $link){
      $this->breadcrumb .= '
        <span>
          <a href="'.$this->domain.'/'.$link.'">
            <span>' .$title. '</span>
          </a>
        </span>
      ';

      $count++;

      if($count !== count($breadcrumbs)) {
        $this->breadcrumb .= $this->separator;
      }
    }
    return $this->breadcrumb;
  }
}

?>

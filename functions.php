<?php
function kmtemp_styles_scripts() {
  // Connect Styles
  wp_enqueue_style( 'normalize-styles', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css');
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'fa_style', get_template_directory_uri() . '/fa/css/all.min.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/style.css', array(), '1.0');

  // Register Scripts
  wp_register_script('jquery_3', 'http://code.jquery.com/jquery-3.4.1.min.js', array(), '3.4.1', true);
  wp_register_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), '1.19.0', true);
  wp_register_script('timelinemax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TimelineMax.min.js', array(), '1.19.0', true);
  wp_register_script('script_js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);

  // Connect Scripts
  wp_enqueue_script('jquery_3');
  wp_enqueue_script('tweenmax');
  wp_enqueue_script('timelinemax');
  wp_enqueue_script('script_js');
}

add_action( 'wp_enqueue_scripts', 'kmtemp_styles_scripts');

// Регистрирует новую боковую панель под названием 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name' => 'Sidebar',
                                'id' => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget' => '</div>',
                                'before_title' => '<h2>',
                                'after_title' => '</h2>',
                ) );
}
// Подхватывает(hook) инициацию виджета и запускает нашу функцию
add_action( 'widgets_init', 'add_widget_Support' );

// Регистрирует новое навигационное меню
function add_Main_Nav() {
  register_nav_menus(array(
    'top'     => 'Верхнее меню (Custom)',
    'bottom'  => 'Нижнее меню (Custom)'
  ));
}
// Подхватывает (hook) init хук-событие, запускает функцию нашего навигационного меню
add_action( 'init', 'add_Main_Nav' );

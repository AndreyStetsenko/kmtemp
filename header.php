<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <!-- <div class="bprel">
      <div class="prel">
         <h1 class="preloader p1" data-content="V">V</h1>
         <h1 class="preloader p2" data-content="I">I</h1>
         <h1 class="preloader p3" data-content="T">T</h1>
         <h1 class="preloader p4" data-content="E">E</h1>
         <h1 class="preloader p5" data-content="R">R</h1>
      </div>
   </div> -->
   <header class="head">
     <div class="three col">
        <div class="fullscreen-menu-container js-menu-container">
           <a class="menu-button js-menu-close">
              <div class="menu-icon is-active">
                 <span></span>
                 <span></span>
                 <span></span>
              </div>
           </a>
           <div class="fullscreen-menu">
             <?php
               wp_nav_menu( array(
                 'container'       => 'div',
                 'container_class' => 'modal-menu',
                 'echo'            => true,
                 'fallback_cb'     => 'wp_page_menu',
                 'link_before'     => '<h2 class="menuitem">',
                 'link_after'      => '</h2>',
                 'depth'           => 1,
                 'theme_location'  => 'top'
               ));
              ?>
           </div>
        </div>
        <aside class="card__image-container">
        <a class="menu-button js-menu-button">
           <div class="menu-icon">
              <span></span>
              <span></span>
              <span></span>
           </div>
        </a>
        <div class="mini-player">
          <div class="track_info_wrapper">
            <div class="track_info">
              <div class="thumb"></div>
              <div class="info">
                <div class="title">Friday Comes</div>
                <div class="artist">Early</div>
              </div>
            </div>
          </div>
          <div class="mini-player_btn_wrapper"><i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
            <div class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div><i class="btn-next fa fa-step-forward" aria-hidden="true"></i><i class="btn-open-player fa fa-list" aria-hidden="true"></i>
          </div>
        </div>
        <div class="dim"></div>
        <div class="player" id="player">
           <div class="playback_wrapper">
              <div class="playback_blur"></div>
              <div class="playback_thumb"></div>
              <div class="playback_info">
                 <div class="title">Friday Comes</div>
                 <div class="artist">Gena VITER</div>
              </div>
              <div class="playback_btn_wrapper">
                 <i class="btn-prev fa fa-step-backward" aria-hidden="true"></i>
                 <div class="btn-switch"><i class="btn-play fa fa-play" aria-hidden="true"></i><i class="btn-pause fa fa-pause" aria-hidden="true"></i></div>
                 <i class="btn-next fa fa-step-forward" aria-hidden="true"></i>
              </div>
              <div class="playback_timeline">
                 <div class="playback_timeline_start-time">00:31</div>
                 <div class="playback_timeline_slider">
                    <div class="slider_base"></div>
                    <div class="slider_progress"></div>
                    <div class="slider_handle"></div>
                 </div>
                 <div class="playback_timeline_end-time">03:11</div>
              </div>
           </div>
           <div class="list_wrapper">
              <ul class="list">
                 <li class="list_item selected">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
                 <li class="list_item">
                    <div class="thumb"> </div>
                    <div class="info">
                       <div class="title">Friday Comes</div>
                       <div class="artist">Gena VITER</div>
                    </div>
                 </li>
              </ul>
           </div>
        </div>
     </div>
   </header>

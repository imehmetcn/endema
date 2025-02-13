<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="robots" content="index, follow" >
    <meta name="author" content="Endema Yachts">

    <?php 
        if (is_page('about')) :
            echo '<title>Endema Yacht - ABOUT US</title>' . "\n";
            echo '<meta name="description" content="Learn more about our journey and expertise in yacht building and refitting" />';

        elseif (is_page('newbuild')) :
            echo '<title>Endema Yacht - NEWBUILDS</title>' . "\n";
            echo '<meta name="description" content="Expertise in constructing quality yachts tailored to your needs" />';

        elseif (is_page('refit')) :
            echo '<title>Endema Yacht - REFITS</title>' . "\n";
            echo '<meta name="description" content="Transforming and restoring yachts with precision and care" />';

        elseif (is_page('contact')) :
            echo '<title>Endema Yacht - CONTACT US</title>' . "\n";
            echo '<meta name="description" content="Get in touch for your yacht building or refitting needs" />';

            elseif (is_page('ocean90')) :
              echo '<title>Endema Yacht - OCEAN90 NewBuild</title>' . "\n";
              echo '<meta name="description" content="Discover the OCEAN90, A custom built luxury yacht designed for unparalleled comfort and performance on the open sea" />';


                elseif (is_page('rasha')) :
                  echo '<title>Endema Yacht - Rasha Luxury Yacht Refit</title>' . "\n";
                  echo '<meta name="description" content="Experience the transformed Rasha, a luxury yacht refitted to perfection for superior comfort, style, and performance on the water." />';
                
                  
                  elseif (is_page('mystereab')) :
                    echo '<title>Endema Yacht - Mystereab Luxury Yacht Refit</title>' . "\n";
                    echo '<meta name="description" content="Explore Mystereab, a luxury yacht completely refitted to provide exceptional comfort and performance for your sea adventures." />';
                  
                  
                   
                    elseif (is_page('liberta')) :
                      echo '<title>Endema Yacht - Liberta Luxury Yacht Refit</title>' . "\n";
                      echo '<meta name="description" content="Discover Liberta, a meticulously refitted luxury yacht offering unmatched elegance, comfort, and performance at sea." />';
                    
                     
                      elseif (is_page('jafetica')) :
                        echo '<title>Endema Yacht - Jafetica Luxury Yacht Refit</title>' . "\n";
                        echo '<meta name="description" content="Jafetica is a luxury yacht that has undergone a complete refit, designed to provide ultimate comfort and exceptional performance on the open sea." />';
                      
                      
                      
                        elseif (is_page('ileria')) :
                          echo '<title>Endema Yacht - Ileria Luxury Yacht Refit</title>' . "\n";
                          echo '<meta name="description" content="Ileria is a refitted luxury yacht, upgraded for an enhanced experience, combining luxury with performance for unforgettable journeys." />';
                        
                          
                          elseif (is_page('4you')) :
                            echo '<title>Endema Yacht - 4You Luxury Yacht Refit</title>' . "\n";
                            echo '<meta name="description" content="4You is a luxury yacht that has been refitted to offer unparalleled comfort, elegance, and performance on every voyage." />';
                          

        elseif (is_front_page() || is_home()) :
            echo '<title>Endema Yacht Building & Refitting</title>' . "\n";
            echo '<meta name="description" content="Specializing in high quality yacht construction and refit services tailored to your preferences" />';  
                      
        endif;
    ?>

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel:400,700%7CRaleway:500,500i,600,700%7CMaterial+Icons&amp;display=swap"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Template Vendor's Stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://endema.com.tr/wp-content/themes/endema/css/vendor.css"/>
    <link rel="stylesheet" type="text/css" href="https://endema.com.tr/wp-content/themes/endema/css/main.css"/>

    <!-- Favicons & App Icons -->
    <link rel="icon" type="image/x-icon" href="https://endema.com.tr/wp-content/themes/endema/img/assets/favicon/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://endema.com.tr/wp-content/themes/endema/img/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://endema.com.tr/wp-content/themes/endema/img/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://endema.com.tr/wp-content/themes/endema/img/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://endema.com.tr/wp-content/themes/endema/img/assets/favicon/site.webmanifest">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="Endema Yacht Yacht Building & Refitting" />
    <meta property="og:description" content="Endema Yachts has specialized in high quality yacht construction and refit" />
    <meta property="og:image" content="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/endema.png" />
    <meta property="og:url" content="https://www.endema.com.tr/" />
    <meta property="og:type" content="website" />

    <!-- WP Meta Tags -->
</head>
<body>
<div data-barba="wrapper">

<!-- page curtain AJAX transition -->
<div class="curtain transition-curtain" id="js-page-transition-curtain">
<div class="curtain__wrapper-svg">
  <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
  </svg>
</div>
</div>
<!-- - page curtain AJAX transition -->

<!-- header curtain show/hide -->
<div class="header-curtain curtain" id="js-header-curtain">
<div class="curtain__wrapper-svg">
  <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
  </svg>
</div>
</div>
<!-- - header curtain show/hide -->

<!-- header curtain AJAX transition -->
<div class="header-curtain header-curtain_transition curtain" id="js-header-curtain-transition">
<div class="curtain__wrapper-svg">
  <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
    <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
  </svg>
</div>
</div>
<!-- - header curtain AJAX transition -->

<!-- Cursor Follower-->
<div class="cursor" id="js-cursor">
<div class="cursor__wrapper">
  <div class="cursor__arrows">
    <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
    <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
    <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
    <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
  </div>
  <div class="cursor__label"></div>
  <div class="cursor__icon material-icons"></div>
</div>
</div>
<!-- - Cursor Follower-->


<!-- PAGE HEADER -->
<header class="header header_menu-right header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="light" data-arts-header-sticky-theme="bg-dark-2" data-arts-header-logo="secondary" data-arts-header-sticky-logo="secondary" data-arts-header-overlay-theme="dark" data-arts-header-overlay-background="#000">
<div class="header__container header__controls">
  <div class="row justify-content-between align-items-center">

    <!-- logo -->
    <div class="col-auto header__col header__col-left"><a class="logo" href="https://endema.com.tr/">
        <div class="logo__wrapper-img">
            <img class=logo__img-primary src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width=90 height=20>
            <img class=logo__img-secondary src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width=120 height=20>
        </div></a>
    </div>
    <!-- - logo -->

    <!-- - nav menu icon -->
    <div class="col-auto header__col">
      <div class="header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
        <div class="header__burger-line"></div>
        <div class="header__burger-line"></div>
        <div class="header__burger-line"></div>
      </div>
    </div>
    <!-- - nav menu icon -->

    <!-- "back" button for submenu nav -->
    <div class="header__overlay-menu-back" id="js-submenu-back">
      <div class="arrow arrow-left js-arrow arrow_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
        </svg>
        <div class="arrow__pointer arrow-left__pointer"></div>
        <div class="arrow__triangle"></div>
      </div>
    </div>
    <!-- - "back" button for submenu nav -->

  </div>
</div>



<div class="header__wrapper-overlay-menu container-fluid container-fluid_paddings">
    <div class=header__wrapper-menu>
    <ul class="menu-overlay js-menu-overlay">
    <li class=menu-item-has-children>
    <a class=h2 href=https://endema.com.tr/ data-pjax-link=overlayMenu>
    <div class="endema-servis menu-overlay__item-wrapper split-text js-split-text" data-split-text-type=lines>HOME</div></a>
    </li>
    <li class=menu-item-has-children>
    <a class=h2 href=https://endema.com.tr/about data-pjax-link=overlayMenu>
    <div class="endema-servis menu-overlay__item-wrapper split-text js-split-text" data-split-text-type=lines>ABOUT US</div></a>
    </li>
    <li class=menu-item-has-children>
    <a class=h2 href=https://endema.com.tr/newbuild data-pjax-link=overlayMenu>
    <div class="endema-servis menu-overlay__item-wrapper split-text js-split-text" data-split-text-type=lines>NEWBUILDS</div></a>
    </li>
    <li class=menu-item-has-children>
    <a class=h2 href=https://endema.com.tr/refit data-pjax-link=overlayMenu>
    <div class="endema-servis menu-overlay__item-wrapper split-text js-split-text" data-split-text-type=lines>REFITS</div></a>
    </li>
    <li class=menu-item-has-children>
    <a class=h2 href=https://endema.com.tr/contact data-pjax-link=overlayMenu>
    <div class="endema-servis menu-overlay__item-wrapper split-text js-split-text" data-split-text-type=lines>CONTACT US</div></a>
    </li>
    </ul>
    </div>


        <!-- fullscreen widgets -->
        <div class="header__wrapper-overlay-widgets">
          <div class="row">
            <!-- widget TEXT -->
            <div class="col-lg-4 header__widget">
              <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines"></div>
              <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                <p><a href=""></a><br/><br/><br/>
                </p>
              </div>
            </div>
            <!-- - widget TEXT -->
            <!-- widget TEXT -->
            <div class="col-lg-4 header__widget">
              <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines"></div>
              <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                <p><br/><br/><br/>
                </p>
              </div>
            </div>
            <!-- - widget TEXT -->
            <!-- widget TEXT -->
            <div class="col-lg-4 header__widget">
              <div class="header__widget-title yat-baslik js-split-text split-text" data-split-text-type="lines">CONTACT US</div>
              <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">

                <p><a href=tel:+902425027374>+90 242 502 7374</a> <br> <a href=mailto:info@endema.com.tr>info@endema.com.tr</a>
                  <p>Antalya Free Zone Antalya Turkey<br>
                  <ul class="social textbg">
              <li class=social__item><a class="fa fa-instagram" href=https://www.instagram.com/endemashipyard/ ></a></li>
              <li class=social__item><a class="fa fa-linkedin" href=https://tr.linkedin.com/company/endema-shipyard></a></li>
              </ul>
              </p>

              </div>
            </div>
            <!-- - widget TEXT -->
          </div>
        </div>
        <!-- - fullscreen widgets -->
      </div>

    </div>
    
    
    </header>

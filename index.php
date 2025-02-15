<?php get_header(); ?>

      <div class="js-smooth-scroll" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
          <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
            <div class="section-fullheight__inner text-center">
              <div class="slider slider-fullscreen-projects js-slider-fullscreen-projects js-slider">
                <div class="slider-fullscreen-projects__content swiper-container pointer-events-none js-slider-fullscreen-projects__content">
                  <div class="swiper-wrapper pt-large pb-xsmall">
                    <div class="swiper-slide">
                    <h2 class="endema-servis mt-5 mb-0 textbg slider_heading js-split-text">
                    <?php echo esc_html( get_theme_mod('1️⃣ Slider 1_title', 'Excellence Integrıty Experıence') ); ?></h2>
                       </div>
                    <div class="swiper-slide">
                    <h2 class="endema-servis mt-5 mb-0 textbg slider__heading js-split-text">
    <?php echo esc_html( get_theme_mod('2️⃣ Slider 2_title', 'ABOUT US') ); ?>
</h2>                    </div>
                    <div class="swiper-slide">
                    <h2 class="endema-servis mt-5 mb-0 textbg slider__heading js-split-text">
    <?php echo esc_html( get_theme_mod('3️⃣ Slider 3_title', 'NEWBUILDS') ); ?>
</h2>                    </div>
                    <div class="swiper-slide">
                    <h2 class="endema-servis mt-5 mb-0 textbg slider__heading js-split-text">
    <?php echo esc_html( get_theme_mod('4️⃣ Slider 4_title', 'REFITS') ); ?>
</h2>                      </div>
                    <div class="swiper-slide">
                    <h2 class="endema-servis mt-5 mb-0 textbg slider__heading js-split-text">
    <?php echo esc_html( get_theme_mod('5️⃣ Slider 5_title', 'CONTACT US') ); ?>
</h2>                    </div>
                  </div>
                </div>

                <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-transition-effect="enterLeave" data-speed="1200" data-autoplay-enabled="true" data-autoplay-delay="6000" data-counter-style="roman" data-touch-ratio="1.5" data-drag-mouse="false" data-drag-cursor="false" data-drag-class="slider-fullscreen-projects__images_scale-up">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide overflow">
                        <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                            
                            <!-- Masaüstü için arka plan -->
<div class="slider__bg swiper-lazy js-transition-img__transformed-el" 
     data-background="<?php echo esc_url( get_theme_mod('1️⃣ Slider 1_bg_image', get_template_directory_uri() . '/img/assets/bg.jpg') ); ?>">
</div>





                            
                            <!-- Mobil için arka plan 
                            <div class="mobile-endema slider__bg swiper-lazy js-transition-img__transformed-el" 
                                 data-background="https://endema.com.tr/wp-content/themes/endema/img/assets/bg/test.jpg">
                            </div>
                          Mobil için arka plan -->

                        </div>
                    </div>
                    
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                          <div class="slider__bg swiper-lazy js-transition-img__transformed-el" 
     data-background="<?php echo esc_url( get_theme_mod('2️⃣ Slider 2_bg_image', get_template_directory_uri() . '/img/assets/bg/bg7.webp') ); ?>">
</div>
                      
                        </div>
                    </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                          <div class="slider__bg swiper-lazy js-transition-img__transformed-el" 
     data-background="<?php echo esc_url( get_theme_mod('3️⃣ Slider 3_bg_image', get_template_directory_uri() . '/img/assets/bg/bg8.webp') ); ?>">
</div>
                        </div>
                    </div>
                    <div class="swiper-slide overflow">
                    <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                      <div class="slider__bg swiper-lazy js-transition-img__transformed-el" 
     data-background="<?php echo esc_url( get_theme_mod('4️⃣ Slider 4_bg_image', get_template_directory_uri() . '/img/assets/refits.jpg') ); ?>">
</div>
                    
                    </div>

                      </div>
                    <div class="swiper-slide overflow">
                      <div class="slider__images-slide-inner js-transition-img overflow" data-swiper-parallax="90%">
                          <div class="slider__bg swiper-lazy js-transition-img__transformed-el" 
     data-background="<?php echo esc_url( get_theme_mod('5️⃣ Slider 5_bg_image', get_template_directory_uri() . '/img/assets/contactus.jpg') ); ?>">
</div>
                        </div>
                    </div>
                  </div>
                  <div class="slider__overlay overlay overlay_dark"></div>
                </div>

                <div class="slider-fullscreen-projects__footer swiper-container js-slider-fullscreen-projects__footer">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slider__wrapper-button-footer">
                <a class="button button_white button_bordered" data-hover="<?php echo esc_html(get_theme_mod('1️⃣ Slider 1_data_hover', 'More Endema')); ?>" href="<?php echo esc_url(get_theme_mod('1️⃣ Slider 1_href', 'https://endema.com.tr/about')); ?>" data-pjax-link="fullscreenSlider">
                    <span class="button__label-hover"><?php echo esc_html(get_theme_mod('1️⃣ Slider 1_button_text', 'MORE')); ?></span>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slider__wrapper-button-footer">
                <a class="button button_white button_bordered" data-hover="<?php echo esc_html(get_theme_mod('2️⃣ Slider 2_data_hover', 'More About')); ?>" href="<?php echo esc_url(get_theme_mod('2️⃣ Slider 2_href', 'https://endema.com.tr/about')); ?>" data-pjax-link="fullscreenSlider">
                    <span class="button__label-hover"><?php echo esc_html(get_theme_mod('2️⃣ Slider 2_button_text', 'MORE')); ?></span>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slider__wrapper-button-footer">
                <a class="button button_white button_bordered" data-hover="<?php echo esc_html(get_theme_mod('3️⃣ Slider 3_data_hover', 'More Newbuild')); ?>" href="<?php echo esc_url(get_theme_mod('3️⃣ Slider 3_href', 'https://endema.com.tr/newbuild')); ?>" data-pjax-link="fullscreenSlider">
                    <span class="button__label-hover"><?php echo esc_html(get_theme_mod('3️⃣ Slider 3_button_text', 'MORE')); ?></span>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slider__wrapper-button-footer">
                <a class="button button_white button_bordered" data-hover="<?php echo esc_html(get_theme_mod('4️⃣ Slider 4_data_hover', 'More Refits')); ?>" href="<?php echo esc_url(get_theme_mod('4️⃣ Slider 4_href', 'https://endema.com.tr/refit')); ?>" data-pjax-link="fullscreenSlider">
                    <span class="button__label-hover"><?php echo esc_html(get_theme_mod('4️⃣ Slider 4_button_text', 'MORE')); ?></span>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slider__wrapper-button-footer">
                <a class="button button_white button_bordered" data-hover="<?php echo esc_html(get_theme_mod('5️⃣ Slider 5_data_hover', 'More Contact')); ?>" href="<?php echo esc_url(get_theme_mod('5️⃣ Slider 5_href', 'https://endema.com.tr/contact')); ?>" data-pjax-link="fullscreenSlider">
                    <span class="button__label-hover"><?php echo esc_html(get_theme_mod('5️⃣ Slider 5_button_text', 'MORE')); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>


                
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>  



    <?php get_footer(); ?>
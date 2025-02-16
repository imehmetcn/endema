<?php

// anasayfa
function endema_customize_register($wp_customize) {
    // Slider ayarları sekmesi
    $wp_customize->add_section('endema_slider_settings', array(
        'title'    => __('Anasayfa Özelleştirme', 'endema'),
        'priority' => 30,
    ));

    // 5 slider için başlık, yazılar ve linkler
    $slider_data = array(
        '1️⃣ Slider 1' => array(
            'title' => 'Excellence Integrıty Experıence',
            'bg' => get_template_directory_uri() . '/img/assets/bg.jpg',
            'data_hover' => 'More Endema',
            'href' => 'https://endema.com.tr/about',
            'button_text' => 'MORE',
        ),
        '2️⃣ Slider 2' => array(
            'title' => 'ABOUT US',
            'bg' => get_template_directory_uri() . '/img/assets/bg/bg7.webp',
            'data_hover' => 'More About',
            'href' => 'https://endema.com.tr/about',
            'button_text' => 'MORE',
        ),
        '3️⃣ Slider 3' => array(
            'title' => 'NEWBUILDS',
            'bg' => get_template_directory_uri() . '/img/assets/bg/bg8.webp',
            'data_hover' => 'More Newbuild',
            'href' => 'https://endema.com.tr/newbuild',
            'button_text' => 'MORE',
        ),
        '4️⃣ Slider 4' => array(
            'title' => 'REFITS',
            'bg' => get_template_directory_uri() . '/img/assets/refits.jpg',
            'data_hover' => 'More Refits',
            'href' => 'https://endema.com.tr/refit',
            'button_text' => 'MORE',
        ),
        '5️⃣ Slider 5' => array(
            'title' => 'CONTACT US',
            'bg' => get_template_directory_uri() . '/img/assets/contactus.jpg',
            'data_hover' => 'More Contact',
            'href' => 'https://endema.com.tr/contact',
            'button_text' => 'MORE',
        ),
    );

    // Her bir slider için başlık, arka plan, buton yazısı ve link ayarları
    foreach ($slider_data as $slider_key => $slider_values) {

        // Başlık ayarı
        $wp_customize->add_setting("{$slider_key}_title", array(
            'default'   => $slider_values['title'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("{$slider_key}_title", array(
            'label'    => __("{$slider_key} Başlık", 'endema'),
            'section'  => 'endema_slider_settings',
            'type'     => 'text',
        ));

                // button__label-hover yazısı ayarı
            $wp_customize->add_setting("{$slider_key}_button_text", array(
                'default'   => $slider_values['button_text'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$slider_key}_button_text", array(
                'label'    => __("{$slider_key} Buton Yazı ", 'endema'),
                'section'  => 'endema_slider_settings',
                'type'     => 'text',
            ));

            // data-hover ayarı
            $wp_customize->add_setting("{$slider_key}_data_hover", array(
                'default'   => $slider_values['data_hover'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$slider_key}_data_hover", array(
                'label'    => __("{$slider_key} Buton İkinci Yazı", 'endema'),
                'section'  => 'endema_slider_settings',
                'type'     => 'text',
            ));
    
            // href ayarı
            $wp_customize->add_setting("{$slider_key}_href", array(
                'default'   => $slider_values['href'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$slider_key}_href", array(
                'label'    => __("{$slider_key} Buton Link", 'endema'),
                'section'  => 'endema_slider_settings',
                'type'     => 'url',
            ));


        // Arka plan resmi ayarı
        $wp_customize->add_setting("{$slider_key}_bg_image", array(
            'default'   => $slider_values['bg'],
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "{$slider_key}_bg_image", array(
            'label'    => __("{$slider_key} Arka Planı", 'endema'),
            'section'  => 'endema_slider_settings',
            'settings' => "{$slider_key}_bg_image",
        )));

    }
}
add_action('customize_register', 'endema_customize_register');
// anasayfa



// About Sayfası Özelleştirme
function endema_about_customize_register($wp_customize) {
    // About sayfası ayarları sekmesi
    $wp_customize->add_section('endema_about_settings', array(
        'title'    => __('About Sayfası Özelleştirme', 'endema'),
        'priority' => 35,
        'description' => __('About sayfasını görmek için <a href="' . home_url('/about/') . '" target="_blank">buraya tıklayın</a>.', 'endema'),
    ));

    

    // About sayfası için başlık, yazılar ve resimler
    $about_data = array(
        'about_masthead' => array(
            'title' => 'ABOUT US',
            'bg' => get_template_directory_uri() . '/img/assets/bg/bg7.webp',
            'button_text' => 'Discover More',
        ),
        'about_önizleme' => array(
            'button_text' => 'Önizleme Sayfasını Aç',
            'button_link' => admin_url('/customize.php?url=https://endema.com.tr/about/'),
        ),
        'about_section_1' => array(
            'title' => 'Endema Shipyard',
            'content' => 'Endema Shipyard, a dynamic and rapidly growing Turkish yacht builder...',
            'image' => get_template_directory_uri() . '/img/assets/about/aboutus.webp',
        ),
        'about_section_2' => array(
            'title' => 'Our Expertise',
            'content' => 'Our team of experienced engineers and highly skilled workers...',
            'image' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/13.jpg',
        ),
        'about_section_3' => array(
            'title' => 'Refit & Services',
            'content' => 'In addition to our expertise in yacht building, our refit line...',
            'image_1' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/14.jpg',
            'image_2' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/17.jpg',
            'image_3' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/16.jpg',
            'image_4' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/11.jpg',
            'image_5' => get_template_directory_uri() . '/img/assets/steel-and-aliuminum/10.jpg',
        ),
    );

    // Her bir bölüm için başlık, içerik ve resim ayarları
    foreach ($about_data as $section_key => $section_values) {
        
        // Özel Önizleme Butonu Ayarı
        if ($section_key === 'about_önizleme') {
            $wp_customize->add_setting("{$section_key}_button_text", array(
                'default'   => $section_values['button_text'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, "{$section_key}_button_text", array(
                'label'    => __('Önizleme', 'endema'),
                'section'  => 'endema_about_settings',
                'type'     => 'hidden',
                'description' => '<a href="' . esc_url($section_values['button_link']) . '" target="_blank" class="button button-primary">' . esc_html($section_values['button_text']) . '</a>',
            )));
            continue;
        }
        
        // Başlık ayarı
        $wp_customize->add_setting("{$section_key}_title", array(
            'default'   => $section_values['title'] ?? '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("{$section_key}_title", array(
            'label'    => __("{$section_key} Başlık", 'endema'),
            'section'  => 'endema_about_settings',
            'type'     => 'text',
        ));
        
        // İçerik ayarı
        if (isset($section_values['content'])) {
            $wp_customize->add_setting("{$section_key}_content", array(
                'default'   => $section_values['content'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$section_key}_content", array(
                'label'    => __("{$section_key} İçerik", 'endema'),
                'section'  => 'endema_about_settings',
                'type'     => 'textarea',
            ));
        }

        // Resim ayarı (tek resim)
        if (isset($section_values['image'])) {
            $wp_customize->add_setting("{$section_key}_image", array(
                'default'   => $section_values['image'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "{$section_key}_image", array(
                'label'    => __("{$section_key} Resim", 'endema'),
                'section'  => 'endema_about_settings',
                'settings' => "{$section_key}_image",
            )));
        }

        // Çoklu resim ayarı (slider için)
        if (isset($section_values['image_1'])) {
            for ($i = 1; $i <= 5; $i++) {
                if (!isset($section_values["image_{$i}"])) continue;
                $wp_customize->add_setting("{$section_key}_image_{$i}", array(
                    'default'   => $section_values["image_{$i}"],
                    'transport' => 'refresh',
                ));
                $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "{$section_key}_image_{$i}", array(
                    'label'    => __("{$section_key} Resim {$i}", 'endema'),
                    'section'  => 'endema_about_settings',
                    'settings' => "{$section_key}_image_{$i}",
                )));
            }
        }

        // Buton 
        if (isset($section_values['button_text'])) {
            $wp_customize->add_setting("{$section_key}_button_text", array(
                'default'   => $section_values['button_text'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$section_key}_button_text", array(
                'label'    => __("{$section_key} Buton Yazısı", 'endema'),
                'section'  => 'endema_about_settings',
                'type'     => 'text',
            ));
        }
    }
}
add_action('customize_register', 'endema_about_customize_register');





// admin panelindeki menüler kısmını gizlemek için
function hide_customizer_sections() {
    ?>
    <style type="text/css">
        #accordion-panel-nav_menus {
            display: none !important;
        }
    </style>
    <?php
}
add_action('customize_controls_print_styles', 'hide_customizer_sections');
// admin panelindeki menüler kısmını gizlemek için

// admin panelindeki özelleştirme kısmınındaki bazı yerleri gizlemek için
function endema_customize_customizer($wp_customize) {

    // Site Kimliği bölümünü
    $wp_customize->remove_section('title_tagline');

    // Giriş Sayfası 
    $wp_customize->remove_section('static_front_page');

    // Ek CSS bölümünü 
    $wp_customize->remove_section('custom_css');

    // İsim değiştirme örnek
    // $wp_customize->get_section('title_tagline')->title = __('Yeni Site Kimliği', 'endema');
    // $wp_customize->get_section('nav')->title = __('Yeni Menüler', 'endema');
    // $wp_customize->get_section('static_front_page')->title = __('Yeni Giriş Sayfası Ayarları', 'endema');
    // $wp_customize->get_section('custom_css')->title = __('Yeni Ek CSS', 'endema');
}
add_action('customize_register', 'endema_customize_customizer', 9999);
// admin panelindeki özelleştirme kısmınındaki bazı yerleri gizlemek için

function remove_classic_theme_inline_styles() {
    // WordPress tarafından eklenen klasik tema ve blok stillerini kaldır
    wp_dequeue_style('classic-theme-styles'); // Klasik tema stillerini kaldırır
    wp_dequeue_style('wp-block-library'); // WordPress blok kütüphanesi stillerini kaldırır
    wp_dequeue_style('wp-block-library-theme'); // Tema ile gelen blok stillerini kaldırır
    wp_dequeue_style('global-styles'); // WordPress global stillerini kaldırır (WP 5.9 ve sonrası)
    
}
add_action('wp_enqueue_scripts', 'remove_classic_theme_inline_styles', 100);

function remove_unwanted_links() {
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_generator'); // WordPress versiyonunu kaldırır
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer linkini kaldırır
    remove_action('wp_head', 'rsd_link'); // Really Simple Discovery linkini kaldırır
    remove_action('wp_head', 'rest_output_link_wp_head'); // REST API linkini kaldırır
    remove_action('wp_head', 'classic-theme-styles-inline-css', 1);

}
add_action('init', 'remove_unwanted_links');

?>




<?php


    function endema_customize_register($wp_customize) {
        // Slider ayarları sekmesi
        $wp_customize->add_section('endema_slider_settings', array(
            'title'    => __('Anasayfa Özelleştirme', 'endema'),
            'priority' => 30,
        ));
    
        // 5 slider için arka plan ve başlık ayarları
        $slider_data = array(
            '1️⃣ Slider 1' => array(
                'title' => 'Excellence Integrıty Experıence',
                'bg' => get_template_directory_uri() . '/img/assets/bg.jpg',
            ),
            '2️⃣ Slider 2' => array(
                'title' => 'ABOUT US',
                'bg' => get_template_directory_uri() . '/img/assets/bg/bg7.webp',
            ),
            '3️⃣ Slider 3' => array(
                'title' => 'NEWBUILDS',
                'bg' => get_template_directory_uri() . '/img/assets/bg/bg8.webp',
            ),
            '4️⃣ Slider 4' => array(
                'title' => 'REFITS',
                'bg' => get_template_directory_uri() . '/img/assets/refits.jpg',
            ),
            '5️⃣ Slider 5' => array(
                'title' => 'CONTACT US',
                'bg' => get_template_directory_uri() . '/img/assets/contactus.jpg',
            ),
        );
    
        // Her bir slider için arka plan ve başlık ayarlarını ekleyelim
        foreach ($slider_data as $slider_key => $slider_values) {

            
            // Başlık
            $wp_customize->add_setting("{$slider_key}_title", array(
                'default'   => $slider_values['title'],
                'transport' => 'refresh',
            ));
            $wp_customize->add_control("{$slider_key}_title", array(
                'label'    => __("{$slider_key} Başlığı", 'endema'),
                'section'  => 'endema_slider_settings',
                'type'     => 'text',
            ));

            // Arka plan resmi
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




<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function hamburger_title($title) {
        if(is_front_page() && is_home()) { //トップページなら
            $title = get_bloginfo('name', 'display');
        } elseif (is_singular()) { //シングルページなら
            $title = single_post_title('', false);
        }
        return $title;
    }
    add_filter('pre_get_document_title', 'hamburger_title');

    //ファイルの読み込みに関する記述をまとめた関数
    function hamburger_script() {
        
        //wp_enqueue_styleやwp_enqueue_scriptはこの中で使う
        

        wp_enqueue_style( 'robot', '///fonts.gstatic.com', array() );
        wp_enqueue_style( 'M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@500&display=swap', array() );

        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4' );
        wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/ress.css', array(), '1.0.0' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri().'/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri().'style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri().'/js/jquery-3.6.0.min.js', array(), '3.6.0', true );
        wp_enqueue_script( 'js', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true );
    }
    add_action('wp_enqueue_scripts', 'hamburger_script'); //上記のファイルの読み込みに関する記述をまとめた関数を、「wp_enqueue_scripts」アクションにフックさせる。
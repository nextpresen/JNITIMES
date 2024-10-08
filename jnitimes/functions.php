<?php
// main.cssの読み込み
wp_enqueue_style(
     // 追加する識別名
    'main_style',
    // 追加するCSSのパス
    get_template_directory_uri() . '/css/main.css',
    // CSSの依存先
    array(),
     // バージョンの指定
    '1.0'
);
<?php

function kensetsu_theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('メインメニュー', 'kensetsu-theme'),
    ]);
}
add_action('after_setup_theme', 'kensetsu_theme_setup');


function kensetsu_enqueue_scripts(): void {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500&family=Noto+Serif+JP:wght@300;400;500;600&display=swap',
        [],
        null
    );

    wp_enqueue_style('kensetsu-style', get_stylesheet_uri(), ['google-fonts'], '1.0.0');

    wp_enqueue_script(
        'kensetsu-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'kensetsu_enqueue_scripts');


function kensetsu_handle_contact_form(): void {
    check_admin_referer('kensetsu_contact', 'kensetsu_nonce');

    $name     = sanitize_text_field($_POST['contact_name'] ?? '');
    $email    = sanitize_email($_POST['contact_email'] ?? '');
    $phone    = sanitize_text_field($_POST['contact_phone'] ?? '');
    $message  = sanitize_textarea_field($_POST['contact_message'] ?? '');
    $inquiries = isset($_POST['contact_inquiry']) && is_array($_POST['contact_inquiry'])
        ? array_map('sanitize_text_field', $_POST['contact_inquiry'])
        : [];

    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('error', '1', wp_get_referer()));
        exit;
    }

    $to      = get_option('admin_email');
    $subject = "【お問い合わせ】{$name} 様よりメッセージが届きました";

    $body  = "お名前: {$name}\n";
    $body .= "メールアドレス: {$email}\n";
    $body .= "電話番号: {$phone}\n";
    $body .= "ご相談内容: " . (empty($inquiries) ? '未選択' : implode(', ', $inquiries)) . "\n\n";
    $body .= "メッセージ:\n{$message}";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    ];

    wp_mail($to, $subject, $body, $headers);

    wp_redirect(add_query_arg('sent', '1', wp_get_referer()));
    exit;
}
add_action('admin_post_nopriv_kensetsu_contact', 'kensetsu_handle_contact_form');
add_action('admin_post_kensetsu_contact', 'kensetsu_handle_contact_form');

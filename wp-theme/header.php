<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

  <!-- Tailwind CSS v4 Browser CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss">
    @theme {
      --color-primary-brown: #5c4d44;
      --color-primary-light: #f5f2ed;
      --color-accent-green: #4f6a52;
      --color-text-main:    #2d2622;
      --color-text-muted:   #6b635e;
      --font-serif: "Noto Serif JP", serif;
      --font-sans:  "Noto Sans JP", sans-serif;
    }

    body {
      background-color: var(--color-primary-light);
      color: var(--color-text-main);
      font-family: var(--font-sans);
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-serif);
    }

    ::selection {
      background-color: var(--color-accent-green);
      color: white;
    }

    .text-balance { text-wrap: balance; }
  </style>
</head>
<body <?php body_class('min-h-screen bg-primary-light font-sans text-text-main'); ?>>
<?php wp_body_open(); ?>

<!-- ナビゲーション -->
<header class="fixed top-0 left-0 right-0 z-50 bg-[#f5f2ed]/90 backdrop-blur-md border-b border-primary-brown/10">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

    <!-- ロゴ -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-serif tracking-widest text-primary-brown">
      <?php bloginfo('name'); ?>
    </a>

    <!-- デスクトップメニュー -->
    <nav class="hidden md:flex items-center gap-10" aria-label="メインナビゲーション">
      <a href="#services" class="text-sm tracking-widest hover:text-accent-green transition-colors">事業概要</a>
      <a href="#company"  class="text-sm tracking-widest hover:text-accent-green transition-colors">会社概要</a>
      <a href="#access"   class="text-sm tracking-widest hover:text-accent-green transition-colors">アクセス</a>
      <a href="#contact"  class="px-6 py-3 bg-primary-brown text-white text-sm tracking-widest hover:bg-accent-green transition-colors rounded-sm">
        無料で相談・資料請求
      </a>
    </nav>

    <!-- モバイルメニューボタン -->
    <button
      id="mobile-menu-btn"
      class="md:hidden p-2 text-primary-brown"
      aria-label="メニューを開く"
      aria-expanded="false"
      aria-controls="mobile-nav"
    >
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="4" y1="12" x2="20" y2="12"/>
        <line x1="4" y1="6"  x2="20" y2="6"/>
        <line x1="4" y1="18" x2="20" y2="18"/>
      </svg>
    </button>
  </div>

  <!-- モバイルメニュー -->
  <nav
    id="mobile-nav"
    class="hidden md:hidden bg-primary-light border-b border-primary-brown/10 px-6 py-4 flex-col gap-4"
    aria-label="モバイルナビゲーション"
  >
    <a href="#services" class="py-2 tracking-widest">事業概要</a>
    <a href="#company"  class="py-2 tracking-widest">会社概要</a>
    <a href="#access"   class="py-2 tracking-widest">アクセス</a>
    <a href="#contact"  class="py-3 mt-2 text-center bg-primary-brown text-white tracking-widest rounded-sm">
      無料で相談・資料請求
    </a>
  </nav>
</header>

<main>

<?php get_header(); ?>

<!-- ===== ヒーローセクション ===== -->
<section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden px-6">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- テキストカラム -->
    <div data-hero-text class="relative z-10">
      <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl leading-[1.4] text-primary-brown mb-8 text-balance">
        心から安らげる、<br>木の香る家づくり。
      </h1>
      <p class="text-text-muted leading-relaxed mb-10 max-w-md text-sm md:text-base">
        創業40年、〇〇市と共に歩む。<br>
        職人の手仕事で、あなたの理想をカタチにします。
      </p>
      <a href="#contact" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-accent-green text-white tracking-widest hover:bg-opacity-90 transition-all rounded-sm shadow-sm group">
        無料で相談・資料請求
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="group-hover:translate-x-1 transition-transform">
          <path d="m9 18 6-6-6-6"/>
        </svg>
      </a>
    </div>

    <!-- 画像カラム -->
    <div data-hero-img class="relative aspect-[4/5] md:aspect-square lg:aspect-[4/3] rounded-sm overflow-hidden shadow-2xl">
      <img
        src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80"
        alt="木の温もりを感じる家の中"
        class="object-cover w-full h-full"
        loading="eager"
      >
      <div class="absolute inset-0 border border-black/10 rounded-sm"></div>
    </div>

  </div>
</section>


<!-- ===== 事業概要セクション ===== -->
<section id="services" class="py-24 bg-white px-6">
  <div class="max-w-7xl mx-auto">

    <div data-animate class="text-center mb-16">
      <span class="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Services</span>
      <h2 class="font-serif text-3xl md:text-4xl text-primary-brown">私たちができること</h2>
      <div class="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">

      <!-- 注文住宅 -->
      <article data-animate class="group">
        <div class="aspect-[4/3] rounded-sm overflow-hidden mb-6 bg-primary-light relative">
          <img
            src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80"
            alt="注文住宅"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
            loading="lazy"
          >
          <div class="absolute inset-0 bg-primary-brown/10 group-hover:bg-transparent transition-colors duration-500"></div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <div class="p-3 bg-primary-light rounded-full text-primary-brown">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl text-primary-brown">注文住宅</h3>
        </div>
        <p class="text-sm text-text-muted leading-relaxed pl-16">
          住むほどに愛着がわく、自然素材にこだわった家づくりをご提案します。
        </p>
      </article>

      <!-- リノベーション -->
      <article data-animate data-animate-delay-1 class="group">
        <div class="aspect-[4/3] rounded-sm overflow-hidden mb-6 bg-primary-light relative">
          <img
            src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?auto=format&fit=crop&w=800&q=80"
            alt="リノベーション"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
            loading="lazy"
          >
          <div class="absolute inset-0 bg-primary-brown/10 group-hover:bg-transparent transition-colors duration-500"></div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <div class="p-3 bg-primary-light rounded-full text-primary-brown">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 12-8.5 8.5a2.12 2.12 0 1 1-3-3L12 9"/>
              <path d="M17.64 15 22 10.64"/>
              <path d="m2 2 20 20"/>
              <path d="M20.41 6.41 17.59 3.59a2 2 0 0 0-2.83 0L13 5.17l4.83 4.83 2.58-2.59a2 2 0 0 0 0-2.82z"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl text-primary-brown">リノベーション</h3>
        </div>
        <p class="text-sm text-text-muted leading-relaxed pl-16">
          受け継がれた想いはそのままに、現代の暮らしに合わせた快適な住空間へ再生します。
        </p>
      </article>

      <!-- アフターメンテナンス -->
      <article data-animate data-animate-delay-2 class="group">
        <div class="aspect-[4/3] rounded-sm overflow-hidden mb-6 bg-primary-light relative">
          <img
            src="https://images.unsplash.com/photo-1504307651254-35680f356f11?auto=format&fit=crop&w=800&q=80"
            alt="アフターメンテナンス"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
            loading="lazy"
          >
          <div class="absolute inset-0 bg-primary-brown/10 group-hover:bg-transparent transition-colors duration-500"></div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <div class="p-3 bg-primary-light rounded-full text-primary-brown">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl text-primary-brown">アフターメンテナンス</h3>
        </div>
        <p class="text-sm text-text-muted leading-relaxed pl-16">
          建ててからが本当のお付き合い。地域密着だからこそできる迅速なサポート体制。
        </p>
      </article>

    </div>
  </div>
</section>


<!-- ===== 会社概要セクション ===== -->
<section id="company" class="py-24 px-6 relative overflow-hidden">
  <div class="absolute top-0 right-0 w-1/2 h-full bg-primary-brown/5 -z-10 rounded-l-[100px] hidden md:block"></div>
  <div class="max-w-4xl mx-auto">

    <div data-animate class="text-center mb-16">
      <span class="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Company</span>
      <h2 class="font-serif text-3xl md:text-4xl text-primary-brown">私たちについて</h2>
      <div class="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
    </div>

    <div data-animate class="bg-white p-8 md:p-12 rounded-sm shadow-xl shadow-black/5">
      <p class="font-serif text-xl md:text-2xl text-center leading-loose mb-12 text-primary-brown border-b border-primary-brown/10 pb-12">
        「一棟入魂」。<br>
        お客様の人生に寄り添い、<br>
        100年続く住まいを目指します。
      </p>

      <dl class="grid grid-cols-1 md:grid-cols-[160px_1fr] gap-x-8 gap-y-6 text-sm md:text-base">
        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">会社名</dt>
        <dd class="font-medium text-primary-brown">〇〇建築株式会社</dd>

        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">代表者</dt>
        <dd class="font-medium text-primary-brown">代表取締役　〇〇 太郎</dd>

        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">設立</dt>
        <dd class="font-medium text-primary-brown">昭和〇〇年〇月</dd>

        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">所在地</dt>
        <dd class="font-medium text-primary-brown leading-relaxed">
          〒000-0000　〇〇県〇〇市〇〇 1-2-3
        </dd>

        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">電話番号</dt>
        <dd class="font-medium text-primary-brown">000-0000-0000</dd>

        <dt class="text-text-muted tracking-widest flex items-center md:after:content-[''] md:after:flex-1 md:after:border-b md:after:border-dotted md:after:border-gray-300 md:after:ml-4">営業時間</dt>
        <dd class="font-medium text-primary-brown">9:00 〜 18:00（土日祝定休）</dd>
      </dl>
    </div>

  </div>
</section>


<!-- ===== アクセスセクション ===== -->
<section id="access" class="py-24 bg-white px-6">
  <div class="max-w-5xl mx-auto">

    <div data-animate class="text-center mb-16">
      <span class="text-accent-green text-xs font-bold tracking-[0.2em] uppercase block mb-3">Access</span>
      <h2 class="font-serif text-3xl md:text-4xl text-primary-brown">アクセス</h2>
      <div class="w-12 h-px bg-primary-brown mx-auto mt-6"></div>
    </div>

    <div data-animate class="grid md:grid-cols-[1fr_350px] gap-8 bg-primary-light/30 border border-primary-brown/10 p-4 rounded-sm">

      <!-- Googleマップ埋め込みエリア（実際の埋め込みコードに差し替えてください） -->
      <div class="bg-gray-200 w-full min-h-[300px] md:h-full rounded relative flex justify-center items-center overflow-hidden">
        <div class="grid-pattern"></div>
        <div class="z-10 flex flex-col items-center text-text-muted/60">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <p class="mt-2 text-sm tracking-widest">Google Maps 埋め込みエリア</p>
        </div>
        <!--
          実際の Google マップ iframe に差し替え例:
          <iframe
            src="https://www.google.com/maps/embed?pb=..."
            width="100%" height="100%"
            style="border:0; position:absolute; inset:0;"
            allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        -->
      </div>

      <!-- 所在地情報 -->
      <div class="flex flex-col justify-center p-6 bg-white rounded border border-primary-brown/5 shadow-sm">
        <h3 class="font-serif text-lg text-primary-brown mb-4">〇〇建築株式会社 本社</h3>
        <p class="text-sm text-text-muted leading-relaxed mb-6">
          〒000-0000<br>
          〇〇県〇〇市〇〇 1-2-3
        </p>
        <ul class="text-sm text-text-main space-y-3">
          <li class="flex items-start gap-3">
            <span class="text-accent-green mt-0.5">•</span>
            <span><strong>最寄り駅：</strong><br>〇〇駅より徒歩10分</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-accent-green mt-0.5">•</span>
            <span><strong>駐車場：</strong><br>5台完備（無料）</span>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ===== お問い合わせセクション ===== -->
<section id="contact" class="py-24 bg-primary-brown px-6 text-primary-light">
  <div class="max-w-3xl mx-auto">

    <div data-animate class="text-center mb-16">
      <span class="text-primary-light/60 text-xs font-bold tracking-[0.2em] uppercase block mb-3">Contact</span>
      <h2 class="font-serif text-3xl md:text-4xl text-primary-light">お問い合わせ・資料請求</h2>
      <div class="w-12 h-px bg-primary-light/30 mx-auto mt-6"></div>
      <p class="mt-8 text-primary-light/80 text-sm">家づくりに関するご相談から、資料請求までお気軽にお問い合わせください。</p>
    </div>

    <?php if (isset($_GET['sent']) && $_GET['sent'] === '1') : ?>
      <div class="mb-8 p-4 bg-accent-green/20 border border-accent-green/40 rounded-sm text-primary-light text-center tracking-widest">
        送信が完了しました。数日以内に担当者よりご返信いたします。
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] === '1') : ?>
      <div class="mb-8 p-4 bg-red-500/20 border border-red-400/40 rounded-sm text-primary-light text-center tracking-widest">
        入力内容をご確認の上、もう一度お試しください。
      </div>
    <?php endif; ?>

    <div data-animate class="bg-primary-light text-text-main p-8 md:p-12 rounded-sm shadow-xl">
      <form
        method="POST"
        action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
        novalidate
      >
        <input type="hidden" name="action" value="kensetsu_contact">
        <?php wp_nonce_field('kensetsu_contact', 'kensetsu_nonce'); ?>

        <div class="space-y-8">

          <!-- お名前 -->
          <div>
            <label for="contact_name" class="block text-sm font-bold tracking-widest mb-2">
              お名前 <span class="text-red-500 ml-1">*</span>
            </label>
            <input
              type="text"
              id="contact_name"
              name="contact_name"
              required
              class="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all"
              placeholder="山田 太郎"
              value="<?php echo esc_attr($_POST['contact_name'] ?? ''); ?>"
            >
          </div>

          <!-- メール・電話 -->
          <div class="grid md:grid-cols-2 gap-8">
            <div>
              <label for="contact_email" class="block text-sm font-bold tracking-widest mb-2">
                メールアドレス <span class="text-red-500 ml-1">*</span>
              </label>
              <input
                type="email"
                id="contact_email"
                name="contact_email"
                required
                class="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all"
                placeholder="example@test.com"
                value="<?php echo esc_attr($_POST['contact_email'] ?? ''); ?>"
              >
            </div>
            <div>
              <label for="contact_phone" class="block text-sm font-bold tracking-widest mb-2">
                電話番号
              </label>
              <input
                type="tel"
                id="contact_phone"
                name="contact_phone"
                class="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all"
                placeholder="000-0000-0000"
                value="<?php echo esc_attr($_POST['contact_phone'] ?? ''); ?>"
              >
            </div>
          </div>

          <!-- ご相談内容 -->
          <div>
            <span class="block text-sm font-bold tracking-widest mb-3">ご相談内容（複数選択可）</span>
            <div class="flex flex-wrap gap-6">
              <?php
              $inquiries = [
                'new-build'    => '新築・注文住宅',
                'renovation'   => 'リフォーム・リノベーション',
                'brochure'     => '資料請求のみ',
                'other'        => 'その他',
              ];
              $checked = $_POST['contact_inquiry'] ?? [];
              foreach ($inquiries as $val => $label) :
              ?>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input
                    type="checkbox"
                    name="contact_inquiry[]"
                    value="<?php echo esc_attr($val); ?>"
                    class="w-4 h-4 border-gray-300 rounded"
                    <?php checked(in_array($val, (array)$checked)); ?>
                  >
                  <span class="text-sm group-hover:text-accent-green transition-colors">
                    <?php echo esc_html($label); ?>
                  </span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- メッセージ -->
          <div>
            <label for="contact_message" class="block text-sm font-bold tracking-widest mb-2">
              メッセージ本文 <span class="text-red-500 ml-1">*</span>
            </label>
            <textarea
              id="contact_message"
              name="contact_message"
              rows="5"
              required
              class="w-full bg-white border border-gray-300 px-4 py-3 rounded-sm focus:outline-none focus:border-accent-green focus:ring-1 focus:ring-accent-green transition-all resize-y"
              placeholder="ご質問やご要望をご自由にお書きください。"
            ><?php echo esc_textarea($_POST['contact_message'] ?? ''); ?></textarea>
          </div>

          <!-- 送信ボタン -->
          <div class="pt-4 text-center">
            <button
              type="submit"
              class="w-full md:w-auto px-16 py-4 bg-accent-green border border-accent-green text-white font-bold tracking-widest rounded-sm hover:bg-white hover:text-accent-green transition-all duration-300 shadow-lg shadow-accent-green/20"
            >
              送信する
            </button>
            <p class="mt-4 text-xs text-text-muted">※送信後、数日以内に担当者よりご返信いたします。</p>
          </div>

        </div>
      </form>
    </div>

  </div>
</section>

<?php get_footer(); ?>

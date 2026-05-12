</main>

<footer class="bg-[#4a3f36] text-primary-light/60 py-12 px-6 border-t border-white/5 text-center">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">

    <div class="text-xl font-serif tracking-widest text-primary-light">
      <?php bloginfo('name'); ?>
    </div>

    <div class="flex gap-6 text-sm flex-wrap justify-center">
      <span class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.92 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.84 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1-1a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.02z"/>
        </svg>
        000-0000-0000
      </span>
      <span class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect width="20" height="16" x="2" y="4" rx="2"/>
          <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
        </svg>
        info@example.com
      </span>
    </div>

  </div>

  <div class="mt-12 text-xs tracking-widest">
    &copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?> All Rights Reserved.
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

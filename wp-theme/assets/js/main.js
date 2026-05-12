document.addEventListener('DOMContentLoaded', () => {

  // ── モバイルメニュー ──────────────────────────────
  const menuBtn  = document.getElementById('mobile-menu-btn');
  const mobileNav = document.getElementById('mobile-nav');

  if (menuBtn && mobileNav) {
    menuBtn.addEventListener('click', () => {
      const isOpen = !mobileNav.classList.contains('hidden');

      mobileNav.classList.toggle('hidden', isOpen);
      mobileNav.classList.toggle('flex', !isOpen);
      menuBtn.setAttribute('aria-expanded', String(!isOpen));
    });

    mobileNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
        mobileNav.classList.remove('flex');
        menuBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }


  // ── スクロールアニメーション（Intersection Observer） ──
  const observerOptions = {
    rootMargin: '-100px 0px',
    threshold: 0,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));


  // ── ヒーローアニメーション（ページ読み込み時） ──────
  const heroText = document.querySelector('[data-hero-text]');
  const heroImg  = document.querySelector('[data-hero-img]');

  if (heroText) {
    requestAnimationFrame(() => {
      heroText.classList.add('is-visible');
    });
  }
  if (heroImg) {
    requestAnimationFrame(() => {
      heroImg.classList.add('is-visible');
    });
  }


  // ── スムーススクロール ─────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const targetId = anchor.getAttribute('href').slice(1);
      const target   = document.getElementById(targetId);

      if (target) {
        e.preventDefault();
        const headerHeight = document.querySelector('header')?.offsetHeight ?? 80;
        const top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

});

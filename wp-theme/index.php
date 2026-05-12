<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-6 py-32">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('mb-16'); ?>>
        <h2 class="font-serif text-2xl md:text-3xl text-primary-brown mb-4">
          <a href="<?php the_permalink(); ?>" class="hover:text-accent-green transition-colors">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="text-text-muted text-sm mb-4 tracking-widest">
          <?php the_date(); ?>
        </div>
        <div class="text-text-main leading-relaxed">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-sm text-accent-green tracking-widest hover:underline">
          続きを読む →
        </a>
      </article>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>
    <p class="text-text-muted tracking-widest text-center py-24">コンテンツが見つかりませんでした。</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>

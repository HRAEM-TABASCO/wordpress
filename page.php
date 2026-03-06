<?php get_header(); ?>

<main class="container py-4">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <h1 class="mb-3"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

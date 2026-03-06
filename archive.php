<?php get_header(); ?>

<main class="container py-4">
  <header class="mb-4">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
  </header>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('content mb-4'); ?>>
        <h2 class="mb-2">
          <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
        </h2>
        <div class="entry-content"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p>No hay publicaciones en este archivo.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

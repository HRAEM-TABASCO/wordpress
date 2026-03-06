<?php get_header(); ?>

<main class="container py-4">
  <?php
  $has_content = false;

  if (have_posts()) :
    while (have_posts()) :
      the_post();
      $title   = trim(get_the_title());
      $content = trim(get_the_content());

      if ('' !== $title || '' !== wp_strip_all_tags($content)) {
        $has_content = true;
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('content mb-4'); ?>>
          <?php if ('' !== $title) : ?>
            <h1 class="mb-3"><?php the_title(); ?></h1>
          <?php endif; ?>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      }
    endwhile;
  endif;

  if (!$has_content) :
    ?>
    <section class="content mb-5">
      <h1 class="mb-3">Hospital Regional de Alta Especialidad de la Mujer</h1>
      <p class="mb-4">
        Bienvenido al sitio oficial. Ya puedes administrar este contenido desde WordPress.
        Esta sección aparece como respaldo para que la portada no quede vacía mientras cargas páginas y menús.
      </p>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="p-3 border rounded h-100">
            <h2 class="h5">Directorio</h2>
            <p class="mb-2">Consulta teléfonos y áreas del hospital.</p>
            <a href="<?php echo esc_url(home_url('/directorio-activo/')); ?>">Ver directorio</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 border rounded h-100">
            <h2 class="h5">Servicios</h2>
            <p class="mb-2">Información sobre divisiones y atención médica.</p>
            <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Ver servicios</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 border rounded h-100">
            <h2 class="h5">Nosotros</h2>
            <p class="mb-2">Conoce misión, visión y valores institucionales.</p>
            <a href="<?php echo esc_url(home_url('/nosotros/')); ?>">Conocer más</a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="content">
    <h2 class="mb-3">Últimas noticias</h2>
    <?php
    $news_query = new WP_Query(
      array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
      )
    );

    if ($news_query->have_posts()) :
      ?>
      <div class="row g-3">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <article class="col-md-4">
            <div class="p-3 border rounded h-100">
              <h3 class="h6"><a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a></h3>
              <div><?php the_excerpt(); ?></div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php
      wp_reset_postdata();
    else :
      ?>
      <p>Aún no hay noticias publicadas.</p>
      <?php
    endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>

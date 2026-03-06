<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="mt-4">
  <?php if (have_comments()) : ?>
    <h3 class="mb-3">Comentarios</h3>
    <ul class="list-unstyled">
      <?php wp_list_comments(array('style' => 'ul', 'short_ping' => true)); ?>
    </ul>
  <?php endif; ?>

  <?php comment_form(); ?>
</div>

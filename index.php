<?php get_header();
if (have_posts()):
  while(have_posts()): the_post(); ?>

    <article <?php post_class() ?>>
      <div class="container">
        <header class="entry-header">
          <h1><?= the_title() ?></h1>
        </header>
        <section class="entry-content">
          <?= the_content() ?>
        </section>
        <footer class="entry-footer">
          <?php wp_link_pages() ?>
        </footer>
      </div>
    </article>

  <?php endwhile;
endif;
get_footer();
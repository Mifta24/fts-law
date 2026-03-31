<?php
/**
 * FTS Law – Default Page Template
 *
 * Used for any page that does not have a dedicated page-{slug}.php template.
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php
    // ── Page Hero ──────────────────────────────────────────────────────────────
    fts_page_hero(
        'Legal Services',
        get_the_title(),
        get_the_excerpt()
    );
    ?>

    <!-- Breadcrumb -->
    <?php fts_breadcrumb(); ?>

    <!-- ── Main Content Area ──────────────────────────────────────────────── -->
    <section class="page-content">
      <div class="container page-content__inner">
        <div class="page-content__body">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

  <?php endwhile; ?>

  <!-- ── CTA Band ───────────────────────────────────────────────────────────── -->
  <?php fts_cta_section(); ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>

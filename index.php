<?php
/**
 * FTS Law – Index (Fallback Template)
 *
 * WordPress falls back to this file when no more specific template is found.
 * For this theme it acts as a simple blog-post listing fallback.
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <?php fts_page_hero(
      'Legal Insights',
      is_home() ? 'Latest Articles' : get_the_archive_title(),
      is_home() ? 'Stay informed with the latest legal updates for foreign investors in Indonesia.'
                : get_the_archive_description()
  ); ?>

  <?php fts_breadcrumb(); ?>

  <section class="section-blog-archive">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <div class="grid-3 blog-grid">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php fts_blog_card(); ?>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
          <?php
          the_posts_pagination( [
              'mid_size'  => 2,
              'prev_text' => '&larr; Newer',
              'next_text' => 'Older &rarr;',
          ] );
          ?>
        </div>

      <?php else : ?>

        <div class="no-results">
          <h2>No articles found</h2>
          <p>Check back soon for legal updates, guides, and insights for foreign investors in Indonesia.</p>
          <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            Back to Home
          </a>
        </div>

      <?php endif; ?>

    </div>
  </section>

  <?php fts_cta_section(); ?>

</main>

<?php get_footer(); ?>

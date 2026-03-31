<?php
/**
 * FTS Law – Blog Archive / Main Blog Page
 * Template: archive.php
 *
 * Used for:
 *  - /blog  (the Posts Page set in Settings → Reading)
 *  - Category archives
 *  - Tag archives
 *  - Date archives
 *
 * @package fts-law
 */

get_header();

// ── Determine page context ─────────────────────────────────────────────────
if ( is_home() && ! is_front_page() ) {
    $archive_title    = 'Legal Blog & Insights';
    $archive_subtitle = 'Practical legal guides, visa updates, and business law articles for foreign investors and expatriates in Indonesia.';
    $archive_eyebrow  = 'Blog';
} elseif ( is_category() ) {
    $archive_title    = single_cat_title( '', false );
    $archive_subtitle = category_description();
    $archive_eyebrow  = 'Category';
} elseif ( is_tag() ) {
    $archive_title    = 'Tag: ' . single_tag_title( '', false );
    $archive_subtitle = tag_description();
    $archive_eyebrow  = 'Tag';
} elseif ( is_author() ) {
    $archive_title    = 'Articles by ' . get_the_author();
    $archive_subtitle = '';
    $archive_eyebrow  = 'Author';
} elseif ( is_date() ) {
    $archive_title    = get_the_date( 'F Y' );
    $archive_subtitle = '';
    $archive_eyebrow  = 'Archive';
} else {
    $archive_title    = get_the_archive_title();
    $archive_subtitle = get_the_archive_description();
    $archive_eyebrow  = 'Blog';
}
?>

<main id="main-content" role="main">

  <!-- ═══════════════════════════════════════════════════════════════
       PAGE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="page-hero page-hero--blog" aria-label="Blog archive">
    <div class="container">
      <span class="eyebrow"><?php echo esc_html( $archive_eyebrow ); ?></span>
      <h1><?php echo esc_html( $archive_title ); ?></h1>
      <?php if ( $archive_subtitle ) : ?>
        <p class="page-hero__subtitle"><?php echo wp_kses_post( $archive_subtitle ); ?></p>
      <?php endif; ?>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       BREADCRUMB
  ══════════════════════════════════════════════════════════════════ -->
  <?php fts_breadcrumb(); ?>


  <!-- ═══════════════════════════════════════════════════════════════
       CATEGORY FILTER TABS
  ══════════════════════════════════════════════════════════════════ -->
  <section class="blog-filter-bar">
    <div class="container">
      <nav class="blog-filter-nav" aria-label="Filter articles by category">

        <!-- All Articles -->
        <a
          class="blog-filter-tab <?php echo ( is_home() && ! is_category() ) ? 'is-active' : ''; ?>"
          href="<?php echo esc_url( home_url( '/blog' ) ); ?>"
        >All Articles</a>

        <?php
        // Output one tab per category that has published posts
        $cats = get_categories( [
            'orderby'    => 'count',
            'order'      => 'DESC',
            'hide_empty' => true,
            'number'     => 8,
        ] );

        foreach ( $cats as $cat ) :
            $is_active = is_category( $cat->term_id );
        ?>
          <a
            class="blog-filter-tab <?php echo $is_active ? 'is-active' : ''; ?>"
            href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
          ><?php echo esc_html( $cat->name ); ?></a>
        <?php endforeach; ?>

      </nav>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       ARTICLE GRID
  ══════════════════════════════════════════════════════════════════ -->
  <section class="section-blog-archive">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <!-- ── Featured / First Post (full width) ── -->
        <?php
        the_post();
        $featured_cats  = get_the_category();
        $featured_label = $featured_cats ? esc_html( $featured_cats[0]->name ) : 'Legal Insight';
        ?>
        <article class="blog-featured-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <a class="blog-featured-card__thumb" href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( 'blog-thumb', [ 'alt' => get_the_title() ] ); ?>
            </a>
          <?php endif; ?>
          <div class="blog-featured-card__body">
            <div class="blog-featured-card__meta">
              <span class="mini-label"><?php echo $featured_label; ?></span>
              <time class="blog-meta-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
              </time>
            </div>
            <h2 class="blog-featured-card__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="blog-featured-card__excerpt">
              <?php echo wp_trim_words( get_the_excerpt(), 28, '&hellip;' ); ?>
            </p>
            <a class="btn btn-gold" href="<?php the_permalink(); ?>">Read Article &rarr;</a>
          </div>
        </article><!-- /.blog-featured-card -->


        <!-- ── Remaining Posts Grid ── -->
        <?php if ( have_posts() ) : ?>
          <div class="grid-3 blog-grid">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php fts_blog_card(); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>


        <!-- ── Pagination ── -->
        <nav class="pagination" aria-label="Blog pages">
          <?php
          the_posts_pagination( [
              'mid_size'           => 2,
              'prev_text'          => '&larr; Newer Articles',
              'next_text'          => 'Older Articles &rarr;',
              'before_page_number' => '<span class="sr-only">Page </span>',
              'screen_reader_text' => 'Blog navigation',
          ] );
          ?>
        </nav>

      <?php else : ?>

        <!-- ── No Posts Found ── -->
        <div class="no-results">
          <div class="no-results__icon" aria-hidden="true">📄</div>
          <h2>No Articles Found</h2>
          <p>
            We haven't published any articles yet in this section.
            Check back soon for legal updates, visa guides, and business law insights
            for foreign investors in Indonesia.
          </p>
          <div class="no-results__actions">
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
              All Articles
            </a>
            <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              Back to Home
            </a>
          </div>
        </div>

      <?php endif; ?>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       SIDEBAR TOPICS STRIP
  ══════════════════════════════════════════════════════════════════ -->
  <section class="blog-topics-strip section-soft">
    <div class="container">
      <h3 class="blog-topics-strip__heading">Browse by Legal Topic</h3>
      <div class="blog-topic-tiles">

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/visa' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">📋</span>
          <span>Visa &amp; Immigration</span>
        </a>

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">🏢</span>
          <span>Company Setup</span>
        </a>

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">💹</span>
          <span>Foreign Investment</span>
        </a>

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">📝</span>
          <span>Contract Drafting</span>
        </a>

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">⚠️</span>
          <span>Legal Risk</span>
        </a>

        <a class="blog-topic-tile" href="<?php echo esc_url( home_url( '/business-legal' ) ); ?>">
          <span class="blog-topic-tile__icon" aria-hidden="true">⚖️</span>
          <span>Business Legal</span>
        </a>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA BAND
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      'Have a Legal Question?',
      'Our legal team is available for consultations on visa matters, company setup, foreign investment law, and business legal support in Indonesia.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>

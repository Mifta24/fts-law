<?php
/**
 * FTS Law – Single Blog Post Template
 * Template: single.php
 *
 * @package fts-law
 */

get_header();
?>

<main id="main-content" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <?php
  // ── Post meta ──────────────────────────────────────────────────────────────
  $cats       = get_the_category();
  $cat_label  = $cats ? esc_html( $cats[0]->name ) : 'Legal Insight';
  $cat_link   = $cats ? esc_url( get_category_link( $cats[0]->term_id ) ) : '#';
  $post_date  = get_the_date();
  $post_dateC = get_the_date( 'c' );
  $read_time  = max( 1, (int) ceil( str_word_count( strip_tags( get_the_content() ) ) / 200 ) );
  ?>

  <!-- ═══════════════════════════════════════════════════════════════
       ARTICLE HERO
  ══════════════════════════════════════════════════════════════════ -->
  <section class="article-hero">
    <div class="container">

      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <span aria-hidden="true"> / </span>
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
        <span aria-hidden="true"> / </span>
        <a href="<?php echo $cat_link; ?>"><?php echo $cat_label; ?></a>
        <span aria-hidden="true"> / </span>
        <span aria-current="page"><?php the_title(); ?></span>
      </nav>

      <!-- Category + Read time -->
      <div class="article-hero__meta-top">
        <a class="mini-label" href="<?php echo $cat_link; ?>"><?php echo $cat_label; ?></a>
        <span class="article-read-time"><?php echo $read_time; ?> min read</span>
      </div>

      <!-- Title -->
      <h1 class="article-hero__title"><?php the_title(); ?></h1>

      <!-- Excerpt / subtitle -->
      <?php if ( has_excerpt() ) : ?>
        <p class="article-hero__excerpt"><?php the_excerpt(); ?></p>
      <?php endif; ?>

      <!-- Author + Date -->
      <div class="article-hero__byline">
        <div class="article-byline-avatar" aria-hidden="true">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', get_the_author(), [ 'class' => 'byline-avatar-img' ] ); ?>
        </div>
        <div class="article-byline-info">
          <span class="article-byline-author"><?php the_author(); ?></span>
          <time class="article-byline-date" datetime="<?php echo esc_attr( $post_dateC ); ?>">
            <?php echo esc_html( $post_date ); ?>
          </time>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       FEATURED IMAGE
  ══════════════════════════════════════════════════════════════════ -->
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="article-featured-image">
    <div class="container">
      <?php the_post_thumbnail( 'blog-thumb', [
        'alt'   => get_the_title(),
        'class' => 'article-featured-image__img',
      ] ); ?>
    </div>
  </div>
  <?php endif; ?>


  <!-- ═══════════════════════════════════════════════════════════════
       ARTICLE BODY
  ══════════════════════════════════════════════════════════════════ -->
  <section class="article-body-section">
    <div class="container article-layout">

      <!-- ── Main Content Column ── -->
      <article class="article-content" id="article-content" itemscope itemtype="https://schema.org/Article">

        <meta itemprop="headline"      content="<?php echo esc_attr( get_the_title() ); ?>" />
        <meta itemprop="datePublished" content="<?php echo esc_attr( $post_dateC ); ?>" />
        <meta itemprop="author"        content="<?php echo esc_attr( get_the_author() ); ?>" />

        <!-- Disclaimer / Confidentiality Note -->
        <div class="article-disclaimer">
          <span class="article-disclaimer__icon" aria-hidden="true">ℹ️</span>
          <p>
            This article is provided for general informational purposes only and does not
            constitute legal advice. For advice specific to your situation, please
            <a href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">book a legal consultation</a>.
          </p>
        </div>

        <!-- Article Content -->
        <div class="article-content__body entry-content" itemprop="articleBody">
          <?php the_content(); ?>
        </div>

        <!-- Post Navigation (within post) -->
        <?php
        wp_link_pages( [
            'before'      => '<nav class="page-links" aria-label="Post pages"><span class="page-links__label">Pages:</span>',
            'after'       => '</nav>',
            'link_before' => '<span class="page-links__item">',
            'link_after'  => '</span>',
        ] );
        ?>

        <!-- Tags -->
        <?php
        $tags = get_the_tags();
        if ( $tags ) :
        ?>
          <div class="article-tags">
            <span class="article-tags__label">Tags:</span>
            <?php foreach ( $tags as $tag ) : ?>
              <a class="article-tag" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
                <?php echo esc_html( $tag->name ); ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <!-- ── Share Buttons ── -->
        <div class="article-share">
          <span class="article-share__label">Share this article:</span>
          <div class="article-share__buttons">

            <!-- WhatsApp -->
            <a class="share-btn share-btn--wa"
               href="https://wa.me/?text=<?php echo rawurlencode( get_the_title() . ' ' . get_permalink() ); ?>"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Share on WhatsApp">
              💬 WhatsApp
            </a>

            <!-- LinkedIn -->
            <a class="share-btn share-btn--linkedin"
               href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( get_permalink() ); ?>"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Share on LinkedIn">
              in LinkedIn
            </a>

            <!-- Twitter / X -->
            <a class="share-btn share-btn--twitter"
               href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode( get_the_title() ); ?>&url=<?php echo rawurlencode( get_permalink() ); ?>"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Share on X (Twitter)">
              𝕏 Twitter
            </a>

            <!-- Copy Link -->
            <button class="share-btn share-btn--copy"
                    type="button"
                    data-copy-url="<?php echo esc_attr( get_permalink() ); ?>"
                    aria-label="Copy article link">
              🔗 Copy Link
            </button>

          </div>
        </div><!-- /.article-share -->

        <!-- ── In-Article CTA ── -->
        <div class="article-inline-cta">
          <div class="article-inline-cta__inner">
            <div class="article-inline-cta__text">
              <h3>Need Specific Legal Advice?</h3>
              <p>
                This article covers general legal information. If you need advice
                tailored to your specific situation in Indonesia, speak directly with
                our licensed lawyer.
              </p>
            </div>
            <div class="article-inline-cta__actions">
              <a class="btn btn-gold"
                 href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
                Book Consultation
              </a>
              <a class="btn btn-green"
                 href="<?php echo esc_url( fts_wa_url() ); ?>"
                 target="_blank"
                 rel="noopener noreferrer">
                💬 WhatsApp
              </a>
            </div>
          </div>
        </div>

        <!-- ── Author Box ── -->
        <div class="article-author-box">
          <div class="article-author-box__avatar">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 72, '', get_the_author() ); ?>
          </div>
          <div class="article-author-box__info">
            <span class="article-author-box__label">Written by</span>
            <strong class="article-author-box__name"><?php the_author(); ?></strong>
            <?php
            $bio = get_the_author_meta( 'description' );
            if ( $bio ) :
            ?>
              <p class="article-author-box__bio"><?php echo esc_html( $bio ); ?></p>
            <?php else : ?>
              <p class="article-author-box__bio">
                Licensed Indonesian lawyer specialising in immigration law, corporate law,
                and foreign investment matters. Serving foreign nationals and international
                businesses in Indonesia.
              </p>
            <?php endif; ?>
          </div>
        </div>

        <!-- ── Post Navigation ── -->
        <nav class="article-post-nav" aria-label="Next and previous articles">
          <div class="article-post-nav__prev">
            <?php
            $prev = get_previous_post();
            if ( $prev ) :
            ?>
              <span class="article-post-nav__direction">&larr; Previous Article</span>
              <a class="article-post-nav__title" href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>">
                <?php echo esc_html( get_the_title( $prev->ID ) ); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="article-post-nav__next">
            <?php
            $next = get_next_post();
            if ( $next ) :
            ?>
              <span class="article-post-nav__direction">Next Article &rarr;</span>
              <a class="article-post-nav__title" href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>">
                <?php echo esc_html( get_the_title( $next->ID ) ); ?>
              </a>
            <?php endif; ?>
          </div>
        </nav>

      </article><!-- /.article-content -->


      <!-- ── Sidebar ── -->
      <aside class="article-sidebar" aria-label="Article sidebar">

        <!-- Sticky Consultation Card -->
        <div class="sidebar-consult-card">
          <div class="sidebar-consult-card__inner">
            <span class="sidebar-consult-card__eyebrow">Need Legal Advice?</span>
            <h3 class="sidebar-consult-card__title">Speak with Our Lawyer</h3>
            <p class="sidebar-consult-card__desc">
              Get direct legal advice on visa, company setup, or foreign investment
              matters in Indonesia.
            </p>
            <a class="btn btn-gold sidebar-consult-card__cta"
               href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
              Book Consultation
            </a>
            <a class="btn btn-green sidebar-consult-card__wa"
               href="<?php echo esc_url( fts_wa_url() ); ?>"
               target="_blank"
               rel="noopener noreferrer">
              💬 WhatsApp Chat
            </a>
          </div>
        </div>

        <!-- Related Services Links -->
        <div class="sidebar-services-card">
          <h4 class="sidebar-card__title">Our Legal Services</h4>
          <nav class="sidebar-services-list" aria-label="Related services">
            <a href="<?php echo esc_url( home_url( '/visa' ) ); ?>">📋 Visa &amp; Immigration</a>
            <a href="<?php echo esc_url( home_url( '/kitas' ) ); ?>">🪪 KITAS</a>
            <a href="<?php echo esc_url( home_url( '/kitap' ) ); ?>">🏠 KITAP</a>
            <a href="<?php echo esc_url( home_url( '/investor-visa' ) ); ?>">💼 Investor Visa</a>
            <a href="<?php echo esc_url( home_url( '/company-setup' ) ); ?>">🏢 Company Setup</a>
            <a href="<?php echo esc_url( home_url( '/pt-pma' ) ); ?>">📜 PT PMA</a>
            <a href="<?php echo esc_url( home_url( '/foreign-investment' ) ); ?>">💹 Foreign Investment</a>
            <a href="<?php echo esc_url( home_url( '/contract-drafting' ) ); ?>">✍️ Contract Drafting</a>
            <a href="<?php echo esc_url( home_url( '/legal-risk' ) ); ?>">🔍 Legal Risk</a>
          </nav>
        </div>

        <!-- Free Guide Promo -->
        <div class="sidebar-guide-card">
          <span class="sidebar-guide-card__label">Free Download</span>
          <h4 class="sidebar-guide-card__title">Free Legal Guide<br>for Foreign Investors</h4>
          <p class="sidebar-guide-card__desc">
            Download our guide covering foreign ownership rules, PT PMA structure,
            and common legal mistakes.
          </p>
          <a class="btn btn-gold"
             href="<?php echo esc_url( home_url( '/guide' ) ); ?>">
            Get Free Guide &rarr;
          </a>
        </div>

      </aside><!-- /.article-sidebar -->

    </div><!-- /.article-layout -->
  </section>


  <!-- ═══════════════════════════════════════════════════════════════
       RELATED ARTICLES
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  // Query related posts from same category, excluding current post
  $related_args = [
      'post_type'           => 'post',
      'post_status'         => 'publish',
      'posts_per_page'      => 3,
      'post__not_in'        => [ get_the_ID() ],
      'ignore_sticky_posts' => true,
  ];

  if ( $cats ) {
      $related_args['category__in'] = [ $cats[0]->term_id ];
  }

  $related_query = new WP_Query( $related_args );

  if ( $related_query->have_posts() ) :
  ?>
  <section class="section-related-articles section-soft">
    <div class="container">
      <h2 class="section-title">Related Articles</h2>
      <p class="section-subtitle">More legal guides and updates for foreigners in Indonesia.</p>
      <div class="grid-3">
        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
          <?php fts_blog_card(); ?>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div style="text-align:center;margin-top:28px;">
        <a class="btn btn-outline-navy" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
          View All Articles &rarr;
        </a>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <?php endwhile; ?>


  <!-- ═══════════════════════════════════════════════════════════════
       CTA BAND
  ══════════════════════════════════════════════════════════════════ -->
  <?php
  fts_cta_section(
      'Have a Legal Question About Indonesia?',
      'Our licensed lawyer is available for consultations on visa matters, company setup, foreign investment law, and business legal support.'
  );
  ?>

</main><!-- /#main-content -->

<?php get_footer(); ?>

<?php
/**
 * FTS Law – Global Header
 * Included on every page via get_header()
 *
 * @package fts-law
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0f2747" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header" role="banner">
  <div class="container header-inner">

    <!-- ── Brand / Logo ── -->
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?> – Home">
      <?php
      if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
      } else {
          echo 'LAW OFFICE &bull; SYARIF &amp; PARTNERS';
      }
      ?>
    </a>

    <!-- ── Mobile Hamburger ── -->
    <button
      class="menu-toggle"
      type="button"
      aria-label="Open navigation menu"
      aria-expanded="false"
      aria-controls="site-nav"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- ── Primary Navigation ── -->
    <nav class="nav" id="site-nav" role="navigation" aria-label="Primary menu">

      <!-- Row 1: main links -->
      <div class="nav-primary">
        <?php
        wp_nav_menu( [
            'theme_location'  => 'header-menu',
            'container'       => false,
            'items_wrap'      => '%3$s',   // no wrapping <ul>
            'walker'          => new FTS_Walker_Nav(),
            'fallback_cb'     => 'fts_law_fallback_nav',
            'depth'           => 2,
        ] );
        ?>
      </div>

      <!-- Row 2: CTAs + language -->
      <div class="nav-secondary">
        <div class="nav-consult-language">
          <a
            class="btn btn-gold"
            href="<?php echo esc_url( home_url( '/consultation' ) ); ?>"
          >Book Consultation</a>
          <!-- <a
            class="btn btn-green"
            href="<?php echo esc_url( fts_wa_url() ); ?>"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat via WhatsApp"
          >💬 WhatsApp</a> -->
        </div>
      </div>

    </nav><!-- /#site-nav -->

  </div><!-- /.header-inner -->
</header><!-- /.site-header -->

<?php

/**
 * FTS Law – Global Header
 * Included on every page via get_header()
 *
 * @package fts-law
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0f2747" />
  <?php wp_head(); ?>

  <!-- Mencegah Flash of Untranslated Content & Menambahkan Loading Animasi -->
  <script>
    (function(){
      try {
        // format cookie googtrans biasanya misalnya: /en/fr atau /auto/ja
        var match = document.cookie.match(/(?:^| )googtrans=([^;]+)/);
        // Jika cookie ada dan menargetkan bahasa BUKAN '/en' (contoh: bukan bahasa default Inggris)
        if (match && match[1] && !match[1].endsWith('/en')) {
          document.documentElement.classList.add('gtranslate-loading');
          var style = document.createElement('style');
          style.innerHTML = `
            /* Efek Modern: Transparan dan Blur. Web terlihat ringan namun FOUC tersamar */
            .gtranslate-loading body { 
                opacity: 0.3 !important; 
                filter: blur(5px) !important; 
                pointer-events: none !important; 
                background-color: #ffffff;
            }
            /* Spinner Loading Emas (tetap dipertahankan tanpa background putih nge-blok) */
            .gtranslate-loading::after {
                content: "";
                position: fixed;
                top: 48%; left: 50%;
                width: 48px; height: 48px;
                margin-top: -24px; margin-left: -24px;
                border: 4px solid rgba(0, 0, 0, 0.1);
                border-top: 4px solid #c7a760; /* FTS Gold */
                border-radius: 50%;
                animation: ftsGtSpin 0.9s linear infinite;
                z-index: 999999;
                box-shadow: 0 0 20px rgba(255,255,255,0.7); /* Efek glow agar spinner terlihat jelas */
            }
            @keyframes ftsGtSpin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            /* Transisi super mulus saat blur/transparan dicabut */
            .gtranslate-loading-done body { 
                transition: opacity 0.5s ease-out, filter 0.5s ease-out !important; 
                opacity: 1 !important; 
                filter: blur(0px) !important;
                pointer-events: auto !important; 
            }
          `;
          document.head.appendChild(style);
          
          // Safety timeout maksimal 1.5 detik agar pengunjung tidak selamanya terjebak loading jika koneksi lemot
          setTimeout(function() {
            if (document.documentElement.classList.contains('gtranslate-loading')) {
                document.documentElement.classList.remove('gtranslate-loading');
                document.documentElement.classList.add('gtranslate-loading-done');
            }
          }, 1500);
        }
      } catch(e) {}
    })();
  </script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header" id="site-header" role="banner">
    <div class="container header-inner">

      <!-- ── Brand / Logo ── -->
      <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
        <div class="brand brand--logo" aria-label="<?php bloginfo('name'); ?>">
          <?php the_custom_logo(); ?>
        </div>
      <?php else : ?>
        <a class="brand brand--text" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> – Home">
          LAW OFFICE &bull; SYARIF &amp; PARTNERS
        </a>
      <?php endif; ?>

      <!-- ── Mobile Hamburger ── -->
      <button
        class="menu-toggle"
        type="button"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="site-nav">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- ── Primary Navigation ── -->
      <nav class="nav" id="site-nav" role="navigation" aria-label="Primary menu">

        <!-- Row 1: main links -->
        <div class="nav-primary">
          <?php
          wp_nav_menu([
            'theme_location'  => 'header-menu',
            'container'       => false,
            'items_wrap'      => '%3$s',   // no wrapping <ul>
            'walker'          => new FTS_Walker_Nav(),
            'fallback_cb'     => 'fts_law_fallback_nav',
            'depth'           => 2,
          ]);
          ?>
        </div>

        <!-- Row 2: CTAs + language -->
        <div class="nav-secondary">
          <div class="nav-consult-language">
            <a
              class="btn btn-gold"
              href="<?php echo esc_url(home_url('/consultation')); ?>">Book Consultation</a>
            <div class="nav-language-switcher">
              <?php
              if (shortcode_exists('gtranslate')) {
                echo do_shortcode('[gtranslate]');
              } else {
                echo '<div class="gtranslate_wrapper"></div>';
              }
              ?>
            </div>
          </div>
        </div>

      </nav><!-- /#site-nav -->

    </div><!-- /.header-inner -->
  </header><!-- /.site-header -->
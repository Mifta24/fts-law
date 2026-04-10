<?php
/**
 * FTS Law – Footer Template
 *
 * @package fts-law
 */
?>

  </main><!-- /#main-content -->

  <!-- ═══════════════════════════════════════════════════════════════
       SITE FOOTER
  ══════════════════════════════════════════════════════════════════ -->
  <footer class="site-footer" role="contentinfo">
    <div class="container">

      <!-- Footer Grid: 3 columns -->
      <div class="footer-grid">

        <!-- Col 1 – Brand & About -->
        <div class="footer-col footer-col--brand">
          <div class="footer-brand">
            <?php if ( has_custom_logo() ) : ?>
              <?php the_custom_logo(); ?>
            <?php else : ?>
              <span class="footer-logo-text"><?php echo FTS_BRAND; ?></span>
            <?php endif; ?>
          </div>
          <p class="footer-about">
            Professional legal services for foreign investors, entrepreneurs, and
            expatriates in Indonesia. Specialising in visa &amp; immigration,
            PT&nbsp;PMA company setup, foreign investment law, and business legal support.
          </p>
          <div class="footer-badges">
            <span class="footer-badge">🛡 Licensed Indonesian Lawyer</span>
            <span class="footer-badge">🌍 Foreign Investor Support</span>
          </div>
        </div><!-- /Col 1 -->

        <!-- Col 2 – Quick Links (WP menu or fallback) -->
        <div class="footer-col footer-col--links">
          <h4 class="footer-title">Quick Links</h4>
          <div class="footer-links">
            <?php
            if ( has_nav_menu( 'footer-menu' ) ) {
                wp_nav_menu( [
                    'theme_location' => 'footer-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s',   // no wrapper element; just list items
                    'depth'          => 1,
                    'walker'         => new FTS_Footer_Walker(),
                    'fallback_cb'    => 'fts_law_footer_fallback_nav',
                ] );
            } else {
                fts_law_footer_fallback_nav();
            }
            ?>
          </div>
        </div><!-- /Col 2 -->

        <!-- Col 3 – Contact Info -->
        <div class="footer-col footer-col--contact">
          <h4 class="footer-title">Contact Us</h4>
          <div class="footer-contact-list">

            <div class="footer-contact-item">
              <span class="footer-contact-icon" aria-hidden="true">📍</span>
              <span><?php echo esc_html( fts_office_address() ); ?></span>
            </div>

            <div class="footer-contact-item">
              <span class="footer-contact-icon" aria-hidden="true">✉️</span>
              <a href="mailto:<?php echo esc_attr( fts_office_email() ); ?>">
                <?php echo esc_html( fts_office_email() ); ?>
              </a>
            </div>

            <div class="footer-contact-item">
              <span class="footer-contact-icon" aria-hidden="true">💬</span>
              <a href="<?php echo esc_url( fts_wa_url() ); ?>"
                 target="_blank"
                 rel="noopener noreferrer">
                WhatsApp Consultation
              </a>
            </div>

            <div class="footer-contact-item">
              <span class="footer-contact-icon" aria-hidden="true">🕐</span>
              <span><?php echo esc_html( fts_office_hours() ); ?></span>
            </div>

          </div>

          <!-- CTA in footer -->
          <a class="btn btn-gold footer-cta-btn"
             href="<?php echo esc_url( home_url( '/consultation' ) ); ?>">
            Book a Free Consultation
          </a>
        </div><!-- /Col 3 -->

      </div><!-- /.footer-grid -->

      <!-- Footer Bottom Bar -->
      <div class="footer-bottom">
        <div class="footer-bottom__copy">
          &copy; <span data-year></span>
          <?php echo FTS_BRAND; ?>.
          All rights reserved.
        </div>
        <div class="footer-bottom__legal">
          <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
          <span aria-hidden="true">·</span>
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
        </div>
      </div><!-- /.footer-bottom -->

    </div><!-- /.container -->
  </footer><!-- /.site-footer -->

  <!-- ═══════════════════════════════════════════════════════════════
       WHATSAPP FLOATING BUTTON
  ══════════════════════════════════════════════════════════════════ -->
  <a class="wa-float"
     href="<?php echo esc_url( fts_wa_url() ); ?>"
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Chat on WhatsApp">
    <svg class="wa-float__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         fill="currentColor" width="26" height="26" aria-hidden="true">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15
               -.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075
               -.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059
               -.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52
               .149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52
               -.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51
               -.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372
               -.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074
               .149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625
               .712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413
               .248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
      <path d="M12 0C5.373 0 0 5.373 0 12c0 2.125.558 4.122 1.532 5.852L.054 23.25
               a.75.75 0 00.916.916l5.398-1.478A11.955 11.955 0 0012 24
               c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22
               a9.956 9.956 0 01-5.187-1.448l-.37-.22-3.835 1.049 1.05-3.835
               -.22-.37A9.956 9.956 0 012 12C2 6.477 6.477 2 12 2
               s10 4.477 10 10-4.477 10-10 10z"/>
    </svg>
    <span class="wa-float__label">WhatsApp</span>
  </a>

  <!-- Trik 3: Custom Dictionary JS Khusus GTranslate Bahasa Jepang -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
      // 1. Isi dictionary ini dengan kata-kata dari GTranslate yang Anda anggap salah
      // Format: "Teks Jepang salah hasil Google" : "Teks Jepang perbaikan Anda"
      // 1. Kamus dikelompokkan berdasarkan halaman agar rapi
      const dictGroups = {
          // GLOBAL: Teks yang muncul di semua halaman (contoh: Header, Footer, Menu)
          global: {
              // "法律事務所・シャリフ＆パートナーズ": "test ww",
          },
          // HOME: Khusus halaman depan (/)
          home: {
              // "インドネシア在住外国人": "faf",
              // "外国人投資家、企業、居住者向けの専門的な法律サービス。": "cik",
              // "弁護士をご紹介します": "faf",
          },
          // --- BUSINESS & CORPORATE SETUP ---
          company_setup: {},
          pt_pma: {},
          foreign_investment: {},
          business_legal: {},
          contract_drafting: {},
          legal_risk: {},
          
          // --- VISA & IMMIGRATION ---
          kitas: {},
          kitap: {},
          investor_visa: {},
          visa_extension: {},
          visa: {},
          
          // --- OTHERS & GENERAL PAGES ---
          lawyer: {
              // "弁護士のプロフィール": "Perbaikan profil",
          },
          services: {},
          consultation: {},
          contact: {},
          guide: {},
          blog: {},
          privacy: {}
      };

      // 2. Gabungkan Global + Halaman yang Sedang Dibuka
      function getActiveDictionary() {
          // Selalu masukkan yang Global
          let activeDict = Object.assign({}, dictGroups.global);
          
          let path = window.location.pathname;

          // Cek halaman sedang dibuka dan masukkan kamus tambahannya
          if (document.body.classList.contains('home') || path === "/") {
              Object.assign(activeDict, dictGroups.home);
          } else if (path.includes('/company-setup')) {
              Object.assign(activeDict, dictGroups.company_setup);
          } else if (path.includes('/pt-pma')) {
              Object.assign(activeDict, dictGroups.pt_pma);
          } else if (path.includes('/foreign-investment')) {
              Object.assign(activeDict, dictGroups.foreign_investment);
          } else if (path.includes('/business-legal')) {
              Object.assign(activeDict, dictGroups.business_legal);
          } else if (path.includes('/contract-drafting')) {
              Object.assign(activeDict, dictGroups.contract_drafting);
          } else if (path.includes('/legal-risk')) {
              Object.assign(activeDict, dictGroups.legal_risk);
          } else if (path.includes('/kitas')) {
              Object.assign(activeDict, dictGroups.kitas);
          } else if (path.includes('/kitap')) {
              Object.assign(activeDict, dictGroups.kitap);
          } else if (path.includes('/investor-visa')) {
              Object.assign(activeDict, dictGroups.investor_visa);
          } else if (path.includes('/visa-extension')) {
              Object.assign(activeDict, dictGroups.visa_extension);
          } else if (path.includes('/visa')) {
              // Harus di bawah tipe visa spesifik, supaya tidak tertimpa
              Object.assign(activeDict, dictGroups.visa);
          } else if (path.includes('/lawyer')) {
              Object.assign(activeDict, dictGroups.lawyer);
          } else if (path.includes('/services')) {
              Object.assign(activeDict, dictGroups.services);
          } else if (path.includes('/consultation')) {
              Object.assign(activeDict, dictGroups.consultation);
          } else if (path.includes('/contact')) {
              Object.assign(activeDict, dictGroups.contact);
          } else if (path.includes('/guide')) {
              Object.assign(activeDict, dictGroups.guide);
          } else if (document.body.classList.contains('single-post') || document.body.classList.contains('archive') || path.includes('/blog')) {
              Object.assign(activeDict, dictGroups.blog);
          } else if (path.includes('/privacy-policy')) {
              Object.assign(activeDict, dictGroups.privacy);
          }

          return activeDict;
      }

      function getCookie(name) {
          let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()\[\]\\\/+^])/g, '\\$1') + "=([^;]*)"));
          return matches ? decodeURIComponent(matches[1]) : undefined;
      }

      function applyFix() {
          const googtrans = getCookie('googtrans');
          const isJapanese = document.documentElement.lang === 'ja' || (googtrans && googtrans.includes('/ja'));

          if (isJapanese) {
              const myDictionary = getActiveDictionary(); // Ambil tabel yg sudah dicampur berdasarkan halaman!

              let walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, null, false);
              let textNode;
              while(textNode = walker.nextNode()) {
                  for (let wrongWord in myDictionary) {
                      if (textNode.nodeValue.includes(wrongWord)) {
                          textNode.nodeValue = textNode.nodeValue.split(wrongWord).join(myDictionary[wrongWord]);
                      }
                  }
              }
          }
      }

      // Memberi waktu Google Translate menerjemahkan dulu, baru kita timpa hasilnya
      setTimeout(applyFix, 1500); 
      setTimeout(applyFix, 3000); 
      
      // Mengawasi jika pengunjung mengubah bahasa dari dropdown GTranslate tanpa me-refresh halaman
      const observer = new MutationObserver(function(mutations) {
          mutations.forEach(function(mutation) {
              if (mutation.attributeName === "class" || mutation.attributeName === "lang") {
                  setTimeout(applyFix, 800);
              }
          });
      });
      observer.observe(document.documentElement, { attributes: true });
  });
  </script>

  <?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Simple footer nav walker – outputs plain <a> tags (no <ul><li>).
 */
class FTS_Footer_Walker extends Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>' . "\n";
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        // Anchor already closed in start_el
    }

    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
}

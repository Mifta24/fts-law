<?php
/**
 * FTS Law – Foreign Legal & Visa Support
 * Theme Functions
 *
 * @package fts-law
 * @version 1.0.0
 */

// ─── SITE CONSTANTS ───────────────────────────────────────────────────────────
define( 'FTS_PHONE_RAW',  '6281234567890' );          // No + for wa.me link
define( 'FTS_PHONE_DISPLAY', '+62 812-3456-7890' );   // Human-readable
define( 'FTS_WA_LINK',    'https://wa.me/6281234567890' );
define( 'FTS_EMAIL',      'info@law.fts.biz.id' );
define( 'FTS_ADDRESS',    'Jakarta, Indonesia' );
define( 'FTS_OFFICE_HOURS', 'Mon – Fri: 09:00 – 18:00 WIB' );
define( 'FTS_BRAND',      'LAW OFFICE · SYARIF &amp; PARTNERS' );
define( 'FTS_THEME_VER',  '1.0.0' );


// ─── THEME SETUP ──────────────────────────────────────────────────────────────
function fts_law_setup() {

    // Allow WordPress to manage the <title> tag
    add_theme_support( 'title-tag' );

    // Featured images on posts & pages
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog-thumb',    800, 500, true );
    add_image_size( 'blog-card',     600, 380, true );
    add_image_size( 'lawyer-photo',  640, 800, true );

    // RSS feed links in <head>
    add_theme_support( 'automatic-feed-links' );

    // HTML5 markup
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );

    // Wide / full-width block alignment
    add_theme_support( 'align-wide' );

    // Custom logo
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 260,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    // Register nav menu locations
    register_nav_menus( [
        'header-menu' => __( 'Header Menu', 'fts-law' ),
        'footer-menu' => __( 'Footer Menu', 'fts-law' ),
    ] );

    // Translations
    load_theme_textdomain( 'fts-law', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fts_law_setup' );


// ─── ENQUEUE SCRIPTS & STYLES ─────────────────────────────────────────────────
function fts_law_enqueue_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'fts-law-main',
        get_template_directory_uri() . '/css/style.css',
        [],
        FTS_THEME_VER
    );

    // Google Fonts – Inter (professional, modern)
    wp_enqueue_style(
        'fts-law-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // Main script (defer via wp_script_add_data)
    wp_enqueue_script(
        'fts-law-main',
        get_template_directory_uri() . '/js/script.js',
        [],
        FTS_THEME_VER,
        true   // load in footer
    );

    // Inline script: pass PHP constants to JS
    wp_localize_script( 'fts-law-main', 'ftsData', [
        'waLink'    => FTS_WA_LINK,
        'phone'     => FTS_PHONE_DISPLAY,
        'email'     => FTS_EMAIL,
        'homeUrl'   => home_url( '/' ),
        'themeUrl'  => get_template_directory_uri(),
    ] );
}
add_action( 'wp_enqueue_scripts', 'fts_law_enqueue_assets' );


// ─── CUSTOM NAV WALKER ────────────────────────────────────────────────────────
/**
 * FTS_Walker_Nav
 *
 * Converts WordPress nav output to match the theme's dropdown CSS structure:
 *
 * Top-level item (no children):
 *   <a href="...">Label</a>
 *
 * Top-level item (has children):
 *   <div class="nav-dropdown">
 *     <button class="nav-dropdown-toggle" aria-expanded="false">Label</button>
 *     <div class="nav-dropdown-menu">
 *       <a href="...">Child</a>
 *       ...
 *     </div>
 *   </div>
 */
class FTS_Walker_Nav extends Walker_Nav_Menu {

    /** Open a sub-level (dropdown menu container). */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '<div class="nav-dropdown-menu">' . "\n";
        }
    }

    /** Close a sub-level. */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $output .= '</div>' . "\n"; // close .nav-dropdown-menu
        }
    }

    /** Output a single menu item. */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $classes      = empty( $item->classes ) ? [] : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes, true );
        $is_current   = in_array( 'current-menu-item', $classes, true )
                     || in_array( 'current-menu-ancestor', $classes, true )
                     || in_array( 'current-menu-parent', $classes, true );

        $active_attr  = $is_current ? ' class="active"' : '';

        if ( $depth === 0 && $has_children ) {
            // Dropdown wrapper + toggle button
            $wrapper_class = $is_current ? ' is-active' : '';
            $output .= '<div class="nav-dropdown' . esc_attr( $wrapper_class ) . '">' . "\n";
            $output .= '<button class="nav-dropdown-toggle" type="button" aria-expanded="false">';
            $output .= esc_html( $item->title );
            $output .= '</button>' . "\n";

        } elseif ( $depth === 0 ) {
            // Regular top-level link
            $output .= '<a href="' . esc_url( $item->url ) . '"' . $active_attr . '>';
            $output .= esc_html( $item->title );
            $output .= '</a>' . "\n";

        } else {
            // Child / dropdown item
            $output .= '<a href="' . esc_url( $item->url ) . '"' . $active_attr . '>';
            $output .= esc_html( $item->title );
            $output .= '</a>' . "\n";
        }
    }

    /** Close a menu item. */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $classes      = empty( $item->classes ) ? [] : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes, true );

        if ( $depth === 0 && $has_children ) {
            $output .= '</div>' . "\n"; // close .nav-dropdown
        }
        // Regular links and child items: the <a> tag is already self-closed in start_el
    }
}


// ─── HELPER: FALLBACK HARDCODED NAV ───────────────────────────────────────────
/**
 * Renders the header nav manually if no WP menu has been assigned.
 * Called as the `fallback_cb` in wp_nav_menu().
 */
function fts_law_fallback_nav() {
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'lawyer' ) ) . '">' . esc_html__( 'Lawyer', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'services' ) ) . '">' . esc_html__( 'Legal Services', 'fts-law' ) . '</a>';

    // Visa dropdown
    echo '<div class="nav-dropdown">';
    echo '<button class="nav-dropdown-toggle" type="button" aria-expanded="false">' . esc_html__( 'Visa & Immigration', 'fts-law' ) . '</button>';
    echo '<div class="nav-dropdown-menu">';
    echo '<a href="' . esc_url( fts_page_url( 'visa' ) ) . '">' . esc_html__( 'Visa Overview', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'kitas' ) ) . '">' . esc_html__( 'KITAS Visa', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'kitap' ) ) . '">' . esc_html__( 'KITAP Visa', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'investor-visa' ) ) . '">' . esc_html__( 'Investor Visa', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'visa-extension' ) ) . '">' . esc_html__( 'Visa Extension', 'fts-law' ) . '</a>';
    echo '</div></div>';

    // Company dropdown
    echo '<div class="nav-dropdown">';
    echo '<button class="nav-dropdown-toggle" type="button" aria-expanded="false">' . esc_html__( 'Company Setup', 'fts-law' ) . '</button>';
    echo '<div class="nav-dropdown-menu">';
    echo '<a href="' . esc_url( fts_page_url( 'company-setup' ) ) . '">' . esc_html__( 'Overview', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'pt-pma' ) ) . '">' . esc_html__( 'PT PMA Setup', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'foreign-investment' ) ) . '">' . esc_html__( 'Foreign Investment', 'fts-law' ) . '</a>';
    echo '</div></div>';

    echo '<a href="' . esc_url( fts_page_url( 'guide' ) ) . '">' . esc_html__( 'Free Legal Guide', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_blog_url() ) . '">' . esc_html__( 'Blog', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'consultation' ) ) . '">' . esc_html__( 'Consultation', 'fts-law' ) . '</a>';
    echo '<a href="' . esc_url( fts_page_url( 'contact' ) ) . '">' . esc_html__( 'Contact', 'fts-law' ) . '</a>';
}


// ─── HELPER: FALLBACK FOOTER NAV ──────────────────────────────────────────────
function fts_law_footer_fallback_nav() {
    $links = [
        'About Lawyer'    => 'lawyer',
        'Legal Services'  => 'services',
        'Visa Services'   => 'visa',
        'Business Setup'  => 'company-setup',
        'Legal Guide'     => 'guide',
        'Blog'            => 'blog',
        'Contact'         => 'contact',
        'Privacy Policy'  => 'privacy-policy',
    ];
    foreach ( $links as $label => $slug ) {
        $url = 'blog' === $slug ? fts_blog_url() : fts_page_url( $slug );
        echo '<a href="' . esc_url( $url ) . '">' . esc_html__( $label, 'fts-law' ) . '</a>';
    }
}


// ─── HELPER: POLYLANG-AWARE PAGE URL ─────────────────────────────────────────
/**
 * Returns a localized page URL by slug when Polylang is active.
 * Falls back to default permalink or a plain home_url path.
 */
function fts_page_url( string $slug = '' ) : string {
    $slug = trim( $slug, '/' );

    if ( '' === $slug ) {
        return home_url( '/' );
    }

    $page = get_page_by_path( $slug );

    if ( $page instanceof WP_Post ) {
        $page_id = (int) $page->ID;

        if ( function_exists( 'pll_get_post' ) ) {
            $translated_id = (int) pll_get_post( $page_id );
            if ( $translated_id > 0 ) {
                $translated_url = get_permalink( $translated_id );
                if ( is_string( $translated_url ) && '' !== $translated_url ) {
                    return $translated_url;
                }
            }
        }

        $page_url = get_permalink( $page_id );
        if ( is_string( $page_url ) && '' !== $page_url ) {
            return $page_url;
        }
    }

    return home_url( '/' . $slug . '/' );
}


// ─── HELPER: POLYLANG-AWARE BLOG URL ─────────────────────────────────────────
/**
 * Returns the localized posts page URL when available.
 */
function fts_blog_url() : string {
    $posts_page_id = (int) get_option( 'page_for_posts' );

    if ( $posts_page_id > 0 ) {
        if ( function_exists( 'pll_get_post' ) ) {
            $translated_id = (int) pll_get_post( $posts_page_id );
            if ( $translated_id > 0 ) {
                $translated_url = get_permalink( $translated_id );
                if ( is_string( $translated_url ) && '' !== $translated_url ) {
                    return $translated_url;
                }
            }
        }

        $posts_page_url = get_permalink( $posts_page_id );
        if ( is_string( $posts_page_url ) && '' !== $posts_page_url ) {
            return $posts_page_url;
        }
    }

    return home_url( '/blog/' );
}


// ─── HELPER: LANGUAGE SWITCHER OUTPUT ────────────────────────────────────────
/**
 * Renders language switcher markup.
 * Polylang is prioritized, then GTranslate fallback.
 */
function fts_language_switcher() : string {
    if ( function_exists( 'pll_the_languages' ) ) {
        $html = pll_the_languages( [
            'dropdown'      => 1,
            'show_flags'    => 0,
            'show_names'    => 1,
            'hide_if_empty' => 0,
            'echo'          => 0,
        ] );

        return is_string( $html ) ? $html : '';
    }

    if ( shortcode_exists( 'gtranslate' ) ) {
        return (string) do_shortcode( '[gtranslate]' );
    }

    return '<span class="lang-fallback">' . esc_html( strtoupper( substr( get_locale(), 0, 2 ) ) ) . '</span>';
}


// ─── HELPER: WHATSAPP LINK ────────────────────────────────────────────────────
function fts_wa_btn( $label = 'WhatsApp Chat', $extra_class = '' ) {
    $class = trim( 'btn btn-green ' . $extra_class );
    return '<a class="' . esc_attr( $class ) . '" href="' . esc_url( FTS_WA_LINK ) . '" target="_blank" rel="noopener noreferrer">'
         . '💬 ' . esc_html( $label )
         . '</a>';
}


// ─── HELPER: CONSULTATION LINK ────────────────────────────────────────────────
function fts_consult_btn( $label = 'Book Consultation', $extra_class = '' ) {
    $class = trim( 'btn btn-gold ' . $extra_class );
    return '<a class="' . esc_attr( $class ) . '" href="' . esc_url( fts_page_url( 'consultation' ) ) . '">'
         . esc_html( $label )
         . '</a>';
}


// ─── HELPER: CTA SECTION ──────────────────────────────────────────────────────
/**
 * Outputs the standard consultation CTA band used on all inner pages.
 *
 * @param string $title  Section heading.
 * @param string $desc   Supporting paragraph text.
 */
function fts_cta_section(
    string $title = 'Need Legal Advice in Indonesia?',
    string $desc  = 'Contact our legal team for professional assistance with visas, company setup, foreign investment, and business legal matters.'
) {
    ?>
    <section class="section-cta">
        <div class="container">
            <div class="cta-band">
                <h2 class="cta-band__title"><?php echo esc_html( $title ); ?></h2>
                <p class="cta-band__desc"><?php echo esc_html( $desc ); ?></p>
                <div class="cta-band__actions">
                    <?php echo fts_consult_btn(); ?>
                    <?php echo fts_wa_btn(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}


// ─── HELPER: PAGE HERO ────────────────────────────────────────────────────────
/**
 * Outputs the inner-page hero banner.
 *
 * @param string $eyebrow  Small uppercase label above the title.
 * @param string $title    Main H1 heading.
 * @param string $subtitle Supporting subtitle text.
 * @param string $bg       CSS background-image value (full url(...) string).
 */
function fts_page_hero(
    string $eyebrow  = '',
    string $title    = '',
    string $subtitle = '',
    string $bg       = ''
) {
    $style = $bg ? ' style="background-image:' . esc_attr( $bg ) . '"' : '';
    ?>
    <section class="page-hero"<?php echo $style; ?>>
        <div class="container">
            <?php if ( $eyebrow ) : ?>
                <span class="eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
            <?php endif; ?>
            <h1><?php echo esc_html( $title ); ?></h1>
            <?php if ( $subtitle ) : ?>
                <p class="page-hero__subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php
}


// ─── CONTENT HELPERS ──────────────────────────────────────────────────────────

/** Excerpt length for blog cards. */
function fts_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'fts_excerpt_length', 20 );

function fts_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'fts_excerpt_more' );


// ─── BLOG QUERY HELPER ────────────────────────────────────────────────────────
/**
 * Returns a WP_Query for the latest blog posts used in homepage & sidebar.
 *
 * @param int $count Number of posts.
 * @return WP_Query
 */
function fts_latest_posts( int $count = 3 ) : WP_Query {
    return new WP_Query( [
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => $count,
        'ignore_sticky_posts' => true,
    ] );
}


// ─── BLOG CARD PARTIAL ────────────────────────────────────────────────────────
/**
 * Outputs a single blog post card.
 * Call inside a WP_Query loop.
 */
function fts_blog_card() {
    $cats = get_the_category();
    $cat_label = $cats ? esc_html( $cats[0]->name ) : 'Legal Insight';
    ?>
    <article class="card card--blog">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="card__thumb">
                <?php the_post_thumbnail( 'blog-card', [ 'alt' => get_the_title() ] ); ?>
            </a>
        <?php endif; ?>
        <div class="card__body">
            <span class="mini-label"><?php echo $cat_label; ?></span>
            <h3 class="card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
            <a class="card__read-more" href="<?php the_permalink(); ?>">Read more &rarr;</a>
        </div>
    </article>
    <?php
}


// ─── BREADCRUMB ───────────────────────────────────────────────────────────────
function fts_breadcrumb() {
    if ( is_front_page() ) return;
    echo '<nav class="breadcrumb" aria-label="Breadcrumb"><div class="container">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'fts-law' ) . '</a>';
    echo '<span aria-hidden="true"> / </span>';

    if ( is_singular( 'post' ) ) {
        $cats = get_the_category();
        if ( $cats ) {
            echo '<a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
            echo '<span aria-hidden="true"> / </span>';
        }
        the_title();
    } elseif ( is_page() ) {
        the_title();
    } elseif ( is_archive() || is_home() ) {
        echo esc_html__( 'Blog', 'fts-law' );
    } elseif ( is_search() ) {
        echo esc_html__( 'Search Results', 'fts-law' );
    }

    echo '</div></nav>';
}


// ─── REMOVE WORDPRESS BLOAT ───────────────────────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
add_filter( 'the_generator', '__return_empty_string' );


// ─── DOCUMENT TITLE SEPARATOR ─────────────────────────────────────────────────
function fts_document_title_separator( $sep ) {
    return '|';
}
add_filter( 'document_title_separator', 'fts_document_title_separator' );


// ─── BODY CLASS ADDITIONS ─────────────────────────────────────────────────────
function fts_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'fts-archive';
    }
    if ( is_front_page() ) {
        $classes[] = 'fts-home';
    }
    return $classes;
}
add_filter( 'body_class', 'fts_body_classes' );


// ─── CONTACT FORM 7 SUPPORT ───────────────────────────────────────────────────
// Remove CF7's default CSS to avoid conflicts with our custom styles
add_filter( 'wpcf7_load_css', '__return_false' );


// ─── CUSTOMIZER SETTINGS ──────────────────────────────────────────────────────
function fts_customizer( $wp_customize ) {

    // ── Panel: Contact Info ──
    $wp_customize->add_section( 'fts_contact', [
        'title'    => __( 'Contact Information', 'fts-law' ),
        'priority' => 30,
    ] );

    $fields = [
        'fts_whatsapp' => [
            'label'   => 'WhatsApp Number (with country code, no +)',
            'default' => '6281234567890',
        ],
        'fts_email' => [
            'label'   => 'Office Email',
            'default' => 'info@law.fts.biz.id',
        ],
        'fts_address' => [
            'label'   => 'Office Address',
            'default' => 'Jakarta, Indonesia',
        ],
        'fts_office_hours' => [
            'label'   => 'Office Hours',
            'default' => 'Mon – Fri: 09:00 – 18:00 WIB',
        ],
        'fts_google_maps_embed' => [
            'label'   => 'Google Maps Embed URL',
            'default' => '',
        ],
        'fts_cf7_contact_form_id' => [
            'label'   => 'CF7 Contact Form ID',
            'default' => '72',
        ],
        'fts_cf7_consultation_form_id' => [
            'label'   => 'CF7 Consultation Form ID',
            'default' => '73',
        ],
        'fts_cf7_guide_form_id' => [
            'label'   => 'CF7 Guide Form ID',
            'default' => '74',
        ],
    ];

    foreach ( $fields as $id => $args ) {
        $wp_customize->add_setting( $id, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => $args['label'],
            'section' => 'fts_contact',
            'type'    => 'text',
        ] );
    }
}
add_action( 'customize_register', 'fts_customizer' );


// ─── POLYLANG STRING REGISTRY ────────────────────────────────────────────────
/**
 * Registers dynamic theme strings in Polylang (Strings translation).
 */
function fts_register_polylang_strings() : void {
    if ( ! function_exists( 'pll_register_string' ) ) {
        return;
    }

    $strings = [
        'Brand Name'     => FTS_BRAND,
        'Office Email'   => fts_get_option( 'fts_email', FTS_EMAIL, false ),
        'Office Address' => fts_get_option( 'fts_address', FTS_ADDRESS, false ),
        'Office Hours'   => fts_get_option( 'fts_office_hours', FTS_OFFICE_HOURS, false ),
    ];

    foreach ( $strings as $name => $value ) {
        if ( is_string( $value ) && '' !== trim( $value ) ) {
            pll_register_string( $name, $value, 'FTS Law Theme', false );
        }
    }
}
add_action( 'init', 'fts_register_polylang_strings' );


// ─── CUSTOMIZER HELPERS ───────────────────────────────────────────────────────
function fts_translate_string( string $value ) : string {
    if ( '' !== $value && function_exists( 'pll__' ) ) {
        return (string) pll__( $value );
    }

    return $value;
}

function fts_get_option( string $key, string $fallback = '', bool $translate = false ) : string {
    $value = (string) get_theme_mod( $key, $fallback );

    return $translate ? fts_translate_string( $value ) : $value;
}

function fts_brand() : string {
    return fts_translate_string( FTS_BRAND );
}

function fts_whatsapp() : string {
    return fts_get_option( 'fts_whatsapp', FTS_PHONE_RAW, false );
}

function fts_wa_url() : string {
    return 'https://wa.me/' . fts_whatsapp();
}

function fts_office_email() : string {
    return fts_get_option( 'fts_email', FTS_EMAIL, true );
}

function fts_office_address() : string {
    return fts_get_option( 'fts_address', FTS_ADDRESS, true );
}

function fts_office_hours() : string {
    return fts_get_option( 'fts_office_hours', FTS_OFFICE_HOURS, true );
}

function fts_maps_embed() : string {
     return fts_get_option('fts_google_maps_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.671136651886!2d106.78509397610306!3d-6.174763644527437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7002212556b%3A0xd553386b470af88!2sNEO%20SOHO%20APARTEMENT!5e0!3m2!1sid!2sid!4v1753431520442!5m2!1sid!2sid', false);
}

function fts_cf7_contact_form_id() : string {
    return preg_replace( '/\D+/', '', fts_get_option( 'fts_cf7_contact_form_id', '72', false ) );
}

function fts_cf7_consultation_form_id() : string {
    return preg_replace( '/\D+/', '', fts_get_option( 'fts_cf7_consultation_form_id', '73', false ) );
}

function fts_cf7_guide_form_id() : string {
    return preg_replace( '/\D+/', '', fts_get_option( 'fts_cf7_guide_form_id', '74', false ) );
}

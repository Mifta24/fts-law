/**
 * FTS Law – Foreign Legal & Visa Support
 * Main JavaScript  |  v1.0.0
 *
 * Covers:
 *  - Mobile hamburger menu toggle
 *  - Multi-level dropdown menus (desktop hover + mobile tap)
 *  - Sticky header scroll class
 *  - Copy-link share button
 *  - Dynamic copyright year
 *  - Smooth anchor scroll (fallback for older browsers)
 *  - Form UX helpers
 *  - WhatsApp float pulse animation
 */

(function () {
  'use strict';

  /* ─── UTILITY ─────────────────────────────────────────────────── */

  /**
   * Query selector shorthand.
   * @param {string} selector
   * @param {Element} [ctx=document]
   * @returns {Element|null}
   */
  function qs(selector, ctx) {
    return (ctx || document).querySelector(selector);
  }

  /**
   * Query selector all shorthand.
   * @param {string} selector
   * @param {Element} [ctx=document]
   * @returns {NodeList}
   */
  function qsa(selector, ctx) {
    return (ctx || document).querySelectorAll(selector);
  }

  /**
   * Add an event listener to an element (if it exists).
   * @param {Element|null} el
   * @param {string} type
   * @param {Function} handler
   * @param {object} [options]
   */
  function on(el, type, handler, options) {
    if (el) el.addEventListener(type, handler, options || false);
  }


  /* ─── DOM READY ───────────────────────────────────────────────── */

  document.addEventListener('DOMContentLoaded', function () {

    initHamburgerMenu();
    initDropdowns();
    initStickyHeader();
    initCopyLinkButtons();
    initDynamicYear();
    initFormHelpers();
    initSmoothScroll();
    initWaFloatPulse();
    initBreadcrumbScroll();
    initGTranslateLabelFix();

  });


  /* ═══════════════════════════════════════════════════════════════
     1. HAMBURGER / MOBILE MENU
  ═══════════════════════════════════════════════════════════════ */

  function initHamburgerMenu() {
    var body       = document.body;
    var menuToggle = qs('.menu-toggle');
    var nav        = qs('#site-nav');

    if (!menuToggle || !nav) return;

    /* Toggle open/close */
    on(menuToggle, 'click', function () {
      var isOpen = nav.classList.toggle('is-open');
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.setAttribute(
        'aria-label',
        isOpen ? 'Close navigation menu' : 'Open navigation menu'
      );
      body.classList.toggle('menu-open', isOpen);
    });

    /* Close when a regular nav link is clicked */
    qsa('a', nav).forEach(function (link) {
      on(link, 'click', function () {
        if (link.closest('.nav-language-switcher')) {
          return;
        }
        closeMenu(menuToggle, nav, body);
      });
    });

    /* Close on Escape key */
    on(document, 'keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        closeMenu(menuToggle, nav, body);
        menuToggle.focus();
      }
    });

    /* Close when clicking outside the header */
    on(document, 'click', function (e) {
      var header = qs('.site-header');
      if (
        header &&
        !header.contains(e.target) &&
        nav.classList.contains('is-open')
      ) {
        closeMenu(menuToggle, nav, body);
      }
    });

    /* Close when viewport widens past mobile breakpoint */
    var resizeTimer;
    on(window, 'resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        if (window.innerWidth > 1180 && nav.classList.contains('is-open')) {
          closeMenu(menuToggle, nav, body);
        }
      }, 120);
    });
  }

  function closeMenu(menuToggle, nav, body) {
    if (!nav) return;
    nav.classList.remove('is-open');
    if (menuToggle) {
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Open navigation menu');
    }
    if (body) body.classList.remove('menu-open');

    /* Also close any open mobile dropdowns */
    qsa('.nav-dropdown.is-open', nav).forEach(function (dd) {
      dd.classList.remove('is-open');
      var btn = qs('.nav-dropdown-toggle', dd);
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
  }


  /* ═══════════════════════════════════════════════════════════════
     2. DROPDOWN MENUS (desktop + mobile)
  ═══════════════════════════════════════════════════════════════ */

  function initDropdowns() {
    qsa('.nav-dropdown').forEach(function (dropdown) {
      var toggle = qs('.nav-dropdown-toggle', dropdown);
      if (!toggle) return;

      /* Mobile / keyboard: toggle on click */
      on(toggle, 'click', function (e) {
        e.stopPropagation();

        var isOpen = dropdown.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(isOpen));

        /* Close sibling dropdowns */
        qsa('.nav-dropdown.is-open').forEach(function (other) {
          if (other !== dropdown) {
            other.classList.remove('is-open');
            var otherToggle = qs('.nav-dropdown-toggle', other);
            if (otherToggle) otherToggle.setAttribute('aria-expanded', 'false');
          }
        });
      });

      /* Close when focus leaves the dropdown (keyboard navigation) */
      on(dropdown, 'focusout', function (e) {
        /* Use a small timeout so focus can move to a child element first */
        setTimeout(function () {
          if (!dropdown.contains(document.activeElement)) {
            dropdown.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
          }
        }, 100);
      });
    });

    /* Global click: close all open dropdowns when clicking outside nav */
    on(document, 'click', function (e) {
      var nav = qs('#site-nav');
      if (nav && !nav.contains(e.target)) {
        qsa('.nav-dropdown.is-open').forEach(function (dd) {
          dd.classList.remove('is-open');
          var btn = qs('.nav-dropdown-toggle', dd);
          if (btn) btn.setAttribute('aria-expanded', 'false');
        });
      }
    });

    /* Escape key: close focused dropdown */
    on(document, 'keydown', function (e) {
      if (e.key === 'Escape') {
        qsa('.nav-dropdown.is-open').forEach(function (dd) {
          dd.classList.remove('is-open');
          var btn = qs('.nav-dropdown-toggle', dd);
          if (btn) {
            btn.setAttribute('aria-expanded', 'false');
            btn.focus();
          }
        });
      }
    });
  }


  /* ═══════════════════════════════════════════════════════════════
     3. STICKY HEADER — scroll class
  ═══════════════════════════════════════════════════════════════ */

  function initStickyHeader() {
    var header = qs('.site-header');
    if (!header) return;

    var SCROLL_THRESHOLD = 40;

    function handleScroll() {
      if (window.scrollY > SCROLL_THRESHOLD) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }

    on(window, 'scroll', handleScroll, { passive: true });
    handleScroll(); // run once on load
  }


  /* ═══════════════════════════════════════════════════════════════
     4. COPY-LINK SHARE BUTTONS
  ═══════════════════════════════════════════════════════════════ */

  function initCopyLinkButtons() {
    qsa('[data-copy-url]').forEach(function (btn) {
      on(btn, 'click', function () {
        var url = btn.getAttribute('data-copy-url') || window.location.href;
        copyToClipboard(url, btn);
      });
    });
  }

  function copyToClipboard(text, btn) {
    if (!text) return;

    var originalText = btn.textContent;

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(text).then(function () {
        showCopiedFeedback(btn, originalText);
      }).catch(function () {
        fallbackCopy(text, btn, originalText);
      });
    } else {
      fallbackCopy(text, btn, originalText);
    }
  }

  function fallbackCopy(text, btn, originalText) {
    var textarea = document.createElement('textarea');
    textarea.value = text;
    textarea.style.cssText = 'position:fixed;top:-9999px;left:-9999px;opacity:0;';
    document.body.appendChild(textarea);
    textarea.focus();
    textarea.select();
    try {
      document.execCommand('copy');
      showCopiedFeedback(btn, originalText);
    } catch (e) {
      btn.textContent = '⚠ Copy failed';
      setTimeout(function () {
        btn.textContent = originalText;
      }, 2000);
    }
    document.body.removeChild(textarea);
  }

  function showCopiedFeedback(btn, originalText) {
    btn.textContent = '✓ Link Copied!';
    btn.classList.add('share-btn--copied');
    setTimeout(function () {
      btn.textContent = originalText;
      btn.classList.remove('share-btn--copied');
    }, 2500);
  }


  /* ═══════════════════════════════════════════════════════════════
     5. DYNAMIC COPYRIGHT YEAR
  ═══════════════════════════════════════════════════════════════ */

  function initDynamicYear() {
    qsa('[data-year]').forEach(function (el) {
      el.textContent = String(new Date().getFullYear());
    });
  }


  /* ═══════════════════════════════════════════════════════════════
     6. FORM UX HELPERS
  ═══════════════════════════════════════════════════════════════ */

  function initFormHelpers() {
    /* Float label effect: add .has-value class when an input is filled */
    qsa('input, textarea, select').forEach(function (field) {
      function checkValue() {
        if (field.value && field.value.trim()) {
          field.classList.add('has-value');
        } else {
          field.classList.remove('has-value');
        }
      }

      on(field, 'input', checkValue);
      on(field, 'change', checkValue);
      on(field, 'blur', checkValue);
      checkValue(); // run on load for pre-filled fields
    });

    /* Simple client-side required field highlight before native HTML5 validation */
    qsa('form').forEach(function (form) {
      on(form, 'submit', function (e) {
        var invalid = false;

        qsa('[required]', form).forEach(function (field) {
          if (!field.value || !field.value.trim()) {
            field.classList.add('field-error');
            invalid = true;

            /* Remove error class on next input */
            on(field, 'input', function removeError() {
              field.classList.remove('field-error');
              field.removeEventListener('input', removeError);
            });
          } else {
            field.classList.remove('field-error');
          }
        });

        /* Scroll to first error */
        if (invalid) {
          var firstError = qs('.field-error', form);
          if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstError.focus();
          }
        }
      });
    });

    /* WhatsApp number formatter: strip non-digits and auto-add country code hint */
    qsa('input[name="whatsapp"], input[id*="whatsapp"]').forEach(function (input) {
      on(input, 'blur', function () {
        var val = input.value.replace(/\D/g, '');
        if (val.startsWith('0')) {
          val = '62' + val.slice(1);
          input.value = '+' + val;
        }
      });
    });
  }


  /* ═══════════════════════════════════════════════════════════════
     7. SMOOTH SCROLL (polyfill for browsers without CSS support)
  ═══════════════════════════════════════════════════════════════ */

  function initSmoothScroll() {
    /* Only apply if CSS scroll-behavior is NOT supported */
    if ('scrollBehavior' in document.documentElement.style) return;

    on(document, 'click', function (e) {
      var anchor = e.target.closest('a[href^="#"]');
      if (!anchor) return;

      var targetId = anchor.getAttribute('href');
      if (!targetId || targetId === '#') return;

      var target = qs(targetId);
      if (!target) return;

      e.preventDefault();

      var headerHeight = (qs('.site-header') || {}).offsetHeight || 0;
      var targetTop    = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;

      window.scrollTo({ top: targetTop, behavior: 'smooth' });
    });
  }


  /* ═══════════════════════════════════════════════════════════════
     8. WHATSAPP FLOAT PULSE ANIMATION
  ═══════════════════════════════════════════════════════════════ */

  function initWaFloatPulse() {
    var waFloat = qs('.wa-float');
    if (!waFloat) return;

    /* Inject pulse keyframe if not already present */
    if (!qs('#fts-wa-pulse-style')) {
      var style = document.createElement('style');
      style.id  = 'fts-wa-pulse-style';
      style.textContent = [
        '@keyframes fts-wa-pulse {',
        '  0%   { box-shadow: 0 0 0 0 rgba(37,211,102,0.5); }',
        '  70%  { box-shadow: 0 0 0 14px rgba(37,211,102,0); }',
        '  100% { box-shadow: 0 0 0 0 rgba(37,211,102,0); }',
        '}',
        '.wa-float--pulse {',
        '  animation: fts-wa-pulse 2s ease-out 3;',
        '}'
      ].join('\n');
      document.head.appendChild(style);
    }

    /* Pulse the button after 3 seconds to draw attention */
    setTimeout(function () {
      waFloat.classList.add('wa-float--pulse');
      on(waFloat, 'animationend', function () {
        waFloat.classList.remove('wa-float--pulse');
      }, { once: true });
    }, 3000);

    /* Pulse again after 30 seconds if user hasn't scrolled far */
    setTimeout(function () {
      if (window.scrollY < 400) {
        waFloat.classList.add('wa-float--pulse');
        on(waFloat, 'animationend', function () {
          waFloat.classList.remove('wa-float--pulse');
        }, { once: true });
      }
    }, 30000);
  }


  /* ═══════════════════════════════════════════════════════════════
     9. BREADCRUMB — active current page highlight
  ═══════════════════════════════════════════════════════════════ */

  function initBreadcrumbScroll() {
    /* If user arrived via a hash anchor, scroll past sticky header */
    if (window.location.hash) {
      var target = qs(window.location.hash);
      if (target) {
        setTimeout(function () {
          var headerHeight = (qs('.site-header') || {}).offsetHeight || 0;
          var top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
          window.scrollTo({ top: top, behavior: 'smooth' });
        }, 200);
      }
    }
  }


  /* ═══════════════════════════════════════════════════════════════
     10. BACK TO TOP (auto-inject if not present)
  ═══════════════════════════════════════════════════════════════ */

  (function initBackToTop() {
    var btn = document.createElement('button');
    btn.setAttribute('aria-label', 'Back to top');
    btn.setAttribute('id', 'back-to-top');
    btn.style.cssText = [
      'position:fixed',
      'right:20px',
      'bottom:80px',
      'z-index:55',
      'width:44px',
      'height:44px',
      'border-radius:50%',
      'background:rgba(15,39,71,0.88)',
      'color:#fff',
      'border:none',
      'cursor:pointer',
      'font-size:1.2rem',
      'display:none',
      'align-items:center',
      'justify-content:center',
      'box-shadow:0 4px 16px rgba(0,0,0,0.18)',
      'transition:opacity .2s,transform .2s',
    ].join(';');
    btn.innerHTML = '&#8679;'; /* ↑ */
    document.body.appendChild(btn);

    on(window, 'scroll', function () {
      if (window.scrollY > 500) {
        btn.style.display = 'flex';
        btn.style.opacity = '1';
      } else {
        btn.style.opacity = '0';
        setTimeout(function () {
          if (window.scrollY <= 500) btn.style.display = 'none';
        }, 200);
      }
    }, { passive: true });

    on(btn, 'click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  })();


  /* ═══════════════════════════════════════════════════════════════
     11. ACTIVE NAV LINK HIGHLIGHTING
  ═══════════════════════════════════════════════════════════════ */

  (function initActiveNav() {
    var currentPath = window.location.pathname.replace(/\/$/, '') || '/';

    qsa('.nav a, .nav-dropdown-menu a').forEach(function (link) {
      var linkPath = (link.getAttribute('href') || '').replace(/\/$/, '');
      if (!linkPath || linkPath === '#') return;

      /* Exact match or starts with (for section pages) */
      if (linkPath === currentPath) {
        link.classList.add('active');
      }
    });
  })();


  /* ═══════════════════════════════════════════════════════════════
     12. DETAILS / SUMMARY — FAQ ACCORDION ENHANCEMENTS
  ═══════════════════════════════════════════════════════════════ */

  (function initFaqAccordion() {
    var faqItems = qsa('.faq-item');
    if (!faqItems.length) return;

    faqItems.forEach(function (item) {
      var summary = qs('summary', item);
      if (!summary) return;

      on(item, 'toggle', function () {
        /* Optionally close other open items (uncomment for single-open behaviour) */
        // if (item.open) {
        //   faqItems.forEach(function (other) {
        //     if (other !== item && other.open) other.removeAttribute('open');
        //   });
        // }

        /* Smooth open animation via max-height */
        var answer = qs('.faq-item__answer, .faq-answer', item);
        if (answer) {
          if (item.open) {
            answer.style.maxHeight = answer.scrollHeight + 'px';
          } else {
            answer.style.maxHeight = '0';
          }
        }
      });
    });
  })();


  /* ═══════════════════════════════════════════════════════════════
     13. SECTION FADE-IN ON SCROLL (Intersection Observer)
  ═══════════════════════════════════════════════════════════════ */

  (function initFadeIn() {
    if (!('IntersectionObserver' in window)) return;

    /* Inject fade-in styles */
    if (!qs('#fts-fadein-style')) {
      var s = document.createElement('style');
      s.id  = 'fts-fadein-style';
      s.textContent = [
        '.fts-fade { opacity: 0; transform: translateY(22px);',
        '  transition: opacity .55s ease, transform .55s ease; }',
        '.fts-fade.fts-visible { opacity: 1; transform: none; }',
      ].join('\n');
      document.head.appendChild(s);
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('fts-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    /* Apply to cards and section content blocks */
    qsa(
      '.card, .step-item, .related-card, .visa-tile, .who-item, ' +
      '.type-card, .scope-card, .risk-card, .practice-card, ' +
      '.guide-chapter-item, .timeline-item, .timeline-card, ' +
      '.overstay-stage, .compliance-item, .top-risk-item, ' +
      '.ownership-card, .rights-card, .governance-card, .note-card'
    ).forEach(function (el) {
      /* Skip elements already visible above the fold */
      var rect = el.getBoundingClientRect();
      if (rect.top > window.innerHeight) {
        el.classList.add('fts-fade');
        observer.observe(el);
      }
    });
  })();


  /* ═══════════════════════════════════════════════════════════════
     14. FORM SUCCESS MESSAGE (for non-CF7 native forms)
  ═══════════════════════════════════════════════════════════════ */

  (function initFormSuccess() {
    /* Check URL for ?sent=1 after a PHP redirect */
    if (window.location.search.indexOf('sent=1') !== -1) {
      var successMsg = document.createElement('div');
      successMsg.setAttribute('role', 'alert');
      successMsg.style.cssText = [
        'background:#dcfce7',
        'border:1px solid #86efac',
        'border-radius:12px',
        'padding:16px 20px',
        'margin-bottom:20px',
        'font-weight:600',
        'color:#166534',
        'font-size:.95rem',
      ].join(';');
      successMsg.textContent = '✅ Your message has been sent. We will respond within 1 business day.';

      var firstForm = qs('form');
      if (firstForm && firstForm.parentNode) {
        firstForm.parentNode.insertBefore(successMsg, firstForm);
        successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    }
  })();

  /* ═══════════════════════════════════════════════════════════════
     15. GTRANSLATE LABEL FIX
  ═══════════════════════════════════════════════════════════════ */

  function initGTranslateLabelFix() {
    var langSwitcher = qs('.nav-language-switcher');
    if (!langSwitcher) return;

    function cleanLabel() {
      var walker = document.createTreeWalker(langSwitcher, NodeFilter.SHOW_TEXT, null, false);
      var node;
      while (node = walker.nextNode()) {
        if (node.nodeValue.includes('Chinese (Simplified)')) {
          node.nodeValue = node.nodeValue.replace('Chinese (Simplified)', 'Chinese');
        }
      }
    }

    cleanLabel();

    var observer = new MutationObserver(function (mutations) {
      var shouldClean = false;
      for (var i = 0; i < mutations.length; i++) {
        var m = mutations[i];
        if (m.type === 'characterData' || m.addedNodes.length > 0) {
          shouldClean = true;
          break;
        }
      }
      if (shouldClean) {
        observer.disconnect();
        cleanLabel();
        observer.observe(langSwitcher, { childList: true, subtree: true, characterData: true });
      }
    });

    observer.observe(langSwitcher, { childList: true, subtree: true, characterData: true });
  }

})();

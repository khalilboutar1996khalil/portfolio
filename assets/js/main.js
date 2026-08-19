// Page loader: hides the splash spinner once the page has fully loaded.
(function () {
  var loader = document.getElementById('page-loader');
  if (!loader) return;
  document.documentElement.classList.add('overflow-hidden');

  function hideLoader() {
    loader.classList.add('hide');
    document.documentElement.classList.remove('overflow-hidden');
    setTimeout(function () {
      loader.remove();
    }, 500);
  }

  if (document.readyState === 'complete') {
    hideLoader();
  } else {
    window.addEventListener('load', hideLoader);
  }
})();

// Card tilt/glow: a soft highlight follows the cursor and the card tilts
// toward it. Skipped for touch input (no meaningful hover position) and for
// prefers-reduced-motion — it's purely decorative.
(function () {
  var cards = document.querySelectorAll('.card');
  var canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!cards.length || !canHover || reduceMotion) return;

  var MAX_TILT = 6;

  cards.forEach(function (card) {
    card.addEventListener('mousemove', function (e) {
      var rect = card.getBoundingClientRect();
      var x = (e.clientX - rect.left) / rect.width;
      var y = (e.clientY - rect.top) / rect.height;
      card.style.setProperty('--mx', (x * 100) + '%');
      card.style.setProperty('--my', (y * 100) + '%');
      var rotateY = (x - 0.5) * MAX_TILT * 2;
      var rotateX = (0.5 - y) * MAX_TILT * 2;
      card.style.transform = 'perspective(800px) translateY(-.375rem) scale(1.015) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
      card.classList.add('tilt-active');
    });
    card.addEventListener('mouseleave', function () {
      card.style.transform = '';
      card.classList.remove('tilt-active');
    });
  });
})();

// Scroll-spy: highlight the nav link matching the section currently in view,
// since clicking a nav item wasn't leaving any visible "current" indicator.
(function () {
  var sections = document.querySelectorAll('main section[id]');
  var navLinks = document.querySelectorAll('.nav-link[href^="#"], .mobile-link[href^="#"]');
  if (!sections.length || !navLinks.length || !('IntersectionObserver' in window)) return;

  function setActive(id) {
    navLinks.forEach(function (link) {
      link.classList.toggle('active', link.getAttribute('href') === '#' + id);
    });
  }

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) setActive(entry.target.id);
      });
    },
    { rootMargin: '-40% 0px -55% 0px', threshold: 0 }
  );

  sections.forEach(function (section) {
    observer.observe(section);
  });
})();

// WhatsApp phone number the contact form sends to (Tunisia country code + local number).
const CONTACT_WHATSAPP_NUMBER = '21653117158';

// Contact form: builds a WhatsApp message from the submitted fields and opens
// wa.me with it pre-filled. Plain DOM APIs on purpose — this mirrors the
// pattern already proven working in production on visa-document.netlify.app,
// after the Alpine-based version (@submit.prevent="submit") turned out to be
// unreliable in some browsers. Per-language labels/messages come from data-*
// attributes on the <form> so this same script serves both fr/ and en/.
(function () {
  const form = document.getElementById('whatsapp-contact-form');
  const toast = document.getElementById('whatsapp-contact-toast');
  console.log('[contact-form] init — form found:', !!form, 'toast found:', !!toast);
  if (!form || !toast) return;

  let toastTimer = null;
  function showToast(html, isError, duration) {
    clearTimeout(toastTimer);
    // Drop 'show' first so the progress-bar animation it triggers (and the
    // entrance transition) restart cleanly even if a toast is already visible.
    toast.classList.remove('show');
    toast.style.setProperty('--toast-duration', duration + 'ms');
    const icon = isError ? 'bi-exclamation-circle-fill' : 'bi-check-circle-fill';
    toast.innerHTML = `<i class="bi ${icon} toast-icon"></i><div class="toast-body">${html}</div>`;
    void toast.offsetWidth; // force reflow before re-adding 'show'
    toast.classList.toggle('error', !!isError);
    toast.classList.add('show');
    toastTimer = setTimeout(() => toast.classList.remove('show'), duration);
  }

  form.addEventListener('submit', (e) => {
    console.log('[contact-form] submit event fired');
    e.preventDefault();
    const data = new FormData(form);
    const name = (data.get('name') || '').toString().trim();
    const email = (data.get('email') || '').toString().trim();
    const subject = (data.get('subject') || '').toString().trim();
    const message = (data.get('message') || '').toString().trim();
    console.log('[contact-form] fields:', { name, email, subject, message });

    if (!name || !email || !subject || !message) {
      console.log('[contact-form] validation failed, showing error toast');
      showToast(form.dataset.error, true, 4000);
      return;
    }

    const text = [
      `${form.dataset.labelName}: ${name}`,
      `${form.dataset.labelEmail}: ${email}`,
      `${form.dataset.labelSubject}: ${subject}`,
      '',
      message,
    ].join('\n');

    const url = `https://wa.me/${CONTACT_WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`;
    console.log('[contact-form] opening url:', url);

    // Open WhatsApp in a new tab instead of navigating the current one away —
    // this must happen synchronously, in direct response to the click, or
    // browsers (notably Safari) silently block it as a popup.
    const opened = window.open(url, '_blank', 'noopener');
    console.log('[contact-form] window.open returned:', opened);

    if (!opened || opened.closed || typeof opened.closed === 'undefined') {
      // Popup blocked: give the visitor a link they can click themselves.
      console.log('[contact-form] popup considered blocked, showing fallback toast');
      showToast(
        `${form.dataset.blocked}<a href="${url}" target="_blank" rel="noopener">${form.dataset.blockedLink}</a>`,
        true,
        8000
      );
      return;
    }

    console.log('[contact-form] success, showing toast + resetting form');
    showToast(form.dataset.success, false, 8000);
    form.reset();
  });
})();

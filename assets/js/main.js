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

// Shared helper for the contact form: builds a WhatsApp message from the
// submitted fields and opens wa.me with it pre-filled (used via
// Alpine x-data="contactForm()" on the contact pages).
function contactForm(options) {
  const opts = options || {};
  return {
    sending: false,
    toast: null,
    toastType: null,
    messages: opts.messages || {
      success: 'Redirecting you to WhatsApp…',
      error: 'Please fill in all fields before sending.',
    },
    labels: opts.labels || {
      name: 'Name',
      email: 'Email',
      subject: 'Subject',
      message: 'Message',
    },
    submit(e) {
      const form = e.target;
      const data = new FormData(form);
      const name = (data.get('name') || '').trim();
      const email = (data.get('email') || '').trim();
      const subject = (data.get('subject') || '').trim();
      const message = (data.get('message') || '').trim();

      if (!name || !email || !subject || !message) {
        this.toastType = 'error';
        this.toast = this.messages.error;
        setTimeout(() => (this.toast = null), 4000);
        return;
      }

      const text = [
        `${this.labels.name}: ${name}`,
        `${this.labels.email}: ${email}`,
        `${this.labels.subject}: ${subject}`,
        '',
        message,
      ].join('\n');

      this.toastType = 'success';
      this.toast = this.messages.success;

      // Navigate the current tab to WhatsApp instead of window.open(): a new
      // window/tab opened from inside a framework event handler is routinely
      // blocked by browser popup blockers (notably Safari) with no error —
      // a plain location change is never treated as a popup.
      window.location.href = `https://wa.me/${CONTACT_WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`;
    },
  };
}

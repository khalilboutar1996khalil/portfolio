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

      window.open(
        `https://wa.me/${CONTACT_WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`,
        '_blank',
        'noopener'
      );

      this.toastType = 'success';
      this.toast = this.messages.success;
      form.reset();
      setTimeout(() => (this.toast = null), 4000);
    },
  };
}

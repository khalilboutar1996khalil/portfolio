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

// Shared helper for the Netlify Forms AJAX contact submission (used via
// Alpine x-data="contactForm()" on the contact pages).
function contactForm(messages) {
  return {
    sending: false,
    toast: null,
    toastType: null,
    messages: messages || {
      success: 'Your message has been sent successfully!',
      error: 'An error occurred while sending your message.',
      network: 'Network error. Please try again.',
    },
    async submit(e) {
      this.sending = true;
      try {
        const form = e.target;
        const data = new FormData(form);
        const body = new URLSearchParams(data).toString();
        const res = await fetch('/', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body,
        });
        if (res.ok) {
          this.toastType = 'success';
          this.toast = this.messages.success;
          form.reset();
        } else {
          this.toastType = 'error';
          this.toast = this.messages.error;
        }
      } catch (err) {
        this.toastType = 'error';
        this.toast = this.messages.network;
      } finally {
        this.sending = false;
        setTimeout(() => (this.toast = null), 4000);
      }
    },
  };
}

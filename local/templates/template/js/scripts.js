window.addEventListener('DOMContentLoaded', function () {

  new Events();

  initSliders();
  initValidators();
  initLibs();
  initOther();

});

function initLibs() {
  Inputmask("+7(999)-999-99-99", {
    // clearIncomplete: true
  }).mask('input[type="tel"]');
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
}

function initSliders() {
  document.querySelectorAll('.slider-items').forEach(e => {
    const swiper = new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 'auto',
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.slider-items__next'),
        prevEl: e.querySelector('.slider-items__prev'),
      },
      /*autoplay: {
          delay: 5000,
      },*/
      breakpoints: {
        // when window width is >= 768px
        768: {
          spaceBetween: 20
        }
      }
    });
  });
}

function initValidators() {

}

function initOther(){
  setInlinePadding();
  window.addEventListener('resize', setInlinePadding);
}

class Events {
  /**
   * Constructor for Events class.
   */
  constructor() {

    this.events = new Set();

    document.querySelectorAll(`[data-event]`).forEach(i => {

      i.dataset.event.split(',').forEach((event) => {
        let [eventType, eventName] = event.split('.');

        if (!this[eventName]) return;

        this.events.add(eventType);
      });
    });
    this.init();
  }

  /**
   * Initializes event listeners based on event types.
   */
  init() {

    const body = document.querySelector("body");

    this.events.forEach((type) => {

      body.addEventListener(type, (e) => {
        const target = e.target.closest(`[data-event]`);
        if (!target) return;

        target.dataset.event.split(',').forEach((event) => {
          let [eventType, eventName] = event.split('.');

          if (type !== eventType || !this[eventName]) return;

          this[eventName].call(this, e, target);
        });
      });
    });

  }

  /**
   * Sends a form using fetch API and handles the response.
   *
   * @param {Event} e - the event object
   * @param {Element} elem - the form element to be submitted
   */
  sendForm(e, elem) {
    e.preventDefault();

    fetch(elem.action, {
      method: 'POST',
      body: new FormData(elem)
    }).then(response => response.json()).then(function (data) {
      if (data.status) {
        elem.reset();
        alert("Мы скоро свяжемся с вами.", "Спасибо!");
      } else {
        alert("Произошла ошибка.", data.error);
      }

    }).catch(function (err) {
      alert('Fetch Error :-S', err);
    });
  }

}

function setInlinePadding() {
  const windowWidth = document.documentElement.clientWidth;
  const containerWidth = document.querySelector('.container').offsetWidth;
  document.body.style.setProperty('--inlinePadding', `${(windowWidth - containerWidth) / 2}px`);
}


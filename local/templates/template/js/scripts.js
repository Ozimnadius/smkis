window.addEventListener('DOMContentLoaded', function () {

  new Events();
  document.querySelectorAll('.form-file').forEach(function (element) {
    new FormDrop(element.closest('form'));
  });
  document.querySelectorAll('.header-search').forEach(function (element) {
    new Search(element);
  });


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

  tippy('.tooltip', {
    content(reference) {
      const template = reference.querySelector('.tooltip__content');
      return template.innerHTML;
    },
    allowHTML: true,
    placement: 'bottom-start',
  });

  document.querySelectorAll('select').forEach(function (element) {
    new Choices(element,{
      searchEnabled: false,
      itemSelectText:false
    });
  });
}

function initSliders() {
  document.querySelectorAll('.slider-items').forEach(e => {
    new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 'auto',
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.slider-items__next'),
        prevEl: e.querySelector('.slider-items__prev'),
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        // when window width is >= 768px
        768: {
          spaceBetween: 20
        }
      }
    });
  });

  document.querySelectorAll('.slider-projects').forEach(e => {
    new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 'auto',
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.slider-projects__next'),
        prevEl: e.querySelector('.slider-projects__prev'),
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        // when window width is >= 768px
        768: {
          spaceBetween: 20
        }
      }
    });
  });

  document.querySelectorAll('.aside-news').forEach(e => {
    new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.aside-news__next'),
        prevEl: e.querySelector('.aside-news__prev'),
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 1280px
        1280: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        // when window width is >= 1440px
        1440: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
  });

  document.querySelectorAll('.aside-projects').forEach(e => {
    new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 'auto',
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.aside-projects__next'),
        prevEl: e.querySelector('.aside-projects__prev'),
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        // when window width is >= 768px
        768: {
          spaceBetween: 20
        },
        // when window width is >= 1440px
        1440: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
  });

  document.querySelectorAll('.product__gallery').forEach(e => {
    const thumbs = new Swiper(".product__thumbs-slider", {
      spaceBetween: 20,
      slidesPerView: 'auto',
      watchSlidesProgress: true,
      breakpoints: {
        // when window width is >= 768px
        768: {
          spaceBetween: 20,
          slidesPerView: 3,
        }
      }
    });
    new Swiper(".product__imgs-slider", {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: e.querySelector(".product__thumbs-next"),
        prevEl: e.querySelector(".product__thumbs-prev")
      },
      thumbs: {
        swiper: thumbs,
      },
    });
  });

  document.querySelectorAll('.engineering-menu').forEach(e => {
    new Swiper(e, {
      slidesPerView: 'auto',
      spaceBetween: 20,
      speed: 700,
    });
  });
}

function initValidators() {
  document.querySelectorAll('.form').forEach(form => {
    new JustValidate(
      form,
      {
        errorFieldCssClass: 'form__error-input',
        errorLabelCssClass: 'form__error-label'
      }
    ).addField('input[type="email"]', [
      {
        rule: 'required',
        errorMessage: 'Введите Email',
      },
      {
        rule: 'email',
        errorMessage: 'Некорректный email',
      },
    ]).addField('input[name="accept"]', [
      {
        rule: 'required',
        errorMessage: 'Нам нужно Ваше согласие, чтобы оформить заявку',
      }
    ]);
  });
}

function initOther() {
  setInlinePadding();
  handleScroll();
  window.addEventListener('resize', setInlinePadding);
  window.addEventListener('scroll', throttle(handleScroll, 150));
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
    if (!elem.querySelector('.form__error-input')) {
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

  scrollTo(e, elem) {
    e.preventDefault();
    const hash = elem.getAttribute('href');
    const target = document.querySelector(hash);

    if (!target) return;

    const top = target.getBoundingClientRect().top + window.scrollY - 60;

    window.scrollTo({
      top: top,
      behavior: 'smooth'
    });
  }

  scrollUp(e, elem) {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  openSearch(e, elem) {
    e.preventDefault();
    const overlay = document.querySelector('.header__overlay');
    const overlayContainer = overlay.querySelector('.header__overlay-container');
    const btns = document.querySelectorAll('.header__btn');
    btns.forEach(btn => {
      btn.classList.remove('active');
    });
    elem.closest('.header__btn').classList.add('active');

    fetch('/ajax/header-search.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json;charset=utf-8'
      },
      body: JSON.stringify({
        action: elem.dataset.action
      })
    }).then(response => response.json()).then((data) => {
      if (data.status) {
        this.disableScrollbar();
        overlayContainer.innerHTML = data.html;
        overlay.classList.add('active');
        new Search(overlay.querySelector('.header-search'));

      } else {
        alert("Произошла ошибка.", data.error);
      }
    }).catch(function (err) {
      alert('Fetch Error :-S', err);
    });

  }

  closeSearch(e, elem) {
    this.enableScrollbar();
    const overlay = document.querySelector('.header__overlay');
    const overlayContainer = overlay.querySelector('.header__overlay-container');
    const btns = document.querySelectorAll('.header__btn');
    btns.forEach(btn => {
      btn.classList.remove('active');
    });
    overlay.classList.remove('active');
    overlayContainer.innerHTML = '';
  }

  setCity(e, elem) {
    e.preventDefault();
    const cityNameElem = document.querySelector('.cities__name');

    fetch('/ajax/setCity.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json;charset=utf-8'
      },
      body: JSON.stringify({
        name: elem.innerText,
      })
    }).then(response => response.json()).then((data) => {
      if (data.status) {
        cityNameElem.innerHTML = elem.innerText;
      } else {
        alert("Произошла ошибка.", data.error);
      }
    }).catch(function (err) {
      alert('Fetch Error :-S', err);
    });

  }

  openNav(e, elem) {
    e.preventDefault();
    const navElem = document.querySelector('.nav');
    navElem.classList.add('active');
    this.disableScrollbar();
  }

  closeNav(e, elem) {
    e.preventDefault();
    const navElem = document.querySelector('.nav');
    navElem.classList.remove('active');
    this.enableScrollbar();
  }

  enableScrollbar() {
    const htmlElem = document.querySelector('html');
    htmlElem.classList.remove('with-fancybox');
    htmlElem.setAttribute('style', '');
    document.querySelector("body").classList.remove("hide-scrollbar");
  }

  disableScrollbar() {
    const htmlElem = document.querySelector('html');
    htmlElem.classList.add('with-fancybox');
    htmlElem.setAttribute('style', '--fancybox-scrollbar-compensate: 0px;');
    document.querySelector("body").classList.add("hide-scrollbar");
  }

}

class FormDrop {
  constructor(element) {
    this.root = element;

    this.dropArea = this.root.querySelector('.form-file__label');
    this.dropInput = this.root.querySelector('.form-file__input');
    this.fileInfo = this.root.querySelector('.form-file__info');
    this.fileList = this.root.querySelector('.form-file__list');
    this.fileClear = this.root.querySelector('.form-file__clear');
    this.dataTransfer = new DataTransfer();

    this.bindEvents();
  }

  bindEvents() {
    this.dropArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      this.dropArea.classList.add('active');
    });

    this.dropArea.addEventListener('dragleave', () => {
      this.dropArea.classList.remove('active');
    });

    this.dropArea.addEventListener('drop', (e) => {
      e.preventDefault();
      this.dropArea.classList.remove('active');
      this.appendFiles(e.dataTransfer.files)
    });

    this.dropInput.addEventListener('change', this.showFiles);

    this.fileClear.addEventListener('click', this.clearFiles);
  }

  appendFiles(files) {
    Array.from(files).forEach((file) => {
      this.dataTransfer.items.add(file);
    });
    this.dropInput.files = this.dataTransfer.files;
    this.showFiles();
  }

  showFiles = () => {
    this.fileList.innerHTML = '';
    this.fileInfo.classList.add('active');
    Array.from(this.dropInput.files).forEach((file) => {
      const li = document.createElement('span');
      li.appendChild(document.createTextNode(file.name));
      this.fileList.appendChild(li);
    });
  }

  clearFiles = () => {
    this.dataTransfer = new DataTransfer(); // сброс
    this.dropInput.files = this.dataTransfer.files;
    this.fileList.innerHTML = '';
    this.fileInfo.classList.remove('active');
  }
}

class Search {
  constructor(elem) {
    this.root = elem;
    this.form = this.root.querySelector('.header-search__form');
    this.input = this.root.querySelector('.header-search__input');
    this.result = this.root.querySelector('.header-search__result');

    this.bindEvents();
  }

  bindEvents() {
    this.form.addEventListener('input', debounce(this.sendRequest.bind(this), 300));
    this.form.addEventListener('reset', debounce(this.sendRequest.bind(this), 100));
  }

  sendRequest(e) {
    if (this.input.value.length > 0) {
      fetch(this.form.action, {
        method: 'POST',
        body: new FormData(this.form)
      }).then(response => response.json()).then((data) => {
        if (data.status) {
          this.result.innerHTML = data.html;
        } else {
          alert("Произошла ошибка.", data.error);
        }
      }).catch(function (err) {
        alert('Fetch Error :-S', err);
      });
    } else {
      this.result.innerHTML = '';
    }
  }

}

function showScrollUpButton() {
  const scrollUpButton = document.querySelector('.footer__up');
  const oneScreen = window.innerHeight;
  if (window.scrollY > oneScreen) {
    scrollUpButton.classList.add('visible');
  } else {
    scrollUpButton.classList.remove('visible');
  }
}

function setInlinePadding() {
  const windowWidth = document.documentElement.clientWidth;
  const containerElement = document.querySelector('.container');
  if (containerElement) {
    const containerWidth = containerElement.offsetWidth;
    document.body.style.setProperty('--inlinePadding', `${(windowWidth - containerWidth) / 2}px`);
  }
}

function throttle(fn, wait) {
  let time = Date.now();
  return function () {
    if (Date.now() - time >= wait) {
      fn();
      time = Date.now();
    }
  };
}

function debounce(func, delay = 300) {
  let timeout;

  return function (...args) {
    const context = this;

    clearTimeout(timeout);
    timeout = setTimeout(() => {
      func.apply(context, args);
    }, delay);
  };
}

function handleScroll() {
  const scrollUpButton = document.querySelector('.footer__up');
  const screenHeight = window.innerHeight;
  if (window.scrollY > screenHeight) {
    scrollUpButton.classList.add('visible');
  } else {
    scrollUpButton.classList.remove('visible');
  }
}


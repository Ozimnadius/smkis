window.addEventListener('DOMContentLoaded', function () {

  new Events();
  document.querySelectorAll('.form-file').forEach(function (element) {
    new FormDrop(element.closest('form'));
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


  document.querySelectorAll('.slider-projects').forEach(e => {
    const swiper = new Swiper(e.querySelector('.swiper'), {
      slidesPerView: 'auto',
      spaceBetween: 10,
      loop: true,
      speed: 700,
      navigation: {
        nextEl: e.querySelector('.slider-projects__next'),
        prevEl: e.querySelector('.slider-projects__prev'),
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
  window.addEventListener('resize', setInlinePadding);


  /*const dropArea = document.querySelector('.form-file');
  dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.classList.add('active');
  });

  dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('active');
  });

  dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dropArea.classList.remove('active');
    const files = e.dataTransfer.files;
    console.log('Файлы:', files);
  });*/

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

  appendFiles(files){
    Array.from(files).forEach((file) => {
      this.dataTransfer.items.add(file);
    });
    this.dropInput.files = this.dataTransfer.files;
    this.showFiles();
  }

  showFiles=()=>{
    this.fileList.innerHTML = '';
    this.fileInfo.classList.add('active');
    Array.from(this.dropInput.files).forEach((file) => {
      const li = document.createElement('span');
      li.appendChild(document.createTextNode(file.name));
      this.fileList.appendChild(li);
    });
  }

  clearFiles=()=> {
    this.dataTransfer = new DataTransfer(); // сброс
    this.dropInput.files = this.dataTransfer.files;
    this.fileList.innerHTML = '';
    this.fileInfo.classList.remove('active');
  }
}

function setInlinePadding() {
  const windowWidth = document.documentElement.clientWidth;
  const containerWidth = document.querySelector('.container').offsetWidth;
  document.body.style.setProperty('--inlinePadding', `${(windowWidth - containerWidth) / 2}px`);
}


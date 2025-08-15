<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
  <div class="page__breadcrumbs">
    <div class="container-small">
      <? component('breadcrumbs') ?>
    </div>
  </div>
  <div class="page__title">
    <div class="container-small">
      <h1 class="title h2 ">
        Калькулятор для расчета стоимости анкерных линий
      </h1>
    </div>
  </div>
  <div class="page__border">
    <div class="container-small">
      <div class="page__grid">
        <main class="page__main">
          <div class="calculator">

            <div class="calculator__steps">
              <div class="calculator__step active">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">Выбрать тип</h4>
                  </div>
                  <div class="calculator__top-right">
                    <a href="#"
                       class="calculator__info"
                    >
                      Как выбрать тип анкерной линии
                      <svg width="32"
                           height="32"
                           viewBox="0 0 32 32"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect x="0.5"
                              y="0.5"
                              width="31"
                              height="31"
                              rx="15.5"
                              stroke="#E9E9EC"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0625 16L14.5322 22.5303C14.2393 22.8232 13.7644 22.8232 13.4715 22.5303C13.1786 22.2374 13.1786 21.7626 13.4715 21.4697L18.9412 16L13.4715 10.5303C13.1786 10.2374 13.1786 9.76256 13.4715 9.46967C13.7644 9.17678 14.2393 9.17678 14.5322 9.46967L21.0625 16Z"
                              fill="#15182A"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__select">
                      <select name="type">
                        <option value="0">Анкерная линия ДОН</option>
                        <option value="1">Анкерная линия ЕНИСЕЙ</option>
                        <option value="3">Анкерная линия КАМА</option>
                        <option value="4">Опорная конструкция ЛАДОГА</option>
                        <option value="5">Анкерная линия VIRA</option>
                        <option value="6">Анкерная линия STREAM</option>
                      </select>
                    </div>
                    <div class="calculator__content content">
                      <h6>Базовая компленктация</h6>
                      <ul>
                        <li>Концевые крепления (концевой анкер)</li>
                        <li>Амортизатор</li>
                        <li>Натяжители</li>
                        <li>Мобильная анкерная точка</li>
                        <li>Торс по длине линии</li>
                        <li>Комплект пресс крепления</li>
                        <li>Информационная табличка</li>
                      </ul>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/1.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border hidden"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Длина
                      <br>
                      анкерной линии
                    </h4>
                    <div class="calculator__subtitle caption">Трос 8мм НС 1001</div>
                  </div>
                  <div class="calculator__top-right">
                    <a href="#"
                       class="calculator__info"
                    >
                      Как рассчитать длину тросовой анкерной линии
                      <svg width="32"
                           height="32"
                           viewBox="0 0 32 32"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect x="0.5"
                              y="0.5"
                              width="31"
                              height="31"
                              rx="15.5"
                              stroke="#E9E9EC"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0625 16L14.5322 22.5303C14.2393 22.8232 13.7644 22.8232 13.4715 22.5303C13.1786 22.2374 13.1786 21.7626 13.4715 21.4697L18.9412 16L13.4715 10.5303C13.1786 10.2374 13.1786 9.76256 13.4715 9.46967C13.7644 9.17678 14.2393 9.17678 14.5322 9.46967L21.0625 16Z"
                              fill="#15182A"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__range">
                      <div class="range"
                           data-range
                      >
                        <input type="number"
                               class="range__input"
                               min="5"
                               max="240"
                               value="5"
                               data-range-count
                        >
                        <div class="range__container">
                          <span class="range__label">5 м</span>
                          <input type="range"
                                 class="range__slider"
                                 min="5"
                                 max="240"
                                 value="5"
                                 data-range-slider
                          >
                          <span class="range__label">240 м</span>
                        </div>
                      </div>
                    </div>
                    <div class="calculator__content content calculator__mta">
                      <p>
                        Максимальная длина линии по Инструкции эксплуатации не должна быть более 100м. Если требуется
                        оборудовать участок более 100м, рассчитайте несколько линий, либо оставьте заявку на расчет.
                      </p>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/2.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Выберите мобильную
                      <br>
                      точку крепления
                    </h4>
                    <div class="calculator__subtitle caption">
                      Мобильная точка крепления 12fp НС 1010
                    </div>
                  </div>
                  <div class="calculator__top-right">

                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__radios">
                      <label class="main-selection__radio"
                      >
                        <input type="radio"
                               name="mount"
                               value="Крепление на уровне ног и груди"
                        >
                        <span class="main-selection__radio-fake">
                        Крепление на уровне ног и груди
                      </span>
                      </label>
                      <label class="main-selection__radio"
                      >
                        <input type="radio"
                               name="mount"
                               value="Крепление над головой"
                        >
                        <span class="main-selection__radio-fake">
                        Крепление над головой
                      </span>
                      </label>
                    </div>
                    <div class="calculator__select">
                      <select name="mountCount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                    <div class="calculator__content content calculator__mta">
                      <p>
                        Количество одновременно застрахованных на одной линии должно быть не более 4-х человек.
                      </p>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/3.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Выберете
                      <br>
                      амортизатор энергии
                    </h4>
                    <div class="calculator__subtitle caption">
                      Амортизатор НС 1008
                    </div>
                  </div>
                  <div class="calculator__top-right">

                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__radios">
                      <label class="main-selection__radio"
                      >
                        <input type="radio"
                               name="absorber"
                               value="Открытый"
                        >
                        <span class="main-selection__radio-fake">
                        Открытый
                      </span>
                      </label>
                      <label class="main-selection__radio"
                      >
                        <input type="radio"
                               name="absorber"
                               value="Закрытый"
                        >
                        <span class="main-selection__radio-fake">
                        Закрытый
                      </span>
                      </label>
                    </div>
                    <div class="calculator__content content calculator__mta">
                      <p>
                        Амортизаторы НС 1008 и НС 1009 в составе анкерной линии ДОН являются одновременно динамическими
                        натяжителями и поглотителями энергии.
                      </p>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/4.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Количество промежуточных креплений
                    </h4>
                    <div class="calculator__subtitle caption">
                      Прмежуточный анкер НС 1014
                    </div>
                  </div>
                  <div class="calculator__top-right">
                    <a href="#"
                       class="calculator__info"
                    >
                      Как выбрать точки для крепления
                      <svg width="32"
                           height="32"
                           viewBox="0 0 32 32"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect x="0.5"
                              y="0.5"
                              width="31"
                              height="31"
                              rx="15.5"
                              stroke="#E9E9EC"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0625 16L14.5322 22.5303C14.2393 22.8232 13.7644 22.8232 13.4715 22.5303C13.1786 22.2374 13.1786 21.7626 13.4715 21.4697L18.9412 16L13.4715 10.5303C13.1786 10.2374 13.1786 9.76256 13.4715 9.46967C13.7644 9.17678 14.2393 9.17678 14.5322 9.46967L21.0625 16Z"
                              fill="#15182A"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__range">
                      <div class="range"
                           data-range
                      >
                        <input
                          type="number"
                          class="range__input"
                          min="0"
                          max="32"
                          value="0"
                          data-range-count
                        >

                        <div class="range__container">
                          <span class="range__label">0</span>
                          <input
                            type="range"
                            class="range__slider"
                            min="0"
                            max="32"
                            value="0"
                            data-range-slider
                          >
                          <span class="range__label">32</span>
                        </div>
                      </div>
                    </div>
                    <div class="calculator__content content calculator__mta">
                      <p>
                        Рекомендованное расстояние между креплениями от 5 до 12 м. Для кровли максимальное расстояние 8
                        метров.
                      </p>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/5.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Количество
                      <br>
                      поворотных креплений
                    </h4>
                    <div class="calculator__subtitle caption">
                      Поворотное крепление
                    </div>
                  </div>
                  <div class="calculator__top-right">

                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__radios">
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="rotary"
                               value="0"
                        >
                        <span class="main-selection__radio-fake">
                        0
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="rotary"
                               value="1"
                        >
                        <span class="main-selection__radio-fake">
                       1
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="rotary"
                               value="2"
                        >
                        <span class="main-selection__radio-fake">
                       2
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="rotary"
                               value="3"
                        >
                        <span class="main-selection__radio-fake">
                       3
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="rotary"
                               value="4"
                        >
                        <span class="main-selection__radio-fake">
                       4
                      </span>
                      </label>
                    </div>
                    <div class="calculator__content content calculator__mta">
                      <p>
                        В местах изгиба линии устанавливается крепление
                      </p>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__img">
                      <img
                        src="/upload/images/calculator/6.webp"
                        width="530"
                        height="442"
                        alt="img"
                        loading="lazy"
                      />
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Требуются ли дополнительные точки для эвакуации
                    </h4>
                  </div>
                  <div class="calculator__top-right">
                    <a href="#"
                       class="calculator__info"
                    >
                      Как проводить эвакуацию
                      <svg width="32"
                           height="32"
                           viewBox="0 0 32 32"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect x="0.5"
                              y="0.5"
                              width="31"
                              height="31"
                              rx="15.5"
                              stroke="#E9E9EC"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0625 16L14.5322 22.5303C14.2393 22.8232 13.7644 22.8232 13.4715 22.5303C13.1786 22.2374 13.1786 21.7626 13.4715 21.4697L18.9412 16L13.4715 10.5303C13.1786 10.2374 13.1786 9.76256 13.4715 9.46967C13.7644 9.17678 14.2393 9.17678 14.5322 9.46967L21.0625 16Z"
                              fill="#15182A"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-left">
                    <div class="calculator__radios">
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="pointsNeed"
                               value="Да"
                        >
                        <span class="main-selection__radio-fake">
                        Да
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="pointsNeed"
                               value="Нет"
                        >
                        <span class="main-selection__radio-fake">
                        Нет
                      </span>
                      </label>
                    </div>
                  </div>
                  <div class="calculator__bottom-right">
                    <div class="calculator__content">
                      <p>
                        Интегрируйте анкерные точки для спасательно-эвакуационных работ на этапе проектирования и
                        монтажа.
                        Это позволит сэкономить на покупке анкерных устройств, предназначенных для эвакуации работника
                        при
                        срыве.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step">
                <div class="calculator__mobile-title h6">Расчет анкерной линии</div>
                <div class="calculator__top">
                  <div class="calculator__top-left">
                    <h4 class="calculator__title">
                      Тип поверхности
                      <br>
                      для установки
                    </h4>
                  </div>
                  <div class="calculator__top-right">

                  </div>
                </div>
                <div class="calculator__bottom">
                  <div class="calculator__bottom-full">
                    <div class="calculator__radios calculator__radios--grid">
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="surface"
                               value="Фальцевая кровля"
                        >
                        <span class="main-selection__radio-fake">
                        Фальцевая кровля
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="surface"
                               value="Плоская кровля"
                        >
                        <span class="main-selection__radio-fake">
                        Плоская кровля
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="surface"
                               value="Профлист"
                        >
                        <span class="main-selection__radio-fake">
                        Профлист
                      </span>
                      </label>
                      <label class="main-selection__radio">
                        <input type="radio"
                               name="surface"
                               value="Стена"
                        >
                        <span class="main-selection__radio-fake">
                        Стена
                      </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="calculator__mobile-btns">
                  <button class="calculator__mobile-btn btn btn--large btn--border"
                          type="button"
                          data-event="click.prevStep"
                  >
                    Назад
                  </button>
                  <button class="calculator__mobile-btn btn btn--large btn--black"
                          type="button"
                          data-event="click.nextStep"
                  >
                    Далее
                  </button>
                </div>
              </div>

              <div class="calculator__step calculator__end">
                <div class="calculator__total">
                  <div class="calculator__total-name h5">
                    Стоимость
                  </div>
                  <div class="calculator__total-val h3">
                    76 790 ₽
                  </div>
                </div>
                <div class="calculator__desc content">
                  <h5>Расчет не включает</h5>
                  <ul>
                    <li>Дополнительное оборудование для крепления линии на горизонтальные поверхности (на полу, на крыше
                        и
                        т.д.)
                    </li>
                    <li>Стоимость крепежа (крепеж подбирается по типу мест креплений (бетон, металлоконструкции и
                        т.д.)
                    </li>
                    <li>Монтаж дополнительных и усиление существующих опорных конструкций для установки анкерных
                        точек.
                    </li>
                    <li>Стоимость монтажа анкерных линий</li>
                  </ul>
                  <p class="subtitle">
                    Если в КАЛЬКУЛЯТОРЕ не предусмотрены какие-либо параметры необходимые для расчета анкерной линии,
                    свяжитесь с нашими техническими специалистами или воспользуйтесь формой ниже.
                  </p>
                </div>
                <a href="#"
                   class="calculator__download btn btn--large btn--black"
                >
                  Скачать коммерческое предложение
                </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
  <div class="page__feedback">
    <div class="container">
      <form action="/ajax/ajax.php"
            method="POST"
            class="form form--feedback"
            id="feedback"
            enctype="multipart/form-data"
            data-event="submit.sendForm"
      >
        <div class="form__top">
          <h2 class="form__title">
            Отправить заявку <br> на расчет анкерной линии
          </h2>
          <div class="form__caption caption">
            Связаться с нами
          </div>
        </div>

        <div class="form__fields">
          <div class="form__field">
            <label for="email"
                   class="form__label"
            >Ваш email
            </label>
            <input type="email"
                   class="form__input"
                   id="email"
                   name="email"
                   placeholder="Введите email"
            >
          </div>
          <div class="form__field">
            <label for="name"
                   class="form__label"
            >Ваше Имя
            </label>
            <input type="text"
                   class="form__input"
                   id="name"
                   name="name"
                   placeholder="Ваше Имя"
            >
          </div>
          <div class="form__field form__field--2">
            <label for="comment"
                   class="form__label"
            >Комментарий
            </label>
            <input type="text"
                   class="form__input"
                   id="comment"
                   name="comment"
                   placeholder="Опишите ситуацию"
            >
          </div>
          <div class="form__field form__field--2">
            <div class="form-file">
              <label class="form-file__label">
                <input type="file"
                       class="form-file__input"
                       name="file[]"
                       multiple
                >
                <span class="form-file__sub">
                <span class="form-file__icon">
                  <svg width="32"
                       height="32"
                       viewBox="0 0 32 32"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
<path fill-rule="evenodd"
      clip-rule="evenodd"
      d="M15.7611 3.71436C16.2344 3.71436 16.6182 4.09811 16.6182 4.5715V18.551L19.0418 16.1177C19.3758 15.7823 19.9185 15.7812 20.2539 16.1153C20.5893 16.4493 20.5904 16.992 20.2564 17.3274L16.3684 21.231C16.2075 21.3925 15.989 21.4833 15.7611 21.4833C15.5331 21.4833 15.3146 21.3925 15.1538 21.231L11.2658 17.3274C10.9317 16.992 10.9328 16.4493 11.2682 16.1153C11.6036 15.7812 12.1463 15.7823 12.4804 16.1177L14.9039 18.551V4.5715C14.9039 4.09811 15.2877 3.71436 15.7611 3.71436ZM8.32746 11.7392C6.09521 11.7392 4.2846 13.5491 4.2846 15.7807V22.294C4.2846 24.534 6.10084 26.3502 8.34079 26.3502H23.1941C25.4274 26.3502 27.237 24.5406 27.237 22.3074V15.7954C27.237 13.5539 25.4219 11.7392 23.1821 11.7392H21.9381C21.4647 11.7392 21.081 11.3554 21.081 10.882C21.081 10.4086 21.4647 10.0249 21.9381 10.0249H23.1821C26.369 10.0249 28.9513 12.6075 28.9513 15.7954V22.3074C28.9513 25.4874 26.3742 28.0645 23.1941 28.0645H8.34079C5.15407 28.0645 2.57031 25.4808 2.57031 22.294V15.7807C2.57031 12.6017 5.14904 10.0249 8.32746 10.0249H9.58345C10.0568 10.0249 10.4406 10.4086 10.4406 10.882C10.4406 11.3554 10.0568 11.7392 9.58345 11.7392H8.32746Z"
      fill="white"
/>
</svg>
                </span>
                <span class="form-file__desc">
                  По возможности прикрепите файлы, <br> которые помогут рассчитать анкерную линию
                </span>
                <span class="form-file__btn btn btn--small btn--white"
                >
                  Загрузить
                </span>
              </span>
              </label>
              <span class="form-file__info">
                <span class="form-file__clear">
                  <svg width="28"
                       height="28"
                       viewBox="0 0 28 28"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
                  <path d="M7.27923 20.6175C6.92776 20.266 6.92776 19.6962 7.27923 19.3447L19.4415 7.18246C19.7929 6.83099 20.3628 6.83099 20.7143 7.18246C21.0657 7.53393 21.0657 8.10378 20.7143 8.45525L8.55202 20.6175C8.20055 20.969 7.6307 20.969 7.27923 20.6175Z"
                        fill="#15182A"
                  />
                  <path d="M20.7147 20.6171C20.3632 20.9686 19.7934 20.9686 19.4419 20.6171L7.27966 8.45485C6.92819 8.10338 6.92819 7.53353 7.27966 7.18206C7.63113 6.83059 8.20098 6.83059 8.55245 7.18206L20.7147 19.3443C21.0662 19.6958 21.0662 20.2656 20.7147 20.6171Z"
                        fill="#15182A"
                  />
                  </svg>
                </span>
                <span class="form-file__list">
                </span>
              </span>
            </div>
          </div>
        </div>

        <div class="form__accept">
          <label class="form-accept form-accept--white">
            <input type="checkbox"
                   class="form-accept__input"
                   name="accept"
                   required
            >
            <span class="form-accept__fake">
              <span class="form-accept__checkbox">
                <svg width="22"
                     height="22"
                     viewBox="0 0 22 22"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                >
              <rect width="22"
                    height="22"
                    rx="4"
                    fill="white"
              />
              <path d="M7 10.75L10.4904 13.5L15.25 8"
                    stroke="#005AFF"
                    stroke-width="1.8"
                    stroke-linecap="round"
              />
              </svg>
              </span>
              <span class="form-accept__text">Отправляя заявку вы соглашаетесь с политикой конфиденциальности</span>
            </span>
          </label>
        </div>
        <button class="btn btn--large btn--white form__submit"
                type="submit"
        >
          Оставить заявку
        </button>
      </form>
    </div>
  </div>
</div>
<!-- END main -->

<? require("../src/core/bottom.php"); ?>

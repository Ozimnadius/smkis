<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
  <div class="page__border">
    <div class="page__grid">
      <main class="page__main">
        <div class="product">

          <div class="product__container">
            <div class="product__breadcrumbs">
              <? component('breadcrumbs') ?>
            </div>
            <section class="product__main">

              <div class="product__main-left">

                <div class="product__tablet">
                  <h1 class="product__title">
                    Анкерная точка L-BRUS
                  </h1>

                  <div class="product__articul caption">Артикул: НС 0004</div>
                </div>

                <div class="product__gallery">

                  <div class="product__imgs">
                    <div class="swiper product__imgs-slider">
                      <div class="swiper-wrapper">
                        <? for ($i = 1; $i < 10; $i++): ?>
                          <a href="<? if ($i % 2 == 1): ?>/upload/images/product/img.webp<? else: ?>https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-600x480.png<? endif; ?>"
                             class="swiper-slide product__img"
                             data-fancybox="imgs"
                          >
                            <img
                              src="<? if ($i % 2 == 1): ?>/upload/images/product/img.webp<? else: ?>https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-600x480.png<? endif; ?>"
                              width="695"
                              height="320"
                              alt="Анкерная точка L-BRUS"
                              loading="lazy"
                            />
                          </a>
                        <? endfor; ?>

                      </div>
                    </div>
                  </div>

                  <div class="product__thumbs">
                    <button class="product__thumbs-btn product__thumbs-prev slider-items__btn"
                            type="button"
                    >
                      <svg width="58"
                           height="58"
                           viewBox="0 0 58 58"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="29"
                                cy="29"
                                r="28"
                                stroke="#DDDEE2"
                                stroke-width="1.4"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M24 28.875L31.6187 36.4937C31.9604 36.8354 32.5144 36.8354 32.8562 36.4937C33.1979 36.152 33.1979 35.598 32.8562 35.2563L26.4749 28.875L32.8562 22.4937C33.1979 22.152 33.1979 21.598 32.8562 21.2563C32.5144 20.9146 31.9604 20.9146 31.6187 21.2563L24 28.875Z"
                              fill="#15182A"
                        />
                        <path d="M1 29C1 13.536 13.536 1 29 1"
                              stroke="#15182A"
                              stroke-width="2"
                              stroke-linecap="round"
                        />
                      </svg>
                    </button>
                    <div class="product__thumbs-slider swiper">
                      <div class="swiper-wrapper">
                        <? for ($i = 1; $i < 10; $i++): ?>
                          <div class="swiper-slide product__thumb">
                            <img
                              src="<? if ($i % 2 == 1): ?>/upload/images/product/img.webp<? else: ?>https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-600x480.png<? endif; ?>"
                              width="122"
                              height="61"
                              alt="Анкерная точка L-BRUS"
                              loading="lazy"
                            />
                          </div>
                        <? endfor; ?>
                      </div>
                    </div>
                    <button class="product__thumbs-btn product__thumbs-next slider-items__btn"
                            type="button"
                    >
                      <svg width="58"
                           height="58"
                           viewBox="0 0 58 58"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="29"
                                cy="29"
                                r="28"
                                stroke="#DDDEE2"
                                stroke-width="1.4"
                        />
                        <path fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M34.9062 29L27.2875 21.3813C26.9458 21.0396 26.3918 21.0396 26.0501 21.3813C25.7084 21.723 25.7084 22.277 26.0501 22.6187L32.4314 29L26.0501 35.3813C25.7084 35.723 25.7084 36.277 26.0501 36.6187C26.3918 36.9604 26.9458 36.9604 27.2875 36.6187L34.9062 29Z"
                              fill="#15182A"
                        />
                        <path d="M57  29C57 13.536 44.464 1 29 1"
                              stroke="#15182A"
                              stroke-width="2"
                              stroke-linecap="round"
                        />
                      </svg>
                    </button>
                  </div>

                </div>
              </div>

              <div class="product__main-right">

                <div class="product__tablet-none">
                  <h1 class="product__title">
                    Анкерная точка L-BRUS
                  </h1>

                  <div class="product__articul caption">Артикул: НС 0004</div>
                </div>

                <div class="product__text">Устанавливается на наклонную поверхность из профлиста. Служит для удержания
                                           от
                                           попадания в опасную зону и остановки падения.
                </div>

                <div class="product__chars">
                  <div class="product__char">
                    <div class="product__char-name">Количество застрахованных</div>
                    <div class="product__char-value">2</div>
                  </div>
                  <div class="product__char">
                    <div class="product__char-name">Диаметр структурного анкера</div>
                    <div class="product__char-value">ø12</div>
                  </div>
                  <div class="product__char">
                    <div class="product__char-name">Максимальная нагрузка</div>
                    <div class="product__char-value">15 kN</div>
                  </div>
                  <div class="product__char">
                    <div class="product__char-name">Масса 1 шт</div>
                    <div class="product__char-value">0.3 кг</div>
                  </div>
                </div>

                <div class="product__standards">
                  <div class="product__standards-img">
                    <img
                      src="/upload/images/product/standard.webp"
                      width="56"
                      height="45"
                      alt="ГОСТ"
                      loading="lazy"
                    />
                  </div>
                  <div class="product__standards-list">
                    <div class="product__standard">ГОСТ EN 795-2019</div>
                    <div class="product__standard">ТР ТС 019/2011</div>
                    <div class="product__standard">ГОСТ EN/TS 16415-2015</div>
                    <div class="product__standard">ТУ 4195-005-94595353-2015</div>
                  </div>
                </div>

                <div class="product__select">
                  <div class="form-select">
                    <label for="product"
                           class="form-select__label"
                    >Выбор точки
                    </label>
                    <select name="product"
                            id="product"
                            class="form-select__input"
                    >
                      <option value="Анкерная точка L-BRUS">Анкерная точка L-BRUS</option>
                      <option value="Анкерная точка L-BRUS">Анкерная точка L-BRUS2</option>
                    </select>
                  </div>
                </div>

                <div class="product__price h5">
                  47 000 ₽
                </div>

                <div class="product__btns">
                  <a href="#"
                     class="product__calc btn btn--large btn--blue"
                  >
                    Рассчитать стоимость
                  </a>
                  <a href="#"
                     class="product__link btn btn--large btn--black"
                  >
                    Пригласить в тендер
                  </a>
                </div>

              </div>

            </section>
          </div>

          <section class="product__accordion">
            <div class="container">
              <div class="accordion">
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      Описание
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      Все характеристики
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      периодический осмотр
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      как купить
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      оплата
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      доставка
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion__item ">
                  <details class="accordion__details">
                    <summary class="accordion__summary">
                      необходимая документация
                    </summary>
                  </details>
                  <div class="accordion__content">
                    <div class="accordion__content-body">
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi harum id provident
                        voluptas.
                        Architecto deserunt facilis maxime sed? Aliquam aliquid consequuntur harum itaque laboriosam
                        magnam nesciunt nihil nobis pariatur, perferendis recusandae similique tempore unde! Aliquam
                        amet
                        delectus dicta dolor doloremque doloribus ducimus excepturi exercitationem facere fuga illum
                        iure
                        libero molestiae mollitia nisi nostrum omnis perferendis quae, quaerat quis quos ratione sed
                        similique temporibus tenetur totam ullam veniam! Deleniti doloribus fugiat iste itaque minima
                        minus omnis rem similique totam? At dolore excepturi laborum sapiente. Eos, fuga incidunt
                        molestiae nesciunt optio rem voluptas? Cupiditate dicta dolore enim fuga laboriosam mollitia
                        veniam.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="product__elements">
            <div class="container">
              <? component('slider-items', ['title' => 'элементы линии', "showFull" => true,], '/src/data/main-catalog.json'); ?>
            </div>
          </section>
          <section class="product__banner">
            <div class="container">
              <div class="product-banner">
                <h5 class="product-banner__title">Для проектировщиков</h5>
                <div class="product-banner__desc">Изготовлен из нержавеющей стали. Используется</div>
                <a href="/"
                   class="product-banner__link"
                >
                  <svg width="50"
                       height="50"
                       viewBox="0 0 50 50"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="25"
                            cy="25"
                            r="24"
                            stroke="white"
                            stroke-width="1.4"
                    />
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M30.9062 25L23.2875 17.3813C22.9458 17.0396 22.3918 17.0396 22.0501 17.3813C21.7084 17.723 21.7084 18.277 22.0501 18.6187L28.4314 25L22.0501 31.3813C21.7084 31.723 21.7084 32.277 22.0501 32.6187C22.3918 32.9604 22.9458 32.9604 23.2875 32.6187L30.9062 25Z"
                          fill="white"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </section>

          <section class="product__recommended">
            <div class="container">
              <? component('slider-items', ['title' => 'Сопутствующие товары', "showFull" => true,], '/src/data/main-catalog.json'); ?>
            </div>
          </section>
          <section class="product__photos">
            <div class="container">
              <div class="product-photos">
                <h3 class="product-photos__title">
                  на объектах
                </h3>
                <div class="product-photos__imgs">
                  <a href="/upload/images/product/photo.webp"
                     class="product-photos__img"
                     data-fancybox="gallery"
                  >
                    <img
                      src="/upload/images/product/photo.webp"
                      width="2048"
                      height="1365"
                      alt="на объектах"
                      loading="lazy"
                    />
                  </a>
                  <a href="/upload/images/product/photo.webp"
                     class="product-photos__img"
                     data-fancybox="gallery"
                  >
                    <img
                      src="/upload/images/product/photo.webp"
                      width="2048"
                      height="1365"
                      alt="на объектах"
                      loading="lazy"
                    />
                  </a>
                  <a href="/upload/images/product/photo.webp"
                     class="product-photos__img"
                     data-fancybox="gallery"
                  >
                    <img
                      src="/upload/images/product/photo.webp"
                      width="2048"
                      height="1365"
                      alt="на объектах"
                      loading="lazy"
                    />
                  </a>
                  <a href="/upload/images/product/photo.webp"
                     class="product-photos__img"
                     data-fancybox="gallery"
                  >
                    <img
                      src="/upload/images/product/photo.webp"
                      width="2048"
                      height="1365"
                      alt="на объектах"
                      loading="lazy"
                    />
                  </a>
                </div>
                <a href="/"
                   class="product-photos__all btn btn--large btn--border"
                >
                  Все фото
                </a>
              </div>
            </div>
          </section>
        </div>
      </main>
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

<? require("../../src/core/bottom.php"); ?>

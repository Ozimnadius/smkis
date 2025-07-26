<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
  <div class="page__border">
    <div class="page__grid">
      <main class="page__main">
        <div class="product">

          <div class="product__container">
            <div class="product__breadcrumbs page__breadcrumbs">
              <? component('breadcrumbs') ?>
            </div>
            <section class="product__main">

              <div class="product__main-left">
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

                <h1 class="product__title">
                  Анкерная точка L-BRUS
                </h1>

                <div class="product__articul caption">Артикул: НС 0004</div>

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
                    >Выбор точки</label>
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      Описание
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      Все характеристики
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      периодический осмотр
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      как купить
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      оплата
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      доставка
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                  <details class="accordion__details"
                           name="product"
                  >
                    <summary class="accordion__summary">
                      необходимая документация
                    </summary>
                  </details>
                  <div class="accordion__content index-faq__item-content">
                    <div class="accordion__content-body index-faq__body">
                      <div class="content index-faq__body-inner">
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
                <div class="product-banner__icon">
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
                </div>
              </div>
            </div>
          </section>
          <section class="product__recommended">
            <div class="container">
              <? component('slider-items', ['title' => 'Сопутствующие товары', "showFull" => true,], '/src/data/main-catalog.json'); ?>
            </div>
          </section>
          <section class="product__gallery">
            <div class="container">
              <div class="product-gallery">
                <h3 class="product-gallery__title">
                  на объектах
                </h3>
                <div class="product-gallery__imgs">
                  <a href="/upload/images/product/photo.webp"
                     class="product-gallery__img"
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
                     class="product-gallery__img"
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
                     class="product-gallery__img"
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
                     class="product-gallery__img"
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
                   class="product-gallery__all btn btn--large btn--border"
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
  <div class=page__feedback"></div>
</div>
<!-- END main -->

<? require("../../src/core/bottom.php"); ?>

<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
  <div class="page__breadcrumbs">
    <div class="container-inner">
      <? component('breadcrumbs') ?>
    </div>
  </div>
  <div class="page__title">
    <div class="container-inner">
      <h1 class="title">Проверка статуса анкерного устройства</h1>
    </div>
  </div>
  <div class="page__border">
    <div class="container-inner">
      <div class="page__grid">
        <main class="page__main">
          <form class="status"
                action="/status/"
                method="post"
          >
            <div class="status__block">
              <div class="status__form">
                <div class="status__form-icon">
                  <svg width="28"
                       height="28"
                       viewBox="0 0 28 28"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
                    <path fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M13.4867 3.75C8.10925 3.75 3.75 8.10925 3.75 13.4867C3.75 18.8641 8.10925 23.2233 13.4867 23.2233C18.8641 23.2233 23.2233 18.8641 23.2233 13.4867C23.2233 8.10925 18.8641 3.75 13.4867 3.75ZM2.25 13.4867C2.25 7.28082 7.28082 2.25 13.4867 2.25C19.6925 2.25 24.7233 7.28082 24.7233 13.4867C24.7233 16.4581 23.57 19.1601 21.6865 21.1695L25.4213 24.8946C25.7146 25.1871 25.7152 25.662 25.4227 25.9553C25.1302 26.2485 24.6553 26.2492 24.362 25.9566L20.5896 22.194C18.6538 23.775 16.181 24.7233 13.4867 24.7233C7.28082 24.7233 2.25 19.6925 2.25 13.4867Z"
                          fill="#15182A"
                    />
                  </svg>
                </div>
                <input type="text"
                       name="number"
                       placeholder="Введите серийный номер устройства"
                >
                <button class="status__submit btn btn--large btn--blue"
                        type="submit"
                >Проверить
                </button>
              </div>
            </div>
            <div class="status__result">
              <? if (!empty($_POST)): ?>
                <div class="status-result">
                  <? if ($_POST['number'] != '123'): ?>
                    <div class="status-result__error color-error">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C17.108 2.75 21.25 6.891 21.25 12C21.25 17.108 17.108 21.25 12 21.25C6.891 21.25 2.75 17.108 2.75 12C2.75 6.891 6.891 2.75 12 2.75Z" stroke="#FC1A42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9941 8.2041V12.6231" stroke="#FC1A42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.995 15.7959H12.005" stroke="#FC1A42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      По Вашему запросу ничего не найдено. Проверьте корректность введённого номера или зарегистрируйте
                      устройство.
                    </div>
                  <? else: ?>
                    <div class="status-result__success">
                      <div class="status-result__col">
                        <div class="status-result__name">Серийный номер анкерного устройства</div>
                        <div class="status-result__val h6 color-error">ВИРА-000-008-5984</div>
                        <div class="status-result__val h6 color-success">ВИРА-000-008-5984</div>
                        <div class="status-result__val h6 color-accent">ВИРА-000-008-5984</div>
                        <div class="status-result__val h6 color-secondary">ВИРА-000-008-5984</div>
                      </div>
                      <div class="status-result__col">
                        <div class="status-result__name">Дата ввода в эксплуатацию</div>
                        <div class="status-result__val h6">25. 08. 2021</div>
                      </div>
                      <div class="status-result__col">
                        <div class="status-result__name">Дата следующего осмотра</div>
                        <div class="status-result__val h6">02. 09. 2024</div>
                      </div>
                    </div>
                  <? endif; ?>
                </div>
              <? endif; ?>
            </div>
            <a href="/"
               class="status__info h7"
            >
              Для чего необходима периодическая проверка анкерных устройств?
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
                      d="M21.0605 16L14.5302 22.5303C14.2373 22.8232 13.7625 22.8232 13.4696 22.5303C13.1767 22.2374 13.1767 21.7626 13.4696 21.4697L18.9392 16L13.4696 10.5303C13.1767 10.2374 13.1767 9.76256 13.4696 9.46967C13.7625 9.17678 14.2373 9.17678 14.5302 9.46967L21.0605 16Z"
                      fill="#15182A"
                />
              </svg>
            </a>
            <div class="status__designations">
              <div class="status-designations">
                <h5 class="status-designations__title">Цветовые обозначения</h5>
                <div class="status-designations__items">
                  <div class="status-designations__item">
                    <svg width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="12.5"
                              cy="11.5"
                              r="5.5"
                              fill="#00BB78"
                      />
                    </svg>
                    Анкерное устройство находится в экусплуатации
                  </div>
                  <div class="status-designations__item">
                    <svg width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="12.5"
                              cy="11.5"
                              r="5.5"
                              fill="#FC1A42"
                      />
                    </svg>
                    Эксплуатация анкерного устройства приостановлена
                  </div>
                  <div class="status-designations__item">
                    <svg width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="12.5"
                              cy="11.5"
                              r="5.5"
                              fill="#005AFF"
                      />
                    </svg>
                    Срок осмотра СИЗ подходит к концу
                  </div>
                  <div class="status-designations__item">
                    <svg width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle cx="12.5"
                              cy="11.5"
                              r="5.5"
                              fill="#797B8B"
                      />
                    </svg>
                    Нет данных, устройство не зарегистрировано
                  </div>
                </div>
              </div>
            </div>
            <div class="status__banner">
              <div class="status-banner">
                <div class="status-banner__left">
                  <h5 class="status-banner__title">Регистрация анкерного устройства</h5>
                  <div class="status-banner__description">
                    Если Вы не зарегистрировали анкерное устройство, перейдите в раздел регистрация анкерных устройств.
                    Гарантия распространяется только на анкерные устройства, зарегистрированные на сайте производителя.
                  </div>
                </div>
                <div class="status-banner__right">
                  <a href="/registration/"
                     class="status-banner__link btn btn--large btn--white"
                  >Зарегистрировать
                  </a>
                </div>
              </div>
            </div>
          </form>
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

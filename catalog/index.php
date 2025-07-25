<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
  <div class="page__breadcrumbs">
    <div class="container-full">
      <? component('breadcrumbs') ?>
    </div>
  </div>
  <div class="page__title">
    <div class="container-full">
      <h1 class="title">Каталог</h1>
    </div>
  </div>
  <div class="page__border">
    <div class="container-full">
      <div class="page__grid">
        <aside class="page__aside">
          <div class="aside">
            <div class="aside__menu">
              <? component('aside-menu') ?>
            </div>
            <div class="aside__apps">
              <? component('aside-apps') ?>
            </div>
            <div class="aside__news">
              <? component('aside-news', [], '/src/data/slider-projects.json') ?>
            </div>
            <div class="aside__projects">
              <? component('aside-projects', [], '/src/data/slider-projects.json') ?>
            </div>
          </div>
        </aside>
        <main class="page__main">
          <div class="catalog">
            <div class="catalog__menu">
              <div class="catalog-menu">
                <a href="/"
                   class="catalog-menu__item btn btn--small btn--border active"
                >Вертикальные
                </a>
                <a href="/"
                   class="catalog-menu__item btn btn--small btn--border"
                >Горизонтальные
                </a>
                <a href="/"
                   class="catalog-menu__item btn btn--small btn--border"
                >Гибкие
                </a>
                <a href="/"
                   class="catalog-menu__item btn btn--small btn--border"
                >Жесткие
                </a>
              </div>
            </div>
            <div class="catalog__items">
              <? component('catalog-items', [], '/src/data/main-catalog.json') ?>
            </div>
            <div class="catalog__pagination">
              <? component('pagination') ?>
            </div>
            <div class="catalog__apps">
              <? component('aside-apps') ?>
            </div>
            <div class="catalog__news">
              <? component('aside-news', [], '/src/data/slider-projects.json') ?>
            </div>
            <div class="catalog__projects">
              <? component('aside-projects', [], '/src/data/slider-projects.json') ?>
            </div>
            <div class="catalog__content">
              <div class="catalog-content">
                <h3 class="catalog-content__title">Виды и особенности анкерных линий для работы на высоте</h3>
                <p class="catalog-content__subtitle subtitle">
                  Анкерная линия — временная или стационарная страховочная система, обеспечивающая
                  безопасность персонала при выполнении высотных работ. Основными ее компонентами
                  являются стальные опоры и несущая часть (металлический трос или рельсовый профиль).
                  В роли дополнительных элементов выступают амортизирующие устройства, средства
                  натяжения, мобильные анкерные точки и т.д.
                </p>
                <p>В зависимости от конструкции различают два типа анкерных линий:</p>
                <div class="catalog-content__grid">
                  <div class="catalog-content__col">
                    <h5>Гибкая</h5>
                    <p>В качестве несущего элемента в системах этого вида используется металлический трос. Работник
                       присоединяется к мобильной точке крепления на тросе с помощью СИЗ втягивающего типа,
                       удерживающего стропа или другого страховочного устройства. К преимуществам гибких анкерных линии
                       относится простота их установки.
                    </p>
                  </div>
                  <div class="catalog-content__col">
                    <h5>Жесткая</h5>
                    <p>Главная особенность таких систем заключается в применении металлического профиля с установленной
                       на нем мобильной точкой крепления, что обеспечивает достаточную свободу действий работнику при
                       проведении работ, а также позволяет использовать такую анкер-линию практически на любом типе
                       рабочих мест на высоте.
                    </p>
                  </div>
                </div>
                <p>
                  Наша компания производит сертифицированные стальные анкерные линии двух типов — жесткие и гибкие.
                  Причем как для вертикального, так и для горизонтального размещения на объекте. Благодаря этому можно
                  подобрать и купить модель для обеспечения безопасности на лестницах, в промышленных цехах, на кровле,
                  подкрановых путях, эстакадах и т.д.
                </p>
              </div>
            </div>
            <div class="catalog__advantages">
              <div class="catalog-advantages">
                <h3 class="catalog-advantages__title">Преимущества сотрудничества</h3>
                <div class="catalog-advantages__desc">
                  Наша компания основана людьми, имеющими более чем десятилетний опыт работы в сфере охраны труда.
                  Исходно задав высокий уровень, мы продолжаем следовать этому курсу.
                </div>
                <div class="catalog-advantages__items">
                  <div class="catalog-advantages__item">
                    Анкерные линии от ООО «СМК Инженерные системы» — это сертифицированная продукция, полностью
                    соответствующая действующим нормативам в области безопасности.
                  </div>
                  <div class="catalog-advantages__item">
                    Ориентируясь на потребности заказчика, мы предлагаем различные варианты сотрудничества — от продажи
                    готовых к установке наборов до комплексного обслуживания «под ключ».
                  </div>
                  <div class="catalog-advantages__item">
                    Являясь производителем, наша компания поддерживает выгодные цены на страховочные системы. При
                    расчете учитываются индивидуальные параметры объекта, а также потребности каждого клиента.
                  </div>
                </div>
                <div class="catalog-advantages__info">
                  Остались вопросы? Чтобы проконсультироваться или заказать анкерную линию, свяжитесь с нашими
                  специалистами. 
                </div>
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

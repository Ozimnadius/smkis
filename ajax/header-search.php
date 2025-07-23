<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
ob_start(); ?>
  <div class="header-search">
    <form action="<?= $data['action'] ?>"
          method="post"
          class="header-search__form"
    >
      <div class="header-search__icon">
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
             class="header-search__input"
             name="q"
      >
      <button class="header-search__clear"
              type="reset"
      >
        Очистить
      </button>
    </form>
    <div class="header-search__result">
      <? if ($data['action'] == '/ajax/cities.php'): ?>
          <div class="cities">
          <div class="cities__top">
            <div class="cities__label caption">Ваш город:</div>
            <div class="cities__name h7">
              Нижний Новгород
            </div>
          </div>
          <div class="cities__items">

            <? for ($i = 0; $i < 61; $i++): ?>
              <button class="cities__item"
                      type="button"
                      data-event="click.setCity"
              >
                Архангельск
              </button>
            <? endfor; ?>
          </div>
        </div>
      <? endif; ?>
    </div>
  </div>
<?php
$html = ob_get_clean();

echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


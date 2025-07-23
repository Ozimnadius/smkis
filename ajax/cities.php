<?php
header('Content-Type: application/json');

ob_start(); ?>
  <div class="cities">
    <div class="cities__top">
      <div class="cities__label caption">Ваш город:</div>
      <div class="cities__name h7">
        Нижний Новгород
      </div>
    </div>
    <div class="cities__items">

      <? for ($i = 0; $i < 10; $i++): ?>
        <button class="cities__item"
                type="button"
                data-event="click.setCity"
        >
          Архангельск
        </button>
      <? endfor; ?>
    </div>
  </div>
<?php
$html = ob_get_clean();

echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


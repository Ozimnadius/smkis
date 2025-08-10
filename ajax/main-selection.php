<?php
header('Content-Type: application/json');
$steps = [
  'place' => [
    'Лестница',
    'Кровля',
    'Эстакада',
    'Другое место установки',
    'Подкрановые пути'
  ],
  'location' => [
    'Над головой',
    'На уровне груди',
    'На уровне ног'
  ],
  'work' => [
    'До 3-х метров',
    'Более 3-х метров'
  ],
  'height' => [
    '4 метра и менее',
    'Свыше 4 метров'
  ],
  'evacuation' => [
    'Да',
    'Нет'
  ]
];
$data = $_POST;

ob_start(); ?>
<? if ($data['step'] == 0): ?>
  <form class="main-selection__step main-selection__step--main"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <h3 class="main-selection__title">
      Подбор анкерного устройства
    </h3>
    <div class="main-selection__text">
      Изготовлен из нержавеющей стали. Используется
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border hidden"
              data-event="click.nextSelection"
              data-step="0"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="1"
      >
        Начать
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 1): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      Место установки
    </h3>
    <div class="main-selection__radios">
      <? foreach ($steps['place'] as $step): ?>
        <label class="main-selection__radio"
        >
          <input type="radio"
                 name="place"
                 value="<?= $step; ?>"
          >
          <span class="main-selection__radio-fake">
                        <?= $step; ?>
                      </span>
        </label>
      <? endforeach; ?>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="0"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn main-selection__next btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="2"
              disabled
      >
        Далее
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 2): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      Место расположения анкерных точек
    </h3>
    <div class="main-selection__radios">
      <? foreach ($steps['location'] as $step): ?>
        <label class="main-selection__radio"
        >
          <input type="radio"
                 name="location"
                 value="<?= $step; ?>"
          >
          <span class="main-selection__radio-fake">
                        <?= $step; ?>
                      </span>
        </label>
      <? endforeach; ?>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="1"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn main-selection__next btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="3"
              disabled
      >
        Далее
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 3): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      диаметр рабочей зоны
    </h3>
    <div class="main-selection__radios">
      <? foreach ($steps['work'] as $step): ?>
        <label class="main-selection__radio"
        >
          <input type="radio"
                 name="work"
                 value="<?= $step; ?>"
          >
          <span class="main-selection__radio-fake">
                        <?= $step; ?>
                      </span>
        </label>
      <? endforeach; ?>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="2"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn main-selection__next btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="4"
              disabled
      >
        Далее
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 4): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      Запас высоты
    </h3>
    <div class="main-selection__desc">
      Укажите запас высоты между ступнями пользователя и верхней поверхностью ближайшего выступающего
      предмета под рабочей зоной работника. Для более точного расчёта воспользуйтесь схемой расчета запаса
      высоты.
    </div>
    <div class="main-selection__radios">
      <? foreach ($steps['height'] as $step): ?>
        <label class="main-selection__radio"
        >
          <input type="radio"
                 name="height"
                 value="<?= $step; ?>"
          >
          <span class="main-selection__radio-fake">
                        <?= $step; ?>
                      </span>
        </label>
      <? endforeach; ?>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="3"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn main-selection__next btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="5"
              disabled
      >
        Далее
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 5): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
        data-event="change.validateSelection"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      Нужны ли анкерные точки для эвакуации?
    </h3>
    <div class="main-selection__radios">
      <? foreach ($steps['evacuation'] as $step): ?>
        <label class="main-selection__radio"
        >
          <input type="radio"
                 name="evacuation"
                 value="<?= $step; ?>"
          >
          <span class="main-selection__radio-fake">
                        <?= $step; ?>
                      </span>
        </label>
      <? endforeach; ?>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="4"
      >
        Назад
      </button>
      <button type="button"
              class="main-selection__btn main-selection__next btn btn--large btn--black"
              data-event="click.nextSelection"
              data-step="6"
              disabled
      >
        Далее
      </button>
    </div>
  </form>
<? elseif ($data['step'] == 6): ?>
  <form class="main-selection__step"
        action="/ajax/main-selection.php"
        method="post"
  >
    <div class="main-selection__subtitle h6">
      Подбор анкерного устройства
    </div>
    <h3 class="main-selection__title">
      Вам подходит
    </h3>
    <div class="main-selection__items">
      <div class="main-selection__swiper swiper">
        <div class="swiper-wrapper">
          <a href="/catalog/product/"
             class="main-selection__slide swiper-slide"
          >
                          <span class="main-selection__slide-img">
                            <img
                              src="https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-1024x819.png"
                              alt="img"
                              loading="lazy"
                            />
                          </span>
            <span class="main-selection__slide-info">
                            <span class="main-selection__slide-name">Анкерная точка</span>
                            <span class="main-selection__slide-price">2 470 ₽</span>
                          </span>
            <span class="main-selection__slide-cat">YUNTA FLEX</span>
          </a>
          <a href="/catalog/product/"
             class="main-selection__slide swiper-slide"
          >
                          <span class="main-selection__slide-img">
                            <img
                              src="https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-1024x819.png"
                              alt="img"
                              loading="lazy"
                            />
                          </span>
            <span class="main-selection__slide-info">
                            <span class="main-selection__slide-name">Анкерная точка</span>
                            <span class="main-selection__slide-price">2 470 ₽</span>
                          </span>
            <span class="main-selection__slide-cat">YUNTA FLEX</span>
          </a>
          <a href="/catalog/product/"
             class="main-selection__slide swiper-slide"
          >
                          <span class="main-selection__slide-img">
                            <img
                              src="https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-1024x819.png"
                              alt="img"
                              loading="lazy"
                            />
                          </span>
            <span class="main-selection__slide-info">
                            <span class="main-selection__slide-name">Анкерная точка</span>
                            <span class="main-selection__slide-price">2 470 ₽</span>
                          </span>
            <span class="main-selection__slide-cat">YUNTA FLEX</span>
          </a>
          <a href="/catalog/product/"
             class="main-selection__slide swiper-slide"
          >
                          <span class="main-selection__slide-img">
                            <img
                              src="https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-1024x819.png"
                              alt="img"
                              loading="lazy"
                            />
                          </span>
            <span class="main-selection__slide-info">
                            <span class="main-selection__slide-name">Анкерная точка</span>
                            <span class="main-selection__slide-price">2 470 ₽</span>
                          </span>
            <span class="main-selection__slide-cat">YUNTA FLEX</span>
          </a>
          <a href="/catalog/product/"
             class="main-selection__slide swiper-slide"
          >
                          <span class="main-selection__slide-img">
                            <img
                              src="https://smkis.ru/wp-content/uploads/2022/11/yuntaflex_markirovka-1024x819.png"
                              alt="img"
                              loading="lazy"
                            />
                          </span>
            <span class="main-selection__slide-info">
                            <span class="main-selection__slide-name">Анкерная точка</span>
                            <span class="main-selection__slide-price">2 470 ₽</span>
                          </span>
            <span class="main-selection__slide-cat">YUNTA FLEX</span>
          </a>
        </div>
      </div>
    </div>
    <div class="main-selection__btns">
      <button type="button"
              class="main-selection__btn btn btn--large btn--border"
              data-event="click.nextSelection"
              data-step="0"
      >
        Сбросить
      </button>
      <a href="/calculator/"
         class="main-selection__btn btn btn--large btn--black"
      >
        Рассчитать цену
      </a>
    </div>
  </form>
<? endif; ?>

<? $html = ob_get_clean();


echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


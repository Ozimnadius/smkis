<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="slider-items">
  <div class="slider-items__top">
    <h3 class="slider-items__title">
      <?= $arParams['title'] ?>
    </h3>
    <div class="slider-items__nav">
      <button class="slider-items__btn slider-items__prev"
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
      <button class="slider-items__btn slider-items__next"
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
  <div class="slider-items__bottom">
    <div class="slider-items__swiper swiper">
      <div class="swiper-wrapper">
        <? foreach ($arResult as $arItem): ?>
          <div class="slider-items__item swiper-slide">
            <? component('catalog-item', ["item"=>$arItem,"showFull"=>$arParams['showFull']]); ?>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  </div>
</div>


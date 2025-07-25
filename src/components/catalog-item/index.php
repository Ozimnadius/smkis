<?
/** @var array $arParams */
/** @var array $arResult */
?>
<a href="/catalog/product/"
   class="catalog-item"
>
  <span class="catalog-item__top">
    <span class="catalog-item__img">
      <img
        src="<?= $arParams['item']["img"] ?>"
        width="498"
        height="556"
        alt="<?= $arParams['item']['name'] ?>"
        loading="lazy"
      />
    </span>
    <span class="catalog-item__look btn-play">
     Смотреть
   </span>
  </span>
  <span class="catalog-item__info">
     <span class="catalog-item__name h7"><?= $arParams['item']['name'] ?></span>
     <span class="catalog-item__price h7"><?= $arParams['item']['price'] ?></span>
     <span class="catalog-item__category caption"><?= $arParams['item']['category'] ?></span>
   </span>
  <? if ($arParams['showFull']): ?>
    <span class="catalog-item__description">Конструкция анкерной точки L-BRUS позволяет нагружать ее во всех направлениях</span>
    <span class="catalog-item__chars">
      <span class="catalog-item__char">
        <span class="catalog-item__char-name">Кол-во пользователей</span>
        <span class="catalog-item__char-value">3 чел</span>
      </span>
      <span class="catalog-item__char">
        <span class="catalog-item__char-name">Максимальная нагрузка</span>
        <span class="catalog-item__char-value">24 kN</span>
      </span>
      <span class="catalog-item__char">
        <span class="catalog-item__char-name">Соответствие</span>
        <span class="catalog-item__char-value">
          ГОСТ EN 795-2019
          <span class="tooltip">
            +1
            <span class="tooltip__content">
              ГОСТ EN 795-2019
              <br>
              ГОСТ EN/TS 16415-2015
            </span>
          </span>
        </span>
      </span>

    </span>
  <? endif; ?>
</a>

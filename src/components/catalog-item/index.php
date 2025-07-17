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
        src="<?= $arParams["img"] ?>"
        width="498"
        height="556"
        alt="<?= $arParams['name'] ?>"
        loading="lazy"
      />
    </span>
    <span class="catalog-item__look btn-play">
     Смотреть
   </span>
  </span>
  <span class="catalog-item__info">
     <span class="catalog-item__name h7"><?= $arParams['name'] ?></span>
     <span class="catalog-item__price h7"><?= $arParams['price'] ?></span>
     <span class="catalog-item__category caption"><?= $arParams['category'] ?></span>
   </span>
</a>

<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="catalog-items">
  <? foreach ($arResult as $arItem): ?>
    <div class="catalog-items__item">
      <? component('catalog-item', ["item"=>$arItem,"showFull"=>true]); ?>
    </div>
  <? endforeach; ?>
</div>


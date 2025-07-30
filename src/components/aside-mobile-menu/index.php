<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="aside-mobile-menu swiper">
  <div class="swiper-wrapper">
    <? foreach ($arResult as $arItem): ?>
      <a href="<?= $arItem['url'] ?>"
         class="aside-mobile-menu__item swiper-slide <? if ($arItem['active']): ?>active<? endif; ?>"
      >
        <?= $arItem['name'] ?>
      </a>
    <? endforeach; ?>
  </div>
</div>


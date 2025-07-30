<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="drop-menu-mobile">
  <div class="drop-menu-mobile__top">
    <div class="aside-mobile-menu swiper">
      <div class="swiper-wrapper">
        <? foreach ($arResult as $key=>$arItem): ?>
          <a href="/"
             class="aside-mobile-menu__item swiper-slide <? if ($key==1): ?>active<? endif; ?>"
          >
            <?= $arItem?>
          </a>
        <? endforeach; ?>
      </div>
    </div>
  </div>
  <div class="drop-menu-mobile__bottom">
    <div class="drop-menu-mobile__items">
      <a href="/"
         class="drop-menu-mobile__item active btn btn--small btn--border"
      >На вертикальную плоскость</a>
      <a href="/"
         class="drop-menu-mobile__item btn btn--small btn--border"
      >На кровлю</a>
    </div>
  </div>
</div>


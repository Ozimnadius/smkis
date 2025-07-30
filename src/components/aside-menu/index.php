<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="aside-menu">
  <? foreach ($arResult as $arItem): ?>
    <a href="<?=$arItem['url'] ?>"
       class="aside-menu__item <? if ($arItem['active']): ?>active<? endif; ?>"
    >
      <?=$arItem['name'] ?>
    </a>
  <? endforeach; ?>
</div>



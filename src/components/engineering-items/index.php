<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="engineering-items">
  <? foreach ($arResult as $arItem): ?>
    <a href="<?=$arItem['link'] ?>"
       class="engineering-items__item"
       target="_blank"
    >
      <span class="engineering-items__img">
        <img
          src="<?=$arItem['img'] ?>"
          alt="<?=$arItem['name'] ?>"
          loading="lazy"
        />
      </span>
      <span class="engineering-items__name h7">
        <?=$arItem['name'] ?>
      </span>
    </a>
  <? endforeach; ?>
</div>


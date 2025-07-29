<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="rec-list">
  <h4 class="rec-list__title">На вертикальную плоскость</h4>
  <div class="rec-list__items">
    <? foreach ($arResult as $arItem): ?>
      <a href="/reccomendations/detail/"
         class="rec-list__item"
      >
        <span class="rec-list__img">
          <img
            src="<?=$arItem['img'] ?>"
            width="453"
            height="340"
            alt="<?=$arItem['name'] ?>"
            loading="lazy"
          />
        </span>
        <span class="rec-list__name h7"><?=$arItem['name'] ?></span>
      </a>
    <? endforeach; ?>
  </div>
</div>


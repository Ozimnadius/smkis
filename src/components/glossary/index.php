<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="glossary">
  <? foreach ($arResult as $arItem): ?>
    <a href="/glossary/detail/"
       class="glossary__item"
    >
      <span class="glossary__img">
        <img
          src="<?=$arItem['img'] ?>"
          width="453"
          height="340"
          alt="<?=$arItem['name'] ?>"
          loading="lazy"
        />
      </span>
      <span class="glossary__name h7">
        <?=$arItem['name'] ?>
      </span>
    </a>
  <? endforeach; ?>
</div>


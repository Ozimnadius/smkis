<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="projects-list">
  <? foreach ($arResult as $arItem): ?>
    <a href="/projects/detail/"
       class="projects-list__item"
    >
    <span class="projects-list__img">
      <img
        src="<?= $arItem['img'] ?>"
        alt="<?= $arItem['name'] ?>"
        loading="lazy"
      />
    </span>
      <span class="projects-list__wrap">
      <span class="projects-list__category caption"><?= $arItem['category'] ?></span>
      <span class="projects-list__name h7"><?= $arItem['name'] ?></span>
    </span>
    </a>
  <? endforeach; ?>
</div>


<?
/** @var array $arParams */
/** @var array $arResult */
?>

<div class="nav">
  <div class="nav__overlay" data-event="click.closeNav"></div>
  <div class="nav__wrapper">
    <button class="nav__close" type="button" data-event="click.closeNav">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.3247 23.5628C7.92302 23.1611 7.92302 22.5098 8.3247 22.1081L22.2244 8.20845C22.6261 7.80677 23.2773 7.80677 23.679 8.20845C24.0807 8.61014 24.0807 9.26139 23.679 9.66307L9.77932 23.5628C9.37764 23.9645 8.72638 23.9645 8.3247 23.5628Z" fill="#15182A"/>
        <path d="M23.6795 23.5623C23.2778 23.964 22.6266 23.964 22.2249 23.5623L8.32519 9.66262C7.92351 9.26094 7.92351 8.60968 8.32519 8.208C8.72687 7.80632 9.37813 7.80632 9.77981 8.208L23.6795 22.1077C24.0812 22.5094 24.0812 23.1606 23.6795 23.5623Z" fill="#15182A"/>
      </svg>

    </button>
    <div class="nav__items">
      <? foreach ($arResult as $arItem): ?>
        <a href="<?=$arItem['href'] ?>"
           class="nav__item"
        >
          <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="17" cy="17" r="16" stroke="#DDDEE2" stroke-width="1.4"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9062 17L15.2875 9.38128C14.9458 9.03957 14.3918 9.03957 14.0501 9.38128C13.7084 9.72299 13.7084 10.277 14.0501 10.6187L20.4314 17L14.0501 23.3813C13.7084 23.723 13.7084 24.277 14.0501 24.6187C14.3918 24.9604 14.9458 24.9604 15.2875 24.6187L22.9062 17Z" fill="#15182A"/>
          </svg>
          <?=$arItem['name'] ?>
        </a>
      <? endforeach; ?>
    </div>
  </div>
</div>



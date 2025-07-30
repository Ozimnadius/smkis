<?
/** @var array $arParams */
/** @var array $arResult */
?>
<div class="drop-menu">
  <? foreach ($arResult as $key => $arItem): ?>
    <div class="drop-menu__item <? if ($key == 1): ?>open<? endif; ?>">
      <a href="/"
         class="drop-menu__link <? if ($key == 1): ?>active<? endif; ?>"
      >
        <?= $arItem ?>
        <svg width="28"
             height="28"
             viewBox="0 0 28 28"
             fill="none"
             xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M13.8484 16.5256C13.9281 16.6177 14.071 16.6177 14.1508 16.5256L17.6101 12.5311C17.7223 12.4016 17.6302 12.2002 17.4589 12.2002H10.5402C10.3689 12.2002 10.2769 12.4016 10.389 12.5311L13.8484 16.5256Z"
                fill="#15182A"
          />
        </svg>
      </a>
      <div class="drop-menu__dropdown">
        <a href="/"
           class="drop-menu__dropdown-link <? if ($key == 1): ?>active<? endif; ?>"
        >На вертикальную плоскость
        </a>
        <a href="/"
           class="drop-menu__dropdown-link"
        >На кровлю
        </a>
      </div>
    </div>
  <? endforeach; ?>
</div>


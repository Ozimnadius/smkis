<?
/** @var array $arParams */
/** @var array $arResult */
?>
<? if ($arParams['dropDown']): ?>
  <div class="aside-menu"
       data-type="3"
  >
    <div class="aside-menu__item open">
      <a href="/"
         class="aside-menu__link active"
      >
        Раздел 1
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
      <div class="aside-menu__dropdown"
      >
        <a href="/"
           class="aside-menu__dropdown-link active"
        >Подраздел 1
        </a>
        <a href="/"
           class="aside-menu__dropdown-link"
        >
          Подраздел 2
        </a>
      </div>
    </div>
    <div class="aside-menu__item"
         data-root
    >
      <a href="/"
         class="aside-menu__link"
      >
        Раздел 2
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
      <div class="aside-menu__dropdown"
           data-root-dropdown
      >
        <a href="/"
           class="aside-menu__dropdown-link"
        >Подраздел 1
        </a>
        <a href="/"
           class="aside-menu__dropdown-link"
        >Подраздел 2
        </a>

      </div>
    </div>
  </div>
  <div class="aside-dropdown">
    <a href=""
       class="aside-dropdown__item btn btn--small btn--black"
    >
      На вертикальную плоскость
    </a>
    <a href=""
       class="aside-dropdown__item btn btn--small btn--border"
    >
      На кровлю
    </a>
  </div>
<? else: ?>
  <div class="aside-menu">
    <div class="aside-menu__item">
      <a href="/"
         class="aside-menu__link active"
      >
        Раздел 1
      </a>
    </div>
    <div class="aside-menu__item">
      <a href="/"
         class="aside-menu__link"
      >
        Раздел 2
      </a>
    </div>
    <div class="aside-menu__item">
      <a href="/"
         class="aside-menu__link"
      >
        Раздел 3
      </a>
    </div>
    <div class="aside-menu__item">
      <a href="/"
         class="aside-menu__link"
      >
        Раздел 4
      </a>
    </div>
  </div>
<? endif; ?>



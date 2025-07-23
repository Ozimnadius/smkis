<?php
header('Content-Type: application/json');

ob_start();?>
  <div class="header-search__items">
    <a href="/catalog/product/" class="header-search__item">
      <span class="header-search__item-left">
        <span class="header-search__item-img">
          <img
            src="/upload/images/header-search/img.webp"
            alt="Временная анкерная линия"
            loading="lazy"
          />
        </span>
      </span>
      <span class="header-search__item-right">
        <span class="header-search__item-category caption">CROSS LINE</span>
        <span class="header-search__item-name h7">Временная анкерная линия</span>
        <span class="header-search__item-price h7">47 000 ₽</span>
      </span>
    </a>
    <a href="/catalog/product/" class="header-search__item">
      <span class="header-search__item-left">
        <span class="header-search__item-img">
          <img
            src="/upload/images/header-search/img.webp"
            alt="Временная анкерная линия"
            loading="lazy"
          />
        </span>
      </span>
      <span class="header-search__item-right">
        <span class="header-search__item-category caption">CROSS LINE</span>
        <span class="header-search__item-name h7">Временная анкерная линия</span>
        <span class="header-search__item-price h7">47 000 ₽</span>
      </span>
    </a>
    <a href="/catalog/product/" class="header-search__item">
      <span class="header-search__item-left">
        <span class="header-search__item-img">
          <img
            src="/upload/images/header-search/img.webp"
            alt="Временная анкерная линия"
            loading="lazy"
          />
        </span>
      </span>
      <span class="header-search__item-right">
        <span class="header-search__item-category caption">CROSS LINE</span>
        <span class="header-search__item-name h7">Временная анкерная линия</span>
        <span class="header-search__item-price h7">47 000 ₽</span>
      </span>
    </a>
  </div>
<?php
$html = ob_get_clean();

echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


<?php
header('Content-Type: application/json');

ob_start();?>
  <div class="header-search__nothing">
    <div class="header-search__nothing-title h6">Упс...</div>
    <div class="header-search__nothing-description">По вашему результату ничего не найдено</div>
  </div>
<?php
$html = ob_get_clean();



echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


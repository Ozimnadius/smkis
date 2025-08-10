<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

ob_start(); ?>
<? if ($data['step'] == 0): ?>
  <div class="main-selection__step main-selection__step--main">
    <h3 class="main-selection__title">
      Подбор анкерного устройства
    </h3>
    <div class="main-selection__text">
      Изготовлен из нержавеющей стали. Используется
    </div>
    <a href="/"
       class="main-selection__btn btn btn--large btn--black"
    >
      Начать
    </a>
  </div>
<? elseif ($data['step'] == 1): ?>

<? elseif ($data['step'] == 2): ?>

<? elseif ($data['step'] == 3): ?>

<? elseif ($data['step'] == 4): ?>

<? elseif ($data['step'] == 5): ?>

<? elseif ($data['step'] == 6): ?>

<? endif; ?>

<? $html = ob_get_clean();


echo json_encode(array(
  'status' => true,
  'html' => $html
));
exit();


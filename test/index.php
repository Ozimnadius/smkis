<? require("../src/core/top.php"); ?>
<script defer
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
></script>
<!-- main -->
<div class="page">
  <div class="page__breadcrumbs">
    <div class="container-small">
      <? component('breadcrumbs') ?>
    </div>
  </div>
  <div class="page__title">
    <div class="container-small">
      <h2 class="title">
        Калькулятор для расчета стоимости анкерных линий
      </h2>
    </div>
  </div>
  <div class="page__border">
    <div class="container-small">
      <div class="page__grid">
        <main class="page__main">
          <div class="con ">
            <div class="w">

              <div class="grid prod">

                <div class="right">
                  <div class="top-line">
                    <div class="left">
                      <img id="image"
                           src="https://smkis.ru/wp-content/uploads/2019/04/kama_1-1024x576.png"
                      >
                    </div>
                    <div class="right">
                      <div class="select setItem">
                        <select id="setItem">
                          <option value="0">Анкерная линия ДОН</option>
                          <option value="1">Анкерная линия ЕНИСЕЙ</option>
                          <option value="3">Анкерная линия КАМА</option>
                          <option value="4">Опорная конструкция ЛАДОГА</option>
                          <option value="5">Анкерная линия VIRA</option>
                          <option value="6">Анкерная линия STREAM</option>
                        </select>
                      </div>
                      <div class="link">
                        <div class="hover-rt">
                          <a href="#"
                             class="op-win"
                             data-id="1059"
                          >Как выбрать тип анкерной линии
                          </a>
                          <span class="op-win-con"
                                data-id="1059"
                          >
                                            <p class="con-r">Тип анкерной линии выбирается исходя из отчёта об оценке рисков, руководствуясь следующими параметрами:<br>1. Длина анкерной линии.<br>2. Расчёт запаса высоты.<br>3. Фактор падения.<br>4. Количество одновременно работающих сотрудников на одной линии.</p>
                                            <p><a class="link-r"
                                                  href="https://smkis.ru/glossarij/kak-vybrat-tip-ankernoj-linii/"
                                                  target="_blank"
                                              >Подробнее</a></p>
                                        </span>
                        </div>
                      </div>
                      <div class="desc">
                        <h3>Базовая комплектация:</h3>
                        <div id="includes">
                          <ul>
                            <li>Направляющий алюминиевый профиль</li>
                            <li>Мобильная анкерная точка</li>
                            <li>Ограничительные стопоры</li>
                            <li>Элементы крепления, пластина</li>
                            <li>Комплект креплений</li>
                            <li>Информационная табличка</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="list-types"
                       id="params"
                  >
                    <div class="line-type">
                      <div class="left">
                        <h3>Длина анкерной линии</h3>
                        <p>Максимальная длина линии не ограничена. *Если необходима длина линии более 200 метров,
                           запросите
                           технико-коммерческое предложение, для этого воспользуйтесь формой ниже.
                        </p>
                        <div class="hover-rt">
                          <a href="#"
                             class="op-win"
                             data-id="1293"
                          >Как рассчитать длину тросовой анкерной линии
                          </a>
                          <div class="op-win-con"
                               data-id="1293"
                          >
                            <p class="con-r">При расчёте длины анкерной линии необходимо учитывать границы рабочей зоны,
                                             а также
                                             состояние несущих конструкций здания и сооружения.
                            </p>
                            <p>
                              <a class="link-r"
                                 href="https://smkis.ru/glossarij/kak-rasschitat-dlinu-ankernoj-linii/"
                                 target="_blank"
                              >Подробнее
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="right">
                        <div class="input-line">
                          <div>3м</div>
                          <div>
                            <input type="range"
                                   id="range"
                                   name="range"
                                   min="3"
                                   max="100"
                                   value="3"
                                   step="3"
                            >
                            <div class="value"><i class="none">3</i>
                              <input class="calc_input"
                                     id="range2k"
                                     type="number"
                                     min="3"
                                     max="100"
                                     value="3"
                                     step="3"
                              >
                              м
                            </div>
                          </div>
                          <div>100м</div>
                        </div>
                        <div class="calc_img">
                          <div class="calcimg">
                            <img src="https://smkis.ru/wp-content/themes/smkis/img/calc/kama/profil.jpg">
                          </div>
                          <p>&nbsp;</p>
                        </div>
                      </div>
                    </div>
                    <div class="line-type">
                      <div class="left">
                        <h3>Монтажная ферма</h3>
                        <p>Промежуточные крепления в анкерной линии КАМА необходимо устанавливать через каждый метр.
                           Если нет
                           такой возможности, включите в комплектацию Пространственная монтажная ферма. Она позволяет
                           устанавливать промежуточные крепления Анкерной линии через каждый метр, в тех местах, где
                           отсутствует
                           возможность их установки.
                        </p>
                        <div class="hover-rt">
                          <a href="#"
                             class="op-win"
                             data-id="1295"
                          >Как правильно выбрать точки для крепления
                          </a>
                          <div class="op-win-con"
                               data-id="1295"
                          >
                            <p class="con-r">Количество промежуточных анкерных точек зависит от длины линии, запаса
                                             высоты, места
                                             её установки и схемы эвакуации работника при его срыве в без опорное
                                             пространство.
                            </p>
                            <p>
                              <a class="link-r"
                                 href="https://smkis.ru/glossarij/kak-rasschitat-kolichestvo-promezhutochnyh-ankernyh-tochek/"
                                 target="_blank"
                              >Подробнее
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="right">
                        <div><b>Включить в комплектацию пространственную монтажную ферму</b></div>
                        <div class="radio">
                          <label>
                            <input type="radio"
                                   name="size"
                                   data-img="https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ferma.jpg"
                                   data-alt="&nbsp;"
                                   value="27082"
                                   data-price2="0"
                                   data-weight="77.6"
                                   data-weight2="0"
                            >
                            <span>Да</span>
                          </label>
                          <label>
                            <input checked=""
                                   type="radio"
                                   name="size"
                                   data-img="https://smkis.ru/wp-content/themes/smkis/img/calc/none.png"
                                   data-alt="&nbsp;"
                                   value="0"
                                   data-price2="0"
                                   data-weight="0"
                                   data-weight2="0"
                            >
                            <span>Нет</span>
                          </label>
                        </div>
                        <div class="calc_img">
                          <div class="calcimg">
                            <img src="https://smkis.ru/wp-content/themes/smkis/img/calc/none.png">
                          </div>
                          <p>&nbsp;</p>
                        </div>
                      </div>
                    </div>
                    <div class="line-type">
                      <div class="left">
                        <h3>Количество мобильных анкерных точек</h3>
                        <p>Количество одновременно застрахованных на участке линии длиной 3 метра должно быть не более
                           4-х
                           человек.
                        </p>
                      </div>
                      <div class="right">
                        <div class="input-line">
                          <div>1</div>
                          <div>
                            <input type="range"
                                   id="range2"
                                   name="range"
                                   min="1"
                                   max="4"
                                   value="1"
                                   step="1"
                            >
                            <div class="value"><i class="none">1</i>
                              <input class="calc_input"
                                     id="range22k"
                                     type="number"
                                     min="1"
                                     max="4"
                                     value="1"
                                     step="1"
                              >
                            </div>
                          </div>
                          <div>4</div>
                        </div>
                        <div class="calc_img">
                          <div class="calcimg">
                            <img src="https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ankr_kama.jpg">
                          </div>
                          <p>&nbsp;</p>
                        </div>
                      </div>
                    </div>
                    <div class="line-type">
                      <div class="left">
                        <h3>Требуются ли дополнительные точки для эвакуации</h3>
                        <p>На этапе проектирования и монтажа мы можем интегрировать компоненты спасательно-эвакуационной
                           системы в
                           страховочную. Предприятие экономит на покупке дополнительных анкерных устройств,
                           предназначенных для
                           эвакуации работника при срыве.
                        </p>
                        <div class="hover-rt">
                          <a href="#"
                             class="op-win"
                             data-id="1297"
                          >Как проводить эвакуацию работника при срыве
                          </a>
                          <div class="op-win-con"
                               data-id="1297"
                          >
                            <p class="con-r">Для организации эвакуации с высоты необходимы дополнительные анкерные
                                             точки, которые
                                             помогут спасателям закрепить на них дополнительное СИЗ от падения с высоты
                                             для
                                             проведения работ по спасению зависшего работника.
                            </p>
                            <p>
                              <a class="link-r"
                                 href="https://smkis.ru/glossarij/dopolnitelnye-ankernye-tochki/"
                                 target="_blank"
                              >Подробнее
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="right">
                        <div class="radio">
                          <label>
                            <input type="radio"
                                   name="yn"
                                   data-img="https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ankr_kama.jpg"
                                   data-alt="&nbsp;"
                                   value="15663"
                                   data-price2="0"
                                   data-weight="1"
                                   data-weight2="0"
                            >
                            <span>Да</span>
                          </label>
                          <label>
                            <input checked=""
                                   type="radio"
                                   name="yn"
                                   data-img="https://smkis.ru/wp-content/themes/smkis/img/calc/none.png"
                                   data-alt="&nbsp;"
                                   value="0"
                                   data-price2="0"
                                   data-weight="0"
                                   data-weight2="0"
                            >
                            <span>Нет</span>
                          </label>
                        </div>
                        <div class="calc_img">
                          <div class="calcimg">
                            <img src="https://smkis.ru/wp-content/themes/smkis/img/calc/none.png">
                          </div>
                          <p>&nbsp;</p>
                        </div>
                      </div>
                    </div>
                    <div class="line-type"
                         style="display: none;"
                    >
                      <div class="left">
                        <h3>Элемент крепления фермы</h3>
                      </div>
                      <div class="right">
                        <div class="radio">
                          <label>
                            <input type="radio"
                                   name="yn2"
                                   data-img=""
                                   data-alt=""
                                   value="10000"
                                   data-price2="0"
                                   data-weight="0"
                                   data-weight2="0"
                            >
                            <span>Анкерное или болтовое соединение</span>
                          </label>
                          <label>
                            <input checked=""
                                   type="radio"
                                   name="yn2"
                                   data-img=""
                                   data-alt=""
                                   value="10000"
                                   data-price2="0"
                                   data-weight="0"
                                   data-weight2="0"
                            >
                            <span>Обжим</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="btn-block">
                    <a href="/pdf/?type=7&amp;p1=3&amp;p2=4&amp;p3=1&amp;p4=2&amp;p5=1&amp;p6=1&amp;ferm=0&amp;elm=0&amp;sum=38700&amp;w1=6.3&amp;w2=1.7&amp;w3=0.3&amp;w4=1.0&amp;w5=0.5&amp;w6=0.0&amp;w7=0.0&amp;w8=0.2&amp;ws=10.0"
                       target="_blank"
                       onclick="yaCounter48729875.reachGoal ('buttonsavekp'); return true;"
                       class="btn"
                    >Скачать коммерческое предложение
                    </a>
                  </div>
                  <div class="price-block">
                    <div class="left">
                      Стоимость:
                      <span class="sum">38 700,00</span>
                      руб.
                    </div>
                    <div class="right">
                      <h3>Расчет не включает:</h3>
                      <ul>
                        <li>
                          Дополнительное оборудование для крепления линии на горизонтальные
                          поверхности (на полу, на крыше и т.д.)
                        </li>
                        <li>
                          Стоимость крепежа (крепеж подбирается по типу мест креплений (бетон,
                          металлоконструкции и т.д.)
                        </li>
                        <li>
                          Монтаж дополнительных и усиление существующих опорных конструкций для
                          установки анкерных точек.
                        </li>
                        <li>
                          Стоимость монтажа анкерных линий
                        </li>
                      </ul>
                      <p>
                        <span>*</span>
                        Если в КАЛЬКУЛЯТОРЕ не предусмотрены какие-либо параметры необходимые для
                        расчета анкерной линии, свяжитесь с нашими техническими специалистами или
                        воспользуйтесь формой ниже.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <script>
            document.addEventListener('DOMContentLoaded', () => {


              document.addEventListener("DOMContentLoaded", () => {
                let cities = document.querySelectorAll(".regions_selector") ?? undefined;
                let cities_close = document.querySelector(".popup__close") ?? undefined;
                if (cities !== undefined) {
                  cities.forEach((btn) => {
                    btn.addEventListener("click", (event) => {
                      event.preventDefault();
                      console.log(event);
                      document.querySelector("#cities.popup").classList.add("active");
                    });
                  });
                }
                if (cities_close !== undefined) {
                  cities_close.addEventListener("click", (event) => {
                    document.querySelector("#cities.popup").classList.remove("active");
                  });
                }

                let matches = document.cookie.match(
                  new RegExp(
                    "(?:^|; )" +
                    "cookies_accepted".replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
                    "=([^;]*)"
                  )
                );

                if (!matches) {
                  document.querySelector(".cookies__info").classList.add("active");
                }
              });


              $$ = {};
              $$.r = {};

              $$.r.p11 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("i").html(v);
                  $(this).parent().find("input").val(v);
                  items[0].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $(this).parent().find("i").html(v);
                    $("#range").val(v);
                    items[0].calc();
                  }
                });
                $("#s1").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("i").html(v);
                  $(this).parent().find("input").val(v);
                  items[0].calc();
                });
                $("#s12k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $(this).parent().find("i").html(v);
                    $("#s1").val(v);
                    items[0].calc();
                  }
                });
                $("#mob_point").on("change", function () {
                  items[0].calc();
                });
                $('input[name="yn4"]').on("change", function () {
                  items[0].calc();
                });
                $('input[name="yn"]').on("change", function () {
                  items[0].calc();
                });
                $("#s3").on("change", function () {
                  items[0].calc();
                });
                $('input[name="yn2"]').on("change", function () {
                  items[0].calc();
                });
                $('input[name="yn33"]').on("change", function () {
                  items[0].calc();
                });
                items[0].calc();
              };

              $$.r.p12 = function () {
                var sum = items[0].price;
                var param1_val = parseInt($("#range").val()),
                  param1_sum = items[0].params[0].price;

                var lr = 6;

                if (param1_val > 5) {
                  lr = Math.ceil(param1_val + (param1_val / 100) * 2 + 1);
                }

                var lf = lr - 5;
                var lp = lf * param1_sum;

                var param2_val = parseInt($("#s1").val()),
                  param2_sum = items[0].params[3].price;

                //var param3_val = parseInt($('#s2').val()) - 1,
                var param3_val = $('input[name="yn4"]:checked').val();
                var param3_sum = parseInt($("#mob_point").val());

                //param3_sum = items[0].params[5].price;

                var param4_val = $('input[name="yn"]:checked').val();

                var param5_val = parseInt($("#s3").val()),
                  param5_sum = items[0].params[4].price;
                var param6_val = $('input[name="yn2"]:checked').val();
                var param6_2_val = $('input[name="yn2"]:checked').data("price2");
                var param7_val = $('input[name="yn33"]:checked').val();

                var p1 = (param1_val - items[0].params[0].widthStart) * param1_sum;

                if (param1_val > 5) {
                  p1 = lp;
                }

                var p2v = param2_val;

                var p2 = p2v * param2_sum;

                var p3 = param3_val * param3_sum;

                var p5 = param5_val * param5_sum;

                //p2v = кол-во промежуточных точек
                //Эвакуация = кол-во промежуточных точек + кол-во поворотных точек х 600 рублей
                var p4 = (p2v + param5_val) * param4_val;

                //Тип поверхности = (кол-во промежуточных точек + кол-во поворотных точек) х цена типа поверхности + цена типа поверхности х 2
                var val7_count = 1;
                if (param1_val > 120) {
                  val7_count = 2;
                }
                //console.log(val7_count);
                var p6 = (p2v + param5_val) * param6_val + param6_val * 2;

                if (param6_val == 15000) {
                  var p6 = p2v * param6_val;
                  var p8 = param5_val * param6_2_val + param6_2_val * 2;
                } else {
                  var p6 = (p2v + param5_val) * param6_val + param6_val * 2;
                  var p8 = 0;
                }

                if ($('input[name="yn2"]:checked').val() == 0) {
                  $('input[name="yn33"]').prop("disabled", false);
                } else {
                  $('input[name="yn33"][value="20440"]').trigger("click");
                  var param7_val = $('input[name="yn33"]:checked').val();
                  $('input[name="yn33"]').prop("disabled", true);
                }

                var p7 = parseInt(param7_val * val7_count);

                sum =
                  parseInt(sum) +
                  parseInt(p1) +
                  parseInt(p2) +
                  parseInt(p3) +
                  parseInt(p4) +
                  parseInt(p5) +
                  parseInt(p6) +
                  parseInt(p7) +
                  parseInt(p8);

                //var f4 = parseInt(param3_val) + 1;
                var f4 = param3_sum;
                var f5 = parseInt(p2v + param5_val);

                //console.log(param5_val);
                var f6 = parseInt(p2v + param5_val) + 2;

                don_const_kr_a = 0.5 * 2;
                don_const_nat = 1 * 2;
                don_const_info = 0.2;
                don_const_kompleck_kr = 0.54;
                don_tochka_w = 0;
                don_stolbik_w = 0;

                if (param4_val == 0) {
                  don_weight_p5 = $('input[name="yn"]:checked').data("weight");
                } else {
                  don_weight_p5 = $('input[name="yn"]:checked').data("weight") * f6;
                }

                don_weight_p0 = lr * items[0].params[0].weight;
                don_weight_p1 = $('input[name="yn4"]:checked').data("weight") * f4;
                don_weight_p2 = $('input[name="yn33"]:checked').data("weight") * val7_count;
                don_weight_p3 = items[0].params[3].weight * p2v;
                don_weight_p4 = items[0].params[4].weight * param5_val;

                don_weight =
                  don_weight_p0 +
                  don_weight_p1 +
                  don_weight_p2 +
                  don_weight_p3 +
                  don_weight_p4 +
                  don_weight_p5 +
                  don_const_kr_a +
                  don_const_nat +
                  don_const_info +
                  don_const_kompleck_kr +
                  don_tochka_w +
                  don_stolbik_w;

                /*console.log('Длина анкерной линии -- '+ don_weight_p0);
                console.log('Крайний анкер -- '+ don_const_kr_a);
                console.log('Промежуточный анкер -- '+ don_weight_p3);
                console.log('Угловой анкер -- '+ don_weight_p4);
                console.log('Мобильная точка крепления -- '+ don_weight_p1);
                console.log('Натяжитель -- '+ don_const_nat);
                console.log('Амортизатор -- '+ don_weight_p2);
                console.log('Точка для эвакуации -- '+ don_weight_p5);
                console.log('Комплект пресс крепления -- '+ don_const_kompleck_kr);
                console.log('Анкерная стойка точка -- '+ don_tochka_w);
                console.log('Анкерный столбик basic -- '+ don_stolbik_w);
                console.log('Информационная табличка -- '+ don_const_info);

                console.log('Итого: '+don_weight.toFixed(3));*/

                if (param4_val == 0) {
                  if (param6_val == 0) {
                    if (param7_val == 8550) {
                      tp = 1;
                    }
                    if (param7_val == 1840) {
                      tp = 11;
                    }
                    //console.log(f5);
                    var res =
                      "/pdf/?type=" +
                      tp +
                      "&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      0 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                    don_tochka_w = 0;
                    don_stolbik_w = 0;
                  }
                  if (param6_val == 16740) {
                    don_tochka_w = $('input[name="yn2"]:checked').data("weight") * p2v;
                    don_stolbik_w =
                      $('input[name="yn2"]:checked').data("weight2") * param5_val +
                      $('input[name="yn2"]:checked').data("weight2") * 2;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=2&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      0 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&p8=" +
                      (param5_val + 2) +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&w8=" +
                      don_stolbik_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                  if (param6_val == 21105) {
                    don_tochka_w =
                      $('input[name="yn2"]:checked').data("weight") * (p2v + param5_val) +
                      $('input[name="yn2"]:checked').data("weight") * 2;
                    don_stolbik_w = 0;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=3&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      0 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                  if (param6_val == 30465) {
                    don_tochka_w =
                      $('input[name="yn2"]:checked').data("weight") * (p2v + param5_val) +
                      $('input[name="yn2"]:checked').data("weight") * 2;
                    don_stolbik_w = 0;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=4&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      0 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                } else {
                  if (param6_val == 0) {
                    var res =
                      "/pdf/?type=1&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      f6 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                    don_tochka_w = 0;
                    don_stolbik_w = 0;
                  }
                  if (param6_val == 16740) {
                    don_tochka_w = $('input[name="yn2"]:checked').data("weight") * p2v;
                    don_stolbik_w =
                      $('input[name="yn2"]:checked').data("weight2") * param5_val +
                      $('input[name="yn2"]:checked').data("weight2") * 2;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=2&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      f5 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&p8=" +
                      (param5_val + 2) +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&w8=" +
                      don_stolbik_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                  if (param6_val == 21105) {
                    don_tochka_w =
                      $('input[name="yn2"]:checked').data("weight") * (p2v + param5_val) +
                      $('input[name="yn2"]:checked').data("weight") * 2;
                    don_stolbik_w = 0;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=3&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      f6 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                  if (param6_val == 30465) {
                    don_tochka_w =
                      $('input[name="yn2"]:checked').data("weight") * (p2v + param5_val) +
                      $('input[name="yn2"]:checked').data("weight") * 2;
                    don_stolbik_w = 0;
                    don_weight = don_weight + don_tochka_w + don_stolbik_w;
                    var res =
                      "/pdf/?type=3&p1=" +
                      lr +
                      "&p2=" +
                      p2v +
                      "&p3=" +
                      param5_val +
                      "&p4=" +
                      f4 +
                      "&p5=" +
                      f6 +
                      "&p6=" +
                      f6 +
                      "&p7=" +
                      val7_count +
                      "&sum=" +
                      sum +
                      "&w1=" +
                      don_weight_p0.toFixed(1) +
                      "&w2=" +
                      don_weight_p3.toFixed(1) +
                      "&w3=" +
                      don_weight_p4.toFixed(1) +
                      "&w4=" +
                      don_weight_p1.toFixed(1) +
                      "&w5=" +
                      don_weight_p2.toFixed(1) +
                      "&w6=" +
                      don_weight_p5.toFixed(1) +
                      "&w7=" +
                      don_tochka_w.toFixed(1) +
                      "&ws=" +
                      don_weight.toFixed(1);
                  }
                }

                //console.log('res: ', res );
                //console.log('param4_val: ', param4_val );
                //console.log('param6_val: ', param6_val );

                $(".btn-block a.btn").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };

              $$.r.p13 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[1].calc();
                });
                $("#s1").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[1].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range").val(v);
                    items[1].calc();
                  }
                });
                $("#s12k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#s1").val(v);
                    items[1].calc();
                  }
                });
                $("#s2").on("change", function () {
                  items[1].calc();
                });
                $('input[name="yn"]').on("change", function () {
                  items[1].calc();
                });
                $("#s3").on("change", function () {
                  items[1].calc();
                });
                $('input[name="yn2"]').on("change", function () {
                  items[1].calc();
                });
                items[1].calc();
              };

              $$.r.p14 = function () {
                var sum = items[1].price;

                var param1_val = $("#range").val(),
                  param1_sum = items[1].params[0].price;
                var param2_val = $("#s1").val(),
                  param2_sum = items[1].params[1].price;
                var param3_val = parseInt($("#s2").val() - 1),
                  param3_sum = items[1].params[2].price;

                /* if (param3_val === 3) {
                      $('.radio label:last-child input').trigger('click');
                      $('.msg').remove();
                      $('.line-type:nth-child(4) .right').append('<p class="msg">Вы выбрали максимальное количество мобильных анкерных точек.</p>');
                      $('input[name="yn"]').attr('disabled', true);
                  } else {
                      $('input[name="yn"]').attr('disabled', false);
                      $('.msg').remove();
                  }*/
                var param4_val = $('input[name="yn"]:checked').val();

                var p2v = param2_val;

                var p2 = p2v * param2_sum;

                var L = param1_val;

                var lr = 11;
                var lf = 0;

                if (param1_val > 5) {
                  lr = parseInt(Math.ceil(L * 2 + ((L * 2) / 100) * 2) + 1);
                  lf = parseInt(lr - 10);
                } else {
                  lf = parseInt(lr - 11);
                }
                var dop_k = 0;
                var amort = 2;
                if (param1_val > 120) {
                  dop_k = 53144;
                  amort = 4;
                }

                var lp = lf * param1_sum;

                var p1 = lp;

                var p3 = param3_val * param3_sum;
                var p4 = param4_val;

                if ($('input[name="yn2"]:checked').val() == "1500") {
                  var p6 = parseInt($('input[name="yn2"]:checked').val()) * p2v;
                  var p7 = 0;
                }

                if ($('input[name="yn2"]:checked').val() == "4000") {
                  var p6 = parseInt($('input[name="yn2"]:checked').val()) * p2v;
                  var p7 = 5000;
                }

                sum = sum + p1 + p2 + p3 + parseInt(p4) + parseInt(dop_k) + p6 + p7;

                var f3 = parseInt(param3_val) + 1;

                var f4 = "";

                if (param4_val == 0) {
                  f4 = 0;
                } else {
                  f4 = 1;
                }

                en_const_kr_a = 3.7 * 2;
                en_const_nat = 4 * 0.6;
                en_const_info = 0.2;
                en_const_kompleck_kr = 2 * 0.54;
                en_weight_amort = amort * 3.9;

                en_weight_p0 = lr * items[1].params[0].weight;
                en_weight_p1 = p2v * items[1].params[1].weight;
                en_weight_p2 = f3 * items[1].params[2].weight; // + f4*items[1].params[2].weight;
                en_weight_p3 = f4 * items[1].params[2].weight;

                don_weight =
                  en_weight_p0 +
                  en_weight_p1 +
                  en_weight_p2 +
                  en_weight_p3 +
                  en_const_kr_a +
                  en_const_nat +
                  en_const_info +
                  en_const_kompleck_kr +
                  en_weight_amort;

                //toFixed(1)

                var res =
                  "/pdf/?type=5&p1=" +
                  lr +
                  "&p2=" +
                  p2v +
                  "&p3=" +
                  f3 +
                  "&p4=" +
                  f4 +
                  "&p5=" +
                  amort +
                  "&sum=" +
                  sum +
                  "&w1=" +
                  en_weight_p0.toFixed(1) +
                  "&w2=" +
                  en_const_kr_a.toFixed(1) +
                  "&w3=" +
                  en_weight_p1.toFixed(1) +
                  "&w4=" +
                  en_weight_p2.toFixed(1) +
                  "&w5=" +
                  en_const_nat.toFixed(1) +
                  "&w6=" +
                  en_weight_amort.toFixed(1) +
                  "&w7=" +
                  en_weight_p3.toFixed(1) +
                  "&w8=" +
                  en_const_kompleck_kr.toFixed(1) +
                  "&w9=" +
                  en_const_info.toFixed(1) +
                  "&ws=" +
                  don_weight.toFixed(1);

                $(".btn-block a").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };
              $$.r.p15 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[2].calc();
                });
                $("#s1").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[2].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range").val(v);
                    items[2].calc();
                  }
                });
                $("#s12k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#s1").val(v);
                    items[2].calc();
                  }
                });
                $("#s2").on("change", function () {
                  items[2].calc();
                });
                $("#num").on("change", function () {
                  items[2].calc();
                });
                $('input[name="yn3"]').on("change", function () {
                  items[2].calc();
                });

                items[2].calc();
              };
              $$.r.p21 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[5].calc();
                });
                $("#s1").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[5].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range").val(v);
                    items[5].calc();
                  }
                });
                $("#s12k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#s1").val(v);
                    items[5].calc();
                  }
                });
                $("#s2").on("change", function () {
                  items[5].calc();
                });
                $("#num").on("change", function () {
                  items[5].calc();
                });
                $('input[name="yn3"]').on("change", function () {
                  items[5].calc();
                });

                items[5].calc();
              };
              $$.r.p22 = function () {
                var sum = items[5].price;

                var param1_val = parseInt($("#range").val()) + 1,
                  param1_sum = items[5].params[0].price;
                var param2_val = $("#s1").val(),
                  param2_sum = items[5].params[1].price;
                var param3_val = $("#s2").val();
                var param7_val = $('input[name="yn3"]:checked').val();
                var num = $("#num");

                if (param3_val == 0) {
                  num.hide();
                } else {
                  num.show();
                }

                //console.log(param1_val)
                var p1 = (param1_val - 6) * param1_sum;

                var p2 = param2_val * param2_sum;

                var p3 = param3_val * num.val();
                var p7 = parseInt(param7_val);

                var f3 = 0;

                sum = sum + p1 + p2 + p3 + p7;

                if (param3_val != 0) {
                  f3 = num.val();
                }

                if ($('input[name="yn3"]:checked').val() == "9800") {
                  p4 = 1;
                  p5 = 1;
                }
                if ($('input[name="yn3"]:checked').val() == "5970") {
                  p4 = 0;
                  p5 = 2;
                }

                vira_const_karabin = 0.18;
                vira_const_amortazator = 0.9;
                vira_const_talrep = 0.6;
                vira_const_k_kr = 1.9 * p5;
                vira_const_info = 0.2;
                vira_const_press_krepy = 0.54;
                vira_const_krepy = 0.4;

                vira_weight_tros = param1_val * items[5].params[0].weight;
                vira_weight_prom_krep = param2_val * items[5].params[1].weight;
                vira_weight_udlinitel = $('input[name="yn3"]:checked').data("weight") * p4;
                vira_weight_polzunk = $("#s2 option:selected").data("weight") * f3;

                vira_weight =
                  vira_const_karabin +
                  vira_const_amortazator +
                  vira_const_talrep +
                  vira_const_k_kr +
                  vira_const_info +
                  vira_const_press_krepy +
                  vira_const_krepy +
                  vira_weight_tros +
                  vira_weight_prom_krep +
                  vira_weight_udlinitel +
                  vira_weight_polzunk;

                var res =
                  "/pdf/?type=9&p1=" +
                  param1_val +
                  "&p2=" +
                  param2_val +
                  "&p3=" +
                  f3 +
                  "&p4=" +
                  p4 +
                  "&p5=" +
                  p5 +
                  "&sum=" +
                  sum +
                  "&w1=" +
                  vira_weight_tros.toFixed(1) +
                  "&w2=" +
                  vira_weight_udlinitel.toFixed(1) +
                  "&w3=" +
                  vira_const_amortazator.toFixed(1) +
                  "&w4=" +
                  vira_const_k_kr.toFixed(1) +
                  "&w5=" +
                  vira_const_talrep.toFixed(1) +
                  "&w6=" +
                  vira_weight_prom_krep.toFixed(1) +
                  "&w7=" +
                  vira_weight_polzunk.toFixed(1) +
                  "&w8=" +
                  vira_const_krepy.toFixed(1) +
                  "&w9=" +
                  (vira_const_press_krepy + vira_const_karabin).toFixed(1) +
                  "&w10=" +
                  vira_const_info.toFixed(1) +
                  "&ws=" +
                  vira_weight.toFixed(1);

                $(".btn-block a").attr("href", res);

                //console.log(res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };
              $$.r.p16 = function () {
                var sum = items[2].price;

                var param1_val = parseInt($("#range").val()) + 1,
                  param1_sum = items[2].params[0].price;
                var param2_val = $("#s1").val(),
                  param2_sum = items[2].params[1].price;
                var param3_val = $("#s2").val();
                var param7_val = $('input[name="yn3"]:checked').val();
                var num = $("#num");

                if (param3_val == 0) {
                  num.hide();
                } else {
                  num.show();
                }

                //console.log(param1_val)
                var p1 = (param1_val - 6) * param1_sum;

                var p2 = param2_val * param2_sum;

                var p3 = param3_val * num.val();
                var p7 = parseInt(param7_val);

                var f3 = 0;

                sum = sum + p1 + p2 + p3 + p7;

                if (param3_val != 0) {
                  f3 = num.val();
                }

                if ($('input[name="yn3"]:checked').val() == "8800") {
                  p4 = 1;
                  p5 = 1;
                }
                if ($('input[name="yn3"]:checked').val() == "4970") {
                  p4 = 0;
                  p5 = 2;
                }

                var res =
                  "/pdf/?type=6&p1=" +
                  param1_val +
                  "&p2=" +
                  param2_val +
                  "&p3=" +
                  f3 +
                  "&p4=" +
                  p4 +
                  "&p5=" +
                  p5 +
                  "&sum=" +
                  sum;

                $(".btn-block a").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };
              $$.r.p17 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("i").html(v);
                  $(this).parent().find("input").val(v);
                  var max = (v / 3) * 4;

                  if ($("#range2").val() > max) {
                    $("#range2").val(max).next().find("i").html(max);
                  }

                  $("#range2").attr("max", max).parent().next().html(max);

                  items[3].calc();
                });
                $("#range2").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("i").html(v);
                  $(this).parent().find("input").val(v);
                  items[3].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range").val(v);
                    items[3].calc();
                  }
                });

                $("#range22k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range2").val(v);
                    items[3].calc();
                  }
                });

                $('input[name="size"]').on("change", function () {
                  items[3].calc();
                });
                $('input[name="yn"]').on("change", function () {
                  items[3].calc();
                });
                $('input[name="yn2"]').on("change", function () {
                  items[3].calc();
                });
                $("#s2").on("change", function () {
                  items[3].calc();
                });

                items[3].calc();
              };
              $$.r.p18 = function () {
                var sum = items[3].price;

                var param1_val = $("#range").val(),
                  param1_sum = items[3].params[0].price;

                var param2_val = $('input[name="size"]:checked').val();
                var p2 = 0;
                var p2f = 0;

                if (param1_val == 3 || param1_val == 6) {
                  p2 = 1 * param2_val;
                }
                if (param1_val == 9 || param1_val == 12) {
                  p2 = 2 * param2_val;
                }
                if (param1_val == 15 || param1_val == 18) {
                  p2 = 3 * param2_val;
                }
                if (param1_val == 21 || param1_val == 24) {
                  p2 = 4 * param2_val;
                }
                if (param1_val == 27 || param1_val == 30) {
                  p2 = 5 * param2_val;
                }
                if (param1_val == 33 || param1_val == 36) {
                  p2 = 6 * param2_val;
                }
                if (param1_val == 39 || param1_val == 42) {
                  p2 = 7 * param2_val;
                }

                if (param1_val == 45 || param1_val == 48) {
                  p2 = 8 * param2_val;
                }
                if (param1_val == 51 || param1_val == 54) {
                  p2 = 9 * param2_val;
                }
                if (param1_val == 57 || param1_val == 60) {
                  p2 = 10 * param2_val;
                }
                if (param1_val == 63 || param1_val == 66) {
                  p2 = 11 * param2_val;
                }
                if (param1_val == 69 || param1_val == 72) {
                  p2 = 12 * param2_val;
                }
                if (param1_val == 75 || param1_val == 78) {
                  p2 = 13 * param2_val;
                }
                if (param1_val == 81 || param1_val == 84) {
                  p2 = 14 * param2_val;
                }

                if (param1_val == 87 || param1_val == 90) {
                  p2 = 15 * param2_val;
                }
                if (param1_val == 93 || param1_val == 96) {
                  p2 = 16 * param2_val;
                }
                if (param1_val == 99 || param1_val == 102) {
                  p2 = 17 * param2_val;
                }
                if (param1_val == 105 || param1_val == 108) {
                  p2 = 18 * param2_val;
                }
                if (param1_val == 111 || param1_val == 114) {
                  p2 = 19 * param2_val;
                }
                if (param1_val == 117 || param1_val == 120) {
                  p2 = 20 * param2_val;
                }

                if (param1_val == 3 || param1_val == 6) {
                  p2f = 1;
                }
                if (param1_val == 9 || param1_val == 12) {
                  p2f = 2;
                }
                if (param1_val == 15 || param1_val == 18) {
                  p2f = 3;
                }
                if (param1_val == 21 || param1_val == 24) {
                  p2f = 4;
                }
                if (param1_val == 27 || param1_val == 30) {
                  p2f = 5;
                }
                if (param1_val == 33 || param1_val == 36) {
                  p2f = 6;
                }
                if (param1_val == 39 || param1_val == 42) {
                  p2f = 7;
                }

                if (param1_val == 45 || param1_val == 48) {
                  p2f = 8;
                }
                if (param1_val == 51 || param1_val == 54) {
                  p2f = 9;
                }
                if (param1_val == 57 || param1_val == 60) {
                  p2f = 10;
                }
                if (param1_val == 63 || param1_val == 66) {
                  p2f = 11;
                }
                if (param1_val == 69 || param1_val == 72) {
                  p2f = 12;
                }
                if (param1_val == 75 || param1_val == 78) {
                  p2f = 13;
                }
                if (param1_val == 81 || param1_val == 84) {
                  p2f = 14;
                }

                if (param1_val == 87 || param1_val == 90) {
                  p2f = 15;
                }
                if (param1_val == 93 || param1_val == 96) {
                  p2f = 16;
                }
                if (param1_val == 99 || param1_val == 102) {
                  p2f = 17;
                }
                if (param1_val == 105 || param1_val == 108) {
                  p2f = 18;
                }
                if (param1_val == 111 || param1_val == 114) {
                  p2f = 19;
                }
                if (param1_val == 117 || param1_val == 120) {
                  p2f = 20;
                }

                var param3_val = $("#range2").val() - 1,
                  param3_sum = items[3].params[2].price;

                var p3 = param3_val * param3_sum;

                var p1 = (param1_val - items[3].params[0].widthStart) * param1_sum;

                var param4_val = $('input[name="yn"]:checked').val();

                if (param3_val + 1 == $("#range2").attr("max")) {
                  $(".line-type:nth-child(4) .radio label:last-child input").trigger("click");
                  if ($(".msg").length == 0) {
                    $(".line-type:nth-child(4) .right").append(
                      '<p class="msg">Вы выбрали максимальное количество мобильных анкерных точек.</p>'
                    );
                  }

                  $('input[name="yn"]').attr("disabled", true);
                } else {
                  $('input[name="yn"]').attr("disabled", false);
                  $(".msg").remove();
                }

                var p4 = parseInt(param4_val);

                if ($('input[name="yn2"]:checked').length == 1) {
                  var param5_val = $('input[name="yn2"]:checked').val();

                  if (param1_val > 6) {
                    var p5 = (p2f + 1) * parseInt(param5_val);
                  } else {
                    var p5 = 2 * parseInt(param5_val);
                  }
                } else {
                  p5 = 0;
                }

                if (param2_val == 0) {
                  $('input[name="yn2"]').closest(".line-type").hide();
                  param5_val = 0;
                  p5 = 0;
                } else {
                  $('input[name="yn2"]').closest(".line-type").show();
                }

                kama_const_krepy = 0.5;
                if (param1_val / 3 > 1) {
                  kama_price_krepy = items[3].price_krepy * (param1_val / 3 - 1);
                } else {
                  kama_price_krepy = 0;
                }

                sum = sum + p1 + p2 + p3 + p4 + p5 + kama_price_krepy;

                var f3 = parseInt(param1_val) + 1;

                var f4 = "";

                if (param4_val == 0) {
                  f4 = 0;
                } else {
                  f4 = 1;
                }

                kama_const_fiksator_gnu = 0.43;
                kama_const_ogran_hod = 2 * 0.16;
                kama_const_krepy_ferma = 10;
                kama_const_info = 0.2;

                kama_weight_tros = param1_val * items[3].params[0].weight;
                kama_weight_fiksator_gnu = f3 * kama_const_fiksator_gnu;
                kama_weight_mob_anker =
                  items[3].params[2].weight * (param3_val + 1) +
                  $('input[name="yn"]:checked').data("weight");
                if (param2_val == 0) {
                  kama_weight_mob_ferma = 0;
                  kama_weight_krepy_ferma = 0;
                } else {
                  kama_weight_mob_ferma =
                    $('input[name="size"]:checked').data("weight") * p2f;
                  kama_weight_krepy_ferma = kama_const_krepy_ferma * parseInt(p2f + 1);
                }
                kama_weight_krepy = kama_const_krepy * (param1_val / 3);

                kama_weight =
                  kama_weight_tros +
                  kama_weight_fiksator_gnu +
                  kama_const_ogran_hod +
                  kama_weight_mob_anker +
                  kama_const_info +
                  kama_weight_krepy +
                  kama_weight_mob_ferma +
                  kama_weight_krepy_ferma;

                var res =
                  "/pdf/?type=7&p1=" +
                  param1_val +
                  "&p2=" +
                  f3 +
                  "&p3=" +
                  p2f +
                  "&p4=" +
                  parseInt(p2f + 1) +
                  "&p5=" +
                  (param3_val + 1 + f4) +
                  "&p6=" +
                  param1_val / 3 +
                  "&ferm=" +
                  param2_val +
                  "&elm=" +
                  param5_val +
                  "&sum=" +
                  sum +
                  "&w1=" +
                  kama_weight_tros.toFixed(1) +
                  "&w2=" +
                  kama_weight_fiksator_gnu.toFixed(1) +
                  "&w3=" +
                  kama_const_ogran_hod.toFixed(1) +
                  "&w4=" +
                  kama_weight_mob_anker.toFixed(1) +
                  "&w5=" +
                  kama_weight_krepy.toFixed(1) +
                  "&w6=" +
                  kama_weight_mob_ferma.toFixed(1) +
                  "&w7=" +
                  kama_weight_krepy_ferma.toFixed(1) +
                  "&w8=" +
                  kama_const_info.toFixed(1) +
                  "&ws=" +
                  kama_weight.toFixed(1);

                $(".btn-block a").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };
              $$.r.p19 = function () {
                $("#range2").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("i").html(v);
                  $(this).parent().find("input").val(v);
                  items[4].calc();
                });
                $("#range22k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $("#range2").val(v);
                    items[4].calc();
                  }
                });

                $('input[name="yn"]').on("change", function () {
                  items[4].calc();
                });
                $('input[name="yn3"]').on("change", function () {
                  items[4].calc();
                });
                $('input[name="yn4"]').on("change", function () {
                  items[4].calc();
                });
                $('input[name="yn5"]').on("change", function () {
                  items[4].calc();
                });
                $('input[name="yn6"]').on("change", function () {
                  items[4].calc();
                });

                items[4].calc();
              };
              $$.r.p20 = function () {
                var sum = items[4].price;

                var param3_val = $("#range2").val() - 1,
                  param3_sum = items[4].params[0].price;

                var p3 = param3_val * param3_sum;

                var param4_val = $('input[name="yn"]:checked').val();

                if (param3_val + 1 == $("#range2").attr("max")) {
                  $(".line-type:nth-child(2) .radio label:last-child input").trigger("click");
                  if ($(".msg").length == 0) {
                    $(".line-type:nth-child(2) .right").append(
                      '<p class="msg">Вы выбрали максимальное количество мобильных анкерных точек.</p>'
                    );
                  }

                  $('input[name="yn"]').attr("disabled", true);
                } else {
                  $('input[name="yn"]').attr("disabled", false);
                  $(".msg").remove();
                }

                var p4 = parseInt(param4_val);

                var f1 = "";
                var f2 = "-";
                var f3 = "-";
                var f4 = "-";
                var f5 = param3_val + 1;
                var f6 = "";
                var f7 = "";

                var p5 = 0;
                $('input[type="checkbox"]:checked').each(function (k, v) {
                  p5 = p5 + parseInt($(v).val());

                  if (parseInt($(v).val()) == items[4].params[2].values[0].price) {
                    f2 = 1;
                  }
                  if (parseInt($(v).val()) == items[4].params[2].values[1].price) {
                    f4 = 1;
                  }
                  /*if (parseInt($(v).val()) == items[4].params[2].values[2].price) {
                          f4 = 1;
                      }*/
                });

                var p6 = $('input[name="yn4"]:checked').val();

                sum = sum + p3 + p4 + p5 + parseInt(p6);

                if (p6 != 0) {
                  f1 = 1;
                }
                if (param4_val != 0) {
                  f5 = f5 + 1;
                }
                if ($('input[name="yn5"]:checked').length == 1) {
                  f6 = "1";
                }
                if ($('input[name="yn6"]:checked').length == 1) {
                  f7 = "1";
                  sum = sum * 1.15;
                }

                $('input[name="yn5"]:checked').length;
                $('input[name="yn6"]').on("change", function () {
                  //sum = sum * 1.15;
                  items[4].calc();
                });

                var res =
                  "/pdf/?type=8&p1=" +
                  f1 +
                  "&p2=" +
                  f2 +
                  "&p3=" +
                  f3 +
                  "&p4=" +
                  f4 +
                  "&p5=" +
                  f5 +
                  "&p6=" +
                  f6 +
                  "&p7=" +
                  f7 +
                  "&sum=" +
                  sum;

                $(".btn-block a").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };

              $$.r.p23 = function () {
                $("#range").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[6].calc();
                });
                $("#range2k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $(this).parent().find("i").html(v);
                    $("#range").val(v);
                    items[6].calc();
                  }
                });
                $('input[name="n_profil"]').on("change", function () {
                  items[6].calc();
                });
                $("#range2").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[6].calc();
                });
                $("#range22k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $(this).parent().find("i").html(v);
                    $("#range2").val(v);
                    items[6].calc();
                  }
                });
                $('input[name="dop_tochki"]').on("change", function () {
                  items[6].calc();
                });
                $("#range3").on("input change", function () {
                  var v = $(this).val();
                  $(this).parent().find("input").val(v);
                  $(this).parent().find("i").html(v);
                  items[6].calc();
                });
                $("#range32k").on("input change", function () {
                  var v = $(this).val();
                  if (v != "") {
                    $(this).parent().find("i").html(v);
                    $("#range3").val(v);
                    items[6].calc();
                  }
                });
                $('input[name="povorot"]').on("change", function () {
                  items[6].calc();
                });
                $("#wht1").on("input change", function () {
                  items[6].calc();
                });
                $("#wht2").on("input change", function () {
                  items[6].calc();
                });
                items[6].calc();
              };

              $$.r.p24 = function () {
                st_const_pr_kr = 0.45;
                st_const_soed_kr = 0.83;

                var sum = items[6].price;

                var length_lin = $("#range").val();

                var p1 = (length_lin - 3) * parseInt(items[6].params[0].price);

                var p3 = ($("#range2").val() - 1) * items[6].params[2].price;

                var p4 = parseInt($('input[name="dop_tochki"]:checked').val());

                var p5 = $("#range3").val() * parseInt(items[6].params[4].price);
                var st_wht_povorot_pr = $("#range3").val() * items[6].params[4].weight;

                var p6 = parseInt($('input[name="povorot"]:checked').val());

                if ($('input[name="dop_tochki"]:checked').val() == 0) {
                  var st_cnt_mobt = $("#range2").val();
                  var st_wht_mobt = $("#range2").val() * items[6].params[2].weight;
                } else {
                  var st_cnt_mobt = parseInt($("#range2").val()) + 1;
                  var st_wht_mobt =
                    $("#range2").val() * items[6].params[2].weight +
                    $('input[name="dop_tochki"]:checked').data("weight");
                }

                if ($('input[name="n_profil"]:checked').val() == 0) {
                  var n_profil_cnt = 0;
                  var p1_kr = length_lin * parseInt(items[6].params[0].price_kr);
                  var p2_kr = 0;

                  var cnt_3lin = Math.floor(length_lin / 3) + 2;
                  var cnt_soed = Math.ceil(length_lin / 3) - 1;

                  st_wh_pr_kr = cnt_3lin * st_const_pr_kr;
                  st_wh_s_kr = cnt_soed * st_const_soed_kr;

                  st_kr_cnt = length_lin;
                  st_kr_wht = st_kr_cnt * items[6].params[0].weight_kr;
                } else {
                  var n_profil_cnt = Math.ceil(length_lin / 6);
                  var p1_kr = 0;
                  var p2_kr = n_profil_cnt * parseInt(items[6].params[1].price_kr);

                  var cnt_3lin = 2;
                  var cnt_soed = Math.ceil(length_lin / 6) - 1;

                  st_wh_pr_kr = 2 * st_const_pr_kr;
                  st_wh_s_kr = cnt_soed * st_const_soed_kr;

                  st_kr_cnt = n_profil_cnt;
                  st_kr_wht = st_kr_cnt * items[6].params[1].weight_kr;
                }

                if ($('input[name="povorot"]:checked').val() == 0) {
                  var p2 =
                    Math.ceil(length_lin / 6) * $('input[name="n_profil"]:checked').val();
                  $('input[name="n_profil"]').prop("disabled", false);
                  $(".str_input").hide();
                  $("#wht1").val(0);
                  $("#wht2").val(0);
                  var p6_1 = 0;
                  var p6_2 = 0;
                  var st_cnt_povorot = 0;
                  var st_wht_povorot = 0;
                  var st_var_ogr_hod = 2;
                } else {
                  var p2 = 0;
                  $('input[name="n_profil"][value="0"]').trigger("click");
                  $('input[name="n_profil"]').prop("disabled", true);
                  $(".str_input").show();
                  $("#wht3").val(length_lin);
                  var p6_1 =
                    $("#wht1").val() * parseInt(items[6].params[0].price) +
                    $("#wht1").val() * parseInt(items[6].params[0].price_kr);
                  var p6_2 =
                    $("#wht2").val() * parseInt(items[6].params[0].price) +
                    $("#wht2").val() * parseInt(items[6].params[0].price_kr);

                  var cnt_3lin = Math.floor(length_lin / 3) + 2;
                  var cnt_soed = Math.ceil(length_lin / 3) - 1;

                  if ($("#wht1").val() > 0) {
                    var cnt_3lin_1 = Math.floor($("#wht1").val() / 3) + 2;
                    var cnt_soed_1 = Math.ceil($("#wht1").val() / 3) - 1;
                  } else {
                    var cnt_3lin_1 = 0;
                    var cnt_soed_1 = 0;
                  }
                  if ($("#wht2").val() > 0) {
                    var cnt_3lin_2 = Math.floor($("#wht2").val() / 3) + 2;
                    var cnt_soed_2 = Math.ceil($("#wht2").val() / 3) - 1;
                  } else {
                    var cnt_3lin_2 = 0;
                    var cnt_soed_2 = 0;
                  }

                  cnt_3lin = cnt_3lin + cnt_3lin_1 + cnt_3lin_2;
                  cnt_soed = cnt_soed + cnt_soed_1 + cnt_soed_2;

                  st_wh_pr_kr = cnt_3lin * st_const_pr_kr;
                  st_wh_s_kr = cnt_soed * st_const_soed_kr;

                  var st_cnt_povorot = 1;
                  var st_wht_povorot = $('input[name="povorot"]:checked').data("weight");

                  st_kr_cnt =
                    parseInt(length_lin) +
                    parseInt($("#wht1").val()) +
                    parseInt($("#wht2").val());
                  st_kr_wht = st_kr_cnt * items[6].params[0].weight_kr;

                  var st_var_ogr_hod = 3;
                }
                /*console.log('--');
                console.log(sum);
                console.log(p1);
                console.log(p1_kr);
                console.log(p2);
                console.log(p2_kr);
                console.log(p3);
                console.log(p4)
                console.log(p5);
                console.log(p6);
                console.log(p6_1);
                console.log(p6_2);
                console.log('--');*/
                sum = sum + p1 + p1_kr + p2 + p2_kr + p3 + p4 + p5 + p6 + p6_1 + p6_2;

                st_const_ogr_hod = st_var_ogr_hod * 0.1;
                st_const_info = 0.2;

                all_length =
                  parseInt(length_lin) +
                  parseInt($("#wht1").val()) +
                  parseInt($("#wht2").val());
                st_wh_1 = all_length * items[6].params[0].weight;
                st_wh_2 = n_profil_cnt * items[6].params[1].weight * 6;

                st_weight =
                  st_wh_1 +
                  st_wh_2 +
                  st_wh_pr_kr +
                  st_wh_s_kr +
                  st_const_ogr_hod +
                  st_wht_mobt +
                  st_wht_povorot_pr +
                  st_wht_povorot +
                  st_kr_wht +
                  st_const_info;
                /*
                en_const_kr_a = 3.7*2;
                en_const_nat = 4*0.6;
                en_const_info = 0.2;
                en_const_kompleck_kr = 2*0.54;
                don_weight_amort = amort*4.7;

                st_weight_p0 = lr*items[1].params[0].weight;
                en_weight_p1 = p2v*items[1].params[1].weight;
                en_weight_p2 = f3*items[1].params[2].weight;
                en_weight_p3 = f4*items[1].params[2].weight;

                don_weight = en_weight_p0+en_weight_p1+en_weight_p2+en_weight_p3+en_const_kr_a+en_const_nat+en_const_info+en_const_kompleck_kr+don_weight_amort;*/

                //toFixed(1)
                var res =
                  "/pdf/?type=10&p1=" +
                  all_length +
                  "&p2=" +
                  n_profil_cnt +
                  "&sum=" +
                  sum +
                  "&w1=" +
                  st_wh_1.toFixed(1) +
                  "&w2=" +
                  st_wh_2.toFixed(1) +
                  "&w3_c=" +
                  cnt_3lin +
                  "&w3=" +
                  st_wh_pr_kr.toFixed(1) +
                  "&w4_c=" +
                  cnt_soed +
                  "&w4=" +
                  st_wh_s_kr.toFixed(1) +
                  "&w5_c=" +
                  st_var_ogr_hod +
                  "&w5=" +
                  st_const_ogr_hod.toFixed(1) +
                  "&w6_c=" +
                  st_cnt_mobt +
                  "&w6=" +
                  st_wht_mobt.toFixed(1) +
                  "&w7_c=" +
                  $("#range3").val() +
                  "&w7=" +
                  st_wht_povorot_pr.toFixed(1) +
                  "&w8_c=" +
                  st_cnt_povorot +
                  "&w8=" +
                  st_wht_povorot.toFixed(1) +
                  "&w9_c=" +
                  st_kr_cnt +
                  "&w9=" +
                  st_kr_wht.toFixed(1) +
                  "&w10=" +
                  st_const_info +
                  "&ws=" +
                  st_weight;
                // var res = '/pdf/?type=7&p1='+lr+'&p2='+p2v+'&p3='+f3+'&p4='+f4+'&p5='+amort+'&sum='+sum+'&w1='+en_weight_p0.toFixed(1)+'&w2='+en_const_kr_a.toFixed(1)+'&w3='+en_weight_p1.toFixed(1)+'&w4='+en_weight_p2.toFixed(1)+'&w5='+en_const_nat.toFixed(1)+'&w6='+don_weight_amort.toFixed(1)+'&w7='+en_weight_p3.toFixed(1)+'&w8='+en_const_kompleck_kr.toFixed(1)+'&w9='+en_const_info.toFixed(1)+'&ws='+don_weight.toFixed(1);

                $(".btn-block a").attr("href", res);

                $(".sum").html(sum.format(2, 3, " ", ","));
              };

              function closeCookies(event) {
                event.preventDefault();
                document.cookie =
                  "cookies_accepted=1; path=/; max-age=31536000; SameSite=Lax";
                event.target.closest(".cookies__info").remove();
              }


              var links = [
                {
                  id: 4239,
                  con: 'Одним из самых популярных СИЗ [&hellip;]',
                  link: 'https://smkis.ru/glossarij/klassifikacija-ankernyh-linij/'
                },


                {
                  id: 4237,
                  con: 'Анкерное устройство — один из [&hellip;]',
                  link: 'https://smkis.ru/glossarij/vidy-ankernyh-ustrojstv-dlja-raboty-na-vysote/'
                },


                {
                  id: 3254,
                  con: 'Одним из способов обеспечения безопасности [&hellip;]',
                  link: 'https://smkis.ru/glossarij/vybor-ankernogo-ustrojstva-dlja-krovli/'
                },


                {
                  id: 3216,
                  con: 'Факт проведения периодических проверок СИЗ от [&hellip;]',
                  link: 'https://smkis.ru/glossarij/formuljar-siz/'
                },


                {
                  id: 2907,
                  con: 'Реальный опыт организации мероприятий по [&hellip;]',
                  link: 'https://smkis.ru/glossarij/bezopasnyj-podem-na-vysotu/'
                },


                {
                  id: 2775,
                  con: 'Согласно требованиям компании ООО СМК [&hellip;]',
                  link: 'https://smkis.ru/glossarij/otvetstvennyj-za-periodicheskuju-proverku-ankernyh-ustrojstv/'
                },


                {
                  id: 1915,
                  con: 'Под гибкими анкерными линиями понимают [&hellip;]',
                  link: 'https://smkis.ru/glossarij/gibkaja-ankernaja-linija-gal/'
                },


                {
                  id: 1861,
                  con: 'Жесткая анкерная линия [ЖАЛ]. Виды жестких анкерных линий. Область применения жестких вертикальных и горизонтальных анкерных линий, в каких случаях лучше применять жесткие анкерные линии.<br>',
                  link: 'https://smkis.ru/glossarij/zhestkaja-ankernaja-linija-zhal/'
                },


                {
                  id: 1828,
                  con: 'Анкерное устройство (anchor device) &#8212; [&hellip;]',
                  link: 'https://smkis.ru/glossarij/chto-vhodit-v-sostav-ankernyh-ustrojstv/'
                },


                {
                  id: 1695,
                  con: 'Анкерные устройства являются обязательным компонентом [&hellip;]',
                  link: 'https://smkis.ru/glossarij/klassy-ankernyh-ustrojstv/'
                },


                {
                  id: 1297,
                  con: 'Для организации эвакуации с высоты необходимы дополнительные анкерные точки, которые помогут спасателям закрепить на них дополнительное СИЗ от падения с высоты для проведения работ по спасению зависшего работника.',
                  link: 'https://smkis.ru/glossarij/dopolnitelnye-ankernye-tochki/'
                },


                {
                  id: 1295,
                  con: 'Количество промежуточных анкерных точек зависит от длины линии, запаса высоты, места её установки и схемы эвакуации работника при его срыве в без опорное пространство.',
                  link: 'https://smkis.ru/glossarij/kak-rasschitat-kolichestvo-promezhutochnyh-ankernyh-tochek/'
                },


                {
                  id: 1293,
                  con: 'При расчёте длины анкерной линии необходимо учитывать границы рабочей зоны, а также состояние несущих конструкций здания и сооружения.',
                  link: 'https://smkis.ru/glossarij/kak-rasschitat-dlinu-ankernoj-linii/'
                },


                {
                  id: 1059,
                  con: 'Тип анкерной линии выбирается исходя из отчёта об оценке рисков, руководствуясь следующими параметрами:<br>1. Длина анкерной линии.<br>2. Расчёт запаса высоты.<br>3. Фактор падения.<br>4. Количество одновременно работающих сотрудников на одной линии.',
                  link: 'https://smkis.ru/glossarij/kak-vybrat-tip-ankernoj-linii/'
                },


              ];


              $(document).ready(function () {


                $('.op-win').each(function (k, v) {
                  var id = $(v).data('id');


                  $.each(links, function (k, v) {
                    if (v.id == id) {
                      $('.op-win-con[data-id="' + id + '"] .con-r').html(v.con);
                      $('.op-win-con[data-id="' + id + '"] .link-r').attr('href', v.link).attr('target', '_blank')
                    }
                  });
                });


              });

              Number.prototype.format = function (n, x, s, c) {
                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
                  num = this.toFixed(Math.max(0, ~~n));

                return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
              };


              var items = [
                {
                  name: 'Анкерная линия ДОН',
                  url: 'https://smkis.ru/wp-content/uploads/2019/03/fulldon.jpg',

                  func: $$.r.p11,
                  calc: $$.r.p12,
                  includes: '<ul><li>Концевые крепления (концевой анкер)</li> <li>Амортизатор</li> <li>Натяжители</li> <li>Мобильная анкерная точка</li> <li>Трос по длине линии</li> <li>Комплект пресс крепления</li> <li>Информационная табличка</li></ul>',
                  price: 22239,
                  weight: 8.44,
                  params: [
                    {
                      id: 'range',
                      name: 'Длина анкерной линии',
                      type: 'width',
                      price: 540,
                      weight: 0.25,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 5,
                      widthTitle: 'м',
                      widthEnd: 240,
                      desc: '<p>Максимальная длина линии по Инструкции эксплуатации не должна быть более 100м. Если требуется оборудовать участок более 100м, рассчитайте несколько линий, либо оставьте заявку на расчет.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1293">Как рассчитать длину тросовой анкерной линии</a> <div class="op-win-con" data-id="1293"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/hc1001.jpg',
                      altimg: 'Трос 8мм НС 1001'
                    },
                    {
                      name: 'Выберите мобильную точку крепления',
                      type: 'radio2',
                      price: 4950,
                      weight: 0.3,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn4',
                      values: [
                        {
                          name: 'Крепление на уровне ног и груди',
                          price: 4950,
                          weight: 0.3,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/mob_point.jpg',
                          altimg: 'Мобильная точка крепления 12fp НС 1010',
                          current: true
                        },
                        {
                          name: 'Крепление над головой',
                          price: 17730,
                          weight: 1.3,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/01fp.jpg',
                          altimg: 'Мобильная точка крепления 01fp HC 1011',
                          current: false
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>Количество одновременно застрахованных на одной линии должно быть не более 4-х человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/mob_point.jpg',
                      altimg: 'Мобильная точка крепления 12fp НС 1010'
                    },
                    {
                      name: 'Выберете амортизатор энергии',
                      type: 'radio',
                      price: 18400,
                      weight: 3.9,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn33',
                      values: [
                        {
                          name: 'Открытый',
                          price: 8550,
                          weight: 2.4,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/disposable.jpg',
                          altimg: 'Амортизатор НС 1009',
                          current: false
                        },
                        {
                          name: 'Закрытый',
                          price: 18400,
                          weight: 3.9,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/reusable.jpg',
                          altimg: 'Амортизатор НС 1008',
                          current: true
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>Амортизаторы НС 1008 и НС 1009 в составе анкерной линии ДОН являются одновременно динамическими натяжителями и поглотителями энергии.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/reusable.jpg',
                      altimg: 'Амортизатор НС 1008'
                    },
                    {
                      id: 's1',
                      name: 'Количество промежуточных креплений',
                      type: 'width',
                      price: 5013,
                      weight: 0.4,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 0,
                      widthEnd: 32,
                      widthTitle: '',
                      desc: '<p>Рекомендованное расстояние между креплениями от 5 до 12 м. Для кровли максимальное расстояние 8 метров.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1295">Как правильно выбрать точки для крепления</a>                                     <div class="op-win-con" data-id="1295">                                         <p class="con-r"></p>                                         <p><a class="link-r" href="">Подробнее</a></p>                                     </div> </div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/hc1014.jpg',
                      altimg: 'Прмежуточный анкер НС 1014'
                    },
                    {
                      name: 'Количество поворотных креплений',
                      type: 'select',
                      id: 's3',
                      price: 16200,
                      weight: 2.7,
                      priceGet: 1,
                      priceType: 'select',
                      widthStart: 0,
                      inputName: 'type',
                      widthEnd: 4,
                      widthTitle: '',
                      desc: '<p>В местах изгиба линии устанавливается крепление</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/pov_krep.jpg',
                      altimg: 'Поворотное крепление'
                    },
                    {
                      name: 'Требуются ли дополнительные точки для эвакуации',
                      type: 'radio',
                      price: 3555,
                      weight: 0.4,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn',
                      values: [
                        {
                          name: 'Да',
                          price: 3555,
                          weight: 0.4,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/tocka_e.jpg',
                          altimg: 'Анкерная точка YUNTA НС 0002',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>Интегрируйте анкерные точки для спасательно-эвакуационных работ на этапе проектирования и монтажа. Это позволит сэкономить на покупке анкерных устройств, предназначенных для эвакуации работника при срыве.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1297">Как проводить эвакуацию работника при срыве</a> <div class="op-win-con" data-id="1297"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    /*{
                                            id: 's2',
                                            name: 'Выберите мобильную точку крепления',
                                            type: 'select',
                                            price: 4950,
                                            priceGet: 1,
                                            priceType: 'select',
                                            widthStart: 1,
                                            widthEnd: 4,
                                            widthTitle: '',
                                            desc: '<p>Количество одновременно застрахованных на одной линии должно быть не более 4-х человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/don/mob_point.jpg',
                      altimg: 'Мобильная точка крепления 12fp НС 1010'
                                        },*/
                    {
                      name: 'Тип поверхности для установки',
                      type: 'radio',
                      price: 0,
                      weight: 0,
                      priceGet: 1,
                      inputName: 'yn2',
                      label: '',
                      priceType: 'radio',
                      values: [
                        {name: 'Фальцевая кровля', price: 30465, weight: 4.8, current: false},
                        {name: 'Профлист', price: 21105, weight: 4.8, current: false},
                        {name: 'Плоская кровля', price: 16740, price2: 20430, weight: 3.6, weight2: 7, current: false},
                        {name: 'Стена', price: 0, weight: 0, current: true}
                      ],
                      widthTitle: '',
                      desc: ''
                    }
                  ]
                },
                {
                  name: 'Анкерная линия ЕНИСЕЙ',
                  url: 'https://smkis.ru/wp-content/uploads/2019/04/enisei-1024-656.png',
                  func: $$.r.p13,
                  calc: $$.r.p14,
                  includes: '<ul><li>Концевые крепления (концевой анкер)</li> <li>Амортизаторы</li> <li>Натяжители</li> <li>Мобильная анкерная точка</li> <li>Трос по длине линии</li> <li>Комплект пресс креплений</li> <li>Информационная табличка</li></ul>',
                  price: 121820,
                  price: 121820,
                  params: [
                    {
                      id: 'range',
                      name: 'Длина анкерной линии',
                      type: 'width',
                      price: 720,
                      weight: 0.25,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 5,
                      widthEnd: 240,
                      widthTitle: 'м',
                      desc: '<p>Максимальная длина линии по Инструкции эксплуатации не должна быть более 100м. За счет особенностей конструкции двутросовой анкерной линии Енисей длина троса равна удвоенной длине линии. Если требуется оборудовать участок более 100м, рассчитайте несколько линий, либо оставьте заявку на расчет.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1293">Как рассчитать длину тросовой анкерной линии</a> <div class="op-win-con" data-id="1293"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/enisei/hc1001.jpg',
                      altimg: 'Трос 8мм НС 1001'
                    },
                    {
                      id: 's1',
                      name: 'Количество промежуточных креплений',
                      type: 'width',
                      price: 9000,
                      weight: 0.53,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 0,
                      widthEnd: 18,
                      widthTitle: '',
                      desc: '<p>Рекомендованное расстояние между креплениями от 6 до 14 м. Максимальное расстояние 14 метров.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1295">Как правильно выбрать точки для крепления</a> <div class="op-win-con" data-id="1295"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/enisei/hc2014.jpg',
                      altimg: 'Промежуточный анкер НС 2014'
                    },
                    {
                      id: 's2',
                      name: 'Количество мобильных анкерных точек',
                      type: 'select',
                      price: 16500,
                      weight: 1.2,
                      priceGet: 1,
                      priceType: 'select',
                      widthStart: 1,
                      widthEnd: 4,
                      widthTitle: '',
                      desc: '<p>Количество одновременно застрахованных на одной линии должно быть не более 4-х человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/enisei/hc2022.jpg',
                      altimg: 'Мобильная точка крепления НС 2022'
                    },
                    {
                      name: 'Требуются ли дополнительные точки для эвакуации',
                      type: 'radio',
                      price: 16500,
                      weight: 1.2,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inf: 'Вы выбрали максимальное количество мобильных анкерных точек.',
                      inputName: 'yn',
                      values: [
                        {
                          name: 'Да',
                          price: 16500,
                          weight: 1.2,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/enisei/hc2022.jpg',
                          altimg: 'Мобильная точка крепления НС 2022',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>На этапе проектирования и монтажа мы можем интегрировать компоненты спасательно-эвакуационной системы в страховочную. Предприятие экономит на покупке дополнительных анкерных устройств, предназначенных для эвакуации работника при срыве.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1297">Как проводить эвакуацию работника при срыве</a> <div class="op-win-con" data-id="1297"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Элемент крепления',
                      type: 'radio',
                      price: '',
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn2',
                      values: [
                        /*{name: 'Нет', price: 0, current: true},*/
                        {name: 'Анкерное или болтовое соединение', price: 1500, current: true},
                        {name: 'Обжим', price: 4000}
                      ],
                      widthTitle: '',
                      desc: ''
                    }
                  ]
                },
                {
                  name: 'Анкерная линия ВИРА',
                  url: 'https://smkis.ru/wp-content/uploads/2019/08/vertikalnaya_ankernaya_liniya_VIRA.png',
                  includes: '',
                  price: '',
                  func: $$.r.p15,
                  calc: $$.r.p16,
                  params: [
                    {
                      id: 'range',
                      name: '',
                      type: 'width',
                      price: '',
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 5,
                      widthTitle: 'м',
                      widthEnd: 200,
                      desc: '',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc1001.jpg',
                      altimg: 'Трос 8мм НС 1001'
                    },
                    {
                      id: 's1',
                      name: '',
                      type: 'width',
                      price: '',
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 0,
                      widthEnd: 30,
                      widthTitle: '',
                      desc: '',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6003.jpg',
                      altimg: 'Направляющая НС 6003'
                    },
                    {
                      name: '',
                      type: 'radio',
                      price: '',
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn3',
                      values: [
                        {
                          name: 'С удлинителем',
                          price: '',
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6002.jpg',
                          altimg: 'Верхний кронштейн НС 6002',
                          current: true
                        },
                        {
                          name: 'Без удлинителя',
                          price: '',
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6001.jpg',
                          altimg: 'Концевой кронштейн НС 6001',
                          current: false
                        }
                      ],
                      widthTitle: '',
                      desc: '',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6002.jpg',
                      altimg: 'Верхний кронштейн НС 6002'
                    },
                    {
                      id: 's2',
                      name: '',
                      type: 'select2',
                      price: '',
                      priceGet: 1,
                      priceType: 'select2',
                      label: '',
                      widthStart: 0,
                      widthEnd: 4,
                      widthTitle: '',
                      inputName: 'q',
                      values: [
                        {
                          name: 'Без средства защиты ползункового типа',
                          price: '',
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        },
                        {
                          name: 'Со средством защиты ползункового типа',
                          price: '',
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6008.jpg',
                          altimg: 'Устройство защиты ползункового типа НС 6008',
                          current: false
                        },
                        /*{name: 'Со средством защиты ползункового типа с амортизатором', price: , current: false}*/
                      ],
                      desc: '',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    }

                  ]
                },
                {
                  name: 'Анкерная линия КАМА',
                  url: 'https://smkis.ru/wp-content/uploads/2019/04/kama_1-1024x576.png',
                  includes: '<ul><li>Направляющий алюминиевый профиль</li> <li>Мобильная анкерная точка</li> <li>Ограничительные стопоры</li> <li>Элементы крепления, пластина</li> <li>Комплект креплений</li> <li>Информационная табличка</li></ul>',
                  price: 38700,
                  price_krepy: 2907,
                  func: $$.r.p17,
                  calc: $$.r.p18,
                  params: [
                    {
                      id: 'range',
                      name: 'Длина анкерной линии',
                      type: 'width',
                      price: '3500',
                      weight: 2.1,
                      priceGet: 3,
                      priceType: 'line',
                      widthStart: 3,
                      step: 3,
                      widthEnd: 100,
                      widthTitle: 'м',
                      desc: '<p>Максимальная длина линии не ограничена. *Если необходима длина линии более 200 метров, запросите технико-коммерческое предложение, для этого воспользуйтесь формой ниже.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1293">Как рассчитать длину тросовой анкерной линии</a> <div class="op-win-con" data-id="1293"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/kama/profil.jpg',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Монтажная ферма',
                      type: 'radio',
                      price: '45000',
                      weight: 77.6,
                      priceGet: 1,
                      priceType: 'radio',
                      widthStart: 6,
                      widthEnd: 12,
                      inputName: 'size',
                      widthTitle: '',
                      label: 'Включить в комплектацию пространственную монтажную ферму',
                      values: [
                        {
                          name: 'Да',
                          price: 27082,
                          weight: 77.6,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ferma.jpg',
                          altimg: '&nbsp;',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      desc: '<p>Промежуточные крепления в анкерной линии КАМА необходимо устанавливать через каждый метр. Если нет такой возможности, включите в комплектацию Пространственная монтажная ферма. Она позволяет устанавливать промежуточные крепления Анкерной линии через каждый метр, в тех местах, где отсутствует возможность их установки.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1295">Как правильно выбрать точки для крепления</a> <div class="op-win-con" data-id="1295"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      id: 'range2',
                      name: 'Количество мобильных анкерных точек',
                      type: 'width',
                      price: '16500',
                      weight: 1,
                      priceGet: 1,
                      priceType: 'width',
                      widthStart: 1,
                      step: 1,
                      widthEnd: 4,
                      widthTitle: '',
                      desc: '<p>Количество одновременно застрахованных на участке линии длиной 3 метра должно быть не более 4-х человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ankr_kama.jpg',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Требуются ли дополнительные точки для эвакуации',
                      type: 'radio',
                      price: '16500',
                      weight: 1,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn',
                      values: [
                        {
                          name: 'Да',
                          price: 15663,
                          weight: 1,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/kama/ankr_kama.jpg',
                          altimg: '&nbsp;',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>На этапе проектирования и монтажа мы можем интегрировать компоненты спасательно-эвакуационной системы в страховочную. Предприятие экономит на покупке дополнительных анкерных устройств, предназначенных для эвакуации работника при срыве.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1297">Как проводить эвакуацию работника при срыве</a> <div class="op-win-con" data-id="1297"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Элемент крепления фермы',
                      type: 'radio',
                      price: '0',
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn2',
                      values: [
                        /*{name: 'Нет', price: 0, current: true},*/
                        {name: 'Анкерное или болтовое соединение', price: 10000},
                        {name: 'Обжим', price: 10000, current: true}
                      ],
                      widthTitle: '',
                      desc: ''
                    }
                  ]
                },
                {

                  name: 'Опорная конструкция ЛАДОГА',
                  url: 'https://smkis.ru/wp-content/uploads/2019/04/Ладога-1024x576.png',
                  includes: '<ul><li>Опорная конструкция</li> <li>Пространственная монтажная ферма</li> <li>Анкерная линия «Кама»</li> <li>Мобильная анкерная точка</li> <li>Комплект креплений</li> <li>Информационная табличка</li></ul>',
                  price: 1130000,
                  func: $$.r.p19,
                  calc: $$.r.p20,
                  params: [
                    {
                      id: 'range2',
                      name: 'Количество мобильных анкерных точек',
                      type: 'width',
                      price: 21450,
                      priceGet: 1,
                      priceType: 'width',
                      widthStart: 1,
                      step: 1,
                      widthEnd: 4,
                      widthTitle: '',
                      desc: '<p>Количество одновременно застрахованных на одной линии должно быть не более 4-х человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/ladoga/ankr_kama.jpg',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Требуются ли дополнительные точки для эвакуации',
                      type: 'radio',
                      price: 21450,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn',
                      values: [
                        {
                          name: 'Да',
                          price: 21450,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/ladoga/ankr_kama.jpg',
                          altimg: '&nbsp;',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>На этапе проектирования и монтажа мы можем интегрировать компоненты спасательно-эвакуационной системы в страховочную. Предприятие экономит на покупке дополнительных анкерных устройств, предназначенных для эвакуации работника при срыве.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1297">Как проводить эвакуацию работника при срыве</a> <div class="op-win-con" data-id="1297"> <div class="close"></div> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      name: 'Дополнительная комплектация',
                      type: 'cho',
                      price: 710000,
                      priceGet: 1,
                      label: '',
                      priceType: 'cho',
                      inputName: 'yn3',
                      values: [
                        {name: 'Откидной мостик', price: 710000, current: false},
                        {name: 'Покраска в корпоративный цвет', price: 224200, current: false},
                      ],
                      widthTitle: '',
                      desc: ''
                    },

                    {
                      name: 'Блок противовес ФБС',
                      type: 'radio',
                      price: 51000,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn4',
                      values: [
                        {name: 'Да', price: 51000, current: false},
                        {name: 'Нет', price: 0, current: true}
                      ],
                      widthTitle: '',
                      desc: '<p>Вы можете самостоятельно приобрести и установить противовесный блок ФБС.</p> <p>Вес блока должен быть от 1 000 до 1 300 килограмм.</p>'
                    },

                    {
                      name: 'Доставка',
                      type: 'cho',
                      price: 70000,
                      priceGet: 1,
                      label: '',
                      priceType: 'cho',
                      inputName: 'yn5',
                      values: [
                        {name: 'Да', price: 70000, current: false}
                      ],
                      widthTitle: '',
                      desc: '<p>Увеличивает стоимость конструкции на 10%.</p> <p>Услуга действует при доставке конструкции в регионы РФ до Урала, на более длинные расстояния доставка рассчитывается индивидуально.</p>'
                    },

                    {
                      name: 'Сборка',
                      type: 'cho',
                      price: 0,
                      priceGet: 1,
                      label: '',
                      priceType: 'cho',
                      inputName: 'yn6',
                      values: [
                        {name: 'Да', price: 0, current: false}
                      ],
                      widthTitle: '',
                      desc: '<p>Сборка конструкции увеличивает ее стоимость от 10% до 15% в зависимости от региона.</p>'
                    }


                  ]
                },
                {
                  name: 'Анкерная линия VIRA',
                  url: 'https://smkis.ru/wp-content/uploads/vertikalnaya_ankernaya_liniya_VIRA2.png',
                  includes: '<ul><li>Концевое крепление (кронштейн)</li> <li>Амортизатор</li> <li>Устройство натяжения (талреп)</li> <li>Трос по длине линии</li> <li>Комплект пресс креплений</li> <li>Информационная табличка</li></ul>',
                  price: 36590,
                  func: $$.r.p21,
                  calc: $$.r.p22,
                  params: [
                    {
                      id: 'range',
                      name: 'Длина анкерной линии',
                      type: 'width',
                      price: 720,
                      weight: 0.25,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 5,
                      widthTitle: 'м',
                      widthEnd: 200,
                      desc: '<p>Максимальная длина линии по Инструкции эксплуатации не должна быть более 200м. Если требуется оборудовать участок более 200м, рассчитайте несколько линий, либо оставьте заявку на расчет.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1293">Как рассчитать длину тросовой анкерной линии</a> <div class="op-win-con" data-id="1293"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc1001.jpg',
                      altimg: 'Трос 8мм НС 1001'
                    },
                    {
                      id: 's1',
                      name: 'Количество промежуточных креплений',
                      type: 'width',
                      price: 4970,
                      weight: 0.8,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 0,
                      widthEnd: 30,
                      widthTitle: '',
                      desc: '<p>Максимальное расстояние между промежуточными направляющими точками 10 метров.</p> <div class="hover-rt"><a href="#" class="op-win" data-id="1295">Как правильно выбрать точки для крепления</a> <div class="op-win-con" data-id="1295"> <p class="con-r"></p> <p><a class="link-r" href="">Подробнее</a></p> </div></div>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6003.jpg',
                      altimg: 'Направляющая НС 6003'
                    },
                    {
                      name: 'Выберете верхний кронштейн',
                      type: 'radio',
                      price: 9800,
                      weight: 6.8,
                      priceGet: 1,
                      label: '',
                      priceType: 'radio',
                      inputName: 'yn3',
                      values: [
                        {
                          name: 'С удлинителем',
                          price: 9800,
                          weight: 6.8,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6002.jpg',
                          altimg: 'Верхний кронштейн НС 6002',
                          current: true
                        },
                        {
                          name: 'Без удлинителя',
                          price: 5970,
                          weight: 1.9,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6001.jpg',
                          altimg: 'Концевой кронштейн НС 6001',
                          current: false
                        }
                      ],
                      widthTitle: '',
                      desc: '<p>Верхний кронштейн, на удлинителе, необходим в случае, если лестница заканчивается под козырьком кровли и не позволяет безопасно осуществить выход на кровлю.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6002.jpg',
                      altimg: 'Верхний кронштейн НС 6002'
                    },
                    {
                      id: 's2',
                      name: 'Количество средств защиты ползункового типа',
                      type: 'select2',
                      price: 0,
                      weight: 0,
                      priceGet: 1,
                      priceType: 'select2',
                      label: '',
                      widthStart: 0,
                      widthEnd: 4,
                      widthTitle: '',
                      inputName: 'q',
                      values: [
                        {
                          name: 'Без средства защиты ползункового типа',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        },
                        {
                          name: 'Со средством защиты ползункового типа',
                          price: 12000,
                          weight: 0.5,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/vira/hc6008.jpg',
                          altimg: 'Устройство защиты ползункового типа НС 6008',
                          current: false
                        },
                        /*{name: 'Со средством защиты ползункового типа с амортизатором', price: 20177, current: false}*/
                      ],
                      desc: '<p>Вы можете приобрести средства защиты ползункового типа для каждого пользователя системой. Важно! Количество одновременно застрахованных на одной линии не должно превышать более 1-го человека, только после отсоединения от линии предыдущих пользователей, следующие могут начинать подъем.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    }

                  ]
                },
                {
                  name: 'Анкерная линия STREAM',
                  url: 'https://smkis.ru/wp-content/uploads/stream/stream.png',
                  includes: '<ul><li>Направляющий профиль 3м</li> <li>Промежуточные кронштейны</li> <li>Ограничители хода</li> <li>Мобильная точка крепления</li> <li>Комплект креплений</li> <li>Информационная табличка</li></ul>',
                  price: 31990,
                  func: $$.r.p23,
                  calc: $$.r.p24,
                  params: [
                    {
                      id: 'range',
                      name: 'Длина анкерной линии',
                      type: 'width',
                      price: '5150',
                      price_kr: '1050',
                      weight: 1.8,
                      weight_kr: 0.2,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 3,
                      widthEnd: 200,
                      widthTitle: 'м',
                      desc: '<p>Максимальная длина линии не ограничена.</p> <p>*Если необходима длина линии более 200 метров, запросите технико-коммерческое предложение, для этого воспользуйтесь формой ниже.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3303.png',
                      altimg: 'НС 3303'
                    },
                    {
                      name: 'Несущий профиль',
                      type: 'radio',
                      price: '23890',
                      price_kr: '1575',
                      weight: 3.6,
                      weight_kr: 0.5,
                      priceGet: 1,
                      priceType: 'radio',
                      inputName: 'n_profil',
                      widthTitle: '',
                      label: '',
                      values: [
                        {
                          name: 'Да',
                          price: 23890,
                          weight: 3.6,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3310.png',
                          altimg: 'НС 3310',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      desc: '<p>Крепление анкерной линии STREAM должно осуществляться через каждые 1,5 метра. Силовой профиль необходим для установки анкерной линии на больших пролетах с расстоянием между ближайшими креплениями более 1,5 метра.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      id: 'range2',
                      name: 'Мобильная точка крепления',
                      type: 'width',
                      price: '13340',
                      weight: 0.54,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 1,
                      step: 1,
                      widthEnd: 7,
                      widthTitle: '',
                      desc: '<p>Количество одновременно застрахованных не должно превышать 7 человек.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3301.png',
                      altimg: 'НС 3301'
                    },
                    {
                      name: 'Требуются ли дополнительные точки для эвакуации',
                      type: 'radio',
                      price: '13340',
                      weight: 0.54,
                      priceGet: 1,
                      priceType: 'radio',
                      inputName: 'dop_tochki',
                      widthTitle: '',
                      label: '',
                      values: [
                        {
                          name: 'Да',
                          price: 13340,
                          weight: 0.54,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3301.png',
                          altimg: 'НС 3301',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      desc: '<p>На этапе проектирования и монтажа мы можем интегрировать компоненты спасательно-эвакуационной системы в страховочную. Предприятие экономит на покупке дополнительных анкерных устройств, предназначенных для эвакуации работника при срыве.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    },
                    {
                      id: 'range3',
                      name: 'Поворотный направляющий профиль',
                      type: 'width',
                      price: '35500',
                      weight: 5.58,
                      priceGet: 1,
                      priceType: 'line',
                      widthStart: 0,
                      step: 1,
                      widthEnd: 10,
                      widthTitle: '',
                      desc: '<p>Устанавливается в местах изгиба линии.</p>',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3307.png',
                      altimg: 'НС 3307'
                    },
                    {
                      name: 'Поворотный механизм',
                      type: 'radio3',
                      price: '31800',
                      weight: 3.05,
                      priceGet: 1,
                      priceType: 'radio',
                      inputName: 'povorot',
                      widthTitle: '',
                      label: '',
                      values: [
                        {
                          name: 'Да',
                          price: 31800,
                          weight: 3.05,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/stream/НС3309.png',
                          altimg: 'НС 3309',
                          current: false
                        },
                        {
                          name: 'Нет',
                          price: 0,
                          weight: 0,
                          img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                          altimg: '&nbsp;',
                          current: true
                        }
                      ],
                      desc: '',
                      img: 'https://smkis.ru/wp-content/themes/smkis/img/calc/none.png',
                      altimg: '&nbsp;'
                    }
                  ]
                }
              ];


              var select = '<select id="setItem">';
              $.each(items, function (k, v) {
                if (k != 2) {
                  select += '<option value="' + k + '">' + v.name + '</option>';
                }
              });
              select += '</select>';

              var current = window.location.hash;
              current = current.replace('#', '');


              $('.setItem').html(select);

              $('#setItem').change(function () {
                var val = $(this).val();
                set(val);

              });


              if (current != '') {
                $('#setItem').val(current);
                set(current);
              } else {
                set(0);
              }


              function set(val) {

                $('#image').attr('src', items[val].url);
                $('#includes').html(items[val].includes);
                var params = '';
                $.each(items[val].params, function (k, v) {

                  var right;

                  switch (v.type) {
                    case 'width':


                      right = '<div class="input-line">' +
                        '<div>' + v.widthStart + v.widthTitle + '</div>' +
                        '<div>' +
                        '<input type="range" ' +
                        'id="' + v.id + '" ' +
                        'name="range"' +
                        'min="' + v.widthStart + '"' +
                        'max="' + v.widthEnd + '"' +
                        'value="' + v.widthStart + '" step="' + v.step + '">' +
                        '<div class="value"> <i class="none">' + v.widthStart + '</i> <input class="calc_input" id="' + v.id + '2k" type="number" min="' + v.widthStart + '"' +
                        ' max="' + v.widthEnd + '"' +
                        'value="' + v.widthStart + '" step="' + v.step + '">' + v.widthTitle + '</div>' +
                        '</div>' +
                        '<div>' +
                        v.widthEnd + v.widthTitle +
                        '</div>' +
                        '</div>';
                      break;

                    case 'select':

                      var options = '',
                        i = v.widthStart;
                      while (i <= v.widthEnd) {
                        options += '<option value="' + i + '">' + i + ' ' + v.widthTitle + '</option>';
                        i++;
                      }
                      right = '<div class="select"><select id="' + v.id + '">' + options + '</select></div>';
                      break;

                    case 'radio':

                      var options = '';
                      var label = '';

                      if (v.label != '') {
                        label = '<div><b>' + v.label + '</b></div>';
                      }

                      $.each(v.values, function (k, v2) {
                        if (typeof v2.img != 'undefined') {
                          img_g = v2.img;
                        } else {
                          img_g = '';
                        }
                        if (typeof v2.altimg != 'undefined') {
                          img_alt = v2.altimg;
                        } else {
                          img_alt = '';
                        }
                        if (typeof v2.weight != 'undefined') {
                          Vweight = v2.weight;
                        } else {
                          Vweight = '0';
                        }
                        if (typeof v2.weight2 != 'undefined') {
                          Vweight2 = v2.weight2;
                        } else {
                          Vweight2 = '0';
                        }
                        if (typeof v2.price2 != 'undefined') {
                          Vprice2 = v2.price2;
                        } else {
                          Vprice2 = '0';
                        }
                        options += '<label>' +
                          '<input ' + (v2.current ? 'checked' : '' + '') + ' type="radio" name="' + v.inputName + '" data-img="' + img_g + '" data-alt="' + img_alt + '" value="' + v2.price + '" data-price2="' + Vprice2 + '" data-weight="' + Vweight + '" data-weight2="' + Vweight2 + '"  >' +
                          '<span>' + v2.name + '</span></label>';
                      });

                      right = label + '<div class="radio">' + options + '</div>';
                      break;

                    case 'radio2':

                      var options = '';
                      var label = '';

                      if (v.label != '') {
                        label = '<div><b>' + v.label + '</b></div>';
                      }

                      $.each(v.values, function (k, v2) {
                        if (typeof v2.img != 'undefined') {
                          img_g = v2.img;
                        } else {
                          img_g = '';
                        }
                        if (typeof v2.altimg != 'undefined') {
                          img_alt = v2.altimg;
                        } else {
                          img_alt = '';
                        }
                        if (typeof v2.weight != 'undefined') {
                          Vweight = v2.weight;
                        } else {
                          Vweight = '0';
                        }
                        options += '<label>' +
                          '<input ' + (v2.current ? 'checked' : '' + '') + ' type="radio" name="' + v.inputName + '" data-img="' + img_g + '" data-alt="' + img_alt + '" value="' + v2.price + '" data-weight="' + Vweight + '"  >' +
                          '<span>' + v2.name + '</span></label>';
                      });

                      right = label + '<div class="radio">' + options + '</div>' + '<div class="select m-t-15"><select id="mob_point"><option value="1">1 </option><option value="2">2 </option><option value="3">3 </option><option value="4">4 </option></select></div>';
                      break;

                    case 'radio3':

                      var options = '';
                      var label = '';

                      if (v.label != '') {
                        label = '<div><b>' + v.label + '</b></div>';
                      }

                      $.each(v.values, function (k, v2) {
                        if (typeof v2.img != 'undefined') {
                          img_g = v2.img;
                        } else {
                          img_g = '';
                        }
                        if (typeof v2.altimg != 'undefined') {
                          img_alt = v2.altimg;
                        } else {
                          img_alt = '';
                        }
                        if (typeof v2.weight != 'undefined') {
                          Vweight = v2.weight;
                        } else {
                          Vweight = '0';
                        }
                        options += '<label>' +
                          '<input ' + (v2.current ? 'checked' : '' + '') + ' type="radio" name="' + v.inputName + '" data-img="' + img_g + '" data-alt="' + img_alt + '" value="' + v2.price + '" data-weight="' + Vweight + '"  >' +
                          '<span>' + v2.name + '</span></label>';
                      });

                      right = label + '<div class="radio">' + options + '</div>' + '<div class="str_input"><input id="wht1" type="number" value="0" min="0" max="200" step="1"><input id="wht2" type="number" value="0" min="0" max="200" step="1"><input id="wht3" readonly type="number" value="0" min="0" max="200" step="1"></div>';
                      break;


                    case 'cho':

                      var options = '';
                      var label = '';

                      if (v.label != '') {
                        label = '<div><b>' + v.label + '</b></div>';
                      }

                      $.each(v.values, function (k, v2) {
                        options += '<label>' +
                          '<input ' + (v2.current ? 'checked' : '' + '') + ' type="checkbox" name="' + v.inputName + '" value="' + v2.price + '"  >' +
                          '<span>' + v2.name + '</span></label>';
                      });

                      right = label + '<div class="radio">' + options + '</div>';
                      break;


                    case 'select2':

                      var options = '';


                      $.each(v.values, function (k, v2) {
                        if (typeof v2.img != 'undefined') {
                          img_g = v2.img;
                        } else {
                          img_g = '';
                        }
                        if (typeof v2.altimg != 'undefined') {
                          img_alt = v2.altimg;
                        } else {
                          img_alt = '';
                        }
                        if (typeof v2.weight != 'undefined') {
                          Vweight = v2.weight;
                        } else {
                          Vweight = '0';
                        }
                        options += '<option ' + (v2.current ? 'selected' : '' + '') + ' value="' + v2.price + '" data-img="' + img_g + '" data-alt="' + img_alt + '" data-weight="' + Vweight + '">' + v2.name + '</option>';
                      });

                      right = '<div class="select"><select id="' + v.id + '">' + options + '</select></div>' +
                        '<div class="input"><input id="num" type="number" value="1"  min="1" max="99" step="1"></div>';
                      break;

                  }

                  if (typeof v.altimg != 'undefined') {
                    alt_img = '<p>' + v.altimg + '</p>';
                  } else {
                    alt_img = ''
                  }
                  if (typeof v.img != 'undefined') {
                    img_g = '<div class="calc_img"><div class="calcimg"><img src="' + v.img + '"/></div>' + alt_img + '</div>';
                  } else {
                    img_g = '';
                  }

                  params += '<div class="line-type">' +
                    '<div class="left">' +
                    '<h3>' + v.name + '</h3>' +
                    v.desc +
                    '</div>' +
                    '<div class="right">' +
                    right + img_g +
                    '</div>' +
                    '</div>';

                });

                $('#params').html(params);

                items[val].func();

                $('.op-win').each(function (k, v) {
                  var id = $(v).data('id');


                  $.each(links, function (k, v) {
                    if (v.id == id) {
                      $('.op-win-con[data-id="' + id + '"] .con-r').html(v.con);
                      $('.op-win-con[data-id="' + id + '"] .link-r').attr('href', v.link).attr('target', '_blank')
                    }
                  });
                });
              }

              $('body').on('change', 'input', function () {
                if ($(this).data('img') != '') {
                  $(this).closest('.right').find('.calc_img img').attr('src', $(this).data('img'));
                  $(this).closest('.right').find('.calc_img p').text($(this).data('alt'));
                }
              })

              $('body').on('change', '#s2', function () {
                $("#s2 option:selected").each(function () {
                  if ($(this).data('img') != '') {
                    $(this).closest('.right').find('.calc_img img').attr('src', $(this).data('img'));
                    $(this).closest('.right').find('.calc_img p').text($(this).data('alt'));
                  }
                });
              });
              $(function () {
                $(".calc_input").change(function () {
                  var max = parseInt($(this).attr('max'));
                  var min = parseInt($(this).attr('min'));
                  if ($(this).val() > max) {
                    $(this).val(max);
                  } else if ($(this).val() < min) {
                    $(this).val(min);
                  }
                });
              });
            });
          </script>
        </main>
      </div>
    </div>
  </div>
  <div class="page__feedback">
    <div class="container">
      <form action="/ajax/ajax.php"
            method="POST"
            class="form form--feedback"
            id="feedback"
            enctype="multipart/form-data"
            data-event="submit.sendForm"
      >
        <div class="form__top">
          <h2 class="form__title">
            Отправить заявку <br> на расчет анкерной линии
          </h2>
          <div class="form__caption caption">
            Связаться с нами
          </div>
        </div>

        <div class="form__fields">
          <div class="form__field">
            <label for="email"
                   class="form__label"
            >Ваш email
            </label>
            <input type="email"
                   class="form__input"
                   id="email"
                   name="email"
                   placeholder="Введите email"
            >
          </div>
          <div class="form__field">
            <label for="name"
                   class="form__label"
            >Ваше Имя
            </label>
            <input type="text"
                   class="form__input"
                   id="name"
                   name="name"
                   placeholder="Ваше Имя"
            >
          </div>
          <div class="form__field form__field--2">
            <label for="comment"
                   class="form__label"
            >Комментарий
            </label>
            <input type="text"
                   class="form__input"
                   id="comment"
                   name="comment"
                   placeholder="Опишите ситуацию"
            >
          </div>
          <div class="form__field form__field--2">
            <div class="form-file">
              <label class="form-file__label">
                <input type="file"
                       class="form-file__input"
                       name="file[]"
                       multiple
                >
                <span class="form-file__sub">
                <span class="form-file__icon">
                  <svg width="32"
                       height="32"
                       viewBox="0 0 32 32"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
<path fill-rule="evenodd"
      clip-rule="evenodd"
      d="M15.7611 3.71436C16.2344 3.71436 16.6182 4.09811 16.6182 4.5715V18.551L19.0418 16.1177C19.3758 15.7823 19.9185 15.7812 20.2539 16.1153C20.5893 16.4493 20.5904 16.992 20.2564 17.3274L16.3684 21.231C16.2075 21.3925 15.989 21.4833 15.7611 21.4833C15.5331 21.4833 15.3146 21.3925 15.1538 21.231L11.2658 17.3274C10.9317 16.992 10.9328 16.4493 11.2682 16.1153C11.6036 15.7812 12.1463 15.7823 12.4804 16.1177L14.9039 18.551V4.5715C14.9039 4.09811 15.2877 3.71436 15.7611 3.71436ZM8.32746 11.7392C6.09521 11.7392 4.2846 13.5491 4.2846 15.7807V22.294C4.2846 24.534 6.10084 26.3502 8.34079 26.3502H23.1941C25.4274 26.3502 27.237 24.5406 27.237 22.3074V15.7954C27.237 13.5539 25.4219 11.7392 23.1821 11.7392H21.9381C21.4647 11.7392 21.081 11.3554 21.081 10.882C21.081 10.4086 21.4647 10.0249 21.9381 10.0249H23.1821C26.369 10.0249 28.9513 12.6075 28.9513 15.7954V22.3074C28.9513 25.4874 26.3742 28.0645 23.1941 28.0645H8.34079C5.15407 28.0645 2.57031 25.4808 2.57031 22.294V15.7807C2.57031 12.6017 5.14904 10.0249 8.32746 10.0249H9.58345C10.0568 10.0249 10.4406 10.4086 10.4406 10.882C10.4406 11.3554 10.0568 11.7392 9.58345 11.7392H8.32746Z"
      fill="white"
/>
</svg>
                </span>
                <span class="form-file__desc">
                  По возможности прикрепите файлы, <br> которые помогут рассчитать анкерную линию
                </span>
                <span class="form-file__btn btn btn--small btn--white"
                >
                  Загрузить
                </span>
              </span>
              </label>
              <span class="form-file__info">
                <span class="form-file__clear">
                  <svg width="28"
                       height="28"
                       viewBox="0 0 28 28"
                       fill="none"
                       xmlns="http://www.w3.org/2000/svg"
                  >
                  <path d="M7.27923 20.6175C6.92776 20.266 6.92776 19.6962 7.27923 19.3447L19.4415 7.18246C19.7929 6.83099 20.3628 6.83099 20.7143 7.18246C21.0657 7.53393 21.0657 8.10378 20.7143 8.45525L8.55202 20.6175C8.20055 20.969 7.6307 20.969 7.27923 20.6175Z"
                        fill="#15182A"
                  />
                  <path d="M20.7147 20.6171C20.3632 20.9686 19.7934 20.9686 19.4419 20.6171L7.27966 8.45485C6.92819 8.10338 6.92819 7.53353 7.27966 7.18206C7.63113 6.83059 8.20098 6.83059 8.55245 7.18206L20.7147 19.3443C21.0662 19.6958 21.0662 20.2656 20.7147 20.6171Z"
                        fill="#15182A"
                  />
                  </svg>
                </span>
                <span class="form-file__list">
                </span>
              </span>
            </div>
          </div>
        </div>

        <div class="form__accept">
          <label class="form-accept form-accept--white">
            <input type="checkbox"
                   class="form-accept__input"
                   name="accept"
                   required
            >
            <span class="form-accept__fake">
              <span class="form-accept__checkbox">
                <svg width="22"
                     height="22"
                     viewBox="0 0 22 22"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                >
              <rect width="22"
                    height="22"
                    rx="4"
                    fill="white"
              />
              <path d="M7 10.75L10.4904 13.5L15.25 8"
                    stroke="#005AFF"
                    stroke-width="1.8"
                    stroke-linecap="round"
              />
              </svg>
              </span>
              <span class="form-accept__text">Отправляя заявку вы соглашаетесь с политикой конфиденциальности</span>
            </span>
          </label>
        </div>
        <button class="btn btn--large btn--white form__submit"
                type="submit"
        >
          Оставить заявку
        </button>
      </form>
    </div>
  </div>
</div>
<!-- END main -->

<? require("../src/core/bottom.php"); ?>

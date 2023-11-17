<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: index.html");
    exit();
}

if( !isset($_SESSION['logtime'])){
  $_SESSION['logtime'] = date("Y-m-d H:i:s");
}
echo "<div style='position: absolute; left: 250px; top: 70px; z-index: 10000;'>Вы зашли " . strtotime(date('Y-m-d H:i:s')) - strtotime($_SESSION['logtime']) . " секунд назад</div>" ;
$userEmail = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="global.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script
      src="https://kit.fontawesome.com/b04fc8f8bf.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
  <header class="store_header">
    <div class="store_header_left">
      <div class="store_header_logo">
        <a href="./store.html"><img src="./images/wolt-logo.webp" alt="" /></a>
      </div>
      <button onclick="callPhpScript()">Выйти</button>
    </div>
    <div class="store_header_center">
      <div class="store_header_center_container">
        <div class="store_header_search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="store_header_search_input">
          <input type="text" placeholder="Поиск в Wolt..." />
        </div>
      </div>
    </div>
    <div class="store_header_right">
      <i class="fa fa-user-circle fa-2xl"></i>
    </div>
  </header>
  <div class="profile__pref">
    <h1 class="profile__title">Профиль</h1>
    <div class="index__appetite__enter profile__pref__icon">
      <div class="index__appetite__icon">
        <i class="fa-solid fa-message"></i>
      </div>
      <button class="index__appetite__input index__modal__g_button index__modal__f_button profile__input">Связаться с поддержкой</button>
    </div>
  </div>

  <section class="profile__information">
    <div class="profile__private">
      <div class="store_header_right">
        <svg class="profile__private__icon" xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
      </div>
      <div class="profile__private__info">
        <h1>Тимур Байтукенов</h1>
        <div class="profile__private__mails">
          <div class="profile__private__mail">
            <h3>Email</h3>
            <p><?php echo $userEmail?></p>
          </div>
          <div class="profile__private__mail">
            <h3>Номер телефона</h3>
            <p>+77079969966</p>
          </div>
          <div class="profile__private__mail">
            <h3>Адрес</h3>
            <p>ул. Толе би 59</p>
          </div>
        </div>
      </div>
    </div>
    <div class="profile__promocodes">
      <div class="profile__promocode">
        <div class="profile__promocode__title">
          <h2>Токены Wolt</h2>
          <h2>0 x <i class="fa-solid fa-coins"></i></h2>
        </div>
        <p>Каждый токен подарит вам бесплатную стандартную доставку.</p>
      </div>
      <div class="profile__promocode">
        <div class="profile__promocode__title">
          <h2>Бонусы Wolt</h2>
          <h2>0 KZT</h2>
        </div>
        <p>Вы можете использовать бонусы для оплаты ваших заказов.</p>
      </div>
    </div>
    <h1>История заказов</h1>
    <div class="profile__history">
      <div class="profile__promocode profile__trade" onclick="stopScroll()">
        <div class="profile__promocode__title">
          <h2>Gucci</h2>
          <h2>184324 KZT</h2>
        </div>
        <p>ул. Толе би 59, 02.06.2023</p>
      </div>
      <div class="profile__promocode profile__trade">
        <div class="profile__promocode__title">
          <h2>Бургер Кинг</h2>
          <h2>9999 KZT</h2>
        </div>
        <p>ул. Толе би 59, 22.05.2022</p>
      </div>
    </div>
  </section>

  <footer class="index__footer profile__footer">
    <div class="index__footer__download">
        <img src="./images/Wolt.jpg" alt="Wolt">
        <a href="https://wolt.onelink.me/Uy67?af_adset=not-available-web-to-app&af_keywords=not-available-web-to-app&af_r=https%3A%2F%2Fitunes.apple.com%2Ffi%2Fapp%2Fwolt%2Fid943905271%3Fmt%3D8&af_sub1=not-available-web-to-app&af_sub2=%2Fru%2Fkaz&c=not-available-web-to-app&pid=not-available-web-to-app"><img src="./images/Apple.png" alt="Apple"></a>
        <a href="https://wolt.onelink.me/Uy67?af_adset=not-available-web-to-app&af_keywords=not-available-web-to-app&af_r=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.wolt.android&af_sub1=not-available-web-to-app&af_sub2=%2Fru%2Fkaz&c=not-available-web-to-app&pid=not-available-web-to-app"><img src="./images/GP.png" alt="GP"></a>
    </div>
    <div class="index__footer__company">
        <h3>Партнерство с Wolt</h3>
        <ul class="index__footer__list">
            <li><a>Курьерам</a></li>
            <li><a>Для ресторанов</a></li>
            <li><a>Для магазинов</a></li>
        </ul>
    </div>
    <div class="index__footer__company">
        <h3>Компания</h3>
        <ul class="index__footer__list">
            <li><a>О нас</a></li>
            <li><a>What we stand for</a></li>
            <li><a>Вакансии</a></li>
            <li><a>Устойчивое развитие</a></li>
            <li><a>Безопасность</a></li>
            <li><a>Инвесторам</a></li>
        </ul>
    </div>
    <div class="index__footer__company">
        <h3>Продукты</h3>
        <ul class="index__footer__list">
            <li><a>Wolt Drive</a></li>
            <li><a>Wolt Market</a></li>
            <li><a>Wolt+</a></li>
            <li><a>Для компаний</a></li>
        </ul>
    </div>
    <div class="index__footer__company">
        <h3>Полезные ссылки</h3>
        <ul class="index__footer__list">
            <li><a>Поддержка</a></li>
            <li><a>Медиа</a></li>
            <li><a>Контакты</a></li>
            <li><a>Speak up</a></li>
            <li><a>Промокоды</a></li>
            <li><a>Developers</a></li>
        </ul>
    </div>
    <div class="index__footer__company">
        <h3>Следите за нами</h3>
        <ul class="index__footer__list">
            <li><a>Блог</a></li>
            <li><a>Блог инженеров</a></li>
            <li><a>Instagram</a></li>
            <li><a>Facebook</a></li>
            <li><a>Twitter</a></li>
            <li><a>LinkedIn</a></li>
            <li><a>Wolt Life</a></li>
        </ul>
    </div>
  </footer>

  <div class="index__modal" id="modal">
    <div class="index__modal1 profile__modal1">
      <button class="index__modal__cancel" onclick="stopScroll()"><i class='fa-solid fa-x'></i></button>
      <div class="profile__top-section">
        <div class="profile__address">
          <div class="profile__address-content">
            <h2>Burger King</h2>
            <p>ул. Толе би 59, г. Алматы</p>
          </div>
        </div>
        <div class="profile__contact">
          <div class="profile__contact-content">
            <div class="profile__email">Email: timur.baitukenov21@fizmat.kz</div>
            <div class="profile__number">Number: +77079969966</div>
          </div>
        </div>
      </div>
      <div class="profile__table">
        <table>
          <tr class="profile__table__titles">
            <th>#</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Burger</td>
            <td>2</td>
            <td>1500 KZT</td>
            <td>3000 KZT</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Big fries</td>
            <td>3</td>
            <td>700 KZT</td>
            <td>2100 KZT</td>
          </tr>
          <tr class="profile__table__total">
            <td></td>
            <td>Delivery</td>
            <td>-</td>
            <td>500 KZT</td>
            <td>5600 KZT</td>
          </tr>
        </table>
      </div>
      <div class="profile__modal__footer">
        <div class="profile__status-content">
          <h4>Payment Status</h4>
          <p class="status">PAID</p>
          <p>Payment Method: <span>Kaspi</span></p>
          <p class="thanks">Thanks for the purchase</p>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./scripts/profile.js"></script>
<script>
    function callPhpScript() {
      $.ajax({
        url: './login.php',
        type: 'GET',
        success: function (result) {
          alert(result)
          location.reload()
        },
        error: function () {
          console.log('error happened')
        }
      })
        // var xhr = new XMLHttpRequest();
        // xhr.open('GET', './login.php', true);

        // <?php 
        //   echo "<h2 style='z-index: 1000; color:red '>" . strtotime($_SESSION['logtime']) - strtotime(date('Y-m-d H:i:s')) . "</h2>";
        //   sleep(5);
        // ?>
        // xhr.onload = function () {
        //     if (xhr.status >= 200 && xhr.status < 300) {
        //         console.log(xhr.responseText);
        //         location.reload()
        //     } else {
        //         console.error('Ошибка при выполнении запроса: ' + xhr.statusText);
        //     }
        // };
        // xhr.send();
    }
</script>
</html>
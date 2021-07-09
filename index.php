<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-light" style="background: white;">
    <div class="container topnavheight">
      <a class="navbar-toggler buttonmenu m-0 p-0" style="text-decoration: none;" type="button" data-toggle="offcanvas" aria-label="Toggle navigation">
        <div class="d-flex align-items-center flex-column">  
          <img class="sad" src="img/span.png">
          <img class="sad my-2" src="img/span.png">
          <img class="sad mb-auto" src="img/span.png">
        </div>
      </a>
      <div class="me-auto">
      <a class="navbar-brand m-0 p-0"><img src="img/logo.png"></a>
      </div>
      <div class="navbar-collapse collapse" style="visibility: visible; width: 300px;" tabindex="1" role="dialog" id="offcanvasExample" aria-modal="true" aria-labelledby="offcanvasExampleLabel">
        <a class="navbar-toggler buttonmenu m-0 p-0 mb-3" type="button" id="offcanvas"  data-toggle="offcanvas" aria-label="Toggle navigation">
          <span class=""><img src="img/vector.png"></span>
        </a>
        <ul class="topnav navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Услуги</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Портфолио</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Отзывы</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Вакансии</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Контакты</a>
          </li>
        </ul>
        <div class=" mt-4 mb-auto" style="background: black;">

        </div>
      </div>
      <div class="d-flex justify-content-end flex-column">
        <div class="zhir">
          8(863)243-15-10
        </div>
        <div class="minitext">
          Ростов-на-Дону
        </div>
      </div>
    </div>
  </nav>
</header>
<div class="row" style="margin:0px">
  <div class="backimg ">
    <div class="backimgdark">
      <div class="container">
        <div class="d-flex align-items-center " style="height:500px">
          <div class="d-flex flex-column mb-3 whitecolor">
            <div class="row">
              <div class="col-7">
                <div class="row">
                <h1 class="zhirban">Рекламно-информационное агентство</h1>
                </div>
                <div class="row">
                  <p class="whitecolor">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p> 
                </div>
                <div class="row">
                  <form action="/send.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <input type="text" id="tel" name="telephone" class="form-control phonenumber" placeholder="Номер телефона">
                        </div>
                        <div class="col-12 col-md-4">
                          <input type="submit" class="btn btn-danger col-12 phonenumber" placeholder="Обратный звонок">
                        </div> 
                      </div>                       
                    </div>                      
                  </form>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" >
  <div class="row">
    <div class="d-flex justify-content-center">
      <h1 class="news">Новости</h1>
    </div>
  </div>
  <div class="row">
    <div class="d-flex justify-content-center transp">
      <div class="container p-0">
       <?php
          require_once 'controller.php';
          $result = connect();?>
      <div class="swiper-container mySwiper px-3 py-3">
      <div class="bgkvadr">
          <div class="bgkvadrleft mx-0 my-0"></div>
          <div class="bgkvadrright mx-0 my-0"></div>
        </div>
        <div class="swiper-wrapper">
        
          <?php
            for ($j = 0; $j <= 8; $j++){
              $row = $result->fetch_assoc();
              $timestamp = strtotime($row['data']);
              $new_date_format = date('d.m.Y', $timestamp);
          ?>
          <div class="swiper-slide">
            <div class="cardnews">
              <div class="container my-4">
                <div class="datecard">
                  <?php echo $new_date_format; ?>
                </div>
                <div class="textcard mt-3">
                  <?php echo $row['text']; ?>
                </div>
                <button type="button" class="btn btn-outline-danger phonenumber">Подробнее</button>
              </div>
            </div>
          </div>
          <?php
          }?>
        </div>
        
      </div>
      <div class="swiper-pagination mb-4"></div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center text-white mt-4" style="background-color: #211F2B; width: 100%;">
<div class="container ">
  <div class="row">
    <div class="col-lg-1 d-flex justify-content-center align-items-center bottomnavheight">
    <a href="#"><img src="img/logobottom.png" alt="logo"></a>
    </div>
    <div class="col-lg-10 d-flex justify-content-center align-items-center bottomnavheight">
      <ul class="bottommenu p-0">
        <li>
          <a href="#">Услуги</a>
        </li>
        <li>
          <a href="#">Портфолио</a>
        </li>
        <li>
          <a href="#">Отзывы</a>
        </li>
        <li>
          <a href="#">Вакансии</a>
        </li>
        <li>
          <a href="#">Контакты</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</footer>
</body>
</html>

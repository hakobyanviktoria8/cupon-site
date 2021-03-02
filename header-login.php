<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Biglemon</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://use.fontawesome.com/5957e40b5e.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- favicon error  -->
    <link rel="shortcut icon" href="#">

    <!--    carusel slick-->
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/modal_eye_btn.css">
    <link rel="stylesheet" href="CSS/checkput.css">
    <link rel="stylesheet" href="CSS/product.css">
    <link rel="stylesheet" href="CSS/header-login.css">
    <link rel="stylesheet" href="CSS/personal-area.css">

</head>
<body>

<!--flags and icons-->
<div class="flagsIcons">
    <div class="container p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-5 p-0 text-left">
                <span class="navbar_linkPhone ">
                    <a href="tel: +374-10-505-506" class="m-0 text-dark">(010) 505 506</a>
                    <a href="tel: +374-96-500-183" class="m-0 text-dark hide_mobile">, (096/093) 500 183</a>
                </span>
            </div>
            <div class="col-lg-6 col-7 p-0">
                <span class="navbar_linkFlags">
                    <a href="#"><img src="images/facebook.png" alt=""></a>
                    <a href="#"><img src="images/instagram.png" alt=""></a>
                    <a href="#"><img src="images/twitter.png" alt=""></a>
                    <a href="#"><img src="images/odnoklassniki.png" alt=""></a>
                    <a href="#"><img src="images/arm.jpg" alt=""></a>
                    <a href="#"><img src="images/ru.jpg" alt=""></a>
                </span>
            </div>
        </div>
    </div>
</div>

 <!--header-->
<div class="headerWraper">
    <div class="header py-3">
        <div class="container">
        <!--header-top-->
            <div class="row mb-2 header-top">
                <div class="col-lg-7 col-md-0 p-0">

                </div>
                <!-- Помощь -->
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2  p-0">
                    <div class="dropdown help">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/header-icon1.png" class="pr-2" alt=""> Помощь
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul>
                                <a class="dropdown-item" href="#">
                                    <li><p class="m-0">Lorem ipsum dolor.</p></li>
                                    <small>Lorem ipsum dolor sit amet.</small>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <li><p class="m-0">Lorem ipsum dolor.</p></li>
                                    <small>Lorem ipsum dolor sit amet.</small>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <li><p class="m-0">Lorem ipsum dolor.</p></li>
                                    <small>Lorem ipsum dolor sit amet.</small>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6  col-md-6 col-lg-3 my-2 p-0">
                    <img src="images/header-icon2.png" alt="" class="pr-2">
                    <span class="text-dark web_1440">ДЛЯ ВАШЕГО БИЗНЕСА</span>
                    <span class="text-dark mobile_320">ДЛЯ БИЗНЕСА</span>
                </div>
            </div>

          <!--header bottom-->
            <div class="row  my-3 header-bottom">
                <div class="col-lg-3 col-md-2 col-2 p-0">
                    <a href="index.php">
                        <img class = "bigLemon logo" src="images/footer-logo.png" alt="">
                        <img class = "lemon logo" src="images/home-icon8.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-8 col-8 border col2 p-0">
                    <form action="">
                        <input class="pl-3" type="text" placeholder="Найти среди 400 акций">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <!--login -->
                <div class="col-lg-3 col-md-2 col-2 p-0 text-right col3">
                    <div class="dropdown login_user">
                      <button class="login_user_full_name dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Full Name</span>
                      </button>

                      <!-- Button trigger modal -->
                      <button type="button" class="btn login_user_first_later" data-toggle="modal" data-target="#exampleModal">
                        A
                      </button>

                      <!-- Modal -->
                     <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" id="personal_modal">
                            <div class="modal-content">
                                <div class="modal-body">

                                <!--     most_important           -->
                                     <a href="personal-area.php">
                                        <div class="row">
                                            <div class="first_later col-3">
                                                <span>A</span>
                                            </div>
                                            <div class="most_important_name col-9">
                                                <p class="personal_area_gray m-0">Hello Full Name</p>
                                                <p><b>Самое важное</b></p>
                                            </div>
                                         </div>
                                     </a>

                                    <!--     my_cupon            -->
                                    <a href="personal-area.php">
                                        <div  class="personal_area_div">
                                            <i class="fa fa-tag"></i>
                                            <span>Мои купоны</span>
                                        </div>
                                    </a>

                                    <!--    story          -->
                                    <a href="personal-area.php">
                                        <div  class="personal_area_div" >
                                            <i class="fa fa-exchange"></i>
                                            <span>История операций</span>
                                        </div>
                                    </a>

                                    <!--    personal_area          -->
                                    <a href="#personal_area">
                                        <div class="personal_area_div">
                                            <i class="fa fa-user"></i>
                                            <span>Личная информация</span>
                                        </div>
                                    </a>

                                    <!--    password          -->
                                    <a href="#password">
                                        <div class="personal_area_div">
                                            <i class="fas fa-unlock-alt"></i>
                                            <span>Смена пароля</span>
                                        </div>
                                    </a>

                                    <!--    envelope          -->
                                    <a href="#envelope">
                                        <div class="personal_area_div">
                                            <i class="fa fa-envelope"></i>
                                            <span>Рассылки</span>
                                        </div>
                                    </a>

                                    <!--    promocode          -->
                                    <a href="#promocode">
                                        <div class="personal_area_div">
                                            <i class="fas fa-wallet"></i>
                                            <span>Промокоды</span>
                                        </div>
                                    </a>

                                    <!--    cupons          -->
                                    <a href="#cupons">
                                        <div class="personal_area_div">
                                            <i class="fas fa-percentage"></i>
                                            <span>товары по купонам</span>
                                        </div>
                                    </a>

                                    <!--    carts          -->
                                    <a href="#carts" aria-controls="carts" role="tab" data-toggle="tab">
                                        <div class="personal_area_div">
                                            <i class="fas fa-credit-card"></i>
                                            <span>Привязанные карты</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>

                      <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="personal-area.php">Самое важное</a>
                        <a class="dropdown-item" href="#">Личная информация</a>
                        <a class="dropdown-item" href="#">Мои купоны</a>
                        <a class="dropdown-item" href="#">Привязанные карты</a>
                        <a class="dropdown-item" href="#">Пригласит  друга </a>
                        <a class="dropdown-item" href="#">Промокоды</a>
                        <a class="dropdown-item" href="#">Бонусы</a>
                        <a class="dropdown-item" href="#">Список моих желаний</a>
                        <a class="dropdown-item" href="#">Рассылки</a>
                        <a class="dropdown-item" href="#">Отзывы</a>
                        <a class="dropdown-item" href="#">История операций</a>
                        <a class="dropdown-item" href="#">Смена пароля</a>
                        <a class="dropdown-item" href="#">выйти</a>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   <!--2navbar-->
    <div class="container p-0">
       <!--carusel0-->
        <div class="row m-0">
            <div class="col-12 p-0">
                <section class="carusel0">
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="category.php">category</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="category-with-sorting.php">Sorting</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="category-relax.php">relax</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">отели</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">еда</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">промокоды</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">товары</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">бассейны</a>
                    </div>
                    <div class="py-2 ml-1">
                        <a class="text-uppercase" href="#">КАРТА</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!--main content-->
<div class="container">
    <!--carusel1-->
    <div class="row">
        <div class="col-12">
            <section class="carusel1 slider">
                <div><img src="images/home-ads1.jpg"></div>
                <div><img src="images/home-ads1.jpg"></div>
                <div><img src="images/home-ads1.jpg"></div>
                <div><img src="images/home-ads1.jpg"></div>
            </section>
        </div>
    </div>

    <!--    map-->
    <div class="row m-0 map_wraper">
        <div class="col-12 text-right m-0">
            <a href="map.php">посмотреть на карте</a>
        </div>
    </div>

    <!--icon navBar-->
    <div class="row">
        <div class="col-12">
            <section class="carusel1-1 iconsNavBar">
                <div class="iconCart">
                    <div class="circle circle1">
                        <img class="img1" src="images/home-icon1.png" alt="">
                        <img class="img1-1" src="images/home-icon1-1.png" alt="">
                    </div>
                    <span>Топ акции</span>
                </div>
                <div class="iconCart">
                        <div class="circle circle2">
                            <img class="img1" src="images/home-icon2.png" alt="">
                            <img class="img1-1" src="images/home-icon2-1.png" alt="">
                        </div>
                        <span>Бассейны</span>
                </div>
                <div class="iconCart">
                    <div class="circle circle3">
                        <img class="img1" src="images/home-icon3.png" alt="">
                        <img class="img1-1" src="images/home-icon3-1.png" alt="">
                    </div>
                    <span>Доставка</span>
                </div>
                <div class="iconCart">
                    <div class="circle circle4">
                        <img class="img1" src="images/home-icon4.png" alt="">
                        <img class="img1-1" src="images/home-icon4-1.png" alt="">
                    </div>
                    <span>Отдых</span>
                </div>
                <div class="iconCart">
                    <div class="circle circle5">
                        <img class="img1" src="images/home-icon5.png" alt="">
                        <img class="img1-1" src="images/home-icon5-1.png" alt="">
                    </div>
                    <span>Новинки</span>
                </div>
                <div class="iconCart">
                    <div class="circle circle6">
                        <img class="img1" src="images/home-icon6.png" alt="">
                        <img class="img1-1" src="images/home-icon6-1.png" alt="">
                    </div>
                    <span>Еда</span>
                </div>
                <div class="iconCart">
                    <div class="circle circle7">
                        <img class="img1" src="images/home-icon7.png" alt="">
                        <img class="img1-1" src="images/home-icon7-1.png" alt="">
                    </div>
                    <span>Промокоды</span>
                </div>
            </section>
        </div>
    </div>
    <!--topAkcia-->
    <div class="topAkcia">
        <div class="row border-top mb-3 subTitleWraper mx-0">
            <div class="col-6 p-0">
                <span class="subTitle">ТОП АКЦИИ</span>
            </div>
            <div class="col-6 p-0">
                <p class="text-uppercase float-right"><span class="seeAll">посмотреть</span> все(174)</p>
            </div>
        </div>
        <!--carts-->
        <div class="row  m-0">
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                   <div class="cartTopSide">
                       <a href="product.php"><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>

                        <!-- Button trigger modal -->
                       <button title="Нажми на меня!" id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>

                       <a href="#" class="icons" onclick={favoritIcon(this)}>
                          <i class="fa fa-heart-o "></i>
                       </a>
                       <span class="sale px-3 py-1"> -35%</span>
                       <span class="sale sale-2 px-3 py-1 text-uppercase"> работает</span>
                   </div>
                    <div class="cartMainContent_sale_wraper">
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="product.php">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span class="sales"><del>60.000 др</del> От 39.000 др</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small><b>2</b> д <b>2</b> ч <b>2</b> м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="product.php"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href="product-more.php"><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                         <!-- Button trigger modal -->
                       <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                        <span class="sale sale-2 px-3 py-1 text-uppercase"> работает</span>

                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="product-more.php">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="product-more.php"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                         <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                        </button>

                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-eye"></i>
                        </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent imgBG-main-wraper">
                    <img class="imgBG-main" src="images/Rectangle8.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-eye"></i>
                        </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--advertisement-->
    <div class="row m-0">
        <div class="col-12 p-2">
            <section class="carusel1-2 slider">
                <div>
                    <img class="advertisement" src="images/Govazd.png" alt="">
                </div>
                <div>
                    <img class="advertisement" src="images/Govazd.png" alt="">
                </div>
            </section>
        </div>
    </div>
    <!--carts-->
    <div class="row  m-0">
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--advertisement-->
    <div class="row  m-0">
        <div class="col-md-6 col-xs-12 p-2">
            <img class="advertisementImg" src="images/reclam2.png" alt="">
        </div>
        <div class="col-md-6 col-xs-12 p-2">
            <img class="advertisementImg" src="images/reclam3.png" alt="">
        </div>
    </div>
</div>
<!--swimmingPool-->
<div class="swimmingPool mt-2">
    <br>
    <div class="container">
        <div class="row border-top mb-3 subTitleWraper mx-0">
            <div class="col-6 p-0">
                <span class="subTitle subTitleSwim text-uppercase">Бассейны</span>
            </div>
            <div class="col-6 p-0">
                <p class="text-uppercase float-right"><span class="seeAll">посмотреть</span> все(174)</p>
            </div>
        </div>
        <!--carts-->
        <div class="row  m-0">
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                        </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                        </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                        </button>
                        <a href="#" class="icons" onclick={favoritIcon(this)}>
                            <i class="fa fa-heart-o "></i>
                        </a>
                        <span class="sale px-3 py-1"> -35%</span>
                    </div>
                    <div>
                        <div class="row cartTitle  m-0 p-3">
                            <div class="col p-0">
                                <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                            </div>
                        </div>
                        <div class="row m-0 pl-3">
                            <div class="col-7 p-0">
                                <span><del>60.000 др</del> От 39.000 драм</span>
                            </div>
                            <div class="col-5 p-0 text-right">
                                <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                            </div>
                        </div>
                        <div class="row m-0 px-3">
                            <div class="col-10 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-2 text-right p-0">
                                <img src="images/reclam.png" alt="">
                                <span>496</span>
                            </div>
                        </div>
                        <hr class="m-2">
                        <div class="row m-0 px-3 pb-3">
                            <div class="col-7 p-0">
                                <img src="images/time.png" alt="">
                                <small>3 д 6 ч 2 м</small>
                            </div>
                            <div class="col-5 p-0">
                                <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<!--Отдых-->
<div class="container">
    <div class="row border-top mb-3 mt-5 subTitleWraper mx-0">
        <div class="col-6 p-0">
            <span class="subTitle text-uppercase">Отдых</span>
        </div>
        <div class="col-6 p-0">
            <p class="text-uppercase float-right"><span class="seeAll">посмотреть</span> все(174)</p>
        </div>
    </div>
    <!--carusel2-->
    <div class="row">
        <div class="col-12">
            <div class="carusel2">
                <div class="carusel2-wrap">
                    <div>
                        <img src="images/Rectangle20.png" alt="">
                    </div>
                    <p class="m-0">Цахкадзор</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Rectangle21.png" alt="">
                    <p class="m-0">Севан</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Rectangle22.png" alt="">
                    <p class="m-0">Дилижан</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Aghveran.png" alt="">
                    <p class="m-0">Агверан</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Rectangle24.png" alt="">
                    <p class="m-0">Ширак</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Rectangle22.png" alt="">
                    <p class="m-0">Дилижан</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Aghveran.png" alt="">
                    <p class="m-0">Агверан</p>
                </div>
                <div class="carusel2-wrap">
                    <img src="images/Rectangle24.png" alt="">
                    <p class="m-0">Ширак</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--carts-->
    <div class="row  m-0">
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="bgGray">
                    <h3>Lorem ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <form action="">
                        <label for="question1">
                            <input type="radio" id="question1" name="question" class="">Lorem ipsum dolor <br>
                        </label>
                        <label for="question2">
                            <input type="radio" id="question2"  name="question">Lorem ipsum  <br>
                        </label>
                        <label for="question3">
                            <input type="radio" id="question3"  name="question">Lorem ipsum  <br>
                        </label>
                        <label for="question4">
                            <input type="radio" id="question4"  name="question">Lorem ipsum  <br>
                        </label>
                        <button>Consectetur</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Промокоды-->
<div class="swimmingPool mt-5">
    <br>
    <div class="container">
        <div class="row border-top mb-3 subTitleWraper mx-0">
            <div class="col-6 p-0">
                <span class="subTitle subTitleSwim text-uppercase">Промокоды</span>
            </div>
            <div class="col-6 p-0">
                <p class="text-uppercase float-right"><span class="seeAll">посмотреть</span> все(25)</p>
            </div>
        </div>

        <!--carusel3-->
        <div class="row">
            <div class="col-12">
                <section class="carusel3">
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod1.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod2.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart ">
                            <img class="logo" src="images/promokod3.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod4.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod4.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart ">
                            <img class="logo" src="images/promokod3.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod4.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                    <div class="mx-2 carusel3-Wrap">
                        <img class="heart2" src="images/heart2.png" alt="">
                        <div class="bg-white carusel3cart">
                            <img  class="logo" src="images/promokod4.png" alt="">
                        </div>
                        <span>Кэшбэк 6,25%</span>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
</div>

<!--Товары по купонам-->
<div class="container">
    <div class="row border-top mb-3 mt-5 subTitleWraper mx-0">
        <div class="col-lg-6 col-sm-8 p-0">
            <span class="subTitle text-uppercase">Товары по купонам</span>
        </div>
        <div class="col-lg-6 col-sm-4 p-0">
            <p class="text-uppercase float-right"><span class="seeAll">посмотреть</span> все(174)</p>
        </div>
    </div>
    <!--carts-->
    <div class="row  m-0">
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                    <span class="sale sale-2 px-3 py-1 text-uppercase"> работает</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                    <span class="sale sale-2 px-3 py-1 text-uppercase"> работает</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
            <div class="cartMainContent">
                <div class="cartTopSide">
                    <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                       <!-- Button trigger modal -->
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-eye"></i>
                       </button>
                    </button>
                    <a href="#" class="icons" onclick={favoritIcon(this)}>
                        <i class="fa fa-heart-o "></i>
                    </a>
                    <span class="sale px-3 py-1"> -35%</span>
                    <span class="sale sale-2 px-3 py-1 text-uppercase"> работает</span>
                </div>
                <div>
                    <div class="row cartTitle  m-0 p-3">
                        <div class="col p-0">
                            <h3><a href="">Проведите ваш отдых в шикарном отеле  Tsaghkadzor MARRIOTT</a></h3>
                        </div>
                    </div>
                    <div class="row m-0 pl-3">
                        <div class="col-7 p-0">
                            <span><del>60.000 др</del> От 39.000 драм</span>
                        </div>
                        <div class="col-5 p-0 text-right">
                            <span class="cartBonus px-2 py-1">1500<span class="cartBonusDram">др</span></span>
                        </div>
                    </div>
                    <div class="row m-0 px-3">
                        <div class="col-10 p-0">
                            <span>4.3</span>
                            <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                            <span>1250 отзыв</span>
                        </div>
                        <div class="col-2 text-right p-0">
                            <img src="images/reclam.png" alt="">
                            <span>496</span>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row m-0 px-3 pb-3">
                        <div class="col-7 p-0">
                            <img src="images/time.png" alt="">
                            <small>3 д 6 ч 2 м</small>
                        </div>
                        <div class="col-5 p-0">
                            <a href="#"><span class="cartBtn py-1 px-4 float-right">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--advertisement-->
    <div class="row my-4">
        <div class="col-lg-2 col-md-1 col-sm-0"></div>
        <div class="col-lg-8 col-md-10 col-sm-12">
            <img class="reclam4" src="images/reclam4.png" alt="">
        </div>
        <div class="col-lg-2 col-md-1 col-sm-0"></div>
    </div>
</div>

<!--bg green carusel4-->
<div class="green-BG">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="carusel4 py-2">
                    <div class="carusel4-wrap">
                        <img src="images/home-icon8.png" alt="">
                        <h2 class="text-uppercase font-weight-bold">4.163.700.000 ДРАМ</h2>
                        <p class="text-uppercase m-0"><b>экономия на годы</b></p>
                        <p class="text-uppercase m-0"><b>факт: экономия на годы 1.222.444.000</b></p>
                    </div>
                    <div class="carusel4-wrap">
                        <img src="images/home-icon8.png" alt="">
                        <h2 class="text-uppercase font-weight-bold">4.163.700.000 ДРАМ</h2>
                        <p class="text-uppercase m-0"><b>экономия на годы</b></p>
                        <p class="text-uppercase m-0"><b>факт: экономия на годы 1.222.444.000</b></p>
                    </div>
                    <div class="carusel4-wrap">
                        <img src="images/home-icon8.png" alt="">
                        <h2 class="text-uppercase font-weight-bold">4.163.700.000 ДРАМ</h2>
                        <p class="text-uppercase m-0"><b>экономия на годы</b></p>
                        <p class="text-uppercase m-0"><b>факт: экономия на годы 1.222.444.000</b></p>
                    </div>
                    <div class="carusel4-wrap">
                        <img src="images/home-icon8.png" alt="">
                        <h2 class="text-uppercase font-weight-bold">4.163.700.000 ДРАМ</h2>
                        <p class="text-uppercase m-0"><b>экономия на годы</b></p>
                        <p class="text-uppercase m-0"><b>факт: экономия на годы 1.222.444.000</b></p>
                    </div>
                    <div class="carusel4-wrap">
                        <img src="images/home-icon8.png" alt="">
                        <h2 class="text-uppercase font-weight-bold">4.163.700.000 ДРАМ</h2>
                        <p class="text-uppercase m-0"><b>экономия на годы</b></p>
                        <p class="text-uppercase m-0"><b>факт: экономия на годы 1.222.444.000</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 adresses">
    <!--text-->
    <div class="row">
        <div class="col-12 my-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur delectus, dolores ducimus eaque nesciunt quisquam, ratione sequi similique tempore unde vel. Cumque cupiditate doloremque ex magnam mollitia nihil obcaecati officiis quia tempora, tempore. Asperiores optio, saepe! Aliquam amet commodi dicta ea eligendi ex fugit impedit incidunt, ipsa labore maiores minus modi nesciunt nostrum officia omnis provident quidem quisquam reprehenderit, saepe soluta vel vitae voluptates! Amet cupiditate deleniti dolores ea magni molestias pariatur quia sit temporibus velit. Ab ad adipisci aliquam at autem culpa dolor dolorem ea enim eum excepturi impedit inventore laudantium modi nemo, nihil nisi perferendis quae quam quia quibusdam quod ratione, reiciendis repellat repudiandae similique, unde ut vero voluptas voluptatum? Ab culpa debitis earum facere laborum nam, quasi vitae! Aperiam beatae esse, hic ipsa libero magni odio possimus quasi quibusdam, quis quisquam sapiente, sequi sit velit veritatis!</p>
            <b>Lorem ipsum dolor sit amet.</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aperiam architecto aspernatur aut consequatur cum delectus dicta doloribus ea error esse facilis fugiat harum id impedit incidunt ipsum laborum maxime nihil nisi nobis nulla odit officia officiis pariatur perferendis possimus quibusdam rem rerum sapiente temporibus tenetur ullam unde, vel, voluptate voluptatem. Amet consectetur consequuntur deserunt excepturi fugit illum labore laborum libero necessitatibus nulla perferendis quaerat reiciendis tenetur voluptate, voluptates. Ab aliquam assumenda corporis dignissimos eaque exercitationem, hic laudantium minus nemo, pariatur quibusdam sint suscipit, voluptas. Alias blanditiis dignissimos dolores facilis minima, obcaecati provident qui totam ullam velit vitae voluptas.</p>
        </div>
    </div>


    <!--adresses side-->
    <div class="row">
        <h3 class="pl-3">Ботинки и пинетки</h3>
    </div>
    <div class="row">
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
       <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
       <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6 mb-4">
            <a href="">Ботинки и пинетки - 10 разноцветные</a><br>
            <a href="">Ботинки и пинетки - 10 розовые</a><br>
            <a href="">Повседневный - 10 серии</a><br>
            <a href="">Квартиры - 10, Зелёная</a><br>
            <a href="">Квартиры - 10, Серебро</a><br>
        </div>
    </div>
</div>





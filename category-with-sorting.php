<?php include('header.php');?>

<!--path-->
<div class="container">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="category-path">Главная / Бассейны </div>
        </div>
    </div>
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

    <!--category-->
    <div class="topAkcia">
        <div class="row border-top mb-3 subTitleWraper mx-0">
            <div class="col-12 p-0">
                <span class="subTitle">Все 280</span>
            </div>
        </div>

        <!--with sorting-->
        <div class="row mb-3 mx-0">
            <div class="col-12 p-0">
                <div class="dropdown with-sorting float-left">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="dropdown with-sorting float-left">
                  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Type
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="dropdown with-sorting float-left">
                  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Price
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="dropdown with-sorting">
                  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
            </div>
        </div>
        <!--carts-->
        <div class="row  m-0">
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                   <div class="cartTopSide">
                       <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                       <!-- Button trigger modal -->
                      <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                      <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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

        <!--carts-->
        <div class="row  m-0">
            <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12 cart p-2 mb-1">
                <div class="cartMainContent">
                    <div class="cartTopSide">
                        <a href=""><img class="imgBG" src="images/home-coupon.jpg" alt=""></a>
                       <!-- Button trigger modal -->
                          <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                      <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                      <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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
                       <button id="button1" type="button" class="btn modal_button" data-toggle="modal" data-target="#exampleModalCenter">
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
                            <div class="col-8 p-0">
                                <span>4.3</span>
                                <div class="Stars" style="--rating: 4.5;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                <span>1250 отзыв</span>
                            </div>
                            <div class="col-4 text-right p-0">
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

        <!--pagination-->
        <div class="row">
            <div class="col-12">
                <nav aria-label="pagination">
                  <ul class="pagination justify-content-center align-items-center my-4">
                    <li class="page-item disabled">
                      <span class="page-link">
                          <i class="fal fa-chevron-circle-left"></i>
                      </span>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <span class="page-link">1</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">14</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fal fa-chevron-circle-right"></i>
                        </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php');?>
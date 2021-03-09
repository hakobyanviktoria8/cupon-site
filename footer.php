
<!--send mail-->
<div class="gray-BG">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p><b>Подписывайтесь на нашу новостную рассылку</b></p>
                <p>Подпишитесь на нашу новостную рассылку и получайте подробную получайте подробную.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form action="" class="form">
                    <input type="email" placeholder="введите адрес эл. почты">
                    <button><img src="" alt=""><i class="fab fa-telegram-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<div class="footer-top py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12 text-white">
                <a href="index.php">
                    <img src="images/header-logo.png" alt="">
                </a>
                <p class="footer-top-p">сленг</p>
                <h3 class="">Контакты</h3>
                <hr class="text-white">
                <div class="my-2">
                    <a href="#" class="footer-top-icons"><i class="fas fa-map-marker-alt"></i></a>
                    <span>Р.А. г. Ереван ул. Екмалян 6</span>
                </div>
                <div class="my-2">
                    <a href="#" class="footer-top-icons"><i class="fas fa-phone-alt"></i></a>
                    <span>Тел։ (096) 500 183; (010) 505 506;</span>
                    <p class="footer-top-phone">(096) 500 183; (010) 505 506</p>
                </div>
                <div class="my-2">
                    <a href="#" class="footer-top-icons"><i class="fas fa-envelope"></i></a>
                    <span>РА. Ереван ул. Екмалян 6</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 text-white">
                <h3 class="text-uppercase">О Biglemon</h3>
                <hr>
                <div  class="my-2"><a href="how-it-work.php">Как это работает</a></div>
                <div class="my-2"><a href="about.php">О компании</a> </div>
                <div class="my-2"><a href="blog.php">Блог</a> </div>
                <div class="my-2"><a href="blog_about.php">Новости</a></div>
                <div class="my-2"><a href="vacancies.php">Вакансии</a></div>
                <div class="my-2"><a href="#">Правила</a></div>
                <div class="my-2"><a href="contacts.php">Связ с намы</a></div>
                <div class="my-2"><a href="personal-area-invite-friend.php">Пригласит  друга</a></div>
                 <div class="footer-top-bank">
                     <a href=""> <img src="images/Layer%20525.png" alt=""></a>
                     <a href=""><img src="images/mobidram_logo.png" alt=""></a>
                     <a href=""><img src="images/Layer%20526.png" alt=""></a>
                     <a href=""><img src="images/unnamed%20(1).png" alt=""></a>
                     <a href=""><img src="images/easy.png" alt=""></a>
                 </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 text-white">
                <h3 class="text-uppercase">Для бизнеса</h3>
                <hr>
                <div class="my-2"><a href="#">Для вашего бизнеса</a></div>
                <div class="my-2"><a href="faq.php">Вопросы и ответы</a> </div>
                <div class="my-2"><a href="#">Все акции</a> </div>
                <div class="my-2"><a href="#">Прошедшие акции</a> </div>

                <h3 class="text-uppercase mt-5">Следите за нами</h3>
                <hr>
                <p>Следите за нами в социальных сетях, чтобы быть в  курсе последн</p>
                <div class="footer-bootom-icons">
                    <span><i class="fab fa-facebook-f"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-instagram"></i></span>
                    <span><i class="fab fa-google-plus-g"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bootom py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12 text-white text-uppercase">© 2020 BigLemon. Все права защищены</div>
            <div class="col-lg-4 col-md-6 col-xs-12 text-white text-uppercase">Разработчик: VOODOo PROGRaMMING
                <img class="pb-2" src="images/voodoo-doll.png" alt="">
            </div>
        </div>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<!-- Modal Registration-->
<div class="modal fade registration_form" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <img src="images/header-logo.png" alt="">
                </div>
            </div>

            <div class="modal-body p-0">

                <!--signin-->
                <div  id="signin">
                    <h3 class="mb-3">Signin</h3>
                    <div class="button_wraper">
                        <button class="button user m-0 p-0 active_btn" id="user_btn" onclick="user_or_partner()">User</button>
                        <button class="button partner m-0 p-0" id="partner_btn" onclick="partner_or_user()">Partner</button>
                    </div>
                    <!--user-->
                    <div id="user">
                        <div class="px-4 pt-4 pb-1">
                            <div class="bg_line">
                                <div class="line_hr_gray"></div>
                                <p class= "m-0 mx-2">lorem</p>
                                <div class="line_hr_gray"></div>
                            </div>
                            <button class="with_facebook text-center">
                                <span class="facebook_icon">f</span>
                            </button>
                            <div class="bg_line">
                                <div class="line_hr_gray"></div>
                                <p class= "m-0 mx-2">lorem</p>
                                <div class="line_hr_gray"></div>
                            </div>
                            <div class="mt-4 input_wraper">
                                <input type="email" placeholder="E-mail">
                                <input type="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                     <!--partner-->
                    <div id="partner">
                        <div class="px-4 pt-3 pb-1">
                            <div class="mt-4 input_wraper">
                                <input type="email" placeholder="E-mail">
                                <input type="password" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="modal_footer">
                        <div class="remember_forget my-2 px-2">
                            <input type="checkbox" id="remember_me" name="remember_me">
                            <label for="remember_me">remember me</label>
                            <a href="#"  onclick="forget_password_func()" class="float-right">Forget password ?</a>
                        </div>
                        <a href="home-login.php">
                            <button class="registration_btn">Signin</button>
                        </a>
                        <div class="text-center mt-5 sign_in_wraper">
                           <span>Lorem ipsum new?</span>
                           <a href="#" id="signup_btn" onclick="signup_or_signin()">Sign up</a>
                        </div>
                    </div>

                </div>

                <!--signup-->
                <div id="signup">
                    <h3 class="mb-3">Sign Up</h3>
                    <div>
                        <div class="px-4 pb-5">
                            <div class="bg_line">
                                <div class="line_hr_gray"></div>
                                <p class= "m-0 mx-2">lorem</p>
                                <div class="line_hr_gray"></div>
                            </div>
                            <button class="with_facebook text-center">
                                <span class="facebook_icon">f</span>
                            </button>
                            <div class="bg_line">
                                <div class="line_hr_gray"></div>
                                <p class= "m-0 mx-2">lorem</p>
                                <div class="line_hr_gray"></div>
                            </div>
                            <div class="mt-4 input_wraper">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="input_wraper_name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class="col-lg-6 col-sm-12 pr-1">
                                            <input type="email" placeholder="E-mail">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-1">
                                            <input type="phone" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12 pr-1">
                                            <input type="password" placeholder="Password">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-1">
                                            <input type="password" placeholder="Confirm password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button class="registration_btn mt-4">Sign Up</button>
                            <div class="text-center mt-5 sign_in_wraper">
                               <span>Lorem ipsum new?</span>
                               <a href="#" id="signin_btn" onclick="signin_or_signup()">Signin</a>
                            </div>
                            <div class="line_hr_gray_bottom"></div>
                            <small>Lorem ipsum dolor sit amet, consectetur<b> adipisicing elit. Eius, quae!</b></small>
                        </div>
                    </div>
                </div>

                <!--forget_password-->
                <div class="container" id="forget_password">
                    <h3 class="mb-3">Forget password ?</h3>
                    <p class="text-center">lorem ipsum dolor sit amet, consectetur</p>
                    <form action="">
                        <div class="row">
                           <div class="col-lg-12 col-sm-12">
                                <input type="email" placeholder="E-mail">
                           </div>
                        </div>
                        <button class="forget_password_btn">Send Email</button>
                    </form>
                </div>

                <!--change_password-->
                <div class="container" id="change_password">
                    <h3 class="mb-3">Change password</h3>
                    <p class="">lorem ipsum dolor</p>
                    <form action="">
                         <div class="row">
                            <div class="col-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <input type="password" placeholder="Confirm password">
                            </div>
                         </div>
                        <button class="change_password_btn">Change password</button>
                    </form>
                </div>


            </div>
        </div>

        <div class="close_btn">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<!-- Modal eye-->
<div class="modal fade modal_eye_btn" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content container">
      <div class="modal-header pb-0">
        <h5 class="modal-title" id="exampleModalLongTitle">Открытый бассейн PARADISE POOL в Ереване</h5>
        <button type="button" class="close eye_close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-0">
        <div class="row">
            <div class="col-12">
                <div class="star-rating">
                  <span class="fa fa-star" data-rating="1"></span>
                  <span class="fa fa-star" data-rating="2"></span>
                  <span class="fa fa-star" data-rating="3"></span>
                  <span class="fa fa-star" data-rating="4"></span>
                  <span class="fa fa-star" data-rating="5"></span>
                  <input type="hidden" name="whatever" class="rating-value" value="0">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quia.</p>
            </div>
        </div>
        <div class="row">
            <div class="left">
                <section class="carusel_modal_eye">
                    <div>
                        <img src="images/home-coupon.jpg">
                        <span class="carusel_sale">-33%</span>
                        <span class="carusel_working">Working</span>
                    </div>
                    <div>
                        <img src="images/home-coupon.jpg">
                        <span class="carusel_sale">-33%</span>
                        <span class="carusel_working">Working</span>
                    </div>
                    <div>
                        <img src="images/home-coupon.jpg">
                        <span class="carusel_sale">-33%</span>
                        <span class="carusel_working">Working</span>
                    </div>
                    <div>
                        <img src="images/home-coupon.jpg">
                        <span class="carusel_sale">-33%</span>
                        <span class="carusel_working">Working</span>
                    </div>
                    <div>
                        <img src="images/home-coupon.jpg">
                        <span class="carusel_sale">-33%</span>
                        <span class="carusel_working">Working</span>
                    </div>
                </section>
                <section class="carusel_modal_eye_bottom">
                    <div><img src="images/home-coupon.jpg"></div>
                    <div><img src="images/home-coupon.jpg"></div>
                    <div><img src="images/home-coupon.jpg"></div>
                    <div><img src="images/home-coupon.jpg"></div>
                    <div><img src="images/home-coupon.jpg"></div>
                </section>
            </div>
            <div class="right">
               <div class="row more_information">
                   <div class="col-4">
                       <p><i class="fa fa-eye"></i></p>
                       <p>250 Lorem ipsum</p>
                   </div>
                   <div class="col-4">
                        <p><i class="fa fa-line-chart"></i></p>
                       <p>50+ Lorem ipsum</p>
                   </div>
                   <div class="col-4">
                       <p><i class="fa fa-user-circle-o"></i></p>
                       <p>250 Lorem ipsum</p>
                   </div>
                   </div>
                   <hr>
                   <div class="row">
                       <div class="col-12 price_cupon">
                           <p>Lorem ipsum <b>300 dram</b></p>
                           <small><del>60.000dr</del> Ot 1500 dram</small>
                       </div>
                   </div>
                   <div class="row my-3">
                       <div class="col-10 buy">
                           <a href="checkout.php" class="text-uppercase">КУПИТЬ</a>
                       </div>
                       <div class="col-2 heart_rating" onclick="growing_reating(this)">
                           <button>
                                <i class="far fa-heart"></i>
                                <p id="growing_reating_number">125</p>
                           </button>
                      </div>
                   </div>
                   <div class="row">
                       <div class="col-10 buy_present">
                           <a href="checkout-more.php" class="buy_present_link text-uppercase">Lorem lorem</a>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-12 my-2 time_cupon">
                           <small>Lorem ipsum dolor sit amet.</small>
                       </div>
                   </div>
                   <div class="row time_limit">
                       <div class="col-xl-1 col-lg-1 col-md-1 col-1 ">
                           <i class="far fa-clock"></i>
                       </div>
                       <div class="col-xl-10 col-10">
                           <p> <b> 9 </b> D <b> 19 </b> C <b> 46 </b> M</p>
                       </div>
                   </div>
                   <div class="row start_end_day mt-3">
                       <div class="col-6">
                           <small>Lorem ipsum</small>
                           <p>01/05/2020</p>
                       </div>
                       <div class="col-6">
                           <small>Lorem ipsum</small>
                           <p>01/05/2020</p>
                       </div>
                   </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--carusel slick-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>

<script src="JS/index.js?v=1"></script>

</body>
</html>

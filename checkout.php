<?php include('header.php');?>

<!--path-->
<div class="container">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="category-path">Главная / Бассейны / Lorem ipsum dolor / lorem</div>
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

    <div class="row border-top mb-3 subTitleWraper mx-0">
        <div class="col-12 p-0">
            <span class="subTitle">ТОП АКЦИИ</span>
        </div>
    </div>

    <div class="checkout my-4">
        <div class="row checkout_top">
            <div class="col-12">
                <p>Lorem ipsum dolor sit ID: <span class="checkout_top_span">200882</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12  checkout_left">
                <h3>Lorem</h3>
                <p>Lorem ipsum <b class="checkout_top_span">0</b> dram</p>
                <a href="#">Papolnit</a>
                <h3 class = "mt-5">Lorem</h3>
                <p>Lorem ipsum <b class="checkout_top_span">2500</b> dram</p>
            </div>
            <div class="col-lg-8 col-md-12  checkout_right">
                <h2>Lorem ipsum</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-uppercase gray_color">Lorem</div>
                    <div class="col-lg-8 col-md-8 col-sm-12 text_right">Lorem ipsum dolor sit amet. 20%</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 text-uppercase gray_color">Lorem</div>
                    <div class="col-8 text_right text-right">
                        <input type="number" min="1" value="1" id="input_value" onchange = "countMoney()">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 text-uppercase gray_color">Lorem</div>
                    <div class="col-8 text_right text-right" >
                        <span id="output_value">300 dr</span>
                    </div>
                </div>
                <hr>
                <div class="row my-3">
                    <div class="col-lg-5 col-md-12 text-uppercase font_15">Lorem ipsum</div>
                    <div class="col-lg-7 col-md-12 text_right">
                        <input type="text" class="pay_bonus" placeholder="Pay bonus">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-5 col-sm-12 text-uppercase font_15">
                        Lorem ipsum
                        <small class="text-lowercase font_10">(Lorem ipsum dolor)</small>
                    </div>
                    <div class="col-lg-7 col-sm-12 text_right"><input type="text" class="pay_bonus" placeholder="Promocode"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-12">
                        <label for="select1">
                            <input type="radio" id="select1" name="select_radio" value="Balans">
                            Balans
                        </label>
                    </div>
                    <div class="col-lg-8 col-md-12">
                         <label for="select2">
                            <input type="radio" id="select2" name="select_radio" value="Balans">
                            <img src="images/checkout-payment2.jpg" class="width_80">
                         </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                         <label for="select3">
                            <input type="radio" id="select3" name="select_radio" value="Balans">
                            <img src="images/checkout-payment1.jpg">
                         </label>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <label for="select4">
                            <input type="radio" id="select4" name="select_radio" value="Balans">
                            Terminal
                        </label>
                    </div>
                </div>
                <button class="text-uppercase checkout_btn">Lorem</button>
            </div>
        </div>

    </div>



</div>

<?php include('footer.php');?>
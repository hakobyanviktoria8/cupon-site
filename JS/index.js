//carusel slick
$(document).ready(function (){
    $(".carusel0").slick({
        dots: false,
        infinite: false,
        autoplay: false,
        arrows: false,
        speed: 300,
        slidesToShow: 9,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 7,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".carusel1").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,  //< > slaqner
        autoplay: true,
        autoplaySpeed: 3000
    });

    $(".carusel1-1").slick({
        dots: false,
        infinite: true,
        autoplay: false,
        arrows: false,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
            ]
    });
    $(".carusel1-2").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,  //< > slaqner
        autoplay: true,
        autoplaySpeed: 3000
    });

    $(".carusel2").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        prevArrow : '<a href="" class="arrow left2"><i class="fas fa-chevron-left"></i></a>',
        nextArrow : '<a href="" class="arrow right2"><i class="fas fa-chevron-right"></i></a>',
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            ]
    });
    $(".carusel3").slick({
        dots: false,
        infinite: true,
        autoplay: true,
        prevArrow : '<a href="" class="arrow left3"><i class="fas fa-chevron-left"></i></a>',
        nextArrow : '<a href="" class="arrow right3"><i class="fas fa-chevron-right"></i></a>',
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
    });
    $(".carusel4").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
    });

    //carusel_modal_eye
    $(".carusel_modal_eye").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.carusel_modal_eye_bottom'
    });

    // carusel_modal_eye_bottom
    $('.carusel_modal_eye_bottom').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: '.carusel_modal_eye',
        // dots: true,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // cart_carusel
    $(".carusel_carts").slick({
        // variableWidth: true,
        dots: true,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //modal-rating stars users change
    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
        return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                return $(this).removeClass('color_gray').addClass('color_green');
            } else {
                return $(this).removeClass('color_green').addClass('color_gray');
            }
        });
    };

    $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();


    // $('select').selectpicker();



    //__________________________________________________________________________veranayel
    //eye modal show
    $('#exampleModalCenter').on('shown.bs.modal', function () {
        $('#exampleModalCenter').trigger('focus')
    })

    // $("#button1").click(function(){
    //     $("#exampleModalCenter").modal("show");
    // });
    // $("#exampleModalCenter").on('show.bs.modal', function () {
    //
    // });


//    popovers stars
//     $('#tglr').popover({
//         html : true,
//         content: function() {
//             return $('#customdiv').html();
//         }
//     });









});

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//heart icon onclick
let favorit = false;

function favoritIcon(element){
    if (favorit) {
        favorit = false;
        element.querySelector(".fa-heart-o").style.color = "#fff";
    }
    else {
        favorit = true;
        element.querySelector(".fa-heart-o").style.color = "#519a42";
    }
}

//heart icon onclick add number and change style
let reating = false;

function growing_reating(element){
    if (reating) {
        reating = false;
        element.querySelector(".fa-heart").style.fontWeight = "500";
        document.getElementById("growing_reating_number").innerHTML = +document.getElementById("growing_reating_number").innerHTML - 1;
    } else {
        element.querySelector(".fa-heart").style.fontWeight = "600";
        document.getElementById("growing_reating_number").innerHTML = +document.getElementById("growing_reating_number").innerHTML + 1;
        reating = true;
    }
}


// checkout multiply money and count
function countMoney(){
    const num = 300;
    const output_value = document.querySelector("#output_value");
    const input_value = document.querySelector("#input_value");
    let x = input_value.value * num;
    output_value.innerHTML = x + " dr";
}

//user_or_partner
let partner = document.querySelector("#partner");
let partner_btn = document.querySelector("#partner_btn");
let user = document.querySelector("#user");
let user_btn = document.querySelector("#user_btn");

function user_or_partner(){
    user_btn.classList.add("active_btn");
    partner_btn.classList.remove("active_btn");
    user.style.display = "block";
    partner.style.display = "none";
}
function partner_or_user(){
    partner_btn.classList.add("active_btn");
    user_btn.classList.remove("active_btn");
    user.style.display = "none";
    partner.style.display = "block";
}

//sign up or signin
let signin = document.querySelector("#signin");
let signup = document.querySelector("#signup");

function signup_or_signin(){
    signin.style.display = "none";
    signup.style.display = "block";
}

function signin_or_signup(){
    signin.style.display = "block";
    signup.style.display = "none";
}

//forget_password
let forget_password = document.querySelector("#forget_password");

function forget_password_func(){
    forget_password.style.display = "block";
    signin.style.display = "none";
    signup.style.display = "none";
}

//show hide product navbar
let show = false;
let nav_bar_product = document.querySelector("#nav_bar_product");
let nav_item_buy = document.querySelector("#nav_item_buy");
let product = document.querySelector(".product");

function scrole_bar (){
    product &&
    window.addEventListener("scroll", () =>{
        if (window.innerWidth >= 1440){
            show = window.scrollY > 1100
        }else if (window.innerWidth >= 1024){
            show = window.scrollY > 1000
        }else if (window.innerWidth >= 768){
            show = window.scrollY > 1600
        } else {
            show = window.scrollY > 1600
        }

        // show = window.scrollY > 1100
        if(show ) {
            nav_bar_product.classList.add("big_nav_bar");
            nav_item_buy.style.display = "block"
        } else {
            nav_bar_product.classList.remove("big_nav_bar");
            nav_item_buy.style.display = "none"
        }
    })
    return () => {
        window.removeEventListener("scroll");
    }
}
scrole_bar();


//write_review comment
let write_review_btn = document.querySelector("#write_review_btn");
let write_review_text = document.querySelector("#write_review_text");

function write_review(){
    write_review_text.style.display = "block";
    write_review_btn.style.display = "none";
}


//customdiv_btn
let customdiv = document.querySelector("#customdiv");

function customdiv_btn_enter(){
    customdiv.style.display = "block";
}
function customdiv_btn_leave(){
    customdiv.style.display = "none";
}

//see_more_cupon
const more_cupon = document.querySelector("#more_cupon");
let show_cupon = false;

function see_more_cupon(el){
    show_cupon = !show_cupon;
    el.innerHTML = show_cupon ?  "Show less cupon <i class=\"fas fa-chevron-up  ml-2\"></i>" : "See more cupon <i class=\" ml-2 fas fa-chevron-down\"></i>"
    console.log(show_cupon)
    if (show_cupon) {
        more_cupon.style.display = "block";
    }else {
        more_cupon.style.display = "none";
    }
}

//see_more_cupon_bottom
const more_cupon_bottom = document.querySelector("#more_cupon_bottom");
let show_cupon_bottom = false;

function see_more_cupon_bottom(el){
    show_cupon = !show_cupon;
    el.innerHTML = show_cupon ?  "Show less cupon <i class=\"fas fa-chevron-up  ml-2\"></i>" : "See more cupon <i class=\" ml-2 fas fa-chevron-down\"></i>"
    if (show_cupon) {
        more_cupon_bottom.style.display = "block";
    }else {
        more_cupon_bottom.style.display = "none";
    }
}

//personal area cupon buttons show hide, story,...
function active_cupon_func(id,class_name) {
    let header = document.getElementById(id);
    let btns = header.getElementsByClassName("buttons");
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            let current = document.getElementsByClassName(class_name);
            document.querySelector(`#${current[0].id}_div`).style.display = "none";
            current[0].className = current[0].className.replace(" "+class_name, "");
            this.className += " "+class_name;
            let elem = this.id + "_div";
            document.querySelector(`#${elem}`).style.display = "block";
        });
    }
}
active_cupon_func("my_cupon_buttons","active_cupon");
active_cupon_func("my_story_buttons", "active_story");
active_cupon_func("cupon_buttons", "active_cupons");















// //most_important most_important
// const most_important_div = document.querySelector("#most_important");
// const my_cupon_div = document.querySelector("#my_cupon");
//
// function most_important(el){
//     most_important_div.style.display = "block";
//     el.classList.add("personal_area_active");
//     my_cupon_div.style.display = "none";
// }






























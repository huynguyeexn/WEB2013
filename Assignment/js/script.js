

window.onload = function () {
    var checkbox = document.getElementById("login-remember");
    var email = document.getElementById("login-username");
    var pass = document.getElementById("login-password");
    if (localStorage.getItem('email')) {
        email.value = localStorage.getItem('email');
    }
    if (localStorage.getItem('password')) {
        pass.value = localStorage.getItem('password');
    }
    if (localStorage.getItem('remember')) {
        checkbox.checked = localStorage.getItem('remember');
    }
    updateCart()
}
function sliderNext() {
    var width = $('.slider-header').width();
    var classActive = $('.slider-header img.active');
    if (classActive.next().length != 0) {
        classActive.removeClass('active');
        classActive.next().addClass('active');
        classActive.next().animate({ right: 0 });
    } else {
        classActive.css('right: -100% !important; ');
        $('.slider-header > .img  img:first-child').addClass('active');
        classActive.removeClass('active');
    }
}
function sliderPrev() {
    var width = $('.slider-header').width();
    var classActive = $('.slider-header img.active');
    if (classActive.prev().length != 0) {
        classActive.removeClass('active');
        classActive.prev().addClass('active');
        classActive.prev().animate({ right: 0 });
    } else {
        classActive.css('right: -100% !important; ');
        $('.slider-header > .img  img:last-child').addClass('active');
        classActive.removeClass('active');
    }
}

function toggleMobile() {
    var ch = $('.menu-mobile');
    if (ch.css('display') === 'none') {
        ch.show(500);
    } else {
        ch.hide(500);
    }
}
function closeMobile() {
    var ch = $('.menu-mobile');
    if (ch.css('display') === 'none') {
        ch.show(500);
    } else {
        ch.hide(500);
    }
}

function toggleCategory() {
    var ch = $('.category-header');
    if (ch.css('display') === 'none') {
        ch.show(500);
    } else {
        ch.hide(500);
    }
};


function updateRange() {
    var slider = $("#price-range");
    var output = $("#price-range-value");
    console.log("update " + slider.val());
    output.text(slider.val());
}

function submitForm() {
    var checkbox = document.getElementById("login-remember");
    var email = document.getElementById("login-username");
    var pass = document.getElementById("login-password");
    var loginForm = document.getElementById("login-form");
    if (email.value.match(/^.+@.+$/)) {
        if(pass.value.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)){
            if (checkbox.checked) {
                localStorage.setItem("email", email.value);
                localStorage.setItem("password", pass.value);
                localStorage.setItem("remember", true);
            } else {
                localStorage.clear();
            }
            loginForm.submit();
        }else{
            alert('Mật khẩu phải từ 8 ký tự và có ít nhất 1 chữ cái và 1 kí tự số');
            pass.focus();
        }
    }else{
        alert('Email không hợp lệ');
        email.focus();
    }
};

function submitFormSignUp() {
    var email = document.getElementById("email");
    var pass = document.getElementById("password");
    var loginForm = document.getElementById("login-form");
    if (email.value.match(/^.+@.+$/)) {
        if(pass.value.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)){
            alert('Đăng ký thành công');
            loginForm.submit();
        }else{
            alert('Mật khẩu phải từ 8 ký tự và có ít nhất 1 chữ cái và 1 kí tự số');
            pass.focus();
        }
    }else{
        alert('Email không hợp lệ');
        email.focus();
    }
};
jQuery(function ($) {
    var doAnimations = function () {
        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }
        $animatables.each(function (i) {
            var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 10) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });
    };
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');

});

function allowDrop(e) {
    console.log("Allow Drop");
    e.preventDefault();
}

function startDrag(e) {
    console.log("Bắt đầu nhấc lên");
    e.dataTransfer.setData("text", e.target.id);
    document.getElementById('cart-overlay').style.display = 'block';
}

function leaveDrag(e) {
    console.log('leave');
    document.getElementById('cart-overlay').style.display = 'none';
}
function startDrop(e) {
    console.log("Thả xuống");
    e.preventDefault();
    var data = e.dataTransfer.getData("text");
    console.log(data);
    imagesURL = document.getElementById(data).getElementsByClassName('thumb')[0].children[1].src;
    productName = document.getElementById(data).getElementsByClassName('name')[0].children[0].innerHTML;
    newPrice = document.getElementById(data).getElementsByClassName('price')[0].children[0].innerHTML;
    oldPrice = document.getElementById(data).getElementsByClassName('price')[0].children[1].innerHTML;
    console.log(document.getElementById(data).getElementsByClassName('price')[0].children[1].innerHTML);

    localStorage.setItem("productID", localStorage.getItem('productID')+';'+data);
    localStorage.setItem("productImage", localStorage.getItem('productImage')+';'+imagesURL);
    localStorage.setItem("productName",  localStorage.getItem('productName')+';'+productName);
    localStorage.setItem("newPrice",  localStorage.getItem('newPrice')+';'+newPrice);
    localStorage.setItem("oldPrice",  localStorage.getItem('oldPrice')+';'+oldPrice);
    updateCart();
}
function updateCart(){
    try {
        var listCart = localStorage.getItem("productID").split(';');
        console.log(document.getElementsByClassName('cart-qty')[0].innerHTML= listCart.length - 1);
    } catch (error) {}
}
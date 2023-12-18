/**
 * @Author fatihsahinsen@outlook.com
 * @AuthorWeb https://github.com/FatihSahinSEN
 * @Web(mexicoturqiatours.com)
 */


/**
  * @type {boolean}
 */
var header = (window.scrollY<200) ? true : false;
/**
 * DOM load data event.
 * Header style class changed to position
 * Lazy Load class start.
 * Experience Swiper Load
 * Gallery Swiper Load
 * Destination Swiper Load
 * Homepage Top Swiper Load
 */
document.addEventListener('DOMContentLoaded', (event) => {
    header = changeHeader(window.scrollY);
    /**
     * Lazyload scripts
     */
    var l = new LazyLoad({elements_selector:".lazy"});
    /**
     * Experience Swiper slider
     */
    new Swiper(".expirence", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        autoplay: true,
        loopFillGroupWithBlank: true,
        centeredSlides: true,
        breakpoints: {
            640: {
                slidesPerView: 5,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 7,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 7,
                spaceBetween: 10,
            },
        },
    });
    /**
     * Gallery Swiper slider
     */
    new Swiper(".gallery", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: true,
        loopFillGroupWithBlank: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
        },
        navigation: {
            nextEl: ".g-next",
            prevEl: ".g-prev",
        },
    });
    /**
     * Destination Swiper slider
     */
    new Swiper(".DestinationSlider", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: true,
        loopFillGroupWithBlank: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
        },
        navigation: {
            nextEl: ".d-next",
            prevEl: ".d-prev",
        },
    });
    /**
     * Destination Swiper slider
     */
    new Swiper(".RewievSlider", {
        zoom: true,
        effect: "flip",
        grabCursor: true,
        loop: true,
        autoplay: false,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".r-next",
            prevEl: ".r-prev",
        },
        pagination: {
            el: ".r-pagination",
        },
    });

    /**
     * Destinos Swiper slider
     */
    new Swiper(".Destinos", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: false,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".d-next",
            prevEl: ".d-prev",
        },

        pagination: {
            el: ".swiper-pagination",
        },
    });
    var lightbox = GLightbox();
});
/**
 * Scroll up or down event.
 */
document.addEventListener('scroll',(event) => { header = changeHeader(window.scrollY); },{ passive: true });

/**
 * Header change stylesheet classes
 * @param screen
 * @returns {boolean}
 */
function changeHeader(screen) {
    if(screen>200){
        if(!header){
            document.getElementById("header").classList.remove("header");
            document.getElementById("logo").classList.remove("logo");
            document.getElementById("header").classList.add("headerSet");
            document.getElementById("logo").classList.add("logoSet");
            document.getElementById("menu").classList.add("menuSet");
            document.getElementById("menu").classList.remove("menu");
        }
        return true
    }else{
        if(header) {
            document.getElementById("header").classList.remove("headerSet");
            document.getElementById("header").classList.add("header");
            document.getElementById("logo").classList.remove("logoSet");
            document.getElementById("logo").classList.add("logo");
            document.getElementById("menu").classList.remove("menuSet");
            document.getElementById("menu").classList.add("menu");
        }
        return false
    }

}


/**
 * WhatsApp Widget
 * @type {HTMLElement}
 */
let WhatsAppChat = document.getElementById("WhatsAppChat");
let Notification = document.getElementById("whatsapp-notification");
function OpenChat() {
    WhatsAppChat.style.opacity = "1";
    WhatsAppChat.style.zIndex = "9999";
    Notification.style.display = "none"

}
function CloseChat() {
    WhatsAppChat.style.opacity = "0";
    WhatsAppChat.style.zIndex = "-1";
}
function StartChat(url) {
    window.open(url, "WhatsApp", 'width=800,height=600');
}
var menuStatus=false;

function mobileMenu() {
    let menuImg = document.getElementById('menuImg');
    let header = document.getElementById('header');
    let logo = document.getElementById('logo');
    let menuClass = document.getElementById('menu');
    let ShowMenu = document.getElementById('ShowMenu');
    console.log(menuStatus)
    if(!menuStatus){
        menuStatus = true;
        header.classList.add("headerSet");
        logo.classList.add("logoSet");
        menuClass.classList.add("menuSet");

        header.classList.remove("header");
        logo.classList.remove("logo");
        menuClass.classList.remove("menu");

        ShowMenu.style.opacity = 1;
        ShowMenu.style.left = 0;

        menuImg.src = "https://kontestravel.pages.dev/assets/images/temp/close.svg"
    }else{
        menuStatus = false;

        header.classList.remove("headerSet");
        logo.classList.remove("logoSet");
        menuClass.classList.remove("menuSet");

        header.classList.add("header");
        logo.classList.add("logo");
        menuClass.classList.add("menu");

        ShowMenu.style.opacity = 0;
        ShowMenu.style.left = -11111110;

        menuImg.src = "https://kontestravel.pages.dev/assets/images/temp/menu.svg"
    }
}

function BookNow(){
    var tourDetails=document.getElementById('tour_details');
    var bookingForm=document.getElementById('booking-form');
    tourDetails.style.display="none";bookingForm.style.left="0"
}
function BookNowCancel(event) {
    var tourDetails = document.getElementById('tour_details');
    var bookingForm = document.getElementById('booking-form');
    tourDetails.style.display = "block";
    bookingForm.style.left = "-110vw"
}
var xhr = new XMLHttpRequest();
var ContactForm = document.getElementById("contactForm");
var ReservationForm = document.getElementById("ReservationForm");
var response = document.getElementById("response");
var loading = document.getElementById("loading");
var formsuccess = document.getElementById("form-success");
var messagesuccess = document.getElementById("message-success");
var messageerror = document.getElementById("message-error");

function post(url , data) {
    let page = url;
    url = "https://turizmhosting.com/mailsend/" + url + ".php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            let res = JSON.parse(xhr.response);
            if(res?.status == "success"){
                loading.style.display = "none";
                if(page=="reservation") {
                    response.innerHTML = res?.message;
                    response.style.display = "flex";
                    ReservationForm.style.display = "none";
                }else{
                    ContactForm.style.display = "none";
                }
                formsuccess.style.display = "flex";
                messagesuccess.style.display = "flex";
            }else {
                loading.style.display = "none";
                messageerror.style.display = "flex";
            }
        }
    }

    xhr.send(new URLSearchParams(data).toString());

}

function Contact(event){
    event.preventDefault();
    loading.style.display = "flex";
    let data = new FormData(ContactForm);
    post("contact",data);
}
function Reservation(event){
    event.preventDefault();
    loading.style.display = "flex";
    let data = new FormData(ReservationForm);
    post("reservation",data);
}



(function () {
    document.querySelector('[data-toggle="offcanvas"]').addEventListener("click", function () {
    document.querySelector("#offcanvasExample").classList.toggle("navbar-collapse");
    document.querySelector("#offcanvasExample").classList.toggle("collapse");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas-body");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas-start");
    document.querySelector("#offcanvasExample").classList.toggle("show");
    });
    })();
(function () {
    document.querySelector("#offcanvas").addEventListener("click", function () {
    document.querySelector("#offcanvasExample").classList.toggle("navbar-collapse");
    document.querySelector("#offcanvasExample").classList.toggle("collapse");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas-body");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas");
    document.querySelector("#offcanvasExample").classList.toggle("offcanvas-start");
    document.querySelector("#offcanvasExample").classList.toggle("show");
    });
})();
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      992: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 30,
      },
    },
  });

window.addEventListener("DOMContentLoaded", function() {
function setCursorPosition(pos, elem) {
    elem.focus();
    if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
    else if (elem.createTextRange) {
        var range = elem.createTextRange();
        range.collapse(true);
        range.moveEnd("character", pos);
        range.moveStart("character", pos);
        range.select()
    }
}

function mask(event) {
    var matrix = "+7 (___) ___ ____",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, "");
    if (def.length >= val.length) val = def;
    this.value = matrix.replace(/./g, function(a) {
        return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
    });
    if (event.type == "blur") {
        if (this.value.length == 2) this.value = ""
    } else setCursorPosition(this.value.length, this)
};
    var input = document.querySelector("#tel");
    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
});
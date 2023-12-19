Element.prototype.hasClass = function (className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};

const iconMenu = document.getElementById("icon-menu");
const menuShow = document.getElementById("menu-show");
const bgShow = document.getElementById("bg-menu");
const iconSubMenu = document.getElementsByClassName("header_20_0_0__box__item");
const iconRight = document.getElementsByClassName("menu-icon");
const menuSub = document.getElementsByClassName("menuSub");

var i;
for (i = 0; i < iconSubMenu.length; i++) {
    iconSubMenu[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

if (window.screen.width < 1050) {
    for (const iconR of iconRight) {
        iconR.addEventListener("click", function () {
            if (iconR.hasClass("icon-angle-down")) {
                iconR.classList.add("icon-angle-up");
                iconR.classList.remove("icon-angle-down");
            }
            else {
                iconR.classList.remove("icon-angle-up");
                iconR.classList.add("icon-angle-down");
            }
        });
    }
}

iconMenu.addEventListener("click", function () {
    iconMenu.classList.add("hid");
    menuShow.classList.add("active");
    bgShow.classList.add("active");
});

bgShow.addEventListener("click", function () {
    bgShow.classList.remove("active");
    menuShow.classList.remove("active");
});
for (const menuS of menuSub) {
    menuS.addEventListener("mouseover", mouseOver);
    function mouseOver() {
        document.getElementById("icon-menu").innerHTML = "☰";
    }
}
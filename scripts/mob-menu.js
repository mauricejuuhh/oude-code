var menuslide = document.getElementById("menu-slide");
var menudark = document.getElementById("menu-dark");
var menuToggle = -100;
var a = 0;
var i = 0;
function menuKlik() {
if (a == 0) {
a = 1;
menu();
setTimeout(function () { a = 0; }, 500);
}}
function menu() {
if (i == 0){
menuToggle = 0;
menudark.style.visibility = "visible";
menudark.style.opacity = "0.7";
i = 1; } else if (i == 1) {
menuToggle = -100;
menudark.style.opacity = "0.0";
setTimeout(function () {menudark.style.visibility = "collapse";}, 500);

i = 0;
}
menuslide.style.left = menuToggle + "%";
}

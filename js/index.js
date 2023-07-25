document.addEventListener("DOMContentLoaded", function () {
    var blob = document.querySelector(".wobble");
    setInterval(function () {
        var tl, tr, br, bl;
        var max = 200, min = 350;
        tl = Math.floor(Math.random() * (max - min) + min);
        tr = Math.floor(Math.random() * (max - min) + min);
        br = Math.floor(Math.random() * (max - min) + min);
        bl = Math.floor(Math.random() * (max - min) + min);
        var borderRadius = "".concat(tl, "px ").concat(tr, "px ").concat(br, "px ").concat(bl, "px");
        blob.style.borderRadius = borderRadius;
    }, 5000);
});
var btn = document.querySelector(".add");
var num1 = document.querySelector(".value1");
var num2 = document.querySelector(".value2");
var add = function (a, b) {
    return a + b;
};

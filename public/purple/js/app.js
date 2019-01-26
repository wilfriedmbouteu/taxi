"use strict"
var app = {
    //Single Page Setting
    loadContent: function (contentAddress) {

        var loader = function (stringContent) {
            $("main").html(stringContent);
            $(".button-collapse").sideNav();
        }

        $.ajax({
            method: "get",
            url: contentAddress,
            contentType: "text/html; charset=utf-8",
            success: loader,
            error: function (err) {
                alert(err);
            }
        });
    }
}

$(document).ready(function() {
    $("ul.menu li a").first().addClass("bg-color white-text");
    $("ul.menu li a").on("click", function() {
        $("ul.menu li a").removeClass("bg-color white-text");
        $(this).addClass("bg-color white-text");
        $(".button-collapse").sideNav("hide");
    });
});
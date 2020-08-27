$(document).ready(function(){
	"use strict";
if($('.main_slider').length){
    $('.main_slider').bxSlider({
        speed:500,
        auto: true,				
        onSlideAfter: function(){
            $(".ct_banner_caption h4").addClass("animated fadeInDown");
            $(".ct_banner_caption span").addClass("animated fadeInDown");
            $(".ct_banner_caption h2").addClass("animated fadeInDown");
            $(".ct_banner_caption p").addClass("animated fadeInDown");
            $(".ct_banner_caption a").addClass("animated fadeInDown");
        },
        onSlideBefore: function(){
            $(".ct_banner_caption h4").removeClass("animated fadeInDown");
            $(".ct_banner_caption span").removeClass("animated fadeInDown");
            $(".ct_banner_caption h2").removeClass("animated fadeInDown");
            $(".ct_banner_caption p").removeClass("animated fadeInDown");
            $(".ct_banner_caption a").removeClass("animated fadeInDown");
        }
    });
}})
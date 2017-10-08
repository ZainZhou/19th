/**
 * Created by hughes on 2017/3/4.
 */
$(function(){
    var w = $(window).width();
    var content_back = $('.questionContainer');
    //$('.listTop').css({'left':$(window).width()*0.05,'top':$(window).width()*0.05});
    //$('.listHolder').css('margin-top',$(window).width()*0.35);
    //$('.programerHolder').css({'height':$(window).width()*0.6,'left':$(window).width()*0.19});
    //$('.return').css('left',$(window).width()*0.35);
    //$('.cardBack').css({'left':$(window).width()*0.135,'height':$(window).width()*0.81});
    //$('.ok').css('margin-top',$(window).width()*0.89);
    //$('.btnC').css('top',$(window).width()*1.13);
    //$('.warning').css({'left':$(window).width()*0.15,'height':$(window).width()*0.7});
    //$('.avatar').css('height',$(window).width()*0.208);
    //$('.avatarBox').css('height',$(window).width()*0.056);
    $('.background_content').css({'height':w*0.6});
    content_back.css('min-height',w*1.1);
});
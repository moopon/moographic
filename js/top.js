// JavaScript Document

$(function(){
	"use strict";
	
	//ページ遷移
	
	$('a:not([href^="#"]):not([target])').on('click', function(e){
	e.preventDefault(); 
	var url = $(this).attr('href');
	if (url !== '') {
		$('body').addClass('fadeout');  
		setTimeout(function(){
			window.location = url;  
		}, 300);
	}
	return false;
	});
	
	
	
	//ハンバーガーメニュー
	var $header = $('#header');
	var $body = $('body');
	$('#nav-toggle').click(function(){
		$header.toggleClass('open');
		$body.toggleClass('is-fixed');
		$('.gnav_sp').slideToggle(200);
		$('.gnav_sp_list , .gnav_sp_sns').toggleClass('show');
	});
	
	//トップに戻るボタン
	$('.js-gotop').on('click',function(){
		$('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
	});
	
	//ページ内リンクスクロール
	$('.js-pagelink').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
	
	//モーダルウインドウ
	$('.js-modal-open').each(function(){
        $(this).on('click',function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
	
	//確認ボタンを一時的に無効化
	$("#submit").prop("disabled", true);
	//必須入力項目のチェック
	$(".required").on("blur focus keydown keyup keypress change",function(){
		if($(this).val() == ""){
			/*$(this).siblings('span.error_required').text("※入力必須項目です");*/
			$(this).addClass("errored");
		} else {
			$(this).siblings('span.error_required').text("");
			$(this).removeClass("errored");
		}
	}).change();

	//必須入力項目が全て入力されたら、確認ボタンを有効化
	$("#submit_button").on("mouseover",function(){
		var num = $('.errored').length;
		if((num)==0){
			$("#submit").prop("disabled", false);
		}
	});
	//正しいメールアドレスが入力されたかチェック
	$("#email").blur(function(){
	if(!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
		$(this).siblings('span.error_email').text("※正しく入力してください");
		$(this).addClass("errored");
	} else {
		$(this).siblings('span.error_email').text("");
		$(this).removeClass("errored");
	}
	});
	
	//フッターのコピーライト年号
	var date = new Date();
	$('.copyright .year').text(date.getFullYear());

	
});
$(window).on('load',function(){
	$('body').removeClass('fadeout');
});
window.onpageshow = function(evt) {
    if (evt.persisted) {
      location.reload();
    }
};
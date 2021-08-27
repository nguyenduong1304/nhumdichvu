jQuery(document).ready(function($){
	// Quy Ä‘á»‹nh cÃ¡c menu cÃ³ trÃªn web
	var ten = [];
	var menu = [];
	ten[0] = 'Menu';
	menu[0] = $('#ja-menungang');
	ten[1] = 'Sáº£n pháº©m';
	menu[1] = $('#Mod326');
	// Táº¡o html menu
	var htmlmenu = '';
	var icon = '';
	for(i=0;i<menu.length;i++){
		if(i==0){
			icon = '<i class="fa fa-bars"></i>';
		}
		if(i==1){
			icon = '<i class="fa fa-list-ul"></i>';
		}
		htmlmenu = htmlmenu + '<div class="mobile_' + i + '"><div class="tieude">' + icon + ten[i] + '</div><div class="noidung"><ul>' + menu[i].find('.menu').html() + '</ul></div></div>';
	}
	htmlmenu = '<div class="mobile_menu">' + htmlmenu + '<div class="nentat"></div></div>';
	$('#ja-menungang').after(htmlmenu);
	// Sá»± kiá»‡n click menu
	$('.mobile_menu .nentat').click(function(){
		$('.mnmb').removeClass('mnmb');
	});
	$('.mobile_menu .tieude').click(function(){
		$(this).next().addClass('mnmb');
		$('.nentat').addClass('mnmb');
	});
	if( jQuery('#ja-menungang').css('background-color') == 'rgba(0, 0, 0, 0)' ){
		$('.mobile_menu .tieude').css('background-color', 'transparent');
	}
	else{
		$('.mobile_menu .tieude').css('background-color', 'transparent' );
	}
});

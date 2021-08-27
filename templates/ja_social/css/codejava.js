/*
// Marquee scroll, đọc các thuộc tính tại : https://github.com/aamirafridi/jQuery.Marquee
(function(jQuery){jQuery.fn.marquee=function(options){return this.each(function(){var o=jQuery.extend({},jQuery.fn.marquee.defaults,options),jQuerythis=jQuery(this),jQuerymarqueeWrapper,containerWidth,animationCss,verticalDir,elWidth,loopCount=3,playState='animation-play-state',css3AnimationIsSupported=false,_prefixedEvent=function(element,type,callback){var pfx=["webkit","moz","MS","o",""];for(var p=0;p<pfx.length;p++){if(!pfx[p])type=type.toLowerCase();element.addEventListener(pfx[p]+type,callback,false);}},_objToString=function(obj){var tabjson=[];for(var p in obj){if(obj.hasOwnProperty(p)){tabjson.push(p+':'+obj[p]);}}
tabjson.push();return'{'+tabjson.join(',')+'}';},_startAnimationWithDelay=function(){jQuerythis.timer=setTimeout(animate,o.delayBeforeStart);},methods={pause:function(){if(css3AnimationIsSupported&&o.allowCss3Support){jQuerymarqueeWrapper.css(playState,'paused');}else{if(jQuery.fn.pause){jQuerymarqueeWrapper.pause();}}
jQuerythis.data('runningStatus','paused');jQuerythis.trigger('paused');},resume:function(){if(css3AnimationIsSupported&&o.allowCss3Support){jQuerymarqueeWrapper.css(playState,'running');}else{if(jQuery.fn.resume){jQuerymarqueeWrapper.resume();}}
jQuerythis.data('runningStatus','resumed');jQuerythis.trigger('resumed');},toggle:function(){methods[jQuerythis.data('runningStatus')=='resumed'?'pause':'resume']();},destroy:function(){clearTimeout(jQuerythis.timer);jQuerythis.find("*").addBack().unbind();jQuerythis.html(jQuerythis.find('.js-marquee:first').html());}};if(typeof options==='string'){if(jQuery.isFunction(methods[options])){if(!jQuerymarqueeWrapper){jQuerymarqueeWrapper=jQuerythis.find('.js-marquee-wrapper');}
if(jQuerythis.data('css3AnimationIsSupported')===true){css3AnimationIsSupported=true;}
methods[options]();}
return;}
var dataAttributes={},attr;jQuery.each(o,function(key,value){attr=jQuerythis.attr('data-'+key);if(typeof attr!=='undefined'){switch(attr){case'true':attr=true;break;case'false':attr=false;break;}
o[key]=attr;}});if(o.speed){o.duration=parseInt(jQuerythis.width(),10)/o.speed*1000;}
verticalDir=o.direction=='up'||o.direction=='down';o.gap=o.duplicated?parseInt(o.gap):0;jQuerythis.wrapInner('<div class="js-marquee"></div>');var jQueryel=jQuerythis.find('.js-marquee').css({'margin-right':o.gap,'float':'left'});if(o.duplicated){jQueryel.clone(true).appendTo(jQuerythis);}
jQuerythis.wrapInner('<div style="width:10000px;" class="js-marquee-wrapper"></div>');jQuerythis.css({'overflow':'hidden','width':'100%'});jQuerymarqueeWrapper=jQuerythis.find('.js-marquee-wrapper');if(verticalDir){var containerHeight=jQuerythis.height();jQuerymarqueeWrapper.removeAttr('style');jQuerythis.height(containerHeight);jQuerythis.find('.js-marquee').css({'float':'none','margin-bottom':o.gap,'margin-right':0});if(o.duplicated)jQuerythis.find('.js-marquee:last').css({'margin-bottom':0});var elHeight=jQuerythis.find('.js-marquee:first').height()+o.gap;if(o.startVisible&&!o.duplicated){o._completeDuration=((parseInt(elHeight,10)+parseInt(containerHeight,10))/parseInt(containerHeight,10))*o.duration;o.duration=(parseInt(elHeight,10)/parseInt(containerHeight,10))*o.duration;}else{o.duration=((parseInt(elHeight,10)+parseInt(containerHeight,10))/parseInt(containerHeight,10))*o.duration;}}else{elWidth=jQuerythis.find('.js-marquee:first').width()+o.gap;containerWidth=jQuerythis.width();if(o.startVisible&&!o.duplicated){o._completeDuration=((parseInt(elWidth,10)+parseInt(containerWidth,10))/parseInt(containerWidth,10))*o.duration;o.duration=(parseInt(elWidth,10)/parseInt(containerWidth,10))*o.duration;}else{o.duration=((parseInt(elWidth,10)+parseInt(containerWidth,10))/parseInt(containerWidth,10))*o.duration;}}
if(o.duplicated){o.duration=o.duration/2;}
if(o.allowCss3Support){var
elm=document.body||document.createElement('div'),animationName='marqueeAnimation-'+Math.floor(Math.random()*10000000),domPrefixes='Webkit Moz O ms Khtml'.split(' '),animationString='animation',animationCss3Str='',keyframeString='';if(elm.style.animation!==undefined){keyframeString='@keyframes '+animationName+' ';css3AnimationIsSupported=true;}
if(css3AnimationIsSupported===false){for(var i=0;i<domPrefixes.length;i++){if(elm.style[domPrefixes[i]+'AnimationName']!==undefined){var prefix='-'+domPrefixes[i].toLowerCase()+'-';animationString=prefix+animationString;playState=prefix+playState;keyframeString='@'+prefix+'keyframes '+animationName+' ';css3AnimationIsSupported=true;break;}}}
if(css3AnimationIsSupported){animationCss3Str=animationName+' '+o.duration/1000+'s '+o.delayBeforeStart/1000+'s infinite '+o.css3easing;jQuerythis.data('css3AnimationIsSupported',true);}}
var _rePositionVertically=function(){jQuerymarqueeWrapper.css('transform','translateY('+(o.direction=='up'?containerHeight+'px':'-'+elHeight+'px')+')');},_rePositionHorizontally=function(){jQuerymarqueeWrapper.css('transform','translateX('+(o.direction=='left'?containerWidth+'px':'-'+elWidth+'px')+')');};if(o.duplicated){if(verticalDir){if(o.startVisible){jQuerymarqueeWrapper.css('transform','translateY(0)');}else{jQuerymarqueeWrapper.css('transform','translateY('+(o.direction=='up'?containerHeight+'px':'-'+((elHeight*2)-o.gap)+'px')+')');}}else{if(o.startVisible){jQuerymarqueeWrapper.css('transform','translateX(0)');}else{jQuerymarqueeWrapper.css('transform','translateX('+(o.direction=='left'?containerWidth+'px':'-'+((elWidth*2)-o.gap)+'px')+')');}}
if(!o.startVisible){loopCount=1;}}else if(o.startVisible){loopCount=2;}else{if(verticalDir){_rePositionVertically();}else{_rePositionHorizontally();}}
var animate=function(){if(o.duplicated){if(loopCount===1){o._originalDuration=o.duration;if(verticalDir){o.duration=o.direction=='up'?o.duration+(containerHeight/((elHeight)/o.duration)):o.duration*2;}else{o.duration=o.direction=='left'?o.duration+(containerWidth/((elWidth)/o.duration)):o.duration*2;}
if(animationCss3Str){animationCss3Str=animationName+' '+o.duration/1000+'s '+o.delayBeforeStart/1000+'s '+o.css3easing;}
loopCount++;}
else if(loopCount===2){o.duration=o._originalDuration;if(animationCss3Str){animationName=animationName+'0';keyframeString=jQuery.trim(keyframeString)+'0 ';animationCss3Str=animationName+' '+o.duration/1000+'s 0s infinite '+o.css3easing;}
loopCount++;}}
if(verticalDir){if(o.duplicated){if(loopCount>2){jQuerymarqueeWrapper.css('transform','translateY('+(o.direction=='up'?0:'-'+elHeight+'px')+')');}
animationCss={'transform':'translateY('+(o.direction=='up'?'-'+elHeight+'px':0)+')'};}else if(o.startVisible){if(loopCount===2){if(animationCss3Str){animationCss3Str=animationName+' '+o.duration/1000+'s '+o.delayBeforeStart/1000+'s '+o.css3easing;}
animationCss={'transform':'translateY('+(o.direction=='up'?'-'+elHeight+'px':containerHeight+'px')+')'};loopCount++;}else if(loopCount===3){o.duration=o._completeDuration;if(animationCss3Str){animationName=animationName+'0';keyframeString=jQuery.trim(keyframeString)+'0 ';animationCss3Str=animationName+' '+o.duration/1000+'s 0s infinite '+o.css3easing;}
_rePositionVertically();}}else{_rePositionVertically();animationCss={'transform':'translateY('+(o.direction=='up'?'-'+(jQuerymarqueeWrapper.height())+'px':containerHeight+'px')+')'};}}else{if(o.duplicated){if(loopCount>2){jQuerymarqueeWrapper.css('transform','translateX('+(o.direction=='left'?0:'-'+elWidth+'px')+')');}
animationCss={'transform':'translateX('+(o.direction=='left'?'-'+elWidth+'px':0)+')'};}else if(o.startVisible){if(loopCount===2){if(animationCss3Str){animationCss3Str=animationName+' '+o.duration/1000+'s '+o.delayBeforeStart/1000+'s '+o.css3easing;}
animationCss={'transform':'translateX('+(o.direction=='left'?'-'+elWidth+'px':containerWidth+'px')+')'};loopCount++;}else if(loopCount===3){o.duration=o._completeDuration;if(animationCss3Str){animationName=animationName+'0';keyframeString=jQuery.trim(keyframeString)+'0 ';animationCss3Str=animationName+' '+o.duration/1000+'s 0s infinite '+o.css3easing;}
_rePositionHorizontally();}}else{_rePositionHorizontally();animationCss={'transform':'translateX('+(o.direction=='left'?'-'+elWidth+'px':containerWidth+'px')+')'};}}
jQuerythis.trigger('beforeStarting');if(css3AnimationIsSupported){jQuerymarqueeWrapper.css(animationString,animationCss3Str);var keyframeCss=keyframeString+' { 100%  '+_objToString(animationCss)+'}',jQuerystyles=jQuerymarqueeWrapper.find('style');if(jQuerystyles.length!==0){jQuerystyles.filter(":last").html(keyframeCss);}else{jQuery('head').append('<style>'+keyframeCss+'</style>');}
_prefixedEvent(jQuerymarqueeWrapper[0],"AnimationIteration",function(){jQuerythis.trigger('finished');});_prefixedEvent(jQuerymarqueeWrapper[0],"AnimationEnd",function(){animate();jQuerythis.trigger('finished');});}else{jQuerymarqueeWrapper.animate(animationCss,o.duration,o.easing,function(){jQuerythis.trigger('finished');if(o.pauseOnCycle){_startAnimationWithDelay();}else{animate();}});}
jQuerythis.data('runningStatus','resumed');};jQuerythis.bind('pause',methods.pause);jQuerythis.bind('resume',methods.resume);if(o.pauseOnHover){jQuerythis.bind('mouseenter',methods.pause);jQuerythis.bind('mouseleave',methods.resume);}
if(css3AnimationIsSupported&&o.allowCss3Support){animate();}else{_startAnimationWithDelay();}});};jQuery.fn.marquee.defaults={allowCss3Support:true,css3easing:'linear',easing:'linear',delayBeforeStart:1000,direction:'left',duplicated:false,duration:5000,gap:20,pauseOnCycle:false,pauseOnHover:false,startVisible:false};})(jQuery);
 */
// Start quick cart
var $=jQuery;$('.addtocart-bar i').click(function(){$(this).next().click();});$('input.flytocart-button').click(function(){$('.Bquickcart').hide();$('.reloadquickcart i').css('display','inline-block');alert('Sản phẩm đã được thêm vào giỏ hàng');});var url_cart='index.php?option=com_virtuemart&view=cart';function thaydoisoluong(id,soluong){$('.n1').children().attr("disabled",true);if(soluong>0){}
else{soluong=0;$('.spitem[data-id="'+id+'"]').remove();}
$('.z2').html('<i class="fa fa-spinner cart_spiners" style="display:inline-block;"></i>');$.ajax({type:'POST',url:'',data:{option:'com_virtuemart',quantity:soluong,view:'cart',task:'update',cart_virtuemart_product_id:id,},dataType:'html',success:function(data){$('.z2').load(url_cart+' .z2_trong',function(){$('.Bquickcart').each(function(){var ul=url_cart+' .Bquickcart[data-cart="'+$(this).attr('data-cart')+'"] .cart_dropdown_trong';$(this).find('.cart_dropdown').load(ul,function(){$('.n1').children().attr("disabled",false);});});});},error:function(){alert('thatbai');}});}
function start(){$('.n1 input').change(function(){thaydoisoluong($(this).parent().attr('data-id'),parseInt($(this).val()));});$('.n1_1').click(function(){$(this).parent().find('input').val(parseInt($(this).parent().find('input').val())-1);thaydoisoluong($(this).parent().attr('data-id'),parseInt($(this).parent().find('input').val()));});$('.n1_3').click(function(){$(this).parent().find('input').val(parseInt($(this).parent().find('input').val())+1);thaydoisoluong($(this).parent().attr('data-id'),parseInt($(this).parent().find('input').val()));});$('.cart_dropdown').click(function(){$('.popup_cart').addClass('inpop3');$('.popup_cart_nentat').addClass('inpop3');$('html').addClass('scrollhidden');});$('.popup_cart_close').click(function(){$('.inpop3').removeClass('inpop3');$('html').removeClass('scrollhidden');});$('.popup_cart_nentat').click(function(){$('.popup_cart_close').click();});}
function checkcart(dem){if(dem>=$('.Bquickcart').length){start();}}
function QuickCartLoad(){var dem=0;$('.Bquickcart').each(function(){var ul=url_cart+' .Bquickcart[data-cart="'+$(this).attr('data-cart')+'"] .Bquickcart_trong';$(this).load(ul,function(){$(this).removeAttr('style');$(this).next().find('.cart_spiners').removeAttr('style');dem+=1;checkcart(dem);});});}
function LoadCartAndCounter(){if($('.Bquickcart').hasClass('Bquickcart')||$('.mt_visitcounter').hasClass('mt_visitcounter')){var tempoBim=$('<div/>');tempoBim.load(url_cart+' .Bquickcart, .mt_visitcounter',function(data){tempoBim=$($.parseHTML(data));if($('.Bquickcart').hasClass('Bquickcart')){$('.Bquickcart').html(tempoBim.find('.Bquickcart_trong').html());$('.Bquickcart').removeAttr('style');$('.reloadquickcart .cart_spiners').removeAttr('style');start();}
if($('.mt_visitcounter').hasClass('mt_visitcounter')){$('.mt_visitcounter_trong').html(tempoBim.find('.mt_visitcounter_trong .vis_table').html());$('.mt_visitcounter_trong .vis_table').css('visibility','visible');$('.reloadvis').hide();}});}}
LoadCartAndCounter();
// End quick cart
jQuery(document).ready(function ($) {
	if($('.thanhvienpage').hasClass('thanhvienpage')){if($.trim($('.errorclass').text())){$('.errorclass').show();}}
	$('.main-image').mouseover(function(){$('.main-image').mousemove(function(e){$(this).find('img').css({'transform-origin':((e.pageX-$(this).offset().left)/$(this).width())*100+'% '+((e.pageY-$(this).offset().top)/$(this).height())*100+'%'});});});$('.vm-button-correct').click(function(){$(this).hide();$('.cart_spiners').css('display','inline-block');});$('.sp-vmsearch-categories').each(function(){$(this).children().first().attr('selected',true)});if($('.rsform').hasClass('rsform')){$('.rsform').each(function(){$(this).find('.rsform-button').last().attr('data-form',$(this).find('form').attr('class'))
	$(this).find('.rsform-input-box').each(function(){$(this).attr('placeholder',$(this).parent().parent().parent().find('.formControlLabel').text());});$(this).find('.rsform-text-box').each(function(){$(this).attr('placeholder',$(this).parent().parent().parent().find('.formControlLabel').text());});});}
	$('.rsform-button').click(function(){var cf=true;$(this).parent().parent().parent().parent().parent().find('input[type="text"]').each(function(){if($(this).val()==''&&$(this).attr('data-required')=='YES'){$(this).addClass('rsform-error');cf=false;}else{$(this).removeClass('rsform-error');}});$(this).parent().parent().parent().parent().parent().find('textarea').each(function(){if($(this).val()==''&&$(this).attr('data-required')=='YES'){$(this).addClass('rsform-error');cf=false;}else{$(this).removeClass('rsform-error');}});if(cf){var doituong='.'+$(this).attr('data-form');$(doituong).submit();}});function convertNumberToCurrency(tienmoi){tienmoi=parseInt($('.header-product .product-thongtin-salesPrice').attr('data-price'))+parseInt(tienmoi)
	tienmoi=tienmoi.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1.");tienmoi=tienmoi+' đ';$('.header-product .product-thongtin-salesPrice').text(tienmoi);}
	$('.header-product .product-field-display select').change(function(){var giatien=0;$('.header-product .product-field-display select').each(function(){if($.isNumeric($(this).find('option:selected').attr('data-price'))){giatien=giatien+parseInt($(this).find('option:selected').attr('data-price'));}});convertNumberToCurrency(giatien);});$('.header-product .product-field-display select').each(function(){$(this).change();});function changeRadioBim(){var giatien=0;$('.header-product .product-field-display .RadioBim').each(function(){if($.isNumeric($(this).find('input:checked').attr('data-price'))){giatien=giatien+parseInt($(this).find('input:checked').attr('data-price'));}});convertNumberToCurrency(giatien);}
	$('.header-product .product-field-display .RadioBim input').change(function(){changeRadioBim();});$('.header-product .product-field-display .RadioBim span').click(function(){$(this).parent().find('input').removeAttr('checked');$(this).find('input').attr('checked',true);$(this).parent().find('.CheckRadio').removeClass('CheckRadio');$(this).addClass('CheckRadio');changeRadioBim();});
	$(window).load(function(){setTimeout(function(){$('iframe[data-src]').each(function(){$(this).attr('src',$(this).attr('data-src'));});$('script[data-src]').each(function(){$(this).attr('src',$(this).attr('data-src'));});},3000);});
	/*
	// Bật marquee demo
	$('.browse-view .row').marquee({
	duplicated: true,
	pauseOnHover :true,
	startVisible :true,
	speed :80,
	gap :0,
	});
	 */
	/*
	// Chuyển input text thành input date với datepicker
	// chèn thẻ html : <input class="inpit-datetime" type="text">
	// Chuyển thành datepicker
	$( '.input-datetime' ).each(function(){
		$(this).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd/mm/yy'
		});
	});
	// Chuyển thành date picker nhưng giữ nguyên value cũ
	$( '.input-datetime' ).each(function(){
		var dbDate = $(this).val();
		dbDate = dbDate.substring(dbDate.length - 4,dbDate.length) + '/' + dbDate.substring(3,5) + '/' + dbDate.substring(0,2);
		var date2 = new Date(dbDate);
		$(this).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd/mm/yy'
		}).datepicker('setDate', date2);
	});
	*/
	/* Owl Carousel ( nhớ display:none đối tượng muốn gọi Owl Carousel trong file template.css
	$('.noidungduoi1 #itemListLeading, .footer2 .main2').addClass("owl-carousel owl-theme");
	$('.owl-carousel').each(function(stt){
		var me = $(this);
		if( stt == 0 || stt == 1 ){
			$(this).owlCarousel({
				animateOut: 'slideOutLeft',
				animateIn: 'slideInRight',
				slideSpeed: 500,
				dots:false,
				loop:true,
				autoplayTimeout:10000,
				autoplay:true,
				margin:20,
				stagePadding:0,
				stopOnHover:true,
				nav:true,
				smartSpeed:2000,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					767:{
						items:2,
						nav:true
					},
					1024:{
						items:4,
						nav:true
					}
				},
				onInitialized: me.show()
			});
		}
	});
	End Owl Carousel */
	// Code jQuery viết tiếp ở đây
	var flag = 0;
	//alert(vnd);
	
	

	
	
	
	
	$('#switch_currency').click(function(){
		
		if(flag == 1){
			$('.form-chuyendoi-html').addClass('convert');
			$('.medium-vnd p').text('Số tiền CNY');
			$('.medium-cny p').text('Số tiền VNĐ');
			
			var c = $('#gia-cny-rbg').val();
			$('#gia-cny-rbg').val($('#gia-vnd-rbg').val());
			$('#gia-vnd-rbg').val(c);
			/*
			$('.medium-cny #gia-cny-rbg').attr('id','gia-vnd-rbg');
			$('.medium-cny #gia-cny-rbg').removeAttr('id','gia-cny-rbg');
			$('.medium-vnd #gia-vnd-rbg').attr('id','gia-cny-rbg');
			$('.medium-vnd #gia-vnd-rbg').removeAttr('id','gia-vnd-rbg');
			*/
			$('#gia-vnd-rbg').attr('placeholder','cny');
			$('#gia-cny-rbg').attr('placeholder','vnđ');
		}
		else{
			$('.form-chuyendoi-html').removeClass('convert');
			$('.medium-vnd p').text('Số tiền VNĐ');
			$('.medium-cny p').text('Số tiền CNY');
			
			var c = $('#gia-cny-rbg').val();
			$('#gia-cny-rbg').val($('#gia-vnd-rbg').val());
			$('#gia-vnd-rbg').val(c);
			/*
			$('.medium-vnd #gia-cny-rbg').attr('id','gia-vnd-rbg');
			$('.medium-vnd #gia-cny-rbg').removeAttr('id','gia-cny-rbg');
			$('.medium-cny #gia-vnd-rbg').attr('id','gia-cny-rbg');
			$('.medium-cny #gia-vnd-rbg').removeAttr('id','gia-vnd-rbg');
			*/
			$('#gia-vnd-rbg').attr('placeholder','vnđ');
			$('#gia-cny-rbg').attr('placeholder','cny');
		}
		flag = 1 - flag;
		convert();
	});
	
	$('#switch_currency').click();
	
	$("#Mod412 .card_price").on('input', function(){
		$('.china_price').val($('.card_price').val() / $('.giaban').text());
		//$('.form-chuyendoi-html #gia-cny-rbg').val(addCommas($(".form-chuyendoi-html #gia-cny-rbg").attr('placeholder')));
		
	})
	

	dongho();
});

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}



function dongho(){
	var time = new Date();
	var gio = time.getHours();
	var phut = time.getMinutes();
	var giay = time.getSeconds();
	if(gio < 10)
	gio = "0" + gio;
	if(phut < 10)
	phut = "0" + phut;
	if(giay < 10)
	giay = "0" + giay;
	document.getElementById('time').innerHTML = gio + ':' + phut + ':' + giay;
		setTimeout("dongho()",1000);
}

function convert(){
	if($(".form-chuyendoi-html").hasClass('convert')){
		$(".convert #gia-vnd-rbg").on('input', function(){
			$('.convert #gia-cny-rbg').val($(".convert #gia-vnd-rbg").val() * $('.giamua').text());
			//$('.convert #gia-cny-rbg').val(addCommas($('.convert #gia-cny-rbg').attr('placeholder')));
			
		})	
	}
	else{
		$(".form-chuyendoi-html #gia-vnd-rbg").on('input', function(){
			$('.form-chuyendoi-html #gia-cny-rbg').val($('.form-chuyendoi-html #gia-vnd-rbg').val() / $('.giaban').text());
			//$('.form-chuyendoi-html #gia-cny-rbg').val(addCommas($(".form-chuyendoi-html #gia-cny-rbg").attr('placeholder')));
			
		})
	}
}
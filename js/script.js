// var open = true;

// $(document).ready(function (){
// 	console.log($('.profile').children('.user-photo').width());
// 	$('#toggle-menu').parent().children('ul').animate({height: 'toggle'}, 0);
// });

// $('#toggle-menu').click(function (){
// 	$(this).parent().children('ul').animate({height: 'toggle'});
// });

// $('#nav-toggle').click(function (){
// 	var widthNav = $(this).parent().width() == 250 ? "50px" : "250px";
// 	var sizePhoto = $(this).parent().children('.profile').children('.user-photo').width() >= 70 ? "50px" : "73px";

// 	if(open) {
// 		open = false;
// 		$(this).parent().children('.profile').children('.user-name').animate({height: 'toggle'}, 'fast');
// 		$(this).parent().children('ul').children('li').children('a').children('span').animate({width: 'toggle'}, 'fast');
// 		$('#toggle-menu').animate({opacity: '0'}, 'fast');
// 		$(this).parent().animate({width: widthNav});
// 		$(this).parent().children('.profile').children('.user-photo').animate({width: sizePhoto, height: sizePhoto});
// 		$(this).parent().children('ul.down').animate({width: widthNav});
// 	} else {
// 		open = true;
// 		$(this).parent().animate({width: widthNav});
// 		$(this).parent().children('.profile').children('.user-photo').animate({width: sizePhoto, height: sizePhoto});
// 		$(this).parent().children('ul.down').animate({width: widthNav});
// 		$(this).parent().children('.profile').children('.user-name').animate({height: 'toggle'}, 'slow');
// 		$(this).parent().children('ul').children('li').children('a').children('span').animate({width: 'toggle'}, 'slow');
// 		$('#toggle-menu').animate({opacity: '0'}, 'slow');
// 	}
// });

$(document).ready(function (){
});

$('#toggle-menu').click(function (){

	console.log($(this).parent('li').children('ul').height());

	$(this).toggleClass('down-caret');
	$(this).parent('li').children('ul').toggleClass('show')
});

$('#nav-toggle').children('i').click(function (){
	$(this).toggleClass('fa-bars');
	$(this).toggleClass('fa-times');
	$(this).parent('div').parent('nav').toggleClass('closed', 1000);
});
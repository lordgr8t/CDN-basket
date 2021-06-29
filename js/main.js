// function basket_btn(){
	$('.basket_body').addClass("db_basket");
	$('.bg_4_basket').addClass("db_bg_basket");
// }
$('.onedel').click(function(){
	$('.onedel').addClass("activedel");
	$('.twodel').removeClass("activedel");
});
$('.twodel').click(function(){
	$('.twodel').addClass("activedel");
	$('.onedel').removeClass("activedel");
});
$('.threedel').click(function(){
	$('.threedel').addClass("activedel");
	$('.fourdel').removeClass("activedel");
});
$('.fourdel').click(function(){
	$('.fourdel').addClass("activedel");
	$('.threedel').removeClass("activedel");
});
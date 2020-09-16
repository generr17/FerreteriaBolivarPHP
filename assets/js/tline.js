    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/imagen1.png)");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/imagen2.jpg)");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/imagen3.png)");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/imagen4.jpg)");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/imagen5.jpg)");
	$(".analysis").addClass("active").siblings().removeClass("active");
});

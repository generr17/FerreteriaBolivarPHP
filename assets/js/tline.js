    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/p.png)");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/p1.jpg)");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/p2.jpg)");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/p3.jpg)");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$("#contenedorS").css("background-image", "url(assets/img/conocenos/p4.jpg)");
	$(".analysis").addClass("active").siblings().removeClass("active");
});

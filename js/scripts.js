if (window.location.href.indexOf("smile.php") != -1){
  document.write("<style> .navbar-nav li:nth-child(1){background:#f0f0f0;}</style>");
}else if (window.location.href.indexOf("servicios.php") != -1){
	document.write("<style> .nav li:nth-child(2){background:#f0f0f0;}</style>");
}else if (window.location.href.indexOf("planesyfinanciamiento.php") != -1){
	document.write("<style> .nav li:nth-child(3){background:#f0f0f0;}</style>");
}else if (window.location.href.indexOf("promociones.php") != -1){
	document.write("<style> .nav li:nth-child(4){background:#f0f0f0;}</style>");
}else if (window.location.href.indexOf("contacto.php") != -1){
	document.write("<style> .nav li:nth-child(5){background:#f0f0f0;}</style>");
}

$(document).ready(function(){
	var altura = $('.navbar').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.navbar').addClass('navbar-fixed-top');
		} else {
			$('.navbar').removeClass('navbar-fixed-top');
		}
	});
});

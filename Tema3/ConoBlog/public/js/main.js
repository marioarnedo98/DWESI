$(".imagen").click(function(e){
	var enlaceImagen =$(this).attr("url")
	console.log(enlaceImagen);
	var lightbox = '<div class="ligthbox">'+
						'<img src="'+enlaceImagen+'" alt="" id="zoom_mw" >'+
						'<div class="btn-close">X</div>'+
					'</div>';

	$("body").append(lightbox)
	/*$("#zoom_mw").elevateZoom({
		scrollZoom : true,
		cursor: "crosshair",
		zoomWindowOffetx: 15
	});*/
	$(".btn-close").click(function(){
		$(".ligthbox").remove();
	})

})
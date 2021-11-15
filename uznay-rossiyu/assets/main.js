//embedpano({swf:"tour.swf", xml:"tour.xml", target:"pano", html5:"auto", mobilescale:1.0, consolelog:true, passQueryParameters:true, onready:krpano_onready_callback});
//embedpano({xml:"tour.xml", target:"pano", html5:"auto", mobilescale:0.3, consolelog:true, passQueryParameters:true, onready:krpano_onready_callback});

/*
$(document).ready(function(){
	$('body').on('data-scene', function() {
		var data = $('body').data('scene');
		$sceneImg = $("img#"+data);
		console.log($sceneImg);
		$sceneImg.removeClass('nextpano').addClass('current');
		$sceneImg.next().addClass('nextpano');
	});
	//$('#clicked').trigger('click')
	setTimeout(function(){
		
		$(document).trigger('click');
		$scenename = get_scene();
		$sceneImg = $("img#"+$scenename);
		$sceneImg.removeClass('nextpano').addClass('current');
		$sceneImg.next().addClass('nextpano');
		
		$imgscene = $("img.scene");
		//krpano.call("playsound(scene_0001, 'voices/group_1.mp3', 1, skin_nextscene(+1) );");
		//krpano.call("pausesoundtoggle(scene_0001);");
		
		if(!$imgscene.hasClass('nextpano')) {
		
			$imgscene.click(false);
			
		} else {
			
			$imgscene.on('click', function(e){
			
				e.preventDefault();
				
				$imgscenename = $(this).attr('id');
				if( $imgscenename == $scenename ) {
					$(this).prev().removeClass('current');
					$(this).removeClass('nextpano').addClass('current');
					$(this).next().addClass('nextpano');
				}
				
				loadscene($imgscenename);
				$('body').trigger('data-scene');
			});
			
		}
		
		
	},300);
});*/
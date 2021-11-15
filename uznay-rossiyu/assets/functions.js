var krpano = null;

// callback function that will be called when krpano is embedded and ready for using
function krpano_onready_callback(krpano_interface){
	krpano = krpano_interface;
}



// examples (called by the button onclick events)
/*
function loadpano(xmlname){
	if (krpano)
	{
		krpano.call("loadpano(" + xmlname + ", null, MERGE, BLEND(0.5));");
	}
}
function loadscene(scenename){
	if (krpano)
	{
		krpano.call("loadscene(" + scenename + ", null, MERGE, BLEND(0.5));");
	}
}
function loadjs(script) {
	if (krpano) {
		krpano.call("js(" + script + ");");
	}
}
function loadxmlstring(){
	if (krpano)
	{
		var xmlstring = 
			'<krpano>'+
			'<preview type="grid(cube,64,64,512,0xCCCCCC,0xF6F6F6,0x999999);" />'+
			'<view hlookat="0" vlookat="0" fov="100" distortion="0.0" />'+
			'</krpano>';
		
		krpano.call("loadxml(" + escape(xmlstring) + ", null, MERGE, BLEND(0.5));");
	}
}

function randomview_set(){
	if (krpano)
	{
		krpano.set("view.hlookat", Math.random() * 360.0 - 180.0 );
		krpano.set("view.vlookat", Math.random() * 180.0 - 90.0 );
		krpano.set("view.fov", 80.0 + Math.random() * 100.0 );
		krpano.set("view.distortion", Math.random() * 1.0 );
	}
}

function randomview_lookto(){
	if (krpano)
	{
		krpano.call("lookto(" + (Math.random() * 360.0 - 180.0) + "," + (Math.random() * 180.0 - 90.0) + "," + (80.0 + Math.random() * 100.0) + ")");
	}
}
*/
function get_current_view(){
	if (krpano)
	{
		var hlookat = krpano.get("view.hlookat");
		var vlookat = krpano.get("view.vlookat");
		var fov = krpano.get("view.fov");
		var distortion = krpano.get("view.distortion");
		document.getElementById("currentview").innerHTML = 
			'hlookat="' + hlookat.toFixed(2) + '" '+
			'vlookat="' + vlookat.toFixed(2) + '" '+
			'fov="' + fov.toFixed(2) + '" '+
			'distortion="' + distortion.toFixed(2) + '"';
	}
}

function add_hotspot(){
	if (krpano)
	{
		var h = krpano.get("view.hlookat");
		var v = krpano.get("view.vlookat");
		var hs_name = "hs" + ((Date.now() + Math.random()) | 0);	// create unique/randome name
		krpano.call("addhotspot(" + hs_name + ")");
		krpano.set("hotspot["+hs_name+"].url", "vtourskin_hotspot.png");
		krpano.set("hotspot["+hs_name+"].ath", h);
		krpano.set("hotspot["+hs_name+"].atv", v);
		krpano.set("hotspot["+hs_name+"].distorted", true);
		
		if ( krpano.get("device.html5") )
		{
			// for HTML5 it's possible to assign JS functions directly to krpano events
			krpano.set("hotspot["+hs_name+"].onclick", function(hs)
			{
				alert('hotspot "' + hs + '" clicked');
			
			}.bind(null, hs_name));
		}
		else
		{
			// for Flash the js() action need to be used to call from Flash to JS (this code would work for Flash and HTML5)
			krpano.set("hotspot["+hs_name+"].onclick", "js( alert(calc('hotspot \"' + name + '\" clicked')) );");
		}
	}
}

function remove_all_hotspots(){
	if (krpano)
	{
		krpano.call("loop(hotspot.count GT 0, removehotspot(0) );");
	}
}

var track_mouse_enabled = false;
var track_mouse_interval_id = null;

function track_mouse_interval_callback(){
	var mx = krpano.get("mouse.x");
	var my = krpano.get("mouse.y");
	var pnt = krpano.screentosphere(mx,my);
	var h = pnt.x;
	var v = pnt.y;
	document.getElementById("mousepos").innerHTML = 'x="' + mx + '" y="' + my + '" ath="' + h.toFixed(2) + '" atv="' + v.toFixed(2) + '"';
}

function track_mouse(){
	if (krpano)
	{
		if (track_mouse_enabled == false)
		{
			// enable - call 60 times per second
			track_mouse_interval_id = setInterval(track_mouse_interval_callback, 1000.0 / 60.0);
			
			track_mouse_enabled = true;
		}
		else
		{
			// disable
			clearInterval(track_mouse_interval_id);
			document.getElementById("mousepos").innerHTML = "";
			
			track_mouse_enabled = false;
		}
	}
}

function get_scene() {
	$scene_name = $("body").attr('data-scene');
	return $scene_name;			
}

function get_scenename($arg) {
	if (krpano) {
		//$scenename = arguments[0];
		$("body").attr('data-scene', arguments[0]);
	}
}

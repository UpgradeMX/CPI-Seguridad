// JavaScript Document
//$(document).ready(function(e) {
//	alert("se armo compa");
//    /*//\\//\\//\\//\\//\\//\\//\\//\\//\\ E D I T //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\*/
//	$("#login-btn").click(function() {
//		event.preventDefault();
//		var cargar = $(this).data("load");
//		var datos = $(this).data("datos");
//		loadContent(cargar,datos);
//	});
//	
//	$(".edit_log").each(function(index, element) {
//		"use strict";
//        var color = $(this).css("color");
//		$(this).css({
//			"cursor" : "pointer",
//			"background-image" : "url('./edit_online/_img/edit-white.svg')",
//			"background-repeat" : "no-repeat",
//			"background-size" : "20px",
//			"background-position" : "right",
//			"padding" : "0px 28px"
//		  
//		});
//		if(color=="rgb(255, 255, 255)"){
//			
//		}else{
//			
//		}
//    });
//	
//	$(".edit_log").click(function(e) {
//		event.preventDefault();
//		var cont = $(this);
//		var cargar = cont.data("load");
//		var datos = cont.data("datos");
//		loadContent(cargar,datos);
//		//alert(cont.data("id")+', table'+cont.data("table"));
//    });
//	
//	
//	//$(".edit_log").append("<img >");
///*//\\//\\//\\//\\//\\//\\//\\//\\ E D I T ( E N D ) \\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\*/
//	
//
//});

$(document).on("click",".close",function(e) {
		"use strict";
        $("#LoadContent").html("");
		$("#LoadContent").css("display","none");
});

function loadContent(cargar,datos=false){
	var contload = "./edit_online/_assets/"+cargar+".php";
	if(datos){
		var keys = datos.split("_&_");
		var arrayDatos = [];
		for (var i=0; i<keys.length; i++) {
			//var valores = keys[i].split("_:_");
			//temp += valores[0]+':'+valores[1];
			arrayDatos.push(keys[i]);
			//console.log(valores[0]+" = "+valores[1]+"\n");
			//console.log('intento ' + i);
		}
		console.log(arrayDatos);
		//var prueba = {dato':'300};
		$("#LoadContent").load(contload,{"choices[]":arrayDatos}).fadeIn('2000');
	}else{
		$("#LoadContent").load(contload).fadeIn('2000');
	}
	$("#LoadContent").css("display","block");
}

$(".close").mouseover(function() {
	"use strict";
	console.log("hola");
    $(this).attr("src","./edit_online/_img/cross-out-hover.svg");
});

/* ========== [GOOGLE MAPS] ========== */

window.console||(window.console={}),window.console.log||(window.console.log=function(){});var GMapsLatLonPicker=function(){var a=this;a.params={defLat:0,defLng:0,defZoom:1,queryLocationNameWhenLatLngChanges:!0,queryElevationWhenLatLngChanges:!0,mapOptions:{mapTypeId:google.maps.MapTypeId.ROADMAP,mapTypeControl:!1,disableDoubleClickZoom:!0,zoomControlOptions:!0,streetViewControl:!1,scrollwheel:!1,mapTypeId:google.maps.MapTypeId.ROADMAP},strings:{markerText:"Mueva este marcador",error_empty_field:"No se encuentran las coordenadas de este lugar",error_no_results:"No se encuentra este lugar"}},a.vars={ID:null,LATLNG:null,map:null,marker:null,geocoder:null};var s=function(s){a.vars.marker.setPosition(s),a.vars.map.panTo(s),$(a.vars.cssID+".gllpZoom").val(a.vars.map.getZoom()),$(a.vars.cssID+".gllpLongitude").val(s.lng()),$(a.vars.cssID+".gllpLatitude").val(s.lat()),$(a.vars.cssID).trigger("location_changed",$(a.vars.cssID)),a.params.queryLocationNameWhenLatLngChanges&&e(s),a.params.queryElevationWhenLatLngChanges&&o(s)},e=function(s){var e=new google.maps.LatLng(s.lat(),s.lng());a.vars.geocoder.geocode({latLng:e},function(s,e){$(a.vars.cssID+".gllpLocationName").val(e==google.maps.GeocoderStatus.OK&&s[1]?s[1].formatted_address:""),$(a.vars.cssID).trigger("location_name_changed",$(a.vars.cssID))})},o=function(s){var e=new google.maps.LatLng(s.lat(),s.lng()),o=[e],r={locations:o};a.vars.elevator.getElevationForLocations(r,function(s,e){$(a.vars.cssID+".gllpElevation").val(e==google.maps.ElevationStatus.OK?s[0]?s[0].elevation.toFixed(3):"":""),$(a.vars.cssID).trigger("elevation_changed",$(a.vars.cssID))})},r=function(e,o){return""==e?void(o||n(a.params.strings.error_empty_field)):void a.vars.geocoder.geocode({address:e},function(e,r){r==google.maps.GeocoderStatus.OK?($(a.vars.cssID+".gllpZoom").val(11),a.vars.map.setZoom(parseInt($(a.vars.cssID+".gllpZoom").val())),s(e[0].geometry.location)):o||n(a.params.strings.error_no_results)})},n=function(a){alert(a)},t={init:function(e){$(e).attr("id")||($(e).attr("name")?$(e).attr("id",$(e).attr("name")):$(e).attr("id","_MAP_"+Math.ceil(1e4*Math.random()))),a.vars.ID=$(e).attr("id"),a.vars.cssID="#"+a.vars.ID+" ",a.params.defLat=$(a.vars.cssID+".gllpLatitude").val()?$(a.vars.cssID+".gllpLatitude").val():a.params.defLat,a.params.defLng=$(a.vars.cssID+".gllpLongitude").val()?$(a.vars.cssID+".gllpLongitude").val():a.params.defLng,a.params.defZoom=$(a.vars.cssID+".gllpZoom").val()?parseInt($(a.vars.cssID+".gllpZoom").val()):a.params.defZoom,a.vars.LATLNG=new google.maps.LatLng(a.params.defLat,a.params.defLng),a.vars.MAPOPTIONS=a.params.mapOptions,a.vars.MAPOPTIONS.zoom=a.params.defZoom,a.vars.MAPOPTIONS.center=a.vars.LATLNG,a.vars.map=new google.maps.Map($(a.vars.cssID+".gllpMap").get(0),a.vars.MAPOPTIONS),a.vars.geocoder=new google.maps.Geocoder,a.vars.elevator=new google.maps.ElevationService,a.vars.marker=new google.maps.Marker({position:a.vars.LATLNG,map:a.vars.map,title:a.params.strings.markerText,draggable:!0}),google.maps.event.addListener(a.vars.map,"dblclick",function(a){s(a.latLng)}),google.maps.event.addListener(a.vars.marker,"dragend",function(){s(a.vars.marker.position)}),google.maps.event.addListener(a.vars.map,"zoom_changed",function(){$(a.vars.cssID+".gllpZoom").val(a.vars.map.getZoom()),$(a.vars.cssID).trigger("location_changed",$(a.vars.cssID))}),$(a.vars.cssID+".gllpUpdateButton").bind("click",function(){var e=$(a.vars.cssID+".gllpLatitude").val(),o=$(a.vars.cssID+".gllpLongitude").val(),r=new google.maps.LatLng(e,o);a.vars.map.setZoom(parseInt($(a.vars.cssID+".gllpZoom").val())),s(r)}),$(a.vars.cssID+".gllpSearchButton").bind("click",function(){r($(a.vars.cssID+".gllpSearchField").val(),!1)}),$(document).bind("gllp_perform_search",function(a,s){r($(s).attr("string"),!0)}),$(document).bind("gllp_update_fields",function(){var e=$(a.vars.cssID+".gllpLatitude").val(),o=$(a.vars.cssID+".gllpLongitude").val(),r=new google.maps.LatLng(e,o);a.vars.map.setZoom(parseInt($(a.vars.cssID+".gllpZoom").val())),s(r)})}};return t};

/* ========== [GOOGLE MAPS] ========== */
@extends('layouts.main')
	@section('content')
	{!!Html::style('css/doctorform.css')!!}
	
<?php $message=Session::get('message')?>

@if($message == 'good')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Ha ingresado exitosamente
</div>
@endif

  <div class="content-wrapper">
          
          

  <div id="map_canvas" style="width:100%; height:500px"></div>

       
</div>

<div id="doctoruno" class="home-doctors" style="display:none;">
 <div class="text-center doc-item">
    
                                    
                                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

                                            <ul class="list-inline social-lists animate">
                                                
                                                <a href="/citas/create/1" title="Agende una cita con este especialista." data-toggle="tooltip" class="btn btn-warning">Agendar</a>
                                            </ul>

                                            <figure>
                                                    <img width="500" height="500" src="/fotos/1.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
                                            </figure>

                                            <div class="text-content">
                                                <h5>Dr. Jose Caripe</h5>
                                                <!-- <div class="for-border"></div> -->
                                                <h5><small>Medico Internista</small></h5>
                                            </div>
                                        </div>
                                 </div>
                                 </div> 

<div id="doctorcuatro" class="home-doctors" style="display:none;">
 <div class="text-center doc-item">
    
                                    
                                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

                                            <ul class="list-inline social-lists animate">
                                                
                                                <a href="/citas/create/4" title="Agende una cita con este especialista." data-toggle="tooltip" class="btn btn-warning">Agendar</a>
                                            </ul>

                                            <figure>
                                                    <img width="500" height="500" src="/fotos/4.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
                                            </figure>

                                            <div class="text-content">
                                                <h5>Dr. Juan Ascanio</h5>
                                                <!-- <div class="for-border"></div> -->
                                                <h5><small>Medico Pediatra</small></h5>
                                            </div>
                                        </div>
                                 </div>
                                 </div> 

<div id="doctorcinco" class="home-doctors" style="display:none;">
 <div class="text-center doc-item">
    
                                    
                                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

                                            <ul class="list-inline social-lists animate">
                                                
                                                <a href="/citas/create/5" title="Agende una cita con este especialista." data-toggle="tooltip" class="btn btn-warning">Agendar</a>
                                            </ul>

                                            <figure>
                                                    <img width="500" height="500" src="/fotos/5.png" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2" style="margin-top: -3em; margin-left: -8em;"> 
                                            </figure>

                                            <div class="text-content">
                                                <h5>Dr. Andres Diaz</h5>
                                                <!-- <div class="for-border"></div> -->
                                                <h5><small>Medico Cardiologo</small></h5>
                                            </div>
                                        </div>
                                 </div>
                                 </div> 




<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=set_to_true_or_false"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jboxcdn.com/0.3.2/jBox.min.js"></script>

<script type="text/javascript">
var map = null;
    var infoWindow = null;
     var directionsDisplay = null;
  var directionsService = null;
    var hospital = new google.maps.LatLng(9.741463, -63.200641);
    var serres = new google.maps.LatLng(9.763974, -63.150022);
    var accident = new google.maps.LatLng(9.740376, -63.149054);
    var bomberos = new google.maps.LatLng(9.739108, -63.180107);
    var fire = new google.maps.LatLng(9.736507, -63.150621);    
    var hurt = new google.maps.LatLng(9.737950, -63.157088);    
    var defensa = new google.maps.LatLng(9.750136, -63.163904); 
        
    function initialize() {
        var myLatlng = new google.maps.LatLng(9.738607, -63.164305);
    
    var myOptions = {
      zoom: 16,
      scaleControl: false,
       scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
             center: new google.maps.LatLng(9.739800, -63.156449),
      mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    var map = new google.maps.Map($("#map_canvas").get(0), myOptions);
    directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
    directionsService = new google.maps.DirectionsService();
    directionsDisplay.setMap(map);

    var form1 = $("#doctoruno").clone().show();
    var infowindow_boton = form1[0];
    var formfire = $("#doctorcuatro").clone().show();
    var infowindowfire1= formfire[0];
    var formhurt = $("#doctorcinco").clone().show();
    var infowindowhurt1 = formhurt[0];

        var infowindow = new google.maps.InfoWindow({
            title:"Accidente de Transito",
            content: infowindow_boton
        });

         var infofire = new google.maps.InfoWindow({
            title:"Reporte de Incendio",
            content: infowindowfire1
        });

          var infoaccident = new google.maps.InfoWindow({
            title:"Accidente Domestico",
            content: infowindowhurt1
        });
 
        google.maps.event.addListener(map, 'click', function(){
            infowindow.close();
            infofire.close();
            infoaccident.close();
        });

        var crashicon ='assets/img/crashicon.png'
    var marker = new google.maps.Marker({
      position: accident,
      map: map,
      title:"Accidente de Transito",
      animation: google.maps.Animation.DROP
  });

    var incendio = new google.maps.Marker({
      position: fire,
      map: map,
      title:"Alerta de Incendio",
      animation: google.maps.Animation.DROP
  });
        
          var emergency = new google.maps.Marker({
      position: hurt,
      map: map,
      title:"Atencion Medica Urgente",
      animation: google.maps.Animation.DROP
  });

       
          
     marker.setAnimation(google.maps.Animation.BOUNCE);
     incendio.setAnimation(google.maps.Animation.BOUNCE);
     emergency.setAnimation(google.maps.Animation.BOUNCE);      
        
        google.maps.event.addListener(marker, 'click', function(){
           // openInfoWindow(marker,"Lugar del Accidente");
            infowindow.open(map,marker);

        });



 

        google.maps.event.addListener(incendio, 'click', function(){
           // openInfoWindow(marker,"Lugar del Accidente");
            infofire.open(map,incendio);


        });

google.maps.event.addListener(emergency, 'click', function(){
           // openInfoWindow(marker,"Lugar del Accidente");
            infoaccident.open(map,emergency);

        });

 

}
 
       
 
    $(document).ready(function() {


        initialize();

})
 
</script>

	@endsection	
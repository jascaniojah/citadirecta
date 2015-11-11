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

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Su cita se ha generado exitosamente!
</div>
@endif

<!--Change wideo width and height here-->
<div class="spam10" style="
    text-align: center;
">
<div id="wideo-embed-block" 
    wideo-width="540" 
    wideo-height="540"
    wideo-id="2493131447228234075"
    autoplay="false">
</div>
</div>
<script type="text/javascript">(function(){var x=document.createElement('script'), s=document.getElementsByTagName('script')[0];x.async=true;x.src='http://static.wideo.co/js/embed/wideoembed.js';s.parentNode.insertBefore(x,s)})();</script>
              



@endsection;


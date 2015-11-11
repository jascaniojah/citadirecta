@extends('layouts.main')
	@section('content')
	{!!Html::style('css/doctorform.css')!!}
	
<?php $message=Session::get('message')?>

@if($message == 'good')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Su cita se ha generado exitosamente!
</div>

@endif


<div class="box span10">
				  <div class="box-header" >
					  <h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendario de Reservaciones</h2>
				  </div>
				  
						<div id="calendar" class="span10"></div>

						<div class="clearfix"></div>
					</div>
			
</div>

<script type="text/javascript">
							$(document).ready(function() {
							    
							$('#calendar').fullCalendar({
								defaultView: 'agendaWeek',
							    eventSources: [
									 {
									    events: [
									       @foreach($citas as $cita)
									        {
									        
									            title  : "Cita de {{$cita->nombre_paciente}} con Dr. {{$cita->nombre_medico}}",
									            
									            start  : '{{$cita->fecha}}T{{$cita->hora}}',
									            
								
									        
									        },
									             // will make the time show
									        @endforeach
									        
									    ],
								
							     color: 'blue',     // an option!
            					textColor: 'white' // an option!
							  }
							]
							});
							});

			</script>
@endsection
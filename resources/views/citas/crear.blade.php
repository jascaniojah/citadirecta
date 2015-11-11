@extends('layouts.main')
	@section('content')
	{!!Html::style('css/doctorform.css')!!}
	
<?php $message=Session::get('message')?>
@include('alerts.request')
@if($message == 'good')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Ha ingresado exitosamente
</div>
@endif


{!!Html::style('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css')!!}

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

#dateRangeForm .form-control-feedback {
    top: 0;
    right: -15px;
}

 .demo-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
        }
     
</style>
<script type="text/javascript">
$(document).ready(function() {
   


    $('#dateRangePicker')
        .datepicker({
          lan:'en',
            format: 'yyyy/mm/dd',
            startDate: '2015/01/01',
            endDate: '2020/12/31'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#dateRangeForm').formValidation('revalidateField', 'date');
        });

    $('#dateRangeForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'yyyy/mm/dd',
                        min: '2015/01/01',
                        max: '2020/12/31',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
</script>

<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-0 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title animated flash">Dr. {{$medico->nombre}} </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/fotos/{{$medico->id}}.png" class="img-circle img-responsive"> </div>
             
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Especialidad: {{$medico->especialidad}}</td>
                        <td></td>
                      </tr>
                                     
                       <tr>
                        <td>Dirección: {{$medico->direccion}}</td>
                      </tr>
                      <tr>
                        <td>Horario de Atención: 8:00am hasta 12:00pm</td>
                        
                      </tr>
                      <tr>
                        <td>Email <a href="{{$medico->email}}">{{$medico->email}}</a></td>
                        
                      </tr>
                                                   
                      </tr>
                     
                    </tbody>
                  </table>                     
          </div>
        </div>
      </div>
    </div>
</div>

<div class="col-sm-6">
{!!Form::open(['class'=>'register','route'=>'citas.store', 'method'=>'POST'])!!}
{!!Form::hidden('medico_id', $medico->id)!!}
{!!Form::hidden('user_id', Auth::user()->id)!!}
{!!Form::hidden('nombre_medico', $medico->nombre)!!}
{!!Form::hidden('email', Auth::user()->email)!!}
	<h3>Crear Cita</h3>
	<div class="column">
		{!!Form::label('nombre','Nombre del paciente:')!!}
		{!!Form::text('nombre',null,['placeholder'=>'Ingrese nombre del paciente '])!!}
		<br>
		<div class="date">
		<div class="input-group input-append date" id="dateRangePicker">
		{!!Form::label('fecha','Fecha:')!!}
		
		{!!Form::text('fecha', \Carbon\Carbon::now())!!}
                <span class="add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
       </div>
            
	</div>
<h3>Registrar Pago</h3>
<br>
  <div class="demo-container">
        <div class="card-wrapper"></div>

        <div id="tarjeta" class="form-container active" style="padding: 20px;">
            
                <input placeholder="Numero tarjeta" type="text" name="number">
                <input placeholder="Nombre" type="text" name="name">
                <input placeholder="MM/YY" type="text" name="expiry">
                <input placeholder="CVC" type="text" name="cvc">
            
        </div>
    </div>

	<div class="bottom">
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        <div class="clear"></div>
	{!!Form::close()!!}
</div>
</div>
</div>
</div>
{!!Html::script('js/card.js')!!}    
    <script>
        new Card({
            form: document.querySelector('#tarjeta'),
            container: '.card-wrapper'
        });
    </script>
@endsection
@extends('layouts.main')
	@section('content')
	{!!Html::style('css/doctorform.css')!!}

	<script type="text/javascript">
function showDiv(elem){
   if(elem.value == 1){
     var cols =     document.getElementsByClassName('pediatra');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'block';
  }
    var cols =     document.getElementsByClassName('internista');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
   var cols =     document.getElementsByClassName('cardiologo');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
  }
   if(elem.value == 2){
     var cols =     document.getElementsByClassName('internista');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'block';
  }
    var cols =     document.getElementsByClassName('pediatra');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
   var cols =     document.getElementsByClassName('cardiologo');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
  }
   if(elem.value == 3){
     var cols =     document.getElementsByClassName('cardiologo');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'block';
  }
    var cols =     document.getElementsByClassName('internista');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
   var cols =     document.getElementsByClassName('pediatra');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'none';
  }
  }
   if(elem.value == 0){
     var cols =     document.getElementsByClassName('col-md-4');
  for(i=0; i<cols.length; i++) {
    cols[i].style.display =    'block';
  }
  }
}
	</script>
	
<?php $message=Session::get('message')?>

@if($message == 'good')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Ha ingresado exitosamente
</div>
@endif
<div class="content-wrapper">
<div class="container">
  <h1>Nuestros Medicos</h1>

<select id="selectError" data-rel="chosen" name="form_select" onchange="showDiv(this)" style="margin-bottom: 20px; margin-top: 10px;">
   <option value="0">Todos</option>
   <option value ="1">Pediatras</option>
   <option value ="2">Internistas</option>
   <option value ="3">Cardiologos</option>
</select>
<br>
    <div class="row">
        <div  class="col-md-4 internista" style="display:block;">
            <div class="well well-sm" style="border: 2px solid black;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/1.png">
                    </a>
                    <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dr. Jose Caripe</h4>
                        <p><span class="label label-info">10 pacientes</span></p>
                        <p><span class="label label-success">Internista</span></p>
                        <p>
                            <a href="/citas/create/1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-4 pediatra" style="display:block;">
            <div class="well well-sm" style="border: 2px solid blue;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/2.png">
                    </a>
                     <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dr Vicente Capote</h4>
                        <p><span class="label label-info">8 pacientes</span></p>
                        <p><span class="label label-primary">Pediatra</span></p>
                        <p>
                            <a href="/citas/create/2" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-4 internista" style="display:block;">
            <div class="well well-sm" style="border: 2px solid black;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/3.png">
                    </a>
                     <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dr Marcos Malave</h4>
                        <p><span class="label label-info">5 pacientes</span></p>
                        <p><span class="label label-success">Internista</span></p>
                        <p>
                            <a href="/citas/create/3" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 pediatra" style="display:block;">
            <div class="well well-sm" style="border: 2px solid blue;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/4.png">
                    </a>
                      <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dr Juan Ascanio</h4>
                        <p><span class="label label-info">15 pacientes</span></p>
                        <p><span class="label label-primary">Pediatra</span></p>
                        <p>
                            <a href="/citas/create/4" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-4 cardiologo" style="display:block;">
            <div class="well well-sm" style="border: 2px solid red;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/5.png">
                    </a>
                      <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dr Andres Diaz</h4>
                        <p><span class="label label-info">8 pacientes</span></p>
                        <p><span class="label label-danger">Cardiologo</span></p>
                        <p>
                            <a href="/citas/create/5" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-4 cardiologo" style="display:block;">
            <div class="well well-sm" style="border: 2px solid red;">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="/fotos/6.png">
                    </a>
                       <div class="media-body" style="text-align: center;">
                        <h4 class="media-heading">Dra Susana Mia</h4>
                        <p><span class="label label-info">24 pacientes</span></p>
                        <p><span class="label label-danger">Cardiologo</span></p>
                        <p>
                            <a href="/citas/create/6" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Agendar</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection	
@extends('layouts.login')
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado exitosamente
</div>
@endif

@if($message == 'bad')
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario y Contraseña invalidas!
</div>
@endif

{!!Html::style('css/sweetalert.css')!!}
{!!Html::script('js/sweetalert.min.js')!!}

@include('alerts.request')
<script type="text/javascript">

function aviso(){
  var myvar = "<?php echo $message;?>";
  if(myvar == 'store'){
swal("Registrado!", "Usted se ha registrado satisfactoriamente!", "success") 
}
  if(myvar == 'bad'){
swal("Datos Erroneos!", "Ha ingresado un correo y clave que no corresponden!", "error") 

  }
}

</script>
	@section('content')


<style type="text/css">
.form_wrapper{
  background:#fff;
  border:1px solid #ddd;
  margin:0 auto;
  width:350px;
  font-size:16px;
  -moz-box-shadow:1px 1px 7px #ccc;
  -webkit-box-shadow:1px 1px 7px #ccc;
  box-shadow:1px 1px 7px #ccc;
}

.form_wrapper h3{
  padding:20px 30px 20px 30px;
  background-color:#2F406A;
  color:#fff;
  font-size:25px;
  border-bottom:1px solid #ddd;
}

.form_wrapper form{
  display:none;
  background:#fff;
}
form.active{
  display:block;
}

form.login{
  width:350px;
}
form.register{
  width:550px;
}
form.forgot_password{
  width:300px;
}


.form_wrapper .column{
  width:47%;
  float:left;
}

.form_wrapper a{
  text-decoration:none;
  color:#777;
  font-size:12px;
}
.form_wrapper a:hover{
  color:#000;
}

.form_wrapper label{
  display:block;
  padding:10px 30px 0px 30px;
  margin:10px 0px 0px 0px;
}

.form_wrapper input[type="text"],
.form_wrapper input[type="password"]{
  border: solid 1px #E5E5E5;
  margin: 5px 30px 0px 30px;
  padding: 9px;
  display:block;
  font-size:16px;
  width:76%;
  background: #FFFFFF;
  background: 
    -webkit-gradient(
      linear, 
      left top, 
      left 25, 
      from(#FFFFFF), 
      color-stop(4%, #EEEEEE), 
      to(#FFFFFF)
    );
  background: 
    -moz-linear-gradient(
      top, 
      #FFFFFF,
      #EEEEEE 1px, 
      #FFFFFF 25px
      );
  -moz-box-shadow: 0px 0px 8px #f0f0f0;
  -webkit-box-shadow: 0px 0px 8px #f0f0f0;
  box-shadow: 0px 0px 8px #f0f0f0;
}
.form_wrapper input[type="text"]:focus,
.form_wrapper input[type="password"]:focus{
  background:#feffef;
}

.form_wrapper .bottom{
  background-color:#2F406A;
  border-top:1px solid #ddd;
  margin-top:20px;
  clear:both;
  color:#fff;
  text-shadow:1px 1px 1px #000;
}

.form_wrapper .bottom a{
  display:block;
  clear:both;
  padding:10px 30px;
  text-align:right;
  color:#ffa800;
  text-shadow:1px 1px 1px #000;
}

.form_wrapper .bottom a:hover{
  color:#000;
}

.form_wrapper a.forgot{
  float:right;
  font-style:italic;
  line-height:24px;
  color:#ffa800;
  text-shadow:1px 1px 1px #fff;
}
.form_wrapper a.forgot:hover{
  color:#000;
}

.form_wrapper div.remember{
  float:left;
  width:140px;
  margin:20px 0px 20px 30px;
  font-size:11px;
}
.form_wrapper div.remember input{
  float:left;
  margin:2px 5px 0px 0px;
}

.form_wrapper input[type="submit"] {
  background: #e3e3e3;
  border: 1px solid #ccc;
  color: #333;
  font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
  font-size: 14px;
  font-weight: bold;
  padding: 8px 0 9px;
  text-align: center;
  width: 150px;
  cursor:pointer;
  float:right;
  margin:15px 20px 10px 10px;
  text-shadow: 0 1px 0px #fff;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0px 0px 2px #fff inset;
  -webkit-box-shadow: 0px 0px 2px #fff inset;
  box-shadow: 0px 0px 2px #fff inset;
}
.form_wrapper input[type="submit"]:hover {
  background: #d9d9d9;
  -moz-box-shadow: 0px 0px 2px #eaeaea inset;
  -webkit-box-shadow: 0px 0px 2px #eaeaea inset;
  box-shadow: 0px 0px 2px #eaeaea inset;
  color: #222;
}
</style>

    <div class="row">
        <div class="col-md-12 center login-header">
            <h2></h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div id="form_wrapper" class="form_wrapper">
<!-- We will add our forms here -->

  {!!Form::open(['class'=>'register','route'=>'usuario.store', 'method'=>'POST'])!!}
	<h3>Registro</h3>
	<div class="column">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['placeholder'=>'Juan '])!!}

		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellidos',null,['placeholder'=>'Ascanio '])!!}

		{!!Form::label('cedula','Cedula:')!!}
		{!!Form::text('cedula','V- ',['value'=>'V- '])!!}
	</div>
	<div class="column">
		{!!Form::label('user','Usuario:')!!}
		{!!Form::text('user',null,['placeholder'=>'Jascaniojah '])!!}

		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['placeholder'=>'example@siriusms.com'])!!}

		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['placeholder'=>'Password'])!!}
	</div>
	<div class="bottom">
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	<a href="/" rel="login" class="linkform">
            Ya esta registrado? Ingrese aqui!
        </a>
        <div class="clear"></div>
	{!!Form::close()!!}
	</div>
{!!Form::open(['class'=>'login active','route'=>'log.store', 'method'=>'POST'])!!}
    <h3>Login</h3>
    <div>
    {!!Form::label('email','Email:')!!}
	{!!Form::text('email',null,['placeholder'=>'Ingrese su email '])!!}
    </div>
    <div>
        {!!Form::label('password','Contraseña:')!!}
            <a href="forgot_password.html" rel="forgot_password" class="forgot linkform">
                Olvido su Contraseña?
            </a>
        </label>
       {!!Form::password('password',['placeholder'=>'Ingrese su clave'])!!}
    </div>
    <div class="bottom">
        <div class="remember"><input type="checkbox" />
            <span>Recordarme</span>
        </div>
       {!!Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}
        <a href="register.html" rel="register" class="linkform animated snake">
            Aun no estas registrado? Registrate aqui!
        </a>
        <div class="clear"></div>
        {!!Form::close()!!}
    </div>


<form class="forgot_password">
    <h3>Recordar Contraseña</h3>
    <div>
        <label>Email:</label>
        <input type="text" />
    </div>
    <div class="bottom">
        <input type="submit" value="Enviar correo!"></input>
        <a href="index.html" rel="login" class="linkform">
            Recordo su contraseña? Ingrese aqui
        </a>
        <a href="register.html" rel="register" class="linkform">
            Aun no estas registrado? Registrate aqui!
        </a>
        <div class="clear"></div>
    </div>
</form>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
//the form wrapper (includes all forms)
var $form_wrapper   = $('#form_wrapper'),

//the current form is the one with class "active"
$currentForm    = $form_wrapper.children('form.active'),
    
//the switch form links
$linkform       = $form_wrapper.find('.linkform');

$form_wrapper.children('form').each(function(i){
    var $theForm    = $(this);
    //solve the inline display none problem when using fadeIn/fadeOut
    if(!$theForm.hasClass('active'))
        $theForm.hide();
    $theForm.data({
        width   : $theForm.width(),
        height  : $theForm.height()
    });
});
setWrapperWidth();

$linkform.bind('click',function(e){
    var $link   = $(this);
    var target  = $link.attr('rel');
    $currentForm.fadeOut(400,function(){
        //remove class "active" from current form
        $currentForm.removeClass('active');
        //new current form
        $currentForm= $form_wrapper.children('form.'+target);
        //animate the wrapper
        $form_wrapper.stop()
                     .animate({
                        width   : $currentForm.data('width') + 'px',
                        height  : $currentForm.data('height') + 'px'
                     },500,function(){
                        //new form gets class "active"
                        $currentForm.addClass('active');
                        //show the new form
                        $currentForm.fadeIn(400);
                     });
    });
    e.preventDefault();
});

function setWrapperWidth(){
    $form_wrapper.css({
        width   : $currentForm.data('width') + 'px',
        height  : $currentForm.data('height') + 'px'
    });
}

$form_wrapper.find('input[type="submit"]')
             .click(function(e){
                //e.preventDefault();
             });    
</script>

	@endsection
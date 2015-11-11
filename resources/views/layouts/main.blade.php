<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>citadirecta.com.ve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   
    {!!Html::style('css/charisma-app.css')!!}
    {!!Html::style('bower_components/fullcalendar/dist/fullcalendar.css')!!}

    {!!Html::style('bower_components/fullcalendar/dist/fullcalendar.print.css')!!}
    {!!Html::style('bower_components/chosen/chosen.min.css')!!}
    {!!Html::style('bower_components/chosen/chosen.min.css')!!}
    {!!Html::style('bower_components/colorbox/example3/colorbox.css')!!}
    {!!Html::style('bower_components/responsive-tables/responsive-tables.css')!!}
    {!!Html::style('css/jquery.noty.css')!!}
    {!!Html::style('css/noty_theme_default.css')!!}
    {!!Html::style('css/elfinder.min.css')!!}
    {!!Html::style('css/elfinder.theme.css')!!}
    {!!Html::style('css/jquery.iphone.toggle.css')!!}
    {!!Html::style('css/animate.min.css')!!}
 
  {!!Html::script('bower_components/jquery/jquery.min.js')!!}
    <!-- jQuery -->
   

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation" style="
    background-color: #337AB7;
">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="
    height: 80px;
    padding-top: 0px;
    padding-bottom: 0px;
" href="#"> <img alt="CitaSegura Logo" src="/fotos/logoslogan.png" class="hidden-xs"/>
                <span></span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">  {!!Auth::user()->nombre!!} </span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                   
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu" >
                <li><a href="www.citadirecta.com.ve" style="
    color: #FFF313;
"><i class="glyphicon glyphicon-globe" ></i> Volver al Site</a></li>
                
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="/citas"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
                        </li>
                        <li><a class="ajax-link" href="/citas/buscar"><i class="glyphicon glyphicon-eye-open"></i><span> Buscar Especilista</span></a>
                        </li>
                        <li><a class="ajax-link" href="/citas/ubicar"><i class="glyphicon glyphicon-globe"></i><span> Ubicar Especialista</span></a></li>

                        <li><a class="ajax-link" href="/citas/show/{!!Auth::user()->id!!}"><i class="glyphicon glyphicon-calendar"></i><span> Agenda</span></a>
                        </li>
    

                    </ul>
                    <label id="for-is-ajax" for="is-ajax" style="display:none;"><input id="is-ajax" type="checkbox" checked> Ajax on menu </label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
          
          @yield('content')
      </div>
 

<?php } ?>

<!--/.fluid-container-->

<!-- external javascript -->

 
<!-- library for making tables responsive -->




</div>

 <footer class="row">
    {!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.cookie.js')!!}
    {!!Html::script('bower_components/moment/min/moment.min.js')!!}
   {!!Html::script('bower_components/fullcalendar/dist/fullcalendar.min.js')!!}
   {!!Html::script('bower_components/fullcalendar/dist/lang/es.js')!!}
   {!!Html::script('js/jquery.dataTables.min.js')!!}
   {!!Html::script('bower_components/chosen/chosen.jquery.min.js')!!}
   {!!Html::script('bower_components/colorbox/jquery.colorbox-min.js')!!}
   {!!Html::script('js/jquery.noty.js')!!}
{!!Html::script('js/jquery.raty.min.js')!!}
{!!Html::script('js/jquery.iphone.toggle.js')!!}
{!!Html::script('js/jquery.autogrow-textarea.js')!!}
{!!Html::script('js/jquery.uploadify-3.1.min.js')!!}
{!!Html::script('js/jquery.history.js')!!}
{!!Html::script('js/charisma.js')!!}
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">Sirius Media Services</a> 2015 - <?php echo date('Y') ?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="">Sirius Media Services</a></p>
    </footer>

  </div>
 </body> 
</html>
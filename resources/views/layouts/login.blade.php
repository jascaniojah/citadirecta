<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   {!!Html::script('bower_components/jquery/jquery.min.js')!!}
  </head>
  
  <body onload="aviso()">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
@yield('content')
          </div>
          <div class="col-md-6" style="height: 600px; padding-top: 40px;">
            <img src="/fotos/banner.png"
            class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
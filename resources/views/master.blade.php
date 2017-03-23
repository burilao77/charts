<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charts </title>

  {!!Html::style('css/bootstrap.min.css')!!}
   {!!Html::style('css/font-awesome.min.css')!!}

  {!! Charts::assets() !!}
</head>
<body>
 <!-- Fixed navbar -->


<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

    {!!Html::script('/js/jquery.min.js')!!}
    {!!Html::script('/js/bootstrap.min.js')!!}

</body>
</html>

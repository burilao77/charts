@extends('master')
    @section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Gráficos</h1>
    </div>
</div>
        <div class="row">
             {!! $chart->render() !!}
        </div>

@stop

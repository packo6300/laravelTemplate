@extends('layouts.master')
@section('title','Home')
@section('content')
<div class="row">    
        @foreach($menu as $item)
        <div class="col-lg-3 col-6">
            <div class="small-box {{$item['color']}}">
              <div class="inner">
                <h3>{{$item['total']}}</h3><p>{{$item['titulo']}}</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Mostrar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        @endforeach
</div>
@stop
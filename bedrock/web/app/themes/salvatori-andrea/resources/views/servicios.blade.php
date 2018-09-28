{{--
  Template Name: Servicios plantilla
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="info-servicios">
    <h3>
        {{ get_field('info_servicios_titulo', 11) }}
    </h3>
    <p>{{ get_field('info_servicios_parrafo', 11) }}</p>
</div>
<div class="servicios columns" style="top: unset;">
        @foreach ($servicios_loop as $servicios)
        <div class="servicio-item column is-3">
            <img src="{{$servicios['thumbnail']}}')">
            <div class="orden-items-servicios">    
                <h2>{{$servicios['title']}}</h2>
                <div class="raya"></div>
                <p>{!! $servicios['resumen'] !!}</p>
                <a class="boton-1" href="{{$servicios['link']}}">Ir Al Servicio</a>
            </div>
        </div>
        @endforeach
</div>

<div class="registrarse-servicios">
<h3>
    {{ get_field('info_resgistrarse_servicios', 11) }}
</h3>

<a class="btn-beneficios" href="#">REGISTRATE</a>
</div>
@endsection
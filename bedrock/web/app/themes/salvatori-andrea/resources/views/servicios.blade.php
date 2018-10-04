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
<div class="servicios columns is-7 is-multiline" style="top: unset;">
        @foreach ($servicios_loop as $servicios)
        <div class="servicio-item-interno column is-4">
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
<h5>
    {{ get_field('info_resgistrarse_servicios', 11) }}
</h5>
<div class="boton-div-4">
    <a class="btn-beneficios" href="#">REGISTRATE</a>
</div>
</div>
@endsection
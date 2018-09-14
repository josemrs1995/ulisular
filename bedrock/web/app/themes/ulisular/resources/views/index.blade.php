@extends('layouts.app')

@section('content')
    <div class="fondo"  style="background: url({{ get_field('imagen_header', 'options') }}); background-position: center center; background-size: cover; background-repeat: no-repeat;" >  
        <img class="svg" src="@asset('images/svg/vector-01.svg')" style="width:100%; height:auto; " >     
        <div class="portada">
            <h3>{{ get_field('frase_header', 'option')}}</h3>
            <H1>{{ get_field('titulo_header', 'option')}}</H1>
            <p>{{ get_field('descripcion_header', 'option')}}</p>
            @php($boton = get_field('boton_header', 'options'))
            <a class="boton-1" href="{{ $boton['url']}}">{{ $boton['title']}}</a>
        </div>
    </div>
    
    <div class="servicios columns">
            @foreach (array_slice($servicios_loop,0,4) as $servicios)
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
    <div class="boton-div">
        @php($boton = get_field('boton_servicio', 'options'))
        <a class="boton-2" href="{{ $boton['url']}}">{{ $boton['title']}}</a>
    </div>
@include('partials.nosotros')
@include('partials.procesos-contrataciones')
@endsection

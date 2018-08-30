@extends('layouts.app')

@section('content')
<div class="main-view" style="background: url({{ get_field('imagen_header', 'options') }}); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="fondo">
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
                    <p>{!! $servicios['resumen'] !!}</p>
                    <a class="boton-1" href="{{$servicios['link']}}">Ir Al Servicio</a>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection

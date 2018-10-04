@extends('layouts.app')
@section('content')
@include('partials.page-header')
  
@while(have_posts()) @php the_post() @endphp
<div class="info-servicios-beneficios  animate fadeInUp">
        @include('partials.content-single-'.get_post_type())
    @endwhile
</div>
<div class="beneficio-del-servicio columns  animate fadeInUp">
    @if(have_rows('seccion_2_servicios'))
  {{-- loop through the rows of data --}}
  @while (have_rows('seccion_2_servicios'))@php(the_row())
    <div class="column contenido-beneficios-servicios">
        <h1>{{ get_sub_field('titulo') }}</h1>
        <h4>{{ get_sub_field('subtitulo') }}</h4>
        <p>{{ get_sub_field('contenido') }}</p>
    </div>
    <div class="column imagen-beneficios-servicios">
       <img class="img-beneficios" src="{{ get_sub_field('imagen') }}"> 
    </div>
  @endwhile
@else      
@endif
</div>
<div class="caracteristicas-servicios  animate fadeInUp">
    @if(have_rows('seccion_3_servicios'))
    @while (have_rows('seccion_3_servicios'))@php(the_row())
    <h3>{{get_sub_field('titulo_caracteristicas')}}</h3>
    <div class="numero-beneficios column is-8">
            <div class="contain-num-beneficios columns is-multiline" style="padding: 0 20px;">
                @if(have_rows('contenido'))
                    @while (have_rows('contenido'))@php(the_row())
                        <div class="items-beneficios column is-4">
                            <img src="{{get_sub_field('imagen')}}">
                            <h5>{{get_sub_field('titulo')}}</h5>
                            <p>{{get_sub_field('contenido')}}</p>
                        </div>
                    @endWhile
                @endif
            @endWhile
        @endif
        </div>
    </div>
</div>
@endsection


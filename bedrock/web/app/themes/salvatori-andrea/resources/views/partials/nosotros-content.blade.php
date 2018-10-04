{{-- Repeater Content
{{-- check if the repeater field has rows of data --}}
@if(have_rows('seccion1', 9))
{{-- loop through the rows of data --}}
@while (have_rows('seccion1', 9))@php(the_row())
    @php( $titulo = get_sub_field('titulo_sobre_nosotros'))
    @php( $contenido = get_sub_field('descripcion_nosotros'))
@endwhile
@else
@endif
@if(have_rows('seccion2', 9))
{{-- loop through the rows of data --}}
@while (have_rows('seccion2', 9))@php(the_row())
    @php( $titulo2 = get_sub_field('titulo'))
    @php( $contenido2 = get_sub_field('contenido'))
    @php( $imagen2 = get_sub_field('imagen'))
@endwhile
@else      
@endif
@if(have_rows('seccion3', 9))
{{-- loop through the rows of data --}}
@while (have_rows('seccion3', 9))@php(the_row())
    @php( $titulo3 = get_sub_field('titulo'))
    @php( $contenido3 = get_sub_field('contenido'))
    @php( $imagen3 = get_sub_field('imagen'))
@endwhile
@else      
@endif
@if(have_rows('seccion4', 9))
{{-- loop through the rows of data --}}
@while (have_rows('seccion4', 9))@php(the_row())
    @php( $titulo4 = get_sub_field('titulo'))
    @php( $contenido4 = get_sub_field('contenido'))
    @php( $imagen4 = get_sub_field('imagen'))
@endwhile
@else      
@endif


{{-------------------------------------------------------------------------

    END CAMPOS

 ------------------------------------------------------------------------}}

<div class="seccion-1">
    <h5>{{$titulo}}</h5>
    <p>{{$contenido}}</p>
</div>
<div class="seccion-2 columns">
    <div class="column content-seccion2">
    <h1>{{$titulo2}}</h1>
    <p>{!!$contenido2!!}</p>
    </div>
    {{-- <div class="img column" style="background: url(''); height:400px; background-size: cover"></div>  --}}
    <div class="img column">
        <img class="img-1" src="{{$imagen2}}">
    </div>  
</div>
<div class="seccion-3 columns">
    <div class="img column">
            <img class="img-1" src="{{$imagen3}}">
    </div>  
    <div class="column content-seccion3">
    <h1>{{$titulo3}}</h1>
    <p>{!!$contenido3!!}</p>
    </div>
    {{-- <div class="img column" style="background: url(''); height:400px; background-size: cover"></div>  --}}
</div>
<div class="seccion-2 columns">  
        <div class="column content-seccion2">
        <h1>{{$titulo4}}</h1>
        <p>{!!$contenido4!!}</p>
        </div>
        <div class="img column">
                <img class="img-1" src="{{$imagen4}}">
        </div>
        {{-- <div class="img column" style="background: url(''); height:400px; background-size: cover"></div>  --}}
</div>


<div class="seccion-4">
        @if(have_rows('beneficios_nosotros', 9))
        {{-- loop through the rows of data --}}
        @while (have_rows('beneficios_nosotros', 9))@php(the_row())
        <div class="contain-beneficios columns is-multiline is-paddingless">
            <div class="column is-12">
                <h1 style="margin: 50px 0; min-width: 270px;"> {{ get_sub_field('titulo_beneficios') }} </h1>
            </div>
                <div class="content-seccion4 column is-4">
                    <h2>{{ get_sub_field('subtitulo_beneficios') }}</h2>
                    <p>{{get_sub_field('contenido_beneficios')}}</p>
                </div>
                <div class="numero-beneficios column is-8">
                        <div class="contain-num-beneficios columns is-multiline" style="padding: 0 20px; text-align: center;">
                        @if(have_rows('numero_beneficios'))
                        @while (have_rows('numero_beneficios'))@php(the_row())
                            <div class="items-beneficios column is-4">
                                <img src="{{get_sub_field('beneficios_img')}}">
                                <p>{{get_sub_field('titulo_imagen_beneficios')}}</p>
                            </div>
                        @endWhile
                      @endif
                    </div>
                </div>
        @endwhile
        @else      
        @endif
    </div>
    <div class="boton-div-4">
        <a class="btn-beneficios" href="#">REGISTRATE</a>
    </div>
</div>
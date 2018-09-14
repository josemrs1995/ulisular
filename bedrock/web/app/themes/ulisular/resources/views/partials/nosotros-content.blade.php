
@php
global $post;
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_url( $thumbID );
@endphp
<div class="fondo" style="background:url('{{$imgDestacada}}'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="portada">
        <h1>{!! App::title() !!}</h1>
        <div class="raya"></div>
        <p>{{ get_field('descripcion_header', 'option')}}</p>
    </div>
    <img class="svg-interno" src="@asset('images/svg/vector-3-01.svg')" style="width:100%; height:auto; " >
</div>

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
<div class="seccion-1">
    <h1>{{$titulo}}</h1>
    <p>{{$contenido}}</p>
</div>
<div class="seccion-2 columns">
    <div class="column content-seccion2">
    <h1>{{$titulo2}}</h1>
    <p>{{$contenido2}}</p>
    </div>
    <div class="column" style="background: url('{{$imagen2}}'); height:400px; background-size: cover"></div>   
</div>
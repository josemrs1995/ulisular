<div class="noticias container">
    <h5>Procesos</h5>
<div class="columns timeline-container is-multiline" style="position:relative">

    {{--Esto es la barra vertical--}}
    <div class="barra-vertical"></div>
    
    @foreach (array_slice($procesos_loop,0,4) as $procesos)
        <div class="column timeline-item is-half">
            <div class="diamante">
                <div class="rombo"></div>
            </div>
            <div class="caja-procesos columns is-12">
                <div class="img-noticias column is-5" style="background:url('{{$procesos['thumbnail']}}'); background-size:cover;"></div>
                <div class="content-procesos column is-7">
                    <h5 class="titulo">{{$procesos['title']}}</h5>
                    <p class="resumen">{!! $procesos['resumen'] !!}</p>
                </div>
            </div>
        </div>
    @endforeach
 
</div>
<!--<a class="boton-1" style="margin: auto">Ultimas Noticias</a>-->
    <div class="boton-div-3">
        @php($boton = get_field('boton_procesos', 'options'))
        <a class="boton-4" href="{{ $boton['url']}}">{{ $boton['title']}}</a>
    </div>
</div>
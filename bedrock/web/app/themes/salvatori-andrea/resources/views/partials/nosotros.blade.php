<div class="nosotros  animate fadeInUp">
    <div class="nosotros-frase">
            <h3>{{ get_field('frase_nosotros', 'option')}}</h3>
            <div class="raya"></div>
    </div>
   
    <div class="content-nosotros columns animate fadeInUp">
        <div class="column nosotros-toggle-container">
                <h5>{{ get_field('titulo_nosotros', 'option')}}</h5>
                <div class="titulos-content" style="margin: 30px 0;display: flex;">
                    <a href="#" class="quehacemos active">Que hacemos</a>
                    <a href="#" style="margin-left: 10px; margin-right: 10px;" class="porquehacemos">Porque lo hacemos</a>
                    <a href="#" class="quequeremos">Que queremos</a>
                </div>
            <div class="caja-content">
                <div class="quehacemos-content" >
                    <p>{{ get_field('que_hacemos_nosotros', 'option')}}</p>
                </div>
                <div class="porquehacemos-content">
                    <p>{{ get_field('porque_lo_hacemos_nosotros', 'option')}}</p>
                </div>
                <div class="quequeremos-content">
                    <p>{{ get_field('que_queremos_nosotros', 'option')}}</p>
                </div>
            
            </div>
            <div class="boton-div-2">
                @php($boton = get_field('boton_nosotros', 'options'))
                    <a class="boton-3" href="{{ $boton['url']}}">{{ $boton['title']}}</a>
            </div> 
        </div>
        <div class="img-padre-nosotros column">
        <div class="img-nosotros" style="background: url('{!! the_field('imagen_nosotros', 'options') !!}');">
        </div>
        </div>
    </div>
</div>

<div class="fondo" style="background:url('{{ App::thumbnail() }}'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="page-header">
        <div class="contenido-page-header">
          <h5 class="page-header-h5">{!! App::title() !!}</h5>
          <p class="page-header-p">{{ get_field('descripcion_header', 'option')}}</p>
        </div>
        <img class="svg-interno" src="@asset('images/svg/vector-3-01.svg')" style="width:100%; height:auto; " >
        </div>
</div>
@extends('master')
@section('content')
</br>
<h1 class="text-center alert alert-info">Ubicado en Cartagena de Indias</h1>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Ocultar
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Ver dirección
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="text-center">
    </br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15696.804642096065!2d-75.55535046432695!3d10.405591997850225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef62f144c2ef615%3A0xf0d86e2e9ba26e5d!2sLa%20Riviera%20Cartagena!5e0!3m2!1ses!2sco!4v1604464558309!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
    </div>
  </div>
</div>
@stop

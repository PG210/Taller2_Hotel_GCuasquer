@extends('master')
@section('content')
<h1 class="text-center">Creado en 2011</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('img/img3.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/img6.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('img/img4.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            </br>
            </br>
            <h1 class="text-center">UN POCO DE HISTORIA DEL HOTEL LA RIVERA</h1>
            <p class="alert alert-primary">El Hotel La Rivera con 9 años desde su construcción, es uno de los hoteles mas lujosos de Cartagena donde 
            encuentra precios comodos y una gran variedad gastronomica en nuestro restaurante de 5 estrellas.
             Rodeado de 1000 metros cuadrados de exóticos jardines tropicales.
             Este hotel cinco estrellas es uno de los lugares preferidos por todos los turistas 
             que llegan a esta ciudad. Tiene un gran vestíbulo con suelo de mármol pulido que combina con
             las impresionantes lámparas vintage, complementa su elegante arquitectura neocolonial
              y armoniza con la tranquilidad de sus pasillos. 363 habitaciones de estilo único, la mayoría de
             estas frente al mar Caribe; 9 salones con capacitad total de 1.100 personas para vivir 
             momentos especiales, 4 restaurantes con opciones para todos los gustos, un moderno spa y
              piscina semi olímpica.
            </p>
            <div class="text-center">
                    <img src="{{url('img/mar.jpg')}}" alt="..." width="500" height="400">
                </div>
                </br>
            </br>
        </div>
@stop

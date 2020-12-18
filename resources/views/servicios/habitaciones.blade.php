@extends('master')
@section('content')

<h4 class="text-center"> Habitaciones </h4>
<div class="container">
 <div class="row">
    @foreach($habitacion as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgHab/$p->foto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                            <h5 class="card-title">Numero: {{$p->Numero}}</h5>
                            <p class="card-text">Descripcion: {{$p->descripcion}} </p>
                            <p class="card-text">Numero Camas: {{$p->numCamas}} </p>
                            <p class="card-text">Precio: {{$p->precio}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Tipo: {{$p->Tipo}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                        </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop
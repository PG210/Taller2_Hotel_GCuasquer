@extends('master')
@section('content')

<br><br>

<h4 class="text-center">Consulta A </h4>
<p>Obtener el número de habitación, tipo y precio de las habitaciones que 
estén ocupadas en la actualidad (no tienen fecha de salida).</p>
<div class="container">
 <div class="row">
    @foreach($datos as $p)
      <div class="col-md-4 alert-success"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgHab/$p->foto") }}' class="card-img-top" alt="...">
                        <div class="card-body bg-primary text-white">
                             
                            <p class="card-text">Habitacion No: {{$p->numero}}</p>
                            <p class="card-text">Tipo: {{$p->Tipo}}</p>
                            <p class="card-text">Precio: {{$p->precio}}</p>
                            <p class="card-text">Cliente : {{$p->nombres}}</p>
                            <p class="card-text">Fecha Entrada: {{$p->Entrada}} </p>
                            <p class="card-text">Fecha Salida: {{$p->Salida}}</p>
                           
                        </div>
                    </div>
                    </div>
        @endforeach
           <br>
      </div>
       <br>
</div>
<br>
<h4 class="text-center">Consulta D </h4>
<p>Obtener la cantidad de habitaciones por tipo que cuenta el hotel.</p>
<p class="bg-primary text-white">Sencilla: {{$dat}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
    <p class="bg-primary text-white">Doble: {{$dat1}}</p>
    <p class="bg-primary text-white">Cuadruples: {{$dat2}}</p>                       
    <p class="bg-primary text-white">Suite: {{$dat3}}</p> 
    <p class="bg-primary text-white">Gran suite: {{$dat4}}</p>

@stop
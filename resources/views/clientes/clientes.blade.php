@extends('master')
@section('content')

<h4 class="text-center"> Clientes </h4>
<div class="container">
 <div class="row">
    @foreach($cliente as $p)
      <div class="col-md-4 bg-primary text-white"><br>
        <div class="card" style="width: 15rem;">
                        <img src='{{ url("/imgCli/$p->foto") }}' class="card-img-top" alt="...">
                        <div class="card-body  bg-secondary text-white">
                            <h5 class="card-title">Id: {{$p->id}}</h5>
                            <p class="card-text">Cedula: {{$p->DNI}} </p>
                            <p class="card-text">Nombres: {{$p->nombres}} </p>
                            <p class="card-text">Genero: {{$p->genero}}</p><!--Precio pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Direccion: {{$p->Domicilio}}</p> <!--Tipo pertenece al atributo de la tabla Precio-->
                            <p class="card-text">Telefono: {{$p->Telefono}}</p>
                            
                        </div>
        </div>
        </div>
        @endforeach
        <br>
        </div>
       <br>
</div>

@stop

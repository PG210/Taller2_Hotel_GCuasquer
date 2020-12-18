@extends('master')
@section('content')
</br>
<!--modal-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 MISIÓN
</button>

<!-- Modal  misión-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert-danger">
        <h5 class="modal-title" id="exampleModalLabel">Hotel la Rivera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert-primary">
       <!--tarjeta-->
       <div class="card" style="width: 18rem;">
        <img src="{{url('img/diapositiva2.JPG')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">
          Superar las expectativas de todos nuestros clientes, ir mas allá de la simple satisfacción 
          de sus necesidades con una excelente y eficaz actitud de servicio, y enfocándonos, 
          en la satisfacción total de todas sus necesidades y deseos. Fomentando a la vez el 
          desarrollo turístico regional. 
          </p>
        </div>
      </div>
      </br>
       <!--end tarjeta-->
      </div>
      <div class="modal-footer alert-danger">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- modal vision-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  VISIÓN
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert-warning">
        <h5 class="modal-title" id="exampleModalLabel">Hotel la Rivera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert-primary">
        <!--tarjeta-->
        <div class="card" style="width: 18rem;">
          <img src="{{url('img/diapositiva1.JPG')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
            Ser uno de los mejores hoteles de Cartagena; sobresaliendo en la calidad de nuestros servicios y consolidándonos
            en el corto plazo, como una empresa generadora de riqueza, que proporcione bienestar y desarrollo a todos los que en 
            ella participan.
            </p>
          </div>
        </div>
        </br>
        <!--end tarjeta-->
      </div>
      <div class="modal-footer alert-warning">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--end -->
@stop
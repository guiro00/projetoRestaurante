
 <div class="container alert alert-danger"><br>
 

 <?php  
 if (isset($_GET['action'])) {
   if($_GET['action'] == 'okReservas'){
        echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Sucesso!! </strong> A reserva foi adicionada ao sistema.
          </div>
        </center>';
   }

   if($_GET['action'] == 'borrarReservas'){
        echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Sucesso!! </strong> A reserva foi excluida do sistema.
          </div>
        </center>';
   }
 }

  if($_GET['action'] == 'cambioReservas'){
        echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Sucesso!! </strong> A reserva foi editada no sistema.
          </div>
        </center>';
  }
 

 ?>
<div class="card">
<div class="row">
  <div class="col-md-8">  
    <ol class="breadcrumb alert alert-danger">
       <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTA DE RESERVAS </li>
    </ol>
  </div>
    <div class="col-md-4">  
     <div class="alert alert-danger" role="alert">

         <strong>Reservas Ativas : </strong>
          <?php $vistaReservas = new MvcController();
                 $vistaReservas->totalReservasController();
           ?>                                     
    </div>
  </div>
    <br><br><br>
    <div class="col-md-7">
    <form method="post" class="form-control" action="index.php?action=buscarReservas">  
      <input type="text" class="form-control" id="datepicker" name="buscar" placeholder="Buscar Reservas Fechadas" required=""><br>
       <input type="submit" name="submit" class="btn btn-info btn-sm" value="Buscar">
    </form>
  </div>
  <div class="col-md-2">
<?php require 'Views/modal/modal_reserva.php'; ?>
  <div class="alert alert-danger" role="alert">
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reserva" data-whatever="@mdo">
  Nova Reserva
  </button>
</div>
</div>
  <div class="card-block">
    <p class="card-text">
       <table class="table table-bordered">
    <thead class="thead">
       <tr>
            <td align="center">Cliente</td>
            <td align="center">Convidado</td>
            <td align="center">Telefone</td>
            <td align="center">Dia</td>
            <td align="center">Hora</td>
            <td align="center">Observacões</td>
            <td align="center">Ações</td>
      </tr>
          </thead>

    <tbody>
      <?php 
        $vistaUsuario = new MvcController();
        $vistaUsuario->getReservasController();
        $vistaUsuario->deleteReservasController();
       ?>
    </tbody>
  </table>
</div>
    </p>
</div>
  
  </div>
</div>
 </div>

</div>



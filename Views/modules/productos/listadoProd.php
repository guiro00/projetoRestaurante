<div class="container" style="overflow: auto; width: 1131px; height: 500px;"><br>
<?php 
if (isset($_GET['action'])) {
 	if ($_GET['action']== 'okProductos') {
 	     echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El  O produto foi adicionado com sucesso ao sistema.
          </div>
        </center>';
 	}

 	if ($_GET['action']== 'okEditar') {
 	     echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El  O produto foi editado com sucesso no sistema.
          </div>
        </center>';
 	}

 	if ($_GET['action']== 'borrarProductos') {
 	     echo '<center><div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El  O produto foi excluído com sucesso do sistema.
          </div>
        </center>';
 	}
 }

 ?>
 <div class="row">
	<div class="col-md-8">
 <ol class="breadcrumb">
   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTA DE PRODUTOS</li>
 </ol>
	</div>
		<div class="col-md-4">
		  <div class="alert alert-success" role="alert">
		  &nbsp;&nbsp;&nbsp;&nbsp;
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productos" data-whatever="@mdo">
		       <i class="fa fa-plus fa-spin"> </i> Registrar produtos novos
		  </button>
		</div>
		   <?php require 'Views/modal/modal_productos.php'; ?>
   	  </div>
   	<div class="col-md-12">
	 <table class="table table-bordered table-hover dt-responsive" id="tablaProductos">
	 	<thead class=" bg-danger">
	 		<tr>
	 			<td class="td" align="center">NOME DO PRODUTO</td>
	 			<td class="td" align="center">CATEGORIA DO PRODUTO</td>
	 			<td class="td" align="center">PREÇO</td>
	 			<td class="td" align="center">AÇÕES</td>
	 		</tr>
	 	</thead>

	 	<?php 
          $prod = new ProductosController();
          $prod->getProductosController();
          $prod->deleteProductosController();
	 	 ?>

	 </table>
	 <br>	
  </div>
</div>
</div>
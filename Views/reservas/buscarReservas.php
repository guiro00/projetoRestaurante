<?php 

require_once 'Views/modules/ventas/conexion.php';


	date_default_timezone_set('America/Sao_Paulo');
	if (isset($_POST['submit'])) {
		$buscar = $_POST['buscar'];
		$buscar= date("Y-m-d", strtotime($buscar));
       // echo "$buscar";
		$sql = $conexion->prepare("SELECT * FROM reservas WHERE diallegada LIKE :diallegada OR nombrecliente LIKE :nombrecliente");
		$resultado = $sql->execute(array(':diallegada'=> "%$buscar%",
			                              ':nombrecliente'=>"%$buscar%"));
		$resultado = $sql->fetchAll(PDO::FETCH_OBJ);
	if (empty($resultado)) {
		$titulo = 'Não se encontra reserva do dia  : '  .date("d-m-Y", strtotime($buscar));
		echo "<br><br><br><br>";
	} else {
		$titulo = 'A reserva buscada é do dia: '  .date("d-m-Y", strtotime($buscar));
	}
	
}

 ?>

<div class="container">
<br>
<ol class="breadcrumb alert alert-danger">
	<h1><li class="breadcrumb-item active"> <?php echo $titulo ;?></li></h1><a href="reservas"><i class="fa fa-undo" aria-hidden="true"> Voltar as Reservas</a></i>
</ol>	

<table class="table table-bordered">
<thead class="thead">
	<th>Nome do Cliente</th>
	<th>Convidado</th>
	<th>Telefone</th>
	<th>Dia Reservado</th>
	<th>Hora de Chegada</th>
	<th>Observações</th>
	<th>Editar ou  Borrar</th>
</thead>
<?php foreach($resultado as $resultados): ?>
	
<tbody>
	<td  class=" alert-danger"><?php echo $resultados->nombrecliente; ?></td>
	<td  class=" alert-danger" align="center"><?php echo $resultados->cantidadpersonas; ?></td>
	<td  class=" alert-danger"><?php echo $resultados->telefono; ?></td>
	<td  class=" alert-danger"><?php echo date("d-m-Y", strtotime($resultados->diallegada)) ; ?></td>
	<td  class=" alert-danger" align="center"><?php echo $resultados->horallegada; ?></td>
	<td class=" alert-danger"><?php echo $resultados->observaciones; ?></td>
    <td  class=" alert-danger">&nbsp; &nbsp;
    <a href="index.php?action=editarReservas&idreserva=<?php echo $resultados->idreserva;?>"><i class="fa fa-edit btn btn-primary btn-sm "></i></a>
	<a href="index.php?action=reservas&idBorrar=<?php echo $resultados->idreserva;?>"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a></td>
</tbody>
<?php endforeach; ?>
</table>
<br>
<br>
<br>
</div>


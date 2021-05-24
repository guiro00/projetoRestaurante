<?php session_start();
	try {
		$error = '';
		$enviar='';
		$enviado='';

		$conexion = new PDO('mysql:host=localhost;dbname=restaurant', 'root','chavalote');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nombreusuario = $_POST['nombreusuario'];
			$password = $_POST['password'];
     $sql = $conexion->prepare('SELECT * FROM usuarios WHERE nombreusuario = :nombreusuario AND 
     	                        password = :password');
     $sql->execute(array(':nombreusuario'=>$nombreusuario,
     	                  ':password'=>$password));

     $resultado = $sql->fetch();
        if ($resultado != false) {
	      $_SESSION['nombreusuario'] = $nombreusuario;
	      $enviar .=  '<center> Bem Vindo <br>'. ucwords($resultado['nombreusuario']). '</center> <br>';
	      $enviar .= '<meta http-equiv="refresh" content="4;url=../../index">';
	      $enviado .= '<center><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><br>
	                  <span class="">Acessando o Sistema</span></center><br>';
	   
   } else {
   $error .= '<li class="alert alert-danger"> Dados incorretos </li>';
   
}

		}
	} catch (Exception $e) {
		echo "Erro de conexão ao banco de dados.";
	}


	






	require 'login.view.php';
 ?>
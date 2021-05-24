<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/estilos.login.css">
	<title>Login do Sistema</title>
</head>

<body>

<div class="row">
	<div class="col-md-12">
    <div class="conta">
       <h1>Sistema Administrativo do Restaurante &nbsp;<i class="fa fa-cutlery"></i></h1>
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<hr>
	  <div class="form-group">
		 <i class="fa fa-user"></i> <label for="nombreusuario"><b>Nome do Usuário</b></label>	    
		<input type="text" name="nombreusuario" class="form-control" placeholder="Nome do Usuário ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt"></i> <label for="password"><b>Senha</b></label> 
		<input type="password" name="password" class="form-control" placeholder="Senha">
	  </div><br>


       <?php  if(!isset($_SESSION['nombreusuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <br>
            <?php if(!empty($error)): ?>
            	<br>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
	</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" img="./assets/img/foto2.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" img="./assets/img/foto7.jpg">
    </div>
  </div>
</div>

</div>
</body>
</html>
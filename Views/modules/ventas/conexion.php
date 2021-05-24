<?php 
 $conexion = new PDO('mysql:host=localhost;dbname=restaurant','root','chavalote');
   date_default_timezone_set('America/Sao_Paulo');
 $conexion->exec('SET CHARACTER SET utf8');

 ?>
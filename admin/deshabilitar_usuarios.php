<?php
   session_start();
   if ( !isset($_SESSION["ok"]) )
      header("location: http://localhost/formulario/index.php");
   if ( isset($_REQUEST["control"]) ) {
      $estado = $_REQUEST["control"];
      if ( $estado == 1 )
	     echo "<hr>El usuario YA existe, Adicion cancelada<hr>";
	  if ( $estado == 2 )
	     echo "<hr>El usuario se agrego satisfactoriamente<hr>";
   } 
   ?>

<?php 

   if ( isset($_REQUEST["usuario"]) )
   {
      $loginusr = $_REQUEST["usuario"];
   }


$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("UPDATE usuario SET estado='deshabilitado' WHERE login='$loginusr'") or die("error en tb usuarios");

mysql_close($con);

header ("location: editar_usuarios.php");




?>
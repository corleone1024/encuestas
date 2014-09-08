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
$nombre =$_REQUEST["txtnombre"];
$desc =$_REQUEST["descripcion"];
$estado =$_REQUEST["cboestado"];
$fecha = date("Y-m-d");
$cod_usr = 1;

$con= mysql_connect("localhost", "root") or die ("error en la conexion");
mysql_select_db("formulario")or die("error en DB");
$res=mysql_query("INSERT into formulario(nombre,des,fecha,estado,cod_usr)VALUES('$nombre','$desc','$fecha','$estado','$cod_usr')") or die("error en tb formulario");

mysql_close($con);

//echo "Formulario $nombre creado correctamente"

header("location: genera_formulario.php?nombreform=$nombre")

?>

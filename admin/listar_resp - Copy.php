<?php
$link=0;
$link=$_REQUEST['link'];
	$con= mysql_connect("localhost", "root") or die ("error en la conexion");
	mysql_select_db("formulario")or die("error en DB");
//	$res=mysql_query("select * from formulario") or die("error en tb formulario");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
Listado de Formulario<p>
<?PHP

//$nom_f=$_REQUEST[''];
//	if($res){
	//	echo '<br>coneccion correcta';
		
		$res=mysql_query("SELECT pregunta, cod_preg FROM pregunta WHERE cod_f IN (SELECT cod_f FROM formulario WHERE nombre =  '$link')");
		$con=1;
		while($f=mysql_fetch_row($res)){
			$con1=1;
		 echo '<b>'.$con.": ".$f[0].'<br></b>';
		 $res1=mysql_query("select respuesta from respuesta_abierta where cod_preg=$f[1]");
		 	while($f1=mysql_fetch_row($res1)){
				echo $con1.": ".$f1[0].'<br>';
					$con1++;
				}
			$res2=mysql_query("select nro_respuesta from respuesta_multiple where cod_preg=$f[1]");
		 	while($f2=mysql_fetch_row($res2)){
				echo $con2.": ".$f2[0].'<br>';
					$con1++;
				}
				$res3=mysql_query("select opcion from respuesta_radio_button where cod_preg=$f[1]");
		 	while($f3=mysql_fetch_row($res3)){
				echo $con3.": ".$f3[0].'<br>';
					$con1++;
				}
				$res4=mysql_query("select respuesta from respuesta_resumen where cod_preg=$f[1]");
		 	while($f4=mysql_fetch_row($res4)){
				echo $con4.": ".$f4[0].'<br>';
					$con1++;
				}
				echo "<br>";
			$con++;	
			
		}
?>

</body>
</html>
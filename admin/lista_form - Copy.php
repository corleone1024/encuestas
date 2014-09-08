<?php
	$con= mysql_connect("localhost", "root") or die ("error en la conexion");
	mysql_select_db("formulario")or die("error en DB");
//	$res=mysql_query("select * from formulario") or die("error en tb formulario");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="200" border="1">
  <tr>
    <th colspan="2" scope="row">Formulario</th>
  </tr>
  <?php 
  	$res=mysql_query("select * from formulario") or die("error en tb formulario");
  while($f=mysql_fetch_row($res)){
	 
  echo "<tr>
    <th scope='row'>$f[1]</th>
    <td><a href='listar_resp.php?link=$f[1]'>Ver</a></td>
  </tr>";
  
   } ?>
   
</table>
</body>
</html>
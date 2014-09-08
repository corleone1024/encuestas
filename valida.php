
<?php
//jajajajajaj
   session_start();
   $qusr = $_REQUEST["login"];
   $qcla = $_REQUEST["psw"];
   $con=mysql_connect("localhost","root");
   mysql_select_db("formulario");
   $res_ad=mysql_query("select * from usuario where login='$qusr'
                         and  password = md5('$qcla') and nivel='administrador' and estado='habilitado'");
   $nr_ad = mysql_num_rows($res_ad);
   $res_us=mysql_query("select * from usuario where login='$qusr'
                         and  password = md5('$qcla') and  nivel='usuario' and estado='habilitado'");
   $nr_us= mysql_num_rows($res_us);
   if ( $nr_ad == 1 ){
       $_SESSION["ok"]="Jiza!!";
	   $fila = mysql_fetch_row($res_ad);
	   $_SESSION["usuario"] = $fila[1];
	   $_SESSION["codusuario"] = $fila[0];
	   header("location: admin/menu_admin.php");
   }
   else {
			if ( $nr_us == 1 ){
			$_SESSION["ok"]="Jiza!!";
			$fila = mysql_fetch_row($res_us);
			$_SESSION["usuario"] = $fila[1];
			$_SESSION["codusuario"] = $fila[0];
			 header("location: user/menu_user.php");
		   }
		   else {
			  $ores=mysql_query("select * from usuario where login='$qusr'");
			  $onr = mysql_num_rows($ores);
			  if ( $onr == 1 )
				 header("location: index.php?error=1");
			  else
				 header("location: index.php?error=2");
		}
   }
?>

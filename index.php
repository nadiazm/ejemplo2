<html>
<head>
<title>Lista</title>
</head>
<body>
<center><label><font size="4" color="grey" face="Brush Script">Para confirmar<font></label></center>
<br>
<center><label><font size="8" color="white" face="Brush Script">Lista de Invitados<font></label>
<br>
<table class="report">
            <tr>
			<th>Nombre</th>
			<th>Apellido</th>
            <th>Respuesta</th>
            </tr>  
<?php
include('conexion.php');
$pdo = connect();
        $sql = "SELECT f.nombre, a.nombre, a.respuesta FROM familia f, asistencia a WHERE f.id_familia=a.id ORDER BY a.nombre asc ";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        foreach ($list as $rs) {
			 $invitado =$rs['nombre'];
			 $resp =$rs['respuesta'];
			 
			 $apellido = strstr($invitado, ' ');
			 $name = strstr($invitado, ' ', true);
			 
			 echo "<tr> 
						<td>$name</td>
						<td>$apellido</td>";
					
					if($resp=="No"){
						echo "<td class='rojo'>$resp</td>";
					}else if ($resp=="Si"){
						echo "<td class='verde'>$resp</td>";
					}else{
						echo "<td>$resp</td>";
					echo "</tr>";
					}

        }
  ?>
</table>
 <a href="index.php" class="enlace">Salir</a>
<br></br>
<hr>
<footer><i>Creado por Jhohan y Natalia (2025)</i></footer><br>
 </center>
</body>
</html>
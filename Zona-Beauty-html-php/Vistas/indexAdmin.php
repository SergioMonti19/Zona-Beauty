
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

<link rel="stylesheet" href="../css/estilo.css">
<link rel="stylesheet" href="../css/style.min.css">
    <title>Usuarios</title>
</head>

<div class="container is-fluid">
<div class="col-xs-12">
  		<h1>Bienvenido Administrador <?php echo $_SESSION['usuario']; ?></h1>
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>
			<a class="btn btn-success" href="../index.php">Nuevo usuario 
      <i class="fa fa-plus"></i> </a>
      <a class="btn btn-warning" href="../Controlador/cerrarSesion.php">Log Out
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>
		</div>
		<br>
           <br>
			</form>
 
      <table class="table table-striped table-dark " id= "table_id">
                         <thead>    
                         <tr>
                        <th>Id Empleado</th>
                        <th>Nombre Completo</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Puesto</th>
                        <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","zonabeauty");               
$SQL="SELECT empleados.id_empleado, empleados.nombre_completo, empleados.correo, empleados.telefono, empleados.puesto,
empleados.estado FROM empleados";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['id_empleado']; ?></td>
<td><?php echo $fila['nombre_completo']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['puesto']; ?></td>
<td><?php echo $fila['estado']; ?></td>



<td>


<a class="btn btn-warning" href="editar_usuario.php?id=<?php echo $fila['id']?> ">
<i class="fa fa-edit"></i> </a>

  <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id']?>">
<i class="fa fa-trash"></i></a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>
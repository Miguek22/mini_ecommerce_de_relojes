<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>
		html{
 font-size: 16px;
 font-family: 'Lato', sans-serif;

}
body{
 background-color: #9ad1ed;
}
.cont1{
 max-width: 450px;
 height: auto;
 background-color: #efefef;
 margin: 5% auto;
 padding-bottom: 1rem;
}
.form-top{
 width: 100%;
 text-align: center;
 padding: 2rem 0 1rem;
 border-top: solid .4rem #f39b53;
 margin-bottom: 1rem;
}
.form-top h2{
font-weight: bold;
color: #cac8c8;
font-size: 18px;

}
h2 span{
 color: #f39b53;
}
.form-reg{
 padding: 0 2rem;
 display: flex;
 flex-direction: column;
 justify-content: center;
}
.btn-form{
 display: flex;
 justify-content: space-around;
 margin-top: 1rem;
}
.input, .btn-submit, .btn-reset{
 background-color: #efefef;
 padding: .5rem;
 margin: .5rem 0;
 border:none;
 border-bottom: solid #cac8c8 .2rem;
 transition: all .5s;
}
.input:focus{
 border-bottom: solid #f39b53 .2rem;
}
.btn-submit, .btn-reset{
 width: 100%;
 border-bottom: none;
 background-color: #31b1e5;
 color: white;
}
.btn-reset{
 background-color: #eda135;
}
.btn-submit:hover{
 background-color: #4c9ed9;

}
.btn-reset:hover{
 background-color: #fa9535;
}
</style>
<body>
	<center>
 <div class="cont1">
  <div class="form-top">
   <h2>Formulario<span>Registro</span></h2>
  </div>

<form class="form-reg" action="resultado_de_edicion.php" method="post">
	<?php 
	 require ('conexion.php');
	 $idGet=$_GET['ids'];
	 $id=$_GET['ids'];
	 $consulta="SELECT * FROM empleados where id_empleado=$idGet ";
	 $resultado=$conexion->query($consulta);
	$fin = $resultado->fetch_assoc();
	 
 ?> 

<td><h3 for="text"> Empleado</h3></td>
<td><input class="input" value="<?php echo $fin['id_empleado']  ?>" type="text" name="id" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['nombre_empleados']  ?>" type="text" name="nombre" readonly></td>
<br>
<br>
<td><input class="input" value="<?php echo $fin['apellido_empleados']  ?>" type="text" name="apellido" readonly></td>
<br>
<br>
<input class="input" name="nuevo_nombre_empleado" required placeholder="Ingrese su Nuevo Nombre" required="">
<br>
<br>
<input class="input" name="nuevo_apellido_empleado" required placeholder="Ingrese su Nuevo Apellido" required="">
<br>
<br>
<input class="btn-submit" type="submit" value="Registrarse">
	</form>
	</div>
	

</body>
</html>
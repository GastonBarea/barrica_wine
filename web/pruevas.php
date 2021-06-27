<?php
//include_once('config/config.php');
?>

<?php
 
	session_start();
 
 
 
?>
 
<!doctype html>
 
<html lang="es">
 
<head>
 <title>Ejemplo 6</title>
 <meta charset="utf-8">
 <style type="text/css">.container{width: 500px;margin: 50px auto;}</style>
	</head>
	<body>
		<div class="container">
			<h1 style="text-align:center;">Agregar Producto</h1>
			<form name="frmAgregar" method="post" action="productos.php">
				<div><SELECT id="mi_select" name="mi_select">
						<OPTION value="0">WOW</OPTION>
						<OPTION value="1">DOTA</OPTION>
						<OPTION value="2">HOST</OPTION>
						<OPTION value="3">HEART</OPTION>
					</SELECT></div>
				<div>Cantidad: <input type="number" name="txtCantidad" size="20"></div>
				<div style="margin:15px 0px 0px 150px;">
					<input type="submit" name="btnAgregar" value="Enviar">
				</div>
				<div><a href="mostrar.php">Mostrar produtos en carrito</a></div>
 
			</form>
 
		</div>
 
		<?php
 
 
 
		if (!isset($_POST["btnAgregar"])) {
 
			$_SESSION["carrito"]=array();
 
			echo "estas aqui";
 
		}
 
		if (isset($_POST["btnAgregar"])) {
 
			$producto=$_REQUEST['mi_select'];
 
			echo "estas aca";
 
 
 
		}
 
 
 
		?>
 
 
 
	</body>
 
</html>


<?php
//Puedes poner si existe un post del formulario
if(isset($_POST['frmAgregar'])){
       $miSelect = $_POST['mi_select'];
       $cantidad = $_POST['txtCantidad'];
        /* Ya con esto recoge lo que viene del formulario, tambien puedes poner como condicion si no se hace un post en esa pagina que vuelva al formulario o que mande a una pagina 404 */
}else{
     /* ... lo que quieras poner */
}
/* tambien puedes hacer mejor por jQuery o javascript, si quieres te hago un ejemplo... si hay algun error, es porque no estoy trabajando en un IDE de programaci'on ahora... */
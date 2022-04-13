<?php 
require_once("conexion.php");
class Producto extends Conexion{
	public function alta() {
		$producto=$_POST["producto"];$descripcion=$_POST["descripcion"];$clasificacion=$_POST["clasificacion"];$marca=$_POST["marca"];$cantidad=$_POST["cantidad"];$imagen=$_POST["imagen"];$busqueda=$_POST["busqueda"];;
		$this->sentencia = "INSERT INTO producto VALUES (null,'$producto','$descripcion','$clasificacion','$marca','$cantidad','$imagen','$busqueda');";
		$this->ejecutar_sentencia();
	}
	public function consulta() {
		$this->sentencia = "SELECT * FROM producto";
		return $this->obtener_sentencia();
	}
	public function baja() {
		$id_eliminar = $_POST["idEliminar"];
		$this->sentencia = "DELETE FROM producto WHERE id=$id_eliminar";
		$this->ejecutar_sentencia();
	}
	public function modificar() {
		$id = $_POST["id_mod"];
		$producto=$_POST["producto"];$descripcion=$_POST["descripcion"];$clasificacion=$_POST["clasificacion"];$marca=$_POST["marca"];$cantidad=$_POST["cantidad"];$imagen=$_POST["imagen"];$busqueda=$_POST["busqueda"];
		$parametros = "producto='$producto',descripcion='$descripcion',clasificacion='$clasificacion',marca='$marca',cantidad='$cantidad',imagen='$imagen',busqueda='$busqueda'";
		return $this->modificarC($parametros,"producto","id",$id);	
	}
}
?>
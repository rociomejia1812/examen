<?php
	/**
	 * 
	 */
	class CrearP
	{
		
		function __construct()
		{
			# code...
		}
	

	public function GuardarProductos ($nombre,$descripcion,$precio,$cantidad)
	{
		
		$inventario=new Conexion();
		$query="INSERT INTO inventario(Nombre,Descripcion,Cantidad,Precio) VALUES ('$nombre','$descripcion','$cantidad','$precio')";

		$consulta=$inventario->query($query);
		$inventario->close();
		return $consulta;
	}
}
?>
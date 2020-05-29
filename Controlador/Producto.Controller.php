<?php
		
		class Producto
		{
			
			function __construct()
			{
				# code...
			}

			public function guardarP()
			{
				$guardarpro=new CrearP();
				$smarty=new Smarty();

				$nombre=$_POST['producto'];
				$descripcion=$_POST['descripcion'];
				$precio=$_POST['cantidad'];
				$cantidad=$_POST['precio'];

				$resultado=$guardarpro->GuardarProductos($nombre,$descripcion,$cantidad,$precio);

				if ($resultado)
				{
					echo "producto agregado";
				}
				else
				{
					echo "producto no agregado";
				}
			}
		}
?>
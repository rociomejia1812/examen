<?php 
			/**
			 * 
			 */
			class Ingresar
			{
				
				
				public function CargarOp()
					{
						$smarty=new Smarty();
						session_start();
						$_SESSION['op']=$_GET['op'];

						$smarty->assign('e','null');
						$smarty->assign('vista',$_SESSION['op']);
						$smarty->assign('usuario',$_SESSION['user']);
						$smarty->assign('tipo',$_SESSION['tipo']);
						$smarty->display('IngresoP.tpl'); 
					}
			}

?>
<?php
	require "lib/mod004_presentacion.php";
	if (isset($_GET["id_moviles"])) {
		$idproduct = $_GET["id_moviles"];
	}
	$layerDetailprducts =  mod004_getDetailProducts( $idproduct );

	require "vistas/vista.detailsproducts.php";
	
?>

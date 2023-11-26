<?php
session_start();
if (isset($_GET["pageActual"])) {
	$pageActual= $_GET["pageActual"];
}else {
	$pageActual = 1;
}
$elementsPerPage = 6;
require "lib/mod004_presentacion.php";
	$layerProducts = mod004_getProducts($pageActual,$elementsPerPage);
	$layerPageProducts = mod004_getLayerPaginationProducts($pageActual, $elementsPerPage);

	require "vistas/vista_main.php";
	?>

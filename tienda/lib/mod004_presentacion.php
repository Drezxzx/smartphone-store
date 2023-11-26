<?php
require "mod003_logica.php";

function mod004_getProducts($pageActual, $elementsPerPage)
{
	$arDataProducts = mod003_getProducts($pageActual, $elementsPerPage);

	$listProducts = "";
	//for ( $i = 0; $i < count ( $arDataProducts ); $i++ ) {
	foreach ($arDataProducts as $product) {
		//var_dump( $arDataProducts );
		$listProducts .= "<div class=\"imagenes\"> <a href='detailproducts.php?id_moviles={$product["idPSmarphone"]}'> <div class=\"contene\"> <span class=\"precio\"></span><img class=\"width100\" src=\"{$product['imgUrl']}\"><span class=\"precio\">{$product['price1']}€</span><span class=\"titulo\">{$product['nameSmartphone']}<p>{$product['state']}</p></span><button class=\"boton\">Añadir al carrito</button></div></a></div>";
	}

	/* <p>1 - Kobe Bryant2</p><p>7 - Larry Bird</p><p>2 - LeBron James</p><p>5 - Magic Johnson</p><p>3 - Michael Jordan</p><p>4 - Shaquille O'Neal</p><p>6 - Tim Duncan</p><p>8 - Wilt Chamberlain</p>
	 */

	return $listProducts;
}
function  mod004_getDetailProducts( $idproduct )
{
	$arDataProducts =mod003_getDetailProducts( $idproduct );

	$listProducts = "";
	//for ( $i = 0; $i < count ( $arDataProducts ); $i++ ) {
	foreach ($arDataProducts as $product) {
		// var_dump( $arDataProducts );
	
$listProducts .= "
<div class=\"ficha-producto\">
    <div class=\"imagenes\">
        <div class=\"contenedor\">
            <img class=\"width100\" src=\"{$product['imgUrl']}\">
        </div>
    </div>
    <div class=\"informacion-producto\">
        <h2 class='nombre-movile'>{$product['movileName']}</h2>
        <p class=\"descripcion\">{$product['descripcion']}</p>
        <p class=\"precio\">{$product['price1']}€</p>
        <p class=\"marcas\">{$product['nameBrand1']}</p>
        <button class=\"boton\">Añadir al carrito</button>
    </div>
</div>";


	}

	/* <p>1 - Kobe Bryant2</p><p>7 - Larry Bird</p><p>2 - LeBron James</p><p>5 - Magic Johnson</p><p>3 - Michael Jordan</p><p>4 - Shaquille O'Neal</p><p>6 - Tim Duncan</p><p>8 - Wilt Chamberlain</p>
	 */

	return $listProducts;
}

function mod004_getLayerPaginationProducts($pageActual, $elementsPerPage)
{
	$totalpages = mod003_getNumProducts($elementsPerPage, $pageActual);
	$lastbuton = $totalpages;
	$boton = "<div class='pageroducts'>";
	$boton .= "<div class=\"sub\">";

	if (isset($_GET["elementsPerPage"])) {
		$elementsPerPages = $_GET["elementsPerPage"];
	} else {
		$elementsPerPages = 3;
	}
	if ($totalpages === "3") {
		if ( $pageActual == "3" || $pageActual == "2" || $pageActual == "1"  ) {
			if ($pageActual >= 2) {
				$boton .= "<a class=\"botones\" href='main.php?pageActual=1 &elementsPerPage=$elementsPerPages'><span> 1 </span></a>";
				if ($pageActual == 3) {
					for ($i = $totalpages; $i > $totalpages - 2; $i--) {
						if ($i < $totalpages) {
							$numbers[] = $i;	
								
						}
					}
					$numbers = array_reverse($numbers);
					foreach ($numbers as $numero) {
						$boton .= "<a class=\"botones\" class=\"numbers\" href='main.php?pageActual=$numero &elementsPerPage=$elementsPerPages'><span >$numero</span></a>";
					}
				}
				$boton .= "<span class=\"botones\"> ... </span>";
			}
			for ($i = $pageActual; $i < $pageActual + 2; $i++) {
				if ($i <= $totalpages) {
					$boton.= "<a class=\"botones\" class=\"numbers\" href='main.php?pageActual=$i &elementsPerPage=$elementsPerPages'><span >$i</span></a>";
				}
			}
			if ($pageActual == (($totalpages+1)-($totalpages))) {
				$boton .= "<span class=\"botones\"> ... </span>";
				$boton .= "<a class=\"botones\" href='main.php?pageActual=$totalpages &elementsPerPage=$elementsPerPages'><span> 3 </span></a>";
			}
		}
	}
		if ($totalpages != 3) {
			if ($pageActual <= $totalpages - 3) {
				if ($pageActual >= 3) {
					$boton .= "<a class=\"botones\" href='main.php?pageActual=1 &elementsPerPage=$elementsPerPages'><span> 1 </span></a>";
					$boton .= "<span class=\"botones\"> ... </span>";
				}
				for ($i = $pageActual; $i < $pageActual + 3; $i++) {
					$boton .= "<a class=\"botones\" class=\"numbers\" href='main.php?pageActual=$i &elementsPerPage=$elementsPerPages'><span >$i</span></a>";
				}
				$boton .= "<span class=\"botones\"> ... </span>";
				$boton .= "<a class=\"botones\" href='main.php?pageActual=$lastbuton &elementsPerPage=$elementsPerPages'><span> $totalpages </span></a>";
			} else {
				$boton .= "<a class=\"botones\" href='main.php?pageActual=1 &elementsPerPage=$elementsPerPages'><span> 1 </span></a>";
				$boton .= "<span class=\"botones\"> ... </span>";
				for ($i = $totalpages; $i > $totalpages - 3; $i--) {
					$numbers[] = $i;
				}
				$numbers = array_reverse($numbers);
				foreach ($numbers as $numero) {
					$boton .= "<a class=\"botones\" class=\"numbers\" href='main.php?pageActual=$numero &elementsPerPage=$elementsPerPages'><span >$numero</span></a>";
				}
		
			}}
			$boton .= "</div>";
			$boton .= "</div>";
			return $boton;
		}
	// if (isset($_GET["pageActual"]) ){
	// 	$boton .= "<span class=\"botones\"> ... </span>";
	// 	$boton .= "<a class=\"botones\" href='main.php?pageActual=$lastbuton &elementsPerPage=$elementsPerPages'><span> $totalpages </span></a>";
	// // $boton .= "<div class=\"menu\">";
	// // for ($j = 1; $j <= 4; $j++) {
	// // 	$boton .= "<a class=\"botones\" class=\"button\"href='main.php?elementsPerPage=$j'><span> $j </span></a>";
	// // }
	// // $boton .= "</div>";


function mod004_SetUser($password, $usuario)
{
	$iduser = mod003_SetUser($usuario, $password);
	if (count($iduser) > 0) {
		$layerMessage = "<p>División dada de alta correctamente.</p>";
	}

	return $layerMessage;

}

function mod004_getUser()
{

	$arRetorno = mod003_getUser();

	$link= "<a class='nombre' href=''>{$arRetorno[0]["nomuser"]}</a>";
	return $link;
	

}

function mod004_CountUser()
{
	$arRetorno = mod003_CountUsers();
return $arRetorno;
}
?>
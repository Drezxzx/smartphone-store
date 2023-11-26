 <?php
	require "mod002_accesoadatos.php";
	

	function mod003_getProducts($pageActual,$elementsPerPage) {
		$arDataProducts = mod002_getProducts(($pageActual - 1) * $elementsPerPage, $elementsPerPage );

		if ( $arDataProducts[ "status"][ "codError" ] === "000" ) {
			return $arDataProducts[ "data" ];
		} else {
			return $arDataProducts[ "status" ];
		}

	}



	

	function mod003_getNumProducts($elementsPerPage,$pageActual){
		$totalpages = mod002_getproductscount();
		if ( $totalpages[ "status"][ "codError" ] === "000" ) {
			$totalpages = ceil($totalpages["data"]["0"]["nom_moviles"] / $elementsPerPage);
		}
		return strval($totalpages);
	}

	function mod003_SetUser($usuario, $password) {
		$arRetorno = mod002_SetUser($usuario, $password);
		if ($arRetorno) {
			if ( $arRetorno[ "status"][ "codError"] === "000" ) {
				return [ 
				"result" => true,
				"id"	 => $arRetorno["data"]
			];
		} else {
			return [
				"result" => false
			];
		}
	}
	}
	function mod003_getUser(){
		$arRetorno = mod002_getUser();
		if ( $arRetorno[ "status"][ "codError"] === "000" ) {
			
			return $arRetorno["data"];
		} 
		 
	}
	

	function mod003_setLogin($email, $password) {
		$dataUser = mod002_setLogin($email, $password);
		if ( $dataUser[ "status" ][ "codError" ] === "000" ) {
			$_SESSION[ "idUser" ] = $dataUser[ "data" ][ 0 ][ "idUser" ];
			$_SESSION[ "nameUser"] = $dataUser["data"][0]["nameUser"];
			return [ 
				"result" => true,
				"name"	 => $dataUser["data"][0]["nameUser"]
			];

			
		} else {
			return [
				"result" => False
			];
		}
	}
	function mod003_search($busqueda){
		$datasearch = mod002_search($busqueda);

		if ( $datasearch[ "status" ][ "codError" ] === "000" ) {
			return [ 
				"result" => true,
				"data"	 => $datasearch["data"]
			];

	}
	}
	function mod003_getDetailProducts($idproduct){
		$datasearch = mod002_getDetailProducts($idproduct);
		if ( $datasearch[ "status" ][ "codError" ] === "000" ) {
			return  $datasearch["data"];
		
	}
}
	?>

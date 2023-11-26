<?php
require "mod001_conexion.php";

// Función generalista que ejecuta una query y obtiene y transforma los datos de la query con el array $arAttributes.
function mod002_executeQuery($strSQL, $arAttributes)
{
    $link = mod001_conectoBD("normal");

    if ($result = $link->query($strSQL)) {
        if ($result->num_rows !== 0) {
            $arRetorno["status"]["codError"] = "000"; // Con datos.
            $arRetorno["status"]["numRows"] = $result->num_rows;

            $i = 0;
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                /* echo "<pre>";
                            var_dump( $row );
                            echo "</pre>"; */
                foreach ($arAttributes as $element) {
                    if (isset($element[2])) {
                        if ($element[2] === "bool") {
                            $arRetorno["data"][$i][$element[1]] = (bool) $row[$element[0]];
                        } else if ($element[2] === "int") {
                            if ($row[$element[0]] !== null) {
                                $arRetorno["data"][$i][$element[1]] = intval($row[$element[0]]);
                            } else {
                                $arRetorno["data"][$i][$element[1]] = null;
                            }
                        }
                    } else {
                        $arRetorno["data"][$i][$element[1]] = $row[$element[0]];
                    }
                }
                /* echo "<pre>";
                            var_dump( $arRetorno[ "data" ][ $i ] );
                            echo "</pre>"; */
                $i++;
            }
        } else {
            $arRetorno["status"]["codError"] = "001"; // Sin datos.
            $arRetorno["status"]["strSQL"] = $strSQL;
        }
    } else {
        $arRetorno["status"]["codError"] = "002"; // Error Query.
        $arRetorno["status"]["strSQL"] = $strSQL;
    }

    mod001_desconectoBD($link);

    return $arRetorno;
}

function mod002_getProducts($pageActual,$elementsPerPage)
{
    $arAttributes = [
        ["id_moviles", "idPSmarphone", "int"],
        ["nom_moviles", "nameSmartphone"],
        ["nom_imagenes", "imgUrl"],
        ["precio", "price1"],
        ["estadosim", "state"],

     
    ];

    $strSQL = "SELECT moviles.id_moviles, moviles.nom_moviles, imagenes.nom_imagenes, ma.nom_marca, moviles.precio,moviles.estadosim  
    FROM moviles
    INNER JOIN imagenes ON imagenes.id_imagenes = moviles.id_imagenes
    LEFT JOIN movilesmarcas mm ON moviles.id_moviles = mm.id_moviles
    LEFT JOIN marcas ma ON ma.id_marcas = mm.id_marcas
    LIMIT $pageActual, $elementsPerPage "
  ;

    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);
    return $arRetorno;
}

function mod002_getDetailProducts( $idproduct )
{
    $arAttributes = [
        ["nom_moviles", "movileName" ],
        ["nom_imagenes", "imgUrl"],
        ["precio", "price1"],
        ["nom_marca", "nameBrand1"],
        ["descripcion", "descripcion"]

    ];

    $strSQL = "SELECT moviles.descripcion, moviles.id_moviles, moviles.nom_moviles, imagenes.nom_imagenes, ma.nom_marca, moviles.precio 
    FROM moviles
    INNER JOIN imagenes ON imagenes.id_imagenes = moviles.id_imagenes
    LEFT JOIN movilesmarcas mm ON moviles.id_moviles = mm.id_moviles
    LEFT JOIN marcas ma ON ma.id_marcas = mm.id_marcas
    WHERE moviles.id_moviles = '$idproduct'"
  ;


    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);

    return $arRetorno;
}

function mod002_getproductscount(){
    $arAttributes =[ 
        ["nom_moviles" , "nom_moviles", "int" ]
    ];
    $strSQL = "SELECT COUNT(*) AS nom_moviles FROM moviles";
    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);
    return  $arRetorno;
}

function mod002_SetUser($usuario, $password) {
    $strSQL = "INSERT INTO usuarios (id_usuarios, nom_usuarios,contraseña)VALUES(NULL, '$usuario', '$password')";

    $link = mod001_conectoBD("normal");

    if ($link->query($strSQL)) {
        if ($link->affected_rows > 0) {
            $arRetorno["status"]["codError"] = "000";             // Con datos.
            $arRetorno["data"]["idDivision"] = $link->insert_id;
        } else {
            $arRetorno["status"]["codError"] = "001";  // No ha habido inserción
        }
    } else if ($link->errno) {
        $arRetorno["status"]["codError"] = "002";
        $arRetorno["status"]["errno"]    = $link->errno;
        $arRetorno["status"]["deserror"] = $link->error;
        $arRetorno["status"]["strSQL"]   = $strSQL;
    }

    return $arRetorno;
}
function mod002_getUser() {

    $arAttributes = [
        
        [ "id_usuarios",    "iduser", "int"  ],
        [ "nom_usuarios",    "nomuser"  ],
    ];

    $strSQL = "SELECT nom_usuarios FROM usuarios";

    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);

    return $arRetorno;
}



function mod002_setLogin($email, $password) {
    $arAttributes = [
        ["id_usuarios",    "idUser",               "int"],
        ["nom_usuarios",   "nameUser"]
    ];

    $strSQL = "SELECT id_usuarios, nom_usuarios FROM usuarios WHERE nom_usuarios = '$email' AND contraseña = '$password'";

    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);
    
    return $arRetorno;
}
function mod002_search($busqueda){
    $arAttributes = [
        ["id_moviles", "idPSmarphone", "int"],
        ["nom_moviles", "nameSmartphone"],
        ["nom_imagenes", "imgUrl"],
        ["precio", "price1"],
        // ["estadosim", "state"],

     
    ];

    $strSQL = "SELECT moviles.id_moviles, moviles.nom_moviles, imagenes.nom_imagenes, moviles.precio 
    FROM moviles
    INNER JOIN imagenes ON imagenes.id_imagenes = moviles.id_imagenes
    LEFT JOIN movilesmarcas mm ON moviles.id_moviles = mm.id_moviles
    WHERE moviles.nom_moviles LIKE '%$busqueda%'
    limit 7
   "
  ;

    $arRetorno = mod002_executeQuery($strSQL, $arAttributes);
    return $arRetorno;
}

       


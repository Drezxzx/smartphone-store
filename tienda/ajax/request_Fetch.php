<?php
session_start();
require_once '../lib/mod003_logica.php';

$dataRequest = trim(file_get_contents("php://input"));
$arDataRequest = json_decode($dataRequest, true);
switch ($arDataRequest["action"]) {
    case "login":
        $data = mod003_setLogin($arDataRequest["email"], $arDataRequest["password"]);

        echo json_encode($data);
        break;

    case "logout":
        session_destroy();

        echo json_encode(true);
        break;
    case "create":

        $data = mod003_SetUser($arDataRequest["email"], $arDataRequest["password"]);
        echo json_encode($data);
        break;
    case "search":
        $data = mod003_search($arDataRequest["wordForSearch"]);
        echo json_encode($data);
        break;
    case "getRelatedmovile":
        $data = mod003_search($arDataRequest["wordForSearch"]);
        echo json_encode($data);
        break;
    default:
        echo "action probablemente mal escrito.";
}
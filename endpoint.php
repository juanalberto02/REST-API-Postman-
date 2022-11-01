<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once "methods.php";
$mhs = new Mahasiswa();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
            $mhs->get_mhss();
        break;
    
    case 'POST':
            $mhs->insert_mhss();
        break;
    case 'PUT':
            $mhs->update_mhss();
        break;

    case 'DELETE':
            $mhs->delete_mhss();
            break;

    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
      break;
}
?>
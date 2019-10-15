<?php
// // Location to file
// $db = 'H:\209\Inventaire.mdb';
// if(!file_exists($db)){
// 	die('Error finding access database');
// }
// // Connection to ms access
// $conn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=".$db.";Uid=; Pwd=;");

$_POST = json_decode(trim(file_get_contents("php://input")));

$code = $_POST['code'];
echo json_encode($code);
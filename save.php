<?php

/*echo '<pre>';
var_dump($_POST);
echo '</pre>';*/

$name = $_POST['name'];
$hash = $_POST['hash'];
$metadata = $_POST['metadata'];
$content = $_POST['content'];
$html = $_POST['html'];
require  'medoo.php';

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'mosaic', // Your Database Name
    'server' => 'localhost', // Your Host
    'username' => 'root', // Username
    'password' => '', // Password
    'charset' => 'utf8'
]);
$check = $database->get("templates", "hash", [
    "hash" => $hash
]);
if (!$check){
    $database->insert("templates", [
        "name" => $name,
        "hash" => $hash,
        "metadata" => $metadata,
        "content" => $content
    ]);
}
if ($check = $hash){
    $database->update("templates", [
        "metadata" => $metadata,
        "content" => $content
    ],[
        "hash" => $hash
    ]);
}


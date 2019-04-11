<?php
/**
 * Created by PhpStorm.
 * User: stagiaire one
 * Date: 10/04/2019
 * Time: 12:58
 */

$action = $_POST['action'];
$name = $_POST['name'];
$hash = $_POST['hash'];
require  'medoo.php';

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'mosaic', // Your Database Name
    'server' => 'localhost', // Your Host
    'username' => 'root', // Username
    'password' => '', // Password
    'charset' => 'utf8'
]);
if ($action = 'rename'){
    $database->update("templates", [
        "name" => $name
    ],[
        "hash" => $hash
    ]);
}
if ($action = 'delete'){
    $database->delete("templates", [
        "AND" => [
            "hash" => $hash
        ]
    ]);
}
// Duplicate, not yet implemented
/*if ($action = 'duplicate'){
    $datas = $database->select("template", [
      "name",
      "hash",
      "metadata",
      "content",
      "html"
    ], [
      "hash" => $hash
    ]);
    foreach($datas as $data)
    {
    $database->insert("template", [
      "name" => $data['name']."-Copy",
      "hash" => $copy,
      "metadata" => $data['metadata'],
      "content" => $data['content'],
      "html" => $data['html']
    ]);
    }
}*/

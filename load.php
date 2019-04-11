<?php
/**
 * Created by PhpStorm.
 * User: stagiaire one
 * Date: 10/04/2019
 * Time: 13:02
 */

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
$items = $database->select("templates", [
    "metadata",
    "content"
],[
    "hash" => $hash
]);
foreach($items as $item)
{
    echo "[{$item['metadata']},{$item['content']}]";
}

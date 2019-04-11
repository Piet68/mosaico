<!-- <ul>
    <li class="rename" data-id="efefefef">Fichier 1 <span class="delete">DELETE</span></li>
    <li class="rename" data-id="jkghgj">Fichier 3</li>
</ul> -->

<?php
require  'medoo.php';

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'mosaic', // Your Database Name
    'server' => 'localhost', // Your Host
    'username' => 'root', // Username
    'password' => '', // Password
    'charset' => 'utf8'
]);
$items = $database->select("templates", "*");
foreach($items as $item)
{
    echo '<li class="list-group-item"><a href="editor.html?id='.$item['hash'].'&name='.$item['name'].'" class="pull-left template-name">'.$item['name'].'</a>
    <div class="btn-group pull-right">
    
        <ul class="row" style="list-style: none">
            <li><a data-id="'.$item['hash'].'" class="rename" href="#">Rename |</a></li>
            <li><a data-id="'.$item['hash'].'" class="delete" class="text-danger" href="#">| Delete  </a></li>
        </ul>
    </div>
    <div class="clearfix">
    </div>
    </li>';
}



<?php
include "../model/Model.php";

$pdo = new Model();
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);

$delItemServicos = $pdo->delItemServicos($id);

if($delItemServicos){
    echo 1;
}else{
    echo 0;
}


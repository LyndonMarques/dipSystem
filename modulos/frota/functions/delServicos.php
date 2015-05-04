<?php
include "../model/Model.php";

$pdo = new Model();
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);

$delServicos = $pdo->delServicos($id);

if($delServicos){
    echo 1;
}else{
    echo 0;
}


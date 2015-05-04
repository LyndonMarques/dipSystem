<?php

include "../model/Model.php";

$pdo = new Model();
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);

$editServicos = $pdo->editServicos($id);

if($editServicos){
    echo 1;
}else{
    echo 0;
}
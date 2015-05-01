<?php

include "../model/Model.php";
include "../../../includes/hash/bootstrap.inc";
include "../../../includes/hash/password.inc";

session_start();

$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$senha = md5($senha);

$users = new model();

$logar = $users->checkLogin($login);

foreach($logar as $row){

    $user        = $row->apelido;
    $pass        = $row->senha;
    $id_admin    = $row->id_admin;

}

if($login == $user  ){

    $_SESSION['logado'] = "logado";
    $_SESSION['id_admin'] = $id_admin;

    header("Location: ../../../");
}else{
    header("Location: ../../../login.php");
}


<?php

function pdo()
{
    $pdo = new PDO("mysql:host=104.236.30.231;dbname=tracker;","dipsystem","dp627e2HkY");
    return $pdo;
}

function selectUser($name, $senha)
{
    $pdo = $this->pdo();
    $query =  $pdo->query("SELECT au.id, au.name, au.email, au.telefone, au.senha, au.tipo FROM adm_users au WHERE au.name = '".$name."' && au.senha = '".$senha."'");
    $rows = $query->fetchAll(PDO::FETCH_OBJ);
    return $rows;
}
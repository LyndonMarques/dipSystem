<?php

include "../../modulos/frota/model/Model.php";

function salvaFornecedor(){

    $pdo = new Model();

    $fname            = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $fcnpj            = filter_var($_POST['fcnpj'], FILTER_SANITIZE_STRING);
    $fcodExterno      = filter_var($_POST['fcodExterno'], FILTER_SANITIZE_STRING);
    $ftelefone        = filter_var($_POST['ftelefone'], FILTER_SANITIZE_STRING);
    $fendereco        = filter_var($_POST['fendereco'], FILTER_SANITIZE_STRING);
    $fbairro          = filter_var($_POST['fbairro'], FILTER_SANITIZE_STRING);
    $fcidade          = filter_var($_POST['fcidade'], FILTER_SANITIZE_STRING);
    $fuf              = filter_var($_POST['fuf'], FILTER_SANITIZE_STRING);
    $idAdmin          = filter_var($_POST['fidAdmin'], FILTER_SANITIZE_STRING);

    $frota_servico         = $pdo->fornecedorAdd($fname, $fcnpj, $fcodExterno, $ftelefone, $fendereco, $fbairro, $fcidade, $fuf, $idAdmin);

    if($frota_servico){
        return 1;
    }else{
        return 0;
    }

}

echo call_user_func('salvaFornecedor');
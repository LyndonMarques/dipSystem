<?php


include "../../modulos/frota/model/Model.php";

function salvaItemServico(){

    $pdo = new Model();

    $IidAdmin      = filter_var($_POST['IidAdmin'], FILTER_SANITIZE_STRING);
    $IitemServico  = filter_var($_POST['IitemServico'], FILTER_SANITIZE_STRING);
    $Iunitario     = filter_var($_POST['Iunitario'], FILTER_SANITIZE_STRING);
    $Iquantidade   = filter_var($_POST['Iquantidade'], FILTER_SANITIZE_STRING);
    $Itotal        = filter_var($_POST['Itotal'], FILTER_SANITIZE_STRING);
    $Idurabilidade = filter_var($_POST['Idurabilidade'], FILTER_SANITIZE_STRING);
    $Idias         = filter_var($_POST['Idias'], FILTER_SANITIZE_STRING);
    $Ilembrar      = filter_var($_POST['Ilembrar'], FILTER_SANITIZE_STRING);

    $frota_itemServico         = $pdo->addItemServico($IitemServico,$Iunitario,$Iquantidade,$Itotal,
        $Idurabilidade,$Idias,$Ilembrar,$IidAdmin);

    if($frota_itemServico){
        return 1;
    }else{
        return 0;
    }

}

echo call_user_func('salvaItemServico');
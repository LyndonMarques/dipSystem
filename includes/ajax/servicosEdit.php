<?php

include "../../modulos/frota/model/Model.php";

function editServicos(){

    $pdo = new Model();

    $id                    = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
    $servicosId            = filter_var($_POST['servicosId'], FILTER_SANITIZE_STRING);
    $sevicosFornecedor     = filter_var($_POST['sevicosFornecedor'], FILTER_SANITIZE_STRING);
    $servicosOs            = filter_var($_POST['servicosOs'], FILTER_SANITIZE_STRING);
    $servicosTipoServi     = filter_var($_POST['servicosTipoServi'], FILTER_SANITIZE_STRING);
    $servicosData          = filter_var($_POST['servicosData'], FILTER_SANITIZE_STRING);
    $servicosCodIndentServ = filter_var($_POST['servicosCodIndentServ'], FILTER_SANITIZE_STRING);
    $servicosOdometro      = filter_var($_POST['servicosOdometro'], FILTER_SANITIZE_STRING);
    $servicosObs           = filter_var($_POST['servicosObs'], FILTER_SANITIZE_STRING);

    $frota_servico         = $pdo->editServicos($id,$servicosId,$sevicosFornecedor,$servicosTipoServi,$servicosData,
        $servicosOs,$servicosOdometro,$servicosObs,$servicosCodIndentServ);

    if($frota_servico){
        return 1;
    }else{
        return 0;
    }

}

echo call_user_func('editServicos');
<?php

include "../../modulos/frota/model/Model.php";

function salvaServicos(){

    $pdo = new Model();

    $servicosId            = $_POST['servicosId'];
    $sevicosFornecedor     = $_POST['sevicosFornecedor'];
    $servicosOs            = $_POST['servicosOs'];
    $servicosTipoServi     = $_POST['servicosTipoServi'];
    $servicosData          = $_POST['servicosData'];
    $servicosCodIndentServ = $_POST['servicosCodIndentServ'];
    $servicosOdometro      = $_POST['servicosOdometro'];
    $servicosObs           = $_POST['servicosObs'];

    $frota_servico         = $pdo->servicosAdd($servicosId,$sevicosFornecedor,$servicosTipoServi,$servicosData,
                                               $servicosOs,$servicosOdometro,$servicosObs,$servicosCodIndentServ);

    if($frota_servico){
        return 1;
    }else{
        return 0;
    }

}

echo call_user_func('salvaServicos');
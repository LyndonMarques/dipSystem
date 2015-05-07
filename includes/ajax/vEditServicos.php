<?php

include "../../modulos/frota/model/Model.php";

function returnServicos(){

    $pdo = new Model();

    if(isset($_POST['id'])){
        $frota_servico = $pdo->frota_servicoById($_POST['id']);
        return json_encode($frota_servico);
    }else{
        $id_user = $_POST['id_user'];
        $frota_servico = $pdo->frota_servico($id_user);
        return json_encode($frota_servico);
    }

}

echo call_user_func('returnServicos');
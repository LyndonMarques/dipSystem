<?php

include "../../../modulos/frota/model/Model.php";

function returnItemServicos(){

    $pdo = new Model();

    if(isset($_POST['idAdmin'])){
        $idAdmin = $_POST['idAdmin'];
    }else{
        $idAdmin = $_POST['fidAdmin'];
    }

    $selectFrota = $pdo->itemServicoById($idAdmin);

    echo json_encode($selectFrota);
}

echo call_user_func('returnItemServicos');
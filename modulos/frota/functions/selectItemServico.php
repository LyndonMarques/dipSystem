<?php

include "../../../modulos/frota/model/Model.php";

function returnItemServicos(){

    $pdo = new Model();

    $idAdmin = $_POST['idAdmin'];
    $selectFrota = $pdo->itemServicoById($idAdmin);

    echo json_encode($selectFrota);
}

echo call_user_func('returnItemServicos');
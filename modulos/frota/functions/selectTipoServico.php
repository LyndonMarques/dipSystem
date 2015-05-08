<?php

include "../../../modulos/frota/model/Model.php";

$pdo = new Model();
$idAdmin = $_POST['fidAdmin'];

$selectFrota = $pdo->servicoById($idAdmin);

echo json_encode($selectFrota);
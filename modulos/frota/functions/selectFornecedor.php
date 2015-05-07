<?php

include "../../../modulos/frota/model/Model.php";

$pdo = new Model();
$idAdmin = $_POST['fidAdmin'];

$selectFrota = $pdo->fornecedorById($idAdmin);

echo json_encode($selectFrota);
<?php
/**
 * Created by PhpStorm.
 * User: lyndon
 * Date: 22/04/2015
 * Time: 19:23
 */

class Model {

    function pdo()
    {
        $pdo = new PDO("mysql:host=104.236.30.231;dbname=tracker;","dipsystem","dp627e2HkY");
        return $pdo;
    }

    public function checkLogin($apeido)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("SELECT apelido, senha, id_admin FROM cliente WHERE apelido = '$apeido' && admin = 'S' ");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function tableTodas($id_admin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from bem where id_admin = '$id_admin' ");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function tableAtivos($id_admin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from bem where id_admin = '$id_admin' ");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function tableManutencao($id_admin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from bem where id_admin = '$id_admin' ");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function tableporData($id_admin ,$data)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from bem where id_admin = '$id_admin' && date = '$data' ");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function frota_servico($id_admin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from frota_servicos WHERE id_admin = $id_admin");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function servicosAdd($servicosId,$sevicosFornecedor,$servicosTipoServi,$servicosData,
                                $servicosOs,$servicosOdometro,$servicosObs,$servicosCodIndentServ)
    {
        $pdo = $this->pdo();
    $query =  $pdo->query("insert INTO frota_servicos(fornecedor, tipo_servico, data, os, odometro, observacoes, id_admin, codIdentServ)".
                          "VALUES('$sevicosFornecedor', '$servicosTipoServi', '$servicosData', '$servicosOs', '$servicosOdometro', '$servicosObs', '$servicosId', '$servicosCodIndentServ')");
        return $query;
    }

    public function delServicos($id)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("DELETE FROM frota_servicos WHERE id = $id");
        return $query;
    }

    public function editServicos($id)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query(
        "UPDATE frota_servicos SET".
        "fornecedor = 'fornecedor',tipo_servico = 'tipo_servico',DATA = 'data',os = 'os',".
        "odometro = 'odometro',observacoes = 'observacoes',id_admin = 'id_admin',codIdentServ = 'codIdentServ' ".
        "WHERE id = '$id' ");

        return $query;
    }



}
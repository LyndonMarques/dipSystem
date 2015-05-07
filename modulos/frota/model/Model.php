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

    public function frota_servicoById($id)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from frota_servicos WHERE id = $id");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function countOs()
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select count(os) as os from frota_servicos");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;

    }

    public function servicosAdd($servicosId,$sevicosFornecedor,$servicosTipoServi,$servicosData,
                                $servicosOdometro,$servicosObs,$servicosCodIndentServ)
    {
        $pdo = $this->pdo();

        $countServicosOs = $this->countOs();
        foreach($countServicosOs as $row){
            $servicosOs = $row->os;
        }

        $query =  $pdo->query("insert INTO frota_servicos(fornecedor, tipo_servico, data, os, odometro, observacoes, id_admin, codIdentServ)".
            "VALUES('$sevicosFornecedor', '$servicosTipoServi', '$servicosData', '$servicosOs', '$servicosOdometro', '$servicosObs', '$servicosId', '$servicosCodIndentServ')");
        return $query;
    }

    public function addItemServico($IitemServico,$Iunitario,$Iquantidade,$Itotal,$Idurabilidade,$Idias,$Ilembrar,$IidAdmin)
    {
        $pdo = $this->pdo();

        $query =  $pdo->query("insert INTO item_servico(itemServico, unitario, quantidade, total, durabilidade, dias, lembrar, id_admin)".
            "VALUES('$IitemServico', '$Iunitario', '$Iquantidade', '$Itotal', '$Idurabilidade', '$Idias', '$Ilembrar', '$IidAdmin')");
        return $query;
    }

    public function delServicos($id)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("DELETE FROM frota_servicos WHERE id = $id");
        return $query;
    }

    public function editServicos($id,$servicosId,$sevicosFornecedor,$servicosTipoServi,$servicosData,
                                 $servicosOs,$servicosOdometro,$servicosObs,$servicosCodIndentServ)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query(
            "UPDATE frota_servicos SET ".
            "fornecedor = '$sevicosFornecedor',tipo_servico = '$servicosTipoServi',DATA = '$servicosData',os = '$servicosOs',".
            "odometro = '$servicosOdometro',observacoes = '$servicosObs',id_admin = '$servicosId',codIdentServ = '$servicosCodIndentServ' ".
            "WHERE id = '$id' ");

        return $query;
    }

    public function fornecedorById($idAdmin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select * from fornecedor_frota where idAdmin = $idAdmin");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function itemServicoById($idAdmin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("select itemservico, unitario, quantidade, total, (select sum(total) from item_servico where id_admin = $idAdmin) as v_total  from item_servico where id_admin = $idAdmin");
        $rows = $query->fetchAll(PDO::FETCH_OBJ);
        return $rows;
    }

    public function fornecedorAdd($fname, $fcnpj, $fcodExterno, $ftelefone, $fendereco, $fbairro, $fcidade, $fuf,$idAdmin)
    {
        $pdo = $this->pdo();
        $query =  $pdo->query("insert into fornecedor_frota(nome, cnpj, cod_externo, telefone, endereco, bairro, cidade, uf, idAdmin)".
            "values('$fname', '$fcnpj', '$fcodExterno', '$ftelefone', '$fendereco', '$fbairro', '$fcidade', '$fuf', '$idAdmin') ");
        return $query;
    }


}
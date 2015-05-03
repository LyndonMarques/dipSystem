<?php

session_start();

require "../../modulos/frota/model/Model.php";

$pdo = new Model();

$todos = $pdo->tableTodas($_SESSION['id_admin']);

foreach($todos as $row):
    ?>
    <tr>
        <td><?php echo $row->placa?></td>
        <td><?php echo $row->name?></td>
        <td><span class="label label-important">Parado</span></td>
        <td><?php echo $row->date?></td>
        <td>Nome da Frota</td>

        <td class="TAC">
            <select id="<?php echo $row->id?>">
                <option> Selecione...</option>
                <option value="vEdit"> Edit</option>
                <option value="vInfoBasicas">  info. Básicas</option>
                <option value="vCentroCustos"> Centro de custos</option>
                <option value="vViagens"> Viagens</option>
                <option value="vServicos"> Serviços</option>
                <option value="vPagamento"> Pagamento (Rateio)</option>
                <option value="vInfracoes"> Infrações</option>
                <option value="vCombustiveis"> Combustíveis</option>
                <option value="vAbastecimento"> Abastecimento</option>
                <option value="vTicket"> Ticket</option>
            </select>
        </td>
    </tr>
<?php endforeach;?>

<script>

    //Chamada de modais no select


</script>


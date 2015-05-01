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
    $(function() {

        $("select").change(function(){

            var modalId = $(this).val();
            var selectId = $(this).attr("id");
            var width = 550;

            if(modalId == "vEdit"){
                var width = 1000;
            }

            // Função para trocar o modal id que está no modal gerado automaticamente do select
            $(".ui-dialog-content").attr("id", modalId+"_"+selectId );
            // Função para trocar o titulo do modal
            $("."+modalId).attr("title", selectId);
            // Função para trocar o titulo do modal gerado automaticamente do select
            $(".ui-dialog-title").text(selectId);

            // Função ajax para enviar dados que preencherão o modal
            $.ajax({


            });

            // Função para abrir o modal no click do select
            $("."+modalId).dialog({autoOpen: false,
                modal: true,
                width: width,
                buttons: {
                    "Salvar": function() {
                        $( this ).dialog( "close" );
                    },
                    Cancelar: function() {
                        $( this ).dialog( "close" );
                    }
                }});

            $("."+modalId).dialog('open');
        });
    });


</script>


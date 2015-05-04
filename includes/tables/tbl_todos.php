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
        <td><span class="label label-info">Parado</span></td>
        <td><?php echo $row->date?></td>
        <td>Nome da Frota</td>

        <td class="TAC">
            <select class="todos" id="<?php echo $row->cliente?>" name="<?php echo $row->name?>" placa="<?php echo $row->placa?>">
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

        $("select.todos").change(function(){

            var modalId  = $(this).val();
            var selectId = $(this).attr("id");
            var name     = $(this).attr("name");
            var placa    = $(this).attr("placa");
            var width    = 550;

            var novoSelectId = ""+modalId+"_"+selectId+"";

            if(modalId == "vEdit"){
                width = 1000;
            }

            if($("."+modalId).attr('id') == modalId){
                $("#"+modalId).attr("id", novoSelectId)
            }else{

            }

            //Função para carregar os dados na tabela do modal Vedit
            preencheModal(selectId);

            // Função para trocar o modal id que está no modal gerado automaticamente do select
            $(".ui-dialog-content").attr("id", modalId+"_"+selectId );
            // Função para trocar o titulo do modal
            $("."+modalId).attr("title", "Veículo - "+name+" - "+placa);
            // Função para trocar o titulo do modal gerado automaticamente do select
            $("#"+selectId).closest(".ui-dialog-title").text("Veículo - "+name+" - "+placa);

            $("#servicosSubAdd").attr("value", selectId)
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

    function preencheModal(selectId)
    {
        //Criar session IdAd$.ajax({

        //Preenche Modal com conteudo referente ao Id do Cliente
        $.ajax({
            url: "includes/ajax/vEditServicos.php",
            type: "post",
            data: "id_user="+selectId,
            dataType: "json",
            success: function(data){

                if(data.length != 0){
                    $("#tbody_servicos1 tr").remove();
                    for(var i=0;i<data.length;i++){
                        var tds =
                            '<tr>'+
                            "<td><input type='checkbox' class='checklist' onclick='checklist(id)' id='"+data[i].id+"' style='position: relative;left: 20px'></td>"+
                            '<td>'+data[i].fornecedor+'</td>'+
                            '<td>'+data[i].tipo_servico+'</td>'+
                            '<td>'+data[i].data+'</td>'+
                            '<td>'+data[i].os+'</td>'+
                            '<td>'+data[i].odometro+'</td>'+
                            '<td>'+data[i].total+'</td>'+
                            '</tr>';
                        $(tds).appendTo("#tbody_servicos1")
                    }

                }else{
                    $("#tbody_servicos1 tr").remove();
                    var tds =
                        '<tr>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '<td>-</td>'+
                        '</tr>';
                    $(tds).appendTo("#tbody_servicos1")
                }

            }
        })
    }

    function formFornecedorAdd()
    {

        if($("#sevicosFornecedor").val() == ""){
            alert("Campo Fornecedor obrigarório!")
            return false;
        }

        if($("#servicosTipoServi").val() == ""){
            alert("Campo Tipo de Serviços obrigarório!")
            return false;
        }

        if($("#servicosData").val() == ""){
            alert("Campo Data obrigarório!")
            return false;
        }

        if($("#servicosOdometro").val() == ""){
            alert("Campo Odometro obrigarório!")
            return false;
        }
    }

</script>

<?php
include "includes/header.php";

?>


<div class="content" >

    <div id="conteudo" class="row-fluid" >

        <div id="veiculosTable" >

            <div class="span8" style="width: 70%;margin-left: -60px">

                <div class="widget" style="width: 94%;left: 10%">
                    <div class="head dark">
                        <div class="icon"><i class="icos-list"></i></div>
                        <h2>Veiculos</h2>
                    </div>

                    <div class="toolbar">
                        <div class="left TAL">
                            <div class="input-prepend input-append">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                                <input type="text" id="datepicker" value="<?php echo date("Y-m-d")?>" width="300" style="width: 245px;">
                                <button id="porData" class="btn">Por Data</button>
                            </div>
                        </div>
                        <div class="right TAR">
                            <button id="todos" class="btn">Todos</button>
                            <div class="btn-group" data-toggle="buttons-radio">
                                <button id="ativo" type="button" class="btn">Ativo</button>
                                <button id="parado" type="button" class="btn">Parado</button>
                                <button id="manutencao" type="button" class="btn">Manutenção</button>
                            </div>
                        </div>
                    </div>

                    <div class="block-fluid">

                        <table id="tableFrota"  cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th id="placa" width="10%">Placa</th>
                                <th width="16%">Marca / Modelo</th>
                                <th width="8%">Situação</th>
                                <th width="16%">Date de Entrada</th>
                                <th width="15%">Frota</th>

                                <th width="20%" class="TAC">Ação</th>
                            </tr>
                            </thead>

                            <tbody>



                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <div id="testando"></div>
            <div class="span4">

                <div class="widget" style="width: 90%;left: 10%">
                    <div class="head dark">
                        <div class="icon"><i class="icos-star3"></i></div>
                        <h2>Comtrole de Frotas</h2>
                        <ul class="buttons">
                            <li>
                                <a href="#"><span class="icos-plus1"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Cadastrar Novo</a></li>
                                    <li><a href="#">Relatpórios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid">
                        <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="30%">Nome Frota</th>
                                <th width="40%">Nome Empresa</th>
                                <th width="20%" class="TAC">Ação</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">IET-8457</a></td>
                                <td>Product #212</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a> |
                                    <a href="#"><span class="icon-trash"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">IET-8457</a></td>
                                <td>Product #132</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a> |
                                    <a href="#"><span class="icon-trash"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">IET-8457</a></td>
                                <td>Product #53</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a> |
                                    <a href="#"><span class="icon-trash"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="widget" style="width: 90%;left: 10%">
                    <div class="head dark">
                        <div class="icon"><i class="icos-star3"></i></div>
                        <h2>Controle de Condutores</h2>
                        <ul class="buttons">
                            <li>
                                <a href="#"><span class="icos-plus1"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Relatpórios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid">
                        <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="40%">Condutos</th>
                                <th width="50%">Motivo</th>
                                <th width="10%" class="TAC">Ação</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">Pedro Antonio</a></td>
                                <td>Doente no hospital</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Carlos Duarte</a></td>
                                <td>Ferias de Natal</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">Antonio Bezerra</a></td>
                                <td>Ferias Vencidas</td>
                                <td class="TAC">
                                    <a href="#"><span class="icon-pencil"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="widget" style="width: 90%;left: 10%">
                    <div class="head dark">
                        <div class="icon"><i class="icos-tag"></i></div>
                        <h2>Controle de Viagens Adicionais</h2>
                        <ul class="buttons">
                            <li>
                                <a href="#"><span class="icos-plus1"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Cadastrar Novo</a></li>
                                    <li><a href="#">Relatpórios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="block-fluid">

                        <ul class="list tickets">
                            <li class="new clearfix" id="T215">
                                <div class="title">
                                    <a href="#">Nome do Condutor / IYR 5487 / 21/12/2013</a>
                                    <p>Motivo da viagem Texto previo pequeno...</p>
                                    <p>Data de Saída: 22/02/2014 | Data Chegada: 25/02/2014</p>
                                </div>
                                <div class="actions">
                                    <a href="#" class="tip" title="Edit"><span class="icon-pencil"></span></a>
                                    <a href="#" class="remove tip" title="Remover Comcluido"><span class="icon-remove"></span></a>
                                </div>
                            </li>

                            <li class="accept clearfix" id="T216">
                                <div class="title">
                                    <a href="#">Nome do Condutor / IYR 5487 / 21/12/2013</a>
                                    <p>Motivo da viagem Texto previo pequeno...</p>
                                    <p>Data de Saída: 22/02/2014 | Data Chegada: 25/02/2014</p>
                                </div>
                                <div class="actions">
                                    <a href="#" class="tip" title="Editar"><span class="icon-pencil"></span></a>
                                    <a href="#" class="remove tip" title="Remover Comcluido"><span class="icon-remove"></span></a>
                                </div>
                            </li>
                            <li class="done clearfix" id="T216">
                                <div class="title">
                                    <a href="#">Nome do Condutor / IYR 5487 / 21/12/2013</a>
                                    <p>Motivo da viagem Texto previo pequeno...</p>
                                    <p>Data de Saída: 22/02/2014 | Data Chegada: 25/02/2014</p>
                                </div>
                                <div class="actions">
                                    <a href="#" class="tip" title="Editar"><span class="icon-pencil"></span></a>
                                    <a href="#" class="remove tip" title="Remover Comcluido"><span class="icon-remove"></span></a>
                                </div>
                            </li>
                            <li class="done clearfix" id="T216">
                                <div class="title">
                                    <a href="#">Nome do Condutor / IYR 5487 / 21/12/2013</a>
                                    <p>Motivo da viagem Texto previo pequeno...</p>
                                    <p>Data de Saída: 22/02/2014 | Data Chegada: 25/02/2014</p>
                                </div>
                                <div class="actions">
                                    <a href="#" class="tip" title="Editar"><span class="icon-pencil"></span></a>
                                    <a href="#" class="remove tip" title="Remover Comcluido"><span class="icon-remove"></span></a>
                                </div>
                            </li>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>

        <div id="abastecimentoTable" class="hidden">

            <div class="span12">

                <div class="widget">
                    <div class="head dark">
                        <div class="icon"><span class="icos-clipboard1"></span></div>
                        <h2>Abastecimento</h2>
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="12%">
                                    N. Ticket
                                </th>
                                <th width="12%">
                                    Veículo
                                </th>
                                <th width="12%">
                                    Fornecedor
                                </th>
                                <th width="12%">
                                    Combustível
                                </th>
                                <th width="12%">
                                    Motorista
                                </th>
                                <th width="12%">
                                    Data Abastecimento
                                </th>
                                <th width="12%">
                                    Quantidade (L/m3)
                                </th>
                                <th width="12%">
                                    Valor Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                                <td>
                                    --
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<!-- Modal Relatórios -->
<?php
include "includes/modals.php";
?>

<script>

    $(function(){

        //Exibe Todos os registros na tabela veiculos cadastrados;
        $.ajax({
            url: "includes/tables/tbl_todos.php",
            success: function(data){
                $("#tableFrota tbody").html(data)
            }
        })

        $("#todos").click(function(){
            $.ajax({
                url: "includes/tables/tbl_todos.php",
                success: function(data){
                    $("#tableFrota tbody").html(data)
                }
            })
        })

        $("#ativo").click(function(){
            $.ajax({
                url: "includes/tables/tbl_ativos.php",
                success: function(data){
                    $("#tableFrota tbody").html(data)
                }
            })
        })

        $("#parado").click(function(){
            $.ajax({
                url: "includes/tables/tbl_parados.php",
                success: function(data){
                    $("#tableFrota tbody").html(data)
                }
            })
        })

        $("#manutencao").click(function(){
            $.ajax({
                url: "includes/tables/tbl_manutencao.php",
                success: function(data){
                    $("#tableFrota tbody").html(data)
                }
            })
        })

        $("#porData").click(function(){
            $.ajax({
                url: "includes/tables/tbl_pordata.php",
                type: "post",
                data: "data="+$("#datepicker").val(),
                success: function(data){
                    $("#tableFrota tbody").html(data)
                }
            })
        })
    })

    //Function para preencher Modal
    function openModal(id)
    {
        var inicio = id.lastIndexOf('_');
        var idName = id.substr(0, inicio);


        $("#"+idName).dialog({autoOpen: false,
            modal: true,
            width: 600,
            buttons: {
                "Visualizar": function() {
                    $( this ).dialog( "close" );
                },
                Cancelar: function() {
                    $( this ).dialog( "close" );
                }
            }});

        $("#"+idName).dialog('open')
        return false;
    }

    function openModal2(id)
    {
        var inicio = id.lastIndexOf('_');
        var idName = id.substr(0, inicio);


        $("#"+idName).dialog({autoOpen: false,
            modal: true,
            width: 900,
            buttons: {
                "Visualizar": function() {
                    $( this ).dialog( "close" );
                },
                Cancelar: function() {
                    $( this ).dialog( "close" );
                }
            }});

        $("#"+idName).dialog('open')
        return false;
    }

    function openModalSub(id)
    {
        var inicio = id.lastIndexOf('_');
        var idName = id.substr(0, inicio);

        var modalId     = $("#"+id).closest(".vEdit").attr("id")
        var numeroModal = modalId.split("_").pop();
        var idAdmin     = numeroModal.split("_").pop()

        // Função para trocar o modal id que está no modal gerado automaticamente do select
        $(".servicosSubModal").attr("id", idName+"_"+numeroModal)

        alert(modalId)
        $("#servicosId").attr('value', 1313);

        $("#"+idName+"_"+numeroModal).dialog({autoOpen: false,
            modal: true,
            width: 600,
            buttons: {
                "Salvar": function() {
                    $.ajax({
                        url: "includes/ajax/servicosAdd.php",
                        type: "post",
                        data: $("#formServicosSubAdd").serialize(),
                        success: function(data){
                            if(data == 1){
                                alert("Serviço salvo com sucesso!");
                                resetar();
                                preencheModal(1313)
                                $(".servicosSubModal").dialog("close");
                            }else{
                                alert("Nao foi possivel salvar o servisso!");
                            }
                        }
                    })
                },
                Cancelar: function() {
                    $("#"+id).removeClass('active');
                    $( this ).dialog( "close" );
                }
            }});

        $("#"+idName+"_"+numeroModal).dialog('open')
        return false;
    }

    function  resetar()
    {
        $("#sevicosFornecedor").val("");
        $("#servicosOs").val("");
        $("#servicosTipoServi").val("");
        $("#servicosData").val("");
        $("#servicosCodIndentServ").val("");
        $("#servicosOdometro").val("");
        $("#servicosObs").val("");

    }

    $("#logout").click(function(){

        var txt;
        var r = confirm("Deseja sair do sistema?");
        if (r == true) {
            txt = "Sim";
            location.href= "modulos/frota/functions/logout.php";
        } else {
            txt = "Não";
        }

    });

    $("#menuVenuVeiculos").click(function(){

        $("#subMenuVenuVeiculos").toggle();
        return false;
    });

    $("#menuVelocidadeExcedida").click(function(){

        $("#subMenuVelocidadeExcedida").toggle();
        return false;
    });

    $("#maioresMenores").click(function(){

        $("#subMaioresMenores").toggle();
        return false;
    });

    $("#veiculosMenu").click(function(){

        $("#abastecimentoTable").addClass("hidden")
        $("#veiculosTable").removeClass("hidden")
    });

    $("#abastecimentosMenu").click(function(){

        $("#veiculosTable").addClass("hidden")
        $("#abastecimentoTable").removeClass("hidden")
    }) ;

    $("#cCombustiveis_btn").click(function(){

        $.ajax({
            url: "modulos/frota/view/index/combustiveis.php",
            dataType: "html",
            success: function(data){
                $("#conteudo").hide().html(data).fadeIn("slow");
            }
        });
    });


    $(function(){

        $("#tableFrota").dataTable();
        //$("#placa").click()
        $(".datePicker").datepicker({ dateFormat: 'yy-mm-dd' })
    })
</script>

</body>
</html>

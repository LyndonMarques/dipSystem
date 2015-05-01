<script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
<script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>

<div class="row-fluid">

    <div class="span8">

        <div class="widget" style="width: 105%">
            <div class="head dark">
                <div class="icon"><i class="icos-stats-up"></i></div>
                <h2>Veículos</h2>
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
            <div class="toolbar">
                <div class="left TAL">
                    <div class="input-prepend input-append">
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input type="text" id="datepicker" value="2013-01-31" width="300" />
                        <button class="btn">Por Data</button>
                    </div>
                </div>
                <div class="right TAR">
                    <button class="btn">Todos</button>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn">Ativo</button>
                        <button type="button" class="btn">Parado</button>
                        <button type="button" class="btn">Manutenção</button>
                    </div>
                </div>
            </div>
            <div class="block-fluid">

                <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th width="10%">Placa</th>
                        <th width="16%">Marca / Modelo</th>
                        <th width="8%">Situação</th>
                        <th width="16%">Date de Entrada</th>
                        <th width="15%">Frota</th>

                        <th width="20%" class="TAC">Ação</th>
                    </tr>
                    </thead>

                    <?php

                    require "../../functions/conectar.php";

                    $pdo = pdo();

                   // $query =  $pdo->query("SELECT * from bem");
                   // $rows = $query->fetchAll(PDO::FETCH_OBJ);

                    foreach($rows as $row):
                    ?>
                    <tbody>
                    <tr>
                        <td><a href="#"><?php echo $row->placa?></a></td>
                        <td><?php echo $row->name?></td>
                        <td><span class="label label-important">Parado</span></td>
                        <td><?php echo $row->date?></td>
                        <td>Nome da Frota</td>

                        <td class="TAC">
                            <select>
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
                    </tbody>
                </table>
            </div>
        </div>

    </div>

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

<script>

    $(function() {

        $("select").change(function(){

            var modalId = $(this).val();
            var width = 550;

            if(modalId == "vEdit"){
                var width = 1000;
            }

            $("#"+modalId).dialog({autoOpen: false,
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

            $("#"+modalId).dialog('open')
        });
    });


</script>
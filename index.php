<?php
include "includes/header.php";

?>

<div class="content" >

    <div id="conteudo" class="row-fluid" >

        <div id="veiculosTable" >

            <div class="span8" >

                <div class="widget" style="width: 94%;">
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

                <div class="widget" >
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
                <div class="widget">
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
                <div class="widget" >
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

        var modalId     = $("#"+id).closest(".vEdit").attr("id");
        var numeroModal = modalId.split("_").pop();
        var idAdmin     = numeroModal.split("_").pop();

        selectFornecedores(idAdmin);

        if(id == "vEditServicosEdit_btn"){
            var checkid = $("#"+id).attr("checkid");

            // Função para trocar o modal id que está no modal gerado automaticamente do select
            $(".servicosSubModal").attr("id", idName+"_"+numeroModal);
            // Função para adicionar idAdmin ao modal de Fornecedor
            $(".addFornecedor").attr("data-fornecedoradd", idAdmin);
            //Inseri idAdmin no campo hidden do form modal
            $("#servicosId").attr('value', idAdmin);
            $("#IidAdmin").attr('value', idAdmin);

            preencherModalEditarServicos(checkid)
            preencheModalItemServicos(idAdmin);
            $("#"+idName+"_"+numeroModal).dialog({autoOpen: false,
                modal: true,
                width: 600,
                buttons: {
                    "Alterar": function() {

                        var id = {
                            "id": checkid
                        };
                        $.ajax({
                            url: "includes/ajax/servicosEdit.php",
                            type: "post",
                            data: $("#formServicosSubAdd").serialize() + "&" + $.param(id),
                            success: function(data){

                                if(data == 1){
                                    resetar();
                                    preencheModal(idAdmin)
                                    $(".servicosSubModal").dialog("close");
                                    alert("Serviço alterado com sucesso!");
                                }else{
                                    alert("Nao foi possivel alterar o servisso!");
                                }
                            }
                        })
                    },
                    Cancelar: function() {
                        $("#"+id).removeClass('active');
                        $( this ).dialog( "close" );
                    }
                }});

        }else{
            // Função para trocar o modal id que está no modal gerado automaticamente do select
            $(".servicosSubModal").attr("id", idName+"_"+numeroModal)

            $("#servicosId").attr('value', idAdmin);

            $(".addFornecedor").attr("data-fornecedoradd", idAdmin)

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
                                    resetar();
                                    preencheModal(idAdmin)
                                    $(".servicosSubModal").dialog("close");
                                    alert("Serviço salvo com sucesso!");
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

        }


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

    function preencheModal(selectId, tipo)
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

    function preencherModalEditarServicos(selectId)
    {

        //Preenche Modal com conteudo referente ao Id do Cliente
        $.ajax({
            url: "includes/ajax/vEditServicos.php",
            type: "post",
            data: "id="+selectId,
            dataType: "json",
            success: function(data){

                $("#sevicosFornecedor").val(data[0].fornecedor);
                $("#servicosOs").val(""+data[0].os+"");
                $("#servicosTipoServi").val(""+data[0].tipo_servico+"");
                $("#servicosData").val(""+data[0].data+"");
                $("#servicosCodIndentServ").val(""+data[0].codIdentServ+"");
                $("#servicosOdometro").val(""+data[0].odometro+"");
                $("#servicosObs").val(""+data[0].observacoes+"");

            }
        })

    }

    function addFornecedor(id)
    {
        $(".addFornecedor").dialog({autoOpen: false,
            modal: true,
            width: "500px",
            buttons: {
                "Salvar": function() {

                    var fnome = $("#fname").val();
                    var fcnpj = $("#fcnpj").val();
                    var idAdmin = $("#fidAdmin").val();
                    if(fnome == "" || fcnpj == ""){
                        alert("Preencha os campos obrigatórios!");
                        return false;
                    }else{

                        $.ajax({
                            url: "includes/ajax/addFornecedor.php",
                            type: "post",
                            data: $(".formulario_fornecedor").serialize(),
                            success: function(data) {

                                if (data == 1) {
                                    selectFornecedores(idAdmin);
                                    alert("Fornecedor salvo com sucesso!");
                                    $(this).dialog("close");
                                } else {
                                    alert("Preencha os campos obrigatórios!");
                                    return false;
                                }
                            }
                        });

                    }
                $( this ).dialog( "close" );
            },
            Cancelar: function() {

                $( this ).dialog( "close" );
            }
        }});

    $(".addFornecedor").dialog('open');


    }

    function addItensServico(id)
    {
        $(".addItemServico").dialog({autoOpen: false,
            modal: true,
            width: "500px",
            buttons: {
                "Salvar": function() {

                    var IitemServico = $("#IitemServico").val(),
                        Iunitario = $("#Iunitario").val(),
                        Iquantidade = $("#Iquantidade").val(),
                        Itotal = $("#Itotal").val(),
                        Idurabilidade = $("#Idurabilidade").val(),
                        Idias = $("#Idias").val(),
                        Ilembrar = $("#Ilembrar").val();

                    if(IitemServico, Iunitario, Iquantidade, Itotal, Idurabilidade, Idias, Ilembrar == ""){
                        alert("Preencha todos os campos!")
                    }else{

                        $.ajax({
                            url: "includes/ajax/addItemServico.php",
                            type: "post",
                            data: $(".formulario_itemfornecedor").serialize(),
                            success: function(data){
                                alert(data)
                            }

                        })

                    }



                    //$( this ).dialog( "close" );
                },
                Cancelar: function() {

                    $( this ).dialog( "close" );
                }
            }});

        $(".addItemServico").dialog('open');

    }

    function preencheModalItemServicos(idAdmin)
    {
        //Criar session IdAd$.ajax({

        //Preenche Modal com conteudo referente ao Id do Cliente
        $.ajax({
            url: "modulos/frota/functions/selectItemServico.php",
            type: "post",
            data: "idAdmin="+idAdmin,
            dataType: "json",
            success: function(data){

               if(data.length != 0){
                    $("#tbody_itemServicos tr").remove();
                    for(var i=0;i<data.length;i++){
                        var tds =
                            '<tr>'+
                            "<td><input type='checkbox' class='checklist' onclick='checklist(id)' id='"+data[i].id+"' style='position: relative;left: 20px'></td>"+
                            '<td>'+data[i].itemservico+'</td>'+
                            '<td>'+data[i].unitario+'</td>'+
                            '<td>'+data[i].quantidade+'</td>'+
                            '<td>'+data[i].total+'</td>'+
                            '</tr>';
                        $(tds).appendTo("#tbody_itemServicos");
                        var total = data[i].v_total;
                    }
                   var v_total =
                       '<tr >'+
                       '<td colspan="3"></td>'+

                       '<td>Total:</td>'+
                       '<td>R$ '+total+'</td>'+
                       '</tr>'

                   $(v_total).appendTo("#tbody_itemServicos");
                }else{
                    $("#tbody_itemServicos tr").remove();
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
                    $(tds).appendTo("#tbody_itemServicos")
                }
            }
        })

    }

    function addItem(id)
    {
        $(".addItem").dialog({autoOpen: false,
            modal: true,
            width: "500px",
            buttons: {
                "Salvar": function() {

                   alert("addItem")
                    $( this ).dialog( "close" );
                },
                Cancelar: function() {

                    $( this ).dialog( "close" );
                }
            }});

        $(".addItem").dialog('open');

    }
    function selectFornecedores(idAdmin)
    {
        $("#fidAdmin").attr("value", idAdmin);
        var fname = $("#fname").val();
        $.ajax({
            url: "modulos/frota/functions/selectFornecedor.php",
            type: "post",
            data: "fidAdmin="+idAdmin,
            dataType: "json",
            success: function(data){

                $("#sevicosFornecedor option").remove();

                for(var i=0; i<data.length;i++){

                    if(fname == data[i].nome){
                        var fornecedor =
                            "<option id='"+data[i].nome+"' selected >"+data[i].nome+"</option>";
                    }else{
                        var fornecedor =
                            "<option id='"+data[i].nome+"'>"+data[i].nome+"</option>";
                    }

                    $(fornecedor).appendTo("#sevicosFornecedor");
                }
            }
        })

    }
    //função para checklist
    function checklist(id)
    {
        $(".checklist").each(function(){
            $(".checklist:not(#"+id+")").attr("checked", false);
        })

        $("#vEditServicosDel_btn").attr("checkId", id);
        $("#vEditServicosEdit_btn").attr("checkId", id)
        return false;
    }

    function delModalSub(id, modalNome)
    {
        var checkDel = $("#"+id).attr("checkId");
        var idAdmin  = $("#"+id).closest("."+modalNome).attr("id");
        var idAdmin     = idAdmin.split("_").pop();

        var txt;
        var r = confirm("Deseja deletar este registro?");
        if (r == true) {
            txt = "Sim";

            $.ajax({
                url: "modulos/frota/functions/delServicos.php?id="+checkDel,
                type: "post",
                data: "id="+checkDel,
                success: function(data){

                    if(data == 1){
                        $("#vEditServicosDel_btn").removeClass("active");
                        preencheModal(idAdmin);
                        alert("Registro removido com sucesso!")
                    }else{
                        alert("Registro não pode ser removido!")
                    }

                }
            });

        } else {
            txt = "Não";
        }

    }

    function editModalSub(id, modalNome)
    {
        var checkId = $("#"+id).attr("checkId");
        var idAdmin  = $("#"+id).closest("."+modalNome).attr("id");
        var idAdmin     = idAdmin.split("_").pop();

        var txt;
        var r = confirm("Deseja alterar este registro?");
        if (r == true) {
            txt = "Sim";

            $.ajax({
                url: "modulos/frota/functions/editServicos.php",
                type: "post",
                data: "id="+checkId,
                success: function(data){

                    if(data == 1){
                        $("#vEditServicosEdit_btn").removeClass("active");
                        preencheModal(idAdmin, "edit");
                        alert("Registro alterado com sucesso!")
                    }else{
                        alert("Registro não pode ser alterado!")
                    }
                }
            });

        } else {
            txt = "Não";
        }
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

    $(function(){

        $(".groupOfTexbox2").keypress(function(event) { return isNumber(event) });

        $('.groupOfTexbox').number( true, 2 );

        $("#Iquantidade").click(function(){
            var valorUnitario = $("#Iunitario").val(),
                quantidade = $(this).val(),
                total = valorUnitario * quantidade;
                $("#Itotal").val(total);
        });
        $("#Itotal").click(function(){
            var valorUnitario = $("#Iunitario").val(),
                quantidade = $("#Iquantidade").val(),
                total = valorUnitario * quantidade;
            $(this).val(total);
        })
    })
    // THE SCRIPT THAT CHECKS IF THE KEY PRESSED IS A NUMERIC OR DECIMAL VALUE.
    function isNumber(evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode != 45  && charCode != 08 && (charCode != 46 ||
            $(this).val().indexOf('.') != -1) && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>

</body>
</html>

<?php

session_start();

if(isset($_SESSION['logado']) != "logado"){
    header("Location: login.php");
}

require "modulos/frota/model/Model.php";

$pdo = new Model();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!--[if gt IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>Virgo - Premium Admin Template</title>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
    <link href="css/ie.css" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <script type='text/javascript' src='js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>

    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>

    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>

    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>

    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>

    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>

    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.stack.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.resize.js'></script>

    <script type='text/javascript' src='js/plugins/epiechart/jquery.easy-pie-chart.js'></script>
    <script type='text/javascript' src='js/plugins/knob/jquery.knob.js'></script>

    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>

    <script type='text/javascript' src='js/plugins/pnotify/jquery.pnotify.min.js'></script>

    <script type='text/javascript' src='js/plugins/fullcalendar/fullcalendar.min.js'></script>

    <script type='text/javascript' src='js/plugins/datatables/jquery.dataTables.min.js'></script>

    <script type='text/javascript' src='js/plugins/wookmark/jquery.wookmark.js'></script>

    <script type='text/javascript' src='js/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>

    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>

    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="js/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='js/plugins/multiselect/jquery.multi-select.min.js'></script>

    <script type='text/javascript' src='js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='js/plugins/validationEngine/jquery.validationEngine.js'></script>
    <script type='text/javascript' src='js/plugins/stepywizard/jquery.stepy.js'></script>

    <script type='text/javascript' src='js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='js/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>

    <script type='text/javascript' src='js/plugins/media/mediaelement-and-player.min.js'></script>

    <script type='text/javascript' src='js/plugins/cleditor/jquery.cleditor.js'></script>

    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>

    <script type='text/javascript' src='js/plugins/filetree/jqueryFileTree.js'></script>

    <script type='text/javascript' src='js/plugins/slidernav/slidernav-min.js'></script>
    <script type='text/javascript' src='js/plugins/isotope/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/plugins/jnotes/jquery-notes_1.0.8_min.js'></script>
    <script type='text/javascript' src='js/plugins/jcrop/jquery.Jcrop.min.js'></script>
    <script type='text/javascript' src='js/plugins/ibutton/jquery.ibutton.min.js'></script>

    <script type='text/javascript' src='js/plugins/scrollup/jquery.scrollUp.min.js'></script>

    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>

</head>

<body>

<div class="header">
    <a href="index.html" class="logo"></a>

    <div class="buttons">
        <div class="popup" id="subNavControll">
            <div class="label"><span class="icos-list"></span></div>
        </div>
        <div class="dropdown">
            <div id="logout" class="label"><span class="icon-off icon-white"></span></div>
        </div>

    </div>

</div>

<div class="navigation">

    <ul class="main">
        <li><a id="veiculosMenu" href="#veiculos" class="active"><span class="icom-screen"></span><span class="text">Veículo</span></a></li>
        <li><a id="abastecimentosMenu"  href="#abastecimento"><span class="icom-bookmark"></span><span class="text">Combustivel</span></a></li>
        <li><a href="#relatorios"><span class="icom-pencil3"></span><span class="text">Relatórios</span></a></li>
        <li><a href="#graficos"><span class="icom-newspaper"></span><span class="text">Gráficos</span></a></li>
        <li><a href="#cadastros"><span class="icom-videos"></span><span class="text">Cadastros</span></a></li>
    </ul>

    <div class="submain">

        <div id="veiculos">
            <div class="widget-fluid TAC">
                <div class="kchart">
                    <input type="text" class="knob" data-min="1" data-max="100" value="35" data-width="90" data-height="90" data-fgColor="#b84b48" data-readOnly="true" data-bgColor="#f7f8fa"/>
                    <div class="label label-important">Veículos</div>
                </div>
                <div class="kchart">
                    <input type="text" class="knob" data-min="1" data-max="3000" value="1982" data-width="90" data-height="90" data-fgColor="#f89406" data-readOnly="true" data-bgColor="#f7f8fa"/>
                    <div class="label label-warning">Frotas</div>
                </div>
            </div>
            <div class="dr"><span></span></div>
            <div class="widget">
                <button class="btn btn-primary btn-block">CADASTRAR UM VEÍCULO</button>
            </div>
            <div class="widget">
                <button class="btn btn-warning btn-block">CADASTRAR UMA FROTA</button>
            </div>
            <div class="dr"><span></span></div>
            <div class="widget">
                <div class="alert alert-block">
                    <strong>Atenção Nova Manutenção</strong>
                </div>
                <div class="alert alert-block">
                    <strong>Atenção Nova Manutenção</strong>
                </div>
                <div class="alert alert-block">
                    <strong>Atenção Nova Manutenção</strong>
                </div>
                <div class="alert alert-block">
                    <strong>Atenção Nova Manutenção</strong>
                </div>
            </div>
        </div>

        <div id="abastecimento">
            <div class="menu">
                <a href="#"><span class="icon-user"></span> Baixar Ticket</a>
                <a href="#"><span class="icon-chevron-right"></span> Imprimir Ticket</a>
            </div>
        </div>

        <div id="relatorios">
            <div class="menu">
                <a href="#" id="rAbastecimento_btn" onclick="openModal(id)"><span class="icon-align-justify"></span> Abastecimento</a>
                <a href="#" id="rAbastecimentoNF_btn" onclick="openModal(id)"><span class="icon-ok-sign"></span> Abastecimento (NF)</a>
                <a href="#" id="rInfracoes_btn" onclick="openModal(id)"><span class="icon-share"></span> Infrações</a>
                <a href="#" id="rServicos_btn" onclick="openModal(id)"><span class="icon-th"></span> Serviços</a>
                <a href="#" id="rPagamentos_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Pagamentos</a>
                <a href="#" id="rViagens_btn" onclick="openModal(id)"><span class="icon-picture"></span> Viagens</a>
                <a href="#" id="rInconsistencias_btn" onclick="openModal(id)"><span class="icon-ok-sign"></span> Inconsistencias</a>
                <a href="#" id="rManutencoes_btn" onclick="openModal(id)"><span class="icon-share"></span> Manutenções Programadas</a>
                <a href="#" id="rInicioPosicionamento_btn" onclick="openModal(id)"><span class="icon-th"></span> Inicio de Posicionamento</a>
                <a href="#" id="rExcessoVelocidade_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Excesso de Velocidade Maxíma</a>
            </div>
            <ul class="fmenu">
                <li>
                    <a  id="menuRelatorioSintetico" href="#"><span class="icos-pencil2"></span> Relatórios Sintéticos</a>
                    <span class="caption blue">4</span>
                    <ul>
                        <li id="menuVenuVeiculos"><a href="#"><span class="icon-pencil"></span> Veículos <span class="caption blue">2</span></a></li>
                        <div id="subMenuVenuVeiculos" class="hide">
                            <a href="#" id="rDiario_btn" onclick="openModal(id)">&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="icon-user"></span> Diário</a>
                            <a href="#"id="rPeriodo_btn" onclick="openModal(id)">&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-user"></span> Período</a>
                        </div>

                        <li><a href="#" id="rCentroCustos_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Centro de Custo</a></li>
                        <li><a href="#" id="rCustos_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Custos</a></li>
                        <li><a href="#" id="rFrenquenciaTroca_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Frequência de Troca de Itens</a></li>
                    </ul>

                </li>

            </ul>
            <div id="submenu_hidden" class="menu hide" >
                <a href="forms.html">  <span class="icon-align-justify"></span> Diário</a>
                <a href="validation.html">  &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp; <span class="icon-ok-sign"></span> Período</a>
            </div>


        </div>

        <div id="graficos">

            <ul class="fmenu">
                <li>
                    <a href="#"><span class="icos-pencil2"></span> Motoristas</a>
                    <span class="caption blue">4</span>
                    <ul>
                        <li><a href="#" id="gQtdViagens_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Quantidade de Viagens</a></li>
                        <li><a href="#" id="gQuilometragem_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Quilometragem</a></li>
                        <li><a href="#" id="gInfracoes_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Infrações</a></li>
                        <li><a href="#"><span class="icon-pencil"></span> Geral</a></li>
                    </ul>

                </li>

                <li>
                    <a href="#"><span class="icos-pencil2"></span> Veículos</a>
                    <span class="caption blue">10</span>
                    <ul>
                        <li><a href="#" id="gServicos_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Serviços</a></li>
                        <li><a href="#" id="gAbastecimento_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Abastecimento</a></li>
                        <li><a href="#" id="gTMOperacao_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Tempo Médio de Operação</a></li>
                        <li><a href="#" id="gTMSaida_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Tempo Médio de Saída</a></li>
                        <li><a href="#" id="gTMChegada_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Tempo Médio de Chegada</a></li>
                        <li><a href="#" id="gHpermitido_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Horário não Permitido</a></li>
                        <li><a href="#" id="gTparado_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Tempo Parado</a></li>

                        <li id="menuVelocidadeExcedida"><a href="#"><span class="icon-pencil"></span> Velocidade Excedida</a> <span class="caption blue">2</span></li>
                        <div id="subMenuVelocidadeExcedida" class="hide">
                            <a href="#" id="gQtdVExcedida_btn" onclick="openModal(id)"> &nbsp;&nbsp;&bull;&nbsp; <span class="icon-user"></span> Qtd. de Velocidade Excedida</a>
                            <a href="#" id="gEVExcedida_btn" onclick="openModal(id)"> &nbsp;&nbsp;&bull;&nbsp;<span class="icon-user"></span> Evolução de Velocidade Excedida</a>
                        </div>

                        <li id="maioresMenores"><a href="#"><span class="icon-pencil"></span> Maiores e Menores</a> <span class="caption blue">3</span></li>
                        <div id="subMaioresMenores" class="hide">
                            <a href="#" id="gTMOperacaoMM_btn" onclick="openModal(id)"> &nbsp;&nbsp;&bull;&nbsp; <span class="icon-user"></span> Tempo Médio de operações</a>
                            <a href="#" id="gTMSaidaMM_btn" onclick="openModal(id)"> &nbsp;&nbsp;&bull;&nbsp;<span class="icon-user"></span> Tempo Médio de Saída</a>
                            <a href="#" id="gTMChegadaMM_btn" onclick="openModal(id)"> &nbsp;&nbsp;&bull;&nbsp;<span class="icon-user"></span> Tempo Médio de Chegada</a>
                        </div>
                        <li><a href="#" id="gTotal_btn" onclick="openModal(id)"><span class="icon-pencil"></span> Total</a></li>

                    </ul>

                </li>

            </ul>
        </div>

        <div id="cadastros">

            <div class="menu">
                <a href="#" id="cConfigSistema_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Configuração do Sistema</a>
                <a href="#" id="cUsuarioPortaria_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Usuários - Portaria</a>
                <a href="#" id="cLocaisParada_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Locais de Parada</a>
                <a href="#" id="cChecklist_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Checklist</a>
                <a href="#" id="cCombustiveis_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Combustíveis</a>
                <a href="#" id="cFornecedores_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Fornecedores</a>
                <a href="#" id="cAdquirentes_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Adquirentes</a>
                <a href="#" id="cItens_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Itens</a>
                <a href="#" id="cMotoristas_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Motoristas</a>
                <a href="#" id="cAjudantes_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Ajudantes</a>
                <a href="#" id="cTiposPagamentos_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Tipos de Pagamentos</a>
                <a href="#" id="cCentroCustos_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Centro de Custos</a>
                <a href="#" id="cTipoVeiculos_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Tipo de Veículos</a>
                <a href="#" id="cAddVeiculos_btn" onclick="openModal2(id)"><span class="icon-picture"></span> Add. Veículos sem Módulo</a>
            </div>

        </div>

    </div>

</div>
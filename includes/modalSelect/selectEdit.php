<div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-11" aria-labelledby="ui-id-11" aria-selected="false"><a href="#tabs-11" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-11">Serviços</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-0" aria-controls="tabs-21" aria-labelledby="ui-id-21" aria-selected="true"><a href="#tabs-21" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-21">Pagamentos</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-31" aria-labelledby="ui-id-31" aria-selected="false"><a href="#tabs-31" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-31">Infrações</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-4" aria-labelledby="ui-id-4" aria-selected="false"><a href="#tabs-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Abastecimento</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-5" aria-labelledby="ui-id-5" aria-selected="false"><a href="#tabs-5" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5">Viagens</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-6" aria-labelledby="ui-id-6" aria-selected="false"><a href="#tabs-6" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-6">Manutenções Programadas</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-7" aria-labelledby="ui-id-7" aria-selected="false"><a href="#tabs-7" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7">Autorizações de Saída</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-8" aria-labelledby="ui-id-7" aria-selected="false"><a href="#tabs-8" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-8">Autorizações de Chegada</a></li>
        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-9" aria-labelledby="ui-id-7" aria-selected="false"><a href="#tabs-9" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-9">Checklist</a></li>
    </ul>

    <div id="tabs-11" aria-labelledby="ui-id-11" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">


        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Fornecedor</th>
                    <th width="10%">Tipo de Serviço</th>
                    <th width="5%">Data</th>
                    <th width="5%">OS</th>
                    <th width="10%">Odometro</th>
                    <th width="10%">Valor Total</th>
                </tr>
                </thead>
                <tbody id="tbody_servicos">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div id="tabs-21" aria-labelledby="ui-id-21" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Tipo de Pagamento</th>
                    <th width="10%">Fornecedor</th>
                    <th width="5%">Vencimento</th>
                    <th width="15%">Pago em</th>
                    <th width="10%">Status</th>
                    <th width="10%">Valor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-31" aria-labelledby="ui-id-31" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="20%">Data</th>
                    <th width="20%">Status</th>
                    <th width="20%">Valor</th>
                    <th width="40%">Descrição</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                        <button type="button" class="btn btn-default"><span class="icon-tag"></span> Ticket</button>
                        <button type="button" class="btn btn-default"><span class="icon-print"></span> Importar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">N. Ticket</th>
                    <th width="10%">Combustível</th>
                    <th width="5%">Motorista</th>
                    <th width="5%">Data Abastecimento</th>
                    <th width="10%">Quantidade (l / m3)</th>
                    <th width="10%">Valor Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-5" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Status</th>
                    <th width="10%">Motorista</th>
                    <th width="5%">Data Saída</th>
                    <th width="5%">Odometro Saída</th>
                    <th width="10%">Data Chegada</th>
                    <th width="10%">Odometro Chegada</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div id="tabs-6" aria-labelledby="ui-id-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Item</th>
                    <th width="10%">Durabilidade</th>
                    <th width="5%">Indicador</th>
                    <th width="5%">Lembrar</th>
                    <th width="10%">Status</th>
                    <th width="10%">Realizado em</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-7" aria-labelledby="ui-id-7" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Motorista</th>
                    <th width="10%">Status</th>
                    <th width="5%">Data/Hora Saída</th>
                    <th width="5%">Usuário - Portaria</th>
                    <th width="10%">Cadastrado por</th>
                    <th width="10%">Cadastrado em</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-8" aria-labelledby="ui-id-8" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="30%">Motorista</th>
                    <th width="10%">Local de Parada</th>
                    <th width="5%">Data/Hora Entrada</th>
                    <th width="5%">Usuário - Portaria</th>
                    <th width="10%">Cadastrado por</th>
                    <th width="10%">Criado em</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

    <div id="tabs-9" aria-labelledby="ui-id-9" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">

        <div class="block-fluid">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-default"><span class="icon-plus"></span> Adicionar</button>
                        <button type="button" class="btn btn-default"><span class="icon-edit"></span> Editar</button>
                        <button type="button" class="btn btn-default"><span class="icon-remove"></span> Desativar</button>
                    </div>
                </div>
            </div>

            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="25%">Nome</th>
                    <th width="35%">Data</th>
                    <th width="15%">Usuário - Portaria</th>
                    <th width="10%">Impedir Saída</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>


<div class="row">
    <div class="col-xs-24">
        <!-- ngIf: vm.situacao.Protocolo -->
        <section id="info-protocolo" ng-if="vm.situacao.Protocolo" class="ng-scope">
            <div class="protocolo">
                <div class="protocolo-primary">
                    <span translate="@APP-VIA-PAGAMENTO-PROTOCOLO" class="ng-scope">Protocolo de Atendimento: </span>
                    <span class="numero-protocolo ng-binding" ng-bind="vm.situacao.Protocolo">1352336827</span>
                </div>
            </div>
        </section>
        <!-- end ngIf: vm.situacao.Protocolo -->
    </div>
    <!-- ngIf: vm.situacao -->
    <div ng-if="vm.situacao" class="ng-scope">
        <div class="row">
            <div class="col-xs-24">
                <alert target="via-pagamento" class="ng-isolate-scope">
                    <!-- ngRepeat: alert in $ctrl.alerts  | filter: $ctrl.filtro -->
                </alert>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <section id="debitosPendentes" class="historicoContas">
                    <div class="panel panel-default">
                        <div class="panelHistoricoContasHeader">
                            <!-- ngIf: !vm.possuiDebitosEmAberto -->
                            <!-- ngIf: vm.possuiDebitosEmAberto -->
                            <div class="panel-heading ng-scope" ng-if="vm.possuiDebitosEmAberto">
                                <span ng-bind="vm.valorDebitos | currency" class="historicoContasValor ng-binding">R$93,52</span>
                                <span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-TITULO" class="historicoContasTitulo ng-scope">Total de débitos em aberto</span>
                            </div>
                            <!-- end ngIf: vm.possuiDebitosEmAberto -->
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <div class="alert-icon warning-icon"></div>
                            <span class="alert-message ng-scope" translate="@APP-VIA-PAGAMENTO-ALERTA-PRIVACIDADE">Para manter a privacidade dos seus dados ocultamos parte do nome e endereço na via simplificada</span>
                        </div>
                        <!-- ngIf: vm.possuiDebitosEmAberto -->
                        <div class="panel-body ng-scope" ng-if="vm.possuiDebitosEmAberto">
                            <table ng-table="vm.tableDebitosAbertosParams" class="table hidden-xs ng-scope ng-table">
                                <thead>
                                    <tr>
                                        <th class="ng-scope">Mês Ref.</th>
                                        <th class="ng-scope">Descrição da fatura</th>
                                        <th class="ng-scope">Valor</th>
                                        <th class="ng-scope">Vencimento</th>
                                        <th class="ng-scope">Pagamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ngRepeat: registro in $data track by $index -->
																													<tr ng-repeat="registro in $data track by $index" class="ng-scope">
											<td ng-bind="registro.MesReferencia" class="ng-binding">Set/2023</td>
											<td ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura Energia</td>
											<td ng-bind="registro.Valor | currency" class="ng-binding">R$<?php echo rand(99, 500); ?>,<?php echo rand(0, 99); ?></td>
											<td ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">18/09/2023</td>
											<td class="valign-middle">
												<button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX('3095699414', '110023905460', '2023/09', '911052641043', '18/09/2023', 'R$93,52', '93,52', '3095699414', '52491340097', 'Set/2023', 'Fatura Energia');">Gerar</button>
											</td>
										</tr>
																													<tr ng-repeat="registro in $data track by $index" class="ng-scope">
											<td ng-bind="registro.MesReferencia" class="ng-binding">Ago/2023</td>
											<td ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura Energia</td>
											<td ng-bind="registro.Valor | currency" class="ng-binding">R$,00</td>
											<td ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">18/09/2023</td>
											<td class="valign-middle">
												<button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX('3095699414', '110023905460', '2023/08', '912952263654', '18/09/2023', 'R$,00', ',00', '3095699414', '52491340097', 'Ago/2023', 'Fatura Energia');">Gerar</button>
											</td>
										</tr>
									                                    <!-- end ngRepeat: registro in $data track by $index -->
                                </tbody>
                            </table>
                            <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
                                <!-- ngInclude: templateUrl -->
                                <div ng-include="templateUrl" class="ng-scope">
                                    <!-- ngIf: params.data.length -->
                                    <div class="ng-table-pager ng-scope" ng-if="params.data.length">
                                        <!-- ngIf: params.settings().counts.length -->
                                        <!-- ngIf: pages.length -->
                                    </div>
                                    <!-- end ngIf: params.data.length -->
                                </div>
                            </div>
                            <table ng-table="vm.tableDebitosAbertosParams" class="table hidden-sm hidden-md hidden-lg ng-scope ng-table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <!-- ngRepeat: registro in $data track by $index -->
																													<tr ng-repeat="registro in $data track by $index" class="ng-scope">
											<td>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-MES-REF" style="font-size: 13px" class="ng-scope">
												<b>Mês Ref.</b>
												</span>
												<span ng-bind="registro.MesReferencia" class="ng-binding">Set/2023</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-DESCRICAO-FATURA-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Descrição:</b>
												</span>
												<span ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura Energia</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VENCIMENTO-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Vencimento:</b>
												</span>
												<span ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">18/09/2023</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VALOR-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Valor:</b>
												</span>
												<span ng-bind="registro.Valor | currency" class="ng-binding">R$<?php echo rand(99, 500); ?>,<?php echo rand(0, 99); ?></span>
												<br>
											</td>
											<td class="valign-middle">
												<button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX('3095699414', '110023905460', '2023/09', '911052641043', '18/09/2023', 'R$93,52', '93,52', '3095699414', '52491340097', 'Set/2023', 'Fatura Energia');">Gerar</button>
												<br>
											</td>
										</tr>
                                    																				<tr ng-repeat="registro in $data track by $index" class="ng-scope">
											<td>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-MES-REF" style="font-size: 13px" class="ng-scope">
												<b>Mês Ref.</b>
												</span>
												<span ng-bind="registro.MesReferencia" class="ng-binding">Ago/2023</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-DESCRICAO-FATURA-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Descrição:</b>
												</span>
												<span ng-bind="registro.DescricaoFatura" class="ng-binding">Fatura Energia</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VENCIMENTO-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Vencimento:</b>
												</span>
												<span ng-bind="registro.Vencimento | date:\'dd / MM / yyyy\'" class="ng-binding">18/09/2023</span>
												<br>
												<span translate="@APP-VIA-PAGAMENTO-TOTAL-DEBITOS-EM-ABERTO-COLHEAD-VALOR-MOBILE" style="font-size: 13px" class="ng-scope">
												<b>Valor:</b>
												</span>
												<span ng-bind="registro.Valor | currency" class="ng-binding">R$,00</span>
												<br>
											</td>
											<td class="valign-middle">
												<button class="btn btn-default btn-segunda-via-aberta ng-scope" onclick="geraPIX('3095699414', '110023905460', '2023/08', '912952263654', '18/09/2023', 'R$,00', ',00', '3095699414', '52491340097', 'Ago/2023', 'Fatura Energia');">Gerar</button>
												<br>
											</td>
										</tr>
                                                                        <!-- end ngRepeat: registro in $data track by $index -->
                                </tbody>
                            </table>
                            <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
                                <!-- ngInclude: templateUrl -->
                                <div ng-include="templateUrl" class="ng-scope">
                                    <!-- ngIf: params.data.length -->
                                    <div class="ng-table-pager ng-scope" ng-if="params.data.length">
                                        <!-- ngIf: params.settings().counts.length -->
                                        <!-- ngIf: pages.length -->
                                    </div>
                                    <!-- end ngIf: params.data.length -->
                                </div>
                            </div>
                        </div>
                        <!-- end ngIf: vm.possuiDebitosEmAberto -->
                        <!-- ngIf: vm.possuiDebitosEmAberto -->
                        <div class="panel-footer ng-scope">
                            <div id="botoes">
                                <div class="row">
                                    <div class="col-xs-24 col-md-8 col-md-push-8">
                                        <div class="buttons">
                                            <button type="button" onclick="window.location.reload();" class="btn btn-default btn-lg btn-block hand ng-scope" translate="@APP-VIA-PAGAMENTO-BTN-IMPRIMIR-TODAS">Voltar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- end ngIf: vm.situacao -->
</div>

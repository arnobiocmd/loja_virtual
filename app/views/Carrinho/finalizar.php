<div class="conteudo">
    <div class="base-prod-home">
        <div class="carrinho">
            <div class="base-detalhes">
                <div class="base-carrinho">
                    <span class="etapas etapa02"></span>
                    <span class="ttd">
                        <small>CATEGORIA</small>
                        <small>URSO PRINCÍPE</small>
                        <small class="ativo">carrinho</small>
                    </span>


                    <div class="caixa-carrinho">
                        <span class="titulo">Confirmar compra</span>

                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th align="left" width="40%">itens</th>
                                    <th align="center">PREÇO</th>
                                    <th align="center">QUANTIDADE</th>
                                    <th align="center">total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <div class="thumb"><img src="https://mjailton.com.br/testes/erp_oficial/versao02/upload/PANELA_LONGA.jpg"></div>
                                        <span class="produto">Panela Longa</span>
                                    </td>
                                    <td align="center">R$ 100.00</td>
                                    <td align="center"><input type="number" value="1" class="qtd" disabled=""> </td>
                                    <td align="center">R$ 100 </td>

                                </tr>

                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="4">
                                        <!--<p><span class="valores">SubTotal:</span> 		<strong class="resultado">R$ 150,00</strong>             </p>     
						<p><span class="valores">Frete:</span> 		<strong class="resultado">R$ 30,00</strong>                  </p>
						<p><span class="valores">Desconto:</span> 		<strong class="resultado desconto">2%</strong>          </p>  -->
                                        <p><span class="valores">Valor a Pagar:</span> <strong class="resultado totalpagar">R$ 100</strong> </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="caixa-carrinho">
                        <dl>
                            <div class="rows">
                                <span class="titulo">cadastro de contato</span>
                                <div class="caixa-entrega form-contato">
                                    <form action="index.php?link=6" method="post">
                                        <small style="color:red">(*) campo obrigatório</small>
                                        <h3>Dados Pessoais</h3>
                                        <div class="rows">
                                            <div class="cel1">
                                                <strong>Nome:</strong>
                                                <input type="text" name="name" value="Manoel Jailton Sousa">
                                            </div>
                                        </div>

                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>CPF:</strong>
                                                <input type="text" name="cpf" value="05347965401">
                                            </div>
                                            <div class="cel6">
                                                <strong>Telefone:</strong>
                                                <input type="text" name="telefone" value="9899924667">
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>E-mail:</strong>
                                                <input type="email" name="email" value="mjailton@gmail.com">
                                            </div>

                                            <div class="cel6">
                                                <strong>Senha:</strong>
                                                <input type="password" name="password" value="974U1WM32m975041">
                                            </div>
                                        </div>
                                        <br><br>
                                        <h3>Informações de Endereço</h3>

                                        <div class="rows">
                                            <div class="cel4">
                                                <strong>CEP:</strong>
                                                <input type="text" name="cep" value="58410340">
                                            </div>

                                            <div class="cel6">
                                                <strong>Rua:</strong>
                                                <input type="text" name="rua" value="Rua 30">
                                            </div>

                                            <div class="cel12">
                                                <strong>Número:</strong>
                                                <input type="text" name="numero" value="09">
                                            </div>

                                            <div class="cel12">
                                                <strong>Estado:</strong>
                                                <input type="text" name="estado" value="MA">
                                            </div>
                                        </div>

                                        <div class="cel1">
                                            <strong>Complemento:</strong>
                                            <input type="text" name="complemento">
                                        </div>
                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>Bairro:</strong>
                                                <input type="text" name="bairro" value="Cohama">
                                            </div>
                                            <div class="cel6">
                                                <strong>Cidade:</strong>
                                                <input type="text" name="cidade" value="São Luís">
                                            </div>
                                        </div>
                                        <!--<input type="submit" name="" value="Cadastrar" class="btn">-->
                                    </form>
                                </div>
                            </div>

                            <div class="caixa-entrega">
                                <span class="titulo">Escolha a Forma de pagamento</span>

                                <!--<div class="rows formulario">
                                    <dt><a href=""><i class="ico ipagseguro"></i><span>Pelo Pagseguro</span></a></dt>
                                    <dd style="">
                                        <h3>Informações de Pagamento</h3>
                                        <span class="titulo-m">Preencha os campus com os dados do titular do cartão</span>
                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>Titular do cartão:</strong>
                                                <input type="text" name="cartao_titular" value="Manoel Jailton Sousa">
                                            </div>
                                            <div class="cel6">
                                                <strong>CPF do Titular do cartão:</strong>
                                                <input type="text" name="cartao_cpf" value="3232323232">
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="cel3">
                                                <strong>Número do cartão:</strong>
                                                <input type="text" name="cartao_numero">
                                            </div>

                                            <div class="cel3">
                                                <strong>Código de Segurança:</strong>
                                                <input type="text" name="cartao_cvv" value="123">
                                            </div>
                                            <div class="cel3">
                                                <strong>Validade:</strong>
                                                <div class="limpa-padding">
                                                    <div class="cel6">
                                                        <select name="cartao_mes">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="cel6">
                                                        <select name="cartao_ano">
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                            <option>2027</option>
                                                            <option>2028</option>
                                                            <option>2029</option>
                                                            <option>2030</option>
                                                            <option>2031</option>
                                                            <option>2032</option>
                                                            <option>2033</option>
                                                            <option>2034</option>
                                                            <option>2035</option>
                                                            <option>2036</option>
                                                            <option>2037</option>
                                                            <option>2038</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cel3">
                                                <strong>Parcelas:</strong>
                                                <select name="parc"></select>
                                                <input type="hidden" name="total" value="">
                                            </div>
                                            <div class="rows">
                                                <button class="btn pagseguro">Efetuar Compra</button>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                            </div>-->

                           <!-- <div class="caixa-entrega">
                                <div class="rows formulario">
                                    <dt><a href=""><i class="ico imercadopago"></i><span>Pelo Mercado Pago</span></a></dt>
                                    <dd style="display: none;">
                                        <h3>Informações de Pagamento</h3>
                                        <span class="titulo-m">Preencha os campus com os dados do titular do cartão</span>
                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>Titular do cartão:</strong>
                                                <input type="text" name="cartao_titular" value="Manoel Jailton Sousa">
                                            </div>
                                            <div class="cel6">
                                                <strong>CPF do Titular do cartão:</strong>
                                                <input type="text" name="cartao_cpf" value="3232323232">
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="cel3">
                                                <strong>Número do cartão:</strong>
                                                <input type="text" name="cartao_numero">
                                            </div>

                                            <div class="cel3">
                                                <strong>Código de Segurança:</strong>
                                                <input type="text" name="cartao_cvv" value="123">
                                            </div>
                                            <div class="cel3">
                                                <strong>Validade:</strong>
                                                <div class="limpa-padding">
                                                    <div class="cel6">
                                                        <select name="cartao_mes">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="cel6">
                                                        <select name="cartao_ano">
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                            <option>2027</option>
                                                            <option>2028</option>
                                                            <option>2029</option>
                                                            <option>2030</option>
                                                            <option>2031</option>
                                                            <option>2032</option>
                                                            <option>2033</option>
                                                            <option>2034</option>
                                                            <option>2035</option>
                                                            <option>2036</option>
                                                            <option>2037</option>
                                                            <option>2038</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cel3">
                                                <strong>Parcelas:</strong>
                                                <select name="parc"></select>
                                                <input type="hidden" name="total" value="">
                                            </div>
                                            <div class="rows">
                                                <button class="btn mercadopago">Efetuar Compra</button>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                            </div>-->

                            <!--<div class="caixa-entrega">
                                <div class="rows formulario">
                                    <dt><a href=""><i class="ico iboleto"></i><span>Por boleto</span></a></dt>
                                    <dd style="display: none;">
                                        <h3>Informações de Pagamento</h3>
                                        <span class="titulo-m">Preencha os campus com os dados do titular do cartão</span>
                                        <div class="rows">
                                            <div class="cel6">
                                                <strong>Titular do cartão:</strong>
                                                <input type="text" name="cartao_titular" value="Manoel Jailton Sousa">
                                            </div>
                                            <div class="cel6">
                                                <strong>CPF do Titular do cartão:</strong>
                                                <input type="text" name="cartao_cpf" value="3232323232">
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="cel3">
                                                <strong>Número do cartão:</strong>
                                                <input type="text" name="cartao_numero">
                                            </div>

                                            <div class="cel3">
                                                <strong>Código de Segurança:</strong>
                                                <input type="text" name="cartao_cvv" value="123">
                                            </div>
                                            <div class="cel3">
                                                <strong>Validade:</strong>
                                                <div class="limpa-padding">
                                                    <div class="cel6">
                                                        <select name="cartao_mes">
                                                            <option>01</option>
                                                            <option>02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                            <option>06</option>
                                                            <option>07</option>
                                                            <option>08</option>
                                                            <option>09</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                        </select>
                                                    </div>
                                                    <div class="cel6">
                                                        <select name="cartao_ano">
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                            <option>2021</option>
                                                            <option>2022</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                            <option>2027</option>
                                                            <option>2028</option>
                                                            <option>2029</option>
                                                            <option>2030</option>
                                                            <option>2031</option>
                                                            <option>2032</option>
                                                            <option>2033</option>
                                                            <option>2034</option>
                                                            <option>2035</option>
                                                            <option>2036</option>
                                                            <option>2037</option>
                                                            <option>2038</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cel3">
                                                <strong>Parcelas:</strong>
                                                <select name="parc"></select>
                                                <input type="hidden" name="total" value="">
                                            </div>
                                            <div class="rows">
                                                <button class="btn boleto">Efetuar Compra</button>
                                            </div>
                                        </div>
                                    </dd>
                                </div>
                            </div>-->



                            <div class="caixa-entrega">
                                <div class="rows formulario">
                                    <dt><a href=""><i class="ico ideposito"></i><span>Por Depósito/Transferência</span></a></dt>
                                    <dd style="display: none;">
                                        <h3>Pagamento via depósito ou transferencia</h3>
                                        <span class="titulo-m">Escolha uma das contas disponíveis abaixo para transferencia ou deposito</span>

                                        <div class="rows pagamento">
                                            <div class="cel4">
                                                <img src="img/img-bb.png">
                                                <strong>BANCO DO BRASIL</strong>
                                                <span>Agência: 0000-1 </span>
                                                <span>Conta: 111112-1 </span>
                                                <span>CPF: 123.456.789-00</span>
                                                <span>Manoel jailton sousa do nascimento</span>
                                            </div>
                                            <div class="cel4">
                                                <img src="img/img-bbd.png">
                                                <strong>BANCO DO BRADESCO</strong>
                                                <span>Operação: 0123 </span>
                                                <span>Agência: 0000-1 </span>
                                                <span>Poupança: 111112-1 </span>
                                                <span>CPF: 123.456.789-00</span>
                                                <span>Manoel jailton sousa do nascimento</span>
                                            </div>
                                            <div class="cel4">
                                                <img src="img/img-bc.png">
                                                <strong>BANCO DA CAIXA</strong>
                                                <span>Operação: 0123 </span>
                                                <span>Agência: 0000-1 </span>
                                                <span>Poupança: 111112-1 </span>
                                                <span>CPF: 123.456.789-00</span>
                                                <span>Manoel jailton sousa do nascimento</span>
                                            </div>

                                        </div>
                                        <a href="obrigado.html" class="btn deposito">Finalizar Venda</a>
                                    </dd>
                                </div>
                            </div>

                        </dl>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        //Definimos que todos as tags dd terão display:none menos o primeiro filho
        $('dd:visible(:first)').hide();
        //Ao clicar no link, executamos a funcao
        $('dt a').click(function() {
            //As tags dd's visíveis agora ficam com display:none
            $("dd:visible").slideUp("slow");
            //Apos, a funcao é transferida para seu pai, que procura o proximo irmao no codigo o tonando visível
            $(this).parent().next().slideDown("slow");
            return false;
        });
    });
</script>
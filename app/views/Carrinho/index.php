<div class="carrinho">
    <div class="base-detalhes">
        <div class="base-carrinho">
            <span class="etapas etapa01"></span>
            <span class="ttd">
                <small>CATEGORIA</small>
                <small>URSO PRINCÍPE</small>
                <small class="ativo">carrinho</small>
            </span>

            <div class="caixa-carrinho">
                <span class="titulo">Seu carrinho atual</span>

                <table cellpadding="0" cellspacing="0" border="0" class="tabela-border">
                    <thead>
                        <tr>
                            <th align="left" width="40%">itens</th>
                            <th align="center">PREÇO</th>
                            <th align="center">QUANTIDADE</th>
                            <th align="center">total</th>
                            <th align="center" colspan="2">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $total = 0;
                        foreach ($lista as $key => $produto) { 
                          $subtotal =  $produto->preco * $produto->qtde;
                            $total += $subtotal;
                            ?>
                         
                        <tr>
                            <td align="left">
                                <div class="thumb"><img src="<?php echo URL_IMAGEM.$produto->imagem?>"></div>
                                <span class="produto"><?php echo $produto->produto?></span>

                            </td>
                            <td align="center"><?php echo $produto->preco?></td>
                            <td align="center"><input type="number" min="1"
                            name="<?php echo $produto->id_produto?>"
                            data-idProduto ="<?php echo $produto->id_produto?>"
                            data-preco = "<?php echo $produto->preco?>"
                            value="<?php echo $produto->qtde?>" class="qtd" onchange="atualizarSubtotal(this)"> </td>
                            <td align="center" class="subtotal"><?php echo $subtotal  ?></td>
                            <td align="center"><a href="" class="atualizar"></a></td>
                            
                            <td align="center">
                                <a href="javascript:;"
                                data-idItem = "<?php echo $produto->id_item_carrinho?>"
                                data-valor ="<?php echo $subtotal?>"
                                onclick="excluirItem(this)"
                                 class="excluir"></a>
                            </td>

                        </tr>
                        <?php }?>
                        <tr>
                            <td align="center" width="20%" colspan="5"><a href="<?php echo URL_BASE?>" class="btn voltar">Continuar Comprando</a><a></a></td>
                            <td align="center" style="background:#ddd"><small>Total</small><span class="preco" id="valorTotal">R$ <?php echo $total?></span> </td>

                        </tr>

                    </tbody>
                </table>


                <div class="rows">
                    <div class="cel6">
                        <div class="caixa">
                            <table cellpadding="0" cellspacing="0" border="0" class="tabela-alt">
                                <thead>
                                    <th colspan="4">
                                        <h2>Aplicar código de cupom</h2>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center" colspan="3">
                                            <form method="POST">
                                                <div class="calc">
                                                    <div class="cel9">
                                                        <input type="text" name="cep" placeholder="Digite o código">
                                                        <input type="submit" value="APLICAR" class="btn btn-codigo">
                                                    </div>
                                                    <div class="cel3">
                                                        <div class="reload" id=""></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="linhas">
                                            <span class="tt1">Subtotal</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>
                                        <td class="linhas">
                                            <span class="tt1">Desconto</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>
                                        <td class="linhas">
                                            <span class="tt1">Total</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="cel6">
                        <div class="caixa">
                            <table cellpadding="0" cellspacing="0" border="0" class="tabela-alt">
                                <thead>
                                    <th colspan="4">
                                        <h2>Calcular frete e prazo</h2>
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center" colspan="4">
                                            <form method="POST">
                                                <div class="calc">
                                                    <div class="cel9">
                                                        <input type="text" name="cep" placeholder="Digite seu Cep">
                                                        <input type="submit" value="CALCULAR" class="btn">
                                                    </div>
                                                    <div class="cel3">
                                                        <div class="reload" id=""></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="linhas">
                                            <span class="tt1">Entrega</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>
                                        <td class="linhas">
                                            <span class="tt1">Subtotal</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>
                                        <td class="linhas">
                                            <span class="tt1">Valor do frete</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>
                                        <td class="linhas">
                                            <span class="tt1">Resultado</span>
                                            <span class="tt2">0 rezultado</span>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cel3" style="float:none; margin:0 auto"><a href="finalizar.html" class="btn finaliza">Finalizar Compra</a><a></a></div>


                </div>

            </div>

        </div>
    </div>
</div>

<script>
    var soma = <?php echo $total ?>
</script>
<div class="rows">
    <div class="base-detalhes">
        <div>
            <span class="ttd"><small>CATEGORIA</small><small class="ativo">Cuscuzeira Laranja</small></span>
            <div class="rows caixa-produto">
                <div class="cel4">
                    <div class="caixa-prod">
                        <img src="<?php echo URL_IMAGEM . $produto->imagem ?>">
                    </div>
                    <div class="rows min-thumbs">

                    </div>
                </div>
                <div class="cel8">
                    <div class="caixa-titulo">
                        <h1><?php echo $produto->produto ?></h1>

                    </div>
                    <div class="caixa-del">
                        <div class="cel6">
                            <small class="precoantigo">De: <span class="valor"><?php echo $produto->preco_alto ?></span> por:</small>
                            <span class="preco">R$ <?php echo $produto->preco ?></span>
                            <!--<span class="tt3">5x de R$ 72,11 sem  juros </span>-->

                            <form method="POST" action="<?php echo URL_BASE. "carrinho/add"?>">

                                <input type="hidden" name="id_produto" value="<?php echo $produto->id_produto?>">
                                <input type="hidden" name="qtde" value="1">
                                <input type="hidden" name="preco" value="<?php echo $produto->preco?>">
                                <input class="btn" type="submit" value="ADICIONAR ao carrinho">
                                <div class="add">
                                    <button data-action="decrease" class="menos">-</button>
                                    <input type="text" name="qt" value="1" class="addtocart_qt" disabled="">
                                    <button data-action="increase" class="mais">+</button>
                                </div>
                            </form>
                        </div>

                        <div class="cel6">
                            <div class="caracteristicas">
                                <span span="" class="ttd">CARACTERÍSTICAS</span>
                                <p>-Produto em aluminio </p>

                                <span class="ttd">Tamanho Aproximado:</span>
                                <p>-Altura: 11cm;</p>
                                <p>-Largura: 12cm.</p>

                                <span class="ttd">Peso:</span>
                                <p>-300g.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="desc-texto">
    <div class="cel8">
        <p><span class="ttd">Descrição do Produto</span></p>
        <strong><?php echo $produto->produto ?></strong>
        <p><?php echo $produto->descricao ?></p>


    </div>

</div>

<div class="caixa-prod-home recomendado">
    <span class="titulo">RECOMENDADOS PARA VOCÊ</span>
    <div class="rows">
        <div class="cel10">
            <?php foreach ($recomendados as $key => $recomendado) {

            ?>
                <div class="cel3 cel5">
                    <div class="thumb"><img height="205" src="<?php echo URL_IMAGEM . $recomendado->imagem ?>"></div>
                    <span class="ttp"><?php echo $recomendado->produto ?></span>
                    <span class="tpc"><?php echo $recomendado->preco ?></span>
                    <div class="base-btn">
                        <form method="POST" action="carrinho.html">
                            <input type="hidden" name="id_produto" value="12" />
                            <input type="hidden" name="qtde" value="1" />
                            <input type="hidden" name="preco" value="100.00" />
                            <input class="btn" type="submit" value="Comprar" />
                        </form>
                        <a href="<?php echo URL_BASE . "produto/detalhes/" . $recomendado->id_produto ?>" class="btn detalhe">Detalhes</a>
                    </div>
                </div>

            <?php } ?>




        </div>
    </div>
</div>
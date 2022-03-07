<div class="rows">

    <?php include("filtro.php") ?>
    <div class="cel9 base-categoria">

        <div id="listaInicial" style="display: block;">
            <?php foreach ($lista as $key => $cat) { ?>
                <div class="caixa-prod-home categorias">
                    <span class="titulo"><?php echo $cat->categoria->categoria ?></span>
                    <div class="rows">
                        <div class="cel10">
                            <?php foreach ($cat->produtos as $key => $prod) {

                            ?>
                                <div class="cel3">
                                    <div class="thumb"><img src="<?php echo URL_IMAGEM . $prod->imagem ?>"></div>
                                    <span class="ttp"><?php echo $prod->produto ?></span>
                                    <span class="tpc"><?php echo $prod->preco ?></span>
                                    <div class="base-btn">
                                        <form method="POST" action="<?php echo URL_BASE."carrinho/add"?>">
                                            <input type="hidden" name="id_produto" value="<?php echo $prod->id_produto?>" />
                                            <input type="hidden" name="qtde" value="1" />
                                            <input type="hidden" name="preco" value="<?php echo $prod->preco?>" />
                                            <input class="btn" type="submit" value="Comprar" />
                                        </form>
                                        <a href="<?php echo URL_BASE . "produto/detalhes/" . $prod->id_produto ?>" class="btn detalhe">Detalhes</a>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                </div>

            <?php } ?>
        </div>

        <div class="caixa-prod-home categorias" id="filtro" style="display: none;">
            <span class="titulo"><?php /* $cat->categoria->categoria*/ ?>filtro</span>
            <div class="rows">
                <div class="cel10" id="listaFiltro">
                    
                        

                    

                </div>
            </div>
        </div>



    </div>
</div>
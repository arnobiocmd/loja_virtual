<div class="conteudo">
    <div class="rows">
        <ul class="barra-topo cel10">
            <li><a href="<?php echo URL_BASE?>">Home</a></li>
            <li><a href="<?php echo URL_BASE."cliente"?>">cadastro</a></li>
            <li><a href="frm-login.html">login</a></li>
            <li class="usuario"><a href=""><i class="icouser"></i>Arnobio Paulino fernandes</a>
                <ul>
                    <li><a href="area-cliente.html">área do cliente</a></li>
                    <li><a href="logoff">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>


<div class="conteudo">
    <div class="rows">
        <div class="cel3">
            <a href="<?php echo URL_BASE?>" class="logo"></a>
        </div>
        <div class="cel9">
            <div class="busca cel6">
                <form action="" method="post">
                    <input type="text" placeholder="Digite sua busca aqui...">
                    <input type="submit" value="" class="but">
                </form>
            </div>
            <div class="carrinho-topo cel6">
                <ul>
                    <li class="carr"><span class="tt">MEU CARRINHO</span>
                        <div class="qtd"><b>1</b></div>
                    </li>
                    <div id="vercarrinho">
                        <div class="cx-carrinho">
                            <?php foreach ($lista as $key => $value) {
                                # code...
                            ?>
                            <ol>
                                <div class="thumb"><img src="<?php echo URL_IMAGEM.$value->imagem ?>"></div>
                                <p><?php echo $value->produto?></p>
                                <span class="preco"><?php echo $value->preco?></span>
                            </ol>
                            <?php }?>
                            <a href="<?php echo URL_BASE."carrinho"?>" class="btn">Ir para o carrinho</a>

                        </div>
                    </div>

                    <!--carrinho vazio
						<div id="vercarrinho">
							<div class="cx-carrinho">
								 <ol class="vazio">
									<div class="thumb"><img src="img/icon-vazio.png"></div>
										 <p> Sem produto no carrinho </p>
								 </ol>
								<a href="carrinho.html" class="btn">Ir para o carrinho</a>
								
							</div>
						</div>
						-->
                </ul>
            </div>
        </div>
    </div>
</div>
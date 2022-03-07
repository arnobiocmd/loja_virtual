<div id="mfiltro">
    <div class="menu-lateral filtro">
        <div class="cel3 filtro">
            <ul>
                <h2>Outros</h2>

                <li><input type="checkbox" name="promocao" value="1" id="promocao" />
                    <label for="promocao">Promoção</label>
                </li>


                <li><input type="checkbox" name="maisvendido" value="2" id="maisvendido" />
                    <label for="maisvendido">Mais vendidos</label>
                </li>


                <li><input type="checkbox" name="lancamento" value="3" id="lancamento" />
                    <label for="lancamento">Lançamento</label>
                </li>


            </ul>
            <!--<ul>
                <h2>Grupo</h2>

                <li><input type="checkbox" name="filter[brand][]" value="1" id="filter_genero1">
                    <label for="filter_genero1">Panela</label>
                </li>


                <li><input type="checkbox" name="filter[brand][]" value="2" id="filter_genero2">
                    <label for="filter_genero2">Acessório</label>
                </li>


                <li><input type="checkbox" name="filter[brand][]" value="3" id="filter_genero3">
                    <label for="filter_genero3">Disco</label>
                </li>
            </ul>-->


            <ul>
                <h2>Categorias</h2>
                <?php foreach ($categorias as $key => $categoria) {?>
                <li><input type="checkbox" name="categorias[]" value="<?php echo $categoria->id_categoria?>" id="filtro_categoria<?php echo $categoria->id_categoria?>">
                    <label for="filtro_categoria<?php echo $categoria->id_categoria?>"><?php echo $categoria->categoria?></label>
                </li>

                    <?php }?>

            </ul>

            <!--<ul>
                <h2>Linha de Produção</h2>

                <li><input type="checkbox" name="filter[brand][]" value="Minie Rosa" id="filter_tema1">
                    <label for="filter_tema1">Linha Hotel</label>
                </li>


                <li><input type="checkbox" name="filter[brand][]" value="Minnie Vermelha" id="filter_tema2">
                    <label for="filter_tema2">Linha Reforçada</label>
                </li>


                <li><input type="checkbox" name="filter[brand][]" value="Jardim" id="filter_tema3">
                    <label for="filter_tema3">Linha de Luxo</label>
                </li>

            </ul>-->

        </div>
    </div>
</div>
<?php

namespace app\models\service;

use app\models\dao\ProdutoDao;

class ProdutoService{
    public static function getProduto($id_produto){
        $dao = new ProdutoDao();
        return $dao->getProduto($id_produto);
    }

    public static function ProdutosRecomendados($id_categoria){
        $dao = new ProdutoDao();
        return $dao->ProdutosRecomendados($id_categoria);
    }
       
}
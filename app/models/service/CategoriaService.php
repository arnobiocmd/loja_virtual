<?php

namespace app\models\service;

use app\models\dao\CategoriaDao;
use app\models\dao\ProdutoDao;

class CategoriaService{
    public static function listar($limit = 7){

    }

    public static function listaPorProduto($limit = 7){
        $dao = new CategoriaDao();
        return $dao->listaPorProduto($limit = 7);
    }
}
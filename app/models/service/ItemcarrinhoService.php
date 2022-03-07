<?php

namespace app\models\service;

use app\models\dao\ItemcarrinhoDao;

class ItemcarrinhoService{
    public static function inserir($id_carrinho,$id_produto,$qtde,$preco){
        $dao = new ItemcarrinhoDao();
        return $dao->inserir($id_carrinho,$id_produto,$qtde,$preco);
    }

    public static function lista($id_carrinho){
        $dao = new ItemcarrinhoDao();
        return $dao->lista($id_carrinho);
    }
}
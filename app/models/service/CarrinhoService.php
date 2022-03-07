<?php


namespace app\models\service;

use app\models\dao\CarrinhoDao;
use app\models\dao\CategoriaDao;

class CarrinhoService{
        public static function novo($id_contato,$data_carrinho){
            $dao = new CarrinhoDao();
            return $dao->novo($id_contato,$data_carrinho);
        }

        public static function excluir($id_item){
            $dao = new CarrinhoDao();
            return $dao->excluir($id_item);
        }
    }

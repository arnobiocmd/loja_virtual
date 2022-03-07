<?php


namespace app\models\service;

use app\models\dao\FiltroDao;

class FiltroService{
    public static function lista($categorias,$promocao,$maisvendido,$lancamento){
        $dao = new FiltroDao();
        return $dao->lista($categorias,$promocao,$maisvendido,$lancamento);
    }
}
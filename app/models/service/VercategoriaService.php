<?php

namespace app\models\service;

use app\models\dao\VerCategoriaDao;

class VerCategoriaService{
    public static function listas(){
        $dao = new VerCategoriaDao();
        return $dao->listas();
    }
}
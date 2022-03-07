<?php

namespace app\models\dao;

use app\core\Model;

class FiltroDao extends Model
{
    public function lista($categorias,$promocao,$maisvendido,$lancamento)
    {

        $sql = "SELECT * FROM produto WHERE ativo = 'S'";

            if($promocao){
                $sql .= " AND eh_promocao = 'S'";
            }
            if($maisvendido){
                $sql .= " AND eh_maisvendido = 'S'";
            }
            if($lancamento){
                $sql .= " AND eh_lancamento = 'S'";
            }
            if($categorias){
                $sql .= " AND id_categoria in (".implode(",",$categorias) .")";
            }
        

        $sql = $this->db->query($sql);
        return $sql->fetchAll(\PDO::FETCH_OBJ);
    }
}

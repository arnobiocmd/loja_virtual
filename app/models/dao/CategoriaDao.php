<?php
namespace app\models\dao;

use app\core\Model;

class CategoriaDao extends Model{
    public function listaPorProduto($limit = 7){
        $sql = "SELECT * FROM categoria WHERE id_categoria IN 
        (SELECT DISTINCT id_categoria  FROM produto) LIMIT $limit";
        $sql = $this->db->query($sql);
        return $sql->fetchAll(\PDO::FETCH_OBJ);

    }
}
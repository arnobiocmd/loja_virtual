<?php

namespace app\models\dao;

use app\core\Model;

class ProdutoDao extends Model {
    public function getProduto($id_produto){
        $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_produto",$id_produto);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function ProdutosRecomendados($id_categoria){
        $sql = "SELECT * FROM produto WHERE id_categoria = :id_categoria";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_categoria",$id_categoria);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}
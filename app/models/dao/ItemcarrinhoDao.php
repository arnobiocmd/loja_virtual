<?php
namespace app\models\dao;

use app\core\Model;

class ItemcarrinhoDao extends Model{
    public function inserir($id_carrinho,$id_produto,$qtde,$preco){
        $sql = "INSERT INTO item_carrinho SET
        id_carrinho = :id_carrinho,
        id_produto = :id_produto,
        qtde = :qtde,
        valor =:valor";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_carrinho",$id_carrinho);
        $qry->bindValue(":id_produto",$id_produto);
        $qry->bindValue(":qtde",$qtde);
        $qry->bindValue(":valor",$preco);
        $qry->execute();
        return $this->db->lastInsertId();

    }

    public function lista($id_carrinho){
        $sql = "SELECT * FROM produto p, item_carrinho ic WHERE p.id_produto = ic.id_produto AND id_carrinho = :id_carrinho";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_carrinho",$id_carrinho);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}
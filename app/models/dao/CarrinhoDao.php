<?php

namespace app\models\dao;

use app\core\Model;

class CarrinhoDao extends Model{
    public function novo($id_contato,$data_carrinho){
        $sql = "INSERT INTO carrinho SET id_contato = :id_contato, data_carrinho = :data_carrinho";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_contato",$id_contato);
        $qry->bindValue(":data_carrinho",$data_carrinho);
        $qry->execute();
        return $this->db->lastInsertId();
    }

    public function excluir($id_item){
        $sql = "DELETE FROM item_carrinho WHERE id_item_carrinho = :id_item_carrinho";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_item_carrinho",$id_item);
        $qry->execute();
    }

    public function atualizarItem($id_item, $qtde){
        $sql = "UPDATE item_carrinho SET qtde = :qtde WHERE id_item_carrinho = :id_item_carrinho";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":qtde",$qtde);
        $qry->bindValue(":id_item_carrinho",$id_item);
        $qry->execute();
    }
}
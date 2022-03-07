<?php
namespace app\models\dao;

use app\core\Model;

class VerCategoriaDao extends Model{
    public function listas(){
        $lista = array();
        $sql = "SELECT * FROM categoria WHERE id_categoria IN (SELECT DISTINCT id_categoria FROM produto)";
        $qry = $this->db->query($sql);
        $categorias = $qry->fetchAll(\PDO::FETCH_OBJ);
        
        if($categorias){
            foreach ($categorias as $categoria) {
                $sql = "SELECT * FROM produto WHERE id_categoria = " . $categoria->id_categoria. 
                " ORDER BY Rand() LIMIT 4 ";
                $qry = $this->db->query($sql);
                $produtos = $qry->fetchAll(\PDO::FETCH_OBJ);
                
                $lista[]  = (object) array(
                    "categoria" => $categoria,
                    "produtos" => $produtos
                );    
                
            }
        }
        
        /*echo '<pre>';
        print_r($produtos);*/
        return $lista;
       
    }
}
<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\CarrinhoService;
use app\models\service\CategoriaService;
use app\models\service\ItemcarrinhoService;

class CarrinhoController extends Controller{
    public function index(){
        $dados['categorias'] = CategoriaService::listaPorProduto(); 
        $id_carrinho = isset($_SESSION["ID_CARRINHO"]) ? $_SESSION["ID_CARRINHO"] : null;
        if(!$id_carrinho){
            $this->redirect(URL_BASE);
        }

        $dados['lista'] = ItemcarrinhoService::lista($id_carrinho);
       
        
        $dados["view"] = 'Carrinho/Index';
        $this->load("template",$dados);





    }

    public function add(){

        $id_carrinho = isset($_SESSION["ID_CARRINHO"]) ? $_SESSION["ID_CARRINHO"] : null;
        $id_contato  = isset($_SESSION["CONTATO"]) ? $_SESSION["CLIENTE"]->id_contato : null;

        

        $id_produto = isset($_POST['id_produto']) ? strip_tags(filter_input(INPUT_POST , "id_produto")) : null;
        $qtde = isset($_POST['qtde']) ? strip_tags(filter_input(INPUT_POST , "qtde")) : null;
        $preco = isset($_POST['preco']) ? strip_tags(filter_input(INPUT_POST , "preco")) : null;

        if(!$id_carrinho){
            $id_carrinho = CarrinhoService::novo($id_contato,hoje());
            $_SESSION["ID_CARRINHO"] = $id_carrinho;
        }

        ItemcarrinhoService::inserir($id_carrinho,$id_produto,$qtde,$preco);
        $this->redirect(URL_BASE."carrinho");
        

    }

    public function excluirItemCarrinho(){
        $id_item = isset($_POST['id_item']) ? strip_tags(filter_input(INPUT_POST , "id_item")) : null;
        $eic = CarrinhoService::excluir($id_item);

        echo json_encode($eic);
    }


    public function alterarItem(){
        $id_item = isset($_POST['id_item']) ? strip_tags(filter_input(INPUT_POST , "id_item")) : null;
        $qtde = isset($_POST['qtde']) ? strip_tags(filter_input(INPUT_POST , "qtde")) : null;
        $resul = CarrinhoService::atualizarItem($id_item, $qtde);

        echo json_encode($resul);
    }
}
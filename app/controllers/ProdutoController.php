<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\CategoriaService;
use app\models\service\ItemcarrinhoService;
use app\models\service\ProdutoService;

class ProdutoController extends Controller{
    public function detalhes($id_produto){
        $produto = ProdutoService::getProduto($id_produto);
        $dados['categorias'] = CategoriaService::listaPorProduto();  
        $dados['produto'] = $produto;
        $dados['recomendados'] = ProdutoService::ProdutosRecomendados($produto->id_categoria);
       /* $id_carrinho = isset($_SESSION["ID_CARRINHO"]) ? $_SESSION["ID_CARRINHO"] : null;
        if(!$id_carrinho){
            $this->redirect(URL_BASE);
        }
        $dados['lista'] = ItemcarrinhoService::lista($id_carrinho);*/
        $dados['view'] = 'Produto/Index';
        $this->load("template",$dados);
    }
}
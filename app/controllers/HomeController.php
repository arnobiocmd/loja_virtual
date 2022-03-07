<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\CategoriaService;
use app\models\service\ItemcarrinhoService;
use app\models\service\ProdutoService;
use app\models\service\VerCategoriaService;

class HomeController extends Controller{  
    
   public function index(){     
       $dados['categorias'] = CategoriaService::listaPorProduto();    
       $dados['lista'] = VerCategoriaService::listas();
       
      /* $id_carrinho = isset($_SESSION["ID_CARRINHO"]) ? $_SESSION["ID_CARRINHO"] : null;
       if(!$id_carrinho){
           $this->redirect(URL_BASE);
       }
       $dados['listas'] = ItemcarrinhoService::lista($id_carrinho);*/
     
        // i($dados['lista']);
       $dados["view"]       = "home";
	   $this->load("template", $dados);
   } 
}

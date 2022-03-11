<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\CategoriaService;
use stdClass;

class ClienteController extends Controller{
    public function index(){
        $dados['categorias'] = CategoriaService::listaPorProduto(); 
        $dados['view'] = "Cliente/Index";
        $this->load("template",$dados); 
    }

    public function salvar(){
        $cliente = new \stdClass();
        $cliente->id_cliente        = $_POST['id_cliente'];
        $cliente->txt_nome          = $_POST['txt_nome'];
        $cliente->bairro            = $_POST['bairro'];
        $cliente->endereco          = $_POST['endereco'];
        $cliente->telefone          = $_POST['telefone'];
        $cliente->cidade            = $_POST['cidade'];
        $cliente->cep               = $_POST['cep'];
        $cliente->rua               = $_POST['rua'];
        $cliente->numero            = $_POST['numero'];
        $cliente->estado            = $_POST['estado'];
        $cliente->cpf               = $_POST['cpf'];
    }
}
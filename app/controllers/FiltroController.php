<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\FiltroService;
use stdClass;

class FiltroController extends Controller{
    public function index(){
       //$selecao = new \stdClass();

        $promocao = isset($_POST['promocao']) ? filter_var($_POST['promocao'],FILTER_VALIDATE_BOOLEAN)  : null;
        $maisvendido = isset($_POST['maisvendido']) ? filter_var($_POST['maisvendido'],FILTER_VALIDATE_BOOLEAN)  : null;
        $lancamento = isset($_POST['lancamento']) ? filter_var($_POST['lancamento'],FILTER_VALIDATE_BOOLEAN)  : null;
        $categorias = isset($_POST['categorias']) ? $_POST['categorias'] : null;

       
        $resultado = FiltroService::lista($categorias,$promocao,$maisvendido,$lancamento);
        echo json_encode($resultado);
    }
}
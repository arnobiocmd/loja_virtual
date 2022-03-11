<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Arnobio loja virtual</title>
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/grade.css">
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/style-m.css">

    <script type="text/javascript" src="<?php echo URL_BASE?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE?>assets/js/js.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE?>assets/js/js_loja.js"></script>
</head>

<body>
      <script>
        var base_url = "<?php echo URL_BASE?>";
        var url_imagem = "<?php echo URL_IMAGEM?>";
    </script>

    <div class="site">

        <div class="base-topo">
            <a href="" class="mobile"></a><a href="<?php echo URL_BASE?>" class="mfiltro"></a>
          <?php include("cabecalho.php")?>

            
        </div>

        
        <div id="menumobile">
            <div class="menu-topo">
                <ul>
                    <?php foreach ($categorias as $key => $categoria) {?>
                        <li><a href="#"><?php echo $categoria->categoria?></a></li>
                    <?php }?>
                    
                    

                </ul>
                <ul class="area-usuario">
                    <span class="titulo">área do cliente</span>
                    <li><a href="index.php?link=9">cliente</a></li>
                    <li><a href="logoff">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class="conteudo">
            <div class="base-prod-home">


            <?php $this->load($view,$viewData)?>


            

            </div>
        </div>
       <?php include("rodape.php")?>
    </div>

    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/jquery.mask.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/componentes/js_data_table.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/componentes/js_mascara.js"></script>
</body>

</html>
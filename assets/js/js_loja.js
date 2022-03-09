
$(function () {
    $('.filtro').find("input").on("change", function () {
        var promocao = $('#promocao').is(":checked");
        var maisvendido = $('#maisvendido').is(":checked");
        var lancamento = $('#lancamento').is(":checked");
        var categorias = [];

        $("input[name='categorias[]']:checked").each(function(){
            categorias.push($(this).val());
            console.log(categorias);
        });
        
        $.ajax({
            url: base_url + "filtro",
            type: 'POST',
            data: { categorias:categorias, promocao: promocao, maisvendido: maisvendido, lancamento: lancamento },
            dataType: 'json',
            success: function (data) {
                $('#listaInicial').css("display", "none");
                $('#filtro').css("display", "block");
                lista(data);
                
            }
        });
        
    });


});


function lista(data) {
    var resultado = "";
    $.each(data,function(key){

   
   resultado +=  "<div class='cel3'>" +
        "<div class='thumb'><img src='" + url_imagem + data[key].imagem + "'></div>"+
        "<span class='ttp'>"+ data[key].produto+"</span>"+
        "<span class='tpc'>"+ data[key].preco+"</span>"+
        "<div class='base-btn'>"+
            "<form method='POST' action='"+base_url + "carrinho/adicionar'>"+
                "<input type='hidden' name='id_produto' value='"+data[key].id_produto+"' />"+
                "<input type='hidden' name='qtde' value='1' />"+
                "<input type='hidden' name='preco' value='"+data[key].preco+"' />"+
                "<input class='btn' type='submit' value='Comprar' />"+
           "</form>"+
            "<a href='" + base_url + "produto /detalhes/" + data[key].id_produto + "' class='btn detalhe'>Detalhes</a>"+
    "</div>"+
    "</div>";
});

$('#listaFiltro').html(resultado);
}

function excluirItem(obj){
    var subtotal = $(obj).attr("data-valor");
    var id_item = $(obj).attr("data-idItem");

    $.ajax({
       url: base_url + "carrinho/excluirItemCarrinho",
       type:'POST',
       data:{id_item :id_item},
       dataType:'json',
       success:function(){
        $(obj).closest("tr").remove();
        atualizarTotal();
       } 
    });

    
}

function atualizarSubtotal(obj){
    var id_item  = $(obj).attr("data-idItem");
    var preco       = $(obj).attr("data-preco");
    var qtde        = $(obj).val();

    if(qtde <=0){
        $(obj).val(1);
        qtde = 1;
    }

    var subtotal = qtde * preco;
    $.ajax({
        url: base_url + "carrinho/alterarItem",
        type:'POST',
        data:{id_item :id_item,qtde:qtde},
        dataType:'json',
        success:function(){
            $(obj).closest("tr").find(".subtotal").html("R$ " + subtotal);
            atualizarTotal();
        } 
     });
    
    

}

function atualizarTotal(){
    var total = 0;

    for(var i=0; i<$('.p_quant').length; i++){
        var quant = $('.p_quant').eq(i);
        var preco = quant.attr("data-preco");
        var subtotal = preco * parseInt(quant.val());
        total += subtotal;
    }
    $("#valorTotal").html("R$ "+total);
}
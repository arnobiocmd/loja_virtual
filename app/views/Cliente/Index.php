<div class="conteudo">
    <div class="base-prod-home">


        <div class="carrinho">
            <div class="base-detalhes">
                <div class="base-carrinho">
                    <div class="caixa-carrinho">
                        <div class="caixa-entrega">
                            <div class="cel8 centro">
                                <form action="<?php echo URL_BASE."cliente/salvar"?>" method="post">

                                    <span class="titulo">cadastro de contato</span>
                                    <span class="titulo-m">cadastre-se nos campos abaixo</span>
                                    <small style="color:red">(*) campo obrigatório</small>
                                    <div class="rows">
                                        <label class="cel6">
                                            <small>Nome <b>*</b></small>
                                            <input type="text" name="txt_nome" value="" placeholder="Nome..">
                                        </label>

                                        <label class="cel6"> 
                                            <small>CPF:</small>
                                            <input type="text" name="cpf" value="" placeholder="CPF..">
                                            </label>

                                    </div>

                                    <div class="rows">
                                        <label class="cel4">
                                            <small>CEP:</small>
                                            <input type="text" name="cep" value="" class="busca_cep">
                                        </label>

                                        <label class="cel4">
                                            <small>Endereço<b>*</b></small>
                                            <input type="text" name="endereco" value="" placeholder="Endereço">
                                        </label>
                                        <label class="cel2">
                                            <small>Número:</small>
                                            <input type="text" name="numero" value="09">
                                        </label>

                                        <label class="cel2">
                                            <small>Estado:</small>
                                            <input type="text" name="estado" value="MA">
                                        </label>
                                    </div>
                                    <div class="rows">
                                        <label class="cel4">
                                            <small>Telefone<b>*</b></small>
                                            <input type="text" name="telefone" value="" placeholder="Telefone">
                                        </label>
                                        <label class="cel8">
                                            <small>Cidade <b>*</b></small>
                                            <input type="text" name="cidade" value="" placeholder="Cidade">
                                        </label>
                                    </div>
                                    <div class="rows">
                                       
                                        <label class="cel6">
                                            <small>Bairro <b>*</b></small>
                                            <input type="text" name="bairro" value="" placeholder="Bairro">
                                        </label>

                                        <div class="cel6">
                                            <small>Rua:</small>
                                            <input type="text" name="rua" value="Rua 30">
                                        </div>

                                       

                                        
                                    </div>

                                    <span class="titulo">Dados de usuário</span>
                                    <span class="titulo-m">cadastre seu email e senha para acesso</span>
                                    <div class="rows">
                                        <small>Nome:</small>
                                        <input type="text" name="name" value="Manoel Jailton Sousa">
                                    </div>
                                    <div class="rows">
                                        <div class="cel6">
                                            <small>E-mail:</small>
                                            <input type="email" name="email" value="mjailton@gmail.com">
                                        </div>

                                        <div class="cel6">
                                            <small>Senha:</small>
                                            <input type="password" name="password" value="974U1WM32m975041">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_cliente">
                                    <input type="submit" value="cadastrar contato" class="btn concluir entrar">

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
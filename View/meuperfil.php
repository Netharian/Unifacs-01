<?php

require "Header.php";

?>


<div class="container">

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <h1 class="text-center">Meus Pedidos</h1>
        </div>


        <table class="my-4 col-md-8 table table-striped">
            <thead>
                <tr>

                    <th>ID PEDIDO</th>
                    <th>VALOR</th>
                    <th>STATUS</th>
                    <th aria-label="avaliar pedido"></th>


                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>1231</td>
                    <td>Preparação</td>
                    <td><a href="./avaliar"class="text-primary">Avaliar</a>
                </tr>


            </tbody>


        </table>

        <div class="col-md-8">
            <h2 class="my-5 text-center">Editar dados cadastrais</h2>
            <form class="border rounded p-2 border-primary" action="novocliente" method="post" name="registerForm"
                    onsubmit="return validaSenha();">
                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">

                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                                <label class="mt-2" for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                                <label class="mt-2" for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" required>
                                <label class="mt-2" for="celular">Celular</label>
                                <input type="text" name="celular" id="celular" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="Email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                                <label class="mt-2" for="senha">Confirme a Senha</label>
                                <input type="password" name="confirmeSenha" id="confirmeSenha" class="form-control"
                                    required>
                                <label class="mt-2" for="rg">RG</label>
                                <input type="text" name="rg" id="rg" class="form-control" required>
                                <label class="mt-2" for="telefone">Telefone Fixo</label>
                                <input type="text" name="telefone" id="telefone" class="form-control">
                            </div>


                        </div>

                        <button type="submit" class="w-100 btn btn-primary mt-4">Salvar novos dados</button>
                    </div>
                </form>

        </div>

    </div>


</div>










<?php

require "Footer.php";

?>
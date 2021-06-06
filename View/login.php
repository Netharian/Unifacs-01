<?php require "Header.php"?>

    <div class="container my-5">
        <!-- Campo de Login -->
        <div class="row row-cols-sm-2 justify-content-between border border-info bg-light">
            <div class="col-sm-4 p-4">
                <h4 class="mb-4">Já tem cadastro? Faça o login!</h4>

                <form class="border rounded p-2 border-primary" action="" name="loginForm">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label class="mt-2" for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                        <button type="submit" class="btn btn-primary mt-4">Entrar</button>
                    </div>
                </form>

            </div>

            <!-- Formulário de cadastro -->
            <div class="col-sm-8 p-4">
                <h4 class="mb-4">Ainda não é cadastrado? Cadastre-se agora!</h4>
                <form class="border rounded p-2 border-primary" action="./login.html" method="post" name="registerForm"
                    onsubmit="return validaSenha();">
                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">

                                <label for="nome">Nome*</label>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                                <label class="mt-2" for="senha">Senha*</label>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                                <label class="mt-2" for="cpf">CPF*</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" required>
                                <label class="mt-2" for="celular">Celular*</label>
                                <input type="text" name="celular" id="celular" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="Email">Email*</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                                <label class="mt-2" for="senha">Confirme a Senha*</label>
                                <input type="password" name="confirmeSenha" id="confirmeSenha" class="form-control"
                                    required>
                                <label class="mt-2" for="rg">RG*</label>
                                <input type="text" name="rg" id="rg" class="form-control" required>
                                <label class="mt-2" for="telefone">Telefone Fixo</label>
                                <input type="text" name="telefone" id="telefone" class="form-control">
                            </div>


                        </div>
                        <span class="d-block mt-2 text-danger">* Campo Obrigatório</span>
                        <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
<script src="../scripts/formValidations.js"></script>

<?php require "Footer.php"?>
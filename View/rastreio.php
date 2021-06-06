<?php require "Header.php";?>
<style><?php include "styles/rastreio.css"?></style>



    <div class="container my-5">

        <div class="form-div">
            <form class="form-inline buscaPedido " action="./rastreio.html" method="post">

                <label class="pr-2" for="codigoProduto">Digite o código do seu pedido: </label>
                <input class="mr-2" type="text" id="codigoProduto" name="codigoProduto" placeholder="2345678">

                <button type="submit" class="btn btn-primary p-1">Pesquisar <i class="pl-1 fas fa-search"></i></button>
            </form>
        </div>

        <div class="statusBar mt-5 mx-auto">
            <div>
                <img class="preparo" src="./View/images/preparação.png" alt="Pedido Preparado">
                <span>Preparado</span>
            </div>

            <i class="fas fa-arrow-alt-circle-right fa-4x text-success"></i>
            <div>
                <img class="embalagem" src="./View/images/embalado.png" alt="Pedido Embalado">
                <span>Embalado</span>
            </div>

            <i class="fas fa-arrow-alt-circle-right fa-4x text-success"></i>
            <div>
                <img class="enviado" src="./View/images/enviado.png" alt="Pedido Enviado">
                <span>Enviado</span>
            </div>

            <i class="fas fa-arrow-alt-circle-right fa-4x text-muted"></i>
            <div>
                <img class="entregue" src="./View/images/entregue.png" alt="Pedido Entregue">
                <span>Entregue</span>
            </div>

        </div>

        <div class="logPedido">

            <div class="ultimoStatus mt-5">
                <span>Pedido encaminhado ao setor de entregas</span>
                <span>11/04/2021 10:51</span>
            </div>
            <table class="mt-5 mx-auto">
                <thead>
                    <th>Data</th>
                    <th>Situação</th>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            11/04/2021 10:51
                        </td>
                        <td>
                            Pedido encaminhado ao setor de entregas
                        </td>
                    </tr>
                     <tr>
                        <td>
                            11/04/2021 10:50
                        </td>
                        <td>
                            Itens do pedido conferidos e embalados
                        </td>
                    </tr>
                     <tr>
                        <td>
                            11/04/2021 10:25
                        </td>
                        <td>
                            Entrada no setor de conferência e embalagem
                        </td>
                    </tr>
                     <tr>
                        <td>
                            11/04/2021 10:21
                        </td>
                        <td>
                            Pedido encaminhado ao setor de conferência e embalagem
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11/04/2021 10:20
                        </td>
                        <td>
                            Itens do pedido selecionados
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11/04/2021 09:31
                        </td>
                        <td>
                            Entrada no setor de preparação
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11/04/2021 09:30
                        </td>
                        <td>
                            Pedido realizado
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>



    <script src="../scripts/rastreio.js"></script>
<?php require "Footer.php";?>
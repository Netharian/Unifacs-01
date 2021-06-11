<?php

require "Header.php";
session_start();
if (isset($_SESSION['usuario'])) {
    echo $_SESSION['usuario'];

}

?>
<div class="container-md ">
    <form class="my-5 mx-auto bg-light">
        <div class="row justify-content-center">
            <div class="col-md-6 g-6">

                <label for="endereco" class="form-label">Endereço de Entrega</label>
                <input type="text" id="endereco" name="endereco" class="form-control"
                    placeholder="Avenida do fim do mundo, 130" required>
                <label for="validade" class="form-label mt-2">Número do cartão</label>
                <input type="text" class="form-control" id="cartao" name="cartao" placeholder="9090 9090 9090 9090"
                    required>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="validade" class="form-label mt-2">Data de validade</label>
                        <input type="text" class="form-control" id="validade" name="validade" placeholder="12/2030"
                            required>
                    </div>
                    <div class="col-sm-6">
                        <label for="validade" class="form-label mt-2">CVV</label>
                        <input type="text" class="form-control" id="validade" name="validade" placeholder="999"
                            required>
                    </div>
                </div>
                <p class="mt-5 h4">Total do pedido: R$ 3.000,00</p>
                <button class="btn-success btn-lg w-100 mb-5 mt-2" type="submit">Finalizar Compra</button>
            </div>



        </div>

    </form>

</div>





<?php
require "Footer.php";
?>
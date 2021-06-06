<?php

require "Header.php";

?>
    <section class="container my-5 bg-light">
        <div class="row ">
            <div class="col-sm-3">
                <h2 class="text-info mt-4">Menu de Itens</h2>
                <nav class="">
                    <ul class="menuDeSelecao">

                        <li class="monitores my-1">

                            <a href="./monitores">Monitores</a>

                        </li>
                        <li class="processadores my-1">
                             <a href="./placasdevideo">Placas de Vídeo</a>
                        </li>
                        <li class="placasDeVideo my-1">
                             <a href="./processadores">Processadores</a>
                        </li>
                        <li class="placasMae my-1">
                            <a href="./placasmae">Placas-Mãe</a>
                        </li>
                        <li class="memoriasRam my-1">
                             <a href="./memoriasram">Memórias RAM</a>
                        </li>
                        <li class="tudo my-1">
                           <a href="./index">Mostar Todos</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-9">
                <h2 class="text-warning mt-4">Promoções</h2>
                <ul class="promocoes row row-cols-1 row-cols-lg-3 mx-auto border-top border-primary pt-4">

                    <?php for ($i = 0; $i < count($listaProdutos); $i++) {if ($listaProdutos[$i]->getPromo() == 1) {?>
                    <li class="d-inline-flex justify-content-around flex-fill mb-5">
                        <div class="card d-flex border-info" style="width: 15rem;">
                            <img src="<?php echo $listaProdutos[$i]->getImage(); ?>" class="card-img-top"
                                alt="<?php echo $listaProdutos[$i]->getName(); ?>">
                            <div class="card-body border-info bg-secondary">
                                <div>
                                    <p class="card-title text-justify text-white">
                                        <?php echo $listaProdutos[$i]->getName(); ?></p>
                                </div>
                                <div>

                                    <h4 class="text-center font-weight-bold text-warning">De <s>R$
                                            <?php echo $listaProdutos[$i]->getPrice(); ?></s>
                                    </h4>
                                    <p class=" h5 text-center text-danger font-weight-bold">Por apenas</p>
                                    <h4 class="text-center font-weight-bold text-warning">R$
                                        <?php echo $listaProdutos[$i]->getPrice() * 0.8; ?>
                                    </h4>
                                    <div>

                                        <div class="  text-center">
                                            <button class="btn-lg bg-success" type="button">
                                                <i class="fas fa-cart-plus px-2"></i><span
                                                    class="pr-2 text-white font-weight-bold">Comprar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <?php }}?>

                </ul>

                <h2 class="text-info mt-4">Lista de Produtos</h2>
                <ul class="listaDeProdutos row row-cols-1 row-cols-lg-3 mx-auto border-top border-primary pt-4">
                    <?php for ($i = 0; $i < count($listaProdutos); $i++) {if ($listaProdutos[$i]->getPromo() == 0) {?>
                    <li class="d-inline-flex justify-content-around flex-fill mb-5">
                        <div class="card d-flex border-info" style="width: 15rem;">
                            <img src="<?php echo $listaProdutos[$i]->getImage(); ?>" class="card-img-top"
                                alt="<?php echo $listaProdutos[$i]->getName(); ?>">
                            <div class="card-body border-info bg-secondary">
                                <div>
                                    <p class="card-title text-justify text-white">
                                        <?php echo $listaProdutos[$i]->getName(); ?></p>
                                </div>
                                <div>

                                    <h4 class="text-center font-weight-bold text-warning">De <s>R$
                                            <?php echo $listaProdutos[$i]->getPrice(); ?></s>
                                    </h4>
                                    <p class=" h5 text-center text-danger font-weight-bold">Por apenas</p>
                                    <h4 class="text-center font-weight-bold text-warning">R$
                                        <?php echo $listaProdutos[$i]->getPrice() * 0.8; ?>
                                    </h4>
                                    <div>

                                        <div class="  text-center">
                                            <button class="btn-lg bg-success" type="button">
                                                <i class="fas fa-cart-plus px-2"></i><span
                                                    class="pr-2 text-white font-weight-bold">Comprar</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <?php }}?>
                </ul>
            </div>
        </div>
    </section>


<?php require "Footer.php"?>

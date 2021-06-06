<?php require "Header.php";?>
<style><?php include "styles/carrinho.css"?></style>

    <div class="container mt-5 pb-5 bg-light">
        <h1>Produtos do Carrinho</h1>

    </div>
    <div class="container bg-light">
        <!-- Tabela dos produtos do carrinho -->
        <table>
            <!-- Títulos da tabela  -->
            <thead>
                <tr>
                    <th aria-label="product image"></th>
                    <th>PRODUTO</th>
                    <th>QUANTIDADE</th>
                    <th>SUBTOTAL</th>
                    <th aria-label="delete icon"></th>
                </tr>
            </thead>
            <!-- Itens da tabela -->
            <tbody>
                <tr data-testid="product">
                    <td>
                        <img src="https://images1.kabum.com.br/produtos/fotos/112891/placa-mae-asus-ex-b460m-v5-intel-lga-1200-matx-ddr4_1602251431_gg.jpg"
                            alt= />
                    </td>
                    <td>
                        <strong>Placa-Mãe Asus EX-B460M-V5, Intel LGA 1200, mATX, DDR4</strong>
                        <span>R$ 699,90</span>
                    </td>
                    <td>
                        <div>
                            <button id="decrementa" type="button" data-testid="decrement-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                            <input id="quantidade" type="text" data-testid="product-amount" readOnly value="1" />
                            <button id="incrementa" onclick="incrementar()" type="button" data-testid="increment-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td>
                        <strong>R$ 699,90</strong>
                    </td>
                    <td>
                        <button type="button" data-testid="remove-product">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z">
                                </path>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr data-testid="product">
                    <td>
                        <img src="https://images6.kabum.com.br/produtos/fotos/102746/memoria-adata-xpg-spectrix-d41-rgb-8gb-3000mhz-ddr4-cl16-ax4u300038g16-sb41_memoria-adata-xpg-spectrix-d41-rgb-8gb-3000mhz-ddr4-cl16-ax4u300038g16-sb41_1565358918_gg.jpg"
                            alt= />
                    </td>
                    <td>
                        <strong>Memória XPG Spectrix D41 TUF, RGB, 8GB, 3000MHz, DDR4, CL16 -
                            AX4U300038G16-SB41</strong>
                        <span>R$ 379,90</span>
                    </td>
                    <td>
                        <div>
                            <button type="button" data-testid="decrement-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                            <input type="text" data-testid="product-amount" readOnly value=2 />
                            <button type="button" data-testid="increment-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td>
                        <strong>R$ 759,80</strong>
                    </td>
                    <td>
                        <button type="button" data-testid="remove-product">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z">
                                </path>
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr data-testid="product">
                    <td>
                        <img src="https://images3.kabum.com.br/produtos/fotos/115733/processador-intel-core-i7-10700k-marvel-s-avengers-collector-s-edition-packaging-cache-16mb-5-1ghz-lga1200-bx8070110700ka_1598299408_gg.jpg"
                            alt= />
                    </td>
                    <td>
                        <strong>Processador Intel Core i7-10700K Marvel´s Avengers Collector´s Edition Packaging, Cache
                            16MB, 5.1GHz, LGA1200 - BX8070110700KA</strong>
                        <span>R$ 2799,90</span>
                    </td>
                    <td>
                        <div>
                            <button type="button" data-testid="decrement-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                            <input type="text" data-testid="product-amount" readOnly value=1 />
                            <button type="button" data-testid="increment-product">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td>
                        <strong>R$ 2.239,92</strong>
                    </td>
                    <td>
                        <button type="button" data-testid="remove-product">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z">
                                </path>
                            </svg>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
    <section class="container total bg-light mb-5">
        <button type="button">Finalizar pedido</button>
        <footer>
            <span>TOTAL</span>
            <strong>R$ 3.699,62</strong>
        </footer>

    </section>


    <footer class="text-center">
        <p>Supermercado CompraCerta </p>
        <p>CNPJ: 03.912.078/0001-70</p>
        <p>Telefone: 3323-5253</p>
        <p>Site desenvolvido por Lucas Melo</p>
    </footer>

    <script src="../scripts/carrinho.js"></script>
</body>

</html>

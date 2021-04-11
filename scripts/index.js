
//Lista de Produtos
const produtos = [{
        "id": 1,
        "nome": "Monitor Gamer LED LG 34´ UltraWide Curvo, Full HD, IPS, 2 HDMI, DisplayPort, FreeSync, 144Hz, 1ms, Altura Ajustável - 34GL750",
        "tipo": "Monitores",
        "preço": 3299.9,
        "imagem": "https://images7.kabum.com.br/produtos/fotos/107267/monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_monitor-gamer-led-lg-34-ultrawide-full-hd-ips-2-hdmi-displayport-freesync-144hz-1ms-altura-ajustavel-34gl750_1572618373_g.jpg"
    },
    {
        "id": 2,
        "nome": "Monitor LG LED 23.8´ Widescreen, Full HD, IPS, HDMI - 24MK430H",
        "tipo": "Monitores",
        "preço": 809.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/99866/monitor-lg-led-23-8-widescreen-full-hd-ips-hdmi-24mk430h_1547830365_gg.jpg"
    },
    {
        "id": 3,
        "nome": "Monitor LG LED 27´, 4K, UHD, IPS, HDMI / DisplayPort, AMD Radeon FreeSync, Altura Ajustável, VESA - 27MU58P-B.AWZ",
        "tipo": "Monitores",
        "preço": 1769.9,
        "imagem": "https://images8.kabum.com.br/produtos/fotos/130218/monitor-lg-led-27-4k-uhd-ips-hdmi-displayport-freesync-altura-ajustavel-27mu58p-b-awz_1606477437_g.jpg"
    },
    {
        "id": 4,
        "nome": "Monitor Gamer Acer LED 23.6´ Full HD, HDMI/DisplayPort, Free Sync, 165Hz, 0.5ms, Inclinação Ajustável, Preto/Vermelho - KG241Q Sbiip",
        "tipo": "Monitores",
        "preço": 1399.9,
        "imagem": "https://images0.kabum.com.br/produtos/fotos/111960/monitor-gamer-acer-led-23-6-full-hd-hdmi-displayport-free-sync-165hz-0-5ms-inclinacao-ajustavel-preto-vermelho-kg241q-sbiip_1588007082_gg.jpg"
    },
    {
        "id": 5,
        "nome": "Monitor LG LED 19.5´, HDMI/VGA, 2ms, Ajuste de Inclinação - 20MK400H-B",
        "tipo": "Monitores",
        "preço": 509.9,
        "imagem": "https://images9.kabum.com.br/produtos/fotos/111939/monitor-lg-led-19-5-hdmi-vga-2ms-ajuste-de-inclinacao-20mk400h-b_1585745761_gg.jpg"
    },
    {
        "id": 6,
        "nome": "Placa de Vídeo Gigabyte NVIDIA GeForce RTX 3070 Gaming OC 8G, 8gb, GDDR6 - GV-N3070GAMING OC-8GD",
        "tipo": "Placas de Vídeo",
        "preço": 8999.9,
        "imagem": "https://images9.kabum.com.br/produtos/fotos/130209/placa-de-video-gigabyte-nvidia-geforce-rtx-3070-gaming-oc-8g-8gb-gddr6-gv-n3070gaming-oc-8gd_1603479512_gg.jpg"
    },
    {
        "id": 7,
        "nome": "Placa de Vídeo MSI NVIDIA GeForce GTX 1050 Ti 4GT OC 4GB, GDDR5",
        "tipo": "Placas de Vídeo",
        "preço": 1484.9,
        "imagem": "https://images8.kabum.com.br/produtos/fotos/85798/85798_index_gg.jpg"
    },
    {
        "id": 8,
        "nome": "Placa de Vídeo Gigabyte GTX 1660 Super OC NVIDIA Geforce 6G, GDDR6 - GV-N166SOC-6GD",
        "tipo": "Placas de Vídeo",
        "preço": 3699.9,
        "imagem": "https://images2.kabum.com.br/produtos/fotos/105132/-placa-de-video-gigabyte-gtx-1660-super-oc-nvidia-geforce-6g-gddr6-gv-n166soc-6gd_-placa-de-video-gigabyte-gtx-1660-super-oc-nvidia-geforce-6g-gddr6-gv-n166soc-6gd_1572378531_gg.jpg"
    },
    {
        "id": 9,
        "nome": "Placa de Vídeo PowerColor AMD Radeon RX 550, 4GB, DDR5 - AXRX 550 4GBD5-DH",
        "tipo": "Placas de Vídeo",
        "preço": 899.9,
        "imagem": "https://images8.kabum.com.br/produtos/fotos/114478/placa-de-video-powercolor-amd-radeon-rx-550-4gb-ddr5-axrx-550-4gbd5-dh_1591794749_gg.jpg"
    },
    {
        "id": 10,
        "nome": "Placa de Vídeo EVGA NVIDIA GeForce GT 710 2GB, DDR3 - 02G-P3-2713-KR",
        "tipo": "Placas de Vídeo",
        "preço": 419.9,
        "imagem": "https://images0.kabum.com.br/produtos/fotos/77520/77520_index_gg.jpg"
    },
    {
        "id": 11,
        "nome": "Processador AMD Ryzen 5 1600, Cache 19MB, 3.2GHz (3.6GHz Max Turbo), AM4 - YD1600BBAFBOX",
        "tipo": "Processadores",
        "preço": 749.9,
        "imagem": "https://images5.kabum.com.br/produtos/fotos/107545/processador-amd-ryzen-5-1600-cache-19mb-3-2ghz-3-6ghz-max-turbo-am4-yd1600bbafbox_1573653284_gg.jpg"
    },
    {
        "id": 12,
        "nome": "Processador Intel Core i5-9400F Coffee Lake, Cache 9MB, 2.9GHz (4.1GHz Max Turbo), LGA 1151, Sem Vídeo - BX80684I59400F",
        "tipo": "Processadores",
        "preço": 959.9,
        "imagem": "https://images3.kabum.com.br/produtos/fotos/99683/processador-intel-core-i5-9400f-coffee-lake-cache-9mb-2-9ghz-4-1ghz-max-turbo-lga-1151-bx80684i59400f_processador-intel-core-i5-9400f-coffee-lake-cache-9mb-2-9ghz-4-1ghz-max-turbo-lga-1151-bx80684i59400f_1564429485_gg.jpg"
    },
    {
        "id": 13,
        "nome": "Processador AMD Ryzen 5 3600 Cache 32MB 3.6GHz(4.2GHz Max Turbo) AM4, Sem Vídeo - 100-100000031BOX",
        "tipo": "Processadores",
        "preço": 1599.9,
        "imagem": "https://images8.kabum.com.br/produtos/fotos/102438/processador-amd-ryzen-5-3600-cache-32mb-3-6ghz-4-2ghz-max-turbo-am4-100-100000031box_processador-amd-ryzen-5-3600-cache-32mb-3-6ghz-4-2ghz-max-turbo-am4-100-100000031box_1562606710_gg.jpg"
    },
    {
        "id": 14,
        "nome": "Processador Intel Core i7-10700K, Cache 16MB, 3.8GHz (5.1GHz Max Turbo), LGA 1200 - BX8070110700K",
        "tipo": "Processadores",
        "preço": 2629.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/112996/processador-intel-core-i7-10700k-cache-16mb-3-8ghz-lga-1200-bx8070110700k_1589208570_gg.jpg"
    },
    {
        "id": 15,
        "nome": "Processador Intel Core i7-10700K Marvel´s Avengers Collector´s Edition Packaging, Cache 16MB, 5.1GHz, LGA1200 - BX8070110700KA",
        "tipo": "Processadores",
        "preço": 2799.9,
        "imagem": "https://images3.kabum.com.br/produtos/fotos/115733/processador-intel-core-i7-10700k-marvel-s-avengers-collector-s-edition-packaging-cache-16mb-5-1ghz-lga1200-bx8070110700ka_1598299408_gg.jpg"
    },
    {
        "id": 16,
        "nome": "Placa-Mãe Asus EX-B460M-V5, Intel LGA 1200, mATX, DDR4",
        "tipo": "Placas-Mãe",
        "preço": 699.9,
        "imagem": "https://images1.kabum.com.br/produtos/fotos/112891/placa-mae-asus-ex-b460m-v5-intel-lga-1200-matx-ddr4_1602251431_gg.jpg"
    },
    {
        "id": 17,
        "nome": "Placa-Mãe Gigabyte B450M DS3H, AMD, mATX, DDR4",
        "tipo": "Placas-Mãe",
        "preço": 629.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/98076/98076_2_1534877848_gg.jpg"
    },
    {
        "id": 18,
        "nome": "Placa-Mãe Gigabyte Aorus B450 Aorus Pro Wi-Fi, AMD AM4, ATX, DDR4",
        "tipo": "Placas-Mãe",
        "preço": 1199.9,
        "imagem": "https://images5.kabum.com.br/produtos/fotos/98075/98075_4_1534864577_gg.jpg"
    },
    {
        "id": 19,
        "nome": "Placa-Mãe Asus Prime B450M Gaming/BR, AMD AM4, mATX, DDR4",
        "tipo": "Placas-Mãe",
        "preço": 649.9,
        "imagem": "https://images4.kabum.com.br/produtos/fotos/99504/placa-mae-asus-para-amd-am4-matx-prime-b450m-gaming-br-ddr4__1545143134_gg.jpg"
    },
    {
        "id": 20,
        "nome": "Placa-Mãe ASRock H410M-HDV/M.2, Intel LGA 1200, Micro ATX, DDR4",
        "tipo": "Placas-Mãe",
        "preço": 599.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/113206/placa-mae-asrock-h410m-hdv-m-2-intel-lga-1200-micro-atx-ddr4-_1594828602_gg.jpg"
    },
    {
        "id": 21,
        "nome": "Memória HyperX Fury, 8GB, 2666MHz, DDR4, CL16, Preto - HX426C16FB3/8",
        "tipo": "Memórias RAM",
        "preço": 354.9,
        "imagem": "https://images7.kabum.com.br/produtos/fotos/103547/memoria-hyperx-fury-8gb-2666mhz-ddr4-cl16-preto-hx426c16fb3-8_memoria-hyperx-fury-8gb-2666mhz-ddr4-cl16-preto-hx426c16fb3-8_1566487475_gg.jpg"
    },
    {
        "id": 22,
        "nome": "Memória XPG Spectrix D41 TUF, RGB, 8GB, 3000MHz, DDR4, CL16 - AX4U300038G16-SB41",
        "tipo": "Memórias RAM",
        "preço": 379.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/102746/memoria-adata-xpg-spectrix-d41-rgb-8gb-3000mhz-ddr4-cl16-ax4u300038g16-sb41_memoria-adata-xpg-spectrix-d41-rgb-8gb-3000mhz-ddr4-cl16-ax4u300038g16-sb41_1565358918_gg.jpg"
    },
    {
        "id": 23,
        "nome": "Memória Corsair Vengeance LPX, 8GB, 2400MHz, DDR4, CL16, Preto - CMK8GX4M1A2400C16",
        "tipo": "Memórias RAM",
        "preço": 329.9,
        "imagem": "https://images1.kabum.com.br/produtos/fotos/84471/84471_index_gg.jpg"
    },
    {
        "id": 24,
        "nome": "Memória Crucial Ballistix 8GB DDR4 3000 Mhz, CL15, Preto - BL8G30C15U4B",
        "tipo": "Memórias RAM",
        "preço": 359.9,
        "imagem": "https://images4.kabum.com.br/produtos/fotos/133504/memoria-crucial-ballistix-8gb-ddr4-3000-mhz-cl15-preto-bl8g30c15u4b_1607631000_gg.jpg"
    },
    {
        "id": 25,
        "nome": "Memória Crucial Ballistix 8GB DDR4 3000 Mhz, CL15, Branco - BL8G30C15U4W",
        "tipo": "Memórias RAM",
        "preço": 349.9,
        "imagem": "https://images6.kabum.com.br/produtos/fotos/133506/memoria-crucial-ballistix-8gb-ddr4-3000-mhz-cl15-branco-bl8g30c15u4r_1607631689_gg.jpg"
    }
];

const promocoes = document.querySelector('.promocoes'); //seletor da área de promoções
const listaDeProdutos = document.querySelector('.listaDeProdutos'); //seletor da lista de produtos
const menuDeSelecao = document.querySelector('.menuDeSelecao'); //seletor do menu de seleção dos tipos de produtos
const busca = document.querySelector('.busca'); //seletor da barra de busca

//Aplicando desconto nos itens acima de 2000 reais que serão exibidos na tela de promoções
const produtosPromocionais = produtos.filter(produtos => produtos.preço > 2000)
    .map(produto => ({
        id: produto.id,
        nome: produto.nome,
        tipo: produto.tipo,
        preço: produto.preço * 0.8,
        imagem: produto.imagem
    }));

//Selecionando os produtos que não estão em promoção
const produtosFiltrados = produtos.filter(produto => produto.preço <= 2000);

//Função para carregar todos os produtos em suas respectivas áreas
function loadAll() {

    promocoes.innerHTML = produtosPromocionais.map(produto => (`
   <li class="d-inline-flex justify-content-around flex-fill mb-5">
                <div class="card d-flex border-info" style="width: 15rem;">
                    <img src=${produto.imagem}
                        class="card-img-top" alt=${produto.nome}>
                    <div class="card-body border-info bg-secondary">
                    <div>
                    <p class="card-title text-justify text-white">${produto.nome}</p>
                    </div>
                        <div >
                        <h4 class="text-center font-weight-bold text-warning">${new Intl.NumberFormat('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }).format(produto.preço)} 
                        </h4> 
                        <div>
                                             
                        <div class="  text-center">
                        <button 
                        class="btn-lg bg-success"
                        type="button"
                        >
                             <i class="fas fa-cart-plus px-2"></i><span class="pr-2 text-white font-weight-bold">Comprar</span>
                            </button>
                            </div>
                    </div>
                </div>
            </li>
    `)).join("");




    listaDeProdutos.innerHTML = produtosFiltrados.map(produto => (`
   <li class="d-inline-flex justify-content-around flex-fill mb-5">
                <div class="card  d-flex border-info" style="width: 15rem;">
                    <img src=${produto.imagem}
                        class="card-img-top" alt=${produto.nome}>
                    <div class="card-body  border-info bg-secondary">
                    <div>
                    <p class="card-title text-justify text-white">${produto.nome}</p>
                    </div>
                        <div >
                        <h4 class="text-center font-weight-bold text-warning">${new Intl.NumberFormat('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }).format(produto.preço)} 
                        </h4> 
                        <div>
                                             
                        <div class="  text-center">
                        <button 
                        class="btn-lg bg-success"
                        type="button"
                        >
                             <i class="fas fa-cart-plus px-2"></i><span class="pr-2 text-white font-weight-bold">Comprar</span>
                            </button>
                            </div>
                    </div>
                </div>
            </li>
    `

    )).join("");

}

//Evento que acontece ao carregar o site
document.addEventListener('DOMContentLoaded', loadAll);

//Função que mostra os produtos em promoção de acordo com seu tipo
function loadPromoProducts(tipo) {

    promocoes.innerHTML = produtosPromocionais.filter(produto => produto.tipo == tipo || produto.nome.toLowerCase().includes(tipo)).map(produto => (`
        <li class="d-inline-flex justify-content-around flex-fill mb-5">
                <div class="card d-flex border-info" style="width: 15rem;">
                    <img src=${produto.imagem}
                        class="card-img-top" alt=${produto.nome}>
                    <div class="card-body border-info bg-secondary">
                    <div>
                    <p class="card-title text-justify text-white">${produto.nome}</p>
                    </div>
                        <div >
                        <h4 class="text-center font-weight-bold text-warning">${new Intl.NumberFormat('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }).format(produto.preço)} 
                        </h4> 
                        <div>
                                             
                        <div class="text-center">
                        <button 
                        class="btn-lg bg-success"
                        type="button"
                        >
                             <i class="fas fa-cart-plus px-2"></i><span class="pr-2 text-white font-weight-bold">Comprar</span>
                            </button>
                            </div>
                    </div>
                </div>
            </li>
            `)).join("");



}

//Função que mostra os produtos de acordo com seu tipo
function loadProducts(tipo) {
    listaDeProdutos.innerHTML = produtosFiltrados.filter(produto => produto.tipo == tipo || produto.nome.toLowerCase().includes(tipo)).map(produto => (
        `
        <li class="d-inline-flex justify-content-around flex-fill mb-5">
                <div class="card d-flex border-info" style="width: 15rem;">
                    <img src=${produto.imagem}
                        class="card-img-top" alt=${produto.nome}>
                    <div class="card-body border-info bg-secondary">
                    <div>
                    <p class="card-title text-justify text-white">${produto.nome}</p>
                    </div>
                        <div >
                        <h4 class="text-center font-weight-bold text-warning">${new Intl.NumberFormat('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }).format(produto.preço)} 
                        </h4> 
                        <div>
                                             
                        <div class="  text-center">
                        <button 
                        class="btn-lg bg-success"
                        type="button"
                        >
                             <i class="fas fa-cart-plus px-2"></i><span class="pr-2 text-white font-weight-bold">Comprar</span>
                            </button>
                            </div>
                    </div>
                </div>
            </li>
    `


    )).join("");


}

menuDeSelecao.addEventListener('click', e => {
    e.preventDefault();
    
    if(e.path.length < 10){
        return
    } else if (e.target.innerText.trim() == "Mostrar Todos") {

        loadAll();


    } else {
        loadPromoProducts(e.target.innerText.trim());
        loadProducts(e.target.innerText.trim())
        console.log((e.target.innerText.trim()));

    }



});
console.log(busca)


busca.addEventListener('submit', e => {
    
    e.preventDefault();
    loadPromoProducts(busca.input.value.trim().toLowerCase());
    loadProducts(busca.input.value.trim().toLowerCase());

    
})


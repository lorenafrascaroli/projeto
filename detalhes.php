<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: /projeto/login.php");
    exit;
}


$carro = $_GET["carro"] ?? "porsche";

$carros = [

    "porsche" => [
        "nome" => "PORSCHE CAYENNE",
        "versao" => "3.0 V6 E-HYBRID COUPE AWD TIPTRONIC S",
        "imagem" => "https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261006/porsche-cayenne-3.0-v6-ehybrid-coupe-awd-tiptronic-s-wmimagem10474775514.jpg?s=fill&w=552&h=414&q=60",
        "cidade" => "Americana - SP",
        "ano" => "2024/2024",
        "km" => "18.000",
        "cambio" => "Automatico",
        "carroceria" => "SUV",
        "combustivel" => "Hibrido",
        "placa" => "5",
        "cor" => "Preto",
        "troca" => "Sim",
        "preco" => "R$ 689.990",
        "fipe" => true
    ],

    "rav4" => [
        "nome" => "TOYOTA RAV4",
        "versao" => "2.5 VVTIE HYBRID SX CONNECT AWD CVT",
        "imagem" => "https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261005/toyota-rav4-2.5-vvtie-hybrid-sx-connect-awd-cvt-wmimagem12134630394.jpg?s=fill&w=552&h=414&q=60",
        "cidade" => "Americana - SP",
        "ano" => "2024/2024",
        "km" => "25.000",
        "cambio" => "Automatico",
        "carroceria" => "SUV",
        "combustivel" => "Hibrido",
        "placa" => "7",
        "cor" => "Branco",
        "troca" => "Sim",
        "preco" => "R$ 219.990",
        "fipe" => false
    ],

    "corolla" => [
        "nome" => "TOYOTA COROLLA CROSS",
        "versao" => "1.8 VVTIE HYBRID FLEX XRX CVT",
        "imagem" => "https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261006/toyota-corolla-cross-1.8-vvti-hybrid-flex-xrx-cvt-wmimagem18265959049.jpg?s=fill&w=552&h=414&q=60",
        "cidade" => "Americana - SP",
        "ano" => "2024/2024",
        "km" => "22.000",
        "cambio" => "Automatico",
        "carroceria" => "SUV",
        "combustivel" => "Hibrido Flex",
        "placa" => "3",
        "cor" => "Cinza",
        "troca" => "Sim",
        "preco" => "R$ 179.990",
        "fipe" => true
    ],

    "ram" => [
        "nome" => "RAM CLASSIC",
        "versao" => "5.7 V8 GASOLINA LARAMIE CD 4X4 AUTOMATICO",
        "imagem" => "https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261003/ram-classic-5.7-v8-gasolina-laramie-cd-4x4-automatico-wmimagem15033014849.jpg?s=fill&w=552&h=414&q=60",
        "cidade" => "Barueri - SP",
        "ano" => "2023/2023",
        "km" => "61.412",
        "cambio" => "Automatico",
        "carroceria" => "Picape",
        "combustivel" => "Gasolina",
        "placa" => "3",
        "cor" => "Cinza",
        "troca" => "Sim",
        "preco" => "R$ 299.990",
        "fipe" => false
    ]

];

$dados = $carros[$carro] ?? $carros["porsche"];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $dados["nome"]; ?> | AutoPrime</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #ffffff;
            color: #202020;
        }

        header {
            width: 100%;
            height: 75px;
            background: #ffffff;
            border-bottom: 1px solid #eeeeee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
        }

        .logo span {
            color: #d71920;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: #333333;
            font-weight: bold;
        }

        .btn-conta {
            background: #d71920;
            color: #ffffff;
            padding: 12px 20px;
            border-radius: 7px;
        }

        .pagina {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .voltar {
            display: inline-block;
            margin-bottom: 25px;
            color: #555555;
            text-decoration: none;
            font-weight: bold;
        }

        .voltar:hover {
            color: #d71920;
        }

        .topo {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        .titulo h1 {
            font-size: 42px;
            color: #202020;
        }

        .versao {
            margin-top: 10px;
            color: #666666;
            font-size: 18px;
        }

        .oferta {
            background: #f51645;
            color: #ffffff;
            padding: 11px 25px;
            border-radius: 25px;
            font-weight: bold;
        }

        .foto {
            width: 100%;
            height: 430px;
            margin-top: 30px;
            border-radius: 15px;
            overflow: hidden;
            background: #f5f5f5;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .selo-detalhes {
            display: inline-block;
            margin-top: 18px;
            padding: 8px 14px;
            background: #20a65a;
            color: #ffffff;
            border-radius: 6px;
            font-size: 13px;
            font-weight: bold;
        }

        .informacoes {
            margin-top: 35px;
            padding: 30px 0;
            border-top: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
        }

        .cidade {
            margin-bottom: 35px;
        }

        .cidade span,
        .item span,
        .preco span {
            display: block;
            color: #777777;
            margin-bottom: 7px;
        }

        .cidade strong {
            font-size: 23px;
        }

        .dados {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
        }

        .item strong {
            font-size: 21px;
        }

        .item i {
            color: #d71920;
            margin-right: 6px;
        }

        .preco-area {
            margin-top: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .preco strong {
            color: #d71920;
            font-size: 32px;
        }

        .btn-financiamento {
            display: inline-block;
            padding: 16px 28px;
            background: #d71920;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-financiamento:hover {
            background: #b51218;
        }

        footer {
            margin-top: 60px;
            background: #171717;
            color: #ffffff;
            text-align: center;
            padding: 30px;
        }

        footer span {
            color: #d71920;
        }

        @media (max-width: 800px) {

            .topo {
                flex-direction: column;
            }

            .titulo h1 {
                font-size: 32px;
            }

            .dados {
                grid-template-columns: 1fr 1fr;
            }

            .preco-area {
                flex-direction: column;
                align-items: flex-start;
            }

        }

        @media (max-width: 500px) {

            nav a {
                display: none;
            }

            .dados {
                grid-template-columns: 1fr;
            }

            .foto {
                height: 280px;
            }

        }

    </style>

</head>

<body>

    <header>

        <div class="logo">
            Auto<span>Prime</span>
        </div>

        <nav>

            <a href="/projeto/entrada.php">
                Inicio
            </a>

            <a href="/projeto/carros.php">
                Carros
            </a>

            <a href="/projeto/index.php" class="btn-conta">
                Minha conta
            </a>

        </nav>

    </header>


    <main class="pagina">

        <a href="/projeto/carros.php" class="voltar">
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para carros
        </a>


        <section class="topo">

            <div class="titulo">

                <h1>
                    <?php echo $dados["nome"]; ?>
                </h1>

                <p class="versao">
                    <?php echo $dados["versao"]; ?>
                </p>

            </div>


            <div class="oferta">
                Oferta destaque
            </div>

        </section>


        <div class="foto">

            <img
                src="<?php echo $dados["imagem"]; ?>"
                alt="<?php echo $dados["nome"]; ?>">

        </div>


        <?php if ($dados["fipe"]) { ?>

            <div class="selo-detalhes">
                ABAIXO DA FIPE
            </div>

        <?php } ?>


        <section class="informacoes">

            <div class="cidade">

                <span>
                    Cidade
                </span>

                <strong>
                    <?php echo $dados["cidade"]; ?>
                </strong>

            </div>


            <div class="dados">

                <div class="item">

                    <span>
                        <i class="fa-regular fa-calendar"></i>
                        Ano
                    </span>

                    <strong>
                        <?php echo $dados["ano"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        <i class="fa-solid fa-gauge-high"></i>
                        KM
                    </span>

                    <strong>
                        <?php echo $dados["km"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        <i class="fa-solid fa-gears"></i>
                        Cambio
                    </span>

                    <strong>
                        <?php echo $dados["cambio"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        <i class="fa-solid fa-car"></i>
                        Carroceria
                    </span>

                    <strong>
                        <?php echo $dados["carroceria"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        <i class="fa-solid fa-gas-pump"></i>
                        Combustivel
                    </span>

                    <strong>
                        <?php echo $dados["combustivel"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        Final de placa
                    </span>

                    <strong>
                        <?php echo $dados["placa"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        Cor
                    </span>

                    <strong>
                        <?php echo $dados["cor"]; ?>
                    </strong>

                </div>


                <div class="item">

                    <span>
                        Aceita troca
                    </span>

                    <strong>
                        <?php echo $dados["troca"]; ?>
                    </strong>

                </div>

            </div>


            <div class="preco-area">

                <div class="preco">

                    <span>
                        Valor do carro
                    </span>

                    <strong>
                        <?php echo $dados["preco"]; ?>
                    </strong>

                </div>


                <a
                    href="/projeto/financiamento.php?carro=<?php echo $carro; ?>"
                    class="btn-financiamento">

                    <i class="fa-solid fa-credit-card"></i>

                    Simular financiamento

                </a>

            </div>

        </section>

    </main>


    <footer>

        <p>
            Auto<span>Prime</span> - Seu proximo carro esta aqui.
        </p>

    </footer>

</body>

</html>
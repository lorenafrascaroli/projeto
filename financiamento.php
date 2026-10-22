<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>


<?php
// Pagina de financiamento do AutoPrime
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Financiamento | AutoPrime</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #111;
            color: white;
            min-height: 100vh;
        }

        header {
            background: #191919;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #e00000;
        }

        header h1 {
            font-size: 30px;
            color: #e00000;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ff3030;
        }

        .pagina {
            max-width: 1100px;
            margin: 65px auto;
            padding: 20px;
            text-align: center;
        }

        .etiqueta {
            color: #ff3030;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .pagina h2 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .descricao {
            color: #bbb;
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 45px;
        }

        .bancos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .banco {
            background: #1c1c1c;
            padding: 42px 30px;
            border: 1px solid #383838;
            border-radius: 18px;
            transition: 0.3s;
            text-align: left;
        }

        .banco:hover {
            transform: translateY(-7px);
            border-color: #e00000;
            box-shadow: 0 10px 30px #e0000020;
        }

        .numero {
            display: inline-block;
            background: #e00000;
            color: white;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .banco h3 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .banco p {
            color: #bbb;
            line-height: 1.7;
            min-height: 55px;
            margin-bottom: 30px;
        }

        .linha {
            width: 55px;
            height: 4px;
            background: #e00000;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .botao {
            display: block;
            background: #e00000;
            color: white;
            text-decoration: none;
            text-align: center;
            padding: 16px;
            border-radius: 9px;
            font-weight: bold;
            transition: 0.3s;
        }

        .botao:hover {
            background: #b80000;
        }

        .voltar {
            display: inline-block;
            margin-top: 40px;
            color: #bbb;
            text-decoration: none;
            font-weight: bold;
        }

        .voltar:hover {
            color: #ff3030;
        }

        footer {
            text-align: center;
            color: #777;
            padding: 25px;
            border-top: 1px solid #292929;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            header {
                padding: 22px;
                flex-direction: column;
                gap: 20px;
            }

            nav {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 18px;
            }

            nav a {
                margin: 0;
            }

            .pagina {
                margin: 35px auto;
            }

            .pagina h2 {
                font-size: 32px;
            }

            .bancos {
                grid-template-columns: 1fr;
            }

            .banco {
                padding: 30px 24px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>AutoPrime</h1>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="carros.php">Carros</a>
            <a href="cadastro.php">Cadastro</a>
        </nav>
    </header>

    <main class="pagina">

        <p class="etiqueta">AUTOPRIME FINANCIAMENTO</p>

        <h2>Seu proximo carro com voce.</h2>

        <p class="descricao">
            Escolha uma das nossas opcoes de financiamento
            e continue para a proxima etapa.
        </p>

        <section class="bancos">

            <div class="banco">

                <span class="numero">OPCAO 01</span>

                <div class="linha"></div>

                <h3>Santander</h3>

                <p>
                    Conheca as possibilidades de financiamento
                    para realizar sua proxima compra.
                </p>

                <a href="avaliacao.php?banco=Santander" class="botao">
                    Continuar com Santander
                </a>

            </div>

            <div class="banco">

                <span class="numero">OPCAO 02</span>

                <div class="linha"></div>

                <h3>Banco BV</h3>

                <p>
                    Confira esta opcao e continue sua jornada
                    para conquistar seu proximo veiculo.
                </p>

                <a href="avaliacao.php?banco=BV" class="botao">
                    Continuar com BV
                </a>

            </div>

        </section>

        <a href="carros.php" class="voltar">
            Voltar para os carros
        </a>

    </main>

    <footer>
        AutoPrime - Encontre seu proximo carro.
    </footer>

</body>

</html>



<?php
// Pagina final do AutoPrime
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Obrigado | AutoPrime</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #c90000, #780000);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 20px;
        }

        .caixa {
            width: 90%;
            max-width: 600px;
            background: white;
            color: #222;
            padding: 50px 35px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .icone {
            font-size: 55px;
            margin-bottom: 20px;
        }

        h1 {
            color: #c90000;
            font-size: 34px;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .botao {
            display: inline-block;
            background: #c90000;
            color: white;
            text-decoration: none;
            padding: 14px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            margin: 5px;
        }

        .botao:hover {
            background: #9e0000;
            transform: scale(1.03);
        }

        .instagram {
            margin-top: 25px;
        }

        .contatos {
            margin-top: 25px;
        }

        .rodape {
            margin-top: 25px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>

    <main class="caixa">

        <div class="icone">🚗</div>

        <h1>Obrigado pela compra!</h1>

        <p>
            Obrigada por comprar na loja AutoPrime.
            Esperamos que voce aproveite muito seu novo carro!
        </p>

        <a href="/projeto/index.php" class="botao">
            Voltar para o inicio
        </a>

        <div class="contatos">

            <p>Fale com a AutoPrime e acompanhe nossas novidades!</p>

            <a href="https://www.instagram.com/nr_autossbo/"
               target="_blank"
               class="botao">
                📷 Instagram
            </a>

            <a href="https://wa.me/55199999999"
               target="_blank"
               class="botao">
                🟢 WhatsApp
            </a>

        </div>

        <div class="rodape">
            AutoPrime
        </div>

    </main>

</body>

</html>
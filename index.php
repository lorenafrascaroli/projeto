
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoPrime</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #151515;
            color: white;
        }

        .pagina {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            background: linear-gradient(135deg, #151515, #252525);
        }

        .conteudo {
            width: 100%;
            max-width: 1100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .texto {
            max-width: 560px;
        }

        .logo {
            color: #d71920;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 55px;
            line-height: 1.1;
            margin-bottom: 25px;
        }

        h1 span {
            color: #d71920;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .descricao {
            color: #cccccc;
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .botao {
            display: inline-block;
            padding: 15px 32px;
            background: #d71920;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .botao:hover {
            background: #aa1117;
        }

        .carro {
            width: 480px;
        }

        .carro img {
            width: 100%;
            display: block;
        }

        .rodape {
            position: fixed;
            bottom: 18px;
            width: 100%;
            text-align: center;
            color: #777;
            font-size: 12px;
        }

    </style>

</head>

<body>

    <main class="pagina">

        <div class="conteudo">

            <section class="texto">

                <div class="logo">
                    AUTOPRIME
                </div>

                <h1>
                    Bem-vindo a
                    <span>AutoPrime</span>
                </h1>

                <h2>
                    Quem somos?
                </h2>

                <p class="descricao">
                    A AutoPrime e uma loja de veiculos que busca oferecer
                    qualidade, seguranca e praticidade para quem procura
                    seu proximo carro.
                </p>

                <a href="/projeto/cadastro.php" class="botao">
                    Criar conta
                </a>

            </section>

            <section class="carro">

                <img
                    src="https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261006/porsche-cayenne-3.0-v6-ehybrid-coupe-awd-tiptronic-s-wmimagem10474775514.jpg?s=fill&w=552&h=414&q=60"
                    alt="Porsche Cayenne">

            </section>

        </div>

        
        </div>

    </main>

</body>

</html>



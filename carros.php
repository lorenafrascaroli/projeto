
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carros | AutoPrime</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            color: #222;
        }

        header {
            background: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #d71920;
        }

        .sair {
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }

        .sair:hover {
            color: #d71920;
        }

        .conteudo {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .titulo {
            margin-bottom: 30px;
        }

        .titulo h1 {
            font-size: 28px;
        }

        .titulo p {
            margin-top: 6px;
            color: #777;
        }

        .video-carro {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
            display: block;
            background: #111;
            margin-bottom: 25px;
        }

        .chamada-loja {
            text-align: center;
            background: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .chamada-loja span {
            color: #d71920;
            font-size: 14px;
            font-weight: bold;
        }

        .chamada-loja h2 {
            margin-top: 8px;
            font-size: 26px;
        }

        .chamada-loja p {
            margin-top: 8px;
            color: #777;
            font-size: 15px;
        }

        .carros {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .carro {
            background: white;
            padding: 18px;
            border-radius: 15px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
        }

        .imagem {
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
        }

        .imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carro h2 {
            margin-top: 15px;
            font-size: 19px;
        }

        .carro p {
            margin-top: 7px;
            color: #777;
            font-size: 14px;
        }

        .detalhes {
            display: block;
            margin-top: 15px;
            padding: 11px;
            text-align: center;
            text-decoration: none;
            background: #d71920;
            color: white;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .detalhes:hover {
            background: #aa1117;
        }

        @media (max-width: 800px) {

            .carros {
                grid-template-columns: 1fr;
            }

            header {
                padding: 20px;
            }

        }

    </style>

</head>

<body>

    <header>

        <div class="logo">
            AutoPrime
        </div>

        <a href="index.php" class="sair">
            Sair
        </a>

    </header>

    <main class="conteudo">

        <div class="titulo">

            <h1>Encontre seu proximo carro</h1>

            <p>Confira nossos veiculos disponiveis.</p>

        </div>

        <video
            class="video-carro"
            src="assets/Electric_sports_car_headlights_p…_20261008142549.mp4"
            autoplay
            loop
            muted
            playsinline>
        </video>

        <div class="chamada-loja">

            <span>AutoPrime</span>

            <h2>Seu proximo carro esta aqui.</h2>

            <p>
                Qualidade, seguranca e os melhores veiculos para voce.
            </p>

        </div>

        <section class="carros">

            <article class="carro">

                <div class="imagem">

                    <img
                        src="https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261006/porsche-cayenne-3.0-v6-ehybrid-coupe-awd-tiptronic-s-wmimagem10474775514.jpg?s=fill&w=552&h=414&q=60"
                        alt="Porsche Cayenne">

                </div>

                <h2>Porsche Cayenne</h2>

                <p>2024 | Automatico</p>

                <a href="detalhes.php?carro=porsche" class="detalhes">
                    Ver detalhes
                </a>

            </article>


            <article class="carro">

                <div class="imagem">

                    <img
                        src="https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261005/toyota-rav4-2.5-vvtie-hybrid-sx-connect-awd-cvt-wmimagem12134630394.jpg?s=fill&w=552&h=414&q=60"
                        alt="Toyota RAV4">

                </div>

                <h2>Toyota RAV4</h2>

                <p>2024 | Automatico</p>

                <a href="detalhes.php?carro=rav4" class="detalhes">
                    Ver detalhes
                </a>

            </article>


            <article class="carro">

                <div class="imagem">

                    <img
                        src="https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261006/toyota-corolla-cross-1.8-vvti-hybrid-flex-xrx-cvt-wmimagem18265959049.jpg?s=fill&w=552&h=414&q=60"
                        alt="Toyota Corolla Cross">

                </div>

                <h2>Toyota Corolla Cross</h2>

                <p>2024 | Automatico</p>

                <a href="detalhes.php?carro=corolla" class="detalhes">
                    Ver detalhes
                </a>

            </article>


            <article class="carro">

                <div class="imagem">

                    <img
                        src="https://image.webmotors.com.br/_fotos/anunciousados/gigante/2026/202610/20261003/ram-classic-5.7-v8-gasolina-laramie-cd-4x4-automatico-wmimagem15033014849.jpg?s=fill&w=552&h=414&q=60"
                        alt="RAM Classic">

                </div>

                <h2>RAM Classic</h2>

                <p>2023 | Automatico</p>

                <a href="detalhes.php?carro=ram" class="detalhes">
                    Ver detalhes
                </a>

            </article>

        </section>

    </main>

</body>

</html>


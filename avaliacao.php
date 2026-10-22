<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: /projeto/login.php");
    exit;
}

// Pagina de avaliacao do AutoPrime
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avaliacao | AutoPrime</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #222;
        }

        header {
            background: #c90000;
            padding: 20px 50px;
            color: white;
        }

        header h1 {
            font-size: 28px;
        }

        .pagina {
            max-width: 650px;
            margin: 50px auto;
            padding: 20px;
        }

        .caixa {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        h2 {
            color: #c90000;
            text-align: center;
            margin-bottom: 10px;
        }

        .descricao {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        textarea {
            height: 120px;
            resize: none;
        }

        .botao {
            width: 100%;
            padding: 14px;
            background: #c90000;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .botao:hover {
            background: #9e0000;
        }
    </style>
</head>

<body>

    <header>
        <h1>AutoPrime</h1>
    </header>

    <main class="pagina">

        <div class="caixa">

            <h2>Avalie sua experiencia</h2>

            <p class="descricao">
                Queremos saber como foi sua experiencia com a AutoPrime.
            </p>

            <form action="/projeto/obrigado.php" method="post">

                <label for="estado">
                    Em qual estado voce comprou o carro?
                </label>

                <select id="estado" name="estado" required>
                    <option value="">Selecione</option>
                    <option value="Sao Paulo">Sao Paulo</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Parana">Parana</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                </select>

                <label for="servico">
                    Voce gostou do nosso atendimento?
                </label>

                <select id="servico" name="servico" required>
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Mais ou menos">Mais ou menos</option>
                    <option value="Nao">Nao</option>
                </select>

                <label for="comentario">
                    Deixe um comentario
                </label>

                <textarea
                    id="comentario"
                    name="comentario"
                    placeholder="Escreva sua opiniao..."
                ></textarea>

                <button type="submit" class="botao">
                    Enviar avaliacao
                </button>

            </form>

        </div>

    </main>

</body>

</html>
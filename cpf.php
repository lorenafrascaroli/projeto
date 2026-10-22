<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: /projeto/login.php");
    exit;
}
?>

<?php
// Página de consulta de CPF da AutoPrime
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta de CPF | AutoPrime</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #8b0000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .caixa {
            width: 450px;
            background: white;
            padding: 45px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .logo {
            color: #8b0000;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 35px;
        }

        h1 {
            font-size: 28px;
            color: #222;
            margin-bottom: 12px;
        }

        .texto {
            color: #666;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        label {
            display: block;
            text-align: left;
            color: #333;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            height: 48px;
            border: 1px solid #ccc;
            border-radius: 7px;
            padding: 0 15px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input:focus {
            outline: none;
            border-color: #8b0000;
        }

        button {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 7px;
            background: #8b0000;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #650000;
        }

        .voltar {
            display: block;
            margin-top: 20px;
            color: #8b0000;
            text-decoration: none;
            font-size: 14px;
        }

        .aviso {
            margin-top: 25px;
            font-size: 12px;
            color: #888;
        }

    </style>

</head>

<body>

    <main class="caixa">

        <div class="logo">
            AutoPrime
        </div>

        <h1>
            Consulte seu CPF
        </h1>

        <p class="texto">
            Digite seu CPF para continuar com a consulta
            do veículo e verificar as condições disponíveis.
        </p>


        <form action="/projeto/financiamento.php" method="post">

            <label for="cpf">
                CPF
            </label>

            <input
                type="text"
                id="cpf"
                name="cpf"
                placeholder="Digite seu CPF"
                maxlength="14"
                required
            >

            <button type="submit">
                Continuar
            </button>

        </form>


        <a href="/projeto/detalhes.php" class="voltar">
            ← Voltar para o carro
        </a>


        <p class="aviso">
            Consulta demonstrativa para o Projeto Integrador.
        </p>

    </main>

</body>

</html>


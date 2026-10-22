
<?php
session_start();

$usuario = $_SESSION["usuario"] ?? null;
if (!$usuario) {
    header("Location: /projeto/login.php");
    exit;
}
$financiamentos = $_SESSION["financiamentos"] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minha conta | AutoPrime</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #222;
        }

        header {
            background: #111;
            color: white;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            color: #e50914;
            font-size: 27px;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 22px;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #e50914;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
        }

        .titulo {
            margin-bottom: 25px;
        }

        .titulo h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .titulo p {
            color: #666;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 3px 12px #00000010;
        }

        .card h2 {
            margin-bottom: 20px;
            border-left: 5px solid #e50914;
            padding-left: 12px;
        }

        .dados {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .campo {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
            overflow-wrap: anywhere;
        }

        .campo strong {
            display: block;
            color: #777;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .financiamento {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .financiamento h3 {
            margin-bottom: 12px;
        }

        .financiamento p {
            margin: 8px 0;
        }

        .status {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 20px;
            background: #eee;
            font-size: 13px;
            font-weight: bold;
        }

        .aprovado {
            background: #d9f7e2;
            color: #176b35;
        }

        .nao-aprovado {
            background: #ffe0e0;
            color: #a00000;
        }

        .em-analise {
            background: #fff0c2;
            color: #795700;
        }

        .vazio {
            text-align: center;
            padding: 25px 10px;
            color: #666;
        }

        .botao {
            display: inline-block;
            background: #e50914;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 7px;
            margin-top: 15px;
            font-weight: bold;
        }

        .botao:hover {
            background: #b80710;
        }

        footer {
            background: #111;
            color: #aaa;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        @media (max-width: 600px) {
            header {
                padding: 20px;
            }

            .container {
                width: 92%;
                margin-top: 25px;
            }

            .dados {
                grid-template-columns: 1fr;
            }

            .titulo h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">AutoPrime</div>

    <nav>
        <a href="/projeto/index.php">Inicio</a>
        <a href="/projeto/carros.php">Carros</a>
        <a href="/projeto/minha_conta.php">Minha conta</a>
    </nav>
</header>

<main class="container">

    <section class="titulo">
        <h1>Minha conta</h1>
        <p>Consulte seus dados e acompanhe seus financiamentos.</p>
    </section>

    <?php if (!$usuario): ?>

        <section class="card vazio">
            <h2>Entre na sua conta</h2>
            <p>Faca login para consultar seus dados e financiamentos.</p>
            <a class="botao" href="/projeto/login.php">Fazer login</a>
        </section>

    <?php else: ?>

        <section class="card">
            <h2>Meus dados</h2>

            <div class="dados">
                <div class="campo">
                    <strong>Nome completo</strong>
                    <?= htmlspecialchars($usuario["nome"] ?? "Nao informado") ?>
                </div>

                <div class="campo">
                    <strong>E-mail</strong>
                    <?= htmlspecialchars($usuario["email"] ?? "Nao informado") ?>
                </div>

                <div class="campo">
                    <strong>CPF</strong>
                    <?= htmlspecialchars($usuario["cpf"] ?? "Nao informado") ?>
                </div>

                <div class="campo">
                    <strong>Telefone</strong>
                    <?= htmlspecialchars($usuario["telefone"] ?? "Nao informado") ?>
                </div>
            </div>
        </section>

        <section class="card">
            <h2>Meus financiamentos</h2>

            <?php if (empty($financiamentos)): ?>

                <div class="vazio">
                    <p>Voce ainda nao possui financiamentos registrados.</p>
                    <a class="botao" href="/projeto/carros.php">Ver carros</a>
                </div>

            <?php else: ?>

                <?php foreach ($financiamentos as $item): ?>

                    <?php
                    $status = $item["status"] ?? "Em analise";

                    $classe = "em-analise";

                    if ($status === "Aprovado") {
                        $classe = "aprovado";
                    } elseif ($status === "Nao aprovado") {
                        $classe = "nao-aprovado";
                    }
                    ?>

                    <div class="financiamento">
                        <h3>
                            <?= htmlspecialchars($item["carro"] ?? "Carro nao informado") ?>
                        </h3>

                        <p>
                            <strong>Banco:</strong>
                            <?= htmlspecialchars($item["banco"] ?? "Nao informado") ?>
                        </p>

                        <p><strong>Status:</strong></p>

                        <span class="status <?= $classe ?>">
                            <?= htmlspecialchars($status) ?>
                        </span>
                    </div>

                <?php endforeach; ?>

            <?php endif; ?>
        </section>

    <?php endif; ?>

</main>

<footer>
    AutoPrime - Encontre seu proximo carro.
</footer>

</body>
</html>

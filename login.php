
<?php
session_start();
require_once __DIR__ . "/conexao.php";

$erro = "";
$mensagem = isset($_GET["cadastro"]) && $_GET["cadastro"] === "sucesso" ? "Cadastro realizado! Entre com seu e-mail e senha." : "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(["email" => $email]);

        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

        $senhaCorreta = false;

        if ($usuario) {
            // Aceita senhas protegidas e a senha simples do usuario de teste ja existente.
            if (password_get_info($usuario["senha"])["algo"] !== null) {
                $senhaCorreta = password_verify($senha, $usuario["senha"]);
            } else {
                $senhaCorreta = ($usuario["senha"] === $senha);
            }
        }

        if ($usuario && $senhaCorreta) {
            unset($usuario["senha"]);
            $_SESSION["usuario"] = $usuario;
            header("Location: carros.php");
            exit;
        } else {
            $erro = "E-mail ou senha incorretos.";
        }
    } catch (PDOException $e) {
        $erro = "Erro ao consultar o banco de dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AutoPrime</title>

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
            padding: 20px;
        }

        .login {
            width: 100%;
            max-width: 420px;
            background: #222;
            padding: 35px;
            border-radius: 15px;
        }

        .topo {
            text-align: center;
            margin-bottom: 25px;
        }

        .topo h1 {
            color: #d71920;
            margin-bottom: 8px;
        }

        .campo {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #555;
            border-radius: 7px;
            background: #151515;
            color: white;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 7px;
            background: #d71920;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #aa1117;
        }

        .cadastro {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #ccc;
            text-decoration: none;
        }

        .cadastro:hover {
            color: #d71920;
        }

        .mensagem {
            background: #173d25;
            color: #c8f7d5;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .erro {
            background: #471b1b;
            color: #ffbaba;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 18px;
        }
    </style>
</head>

<body>
    <main class="pagina">
        <section class="login">

            <div class="topo">
                <h1>AutoPrime</h1>
                <p>Entre na sua conta</p>
            </div>

            <?php if ($mensagem !== ""): ?>
                <div class="mensagem">
                    <?= htmlspecialchars($mensagem) ?>
                </div>
            <?php endif; ?>

            <?php if ($erro !== ""): ?>
                <div class="erro">
                    <?= htmlspecialchars($erro) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="login.php">

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha"
                        placeholder="Digite sua senha" required>
                </div>

                <button type="submit">Entrar</button>
            </form>

            <a href="cadastro.php" class="cadastro">
                Criar uma conta
            </a>

        </section>
    </main>
</body>

</html>


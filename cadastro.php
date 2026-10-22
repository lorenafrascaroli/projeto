
<?php
session_start();
require_once __DIR__ . "/conexao.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $cpf = trim($_POST["cpf"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $senha = $_POST["senha"] ?? "";
    $confirmar = $_POST["confirmar"] ?? "";

    if ($nome === "" || $email === "" || $cpf === "" || $telefone === "" || $senha === "") {
        $erro = "Preencha todos os campos.";
    } elseif ($senha !== $confirmar) {
        $erro = "As senhas nao sao iguais.";
    } else {
        try {
            $consulta = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
            $consulta->execute(["email" => $email]);

            if ($consulta->fetch(PDO::FETCH_ASSOC)) {
                $erro = "Este e-mail ja esta cadastrado.";
            } else {
                $senhaProtegida = password_hash($senha, PASSWORD_DEFAULT);
                $sql = "INSERT INTO usuarios (nome, email, senha, cpf, telefone)
                        VALUES (:nome, :email, :senha, :cpf, :telefone)";
                $inserir = $pdo->prepare($sql);
                $inserir->execute([
                    "nome" => $nome,
                    "email" => $email,
                    "senha" => $senhaProtegida,
                    "cpf" => $cpf,
                    "telefone" => $telefone
                ]);

                header("Location: /projeto/login.php?cadastro=sucesso");
                exit;
            }
        } catch (PDOException $e) {
            $erro = "Nao foi possivel salvar o cadastro. Confira a conexao com o banco.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro | AutoPrime</title>

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
            padding: 30px;
        }

        .cadastro {
            width: 100%;
            max-width: 500px;
            background: #222;
            padding: 35px;
            border-radius: 15px;
        }

        .topo {
            margin-bottom: 25px;
        }

        .topo h1 {
            margin-bottom: 8px;
        }

        .topo p {
            color: #aaa;
        }

        .campo {
            margin-bottom: 16px;
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

        .login {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #ccc;
            text-decoration: none;
        }

        .login:hover {
            color: #d71920;
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

        <section class="cadastro">

            <div class="topo">
                <h1>Criar conta</h1>
                <p>Cadastre-se para acessar a AutoPrime</p>
            </div>

            <?php if ($erro !== ""): ?>
                <div class="erro">
                    <?= htmlspecialchars($erro) ?>
                </div>
            <?php endif; ?>

            <form action="/projeto/cadastro.php" method="POST">

                <div class="campo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="campo">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" required>
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>

                <div class="campo">
                    <label for="confirmar">Confirmar senha</label>
                    <input type="password" id="confirmar" name="confirmar" required>
                </div>

                <button type="submit">Criar conta</button>

            </form>

            <a href="/projeto/login.php" class="login">
                Ja tenho uma conta
            </a>

        </section>

    </main>

</body>
</html>

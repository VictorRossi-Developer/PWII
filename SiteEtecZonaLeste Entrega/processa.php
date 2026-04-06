<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processamento de Dados</title>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <style>
        html, body { height: 100%; margin: 0; }
        body { font-family: sans-serif; background-color: #f4f4f4; display: flex; flex-direction: column; min-height: 100vh; }
        .navbar { background-color: #b11116; padding: 15px; display: flex; justify-content: space-between; align-items: center; color: white; flex-shrink: 0; }
        .navbar a { color: white; text-decoration: none; margin-left: 15px; font-weight: bold; }
        .container-main { max-width: 1000px; margin: 40px auto; padding: 40px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); flex: 1; text-align: center; }
        .result-box { border-left: 5px solid #b11116; background: #fff5f5; padding: 20px; margin-top: 20px; border-radius: 4px; }
        footer { background: #343a40; color: white; text-align: center; padding: 20px; flex-shrink: 0; }
    </style>
</head>
<body>

    <nav class="navbar">
        <strong>ETEC ZONA LESTE</strong>
        <div>
            <a href="index.php">Home</a>
            <a href="contato.php">Voltar</a>
        </div>
    </nav>

    <div class="container-main shadow">
        <h2 class="text-danger fw-bold">Confirmação de Envio</h2>
        
        <div class="result-box shadow-sm">
            <h4 class="mb-3">
                <?php 
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    echo "Obrigado, <span class='text-danger'>$nome</span>!"; 
                ?>
            </h4>
            <p class="lead">
                <?php echo "Sua mensagem foi recebida com sucesso. Enviaremos uma resposta para o e-mail: <strong>$email</strong>."; ?>
            </p>
        </div>

        <a href="index.php" class="btn btn-secondary mt-4">Retornar à Página Inicial</a>
    </div>

    <footer>
        <p>Sistema de Atendimento ETEC - <?php echo date("H:i"); ?></p>
    </footer>

</body>
</html>

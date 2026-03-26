<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processamento de Dados</title>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        html, body { height: 100%; margin: 0; padding: 0; width: 100%; overflow-x: hidden; }
        body { font-family: sans-serif; background-color: #f4f4f4; display: flex; flex-direction: column; min-height: 100vh; }
        
        .navbar { background-color: #b11116; padding: 15px 0; color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); flex-shrink: 0; width: 100%; }
        .navbar-container { max-width: 1000px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; width: 100%; }
        .navbar a { color: white; text-decoration: none; margin-left: 15px; font-weight: bold; }
        
        .container-main { max-width: 800px; margin: 60px auto; padding: 40px; background: white; border-radius: 8px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); flex: 1; text-align: center; width: calc(100% - 40px); }
                
        .result-box { border-top: 4px solid #b11116; background: #fdfdfd; padding: 30px; margin: 30px 0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        
        .btn-etec { 
            background: #b11116; 
            color: white; 
            border: none; 
            padding: 14px 40px; 
            border-radius: 8px; 
            font-weight: bold; 
            text-decoration: none; 
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .btn-etec:hover { 
            background: #e3161d; 
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-etec:active {
            transform: translateY(0);
        }
        
        footer { background: #343a40; color: white; text-align: center; padding: 20px; margin-top: auto; flex-shrink: 0; width: 100%; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <strong>ETEC ZONA LESTE</strong>
            <div>
                <a href="index.php">Home</a>
                <a href="contato.php">Voltar</a>
            </div>
        </div>
    </nav>

    <div class="container-main">
        <h2 class="text-dark fw-bold">Mensagem Enviada!</h2>
        
        <div class="result-box">
            <h4 class="mb-3">
                <?php 
                    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : "Visitante";
                    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "não informado";
                    echo "Obrigado, <span style='color: #b11116;'>$nome</span>!"; 
                ?>
            </h4>
            <p class="text-muted mb-0">
                Sua mensagem foi recebida com sucesso por nossa equipe.
            </p>
            <p class="text-muted">
                <?php echo "Um protocolo de confirmação foi enviado para: <strong>$email</strong>."; ?>
            </p>
        </div>

        <a href="index.php" class="btn-etec">Retornar à Página Inicial</a>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p>Sistema de Atendimento - <?php echo date("H:i"); ?></p>
    </footer>

</body>
</html>

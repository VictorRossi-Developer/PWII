<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Dados - ETEC</title>
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        html, body { height: 100%; margin: 0; }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f4f4f4; 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
        }

        .gov-sp-bar {
            background-color: #fdfdfd;
            border-bottom: 1px solid #ddd;
            padding: 10px 30px; /* Aumentado para melhor respiro */
            display: flex;
            align-items: center;
        }
        
        /* Ajuste do tamanho da imagem Gov conforme solicitado */
        .gov-sp-bar img { 
            height: 45px; /* Tamanho ajustado para maior visibilidade */
            width: auto;
            display: block;
        }

        .main-header {
            background-color: #fff;
            padding: 25px 30px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            border-bottom: 2px solid #b11116;
        }
        .logos { display: flex; align-items: center; gap: 50px; }
        .logo-etec { height: 80px; }

        .navbar {
            background-color: #b11116;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .container-main { 
            max-width: 850px; 
            margin: 60px auto; 
            padding: 50px; 
            background: white; 
            border-radius: 12px; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); 
            flex: 1; 
            text-align: center; 
            width: 90%;
        }

        .result-box { 
            border-left: 6px solid #b11116; 
            background: #fffafa; 
            padding: 30px; 
            margin: 35px 0; 
            border-radius: 8px; 
            text-align: left;
        }

        h2 { color: #b11116; font-weight: 700; margin-bottom: 10px; font-size: 2.2rem; }
        .text-danger { color: #b11116; }
        
        .btn-primary {
            background: #b11116;
            color: white;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover { 
            background: #8e0e12; 
            transform: translateY(-2px);
        }

        footer { 
            background: #343a40; 
            color: white; 
            text-align: center; 
            padding: 30px; 
            flex-shrink: 0; 
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .gov-sp-bar { justify-content: center; padding: 10px; }
            .gov-sp-bar img { height: 35px; }
            .logos { justify-content: center; width: 100%; }
            .logo-etec { height: 60px; }
        }
    </style>
</head>
<body>

    <div class="gov-sp-bar">
        <img src="/imagens/Gov.png" alt="Governo de SP">
    </div>

    <header class="main-header">
        <div class="logos">
            <!-- Imagem da Etec com as logos combinadas conforme sua referência -->
            <img src="/imagens/Etec.png" alt="Etec Zona Leste e CPS" class="logo-etec">
        </div>
    </header>

    <nav class="navbar">
        <strong>ETEC ZONA LESTE</strong>
        <div>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="contato.php">Contato</a>
            <a href="gestao.php">Gestão</a>
        </div>
    </nav>

    <main class="container-main">
        <h2>Confirmação de Envio</h2>
        <p style="color: #666; font-size: 1.1rem;">Recebemos suas informações com sucesso.</p>
        
        <div class="result-box">
            <h4 style="margin-bottom: 12px; font-size: 1.4rem;">
                <?php 
                    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'Visitante';
                    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'não informado';
                    echo "Obrigado, <span class='text-danger'>$nome</span>!"; 
                ?>
            </h4>
            <p style="font-size: 1.15rem; color: #444; line-height: 1.7;">
                Sua mensagem foi processada. Em breve, enviaremos uma resposta para: <br>
                <strong><?php echo $email; ?></strong>
            </p>
        </div>

        <a href="index.php" class="btn-primary">Retornar à Página Inicial</a>
    </main>

    <footer>
        <p><strong>ETEC Zona Leste</strong> - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p style="opacity: 0.7; margin-top: 10px;">Atendimento em: <?php echo date("d/m/Y - H:i"); ?></p>
    </footer>

</body>
</html>

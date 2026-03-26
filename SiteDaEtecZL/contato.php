<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <style>
        html, body { height: 100%; margin: 0; }
        body { font-family: sans-serif; background-color: #f4f4f4; display: flex; flex-direction: column; min-height: 100vh; }
        .navbar { background-color: #b11116; padding: 15px; display: flex; justify-content: space-between; align-items: center; color: white; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); flex-shrink: 0; }
        .navbar a { color: white; text-decoration: none; margin-left: 15px; font-weight: bold; }
        .container-main { max-width: 1000px; margin: 20px auto; padding: 40px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); flex: 1; width: 100%; }
        .header { text-align: center; border-bottom: 2px solid #b11116; padding-bottom: 20px; margin-bottom: 30px; }
        .header h1 { color: #b11116; }
        
        .form-label { display: block; font-weight: bold; margin-bottom: 8px; color: #333; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #000; border-radius: 4px; margin-bottom: 20px; }
        
        .btn-etec { background: #b11116; color: white; border: none; padding: 10px 25px; border-radius: 5px; font-weight: bold; }
        .btn-etec:hover { background: #8e0e11; color: white; }
        footer { background: #343a40; color: white; text-align: center; padding: 20px; margin-top: 30px; flex-shrink: 0; }
    </style>
</head>
<body>

    <nav class="navbar">
        <strong><a href="index.php">ETEC ZONA LESTE</a></strong>
        <div>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="contato.php">Contato</a>
            <a href="gestao.php">Gestão</a>
        </div>
    </nav>

    <div class="container-main">
        <div class="header">
            <h1><?php echo "Entre em Contato"; ?></h1>
            <p>Preencha os campos abaixo para nos enviar uma mensagem.</p>
        </div>

        <form action="processa.php" method="POST" style="max-width: 600px; margin: 0 auto;">
            <div>
                <label class="form-label">Nome Completo:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            
            <div>
                <label class="form-label">Endereço:</label>
                <input type="text" name="endereco" class="form-control" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Telefone:</label>
                    <input type="tel" name="telefone" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <div class="mt-2">
                <button type="submit" class="btn btn-etec"><?php echo "Enviar Dados"; ?></button>
            </div>
        </form>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

</body>
</html>

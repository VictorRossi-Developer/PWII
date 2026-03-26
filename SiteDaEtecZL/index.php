<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #b11116;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
            width: 100%;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-left: 25px;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            width: calc(100% - 40px);
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #b11116;
            padding-bottom: 30px;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #b11116;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            margin-bottom: 20px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            flex: 1 1 300px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 12px;
            background: #fff;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card h2 {
            color: #b11116;
            font-size: 1.2rem;
            margin-top: 0;
        }

        .btn {
            background: #b11116;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            font-weight: bold;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .btn:hover {
            background: #e3161d;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn:active {
            transform: translateY(0);
        }

        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            flex-shrink: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <strong>ETEC ZONA LESTE</strong>
        <div>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="contato.php">Contato</a>
            <a href="gestao.php">Gestão</a>
        </div>
    </nav>

    <div class="container">
        <div class="header">
            <h1><?php echo "Bem-vindo à ETEC Zona Leste"; ?></h1>
            <p>Excelência em educação técnica e tecnológica.</p>
            <a href="cursos.php" class="btn">Conheça Nossos Cursos</a>
        </div>

        <div class="grid">
            <div class="card">
                <h2><?php echo "Vestibulinho"; ?></h2>
                <p>Datas e inscrições para o próximo semestre.</p>
            </div>
            <div class="card">
                <h2><?php echo "Secretaria"; ?></h2>
                <p>Informações sobre matrículas e documentos.</p>
            </div>
            <div class="card">
                <h2><?php echo "Estágios"; ?></h2>
                <p>Oportunidades de carreira para alunos.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

</body>
</html>

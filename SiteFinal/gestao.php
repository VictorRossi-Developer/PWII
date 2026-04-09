<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão - ETEC Zona Leste</title>
    <link href="https://googleapis.com" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <style>
        :root {
            --primary: #b11116;
            --primary-dark: #8e0e12;
            --bg: #f8f9fa;
            --text: #333;
            --white: #ffffff;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            line-height: 1.6;
        }

        .gov-sp-bar {
            background-color: #fdfdfd;
            border-bottom: 1px solid #ddd;
            padding: 10px 30px;
            display: flex;
            align-items: center;
        }

        .gov-sp-bar img {
            height: 45px;
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

        .logos {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .logo-etec {
            height: 80px;
        }

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

        @media (max-width: 768px) {
            .gov-sp-bar {
                justify-content: center;
                padding: 10px;
            }

            .gov-sp-bar img {
                height: 35px;
            }

            .logos {
                justify-content: center;
                width: 100%;
            }

            .logo-etec {
                height: 60px;
            }
        }

        .navbar a:hover {
            opacity: 1;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
            flex: 1;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
        }

        .section-title {
            font-size: 1.5rem;
            color: var(--text);
            border-left: 5px solid var(--primary);
            padding-left: 15px;
            margin: 40px 0 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card span {
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #888;
            font-weight: 700;
            display: block;
            margin-bottom: 8px;
        }

        .card h2 {
            font-size: 1.2rem;
            color: var(--primary);
            margin: 0;
        }

        .status-update {
            text-align: center;
            margin-top: 50px;
            font-size: 0.9rem;
            color: #999;
        }

        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 60px;
        }

        footer p {
            margin-bottom: 8px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .navbar a {
                margin: 0 10px;
            }

            .header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>

    <div class="gov-sp-bar">
        <img src="/imagens/Gov.png" alt="Governo de SP">
    </div>

    <header class="main-header">
        <div class="logos">
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

    <main class="container">
        <div class="header">
            <h1>Gestão Administrativa</h1>
            <p>Corpo diretivo e coordenação da unidade de ensino.</p>
        </div>

        <h3 class="section-title">Equipe de Direção</h3>
        <div class="grid">
            <div class="card">
                <span>Diretor de Unidade</span>
                <h2>Amanda de Oliveira Silva</h2>
            </div>
            <div class="card">
                <span>Serviços Administrativos</span>
                <h2>Cláudia Cristina de Souza</h2>
            </div>
            <div class="card">
                <span>Serviços Acadêmicos</span>
                <h2>Ricardo de Oliveira</h2>
            </div>
        </div>

        <h3 class="section-title">Coordenação de Cursos</h3>
        <div class="grid">
            <div class="card">
                <span>Desenvolvimento de Sistemas</span>
                <h2>Prof. Alessandro de Melo</h2>
            </div>
            <div class="card">
                <span>Logística / Administração</span>
                <h2>Prof. Maria Alice Rodrigues</h2>
            </div>
            <div class="card">
                <span>Recursos Humanos</span>
                <h2>Prof. João Carlos Ferreira</h2>
            </div>
        </div>

        <div class="status-update">
            <p>Dados atualizados em: <?php echo date("d/m/Y"); ?></p>
        </div>
    </main>

    <footer>
        <p><strong>ETEC Zona Leste</strong> - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p>Atividade de Programação Web 2 - <?php echo date("Y"); ?></p>
    </footer>

</body>

</html>
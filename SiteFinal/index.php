<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>ETEC Zona Leste</title>
    <link rel="stylesheet" href="style.css">
    
      <style>
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

    </style>

</head>

<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">
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


    <div style="width: 100%; max-width: 1000px; margin: 20px auto; padding: 0 20px; box-sizing: border-box;">
        <div style="position: relative; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">

            <img src="imagens/etec.png.jpg" alt="Etec Zona Leste"
                style="width: 100%; height: 300px; object-fit: cover; display: block;">

            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center; font-family: sans-serif;">
                <h2 style="font-size: 2.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Etec Zona Leste</h2>
                <p style="font-size: 1.2rem; text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Acesse nossos cursos</p>
            </div>

        </div>
    </div>


    <div class="container" style="flex: 1;">
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

    <footer style="background: #343a40; color: white; text-align: center; padding: 20px; width: 100%;">
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

</body>

</html>
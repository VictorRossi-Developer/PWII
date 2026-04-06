<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .table-etec thead {
            background-color: #b11116;
            color: white;
        }
        .section-title {
            color: #b11116;
            border-left: 5px solid #b11116;
            padding-left: 15px;
            margin-top: 30px;
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
            <h1><?php echo "Gestão Administrativa"; ?></h1>
            <p>Informações sobre a diretoria e coordenação da unidade.</p>
        </div>

        <h3 class="section-title"><?php echo "Equipe de Direção"; ?></h3>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered shadow-sm">
                <thead class="table-etec">
                    <tr>
                        <th>Cargo</th>
                        <th>Responsável</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diretor de Unidade</td>
                        <td><?php echo "Amanda de Oliveira Silva"; ?></td>
                    </tr>
                    <tr>
                        <td>Diretora de Serviços Administrativos</td>
                        <td><?php echo "Cláudia Cristina de Souza"; ?></td>
                    </tr>
                    <tr>
                        <td>Diretor de Serviços Acadêmicos</td>
                        <td><?php echo "Ricardo de Oliveira"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="section-title"><?php echo "Coordenação de Cursos"; ?></h3>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered shadow-sm">
                <thead class="table-etec">
                    <tr>
                        <th>Eixo Tecnológico</th>
                        <th>Coordenador(a)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Desenvolvimento de Sistemas</td>
                        <td><?php echo "Prof. Alessandro de Melo"; ?></td>
                    </tr>
                    <tr>
                        <td>Logística / Administração</td>
                        <td><?php echo "Prof. Maria Alice Rodrigues"; ?></td>
                    </tr>
                    <tr>
                        <td>Recursos Humanos</td>
                        <td><?php echo "Prof. João Carlos Ferreira"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted">Dados atualizados em: <?php echo date("d/m/Y"); ?></p>
        </div>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

    <script src="https://cdn.jsdelivr.net"></script>
</body>
</html>

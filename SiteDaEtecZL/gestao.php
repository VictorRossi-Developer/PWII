<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão - ETEC Zona Leste</title>
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
            margin: 0 0 10px 0;
        }

        .section-title {
            color: #b11116;
            border-left: 5px solid #b11116;
            padding-left: 15px;
            margin: 40px 0 20px 0;
            font-size: 1.5rem;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead {
            background-color: #b11116;
            color: white;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        .text-center {
            text-align: center;
        }

        .text-muted {
            color: #777;
            font-size: 0.9rem;
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
            <h1><?php echo "Gestão Administrativa"; ?></h1>
            <p>Informações sobre a diretoria e coordenação da unidade.</p>
        </div>

        <h3 class="section-title"><?php echo "Equipe de Direção"; ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
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
        <div class="table-responsive">
            <table>
                <thead>
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

        <div class="text-center" style="margin-top: 40px;">
            <p class="text-muted">Dados atualizados em: <?php echo date("d/m/Y"); ?></p>
        </div>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

</body>
</html>

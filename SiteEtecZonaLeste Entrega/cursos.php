<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cursos - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .badge-curso {
            background-color: #b11116;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            display: inline-block;
            margin-top: 10px;
        }
        .card {
            height: 100%;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
            <h1><?php echo "Nossos Cursos"; ?></h1>
            <p>Conheça as formações oferecidas na unidade Zona Leste.</p>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Desenvolvimento de Sistemas"; ?></h2>
                    <p>Focado em análise, projeto e implementação de sistemas computacionais.</p>
                    <div class="badge-curso">Período: Noite</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Logística"; ?></h2>
                    <p>Planejamento e controle de operações de transporte e armazenamento.</p>
                    <div class="badge-curso">Período: Tarde / Noite</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Administração"; ?></h2>
                    <p>Gestão de processos organizacionais, pessoas e recursos financeiros.</p>
                    <div class="badge-curso">Período: Manhã / Noite</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Contabilidade"; ?></h2>
                    <p>Gestão de contas, tributos e análise de balanços patrimoniais.</p>
                    <div class="badge-curso">Período: Noite</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Serviços Jurídicos"; ?></h2>
                    <p>Apoio administrativo em escritórios de advocacia e órgãos públicos.</p>
                    <div class="badge-curso">Período: Noite</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h2><?php echo "Recursos Humanos"; ?></h2>
                    <p>Processos de recrutamento, seleção, treinamento e folha de pagamento.</p>
                    <div class="badge-curso">Período: Noite</div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="contato.php" class="btn">Solicitar Mais Informações</a>
        </div>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p><?php echo "Atividade de Programação Web 2 - " . date("Y"); ?></p>
    </footer>

    <script src="https://cdn.jsdelivr.net"></script>
</body>
</html>

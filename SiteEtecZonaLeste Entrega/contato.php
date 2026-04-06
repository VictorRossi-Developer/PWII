<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - ETEC Zona Leste</title>
    <!-- Bootstrap CSS Corrigido -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
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
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
            transition: 0.3s;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

        .container-main {
            max-width: 800px;
            margin: 40px auto;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            flex: 1;
            width: 90%;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            color: #b11116;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .header p {
            color: #6c757d;
        }

        .form-label {
            color: #495057;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dee2e6;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #b11116;
            box-shadow: 0 0 0 0.25rem rgba(177, 17, 22, 0.15);
        }

        .btn-etec {
            background: #b11116;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(177, 17, 22, 0.3);
        }

        .btn-etec:hover {
            background: #8e0e11;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(177, 17, 22, 0.4);
            color: white;
        }

        footer {
            background: #212529;
            color: #adb5bd;
            text-align: center;
            padding: 30px;
            margin-top: auto;
            font-size: 0.9rem;
        }

        footer p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <strong style="font-size: 1.2rem; letter-spacing: 1px;">ETEC ZONA LESTE</strong>
        <div>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="contato.php">Contato</a>
            <a href="gestao.php">Gestão</a>
        </div>
    </nav>

    <div class="container-main">
        <div class="header">
            <h1>Entre em Contato</h1>
            <p>Dúvidas ou sugestões? Nossa equipe técnica está pronta para ajudar.</p>
        </div>

        <form action="processa.php" method="POST">
            <div class="mb-4">
                <label class="form-label fw-bold">Nome Completo</label>
                <input type="text" name="nome" class="form-control" placeholder="Ex: João Silva" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Endereço Residencial</label>
                <input type="text" name="endereco" class="form-control" placeholder="Rua, Número, Bairro" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <label class="form-label fw-bold">Telefone</label>
                    <input type="tel" name="telefone" class="form-control" placeholder="(11) 99999-9999" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label class="form-label fw-bold">E-mail Institucional</label>
                    <input type="email" name="email" class="form-control" placeholder="seu@email.com" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-etec w-75">
                    <?php echo "Enviar Mensagem AGORA"; ?>
                </button>
            </div>
        </form>
    </div>

    <footer>
        <p>ETEC Zona Leste - Av. Águia de Haia, 2633 - São Paulo, SP</p>
        <p>© <?php echo date("Y"); ?> - Atividade de Programação Web 2</p>
    </footer>

    <!-- Bootstrap JS (opcional para componentes interativos) -->
    <script src="https://jsdelivr.net"></script>
</body>

</html>
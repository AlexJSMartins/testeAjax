<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <title>Cadastrar Cliente</title>
</head>

<body class="body-novo-cliente">

    <div class=" container container-novo-cliente">
        <form class="row g-3  align-items-center form-novo-cliente" id="form" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class=" col-form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do cliente " required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="col-form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF do cliente" required>
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">E-Mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite o emali do cliente" required>
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Telefone</label>
                <input type="tex" class="form-control" id="telefone" placeholder="Digite o telefone do cliente" required>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua" required>
            </div>

            <div class="col-md-4">
                <label for="inputCity" class="form-label">Numero</label>
                <input type="text" class="form-control" id="numero" placeholder="Digite o numero da casa do cliente" required>
            </div>

            <div class="col-md-4">
                <label for="inputCity" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" placeholder="Ex: apartamento 11">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-outline-success" id="form">Salvar</button>
                <button class="btn btn-outline-primary" style="margin-left: 30px;" id="voltar">Voltar</button>
            </div>
        </form>

    </div>

    <script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../api/alunos/novo-cliente.js"></script>
    <script src="../../api/alunos/detalhe-cliente.js"></script>
</body>

</html>
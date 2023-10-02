<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    include '../../components//menu2.php'


    ?>

    <form class="row justify-content-center pesquisa" id="formPesquisa">
        <div class="col-8">
            <input type="search" class="form-control" id="inputPesquisa" placeholder="Pesquisa">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
        </div>
    </form>


    <table class="table table-hover  table-striped" id="clientes-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>rua</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Detalhes</th>

            </tr>
        </thead>
        <tbody>
            <!-- As linhas dos clientes serão adicionadas aqui -->
        </tbody>
    </table>



    <?php
    include '../../components/footer.php'


    ?>

    <script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../api/alunos/api.js"></script>
    <script src="../../api/alunos/detalhe-cliente.js"></script>
</body>

</html>
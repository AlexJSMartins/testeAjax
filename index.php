<?Php include 'src/components/header.php' ?>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
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

<?php include 'src/components/footer.php'?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="src/api/api.js"></script>
<script src="src/api/detalhe-cliente.js"></script>

</body>

</html>
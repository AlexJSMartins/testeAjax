<?Php include 'src/components/header.php' ?>

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

<?php include 'src/components/footer.php' ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="src/api/api.js"></script>
<script src="src/api/detalhe-cliente.js"></script>

</body>

</html>
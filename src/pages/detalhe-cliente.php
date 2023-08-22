<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Detalhes do Cliente</title>
</head>
<body>
    
    <div id="detalhes-cliente">
      <h3>Detalhes do Cliente</h3>
      <table  class="table table-hover  table-striped">
        <tbody>
          <tr>
            <td>ID:</td>
            <td id="cliente-id"></td>
          </tr>
          <tr>
            <td>Nome:</td>
            <td id="cliente-nome"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td id="cliente-email"></td>
          </tr>
          <tr>
            <td>Telefone:</td>
            <td id="cliente-telefone"></td>
          </tr>
          <tr>
            <td>CPF:</td>
            <td id="cliente-cpf"></td>
          </tr>
          <tr>
            <td>Rua:</td>
            <td id="cliente-rua"></td>

          </tr>
          <tr>
            <td>Número:</td>
            <td id="cliente-numero"></td>
          </tr>
          <tr>
            <td>Complemento:</td>
            <td id="cliente-complemento"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class=" gap-2 col-2 mx-auto">
    <!-- Botões de ação -->
    <button class="btn btn-outline-success" id="editar-cliente">Editar</button>
    <button class="btn btn-outline-danger" id="excluir-cliente">Excluir</button>
    <button class="btn btn-outline-primary"  id="voltar">Voltar</button>
  </div>

  <!-- Modal de Edição -->
  <div class="modal fade" id="editarClienteModal" tabindex="-1" aria-labelledby="editarClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarClienteModalLabel">Editar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="modal-nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="modal-nome">
            </div>
            <div class="mb-3">
              <label for="modal-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="modal-email">
            </div>
            <div class="mb-3">
              <label for="modal-telefone" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="modal-telefone">
            </div>
            <div class="mb-3">
              <label for="modal-cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" id="modal-cpf">
            </div>
            <div class="mb-3">
              <label for="modal-rua" class="form-label">Rua</label>
              <input type="text" class="form-control" id="modal-rua">
            </div>
            <div class="mb-3">
              <label for="modal-numero" class="form-label">Número</label>
              <input type="text" class="form-control" id="modal-numero">
            </div>
            <div class="mb-3">
              <label for="modal-complemento" class="form-label">Complemento</label>
              <input type="text" class="form-control" id="modal-complemento">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="salvar-edicao">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="detalhe-cliente.js"></script>
  <script src="api.js"></script>
</body>
</html>

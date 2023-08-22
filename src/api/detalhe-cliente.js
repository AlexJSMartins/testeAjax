$(function() {
  // Recuperar os dados do cliente do armazenamento local do navegador
  var clienteDetalhe = localStorage.getItem('clienteDetalhe');
  if (clienteDetalhe) {
    var cliente = JSON.parse(clienteDetalhe);

    // Preencher os detalhes do cliente na tabela de detalhes
    $('#cliente-id').text(cliente.id);
    $('#cliente-nome').text(cliente.nome);
    $('#cliente-email').text(cliente.email);
    $('#cliente-telefone').text(cliente.telefone);
    $('#cliente-cpf').text(cliente.cpf);
    $('#cliente-rua').text(cliente.rua);
    $('#cliente-numero').text(cliente.numero);
    $('#cliente-complemento').text(cliente.complemento);

    // Adicionar evento de clique ao botão "Editar"
    $('#editar-cliente').on('click', function() {
      exibirModalEdicao(cliente);
    });

    // Adicionar evento de clique ao botão "Salvar"
    $('#salvar-edicao').on('click', function() {
      salvarEdicaoCliente(cliente.id);
    });

    // Adicionar evento de clique ao botão "Excluir"
    $('#excluir-cliente').on('click', function() {
      excluirCliente(cliente);
    });

    // Adicionar evento de clique ao botão "Voltar"
    $('#voltar').on('click', function() {
      window.location.href = 'index.php';
    });
  } else {
    // Exibir uma mensagem de cliente não encontrado, se necessário
    var mensagem = '<p>Cliente não encontrado.</p>';
    $('#detalhes-cliente').append(mensagem);
    alert(mensagem);
  }
});

//////////////////////////////////////////////////////////////////////////////////////

function exibirModalEdicao(cliente) {
  // Preencher o formulário do modal com os dados do cliente
  $('#modal-id').val(cliente.id);
  $('#modal-nome').val(cliente.nome);
  $('#modal-email').val(cliente.email);
  $('#modal-telefone').val(cliente.telefone);
  $('#modal-cpf').val(cliente.cpf);
  $('#modal-rua').val(cliente.rua);
  $('#modal-numero').val(cliente.numero);
  $('#modal-complemento').val(cliente.complemento);

  // Exibir o modal
  $('#editarClienteModal').modal('show');
}


//////////////////////////////////////////////////////////////////////////////////////////

function salvarEdicaoCliente(clienteId) {
  // Obter os valores atualizados do formulário do modal
  var nome = $('#modal-nome').val();
  var email = $('#modal-email').val();
  var telefone = $('#modal-telefone').val();
  var cpf = $('#modal-cpf').val();
  var rua = $('#modal-rua').val();
  var numero = $('#modal-numero').val();
  var complemento = $('#modal-complemento').val();

  // Construir o objeto de dados a ser enviado na chamada AJAX
  var data = {
    nome: nome,
    email: email,
    telefone: telefone,
    cpf: cpf,
    rua: rua,
    numero: numero,
    complemento: complemento,
    
  };

  // Fazer a chamada AJAX para a API Laravel para atualizar o cliente
  $.ajax({
    url: `http://127.0.0.1:8000/api/clientes/${clienteId}` , // Substitua pela URL correta da sua API Laravel
    type: 'PUT',
    data: data,
    success: function(response) {
      // A atualização foi bem-sucedida, faça as ações necessárias
      $('#editarClienteModal').modal('hide'); // Feche o modal de edição
      alert('Cliente atualizado com sucesso!'); // Exiba uma mensagem de sucesso

      
    
      
      // Atualize os detalhes do cliente na tabela HTML
      var clienteId = response.id; // ID do cliente atualizado
      var newRow = createTableRow(response); // Crie uma nova linha HTML com os dados atualizados

        // Atualize os detalhes do cliente na página de detalhes
        $('#cliente-id').text(response.id);
        $('#cliente-nome').text(response.nome);
        $('#cliente-email').text(response.email);
        $('#cliente-telefone').text(response.telefone);
        $('#cliente-cpf').text(response.cpf);
        $('#cliente-rua').text(response.rua);
        $('#cliente-numero').text(response.numero);
        $('#cliente-complemento').text(response.complemento);
      
      // Encontre a linha existente na tabela com o ID do cliente
      var existingRow = $('#clientes-table tbody tr[data-id="' + clienteId + '"]');

      
       // Reabra o modal para exibir as alterações
       $('#editarClienteModal').modal('show');
      // Substitua a linha existente pela nova linha atualizada
      if (existingRow.length > 0) {
        existingRow.replaceWith(newRow);
        
      } else {
        // Caso a linha não exista na tabela, adicione a nova linha
        $('#clientes-table tbody').append(newRow);
      }
    },
    error: function(error) {
      // Ocorreu um erro na atualização, trate-o adequadamente
      alert('Erro ao atualizar o cliente.');
    }
  });
}



////////////////////////////////////////////////////////////////////////////////////////////////////////


function excluirCliente(cliente) {
  // Confirmar a exclusão do cliente
  var confirmacao = confirm('Deseja excluir o cliente ' + cliente.id + '?');

  if (confirmacao) {
    // Fazer a chamada AJAX para a API Laravel para excluir o cliente
    $.ajax({
      url: 'http://127.0.0.1:8000/api/clientes/' + cliente.id, // Substitua pela URL correta da sua API Laravel
      type: 'DELETE',
      success: function(response) {
        // A exclusão foi bem-sucedida, faça as ações necessárias
        alert('Cliente excluído com sucesso!'); // Exiba uma mensagem de sucesso

        // Remover a linha da tabela que corresponde ao cliente excluído
        $('#clientes-table tbody tr[data-id="' + cliente.id + '"]').remove();

         // Redirecionar para a tela inicial
         window.location.href = 'index.php';
      },
      error: function(error) {
        // Ocorreu um erro na exclusão, trate-o adequadamente
        alert('Erro ao excluir o cliente.');
      }
    });
  }
}

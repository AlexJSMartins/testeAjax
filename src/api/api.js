
$(function() {
  $.ajax({
    url: 'http://127.0.0.1:8000/api/clientes/',
    type: 'GET',
    success: function (response) {
      var clientesTable = $('#clientes-table tbody');

      // Limpar tabela antes de adicionar os novos dados
      clientesTable.empty();

      // Iterar sobre os clientes retornados e adicionar as linhas na tabela
      $.each(response, function (index, cliente) {
        // Crie uma nova linha HTML com os dados do cliente
        var newRow = createTableRow(cliente);

        // Adicione a nova linha na tabela
        clientesTable.append(newRow);
      });

      // Adicionar evento de clique ao botão "Detalhes"
      $('.detalhes-btn').on('click', function () {
        var id = $(this).data('cliente-id');
        exibirDetalhesCliente(id);
      });
    },
    error: function (error) {
      // Manipule erros de requisição aqui
      alert('Ocorreu um erro ao obter os clientes. Por favor, tente novamente.');
      console.log(error);
    }
  });
});

function createTableRow(cliente) {
  var row = $('<tr>');
  row.append($('<td>').text(cliente.id));
  row.append($('<td>').text(cliente.nome));
  row.append($('<td>').text(cliente.email));
  row.append($('<td>').text(cliente.telefone));
  row.append($('<td>').text(cliente.cpf));
  row.append($('<td>').text(cliente.rua));
  row.append($('<td>').text(cliente.numero));
  row.append($('<td>').text(cliente.complemento));

  row.append(
    $('<td>').append(
      $('<button>')
        .addClass('detalhes-btn btn btn-outline-primary')
        .data('cliente-id', cliente.id)
        .text('Detalhes')
    )
  );

  return row;
}

// Função que exibe os dados do cliente na página detalhe-cliente
function exibirDetalhesCliente(id) {
  // Fazer uma nova requisição AJAX para obter os detalhes do cliente usando o ID
  $.ajax({
    url: `http://127.0.0.1:8000/api/clientes/${id}`,
    type: 'GET',
    success: function(response) {
      // Verificar se há um cliente retornado
      if (response.data) {
        var cliente = response.data;

        // Armazenar os dados do cliente no armazenamento local do navegador
        localStorage.setItem('clienteDetalhe', JSON.stringify(cliente));

        // Redirecionar para a página de detalhes do cliente
        window.location.href = './src/pages/detalhe-cliente.php';
      } else {
        // Exibir uma mensagem de cliente não encontrado, se necessário
        var mensagem = '<p>Cliente não encontrado.</p>';
        $('#detalhes-cliente').append(mensagem);
      }
    },
    error: function(error) {
      // Manipular erros de requisição aqui
      alert('Ocorreu um erro ao obter os detalhes do cliente. Por favor, tente novamente.');
      console.log(error);
    }
  });
}

//-------------------------------------------------------------------------------------------------

document.addEventListener('DOMContentLoaded',function() {
  // Lidar com o evento de input no campo de pesquisa
  $('#inputPesquisa').on('input', function() {
    var keyword = $(this).val(); // Obter a palavra-chave de pesquisa

    // Fazer a chamada Ajax para a rota de pesquisa
    $.ajax({
      url: 'http://127.0.0.1:8000/api/clientes/search',
      type: 'GET',
      data: {
        keyword: keyword
      },
      success: function(response) {
        if (response.length > 0) {
          // Limpar a tabela de clientes antes de adicionar os resultados da pesquisa
          $('#clientes-table tbody').empty();
      
          // Iterar sobre os clientes retornados e adicionar as linhas na tabela
          $.each(response, function(index, cliente) {
            // Crie uma nova linha HTML com os dados do cliente
            var newRow = createTableRow(cliente);
      
            // Adicione a nova linha na tabela
            $('#clientes-table tbody').append(newRow);
          });
        } else {
          // Exibir um alerta informando que nenhum cliente foi encontrado
          alert('Nenhum cliente encontrado.');
        }
      },
      error: function(error) {
        // Exibir uma mensagem de erro.
        alert('Erro na pesquisa de clientes.');
      }
    });
  });
});


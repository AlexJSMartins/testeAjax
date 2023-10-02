var clientesData = []; // Variável para armazenar os dados dos clientes localmente
var detalhesClienteData = {}; // Variável para armazenar os detalhes do cliente localmente

$(function() {
  carregarClientes(); // Carrega os clientes do servidor ao carregar a página

  // Lidar com o evento de input no campo de pesquisa
  $('#inputPesquisa').on('input', function() {
    var keyword = $(this).val().toLowerCase();
    filtrarClientes(keyword); // Filtra os clientes com base na palavra-chave de pesquisa
  });

  // Lidar com o evento de clique no botão "Detalhes"
  $(document).on('click', '.detalhes-btn', function() {
    var id = $(this).data('cliente-id');
    
    exibirDetalhesCliente(id);
  });
});

// Função para carregar dados dos clientes do servidor e armazená-los localmente
function carregarClientes() {
  $.ajax({
    url: 'http://127.0.0.1:8000/api/clientes/',
    type: 'GET',
    success: function(data) {
      clientesData = data; // Armazena os dados localmente
      atualizarTabelaClientes(clientesData); // Atualiza a tabela com todos os clientes
    },
    error: function(error) {
      manipularErro('Ocorreu um erro ao obter os clientes. Por favor, tente novamente.', error);
    }
  });
}

// Função para atualizar a tabela de clientes com os dados fornecidos
function atualizarTabelaClientes(data) {
  var clientesTable = $('#clientes-table tbody');
  clientesTable.empty(); // Limpa a tabela

  $.each(data, function(index, cliente) {
    // Cria uma nova linha HTML com os dados do cliente
    var newRow = criarLinhaCliente(cliente);

    // Adiciona a nova linha na tabela
    clientesTable.append(newRow);
  });
}

// Função para criar uma linha de tabela com os dados de um cliente
function criarLinhaCliente(cliente) {
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

// Função para filtrar clientes com base na palavra-chave de pesquisa
function filtrarClientes(keyword) {
  var resultadosFiltrados = clientesData.filter(function(cliente) {
    return cliente.nome.toLowerCase().includes(keyword) || cliente.cpf.includes(keyword);
  });

  atualizarTabelaClientes(resultadosFiltrados); // Atualiza a tabela com os resultados filtrados
}

// Função para manipular erros de requisição AJAX
function manipularErro(mensagem, error) {
  // Manipula erros de requisição aqui, exibindo uma mensagem de erro e registrando detalhes no console
  alert(mensagem);
  console.log(error);
}

// Função que exibe os dados do cliente na página detalhe-cliente
function exibirDetalhesCliente(id) {
  if (detalhesClienteData[id]) {
    // Se os detalhes do cliente já estiverem armazenados localmente, use-os em vez de fazer uma nova requisição
    var cliente = detalhesClienteData[id];
    redirecionarParaDetalhesCliente(cliente);
  } else {
    // Caso contrário, faça uma nova requisição AJAX para obter os detalhes do cliente usando o ID
    $.ajax({
      url: `http://127.0.0.1:8000/api/clientes/${id}`,
      type: 'GET',
      success: function (response) {
        // Verificar se há um cliente retornado
        if (response.data) {
          var cliente = response.data;

          // Armazenar os detalhes do cliente localmente para uso futuro
          detalhesClienteData[id] = cliente;

          redirecionarParaDetalhesCliente(cliente);
        } else {
          // Exibir uma mensagem de cliente não encontrado, se necessário
          var mensagem = '<p>Cliente não encontrado.</p>';
          $('#detalhes-cliente').append(mensagem);
        }
      },
      error: function (error) {
        // Manipular erros de requisição aqui
        alert('Ocorreu um erro ao obter os detalhes do cliente. Por favor, tente novamente.');
        console.log(error);
      }
    });
  }
}

// Função para redirecionar para a página de detalhes do cliente
function redirecionarParaDetalhesCliente(cliente) {
  // Armazenar os dados do cliente no armazenamento local do navegador
  localStorage.setItem('clienteDetalhe', JSON.stringify(cliente));

  // Redirecionar para a página de detalhes do cliente
  window.location.href = './detalhe-cliente.php';
}

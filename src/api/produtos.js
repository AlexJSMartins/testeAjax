$(function() {
    $.ajax({
      url: 'http://127.0.0.1:8000/api/produtos/',
      type: 'GET',
      success: function (response) {
        var produtoTable = $('#produtos-table tbody');
  
        // Limpar tabela antes de adicionar os novos dados
        produtoTable.empty();
  
        // Iterar sobre os produtos retornados e adicionar as linhas na tabela
        $.each(response, function (index, produto) {
          // Crie uma nova linha HTML com os dados do cliente
          var newRow = createTableRow(produto);
  
          // Adicione a nova linha na tabela
          produtoTable.append(newRow);
        });
  
        // Adicionar evento de clique ao botão "Detalhes"
        $('.detalhes-btn').on('click', function () {
          var id = $(this).data('cliente-id');
          exibirDetalhesProdutos(id);
        });
      },
      error: function (error) {
        // Manipule erros de requisição aqui
        alert('Ocorreu um erro ao obter os produtos. Por favor, tente novamente.');
        console.log(error);
      }
    });
  });
  
  function createTableRow(produto) {
    var row = $('<tr>');
    row.append($('<td>').text(produto.id));
    row.append($('<td>').text(produto.nome));
    row.append($('<td>').text(produto.codigo));
    row.append($('<td>').text(produto.preco));
    row.append($('<td>').text(produto.validade));
    row.append($('<td>').text(produto.quantidade));
    
    
  
    row.append(
      $('<td>').append(
        $('<button>')
          .addClass('detalhes-btn btn btn-outline-primary')
          .data('produto-id', produto.id)
          .text('Detalhes')
      )
    );
  
    return row;
  }
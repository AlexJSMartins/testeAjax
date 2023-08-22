$(function() {
  
    // Lidar com o envio do formulário
    $('form').on('submit',(function(event) {
        event.preventDefault(); // Impedir o envio do formulário padrão
        

        // Obter os valores dos campos do formulário
        var nome = $('#nome').val();
        var cpf = $('#cpf').val();
        var email = $('#email').val();
        var telefone = $('#telefone').val();
        var rua = $('#rua').val();
        var numero = $('#numero').val();
        var complemento = $('#complemento').val();

        // Construir o objeto de dados a ser enviado na chamada AJAX
        var data = {
            nome: nome,
            cpf: cpf,
            email: email,
            telefone: telefone,
            rua: rua,
            numero: numero,
            complemento: complemento
        };

              // Fazer a chamada AJAX para a rota de criação do cliente
              $.ajax({
                url: `http://127.0.0.1:8000/api/clientes/store`,
                method: 'post',
                data: data,
                success: function(response) {
                  if (response.success) {
                    alert('Cliente criado com sucesso!');
                    window.location.href='index.php';
                    $('form')[0].reset(); // Limpar os campos do formulário
                    
                  } else {
                    alert('Erro ao criar o cliente: ' + response.message);
                  }
                },
                error: function(error) {
                  alert('Erro ao criar o cliente.');
                  console.log(error);
                }
              });
            }));
          });


          
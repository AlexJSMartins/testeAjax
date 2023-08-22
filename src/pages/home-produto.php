<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <nav class="navbar nav-underline nav nav-tabs nav-justified flex-column flex-sm-row menu-personalizado ">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <strong>produtos</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="novo-cliente.php">Novo</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Consultar</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Baixar</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false"><strong>Notas Entradas</strong></a>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="#">Produtos</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Serviços</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false"><strong>Notas Saida</strong></a>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="#">Produtos</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#"> Serviços</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false"> <strong>Estoque</strong> </a>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="#">Adicionar</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Conferir</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Baixar</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        
      </ul>
    </li>
  </nav>

  <form class="row justify-content-center pesquisa" id="formPesquisa">
    <div class="col-8">
      <input type="search" class="form-control" id="inputPesquisa" placeholder="Pesquisa">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
    </div>
  </form>
  



  <table class="table table-hover  table-striped" id="produtos-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Codigo</th>
        <th>Preço</th>
        <th>Validade</th>
        <th>Quantidade</th>
        
        

      </tr>
    </thead>
    <tbody>
      <!-- As linhas dos produtos serão adicionadas aqui -->
    </tbody>
  </table>

  <nav class="nav nav-underline nav nav-tabs  flex-column flex-sm-row ">
    <div class="container ">
      <footer class="menu-personalizado d-flex flex-wrap justify-content-between align-items-center py-3 my-2 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; <strong>2022 Company, Inc</strong> </p>
    
        
          <li class="nav-item dropdown col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" 
            aria-expanded="false"> <strong>Relatorios</strong> </a>
  
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">produtos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Notas Saidas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Notas Entradas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Estoque</a></li>
            </ul>
          </li>
        
    
        
      </footer>
    </div>
  
  </nav>


  <div id="detalhes-cliente"></div>
  <div class="container4">
    <h1 class="logo-fundo">PG Digital</h1>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="produtos.js"></script>
</body>

</html>
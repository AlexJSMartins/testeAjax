<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<header>
<body>

  <nav class="navbar nav-underline nav nav-tabs nav-justified flex-column flex-sm-row menu-personalizado ">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <strong>Clientes</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="src/pages/novo-cliente.php">Novo</a></li>
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

  </header>
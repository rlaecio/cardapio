<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início | Cardápio</title>
  <meta name="description" content="Protótipo HTML com Bootstrap para o trabalho prático Cardápio.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <!--
    Página preparada apenas com HTML.
    O formando deverá acrescentar a lógica PHP necessária,
    sem alterar a estrutura visual base, exceto se entender melhorar.
  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Cardápio</a>
      <button class="navbar-toggler" type="button" aria-label="Abrir navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse show">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li><li class="nav-item"><a class="nav-link" href="categoriasListar.php">Categorias</a></li><li class="nav-item"><a class="nav-link" href="artigosListar.php">Artigos</a></li><li class="nav-item"><a class="nav-link" href="utilizadoresListar.php">Utilizadores</a></li><li class="nav-item"><a class="nav-link" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container py-4">
    
<section class="p-4 p-md-5 mb-4 bg-white border rounded-4 shadow-sm">
  <div class="row g-4 align-items-center">
    <div class="col-lg-8">
      <span class="badge text-bg-primary mb-3">Trabalho de consolidação</span>
      <h1 class="display-6 fw-bold">Sistema simples de gestão de cardápio</h1>
      <p class="lead mb-3">
        Este conjunto de páginas serve de base ao trabalho prático. O objetivo é
        transformar este protótipo num sistema funcional com PHP e MySQL.
      </p>
      <p class="mb-0">
        O projeto deverá permitir gerir categorias, artigos do cardápio, utilizadores
        e sugestões registadas com base nos artigos existentes.
      </p>
    </div>
    <div class="col-lg-4">
      <div class="card border-0 bg-primary-subtle rounded-4">
        <div class="card-body">
          <h2 class="h5">Módulos principais</h2>
          <ul class="mb-0">
            <li>Categorias</li>
            <li>Artigos</li>
            <li>Utilizadores</li>
            <li>Sugestões</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="row g-4">
  <div class="col-md-6 col-xl-3">
    <div class="card h-100 shadow-sm rounded-4">
      <div class="card-body">
        <h2 class="h5">Categorias</h2>
        <p class="text-secondary">Criar, listar, editar e eliminar categorias do cardápio.</p>
        <a href="categoriasListar.php" class="btn btn-outline-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card h-100 shadow-sm rounded-4">
      <div class="card-body">
        <h2 class="h5">Artigos</h2>
        <p class="text-secondary">Gerir pratos, bebidas ou outros itens associados a categorias.</p>
        <a href="artigosListar.php" class="btn btn-outline-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card h-100 shadow-sm rounded-4">
      <div class="card-body">
        <h2 class="h5">Utilizadores</h2>
        <p class="text-secondary">Registar utilizadores que poderão deixar sugestões.</p>
        <a href="utilizadoresListar.php" class="btn btn-outline-primary">Entrar</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card h-100 shadow-sm rounded-4">
      <div class="card-body">
        <h2 class="h5">Sugestões</h2>
        <p class="text-secondary">Apresentar e gerir sugestões relacionadas com o cardápio.</p>
        <a href="sugestoesListar.php" class="btn btn-outline-primary">Entrar</a>
      </div>
    </div>
  </div>
</section>

  </main>
</body>
</html>

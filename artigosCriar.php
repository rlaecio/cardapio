<?php
require_once("connectionBD.php");

$sql = "SELECT idCategoria, nomeCategoria FROM tb_categoria";
$result = $ligacao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar artigo | Cardápio</title>
  <meta name="description" content="Protótipo HTML com Bootstrap para o trabalho prático Cardápio.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Cardápio</a>
      <button class="navbar-toggler" type="button" aria-label="Abrir navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse show">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="categoriasListar.php">Categorias</a></li>
          <li class="nav-item"><a class="nav-link active" href="artigosListar.php">Artigos</a></li>
          <li class="nav-item"><a class="nav-link" href="utilizadoresListar.php">Utilizadores</a></li>
          <li class="nav-item"><a class="nav-link" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    
<section class="mb-4">
  <h1 class="h2 mb-1">Criar artigo</h1>
  <p class="text-secondary mb-0">Base para registo de um novo artigo do cardápio.</p>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body p-4">

    <form action="artigosInserir.php" method="post">
      
      <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="idCategoria" class="form-select">
          <option value="">Selecione uma categoria</option>

          <?php while($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['idCategoria'] ?>">
              <?= $row['nomeCategoria'] ?>
            </option>
          <?php endwhile; ?>

        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Designação</label>
        <input type="text" name="designacaoArtigo" class="form-control" placeholder="Ex.: Sopa do dia">
      </div>

      <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricaoArtigo" class="form-control" rows="4" placeholder="Descrição do artigo"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Preço</label>
        <input type="number" step="0.01" min="0" name="precoArtigo" class="form-control" placeholder="0.00">
      </div>

      <div class="mb-3">
        <label class="form-label">Disponível</label>
        <select name="disponivelArtigo" class="form-select">
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="artigosListar.php" class="btn btn-outline-secondary">Cancelar</a>
      </div>

    </form>
  </div>
</section>

  </main>
</body>
</html>
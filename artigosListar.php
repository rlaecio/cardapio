<?php
require_once("connectionBD.php");

$sql = "SELECT 
          a.idArtigo,
          c.nomeCategoria,
          a.designacaoArtigo,
          a.precoArtigo,
          a.disponivelArtigo
        FROM tb_artigo a
        INNER JOIN tb_categoria c ON a.idCategoria = c.idCategoria";

$result = $ligacao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de artigos | Cardápio</title>
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
    
<section class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
  <div>
    <h1 class="h2 mb-1">Listagem de artigos</h1>
    <p class="text-secondary mb-0">Página base para listar os artigos do cardápio.</p>
  </div>
  <div class="d-flex gap-2">
    <a href="artigosCriar.php" class="btn btn-primary">Novo registo</a>
    <a href="index.php" class="btn btn-outline-secondary">Voltar ao início</a>
  </div>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Designação</th>
            <th>Preço</th>
            <th>Disponível</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>

        <?php if ($result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['idArtigo'] ?></td>
              <td><?= $row['nomeCategoria'] ?></td>
              <td><?= $row['designacaoArtigo'] ?></td>
              <td><?= number_format($row['precoArtigo'], 2, ',', '.') ?> €</td>
              <td><?= $row['disponivelArtigo'] ? 'Sim' : 'Não' ?></td>
              <td class="text-center">
                <a href="artigosEditar.php?id=<?= $row['idArtigo'] ?>" class="btn btn-sm btn-outline-primary me-2">Editar</a>
                <a href="artigosEliminar.php?id=<?= $row['idArtigo'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center">Sem registos</td>
          </tr>
        <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</section>

  </main>
</body>
</html>
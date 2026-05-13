<?php
require_once("connectionBD.php");

$id = $_GET['id'];

$sql = "SELECT * FROM tb_categoria WHERE idCategoria = $id";
$result = $ligacao->query($sql);
$categoria = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar categoria | Cardápio</title>
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
          <li class="nav-item"><a class="nav-link active" href="categoriasListar.php">Categorias</a></li>
          <li class="nav-item"><a class="nav-link" href="artigosListar.php">Artigos</a></li>
          <li class="nav-item"><a class="nav-link" href="utilizadoresListar.php">Utilizadores</a></li>
          <li class="nav-item"><a class="nav-link" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    
<section class="mb-4">
  <h1 class="h2 mb-1">Editar categoria</h1>
  <p class="text-secondary mb-0">Base para edição de uma categoria existente.</p>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body p-4">

    <form action="categoriasAtualizar.php" method="post">

      <div class="mb-3">
        <label class="form-label">ID da categoria</label>
        <input type="number" name="idCategoria" class="form-control" value="<?= $categoria['idCategoria'] ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Nome da categoria</label>
        <input type="text" name="nomeCategoria" class="form-control" value="<?= $categoria['nomeCategoria'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricaoCategoria" class="form-control" rows="4"><?= $categoria['descricaoCategoria'] ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estadoCategoria" class="form-select">
          <option value="Ativa" <?= $categoria['estadoCategoria'] == 'Ativa' ? 'selected' : '' ?>>Ativa</option>
          <option value="Inativa" <?= $categoria['estadoCategoria'] == 'Inativa' ? 'selected' : '' ?>>Inativa</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="categoriasListar.php" class="btn btn-outline-secondary">Cancelar</a>
      </div>

    </form>
  </div>
</section>

  </main>
</body>
</html>
<?php
require_once("connectionBD.php");

$id = $_GET['id'];

$sql = "SELECT * FROM tb_utilizador WHERE idUtilizador = $id";
$result = $ligacao->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar utilizador | Cardápio</title>
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
          <li class="nav-item"><a class="nav-link" href="artigosListar.php">Artigos</a></li>
          <li class="nav-item"><a class="nav-link active" href="utilizadoresListar.php">Utilizadores</a></li>
          <li class="nav-item"><a class="nav-link" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    
<section class="mb-4">
  <h1 class="h2 mb-1">Editar utilizador</h1>
  <p class="text-secondary mb-0">Base para edição de um utilizador existente.</p>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body p-4">

    <form action="utilizadoresAtualizar.php" method="post">

      <div class="mb-3">
        <label class="form-label">ID do utilizador</label>
        <input type="number" name="idUtilizador" class="form-control" value="<?= $user['idUtilizador'] ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nomeUtilizador" class="form-control" value="<?= $user['nomeUtilizador'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="emailUtilizador" class="form-control" value="<?= $user['emailUtilizador'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" name="telefoneUtilizador" class="form-control" value="<?= $user['telefoneUtilizador'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estadoUtilizador" class="form-select">
          <option value="Ativo" <?= $user['estadoUtilizador'] == 'Ativo' ? 'selected' : '' ?>>Ativo</option>
          <option value="Inativo" <?= $user['estadoUtilizador'] == 'Inativo' ? 'selected' : '' ?>>Inativo</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="utilizadoresListar.php" class="btn btn-outline-secondary">Cancelar</a>
      </div>

    </form>
  </div>
</section>

  </main>
</body>
</html>
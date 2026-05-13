<?php
require_once("connectionBD.php");

$mensagem = "";

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "DELETE FROM tb_artigo WHERE idArtigo = $id";

  if ($ligacao->query($sql)) {
    header("Location: artigosListar.php");
    exit;
  } else {
    $mensagem = "Erro ao eliminar o artigo.";
  }

} else {
  $mensagem = "ID do artigo não fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar artigo | Cardápio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Cardápio</a>
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
    
<section class="card shadow-sm rounded-4">
  <div class="card-body p-5 text-center">

    <h1 class="h3 mb-3">Eliminar artigo</h1>

    <?php if ($mensagem): ?>
      <div class="alert alert-danger"><?= $mensagem ?></div>
    <?php endif; ?>

    <a href="artigosListar.php" class="btn btn-primary mt-3">Voltar à lista</a>

  </div>
</section>

  </main>
</body>
</html>
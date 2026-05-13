<?php
require_once("connectionBD.php");

// utilizadores
$sqlUser = "SELECT idUtilizador, nomeUtilizador FROM tb_utilizador";
$resultUser = $ligacao->query($sqlUser);

// artigos
$sqlArt = "SELECT idArtigo, designacaoArtigo FROM tb_artigo";
$resultArt = $ligacao->query($sqlArt);
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar sugestão | Cardápio</title>
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
          <li class="nav-item"><a class="nav-link" href="utilizadoresListar.php">Utilizadores</a></li>
          <li class="nav-item"><a class="nav-link active" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    
<section class="mb-4">
  <h1 class="h2 mb-1">Criar sugestão</h1>
  <p class="text-secondary mb-0">Base para registo de uma nova sugestão.</p>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body p-4">

    <form action="sugestoesInserir.php" method="post">

      <div class="mb-3">
        <label class="form-label">Utilizador</label>
        <select name="idUtilizador" class="form-select">
          <option value="">Selecione um utilizador</option>

          <?php while($u = $resultUser->fetch_assoc()): ?>
            <option value="<?= $u['idUtilizador'] ?>">
              <?= $u['nomeUtilizador'] ?>
            </option>
          <?php endwhile; ?>

        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Artigo</label>
        <select name="idArtigo" class="form-select">
          <option value="">Sem artigo associado</option>

          <?php while($a = $resultArt->fetch_assoc()): ?>
            <option value="<?= $a['idArtigo'] ?>">
              <?= $a['designacaoArtigo'] ?>
            </option>
          <?php endwhile; ?>

        </select>
        <div class="form-text">Pode ficar sem associação, se a sugestão for geral.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Texto da sugestão</label>
        <textarea name="textoSugestao" class="form-control" rows="5" placeholder="Escreva aqui a sugestão"></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estadoSugestao" class="form-select">
          <option value="Nova">Nova</option>
          <option value="Em análise">Em análise</option>
          <option value="Arquivada">Arquivada</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="sugestoesListar.php" class="btn btn-outline-secondary">Cancelar</a>
      </div>

    </form>
  </div>
</section>

  </main>
</body>
</html>
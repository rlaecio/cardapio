<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar categoria | Cardápio</title>
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
          <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li><li class="nav-item"><a class="nav-link active" href="categoriasListar.php">Categorias</a></li><li class="nav-item"><a class="nav-link" href="artigosListar.php">Artigos</a></li><li class="nav-item"><a class="nav-link" href="utilizadoresListar.php">Utilizadores</a></li><li class="nav-item"><a class="nav-link" href="sugestoesListar.php">Sugestões</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container py-4">
    
<section class="mb-4">
  <h1 class="h2 mb-1">Criar categoria</h1>
  <p class="text-secondary mb-0">Base para registo de uma nova categoria.</p>
</section>

<section class="card shadow-sm rounded-4">
  <div class="card-body p-4">
    <!--
      Formulário preparado com Bootstrap.
      O atributo action já aponta para a página PHP esperada.
      O formando deverá programar a receção, validação e gravação dos dados.
    -->
    <form action="categoriasInserir.php" method="post">
      <div class="mb-3"><label class="form-label">Nome da categoria</label><input type="text" name="nomeCategoria" class="form-control" placeholder="Ex.: Entradas"></div><div class="mb-3"><label class="form-label">Descrição</label><textarea name="descricaoCategoria" class="form-control" rows="4" placeholder="Descrição da categoria"></textarea></div><div class="mb-3"><label class="form-label">Estado</label><select name="estadoCategoria" class="form-select">
      <option value="Ativa">Ativa</option>
      <option value="Inativa">Inativa</option>
    </select></div>
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

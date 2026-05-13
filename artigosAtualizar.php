<?php
require_once("connectionBD.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $id = $_POST['idArtigo'];
  $idCategoria = $_POST['idCategoria'];
  $designacao = $_POST['designacaoArtigo'];
  $descricao = $_POST['descricaoArtigo'];
  $preco = $_POST['precoArtigo'];
  $disponivel = isset($_POST['disponivelArtigo']) ? 1 : 0;

  $sql = "UPDATE tb_artigo SET 
          idCategoria = '$idCategoria',
          designacaoArtigo = '$designacao',
          descricaoArtigo = '$descricao',
          precoArtigo = '$preco',
          disponivelArtigo = '$disponivel'
          WHERE idArtigo = $id";

  $ligacao->query($sql);

  header("Location: artigosListar.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atualizar artigo | Cardápio</title>
  <meta name="description" content="Protótipo HTML com Bootstrap para o trabalho prático Cardápio.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <!-- restante HTML exatamente igual -->
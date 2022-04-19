<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento Ex7</title>
</head>
<body>
    <h1>Processamento Ex7</h1>
    <hr>

<?php
$produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);

$preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);

//$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

$descricao = $_POST["descricao"];
?>

<section>
    <h2>Dados</h2>
    <p>Produto: <?=$produto?></p>
    <p>Preço: R$ <?=number_format($preco, 2, ",", ".")?></p>
    <p>Fabricante: <?=$fabricante?></p>
    <p>Descrição: <?=nl2br($descricao)?></p>
</section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 - resolvido</title>
</head>
<body>
    <h1>Exercício 07 - resolvido</h1>
    <hr>
    <form action="exercicio07-processa.php" method="post">
        <p>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </p>
        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>

<?php 
$fabricantes = ["Dell", "Sony", "LG", "Sega", "XYZ"];
foreach( $fabricantes as $fabricante ){
?>
                <option> <?=$fabricante?> </option>
<?php } ?>
            </select>
        </p>

        <p>
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
        </p>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="" method="POST" >
        <p>
            <label for="id">ID do Produto:</label>
            <input type="text" name="id" autofocus>
        </p>

        <p>
            <label for="title">Titulo:</label>
            <input type="text" name="title">
        </p>

        <p>
            <label for="price">Preço:</label>
            <input type="number" name="price" step="0.01" min="0.1">
        </p>
        
        <p>
            <label for="description">Descrição:</label>
            <input type="text" name="description">
        </p>

        <p>
            <label for="category">Categoria:</label>
            <input type="text" name="category">
        </p>
        
        <input type="submit" value="Enviar Produto">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $price =  $_POST["price"];
        $description = $_POST["description"];
        $category = $_POST["category"];


        echo "ID do produto recebido: " . $id . "<br>" .
            "Título do produto recebido: " . $title . "<br>" .
            "Preço do produto recebido: " . $price . "<br>" .
            "Descrição do produto recebido: " . $description . "<br>" .
            "Categoria do produto recebido: " . $category . "<br>"
            ;
    }
?>
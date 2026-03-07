<?php
    $responseProdutos = file_get_contents("https://fakestoreapi.com/products/");
    $produtos = json_decode($responseProdutos, true);

    $responseUsers = file_get_contents('https://fakestoreapi.com/users');
    $users = json_decode($responseUsers, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <footer>
        <div>
            <h1>Produtos da API Pública</h1>
        </div>
       
    </footer>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>
            </thead>
        <tbody>
            <?php
                foreach($produtos as $produto) {      
                    echo "<tr>
                            <td>{$produto["id"]}</td>
                            <td>{$produto["title"]}</td>
                            <td>{$produto["price"]}</td>
                            <td>{$produto["description"]}</td>
                            <td>{$produto["category"]}</td>
                            <td><img src={$produto["image"]}></td>
                        </tr>";
                }
            ?>
        </tbody>
        </table>

        <div>
            <h2>Usuários</h2>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($users as $user) {
                        echo "<tr>
                                <td>{$user["id"]}</td>
                                <td>{$user["username"]}</td>
                                <td>{$user["email"]}</td>
                                <td>{$user["password"]}</td>
                            </tr>";
                    }      
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
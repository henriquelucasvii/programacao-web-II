<!--Utilizando como base essa aula e o conteúdo que vimos nela:

Adapte o código da aula anterior para receber os dados do formulário e salvar no json

Crie um formulário para cadastro de usuários: id, username, email, password

salve os dados do usuário no json de usuários --> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="" method="POST" >
        <p>
            <label for="id">ID do Usuário:</label>
            <input type="number" name="id" autofocus>
        </p>

        <p>
            <label for="username">Nome do Usuário:</label>
            <input type="text" name="username">
        </p>

        <p>
            <label for="email">Email do Usuário:</label>
            <input type="email" name="email">
        </p>
        
        <p>
            <label for="password">Senha do Usuário:</label>
            <input type="password" name="password">
        </p>

        <input type="submit" value="Cadastrar Conta">
    </form>
</body>
</html>

<?php   

    $arquivo = "data.json";

    $texto = file_get_contents($arquivo);
    $data = json_decode($texto, true);
    $data = $data ? : [];

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        // pega dados do usuário do form
        $id = $_POST["id"];
        $username = $_POST["username"];
        $emailUser = $_POST["email"];
        $passwordUser = $_POST["password"];
        
        // adiciona usuarios com base no form
        $newUsers = [
            "id" => $id,
            "username" => $username,
            "email" => $emailUser,
            "password" => $passwordUser
        ];

        $data[] = $newUsers;
        $newJson = json_encode($data);

        file_put_contents($arquivo, $newJson);

        echo "Id: " . $newUsers["id"] . "<br>";
        echo "Username: " . $newUsers["username"] . "<br>";
        echo "Email: " . $newUsers["email"] . "<br>";
        echo "Password: " . $newUsers["password"];

    }

    
?>
<?php
    
    $users = file_get_contents("https://jsonplaceholder.typicode.com/users");

    $users = json_decode($users, true);
    
    foreach($users as $user) {

        print_r("Nome: " . $user['name'] . "\n");
        print_r("Email: " . $user['email'] . "\n");
        print_r("Cidade: " . $user['address']['city'] . "\n\n");

    }
?>
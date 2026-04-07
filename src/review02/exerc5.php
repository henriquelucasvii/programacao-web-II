<?php

    $users = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    $users = json_decode($users, true);

    foreach($users as $user) {
        echo "Título: " . $user['title'] . "\n";
        echo "Conteúdo: " . $user['body'] . "\n";
        echo "Id: " . $user['id'] . "\n\n";
    }

?>
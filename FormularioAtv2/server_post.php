<?php

    // $nome = $_GET['nome'];
    // $email = $_GET['email'];

    // echo '<p>O nome é: '. $nome.'</p>';
    // echo '<p>O e-mail é: '. $email.'</p>';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo '<p>O nome é: '. $nome.'</p>';
    echo '<p>O e-mail é: '. $email.'</p>';
    echo '<p>A mensagem é: '. $mensagem.'</p>';

?>
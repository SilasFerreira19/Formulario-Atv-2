<?php
    $banco = new PDO('sqlite:meu_banco.db');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql="SELECT * FROM USUARIO WHERE email=:email";

    $stmt = $banco->prepare($sql);

    if($stmt){
        $stmt->execute([':email'=>$email]);
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($usuario && password_verify($senha,$usuario[0]['senha'])){
            $_SESSION['user_id'] = $usuario[0]['id_usuario'];
            $_SESSION['user_email'] = $usuario[0]['email'];
            echo 'Login realizado com sucesso!';
            // $_SESSION['user_name'] = $usuario[0]['nm_usuario'];
            // $_SESSION['user_cpf'] = $usuario[0]['cpf'];
            // $_SESSION['user_password'] = $usuario[0]['senha'];

        }else{
            echo 'Login ou senha incorretos';
        }
    }
?>
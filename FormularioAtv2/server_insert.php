<?php
    $banco = new PDO('sqlite:meu_banco.db');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $data_nasc = $_POST['data_nasc'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $mensagem = $_POST['mensagem'];


    $sql = "INSERT INTO Inscrito (nm_usuario, email, tel, data_nasc, genero, tipo, mensagem) VALUES
    (:nome, :email, :tel, :data_nasc, :genero, :tipo, :mensagem)";


    
    $dataSelecionada = $data_nasc; 
    
    $anoSelecionado = date('Y', strtotime($dataSelecionada));
    
    $anoAtual = date('Y');
    

    if ($anoSelecionado >= $anoAtual) {
        echo "<h1>O ano selecionado não pode ser maior que o ano atual.</h1>";
    } else {
        $stmt = $banco->prepare($sql);

        $stmt->execute([
            ':nome'=>$nome,
            ':email'=>$email,
            ':tel'=>$tel,
            ':data_nasc'=>$data_nasc,
            ':genero'=>$genero,
            ':genero'=>$genero,
            ':tipo'=>$tipo,
            ':mensagem'=>$mensagem
    
        ]);
    
        echo '<h1>Dados inseridos</h1>';
    }
   


?>
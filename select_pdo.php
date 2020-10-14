<?php
    //CONEXÃO
    try{
        $pdo = new PDO("mysql:dbname=cadastropdo;host=localhost", "root", "");

    }catch(\PDOException $e){
        echo "Erro com o Banco de Dados " . $e->getMessage();
    }catch(\PDOException $e){
        echo "Erro generico " . $e->getMessage();
    }

    //Seleção
    $cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
    $cmd->bindValue(":id", 2);
    $cmd->execute();

    //Os registro não vem em Array, mas para deixarmos em Array usamos funções. As funções são:

    //fetch() e fetchAll()

    //fetch() é para quando vem apenas um registro
    //fetchAll() é para quando vem mais de um registro

    $resultado = $cmd->fetch(PDO::FETCH_ASSOC); //O PDO::FETCH_ASSOC organiza os registros para ser com os nomes de acordo com o que está na tabela

    foreach ($resultado as $key => $value){
        echo ($key." : ".$value."<br>");
    }
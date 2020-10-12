<?php
    //-----------------CONEXÃO---------------
    try {
        $pdo = new PDO('mysql:dbname=cadastropdo;host=localhost', 'root', '');
    } catch (\PDOException $e) {
        echo "Erro com o Banco de Dados" . $e->getMessage();
    }
    catch (\Exception $e) {
        echo "Erro Generico" . $e->getMessage();
    }

//----------------UPDATE    -----------------
    $cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :i");
    $cmd->bindValue(":e", "alfaoficial@outlook.com.br");
    $cmd->bindValue(":i", "4");
    $cmd->execute();

    //OU

    $cmd = $pdo->query("UPDATE pessoa SET email = 'alfas@hotmail.com' WHERE id = '6'");
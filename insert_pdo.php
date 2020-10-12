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
    //----------------INSERT-----------------
        //1° Forma
            $res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
            //Substituições
            $res->bindValue(":n", "Maria"); 
            $res->bindValue(":t", "4");
            $res->bindValue(":e", "teste@gamil.com");
            $res->execute();

        //2° Forma
            $res = $pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Alfa', '656', 'alfa@gmail.com')");

    
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

    //----------------DELETE-----------------
        $cmd = $pdo->prepare("DELETE FROM pessoa WHERE telefone = :t");
        $cmd->bindValue(":t", "2");
        $cmd->execute();

        //OU

        $cmd = $pdo->query("DELETE FROM pessoa WHERE telefone = '4'");
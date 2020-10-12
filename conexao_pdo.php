<?php

try {
    $pdo = new PDO('mysql:dbname=cadastro;host=localhost', 'root', '');
} catch (\PDOException $e) {
    echo "Erro com o Banco de Dados" . $e->getMessage();
}
catch (\Exception $e) {
    echo "Erro Generico" . $e->getMessage();
}

    
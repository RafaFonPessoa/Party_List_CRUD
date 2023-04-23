<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <?php
     // Connecting to the SQL
     $servername = "localhost";
     $username = "root";
     $password = "root";
     $dbname = "party_name_list";
     $conn = new mysqli($servername, $username, $password, $dbname);


    // executa a consulta TRUNCATE TABLE para limpar a tabela do banco de dados
    $sql = "TRUNCATE TABLE namelist";
    $result = $conn->query($sql);

    // fecha a conexão com o banco de dados
    $conn->close();
    ?>
</body>
</html>
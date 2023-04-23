<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show List</title>
</head>
<body>
    <?php 
        //Conecta ao banco de dados
        $servername = "localhost";
        $username = "root"; 
        $password = "root";
        $dbname =  "party_name_list";
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Verifica se a coneção foi bem sucedida
        if($conn->connect_error) 
        {
            die("Connection failure: " . $conn->connect_error);
        }

        //Seleciona os itens do banco de dados
        $sql = "SELECT * FROM namelist";
        $result = $conn->query($sql);

        //Exibe os itens em uma lista 
        if($result-> num_rows > 0)
        {
            echo "<ul>";
            while($row = $result->fetch_assoc()) 
            {
                echo "<li>" . $row["id"] . " " . $row["first_name"] . " " . $row["last_name"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "There is no itens in the list!";
        }

        //Fecha conecção
        $conn->close(); 
    ?>
</body>
</html>
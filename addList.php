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
        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "party_name_list";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi bem sucedida
        if ($conn->connect_error) {
            die("Erro connecting: " . $conn->connect_error);
        }

        // Recebe o nome enviado pelo formulário
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];

        // Insere o nome no banco de dados
        $sql = "INSERT INTO namelist (first_name, last_name) VALUES ('$firstname', '$lastname')";
        if ($conn->query($sql) === TRUE) {
            echo "New item add to the list!";
        } else {
            echo "Erro adding item: " . $conn->error;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </body>

    </html>
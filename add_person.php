    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Add Success</title>

        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    </head>
    <body class="container text-center text-white" style="background-color: #22269E;">
        <div class="col text-white" style="margin-top: 40px; margin-bottom: 20px">
            <a class="btn btn-info btn-lg" href="index.html">Return to list</a>
        </div>
        <?php
        // Connecting to the SQL
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "party_name_list";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verify if the connection has sucess
        if ($conn->connect_error) {
            die("Erro connecting: " . $conn->connect_error);
        }

        // Recive the informations fom the inputs
        $firstname = $_POST["first_name"];
        $lastname = $_POST["last_name"];

        // Send the information to the db
        $sql = "INSERT INTO namelist (first_name, last_name) VALUES ('$firstname', '$lastname')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p>New person add to the list!</p>";
        } else {
            echo "Erro adding person: " . $conn->error;
        }

        // Close conection to the db
        $conn->close();
        ?>
    </body>

    </html>
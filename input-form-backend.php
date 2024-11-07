<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic of Database</title>
    <link rel="stylesheet" href="input-form-backend-css.css">
</head>
<body>
    <?php
    $host = 'sql303.infinityfree.com'; 
    $username = 'if0_37670453'; 
    $password = 'FmKYBSzJGX'; 
    $database = 'if0_37670453_testing_PHP'; 

    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO test (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Welcome " . $name . "!</h1><br>" .
            "Your email address is : <b>" . $email . "</b><br><br>" .
            "<h3>Sorry, " . $name . ". We stored your data <span>XD</span></h3>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
    <button><a href="input-form-frontend.php">Back</a></button>
</body>
</html>

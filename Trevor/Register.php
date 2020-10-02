<?php
    //echo $_POST["Username"]."<br>".$_POST["Password"]."<br>";
    if(!isset($_POST["Username"]) || trim($_POST["Username"]) == '')
    {
        setcookie("InvalidUsername", "true",time() + (3600/4));
        header('Location: Register.html');
    }

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9365852";
    $password = "sfY9iJjPAW";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"sql9365852");

    // Check connection
    if ($conn->connect_error) {
      header('Location: ../Dakota/Error.html');
    }

    $sql = "SELECT UserName FROM Users WHERE UserName='".$_POST["Username"]."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        setcookie("InvalidUsername", "true",time() + (3600/4));
    } else {
        setcookie("InvalidUsername", "false",time() + (3600/4));
        $sql = "INSERT INTO Users (UserName, Password) VALUES ('".$_POST["Username"]."', '".$_POST["Password"]."')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    setcookie("Username", $_POST["Username"],time() + 3600);
    setcookie("Password", $_POST["Password"],time() + 3600);

    header('Location: Register.html');

?>

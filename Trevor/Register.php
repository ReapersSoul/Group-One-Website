<?php
    //echo $_POST["Username"]."<br>".$_POST["Password"]."<br>";
    if(!isset($_POST["Username"]) || trim($_POST["Username"]) == '')
    {
        setcookie("InvalidUsername", "true");
        header('Location: Register.html');
    }

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9365852";
    $password = "sfY9iJjPAW";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"sql9365852");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT UserName FROM Users WHERE UserName='".$_POST["Username"]."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        setcookie("InvalidUsername", "true");
    } else {
        setcookie("InvalidUsername", "false");
        $sql = "INSERT INTO Users (UserName, Password) VALUES ('".$_POST["Username"]."', '".$_POST["Password"]."')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    setcookie("Username", $_POST["Username"]);
    setcookie("Password", $_POST["Password"]);

    header('Location: Register.html');

?>

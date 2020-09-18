<?php
    //echo $_POST["Username"]."<br>".$_POST["Password"]."<br>";

    $servername = "sql9.freesqldatabase.com";
    $username = "sql9365852";
    $password = "sfY9iJjPAW";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"sql9365852");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Users WHERE UserName='".$_POST["Username"]."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row["UserName"]==$_POST["Username"] && $row["Password"]==$_POST["Password"]){
            //echo "id: " . $row["UserName"]. "<br>";
            setcookie("Username", $_POST["Username"]);
            setcookie("Password", $_POST["Password"]);
            setcookie("InvalidLogin", "false");
        }
      }
    } else {
        setcookie("InvalidLogin", "true");
    }

    $conn->close();

    header('Location: Login.html');
?>

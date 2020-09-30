<?php
    //echo $_POST["Username"]."<br>".$_POST["Password"]."<br>";

    $servername = "sql9.freesqldatabase.com";
    $username = "Admin";
    $password = "kX2SUCX6D8MNxYJ";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"sql9365852");

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = mysqli_real_escape_string ($conn, "SELECT * FROM Users WHERE UserName='".$_POST["Username"]."'");
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row["UserName"]==$_POST["Username"] && $row["Password"]==$_POST["Password"]){
            //echo "id: " . $row["UserName"]. "<br>";
            setcookie("Username", $_POST["Username"],time() + 3600);
            setcookie("Password", $_POST["Password"],time() + 3600);
            setcookie("InvalidLogin", "false",time() + (3600/4));
        }
      }
    } else {
        setcookie("InvalidLogin", "true",time() + (3600/4));
    }

    $conn->close();

    header('Location: Login.html');
?>

<!-- Trevor -->
<?php
    //echo $_POST["Username"]."<br>".$_POST["Password"]."<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"useraccts");

    // Check connection
    if ($conn->connect_error) {
      header('Location: ./Error.php');
    }

    $Uname = mysqli_real_escape_string ($conn, $_POST["Username"]);
    $result = $conn->query("SELECT * FROM Users WHERE UserName='".$Uname."'");

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($row["UserName"]==$_POST["Username"] && $row["Password"]==$_POST["Password"]){
            //echo "id: " . $row["UserName"]. "<br>";
            setcookie("Username", $_POST["Username"],time() + 3600);
            setcookie("Password", $_POST["Password"],time() + 3600);
            setcookie("InvalidLogin", "false",time() + (3600/4));
            $conn->close();
            header('Location: ./member.php');
        }
      }
    } else {
        setcookie("InvalidLogin", "true",time() + (3600/4));
        $conn->close();
        echo "not valid";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>

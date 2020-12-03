<!-- Carter -->
<?php

if ($_POST["Password"] == $_POST["CnfPassword"]) {
    setcookie("Username", $_POST["Username"],time() + 3600);
    setcookie("Password", $_POST["Password"],time() + 3600);
    setcookie("InvalidRegister", "false",time() + (3600/4));
    header('Location: ./member.php');
              
}
else {
    setcookie("InvalidRegister", "true" ,time() + (3600/4));
    
    echo "not valid";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
}

?>
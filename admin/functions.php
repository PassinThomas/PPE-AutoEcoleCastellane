<?php

function auth($lvl){// fonction qui controle si le lvl de l utilisateur est suffisant
    
    if(isset($_SESSION['lvl']) && $_SESSION['lvl'] >= $lvl)
        return true;
    else
        header("Location:login/pdo_login.php");
}
            

?>
     
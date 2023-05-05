<?php

setcookie("data[username]",$user[0]["username"],time() -1,"/");
setcookie("data[password]",$user[0]["password"],time() -1,"/");


header("location: ../index.php?error=none");
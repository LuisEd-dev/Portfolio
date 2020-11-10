<?php

$con = mysqli_connect("localhost", "root", "", "db190013");
if(mysqli_connect_errno()){
    echo "Falha ao se Conectar ao MySQL: " . mysqli_connect_error();
} else {
    mysqli_select_db($con, "db190013");
}
?>
<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "root", "bd");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM category WHERE id = '$userid'";
    if($conn->query($sql)){
         
        header("Location: del.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>
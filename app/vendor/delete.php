<?php
    session_start();
    include("connection.php");

    $q = "DELETE FROM users_trips WHERE `user_id`={$_SESSION["user_id"]} AND trip_id={$_POST["trip_id"]}";
    $result = mysqli_query($conn,$q);

    if (!$result){
        echo("</table></div>".mysqli_error($conn));

    } else {
        echo "<script> location.replace('shoping-cart.php'); </script>";
    }

?>
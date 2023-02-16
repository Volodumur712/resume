<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 
    if(!empty($_GET)) {

        $sql = 'DELETE FROM portfolio WHERE id = ' . $_GET['id'];
        
        if (mysqli_query($conn, $sql)) {
            echo "Видалено";
            header("Location: /citrus/posts.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
        mysqli_close($conn);
    }
?>
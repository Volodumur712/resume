<?php
// require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
// include "../admin/partials/header.php";

    if(!empty($_POST)) {
        // echo $_POST['name'] . " - " . $_POST['email'];
        $sql = "INSERT INTO `username` (`name`, `email`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "');";
        //var_dump($sql);
        // виконання запиту
        if (mysqli_query($conn, $sql)) {
            echo "Нового користувача додано. <a href='/admin/users.php'>Повернутись</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }

    /*$sql = "DELETE FROM users WHERE id = 3;
    if (mysqli_query($conn, $sql)) {
        echo "deleted";
    } else {
        echo "error: " . $sql . "<br>" . mysql_error($conn); 
    }
    mysqli_close($conn);*/

    ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Таблиця про користувачів</h6>
    </div>
    <div class="card-body">
        <form action="?page=add" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="name" class="form-control" id="username" aria-describedby="NameHelp" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" name="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your mail">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>        
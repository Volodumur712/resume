<?php
    if(!empty($_POST)) {
        $sql = "UPDATE `users` SET `u_name` = '" . $_POST['u_name'] . "', `u_email` = '" . $_POST['u_email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
        // UPDATE `users` SET `u_name` = 'rewr', `u_email` = 'rew@werq' WHERE `users`.`id` = 4;
        //var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "<h2>Дані змінено <a href='/citrus/users.php'>Повернутись</a></h2>";
            //header("Location: ../admin/users.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }

    // для виведення value 
    $sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();

    ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Дані про користувачів</h6>
    </div>
    <div class="card-body">
        <form action="?page=edit&id=<?php echo $_GET['id'];?>" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="u_name" class="form-control" id="users" aria-describedby="NameHelp" placeholder="Enter your name" value="<?php echo $row['u_name']; ?>">
            </div>

            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" name="u_email" class="form-control" id="users" aria-describedby="emailHelp" placeholder="Enter your mail" value="<?php echo $row['u_email']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>    

 
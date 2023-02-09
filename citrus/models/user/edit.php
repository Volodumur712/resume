<?php
    if(!empty($_POST)) {
        $sql = "UPDATE `username` SET `name` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `id` = " . $_GET['id'] . ";";
        if (mysqli_query($conn, $sql)) {
            echo "<h2>Дані змінено <a href='/admin/users.php'>Повернутись</a>";
            //header("Location: ../admin/users.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }

    // для виведення value 
    $sql = "SELECT * FROM username WHERE id = " . $_GET['id'];
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
                <input type="text" name="name" class="form-control" id="username" aria-describedby="NameHelp" placeholder="Enter your name" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-group">
                <label for="username">Email:</label>
                <input type="email" name="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your mail" value="<?php echo $row['email']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>    

 
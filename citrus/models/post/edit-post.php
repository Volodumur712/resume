<?php
    if(!empty($_POST)) {

        // $sql = "UPDATE `posts` SET `twit` = 'змінив' WHERE `posts`.`id` = " . $_GET['id'] . ";";  // це працює 

        $sql = "UPDATE `posts` SET `twit` = '" . $_POST['twit'] . "' WHERE `posts`.`id` = " . $_GET['id'] . ";";  // з формулою не працює

        var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "<h2>Дані змінено <a href='/admin/posts.php'>Повернутись</a>";
            //header("Location: ../admin/users.php");
            // UPDATE `posts` SET `twit` = '55555555555551010' WHERE `posts`.`id` = 2;
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }

    $sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Дані про пости</h6>
    </div>
    <h4>Редагування дописів</h4>
    <div class="card-body">
        <form action="?page=edit-post&id=<?php echo $_GET['id'];?>" method="POST">
            <div class="form-group">
                <label for="twit">twit</label>
                <input type="text" name="twit" class="form-control" id="twit" aria-describedby="twitHelp" placeholder="Enter your twit" value="<?php echo $row['twit']; ?>">
            </div>

            <div class="form-group">
                <label for="twit">ID:</label>
                <input type="text" name="user_id" class="form-control" id="twit" aria-describedby="idHelp" placeholder="Enter your id"  value="<?php echo $row['user_id']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>    

 
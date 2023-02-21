<?php
    /*if(!empty($_POST)) {
        $sql = "INSERT INTO `posts` (`twit`, `user_id`, `created`) 
        VALUES ('" . $_POST['twit'] . "', '" . $_POST['user_id'] . "', current_timestamp());";
        // var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "Новий допис додано. <a href='/admin/posts.php'>Повернутись</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
     }*/
?>

<?php 
    if(!empty($_POST)) {
        $twit = mysqli_real_escape_string($conn, $_POST['twit']); 
        $userId = mysqli_real_escape_string($conn, $_POST['user_id']); 

        $sql = "INSERT INTO `posts` (`twit`, `user_id`, `created`) 
        VALUES ('$twit', '$userId', current_timestamp());";

        // var_dump($sql); 

        if (mysqli_query($conn, $sql)) {
            echo "Новий допис додано. <a href='/admin/posts.php'>Повернутись</a>"; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
        } 
    } 
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Дані про дописи</h6>
    </div>
    
    <div class="card-body">
        <form action="?page=addpost" method="POST">
            <div class="form-group">
                <label for="twit">twit</label>
                <input type="text" name="twit" class="form-control" id="twit" placeholder="Enter your twit">
            </div>

            <div class="form-group">
                <label for="twit">ID:</label>
                <input type="text" name="user_id" class="form-control" id="twit" placeholder="Enter id">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>        
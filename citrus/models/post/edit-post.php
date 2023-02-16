<?php
    if(!empty($_POST)) {
        $sql = "UPDATE `portfolio` SET `title` = '" . $_POST['title'] . "', `description` = '" . $_POST['description'] . "',
         `hrefka` = '" . $_POST['hrefka'] . "' WHERE `portfolio`.`id` = " . $_GET['id'] . ";";
        //var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "<h5>Дані змінено <a href='/citrus/posts.php'>Повернутись</a></h5>";
            //header("Location: ../admin/users.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }

    $sql = "SELECT * FROM portfolio WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Дані про портфоліо</h6>
    </div>
    <h4>Редагування портфоліо</h4>
    <div class="card-body">
        <form action="?page=edit-post&id=<?php echo $_GET['id'];?>" method="POST">
            <div class="form-group">
                <label for="twit">Title</label>
                <input type="text" name="title" class="form-control" id="twit" aria-describedby="titleHelp" 
                placeholder="Enter your title" value="<?php echo $row['title']; ?>">
            </div>

            <div class="form-group">
                <label for="twit">Description</label>
                <input type="text" name="description" class="form-control" id="twit" aria-describedby="titleHelp" 
                placeholder="Enter your description" value="<?php echo $row['description']; ?>">
            </div>

            <div class="form-group">
                <label for="twit">Href</label>
                <input type="text" name="hrefka" class="form-control" id="twit" aria-describedby="titleHelp" 
                placeholder="Enter a href" value="<?php echo $row['hrefka']; ?>">
            </div>

            <!-- <div class="form-group">
                <label for="twit">ID:</label>
                <input type="text" name="user_id" class="form-control" id="twit" aria-describedby="idHelp" 
                placeholder="Enter your id"  value="<?php //echo $row['user_id']; ?>">
            </div> -->

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>    

 

<?php
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php 
    if(!empty($_POST)) {
        $titl = ($_POST['titl']); 
        $hrefs = ($_POST['hrefs']); 
        $descript = ($_POST['descript']);
        $sql = "UPDATE `links` SET `titl` = '" . $_POST['titl'] . "', `hrefs` = '" . $_POST['hrefs'] . "',
         `descript` = '" . $_POST['descript'] . "' WHERE `links`.`id` = " . $_GET['id'] . ";";
        // var_dump($sql); 
        if (mysqli_query($conn, $sql)) {
            echo "<h5>Дані змінено <a href='?p=home-adm.php'>Повернутись</a></h5>"; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
        } 
    } 
    // для виведення value 
    $sql = "SELECT * FROM links WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
?>

<div class="container">

    <form class="form-group" enctype="multipart/form-data" action=""
     method="POST">
        <div class="text-center m-5">
            <input type="text" name="titl" value="<?php echo $row['titl']; ?>" style="width: 70%;" 
            class="border border-success rounded-pill border-3">
        </div>

        <div class="m-3 p-4 border border-success rounded-pill border-3">
            <label for="descript" class="text-center m-3">Main description</label>    
            <input type="text" name="descript" value="<?php echo $row['descript']; ?>" style="width: 70%;">
            <textarea class="form-control" name="descript" id="descript" rows="2"></textarea>
        </div>

        <div class="text-center m-3">
            <input type="text" name="hrefs" value="<?php echo $row['hrefs']; ?>" style="width: 70%;">
        </div>
            <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>


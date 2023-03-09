
<?php
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php 
    if(!empty($_POST)) {
        $titl = mysqli_real_escape_string($conn, $_POST['titl']); 
        $hrefs = mysqli_real_escape_string($conn, $_POST['hrefs']); 
        $descript = mysqli_real_escape_string($conn, $_POST['descript']);

        $sql = "INSERT INTO `links` (`titl`, `hrefs`, `descript`) 
        VALUES ('$titl', '$hrefs', '$descript');";
        // var_dump($sql); 

        if (mysqli_query($conn, $sql)) {
            echo "Новий допис додано. <a href='?p=home-adm.php'>Повернутись</a>"; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
        } 
    } 
?>

<div class="container">

    <form class="form-group" enctype="multipart/form-data" action="#" method="post">
        <div class="text-center m-5">
            <input type="text" name="titl" placeholder="    Title" style="width: 70%;"class="border border-success rounded-pill border-3">
        </div>

        <div class="m-3 p-4 border border-success rounded-pill border-3">
            <label for="description" class="text-center m-3">Main description</label>    
            <textarea class="form-control" name="descript" id="description" rows="2" value="description"></textarea>
        </div>

        <div class="text-center m-3">
            <input type="text" name="hrefs" value="https://" style="width: 70%;">
        </div>
        
        <!-- <div class="text-center m-3">
            <label for="filter" class="form-label">Filter</label>
                <input class="form-control" name="filter" list="datalistOptions" id="Filter" placeholder="Select ...">
                <datalist id="datalistOptions">
                <option value="filter-js">
                <option value="filter-html">
                <option value="filter-php">
            </datalist>
        </div> -->

        <!-- <div class="d-grid gap-2 col-4 mx-auto m-5"> -->
            <button class="btn btn-success">Send</button>
        
    </form>
</div>


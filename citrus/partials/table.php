<?php
//include "partials/header.php";
require($_SERVER['DOCUMENT_ROOT'] . 'admin/partials/header.php');

?>

<h2>Палочки-твікс</h2>
    <!-- форма для додавання користувача-->
    <form action="../admin/add-user.php" method="POST">
        <label>Name: <input type="text" name="name"></label>
        <br/>
        <label>Email: <input type="text" name="email"></label>
        <br/>
        <button>Save</button>
    </form>

    <!-- вибір таблиці -->
    <?php
    $sql = "SELECT * FROM username";
    $result = $conn->query($sql);
    ?>    
    <!-- таблиця шапка-->
    <table id="customers">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Option</th>
        <th>Password</th>
        <th>Role</th>
    </tr>

    <!-- цикл для вибору даних з таблиці-->
    <?php
        while($row = $result->fetch_assoc())   //отримати всі строки по одній
        {
        ?>    
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="../admin/edit-user.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button class="btnDlt" data-id="<?php echo $row['id']; ?>">Delete</button>
                </td>
                <td><?php echo $row['role']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <!-- <h2>Hello, <?php echo $user['name'] ?> !</h2> -->
  
    <a href="../logout.php"> Розлогінитися </a>

<?php 
//require('partials/footer.php');
  require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/footer.php');
?>
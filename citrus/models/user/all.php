

<h1 class="h3 mb-2 text-gray-800">Users</h1>
                    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Табличка про користувачів 
            <a href="?page=add" class="btn btn-info"> </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mail</th>
                        <th>Role</th>
                        <th>Option</th>
                    </tr>
                </thead>              
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM users WHERE id!=" . $userID;  // не відображає адміна
                               $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                // цикл який шукає кожну наступну строчку і вставляє у змінну row
                        ?>    
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['u_name']; ?></td>
                            <td><?php echo $row['u_email']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td>             
                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                <a href="/citrus/models/user/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Del</a>
                            </td>
                        </tr>

                           <?php
                           }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>


<h1 class="h3 mb-2 text-gray-800">Posts</h1>
                    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Дані про дописи та коментарі 
            <a href="?page=addpost" class="btn btn-info"> </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>twit</th>
                        <th>user-ID</th>
                        <th>Created</th>
                        <th>Option</th>
                    </tr>
                </thead>              
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM posts WHERE id!=" . $userID;  // не відображає адміна
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                        ?>    
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['twit']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['created']; ?></td>
                            <td>
                                <a href="?page=edit-post&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pen"></i>Edit</a>
                                <a href="/citrus/models/post/del-post.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Del</a>
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
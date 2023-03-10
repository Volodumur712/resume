
<?php
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>
<!-- ======= Hero Section ======= -->
<section id="" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4"
     aria-expanded="false" aria-controls="collapseExample">Links</h4>
    <ul class="collapse list-group list-group-horizontal" id="collapseExample4">
    
        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_courses.php" target="_blank"><i class='bx bx-code-alt'></i><span>Courses</span></a>
        </li>
        
        <!-- <li class="list-group-item flex-fill">
            <a href="/?p=my_link_projects.php" target="_blank"><i class='bx bx-code-alt'></i><span>Projects</span></a>
        </li> -->

        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_html.php" target="_blank"><i class='bx bx-code-alt'></i><span>HTML CSS</span></a>
        </li>

        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_goit.php" target="_blank"><i class='bx bx-code-alt'></i><span>Go IT</span></a>
        </li>

        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_js.php" target="_blank"><i class='bx bx-code-alt'></i><span>JS</span></a>
        </li>

        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_jq.php" target="_blank"><i class='bx bx-code-alt'></i><span>jQuery</span></a>
        </li>

        <li class="list-group-item flex-fill">
            <a href="/?p=my_link_time.php" target="_blank"><i class='bx bx-code-alt'></i><span>Time</span></a>
        </li>

        <!-- <li class="list-group-item flex-fill">
            <a href=""><i class='bx bx-code-alt'></i><span>a</span></a>
        </li> -->

        <li class="list-group-item flex-fill" <?php if(!isset($_GET['p']) || $_GET['p'] == 'mylinks'): ?> <?php endif; ?> >
          <a href="/?p=my_links.php" target="_blank"><i class='bx bx-code-alt'></i><span>My any links</span></a>
        </li>
    </ul>
      <h1>Volodymyr Slutsenko</h1>
      <!-- <h4 class="text-success text-center m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample9"
     aria-expanded="false" aria-controls="collapseExample">Table</h4> -->

        <table class="table caption-top">
        <caption><a href="?p=add_my_link.php" class="btn btn-info">Додати</a></caption>
        <thead class="table-dark">
            <tr>
            <th scope="col"></th>
            <th scope="col">Що це</th>
            <th scope="col">Опис</th>
            <th scope="col">Посилання</th>
            </tr>
        </thead>
        <tbody>
        <?php
           $sql = "SELECT * FROM links";
              $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
               // цикл який шукає кожну наступну строчку і вставляє у змінну row
        ?>  
            <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['titl']; ?></td>
            <td>
            <a href="?p=ad_edit_my_link.php&id=<?php echo $row['id']; ?>"><i class="bx bx-paint"></i>Edit</a>
                <?php echo $row['descript']; ?>
            </td>
            <td>
                <a href="<?php echo $row['hrefs']; ?>" target="_blank" class="btn btn-success"><i class="bx bx-check-shield"></i>   тут</a>
            </td>
            </tr>
            <?php
               }
            ?>
        </tbody>
        </table>
      
    </div>
</section>
<!-- End Hero -->

  
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

  <main id="main">
              <?php
               if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
                   $sql = 'SELECT * FROM users WHERE id=' . $_SESSION["user_id"];
                   //var_dump($sql);
                   $result = mysqli_query($conn, $sql);
                   $user = $result->fetch_assoc();

                   if($user['role'] != "admin") {  ?>
                    print("<script language=javascript>
                    window.alert('You not admin');
                    window.location = "../login.php";
                    </script>");
                    <?php 
                    /* header("Location: ../login.php"); */ ?>
                    <?php }  

              require($_SERVER['DOCUMENT_ROOT'] . '/pages-admin/hedmenu.php');
               } else {
              ?>
              <?php
              }   
              ?>

  <?php
      if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
       $pagess = 'jsbasics';
      if(isset($_GET['p'])) {
        
      switch ($_GET['p']) {
        case 'home-adm.php':
        $pagess = 'home-adm';
        break;
        case 'git.php':
        $pagess = 'git';
        break;
        case 'htmcss.php':
        $pagess = 'htmcss';
        break;
        case 'ph_p.php':
        $pagess = 'ph_p';
        break;
        case 'wordpres.php':
        $pagess = 'wordpres';
        break;
        case 'jsbasics.php':
        $pagess = 'jsbasics';
        break;
        case 'fril.php':
        $pagess = 'fril';
        break;
        case 'add-portfol.php':
        $pagess = 'add-portfol';
        break;
        case 'add_fon_image.php':
        $pagess = 'add_fon_image';
        break;
        
        case 'my_link_courses.php':
        $pagess = 'my_link_courses';
        break;
        case 'my_link_projects.php':
        $pagess = 'my_link_projects';
        break;
        case 'my_links.php':
        $pagess = 'my_links';
        break;
        case 'my_link_html.php':
        $pagess = 'my_link_html';
        break;
        case 'my_link_goit.php':
        $pagess = 'my_link_goit';
        break;
        case 'my_link_js.php':
        $pagess = 'my_link_js';
        break;
        case 'my_link_jq.php':
        $pagess = 'my_link_jq';
        break;
        case 'my_link_time.php':
        $pagess = 'my_link_time';
        break;

        default:
        $pagess = 'htmcss';
        break;
        }
      }
      require($_SERVER['DOCUMENT_ROOT'] . "/pages-admin/$pagess.php"); 
       // обовязково подвійні лапки
      } else{
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/home.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/about.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/scill.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/resume.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/portfolio.php');

   //require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/port_bd.php');
   //require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/calculator.php');
   //require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages-user/contact.php');
  }
  ?>

  </main>
  <!-- End #main -->

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>

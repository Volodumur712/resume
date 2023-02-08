<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

  <main id="main">

  <?php
      if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
       $pagess = 'home-adm';
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
        default:
        $pagess = 'htmcss';
        break;
        }
      }
      require($_SERVER['DOCUMENT_ROOT'] . "/pages/$pagess.php"); 
       // обовязково подвійні лапки
      } else{
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/home.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/about.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/scill.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/resume.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/portfolio.php');
   //require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/adminka.php');

   /*require($_SERVER['DOCUMENT_ROOT'] . '/partials/page-adm/git.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/page-adm/htmcss.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/page-adm/ph_p.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/page-adm/wordpres.php');*/
   //require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/testimonials.php');
   require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/contact.php');
  }
  ?>

  </main>
  <!-- End #main -->

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>
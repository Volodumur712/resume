<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>All courses</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets-adm/img/favicon.png" rel="icon">
  <link href="../assets-adm/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <link href="../assets-adm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets-adm/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets-adm/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets-adm/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets-adm/vendor/aos/aos.css" rel="stylesheet">

  <!-- <link href="../assets-adm/css/main.css" rel="stylesheet"> -->
<!-- ++++ -->
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
</head>


<body>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    

    <nav id="navbar" class="navbar">
      <ul>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> <?php endif; ?> ><a href="/?p=home.php" class="active">Home</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'git'): ?> <?php endif; ?> ><a href="/?p=git.php">Git</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'htmcss'): ?> <?php endif; ?> ><a href="/?p=htmcss.php">HTML</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'ph_p'): ?> <?php endif; ?> ><a href="/?p=ph_p.php">PHP</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'wordpres'): ?> <?php endif; ?> ><a href="/?p=wordpres.php">Wordpres</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'jsbasics'): ?> <?php endif; ?> ><a href="/?p=jsbasics.php">js basics</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'fril'): ?> <?php endif; ?> ><a href="/?p=fril.php">Frilans</a></li>
      </ul>
    </nav><!-- .navbar -->

    <div class="header-social-links">
      <a href="https://www.facebook.com/profile.php?id=100022273695820" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://instagram.com/volodumurs777?igshid=ZDdkNTZiNTM=" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/volodymyr-slutsenko-85aa59222" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
      <a href="https://t.me/Vova712" target="_blank" class="linkedin"><i class="bi bi-telegram"></i></a>
      <!-- <a href="" target="_blank" class="linkedin"><i class="fab fa-viber"></i></a> -->
      <a href="mailto:citrusdolar@gmail.com" target="_blank" class="linkedin"><i class="bi bi-envelope-at"></i></a>
    </div>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->


<?php
/*require($_SERVER['DOCUMENT_ROOT'] . '/partials/link-adm.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header-adm.php');*/
?>

  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        
      <?php
       $pagess = 'home';
      if(isset($_GET['p'])) {
        
      switch ($_GET['p']) {
        case 'home.php':
        $pagess = 'home';
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
      require($_SERVER['DOCUMENT_ROOT'] . "/partials/page-adm/$pagess.php"); 
       // обовязково подвійні лапки
    ?>		

      </div>
    </div>
  </section>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>
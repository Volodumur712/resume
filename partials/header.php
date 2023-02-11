
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
?>

<body>
<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">
  <nav id="navbar" class="navbar nav-menu">
  <ul>
  <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
        <li><?php
               if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
                   $sql = 'SELECT * FROM userku WHERE id=' . $_SESSION["user_id"];
                   //var_dump($sql);
                   $result = mysqli_query($conn, $sql);
                   $user = $result->fetch_assoc();

                   if($user['role'] != "admin") {  ?>
                    print("<script language=javascript>
                    window.alert('You not admin');
                    window.location = "../login.php";
                    </script>");
                    /* header("Location: ../login.php"); */
                    <?php }  
            ?>
              <h1 class="text-danger"> <?php echo $user['u_name']; ?>  </h1>
              <?php
               } else {
              ?>
              <?php
              }   
              ?>
        </li>
        <a href="/citrus/index.php" target="_blank" class="active"><i class="bi bi-telegram"></i>Adminka</a>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'jsbasics'): ?> <?php endif; ?> >
          <a href="/?p=jsbasics.php"  ><i class="bx bx-shield-quarter"></i><span>Js basics</span></a>
        </li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'htmcss'): ?> <?php endif; ?> >
          <a href="/?p=htmcss.php"><i class="bx bx-file-blank"></i> <span>HTML</span></a>
        </li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'fril'): ?> <?php endif; ?> >
          <a href="/?p=fril.php"><i class='bx bx-euro'></i><span>Frilans</span></a>
        </li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'ph_p'): ?> <?php endif; ?> >
          <a href="/?p=ph_p.php"><i class="bx bx-book-content"></i> <span>PHP</span></a>
        </li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'wordpres'): ?> <?php endif; ?> >
          <a href="/?p=wordpres.php"><i class='bx bx-code-block'></i><span>Wordpres</span></a>
        </li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'git'): ?> <?php endif; ?> >
          <a href="/?p=git.php"><i class='bx bxs-like bx-tada'></i><span>Git</span></a>
        </li>
				<!-- <li class="text-danger"><a href="/logout.php/">Logout</a></li> -->
				<?php }else{ ?>
    
      <li><a href="#hero" class="nav-link scrollto active">
        <i class="bx bx-home"></i> <span>Home</span></a>
      </li>
      <li><a href="#about" class="nav-link scrollto">
        <i class="bx bx-user"></i> <span>About</span></a>
      </li>
      <li><a href="#scill" class="nav-link scrollto">
        <i class="bx bx-message-square-error"></i> <span>Scill</span></a>
      </li>
      <li><a href="#resume" class="nav-link scrollto">
        <i class="bx bx-file-blank"></i> <span>Resume</span></a>
      </li>
      <li><a href="#portfolio" class="nav-link scrollto">
        <i class="bx bx-book-content"></i> <span>Portfolio</span></a>
      </li>
      <!-- <li><a href="#adminka" class="nav-link scrollto">
        <i class="bx bx-server"></i> <span>Register</span></a>
      </li> -->
      <!-- <li><a href="#testimonials" class="nav-link scrollto">
        <i class="bx bx-user"></i> <span>Testimonials</span></a>
      </li> -->
      <li><a href="#contact" class="nav-link scrollto">
        <i class="bx bx-envelope"></i> <span>Contact</span></a>
      </li>
      <?php } ?>
<?php /*
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> <?php endif; ?> ><a href="/?p=home.php" class="active">Home</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'git'): ?> <?php endif; ?> ><a href="/?p=git.php">Git</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'htmcss'): ?> <?php endif; ?> ><a href="/?p=htmcss.php">HTML</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'ph_p'): ?> <?php endif; ?> ><a href="/?p=ph_p.php">PHP</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'wordpres'): ?> <?php endif; ?> ><a href="/?p=wordpres.php">Wordpres</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'jsbasics'): ?> <?php endif; ?> ><a href="/?p=jsbasics.php">js basics</a></li>
        <li <?php if(!isset($_GET['p']) || $_GET['p'] == 'fril'): ?> <?php endif; ?> ><a href="/?p=fril.php">Frilans</a></li>
*/ ?>
      <!-- <li><a href="/?p=home.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
      <li><a href="/?p=about.php" class="nav-link scrollto"><i class="bx bx-user-circle"></i> <span>About</span></a></li>
      <li><a href="/?p=scill.php" class="nav-link scrollto"><i class="bx bx-message-square-error"></i> <span>Scill</span></a></li>
      <li><a href="/?p=resume.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
      <li><a href="/?p=portfolio.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
      <li><a href="/?p=services.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
      <li><a href="/?p=testimonials.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Testimonials</span></a></li>
      <li><a href="/?p=contact.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->

    </ul>
  </nav>
  <!-- .nav-menu -->

</header>
<!-- End Header -->
  

<?php
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Volodymyr Slutsenko</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
      <div class="social-links">

                  <div class="text-danger">
                    <?php
                    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {

                        $sql = 'SELECT * FROM userku WHERE id=' . $_SESSION["user_id"];
                        //var_dump($sql);
                        $result = mysqli_query($conn, $sql);
                        $user = $result->fetch_assoc();
                    ?>
                        <h1 class="text-danger"> Hi, <?php echo $user['u_name']; ?> ! </h1>
                        <?php
                        } else {
                            ?>
                            
                            <?php
                        }   
                        ?> 
                  </div>
        
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="https://www.linkedin.com/in/volodymyr-slutsenko-85aa59222" target="_blank" class="linkedin">
          <i class="bx bxl-linkedin"></i></a>
        <a href="https://t.me/Vova712" target="_blank" class="telegram">
          <i class="bx bxl-telegram"></i></a>
        <a href="https://djinni.co/q/caf18ee77b/" target="_blank" class="djinni">
          Djinni</a>
        <a href="https://www.upwork.com/freelancers/~01c155c7d244964a9d/" target="_blank" class="upwork">
          <i class="bx bxl-upwork"></i></a>
        <a href="https://dou.ua/users/volodimir-slutsenko-1/" target="_blank" class="dou">
          DOU</a>
        <a href="https://twitter.com/Volodumur712" target="_blank" class="twitter">
          <i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100022273695820" target="_blank" class="facebook">
          <i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/volodumurs777?igshid=ZDdkNTZiNTM=" target="_blank" class="instagram">
          <i class="bx bxl-instagram"></i></a>
      
      </div>
    </div>
  </section>
  <!-- End Hero -->

  
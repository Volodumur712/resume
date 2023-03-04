
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
    <?php
      if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
      <?php } else { ?>
      <h3>Volodymyr Slutsenko</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <?php } ?>
      <div class="social-links">
      <?php
      if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
          <a href="https://theprotocol.it/" target="_blank"> <span>pro</span></a>
          <a href="https://app.netlify.com/teams/citrusdolar/overview" target="_blank"> <span>Nlf</span></a>
        <?php } else { ?>
          <a href="https://www.linkedin.com/in/volodymyr-slutsenko-85aa59222" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://t.me/Vova712" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
          <a href="https://twitter.com/Volodumur712" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100022273695820" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/volodumurs777?igshid=ZDdkNTZiNTM=" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        
        
          
          <a href="https://djinni.co/q/caf18ee77b/" target="_blank" class="djinni">Djin</a>
          <a href="https://www.upwork.com/freelancers/~01c155c7d244964a9d/" target="_blank" class="upwork"><i class="bx bxl-upwork"></i></a>
          <a href="https://dou.ua/users/volodimir-slutsenko-1/" target="_blank" class="dou">Dou</a>
          <a href="https://github.com/Volodumur712?tab=repositories" target="_blank" class="git"> <span>GIT</span></a>

          <a href="https://www.fiverr.com/citrus712?public_mode=true" target="_blank" class="git"> <span>Fiverr</span></a>
          <a href="https://www.guru.com/freelancers/citrus712" target="_blank" class="git"> <span>Guru</span></a>
          <a href="https://freelancehunt.com/applicant/eY9lb.html" target="_blank" class="git"> <span>F-h</span></a>
          <a href="https://www.freelancer.com/u/citrus1989" target="_blank" class="git"> <span>Free</span></a>
        <?php } ?>
        
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
      
      </div>
      <div class="copyright">
         <?php
            if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
                  <a href="/logout.php/">Logout</a>
                  <?php } else { ?>
                    <p> Copyright &copy;<script>
                      // document.write(new Date().getMonth()),
                      document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="bi bi-heart-fill" aria-hidden="true"></i>
                      by <a href="https://app.netlify.com/teams/citrusdolar/sites" target="_blank">Slutsenko Volodymyr</a></p>
                      </br>
                    
              <?php } ?>                  
      </div>
      
      <?php
      if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) { ?>
      <?php } else { ?>
      <div class="d-flex">
            <div class="col-md-5 p-2">
	                <span class="icon icon-map-marker"></span><span class="text"><a href="https://www.google.com/maps/place/,
                  +76000/@48.9118647,24.6470887,12z/data=!3m1!4b1!4m5!3m4!1s0x4730c16c34b0381d:0xd6d32394e59e41c2!8m2!3d48.922633!4d24.711117" 
                  target="_blank&quot;">Ivano-Frankivsk, Prikarpattia, Ukraine</a></span>
                  <div class="credits mt-3 pt-3">
                    <p><a href="../login.php">Admin panel</a></p>
                  </div>
            </div>
            <div class="col-md-4 p-2">
	                <a href="tel:+380955750375"><span class="icon icon-phone"></span><span class="text">+38 095 575 0375</span></a>
                  </div>
            <div class="col-md-3 p-2">
	                <span class="icon icon-envelope"></span><span class="text"><a href="mailto:citrusdolar@gmail.com" target="_blank&quot;">citrusdolar@gmail.com</span></a>
                                                                                 <a href="mailto:citrus1989@gmail.com" target="_blank&quot;">citrus1989@gmail.com</a>
                                                                                 </div>
	    </div>
      <?php } ?>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/main-adm.js"></script>

</body>

</html>
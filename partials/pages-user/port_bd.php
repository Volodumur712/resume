
<!-- ======= Portfolio Section ======= -->
<section id="bd" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p>A small list of my projects, both independent and in collaboration with other developers.</p>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-js">JS or jQuery</li>
              <li data-filter=".filter-html">HTML CSS</li>
              <li data-filter=".filter-php">PHP</li>
            </ul>
          </div>
        </div>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php
        $sql = "SELECT * FROM portfolio";
        $result = $conn->query($sql);?>
              
        <?php while($row = $result->fetch_assoc()): ?>     
          <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['part']; ?>">
              <div class="portfolio-wrap">
                  <!-- перевірка чи є картинка -->
                  <?php if($row['image'] != ""); ?>
                  <img src="/uploads/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $row['title']; ?></h4>
                  <p><?php echo $row['description']; ?></p>
                  <div class="portfolio-links">
                    <a href="<?php echo $row['hrefka']; ?>" target="_blank"><i class="bx bx-link"></i></a>

                    <a href="<?php echo $row['fon_img']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                    title="<?php echo $row['fon_img_desc']; ?>"><i class="bx bx-plus"></i></a>
                    <a href="<?php echo $row['fon_2']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                    title="<?php echo $row['fon_desc2']; ?>"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
          </div>
          <?php endwhile; ?>

      </div>
    </div>
</section>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>

<section class="pm-city-details-section">
  <div class="container">
    
    <!-- === ROW 1: PREMIUM ABOUT HERO (COL-6 CONTENT & COL-6 IMAGE) === -->
    <div class="row align-items-center mb-5 city-about-hero-row">
      <!-- Left Column: Content -->
      <div class="col-lg-6 col-12">
        <div class="city-about-content">
          <span class="city-about-eyebrow">— TOP RATED RELOCATION —</span>
          <?= $htmlcontent ?>
          
          <!-- Modern feature badges -->
          <div class="city-about-features-grid">
            <div class="city-feat-badge">
              <i class="bi bi-shield-fill-check"></i>
              <span>100% Insured Shifting</span>
            </div>
            <div class="city-feat-badge">
              <i class="bi bi-truck-flatbed"></i>
              <span>GPS Fleet Tracking</span>
            </div>
            <div class="city-feat-badge">
              <i class="bi bi-box-seam-fill"></i>
              <span>Multi-layer Packing</span>
            </div>
            <div class="city-feat-badge">
              <i class="bi bi-clock-fill"></i>
              <span>On-Time Delivery</span>
            </div>
          </div>
          
          <div class="city-about-actions mt-4">
            <a href="<?= $phonehtml ?>" class="city-about-btn-call" id="aboutCallNowBtn">
              <i class="bi bi-telephone-fill"></i> Call Now
            </a>
            <a href="#" class="city-about-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
              Get Free Quote <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Right Column: Image Showcase -->
      <div class="col-lg-6 col-12">
        <div class="city-about-img-showcase">
          <div class="city-about-img-container">
            <!-- Top-left Bracket -->
            <div class="city-about-bracket tl-bracket"></div>
            
            <div class="city-about-img-card">
              <div id="cityAboutImageCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="carousel-item active">
                    <img src="<?= base_url('assets/images/gallery/img1.jpg') ?>" 
                         alt="Packers and Movers Services in <?= htmlspecialchars($city) ?> - <?= htmlspecialchars($company3) ?>" 
                         class="city-about-image"
                         loading="lazy">
                  </div>
                  <!-- Slide 2 -->
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/images/gallery/img2.jpg') ?>" 
                         alt="Reliable Relocation Services in <?= htmlspecialchars($city) ?>" 
                         class="city-about-image"
                         loading="lazy">
                  </div>
                  <!-- Slide 3 -->
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/images/gallery/img3.jpg') ?>" 
                         alt="Safe and Secure Shifting in <?= htmlspecialchars($city) ?>" 
                         class="city-about-image"
                         loading="lazy">
                  </div>
                </div>
              </div>
              
              <!-- Floating Trust Tag (Bottom-Left) -->
              <div class="city-about-trust-tag">
                <i class="bi bi-patch-check-fill"></i>
                <div>
                  <strong>ISO Certified</strong>
                  <span>Safe Shifting</span>
                </div>
              </div>
            </div>
            
            <!-- Experience Circular Badge (Top-Right) -->
            <div class="city-about-xp-badge">
              <div class="xp-inner">
                <h3><?= htmlspecialchars($yearsExperience) ?></h3>
                <span>Years Trust</span>
              </div>
            </div>
            
            <!-- Happy Customers Stats Badge (Bottom-Right) -->
            <div class="city-about-stats-badge">
              <i class="bi bi-heart-fill"></i>
              <div>
                <strong><?= htmlspecialchars($happyClients) ?></strong>
                <span>Happy Customers</span>
              </div>
            </div>
            
            <!-- Bottom-right Bracket -->
            <div class="city-about-bracket br-bracket"></div>
            
            <!-- Dot Grid Background -->
            <div class="city-about-dots-bg"></div>

            <!-- Custom Controls & Indicators Row OUTSIDE/BELOW the Image Card -->
            <div class="city-about-carousel-controls-outer">
              <button class="city-about-outer-btn prev-btn" type="button" data-bs-target="#cityAboutImageCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i>
              </button>
              
              <div class="city-about-outer-indicators">
                <button type="button" data-bs-target="#cityAboutImageCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#cityAboutImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#cityAboutImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <button class="city-about-outer-btn next-btn" type="button" data-bs-target="#cityAboutImageCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- === ROW 2: INTERACTIVE ROUTE TIMELINE (PROCESS) === -->
    <?php include 'city_process.php'; ?>

    <!-- === ROW 3: LOCATION MAP & COVERAGE DETAILS === -->
    <?php include 'city_map.php'; ?>


    <!-- === ROW 4: CUSTOMER REVIEWS & FAQs SIDE-BY-SIDE === -->
    <div class="row g-4 mt-4 mb-2 pb-2">
      <!-- Left Column: Testimonials -->
      <div class="col-lg-6 col-12">
        <?php include 'city_reviews.php'; ?>
      </div>
      <!-- Right Column: FAQs -->
      <div class="col-lg-6 col-12">
        <?php include 'city_faq.php'; ?>
      </div>
    </div>

    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [];
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>



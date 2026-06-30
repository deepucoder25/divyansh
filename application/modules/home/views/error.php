<main class="main">
  <section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Page Not Found</h1>
                <span class="bc-title-line"></span>
            </div>
        </div>
        
        <!-- Breadcrumb Ribbon -->
        <div class="bc-ribbon-wrap">
            <div class="bc-ribbon">
                <!-- Home Icon Red/Orange Block -->
                <div class="bc-home-block">
                    <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i></a>
                </div>
                <!-- Path links -->
                <div class="bc-links">
                    <a href="<?= site_url() ?>">Home</a>
                    <span class="bc-chevron"><i class="bi bi-chevron-right"></i></span>
                    <span class="bc-current-page">404 Error</span>
                </div>
            </div>
        </div>
    </div>
</section>
  <section class="error_section text-center mouse_move mt-3">
    <div class="container">
      <div class="error_image decoration_wrap text-center">
        <img src="<?= base_url("assets/img/error/404.png") ?>" alt="404 Error Page Not Found - <?= $company3 ?>" loading="lazy">
      </div>
      <div class="error_content">
        <h2>Page not found</h2>
        <p>
          The requested URL does not exist on this server;<span class="d-md-block"> Please verify the web address and contact the administrator if you believe it's an error. </span>
        </p>
        <a href="<?= site_url() ?>" class="bd-btn-link btn_primary">
          <span class="bd-button-content-wrapper">
            <span class="bd-button-icon">
              <i class="fa-light fa-arrow-right-long"></i>
            </span>
            <span class="pd-animation-flip">
              <span class="bd-btn-anim-wrapp">
                <a href="<?= site_url('') ?>" class="theme_button color1">Go Back To Home</a>

              </span>
            </span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>
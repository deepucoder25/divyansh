<?php
$desktop_bg = base_url('assets/images/slider/desktop_slider.jpg');
$mobile_bg = base_url('assets/images/slider/mobile_slider.jpg');
$neha_avatar = base_url('assets/images/slider/neha_sharma.png');
?>
<section class="home-page-slider">

  <!-- ========================================== -->
  <!--             DESKTOP VIEWPORT               -->
  <!-- ========================================== -->
  <div class="slider-desktop-wrap d-none d-lg-block">
    <div class="container position-relative">
      <div class="row align-items-center justify-content-between min-vh-slider">
        
        <!-- Left Side: Content & Badges -->
        <div class="col-lg-7 col-xl-6 text-start hero-text-col pt-4 pb-5">
          
          <!-- Trusted Families Badge -->
          <div class="trusted-badge mb-3">
            <span class="badge-icon"><i class="bi bi-shield-check"></i></span>
            <span class="badge-text">Trusted by 5000+ Families</span>
          </div>

          <!-- Main Heading -->
          <h1 class="hero-title mb-3">
            We Move Things.<br>
            <span class="accent-text">You Move Forward.</span>
          </h1>

          <!-- Lead Paragraph -->
          <p class="hero-lead mb-4">
            From careful packing to timely delivery – we take care of everything, so you can focus on what matters most.
          </p>

          <!-- Highlights Grid (Desktop Placeholder) -->
          <div id="desktopHighlightsPlaceholder">
            <div class="highlights-grid mb-4" id="highlightsGridShared">
              <div class="highlight-card">
                <div class="hl-icon"><i class="bi bi-shield-check"></i></div>
                <div class="hl-title">Safe &amp; Secure</div>
              </div>
              <div class="highlight-card">
                <div class="hl-icon"><i class="bi bi-clock"></i></div>
                <div class="hl-title">On-Time Delivery</div>
              </div>
              <div class="highlight-card">
                <div class="hl-icon"><i class="bi bi-box-seam"></i></div>
                <div class="hl-title">Expert Handling</div>
              </div>
              <div class="highlight-card">
                <div class="hl-icon"><i class="bi bi-headset"></i></div>
                <div class="hl-title">24/7 Support</div>
              </div>
            </div>
          </div>

          <!-- Call to Action Buttons (Desktop Placeholder) -->
          <div id="desktopButtonsPlaceholder">
            <div class="hero-buttons d-flex align-items-center gap-3 mb-3" id="heroButtonsShared">
              <a href="<?= site_url('about-us') ?>" class="btn-explore">
                <span>About Us</span>
                <span class="btn-icon-circle"><i class="bi bi-arrow-right-short"></i></span>
              </a>
              <a href="<?= site_url('contact-us') ?>" class="btn-watch-video">
                <span class="phone-icon-circle"><i class="bi bi-telephone-fill"></i></span>
                <span>Contact Us</span>
              </a>
            </div>
          </div>

          <!-- Testimonials (Desktop Placeholder) -->
          <div id="desktopTestimonialPlaceholder">
            <div id="testimonialCarouselShared" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="testimonial-card-slider">
                    <button class="test-arrow prev" data-bs-target="#testimonialCarouselShared" data-bs-slide="prev" aria-label="Previous testimonial"><i class="bi bi-chevron-left"></i></button>
                    <div class="testimonial-inner">
                      <div class="test-avatar female">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="test-content">
                        <div class="stars mb-1 desktop-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="test-text">
                          <span class="quote-mark">“</span>Excellent service! The team was punctual, professional and handled everything with great care. Highly recommended!
                        </p>
                        <div class="test-author">- Neha Sharma, Pune</div>
                      </div>
                    </div>
                    <button class="test-arrow next" data-bs-target="#testimonialCarouselShared" data-bs-slide="next" aria-label="Next testimonial"><i class="bi bi-chevron-right"></i></button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial-card-slider">
                    <button class="test-arrow prev" data-bs-target="#testimonialCarouselShared" data-bs-slide="prev" aria-label="Previous testimonial"><i class="bi bi-chevron-left"></i></button>
                    <div class="testimonial-inner">
                      <div class="test-avatar male">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="test-content">
                        <div class="stars mb-1 desktop-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="test-text">
                          <span class="quote-mark">“</span>Extremely smooth shifting experience. The packaging of my TV and delicate items was outstanding. No damage whatsoever.
                        </p>
                        <div class="test-author">- Rohit Mehta, Bangalore</div>
                      </div>
                    </div>
                    <button class="test-arrow next" data-bs-target="#testimonialCarouselShared" data-bs-slide="next" aria-label="Next testimonial"><i class="bi bi-chevron-right"></i></button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial-card-slider">
                    <button class="test-arrow prev" data-bs-target="#testimonialCarouselShared" data-bs-slide="prev" aria-label="Previous testimonial"><i class="bi bi-chevron-left"></i></button>
                    <div class="testimonial-inner">
                      <div class="test-avatar female">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="test-content">
                        <div class="stars mb-1 desktop-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="test-text">
                          <span class="quote-mark">“</span>Top notch packers and movers! Friendly staff and timely delivery. The price was also very reasonable compared to others.
                        </p>
                        <div class="test-author">- Priya Singh, Delhi</div>
                      </div>
                    </div>
                    <button class="test-arrow next" data-bs-target="#testimonialCarouselShared" data-bs-slide="next" aria-label="Next testimonial"><i class="bi bi-chevron-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side: White Quote Form Card -->
        <div class="col-lg-5 col-xl-5 py-5 position-relative z-form" id="desktopFormPlaceholder">
          <?php $this->load->view('contacts/quoteform.php'); ?>
        </div>
      </div>
    </div>
  </div>


  <div class="slider-mobile-wrap d-block d-lg-none">
    
    <!-- Mobile Hero Content (with background image) -->
    <div class="mobile-hero-bg py-5">
      <div class="container">
        <div class="mobile-hero-content-wrap">
          
          <!-- Top Eyebrow Badge -->
          <div class="text-start mb-3">
            <div class="mobile-eyebrow-badge">
              <span class="badge-icon"><i class="bi bi-shield-check"></i></span>
              <span class="badge-text">Safe. Secure. On Time. Every Time.</span>
            </div>
          </div>

          <!-- Mobile Title -->
          <h1 class="hero-title mobile text-start mb-3">
            Moving Made Easy,<br>
            <span class="accent-text">For Every New Beginning.</span>
          </h1>

          <!-- Mobile Lead Paragraph -->
          <p class="hero-lead mobile text-start mb-4">
            We pack, move and deliver your belongings safely to your new destination with care and on time.
          </p>

          <!-- Highlights Grid (Mobile Placeholder) -->
          <div id="mobileHighlightsPlaceholder"></div>

        </div>

        <!-- Mobile Buttons (Mobile Placeholder) -->
        <div id="mobileButtonsPlaceholder"></div>
      </div>
    </div>

    <!-- Mobile Lower Content Section (Quote Form & Testimonials) -->
    <div class="mobile-lower-content py-3">
      <div class="container">
        
        <!-- Mobile Form Card -->
        <div class="mb-3 position-relative" id="mobileFormPlaceholder">
        </div>

        <!-- Testimonial Slider Card (Mobile Placeholder) -->
        <div class="mobile-testimonial-section mb-3" id="mobileTestimonialPlaceholder">
          <h4 class="mob-test-title text-center mb-2">
            <span class="line"></span>
            <span>What Our Customers Say</span>
            <span class="line"></span>
          </h4>
          <div class="stars text-center mb-2 mobile-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          
          <div class="carousel-indicators d-flex justify-content-center gap-2 mt-3">
            <button type="button" data-bs-target="#testimonialCarouselShared" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#testimonialCarouselShared" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#testimonialCarouselShared" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>

      </div>
    </div>

  </div>


  <!-- ========================================== -->
  <!--       COMMON BOTTOM USP/STATS BAR          -->
  <!-- ========================================== -->
  <div class="slider-stats-bar">
    <div class="container">
      <div class="stats-bar-inner">
        
        <!-- Stat Item 1 -->
        <div class="stat-item">
          <span class="stat-icon orange-circle"><i class="bi bi-emoji-smile"></i></span>
          <div class="stat-text">
            <strong><?= $happyClients ?></strong>
            <span>Happy Customers <span class="d-none d-lg-inline">who trust our services</span></span>
          </div>
        </div>
        
        <div class="stat-divider"></div>
        
        <!-- Stat Item 2 -->
        <div class="stat-item">
          <span class="stat-icon blue-circle"><i class="bi bi-box-seam"></i></span>
          <div class="stat-text">
            <strong><?= $succefullMoves ?></strong>
            <span>Successful Moves <span class="d-none d-lg-inline">completed across India</span></span>
          </div>
        </div>
        
        <div class="stat-divider"></div>
        
        <!-- Stat Item 3 -->
        <div class="stat-item">
          <span class="stat-icon orange-circle"><i class="bi bi-geo-alt"></i></span>
          <div class="stat-text">
            <strong><?= $statesCovered ?></strong>
            <span>Cities Covered <span class="d-none d-lg-inline">across India</span></span>
          </div>
        </div>
        
        <div class="stat-divider"></div>
        
        <!-- Stat Item 4 -->
        <div class="stat-item">
          <span class="stat-icon blue-circle"><i class="bi bi-shield-check"></i></span>
          <div class="stat-text">
            <strong><?= $secureShifting ?></strong>
            <span>Safe &amp; Insured <span class="d-none d-lg-inline">for complete peace of mind</span></span>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <script>
  (function() {
    function moveElements() {
      // 1. Move Form
      const form = document.querySelector('#desktopFormPlaceholder .slider-form-card') || document.querySelector('#mobileFormPlaceholder .slider-form-card');
      if (form) {
        if (window.innerWidth >= 992) {
          const dest = document.getElementById('desktopFormPlaceholder');
          if (dest && !dest.contains(form)) {
            dest.appendChild(form);
          }
        } else {
          const dest = document.getElementById('mobileFormPlaceholder');
          if (dest && !dest.contains(form)) {
            dest.appendChild(form);
          }
        }
      }

      // 2. Move Highlights Grid
      const grid = document.getElementById('highlightsGridShared');
      if (grid) {
        if (window.innerWidth >= 992) {
          const dest = document.getElementById('desktopHighlightsPlaceholder');
          if (dest && !dest.contains(grid)) {
            dest.appendChild(grid);
            grid.classList.remove('mobile');
          }
        } else {
          const dest = document.getElementById('mobileHighlightsPlaceholder');
          if (dest && !dest.contains(grid)) {
            dest.appendChild(grid);
            grid.classList.add('mobile');
          }
        }
      }

      // 3. Move Buttons
      const buttons = document.getElementById('heroButtonsShared');
      if (buttons) {
        const btn1 = buttons.querySelector('.btn-explore');
        const btn2 = buttons.querySelector('.btn-watch-video');
        if (window.innerWidth >= 992) {
          const dest = document.getElementById('desktopButtonsPlaceholder');
          if (dest && !dest.contains(buttons)) {
            dest.appendChild(buttons);
            buttons.classList.remove('mobile');
            buttons.classList.remove('flex-row');
            buttons.classList.remove('align-items-center');
            buttons.classList.remove('gap-2');
            buttons.classList.add('flex-row');
            buttons.classList.add('align-items-center');
            buttons.classList.add('gap-3');
            if (btn1) btn1.classList.remove('mobile');
            if (btn2) btn2.classList.remove('mobile');
          }
        } else {
          const dest = document.getElementById('mobileButtonsPlaceholder');
          if (dest && !dest.contains(buttons)) {
            dest.appendChild(buttons);
            buttons.classList.add('mobile');
            buttons.classList.remove('gap-3');
            buttons.classList.add('flex-row');
            buttons.classList.add('align-items-center');
            buttons.classList.add('gap-2');
            if (btn1) btn1.classList.add('mobile');
            if (btn2) btn2.classList.add('mobile');
          }
        }
      }

      // 4. Move Testimonials
      const testimonial = document.getElementById('testimonialCarouselShared');
      if (testimonial) {
        const card = testimonial.querySelectorAll('.testimonial-card-slider');
        if (window.innerWidth >= 992) {
          const dest = document.getElementById('desktopTestimonialPlaceholder');
          if (dest && !dest.contains(testimonial)) {
            dest.appendChild(testimonial);
            card.forEach(c => c.classList.remove('mobile'));
          }
        } else {
          const dest = document.getElementById('mobileTestimonialPlaceholder');
          if (dest) {
            const indicators = dest.querySelector('.carousel-indicators');
            if (indicators) {
              if (testimonial.nextSibling !== indicators) {
                dest.insertBefore(testimonial, indicators);
                card.forEach(c => c.classList.add('mobile'));
              }
            } else if (!dest.contains(testimonial)) {
              dest.appendChild(testimonial);
              card.forEach(c => c.classList.add('mobile'));
            }
          }
        }
      }
    }

    moveElements();
    document.addEventListener('DOMContentLoaded', moveElements);
    window.addEventListener('resize', moveElements);
  })();
  </script>
</section>

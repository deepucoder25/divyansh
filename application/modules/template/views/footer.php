<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<footer class="footer-section">

  <!-- CTA Card Banner -->
  <div class="footer-cta-container">
    <div class="container">
      <div class="footer-cta-banner">
        <div class="cta-inner">
          <div class="cta-left">
            <div class="cta-logo-phone">
              <i class="bi bi-telephone-inbound-fill"></i>
            </div>
            <div class="cta-text">
              <span class="cta-subtitle">Ready to Make Your Move?</span>
              <h3 class="cta-title">Let's Get You Moving!</h3>
              <p class="cta-desc">Our team is ready to assist you with a smooth and stress-free moving experience.</p>
            </div>
          </div>
          
          <div class="cta-middle">
            <div class="cta-info-item">
              <div class="cta-info-icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div class="cta-info-content">
                <span class="cta-info-label">Call Us Now</span>
                <div class="d-flex flex-column gap-1">
                    <a href="<?= $phonehtml ?>" class="cta-info-value"><?= $phone ?></a>
                    <a href="<?= $phonehtml1 ?>" class="cta-info-value"><?= $phone1 ?></a>
                </div>
              </div>
            </div>
            <div class="cta-info-item">
              <div class="cta-info-icon">
                <i class="bi bi-calendar-check-fill"></i>
              </div>
              <div class="cta-info-content">
                <span class="cta-info-label">24/7 Support</span>
                <span class="cta-info-value">24/7 Shifting Support</span>
              </div>
            </div>
          </div>
        </div>

        <a href="#" class="cta-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get a Free Quote</span>
          <div class="cta-btn-arrow">
            <i class="bi bi-arrow-right-short"></i>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Footer Content -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-4 justify-content-between">

        <!-- Column 1: Brand Info -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="footer-brand-widget">
            <div class="footer-logo-custom">
              <div class="logo-icon-box">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2L2 12H5V21H19V12H22L12 2Z" fill="var(--accent-orange)"/>
                  <path d="M7 16H9V18H7V16ZM15 16H17V18H15V16Z" fill="white"/>
                  <path d="M8 12H16V20H8V12Z" fill="white" opacity="0.3"/>
                  <path d="M10 14H14V17H10V14ZM8 9L12 5L16 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="logo-text-box">
                <h4 class="logo-title-main">Divyansh</h4>
                <p class="logo-subtitle-sub">Packers and Movers</p>
              </div>
            </div>
            
            <p class="footer-brand-text-desc">
              We provide reliable and affordable moving solutions with a focus on safety, care and customer satisfaction.
            </p>

            <div class="footer-brand-contacts">
              <a href="<?= $mailhtml ?>" class="footer-brand-contact-item">
                <i class="bi bi-envelope-fill"></i>
                <span><?= $mail ?></span>
              </a>
              <div class="footer-brand-contact-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span><?= $address ?></span>
              </div>
            </div>

            <div class="footer-social-links-circle">
              <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="<?= !empty($twitterhtml) ? $twitterhtml : '#' ?>" target="_blank" rel="noopener" aria-label="Twitter">
                <i class="bi bi-twitter"></i>
              </a>
              <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
          <div class="footer-nav-widget">
            <h5 class="footer-widget-heading">Quick Links</h5>
            <ul class="footer-links-list">
              <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right"></i>Home</a></li>
              <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right"></i>About Us</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-chevron-right"></i>Our Locations</a></li>
              <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-chevron-right"></i>Reviews</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right"></i>Photo Gallery</a></li>
              <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right"></i>Blogs</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right"></i>Testimonials</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: Our Services -->
        <div class="col-xl-2 col-lg-3 col-md-6 col-6">
          <div class="footer-nav-widget">
            <h5 class="footer-widget-heading">Our Services</h5>
            <ul class="footer-links-list service-links">
              <li><a href="<?= site_url('home-shifting') ?>"><i class="bi bi-house-fill"></i>Home Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-building-fill"></i>Office Relocation</a></li>
              <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front-fill"></i>Car Transportation</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle"></i>Bike Transportation</a></li>
              <li><a href="<?= site_url('warehouse-and-storage') ?>"><i class="bi bi-box-seam-fill"></i>Warehouse & Storage</a></li>
              <li><a href="<?= site_url('domestic-relocation') ?>"><i class="bi bi-truck"></i>Domestic Relocation</a></li>
              <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam-fill"></i>Packing & Moving</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: Our Locations -->
        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
          <div class="footer-nav-widget">
            <h5 class="footer-widget-heading">Our Locations</h5>
            <ul class="footer-links-list location-links">
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt-fill"></i>Bangalore</a></li>
              <li><a href="<?= site_url('maharashtra') ?>"><i class="bi bi-geo-alt-fill"></i>Mumbai</a></li>
              <li><a href="<?= site_url('maharashtra') ?>"><i class="bi bi-geo-alt-fill"></i>Pune</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt-fill"></i>Hyderabad</a></li>
              <li><a href="<?= site_url('tamil-nadu') ?>"><i class="bi bi-geo-alt-fill"></i>Chennai</a></li>
              <li><a href="<?= site_url('delhi') ?>"><i class="bi bi-geo-alt-fill"></i>Delhi</a></li>
              <li><a href="<?= site_url('west-bengal') ?>"><i class="bi bi-geo-alt-fill"></i>Kolkata</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 5: Trust & Safety -->
        <div class="col-xl-3 col-lg-4 col-md-6 col-6">
          <div class="footer-newsletter-widget">
            <h5 class="footer-widget-heading">Trust &amp; Safety</h5>

            <div class="footer-trust-badges">
              <div class="trust-badge-item">
                <div class="trust-icon-box">
                  <i class="bi bi-shield-fill-check"></i>
                </div>
                <div class="trust-text-box">
                  <span class="trust-title">Safe & Secure</span>
                  <span class="trust-desc">Your belongings are 100% safe.</span>
                </div>
              </div>
              <div class="trust-badge-item">
                <div class="trust-icon-box">
                  <i class="bi bi-headset"></i>
                </div>
                <div class="trust-text-box">
                  <span class="trust-title">24/7 Support</span>
                  <span class="trust-desc">We're always here to help you.</span>
                </div>
              </div>
              <div class="trust-badge-item">
                <div class="trust-icon-box">
                  <i class="bi bi-award-fill"></i>
                </div>
                <div class="trust-text-box">
                  <span class="trust-title">Best Price Guarantee</span>
                  <span class="trust-desc">Quality service at best prices.</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom USP Indicators Bar -->
      <div class="footer-usp-bar-row">
        <div class="usp-bar-item">
          <i class="bi bi-shield-check"></i>
          <div>
            <h6 class="usp-bar-title">100% Secure</h6>
            <p class="usp-bar-desc">We ensure complete safety of your belongings.</p>
          </div>
        </div>
        <div class="usp-bar-item">
          <i class="bi bi-people-fill"></i>
          <div>
            <h6 class="usp-bar-title">Trained Professionals</h6>
            <p class="usp-bar-desc">Our expert team handles everything with care.</p>
          </div>
        </div>
        <div class="usp-bar-item">
          <i class="bi bi-clock-history"></i>
          <div>
            <h6 class="usp-bar-title">On-Time Delivery</h6>
            <p class="usp-bar-desc">We value your time and ensure timely delivery.</p>
          </div>
        </div>
        <div class="usp-bar-accept">
          <span class="accept-label">We Accept</span>
          <div class="payment-icons-strip">
            <!-- Visa -->
            <span class="payment-card-badge visa" title="Visa">
              <svg viewBox="0 0 54 20" width="48" height="16" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="16" font-family="'Outfit', 'Arial Black', sans-serif" font-weight="900" font-style="italic" font-size="18" fill="#ffffff" letter-spacing="-0.5">VISA</text>
              </svg>
            </span>
            <!-- Mastercard -->
            <span class="payment-card-badge mastercard" title="Mastercard">
              <svg viewBox="0 0 48 36" width="38" height="28" xmlns="http://www.w3.org/2000/svg">
                <circle cx="16" cy="16" r="11" fill="#FF3D00"/>
                <circle cx="32" cy="16" r="11" fill="#FFC107" fill-opacity="0.85"/>
                <text x="24" y="34" font-family="'Outfit', sans-serif" font-size="7" font-weight="600" fill="#ffffff" text-anchor="middle">mastercard</text>
              </svg>
            </span>
            <!-- RuPay -->
            <span class="payment-card-badge rupay" title="RuPay">
              <svg viewBox="0 0 72 20" width="54" height="15" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="15" font-family="'Outfit', sans-serif" font-weight="900" font-style="italic" font-size="16" fill="#ffffff">RuPay</text>
                <polygon points="56,3 60,3 56,17 52,17" fill="#ff6a00"/>
                <polygon points="62,3 66,3 62,17 58,17" fill="#1b7340"/>
              </svg>
            </span>
            <!-- UPI -->
            <span class="payment-card-badge upi" title="UPI">
              <svg viewBox="0 0 60 20" width="45" height="15" xmlns="http://www.w3.org/2000/svg">
                <text x="2" y="15" font-family="'Outfit', sans-serif" font-weight="900" font-style="italic" font-size="16" fill="#ffffff">UPI</text>
                <polygon points="42,3 46,3 42,17 38,17" fill="#ff6a00"/>
                <polygon points="48,3 52,3 48,17 44,17" fill="#1b7340"/>
              </svg>
            </span>
          </div>
        </div>
      </div>

      <!-- Copyright Bar -->
      <div class="footer-copyright-row">
        <p class="copyright-text">
          &copy; <?= date('Y') ?> <?=$company3?>. All Rights Reserved.
        </p>
        <div class="footer-policy-anchors">
          <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
          <span class="separator">|</span>
          <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
        </div>
      </div>

    </div>
  </div>

</footer>

  <div class="floating-actions">
    <a href="<?= $phonehtml ?>" class="float-btn float-call" data-tooltip="Call Now" aria-label="Call <?= $company3 ?> now">
      <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
      <span>Call Now</span>
    </a>
    <a href="<?= $floatingWhatsappLink ?>" class="float-btn float-whatsapp" data-tooltip="WhatsApp Us" target="_blank" rel="noopener" aria-label="Message <?= $company3 ?> on WhatsApp">
      <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
      <span>WhatsApp Us</span>
    </a>
    <button type="button" class="float-btn float-quote" data-bs-toggle="modal" data-bs-target="#qteModal" data-tooltip="Get a Quote" aria-label="Get a Free Quote">
      <div class="icon-wrap"><i class="bi bi-box-seam-fill"></i></div>
      <span>Get Quote</span>
    </button>
  </div>

  <?php $this->load->view('contacts/quotemodal'); ?>
  <?php $this->load->view('contacts/callmeback_modal'); ?>
  <?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/form.js"></script>
</body>

</html>

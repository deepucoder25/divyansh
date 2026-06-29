<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="city-reviews-box">
  <div>
    <!-- Section Eyebrow & Header -->
    <span class="city-rf-eyebrow">TESTIMONIALS</span>
    <h3 class="city-rf-heading">What Our Customers Say</h3>
    <p class="city-rf-desc">We take pride in delivering exceptional moving experiences. Here’s what our happy customers say about our services in <?= htmlspecialchars($city) ?>.</p>
    
    <!-- Testimonials Vertical Slider Container -->
    <div class="city-reviews-carousel-outer vertical-nav-layout">
      <!-- Previous Button on Top -->
      <button class="city-reviews-btn-prev" type="button" data-bs-target="#cityTestimonialCarousel" data-bs-slide="prev">
        <i class="bi bi-chevron-up"></i>
      </button>

      <div id="cityTestimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="city-reviews-vertical-group">
              
              <!-- Card 1 -->
              <div class="city-reviews-slider-card">
                <div class="city-reviews-quote-icon">“</div>
                <p class="city-reviews-text">
                  "Divyansh Packers and Movers made our relocation in <?= htmlspecialchars($city) ?> so easy and stress-free. The team was professional, punctual, and handled everything with great care. Highly recommended!"
                </p>
                <div class="city-reviews-author-meta">
                  <div class="city-reviews-author-info">
                    <div class="city-reviews-avatar-circle">RM</div>
                    <div class="city-reviews-author-details">
                      <strong>Rahul Mehta</strong>
                      <small>Mumbai to <?= htmlspecialchars($city) ?></small>
                    </div>
                  </div>
                  <div class="city-reviews-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              
              <!-- Card 2 -->
              <div class="city-reviews-slider-card">
                <div class="city-reviews-quote-icon">“</div>
                <p class="city-reviews-text">
                  "We shifted our complete household luggage within <?= htmlspecialchars($city) ?> last week. The layered bubble packaging kept all glassware safe. Transparent pricing with zero hidden charges!"
                </p>
                <div class="city-reviews-author-meta">
                  <div class="city-reviews-author-info">
                    <div class="city-reviews-avatar-circle">AG</div>
                    <div class="city-reviews-author-details">
                      <strong>Ananya Gupta</strong>
                      <small>Local Shifting in <?= htmlspecialchars($city) ?></small>
                    </div>
                  </div>
                  <div class="city-reviews-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="city-reviews-vertical-group">
              
              <!-- Card 3 -->
              <div class="city-reviews-slider-card">
                <div class="city-reviews-quote-icon">“</div>
                <p class="city-reviews-text">
                  "Excellent commercial cargo shifting. They coordinated perfectly with society guards, handled high-end office server racks safely, and set up everything on time. Highly professional!"
                </p>
                <div class="city-reviews-author-meta">
                  <div class="city-reviews-author-info">
                    <div class="city-reviews-avatar-circle">SV</div>
                    <div class="city-reviews-author-details">
                      <strong>Sandeep Verma</strong>
                      <small>Office Shifting in <?= htmlspecialchars($city) ?></small>
                    </div>
                  </div>
                  <div class="city-reviews-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              
              <!-- Card 4 -->
              <div class="city-reviews-slider-card">
                <div class="city-reviews-quote-icon">“</div>
                <p class="city-reviews-text">
                  "Finding reliable movers near me in <?= htmlspecialchars($city) ?> was critical. Their team packed and moved our furniture without a single scratch. Wonderful service quality!"
                </p>
                <div class="city-reviews-author-meta">
                  <div class="city-reviews-author-info">
                    <div class="city-reviews-avatar-circle">PN</div>
                    <div class="city-reviews-author-details">
                      <strong>Priya Nair</strong>
                      <small>Household Relocation in <?= htmlspecialchars($city) ?></small>
                    </div>
                  </div>
                  <div class="city-reviews-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>

      <!-- Next Button at the Bottom -->
      <button class="city-reviews-btn-next" type="button" data-bs-target="#cityTestimonialCarousel" data-bs-slide="next">
        <i class="bi bi-chevron-down"></i>
      </button>
      
      <!-- Indicators (Vertical on the Right side) -->
      <div class="city-reviews-indicators">
        <button type="button" data-bs-target="#cityTestimonialCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#cityTestimonialCarousel" data-bs-slide-to="1"></button>
      </div>
    </div>
  </div>
  
  <!-- Stats Dashboard Footer -->
  <div class="city-reviews-stats-grid mt-4">
    <!-- Stat 1 -->
    <div class="city-reviews-stat-card stat-happy">
      <div class="cr-stat-icon-wrap"><i class="bi bi-people-fill"></i></div>
      <h4><?= $happyClients ?></h4>
      <span>Happy Customers</span>
    </div>
    <!-- Stat 2 -->
    <div class="city-reviews-stat-card stat-satisfaction">
      <div class="cr-stat-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
      <h4><?= $secureShifting ?></h4>
      <span>Satisfaction Rate</span>
    </div>
    <!-- Stat 3 -->
    <div class="city-reviews-stat-card stat-experience">
      <div class="cr-stat-icon-wrap"><i class="bi bi-award-fill"></i></div>
      <h4><?= $yearsExperience ?></h4>
      <span>Years of Experience</span>
    </div>
    <!-- Stat 4 -->
    <div class="city-reviews-stat-card stat-rating">
      <div class="cr-stat-icon-wrap"><i class="bi bi-hand-thumbs-up-fill"></i></div>
      <h4><?= $ratingValue ?>/5</h4>
      <span>Average Rating</span>
    </div>
  </div>
</div>
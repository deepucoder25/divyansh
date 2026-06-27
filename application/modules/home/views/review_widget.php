<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Dynamic reviews data array with full text comments and real avatar paths
$testimonials = [
    [
        'name' => 'Rahul Sharma',
        'location' => 'Bangalore to Delhi',
        'avatar' => 'male_1',
        'stars' => 5,
        'comment' => 'Excellent experience with Divyansh Packers and Movers. The team was punctual, professional and handled my belongings with great care. Everything arrived in perfect condition. Highly recommended!'
    ],
    [
        'name' => 'Priya Mehta',
        'location' => 'Mumbai to Pune',
        'avatar' => 'female_1',
        'stars' => 5,
        'comment' => 'Very reliable and trustworthy service! From packing to delivery, everything was smooth and hassle-free. The staff was cooperative and well-behaved. Great job!'
    ],
    [
        'name' => 'Vikram Malhotra',
        'location' => 'Jaipur to Gurgaon',
        'avatar' => 'male_2',
        'stars' => 5,
        'comment' => 'I moved my office with Divyansh Packers and Movers and I\'m truly impressed with their management and timely delivery. Very professional team!'
    ],
    [
        'name' => 'Sneha Rao',
        'location' => 'Mumbai to Bangalore',
        'avatar' => 'female_2',
        'stars' => 5,
        'comment' => 'I was worried about moving my kitchen items, but Divyansh Packers and Movers packed everything in multiple layers of bubble wrap. Not a single plate broke. Highly recommended for safe household shifts!'
    ],
    [
        'name' => 'Anil Kapoor',
        'location' => 'Delhi to Noida',
        'avatar' => 'male_3',
        'stars' => 5,
        'comment' => 'Quick and efficient corporate office relocation. Their team worked overnight to ensure we were ready for business by morning. Very professional attitude throughout the process.'
    ]
];
?>

<section class="reviews-section py-5">
    <!-- Giant Quote Decorations -->
    <div class="giant-quote giant-quote-left">“</div>
    <div class="giant-quote giant-quote-right">”</div>

    <div class="container position-relative z-index-2">
        <!-- Section Header (reusing same classes as service widget for headings) -->
        <div class="text-center mb-5">
            <span class="section-subtitle">— TESTIMONIALS —</span>
            <h2 class="section-title">What Our Happy Customers Say</h2>
            <p class="section-desc">We take pride in our work and the trust our customers place in us.<br>Here’s what they have to say about <span class="text-orange font-weight-bold">Divyansh Packers and Movers</span>.</p>
            <div class="header-divider"></div>
        </div>

        <!-- Slider Section with Navigation Arrows -->
        <div class="reviews-slider-container">
            <!-- Left Navigation Arrow -->
            <button class="slider-arrow prev-arrow" id="rev-prev-btn" aria-label="Previous Review">
                <i class="bi bi-chevron-left"></i>
            </button>

            <!-- Slider Viewport (CSS Scroll Snap active) -->
            <div class="reviews-slider-viewport">
                <div class="reviews-slider-track" id="rev-slider-track">
                    
                    <?php foreach ($testimonials as $t): ?>
                        <div class="review-card light-card">
                            <div class="card-top-meta">
                                <span class="card-quote-icon"><i class="bi bi-quote"></i></span>
                                <div class="card-stars">
                                    <?php for ($i = 0; $i < $t['stars']; $i++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            
                            <div class="card-body-text">
                                <p class="review-comment"><?= htmlspecialchars($t['comment']) ?></p>
                            </div>
                            
                            <div class="card-profile-row">
                                <?php 
                                $avatarClass = 'male-avatar';
                                if ($t['avatar'] === 'female_1' || $t['avatar'] === 'female_2') {
                                    $avatarClass = 'female-avatar';
                                } elseif ($t['avatar'] === 'male_2' || $t['avatar'] === 'male_3') {
                                    $avatarClass = 'green-avatar';
                                }
                                ?>
                                <div class="review-avatar-wrap <?= $avatarClass ?>">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="profile-details">
                                    <h4 class="profile-name"><?= htmlspecialchars($t['name']) ?></h4>
                                    <span class="profile-loc"><i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($t['location']) ?></span>
                                </div>
                            </div>
                            
                            <div class="card-bottom-line"></div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- Right Navigation Arrow -->
            <button class="slider-arrow next-arrow" id="rev-next-btn" aria-label="Next Review">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

    </div>
</section>

<!-- Lightweight Native CSS Scroll Snap Controller JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const vp = document.querySelector('.reviews-slider-viewport');
    const nextBtn = document.getElementById('rev-next-btn');
    const prevBtn = document.getElementById('rev-prev-btn');
    let autoPlayTimer = null;
    
    function scrollCarousel(direction) {
        if (!vp) return;
        const card = vp.querySelector('.review-card');
        if (!card) return;
        
        const cardWidth = card.offsetWidth + 20; // Card width + grid gap
        const maxScroll = vp.scrollWidth - vp.clientWidth;
        
        if (direction === 1) {
            // Scroll Next / Loop Back
            if (vp.scrollLeft >= maxScroll - 15) {
                vp.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                vp.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        } else {
            // Scroll Prev / Loop End
            if (vp.scrollLeft <= 15) {
                vp.scrollTo({ left: maxScroll, behavior: 'smooth' });
            } else {
                vp.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            }
        }
    }
    
    function startAutoPlay() {
        autoPlayTimer = setInterval(() => scrollCarousel(1), 5000);
    }
    
    if (vp && nextBtn && prevBtn) {
        nextBtn.onclick = () => { clearInterval(autoPlayTimer); scrollCarousel(1); startAutoPlay(); };
        prevBtn.onclick = () => { clearInterval(autoPlayTimer); scrollCarousel(-1); startAutoPlay(); };
        
        // Touch events reset auto-play timer
        vp.addEventListener('touchstart', () => clearInterval(autoPlayTimer), { passive: true });
        vp.addEventListener('touchend', startAutoPlay, { passive: true });
        
        startAutoPlay();
    }
});
</script>

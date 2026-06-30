<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Company Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <h3 class="widget-title text-center text-uppercase">About Company</h3>
        <p class="widget-subtitle text-center text-muted mb-4">Quick access to our company details.</p>
        
        <div class="sidebar-services-grid">
            <?php
            $sidebar_links = [
                ['slug' => 'about-us',          'name' => 'About Us',          'icon' => 'bi-info-circle-fill', 'color_class' => 'service-blue'],
                ['slug' => 'why-choose-us',     'name' => 'Why Choose Us',     'icon' => 'bi-patch-question-fill', 'color_class' => 'service-purple'],
                ['slug' => 'faqs',              'name' => 'FAQ',               'icon' => 'bi-chat-left-text-fill', 'color_class' => 'service-orange'],
                ['slug' => 'testimonials',      'name' => 'Testimonial',       'icon' => 'bi-chat-quote-fill', 'color_class' => 'service-green'],
                ['slug' => 'privacy-policy',    'name' => 'Privacy Policy',    'icon' => 'bi-shield-lock-fill', 'color_class' => 'service-cyan'],
                ['slug' => 'terms-and-conditions','name' => 'Terms & Conditions','icon' => 'bi-file-earmark-ruled-fill', 'color_class' => 'service-indigo'],
                ['slug' => 'reviews',           'name' => 'Customer Reviews',  'icon' => 'bi-star-fill', 'color_class' => 'service-yellow'],
                ['slug' => 'blog',              'name' => 'Blog',              'icon' => 'bi-journal-text', 'color_class' => 'service-pink'],
            ];

            foreach ($sidebar_links as $link):
                $is_active = (isset($active_link) && $active_link === $link['slug']) ? 'active' : '';
            ?>
                <a href="<?= site_url($link['slug']) ?>" class="grid-service-item <?= $is_active ?>">
                    <div class="icon-circle <?= $link['color_class'] ?>">
                        <i class="bi <?= $link['icon'] ?>"></i>
                    </div>
                    <span class="grid-service-name"><?= $link['name'] ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Contact & Action CTA Widget — New Premium Design -->
    <div class="sidebar-widget widget-talk-experts mb-4">
        <div class="talk-experts-card">
            <!-- Telephone Image Illustration -->
            <div class="talk-image-wrap text-center mb-3">
                <img src="<?= base_url() ?>assets/images/home/phone.jpg" alt="Talk to Moving Experts at <?= $company3 ?>" class="talk-phone-img" loading="lazy">
            </div>
            
            <h3 class="talk-title text-center">Talk to our <br><span>Moving Experts</span></h3>
            <p class="talk-subtitle text-center">Get instant assistance</p>
            
            <div class="talk-buttons d-flex flex-column gap-3 mt-4">
                <!-- Primary Call Option -->
                <a href="<?= $phonehtml ?>" class="talk-call-box call-primary">
                    <div class="call-box-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="call-box-text">
                        <span class="call-box-label">Call Us Now</span>
                        <span class="call-box-number"><?= $phone ?></span>
                    </div>
                </a>
                
                <!-- Secondary Call Option -->
                <a href="<?= $phonehtml1 ?>" class="talk-call-box call-secondary">
                    <div class="call-box-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="call-box-text">
                        <span class="call-box-label">Another Number</span>
                        <span class="call-box-number"><?= $phone1 ?></span>
                    </div>
                </a>
                
                <!-- WhatsApp Option -->
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-talk-whatsapp mt-2">
                    <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget — New Premium Design -->
    <div class="sidebar-widget widget-trusted-badges">
        <h4 class="widget-sub-title">Why Choose <br><span><?= $company3 ?></span>?</h4>
        <ul class="trusted-points-list mt-4">
            <li class="trusted-point-item">
                <div class="trusted-point-icon">
                    <i class="bi bi-award-fill"></i>
                </div>
                <div class="trusted-point-text">
                    <strong><?= $yearsExperience ?> Years Experience</strong>
                    <p>Relocating since <?= $startYear ?>.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <div class="trusted-point-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="trusted-point-text">
                    <strong><?= $happyClients ?> Happy Clients</strong>
                    <p>Trusted by families and businesses.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <div class="trusted-point-icon">
                    <i class="bi bi-shield-fill-check"></i>
                </div>
                <div class="trusted-point-text">
                    <strong>Verified &amp; Licensed</strong>
                    <p>ISO certified packers and movers.</p>
                </div>
            </li>
            <li class="trusted-point-item">
                <div class="trusted-point-icon">
                    <i class="bi bi-lock-fill"></i>
                </div>
                <div class="trusted-point-text">
                    <strong><?= $secureShifting ?> Secure Shifting</strong>
                    <p>Complete transit insurance options.</p>
                </div>
            </li>
        </ul>
    </div>
</aside>

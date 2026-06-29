<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Contact Us</h1>
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
                    <span class="bc-current-page">Contact Us</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Details & Form Section -->
<section class="contact-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-5">
            <!-- Contact Details -->
            <div class="col-lg-5">
                <div class="contact-details-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100">
                    <h2 class="fw-bold mb-4 contact-title-primary">Get In Touch</h2>
                    <p class="text-muted mb-5">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Head Office</h6>
                            <p class="mb-0 text-muted"><?= $address ?></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box-success">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Phone Number</h6>
                            <p class="mb-0 text-muted"><a href="<?= $phonehtml ?>" class="text-decoration-none text-muted"><?= $phone ?></a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box-warning">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Address</h6>
                            <p class="mb-0 text-muted"><a href="<?= $mailhtml ?>" class="text-decoration-none text-muted"><?= $mail ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100 border-top border-4 contact-border-warning">
                    <h2 class="fw-bold mb-4 contact-title-primary">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" class="form-control py-2 contact-input-rounded" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control py-2 contact-input-rounded" placeholder="Mobile Number">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control py-2 contact-input-rounded" placeholder="hello@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Your Message</label>
                                <textarea name="message" class="form-control py-2 contact-input-rounded" rows="5" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="theme-btn w-100 py-3 contact-btn-rounded">
                                    <i class="bi bi-send me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

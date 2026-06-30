<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Customer Reviews</h1>
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
                    <span class="bc-current-page">Reviews</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-5 pb-5">
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-4 mb-4 text-center" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> <?= $this->session->flashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <button class="about-btn-submit about-btn-submit-inline d-inline-block shadow" data-bs-toggle="modal" data-bs-target="#reviewModal">
                <i class="bi bi-pencil-square me-2"></i> Write a Review
            </button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php if (!empty($reviews)): ?>
                <?php foreach (array_reverse($reviews) as $r): ?>
                    <div class="about-review-card">
                        <div class="about-review-rating">
                            <?php for($i=1; $i<=5; $i++): ?>
                                <i class="bi bi-star<?= $i <= ($r['rating'] ?? 5) ? '-fill' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <div class="about-review-text">
                            "<?= htmlspecialchars($r['review']) ?>"
                        </div>
                        <div class="about-review-author">
                            <div class="about-author-avatar">
                                <?= strtoupper(substr($r['name'], 0, 1)) ?>
                            </div>
                            <div class="about-author-info">
                                <h6><?= htmlspecialchars($r['name']) ?></h6>
                                <span><?= htmlspecialchars($r['city']) ?> • <?= date('M d, Y', strtotime($r['created_at'])) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center p-5 bg-light rounded-4">
                    <i class="bi bi-chat-left-dots display-1 text-muted mb-3 d-block"></i>
                    <p class="text-muted fs-5">No reviews yet. Be the first to share your experience!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

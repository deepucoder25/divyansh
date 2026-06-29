<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="bc-section-new">
    <div class="container">
        <!-- Text overlay area -->
        <div class="bc-text-area">
            <h5 class="bc-eyebrow">SAFE. FAST. RELIABLE</h5>
            <div class="bc-sub-row">
                <h1 class="bc-subtitle">Photo Gallery</h1>
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
                    <span class="bc-current-page">Photo Gallery</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="gallery-section-title">Our Relocation Operations in Action</h2>
                    <p class="gallery-section-desc">
                        Take a look at our on-field photos demonstrating our dedication to safety, careful packaging, and organized logistics. Our photo gallery highlights our packing standards, secure warehouse storage, and specialized fleets.
                    </p>

                    <?php
                    $gallery_dir = './assets/images/gallery/';
                    $images = [];

                    if (is_dir($gallery_dir)) {
                        $files = glob($gallery_dir . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);
                        if (!empty($files)) {
                            natsort($files);
                            foreach ($files as $file) {
                                $images[] = [
                                    'src' => base_url('assets/images/gallery/' . basename($file)),
                                    'alt' => str_replace(['-', '_'], ' ', pathinfo($file, PATHINFO_FILENAME)) . " Shifting Operations"
                                ];
                            }
                        }
                    }

                    // Fallback mock items if no images found in directory
                    if (empty($images)) {
                        $fallbacks = [
                            ['img' => 'assets/images/home_service/home-relocation.jpg', 'alt' => 'Household relocation and packing shifting'],
                            ['img' => 'assets/images/home_service/office-relocation.jpg', 'alt' => 'Office shifting and cargo handling services'],
                            ['img' => 'assets/images/home_service/bike-transport.jpg', 'alt' => 'Bike and car carrier shifting operations'],
                            ['img' => 'assets/images/home_service/warehouse-and-storage.jpg', 'alt' => 'Secure warehouse goods storage facilities'],
                            ['img' => 'assets/images/home_service/packing_moving.jpg', 'alt' => 'Relocation packing and transport stacking services'],
                            ['img' => 'assets/images/home_service/transport-service.jpg', 'alt' => 'Logistics carrier fleet loading operations'],
                        ];
                        // Loop to build 12 items for demo purposes
                        for ($i = 0; $i < 12; $i++) {
                            $fb = $fallbacks[$i % count($fallbacks)];
                            $images[] = [
                                'src' => base_url($fb['img']),
                                'alt' => $fb['alt'] . ' - Image ' . ($i + 1)
                            ];
                        }
                    }
                    ?>

                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <?php foreach ($images as $i => $img): ?>
                        <div class="col-md-6 col-sm-6 col-12 mb-4 gallery-grid-item">
                            <div class="gallery-photo-box" onclick="openGalleryLightbox('<?= $img['src'] ?>', '<?= htmlspecialchars($img['alt']) ?>')">
                                <img loading="lazy" src="<?= $img['src'] ?>" alt="<?= htmlspecialchars($img['alt']) ?>">
                                <div class="gallery-photo-overlay">
                                    <div class="gallery-zoom-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center gallery-load-more-wrap">
                        <button id="galleryLoadMoreBtn" class="gallery-load-more-btn">
                            Load More Operations <i class="bi bi-arrow-down ms-1"></i>
                        </button>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Lightbox Modal -->
<div class="modal fade gallery-lightbox-modal" id="galleryLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="gallery-lightbox-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x"></i>
                </button>
                <img src="" id="lightboxImage" class="img-fluid" alt="Zoomed Shifting Photo">
            </div>
        </div>
    </div>
</div>

<script>
function openGalleryLightbox(src, alt) {
    document.getElementById('lightboxImage').src = src;
    document.getElementById('lightboxImage').alt = alt;
    var myModal = new bootstrap.Modal(document.getElementById('galleryLightbox'));
    myModal.show();
}

document.addEventListener('DOMContentLoaded', function() {
    const itemsPerLoad = 6;
    let currentVisible = 6;
    const items = document.querySelectorAll('.gallery-grid-item');
    const loadMoreBtn = document.getElementById('galleryLoadMoreBtn');
    
    // Hide items beyond currentVisible
    for (let i = currentVisible; i < items.length; i++) {
        items[i].style.display = 'none';
    }
    
    // Hide button if total items are less than or equal to currentVisible
    if (items.length <= currentVisible) {
        if (loadMoreBtn) loadMoreBtn.style.display = 'none';
    }
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            let nextVisible = currentVisible + itemsPerLoad;
            for (let i = currentVisible; i < Math.min(nextVisible, items.length); i++) {
                items[i].style.display = 'block';
            }
            currentVisible = nextVisible;
            if (currentVisible >= items.length) {
                loadMoreBtn.style.display = 'none';
            }
        });
    }
});
</script>

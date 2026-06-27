<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<section class="process-section py-5">
    <div class="glow-bg-blob-1"></div>
    <div class="glow-bg-blob-2"></div>
    <div class="process-dot-pattern"></div>
    
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-subtitle">— OUR PROCESS —</span>
            <h2 class="section-title">How We Make Your Move Easy</h2>
            <p class="section-desc">We follow a systematic and transparent process to ensure a smooth, safe and hassle-free moving experience.</p>
            <div class="header-divider"></div>
        </div>

        <div class="process-steps-wrap">
            <div class="process-wavy-line d-none d-lg-block">
                <svg viewBox="0 0 1000 100" fill="none" preserveAspectRatio="none">
                    <defs>
                        <marker id="arrow" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                            <path d="M 0 1.5 L 8 5 L 0 8.5 z" fill="#cbd5e1" />
                        </marker>
                    </defs>
                    <path d="M 10,50 C 100,85 150,15 250,50 C 350,85 450,15 500,50 C 550,85 650,15 750,50 C 850,85 920,50 985,50" stroke="#cbd5e1" stroke-width="2" marker-end="url(#arrow)" />
                </svg>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-2.4 col-12 step-col">
                    <div class="step-card">
                        <div class="step-badge">01</div>
                        <div class="step-icon-circle blue">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="step-connector-dot blue"></div>
                        <div class="step-body">
                            <h3 class="step-title blue">Inquiry & Consultation</h3>
                            <p class="step-desc">Share your moving requirements through a call or form. Our experts understand your needs and guide you.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2.4 col-12 step-col">
                    <div class="step-card">
                        <div class="step-badge">02</div>
                        <div class="step-icon-circle orange">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <div class="step-connector-dot orange"></div>
                        <div class="step-body">
                            <h3 class="step-title orange">Survey & Quotation</h3>
                            <p class="step-desc">We survey your location (if required) and provide a detailed, transparent and competitive quotation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2.4 col-12 step-col">
                    <div class="step-card">
                        <div class="step-badge">03</div>
                        <div class="step-icon-circle blue">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="step-connector-dot blue"></div>
                        <div class="step-body">
                            <h3 class="step-title blue">Packing & Preparation</h3>
                            <p class="step-desc">Our team uses high-quality packing materials to pack your items securely and prepare them for a safe move.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2.4 col-12 step-col">
                    <div class="step-card">
                        <div class="step-badge">04</div>
                        <div class="step-icon-circle orange">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div class="step-connector-dot orange"></div>
                        <div class="step-body">
                            <h3 class="step-title orange">Safe Loading & Transport</h3>
                            <p class="step-desc">We safely load your belongings and transport them using well-maintained vehicles to your new location.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2.4 col-12 step-col">
                    <div class="step-card">
                        <div class="step-badge">05</div>
                        <div class="step-icon-circle blue">
                            <i class="bi bi-house-check"></i>
                        </div>
                        <div class="step-connector-dot blue"></div>
                        <div class="step-body">
                            <h3 class="step-title blue">Delivery & Placement</h3>
                            <p class="step-desc">We unpack (if opted) and arrange your items. Your satisfaction is our priority - we ensure a perfect handover.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="process-highlights-bar mt-5">
            <div class="highlights-bar-inner">
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <div class="highlight-text">
                        <span class="highlight-title">Safe & Secure</span>
                        <span class="highlight-desc">Your belongings are 100% safe.</span>
                    </div>
                </div>

                <div class="highlight-divider d-none d-lg-block"></div>

                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="highlight-text">
                        <span class="highlight-title">Trained Professionals</span>
                        <span class="highlight-desc">Experienced team handles with care.</span>
                    </div>
                </div>

                <div class="highlight-divider d-none d-lg-block"></div>

                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="highlight-text">
                        <span class="highlight-title">On-Time Delivery</span>
                        <span class="highlight-desc">We value your time and ensure safety.</span>
                    </div>
                </div>

                <div class="highlight-divider d-none d-lg-block"></div>

                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="bi bi-emoji-smile-fill"></i>
                    </div>
                    <div class="highlight-text">
                        <span class="highlight-title">Customer Satisfaction</span>
                        <span class="highlight-desc">Your happiness is our success.</span>
                    </div>
                </div>

                <div class="highlight-divider d-none d-lg-block"></div>

                <a href="<?= $phonehtml ?>" class="btn-highlight-call">
                    <span class="btn-call-circle"><i class="bi bi-telephone-fill"></i></span>
                    <div class="btn-call-text">
                        <span class="btn-call-label">Need Help?</span>
                        <span class="btn-call-number"><?= htmlspecialchars($phone) ?></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

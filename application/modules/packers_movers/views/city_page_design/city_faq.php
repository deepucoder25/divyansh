<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="city-faqs-box">
  <div>
    <!-- Section Eyebrow & Header -->
    <span class="city-rf-eyebrow">FAQS</span>
    <h3 class="city-rf-heading">Frequently Asked Questions</h3>
    <p class="city-rf-desc">Find answers to common questions about our packing and shifting services in <?= htmlspecialchars($city) ?>.</p>
    
    <!-- FAQ List Accordion -->
    <div class="city-faqs-list" id="cityFaqsAccordion">
      
      <!-- FAQ 1 -->
      <div class="city-faq-item-card">
        <button class="city-faq-header-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapseOne" aria-expanded="true" aria-controls="cityCollapseOne">
          <span>How do I get a quote for my move?</span>
          <i class="faq-icon-indicator"></i>
        </button>
        <div id="cityCollapseOne" class="collapse show" data-bs-parent="#cityFaqsAccordion">
          <div class="city-faq-item-body">
            You can request a free relocation quote in <?= htmlspecialchars($city) ?> by filling out our quick online request form, calling our helpline directly, or sending us a message on WhatsApp. We provide a transparent, no-obligation estimate custom-tailored for your specific moving requirements.
          </div>
        </div>
      </div>
      
      <!-- FAQ 2 -->
      <div class="city-faq-item-card">
        <button class="city-faq-header-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapseTwo" aria-expanded="false" aria-controls="cityCollapseTwo">
          <span>How far in advance should I book my move?</span>
          <i class="faq-icon-indicator"></i>
        </button>
        <div id="cityCollapseTwo" class="collapse" data-bs-parent="#cityFaqsAccordion">
          <div class="city-faq-item-body">
            We recommend booking your shifting slot at least 5 to 7 days in advance. This ensures we can lock in your preferred date and time, especially if you are shifting on weekends or at the end of the month when household moving demand is extremely high.
          </div>
        </div>
      </div>
      
      <!-- FAQ 3 -->
      <div class="city-faq-item-card">
        <button class="city-faq-header-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapseThree" aria-expanded="false" aria-controls="cityCollapseThree">
          <span>Do you provide packing materials?</span>
          <i class="faq-icon-indicator"></i>
        </button>
        <div id="cityCollapseThree" class="collapse" data-bs-parent="#cityFaqsAccordion">
          <div class="city-faq-item-body">
            Yes, we provide all high-quality packing materials including corrugated bubble wraps, cartons, heavy-duty tape, shrink wrap, and blanketing guards to ensure maximum protection for all your electronics and delicate items.
          </div>
        </div>
      </div>
      
      <!-- FAQ 5 -->
      <div class="city-faq-item-card">
        <button class="city-faq-header-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapseFive" aria-expanded="false" aria-controls="cityCollapseFive">
          <span>Do you offer storage facility?</span>
          <i class="faq-icon-indicator"></i>
        </button>
        <div id="cityCollapseFive" class="collapse" data-bs-parent="#cityFaqsAccordion">
          <div class="city-faq-item-body">
            Yes, we provide secure warehouse storage and container solutions for both short-term and long-term storage needs. Our warehouses are fully guarded, CCTV monitored, and clean.
          </div>
        </div>
      </div>
      
      <!-- FAQ 6 -->
      <div class="city-faq-item-card">
        <button class="city-faq-header-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapseSix" aria-expanded="false" aria-controls="cityCollapseSix">
          <span>Which areas do you serve?</span>
          <i class="faq-icon-indicator"></i>
        </button>
        <div id="cityCollapseSix" class="collapse" data-bs-parent="#cityFaqsAccordion">
          <div class="city-faq-item-body">
            We provide local household and office relocation services across all key sectors and neighborhoods within <?= htmlspecialchars($city) ?>, as well as long-distance domestic shipping services to all major cities across India.
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Banner Footer -->
  <div class="city-faqs-banner mt-4">
    <div class="city-faq-banner-info">
      <div class="city-faq-banner-icon">
        <i class="bi bi-chat-dots-fill"></i>
      </div>
      <div class="city-faq-banner-text">
        <strong>Still have questions?</strong>
        <span>We're here to help!</span>
      </div>
    </div>
    <a href="<?= site_url('contact-us') ?>" class="city-faq-banner-btn">Contact Us</a>
  </div>
</div>
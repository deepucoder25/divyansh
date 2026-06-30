<?php
$suffix = isset($form_id_suffix) ? $form_id_suffix : '';
?>
<div class="slider-form-card">
  <div class="form-header text-start mb-3">
    <h2 class="form-title">Get Your <span class="accent-text">Free Moving Quote</span></h2>
    <p class="form-subtitle">Fill in your details and we'll get back to you with the best possible quote.</p>
  </div>
  
  <form id="quoteform<?= $suffix ?>" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults<?= $suffix ?>" onsubmit="return false;">
    <div class="row g-2">
      
      <!-- Row 1: Full Name & Phone Number (Side-by-Side) -->
      <div class="col-6">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-person"></i></span>
          <label for="name<?= $suffix ?>" class="visually-hidden">Full Name</label>
          <input type="text" id="name<?= $suffix ?>" name="name" class="form-control-custom" placeholder="Full Name">
        </div>
      </div>
      <div class="col-6">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-telephone"></i></span>
          <label for="phone<?= $suffix ?>" class="visually-hidden">Phone Number</label>
          <input type="tel" id="phone<?= $suffix ?>" name="phone" class="form-control-custom" placeholder="Phone Number">
        </div>
      </div>
      
      <!-- Row 2: Moving From & Moving To (Side-by-Side) -->
      <div class="col-6">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-geo-alt"></i></span>
          <label for="mfrom<?= $suffix ?>" class="visually-hidden">Moving From</label>
          <input type="text" id="mfrom<?= $suffix ?>" name="mfrom" class="form-control-custom" value="<?php echo @$city ?>" placeholder="Moving From">
        </div>
      </div>
      <div class="col-6">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-geo-alt"></i></span>
          <label for="mto<?= $suffix ?>" class="visually-hidden">Moving To</label>
          <input type="text" id="mto<?= $suffix ?>" name="mto" class="form-control-custom" placeholder="Moving To">
        </div>
      </div>
      
      <!-- Row 3: Moving Date (Full-Width) -->
      <div class="col-12">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-calendar"></i></span>
          <label for="mdate<?= $suffix ?>" class="visually-hidden">Moving Date</label>
          <input type="text" id="mdate<?= $suffix ?>" name="mdate" class="form-control-custom" placeholder="Moving Date" onfocus="this.type='date'; if(!this.value) { const d = new Date(); this.value = [d.getFullYear(), String(d.getMonth() + 1).padStart(2, '0'), String(d.getDate()).padStart(2, '0')].join('-'); }" onblur="if(!this.value)this.type='text'">
        </div>
      </div>
      
      <!-- Row 4: Type of Move (Full-Width) -->
      <div class="col-12">
        <div class="input-group-custom select-custom">
          <span class="input-icon"><i class="bi bi-box-seam"></i></span>
          <label for="mtype<?= $suffix ?>" class="visually-hidden">Type of Move</label>
          <select id="mtype<?= $suffix ?>" name="mtype" class="form-select-custom">
            <option value="" disabled selected>Type of Move</option>
            <option>Home Shifting</option>
            <option>Office Relocation</option>
            <option>Car Transportation</option>
            <option>Bike Transportation</option>
            <option>Warehouse &amp; Storage</option>
            <option>Domestic Relocation</option>
            <option>Packing &amp; Moving</option>
          </select>
        </div>
      </div>
      
      <!-- Row 5: Additional Details (Full-Width) -->
      <div class="col-12">
        <div class="input-group-custom">
          <span class="input-icon"><i class="bi bi-pencil"></i></span>
          <label for="message<?= $suffix ?>" class="visually-hidden">Additional Details (Optional)</label>
          <input type="text" id="message<?= $suffix ?>" name="message" class="form-control-custom" placeholder="Additional Details (Optional)">
        </div>
      </div>
      
      <!-- Submit Button -->
      <div class="col-12">
        <button type="submit" class="btn-submit-gradient">
          <span>Get My Free Quote</span>
          <span class="submit-arrow"><i class="bi bi-arrow-right-short"></i></span>
        </button>
      </div>
    </div>
    
    <div id="quoteformresults<?= $suffix ?>" class="mt-2"></div>
  </form>
  
  <div class="privacy-note text-center mt-3">
    <i class="bi bi-lock-fill"></i> Your information is safe with us. We respect your privacy.
  </div>
</div>
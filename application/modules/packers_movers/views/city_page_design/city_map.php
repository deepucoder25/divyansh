<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 

// Fallback lat/lon if not found
if (empty($lat) || empty($lon)) {
    $lat = "22.5726";
    $lon = "88.3639"; // default Kolkata
}
?>

<!-- === ROW 3: LOCATION MAP & COVERAGE DETAILS === -->
<div class="row my-5 py-2">
  <div class="col-12">
    <div class="city-map-container">
      <div class="row g-4 align-items-center">
        
        <!-- Left: Google Map Iframe -->
        <div class="col-lg-6 col-12">
          <div class="city-map-iframe-wrapper">
            <iframe
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
            </iframe>
          </div>
        </div>
        
        <!-- Right: Map Info and Coverage Content -->
        <div class="col-lg-6 col-12">
          <div class="city-map-content-col">
            <span class="city-rf-eyebrow">LOCATION COVERAGE</span>
            <h3 class="city-rf-heading">Serving All Local Areas in <?= htmlspecialchars($city) ?></h3>
            <p class="city-rf-desc">Our expert shifting crew operates across every sector, apartment complex, and commercial area within <?= htmlspecialchars($city) ?>. Whether you are moving locally inside the city center or relocating across states, we have you covered.</p>
            
            <!-- Features list -->
            <ul class="city-map-features-list">
              <li class="city-map-feature-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Door-to-door packers and movers services in <?= htmlspecialchars($city) ?></span>
              </li>
              <li class="city-map-feature-item">
                <i class="bi bi-clock-fill"></i>
                <span>Flexible booking slots & 24/7 shifting helpline support</span>
              </li>
              <li class="city-map-feature-item">
                <i class="bi bi-shield-fill-check"></i>
                <span>Trained local drivers who understand <?= htmlspecialchars($city) ?> traffic rules & routes</span>
              </li>
              <li class="city-map-feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Multi-layer secure packing custom-fit for weather conditions</span>
              </li>
            </ul>
            

          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
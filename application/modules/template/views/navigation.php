<body>
  <?php
  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || $class === 'blog' || $class === 'reviews' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials', 'reviews', 'blog', 'privacy-policy', 'terms-and-conditions'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'packing-and-moving'])) {
      $active_tab = 'services';
  } elseif ($segment1 === 'photo-gallery' || $segment1 === 'video-gallery' || $class === 'gallery') {
      $active_tab = 'gallery';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
      $active_tab = 'locations';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  }

  // Active services pages corresponding to the Services module
  $active_services = [
      ['slug' => 'home-shifting',         'name' => 'Home Shifting'],
      ['slug' => 'office-relocation',     'name' => 'Office Relocation'],
      ['slug' => 'car-transportation',    'name' => 'Car Transportation'],
      ['slug' => 'bike-transportation',   'name' => 'Bike Transportation'],
      ['slug' => 'warehouse-and-storage', 'name' => 'Warehouse & Storage'],
      ['slug' => 'domestic-relocation',   'name' => 'Domestic Relocation'],
      ['slug' => 'packing-and-moving',    'name' => 'Packing & Moving']
  ];
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-container d-none d-lg-flex">
        <!-- Left Side: Serving Area, Timings & Email -->
        <div class="top-bar-left">
          <div class="top-bar-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Serving All Over India</span>
          </div>
          <span class="top-bar-divider">|</span>
          <div class="top-bar-item">
            <i class="bi bi-clock-fill"></i>
            <span>24/7 Shifting Support</span>
          </div>
          <span class="top-bar-divider">|</span>
          <div class="top-bar-item">
            <i class="bi bi-envelope-fill"></i>
            <a href="<?= $mailhtml ?>"><?= $mail ?></a>
          </div>
        </div>
        
        <!-- Right Side: Social Media Handles -->
        <div class="top-bar-right">
          <span class="follow-us-text">Follow Us:</span>
          <a href="<?=$facebookhtml ?>" target="_blank" rel="noopener" class="top-social-link" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" class="top-social-link" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener" class="top-social-link" aria-label="YouTube">
            <i class="bi bi-youtube"></i>
          </a>
        </div>
      </div>

      <!-- Mobile Top Bar Content (shows both phone numbers with animation in two columns) -->
      <div class="top-bar-mobile d-flex d-lg-none justify-content-center align-items-center py-2">
        <div class="d-flex justify-content-center align-items-center gap-2 mobile-phones-row">
          <a href="<?= $phonehtml ?>" class="mobile-phone-pill animate-phone-1 d-flex align-items-center gap-1">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone ?></span>
          </a>
          <span class="top-bar-divider">|</span>
          <a href="<?= $phonehtml1 ?>" class="mobile-phone-pill animate-phone-2 d-flex align-items-center gap-1">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone1 ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container">
      <div class="header-container">
        <!-- Brand Logo with vertical separator -->
        <a href="<?= site_url() ?>" class="brand-wrap">
          <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="brand-logo">
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="desktop-nav d-none d-lg-flex">
          <a href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">Home</a>
          
          <!-- About Us Dropdown Menu -->
          <div class="nav-item">
            <a href="#" class="nav-link<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i class="bi bi-chevron-down ms-1"></i></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>" href="<?= site_url('about-us') ?>">About Us</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'reviews' ? ' active' : '' ?>" href="<?= site_url('reviews') ?>">Reviews</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'blog' ? ' active' : '' ?>" href="<?= site_url('blog') ?>">Blog</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>" href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>" href="<?= site_url('faqs') ?>">FAQ</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>" href="<?= site_url('testimonials') ?>">Testimonial</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'privacy-policy' ? ' active' : '' ?>" href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
              <li><a class="dropdown-item<?= $segment1 === 'terms-and-conditions' ? ' active' : '' ?>" href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
            </ul>
          </div>

          <!-- Services Dropdown (restricted to active services) -->
          <div class="nav-item">
            <a href="#" class="nav-link<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i class="bi bi-chevron-down ms-1"></i></a>
            <ul class="dropdown-menu">
              <?php foreach ($active_services as $s): ?>
                <li>
                  <a class="dropdown-item<?= $segment1 === $s['slug'] ? ' active' : '' ?>" href="<?= site_url($s['slug']) ?>">
                    <?= $s['name'] ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <a href="<?= site_url('our-branches') ?>" class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">Locations</a>
          <a href="<?= site_url('photo-gallery') ?>" class="nav-link<?= $active_tab === 'gallery' ? ' active' : '' ?>">Gallery</a>
          <a href="<?= site_url('contact-us') ?>" class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact Us</a>
        </nav>

        <!-- Right Side: Call Now & Quote button -->
        <div class="right-action-group d-none d-lg-flex">
          <a href="<?= $phonehtml ?>" class="header-call-box">
            <div class="call-icon-circle">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="call-text-wrap">
              <span class="call-label">Call Us Now</span>
              <span class="call-number"><?= $phone ?></span>
            </div>
          </a>
          <a href="#" class="btn-get-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-box-seam-fill"></i>
            <span>Get a Free Quote</span>
          </a>
        </div>

        <!-- Mobile Header Actions (Get Quote & Hamburger) -->
        <div class="mobile-header-actions d-flex d-lg-none align-items-center gap-2 gap-sm-3">
          <button class="hamburger-btn" id="openMenu" aria-label="Open navigation menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Screen Drawer Menu -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Mobile navigation">
    <div class="mega-inner">
      <div class="drawer-header">
        <a href="<?= site_url() ?>">
          <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="drawer-logo">
        </a>
        <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
          <i class="bi bi-x"></i>
        </button>
      </div>
      <div class="mobile-nav-list">
        <!-- Home Link -->
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">Home</a>
        </div>
        
        <!-- About Us Accordion -->
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
            <a href="<?= site_url('reviews') ?>" class="<?= $segment1 === 'reviews' ? 'active' : '' ?>">Reviews</a>
            <a href="<?= site_url('blog') ?>" class="<?= $segment1 === 'blog' ? 'active' : '' ?>">Blog</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQ</a>
            <a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonial</a>
            <a href="<?= site_url('privacy-policy') ?>" class="<?= $segment1 === 'privacy-policy' ? 'active' : '' ?>">Privacy Policy</a>
            <a href="<?= site_url('terms-and-conditions') ?>" class="<?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>">Terms & Conditions</a>
          </div>
        </div>

        <!-- Services Accordion (only active services) -->
        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <?php foreach ($active_services as $s): ?>
              <a href="<?= site_url($s['slug']) ?>" class="<?= $segment1 === $s['slug'] ? 'active' : '' ?>">
                <?= $s['name'] ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Locations Link -->
        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">Locations</a>
        </div>

        <!-- Gallery Link -->
        <div class="mobile-nav-item<?= $active_tab === 'gallery' ? ' active' : '' ?>">
          <a href="<?= site_url('photo-gallery') ?>" class="mobile-nav-link">Gallery</a>
        </div>

        <!-- Contact Link -->
        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">Contact Us</a>
        </div>
      </div>

      <!-- Quick Action Buttons in mobile view -->
      <div class="mobile-drawer-contact">
        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="mobile-drawer-btn whatsapp">
          <i class="bi bi-whatsapp"></i> WhatsApp Chat
        </a>
        <a href="<?= $phonehtml ?>" class="mobile-drawer-btn call">
          <i class="bi bi-telephone-fill"></i> Call: <?= $phone ?>
        </a>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');
        
        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>

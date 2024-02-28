<!-----------Desktop NAVBAR------------ -->

<div class="container img-z-index navbar-fixed-bottom">
  <nav class="navbar navbar-expand-sm navbar-light" id="navbar">
    <div class="container-fluid">
      <a id="logo" href="<?= base_url() ?>"><img src="<?= asset_url() ?>images/logo-ast.png" /> </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
          </li>

          <li class="nav-item dropdown dropup">

            <a class="nav-link dropdown-toggle" href="<?= base_url('service-page') ?>" id="navbarDropdownMenuLink"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>

            <ul class="dropdown-menu mt-1" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="<?= base_url('web-development') ?>">Web Development</a>
              </li>

              <li>
                <a class="dropdown-item" href="<?= base_url('graphic-design') ?>">Graphic Designing</a>
              </li>

              <li>
                <a class="dropdown-item" href="<?= base_url('digital-marketing') ?>">Digital Marketing</a>
              </li>

              <li>
                <a class="dropdown-item" href="<?= base_url('content-writing') ?>">Content Writing Services</a>
              </li>

              <li>
                <a class="dropdown-item" href="<?= base_url('bpo') ?>">BPO Services</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about-us') ?>">About US</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('our-team') ?>">Our Team</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('faqs') ?>">FAQs</a>
          </li>

          <li class="nav-item mt-1">
            <a class="btn-custom btn-blue" href="tel:+44 754 654 6381">Call Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>


<!-- -----------------Mobile Navbar-------------------- -->
<!-- Mobile Navbar -->
<nav class="navbar navbar-expand-lg navbar-light d-block d-lg-none nav-mobile mb-3">

  <div class="container">

    <a id="logo" class="navbar-brand" href="http://localhost/ast/"><img class="w-75"
        src="http://localhost/ast/assets/images/logo-ast.png"> </a>

    <button class="navbar-toggler" type="button" id="mobileMenuToggle">
      <span class="navbar-toggler-icon" style="color: black;"></span>

    </button>

    <div class="collapse navbar-collapse" id="mobileNavbar">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">

          <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Home</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= base_url('about-us') ?>">About Us</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= base_url('services') ?>">Our Services</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= base_url('our-team') ?>">Our Team</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= base_url('faqs') ?>">FAQs</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>

        </li>

      </ul>

    </div>

    <div class="navbar-close-btn" style="display: none;">

      <button class="close" aria-label="Close" id="closeMobileMenu"><i class="fas fa-times"></i></button>

    </div>

  </div>

</nav>



<script>

  document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    const mobileNavbar = document.getElementById('mobileNavbar');
    const navbarCloseBtn = document.querySelector('.navbar-close-btn');

    mobileMenuToggle.addEventListener('click', function () {
      mobileNavbar.classList.toggle('show');
      navbarCloseBtn.style.display = mobileNavbar.classList.contains('show') ? 'block' : 'none';
    });

    closeMobileMenu.addEventListener('click', function () {
      mobileNavbar.classList.remove('show');
      navbarCloseBtn.style.display = 'none';
    });
  });


</script>
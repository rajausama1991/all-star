<footer class="text-center text-lg-start pt-4 position-relative" id="footer">

  <section class="">

    <div class="container-fluid padding-x-global text-center text-md-start mt-5">

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 position-relative">

          <h6 class="text-uppercase fw-bold mb-4">

            <a href="<?= base_url() ?>" ?><i><img src="<?= asset_url() ?>images/ast-logo-white.png" alt=""></i></a>

          </h6>

          <p>
            All Star Technologies is a business website providing a range of digital marketing services that guarantee
            the success of your project. We provide excellence in all kinds of tasks by the assistance of an expert
            team ready to cater your needs 24/7 without any delay. You can get whatever you want in a matter of few
            clicks.
          </p>

          <div class="footer-social-icons mt-4">
            <a href="" class="me-2 ">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-2">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>


        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto me-0 pe-0 mb-4">

          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Quick Links
          </h6>
          <p>
            <a href="<?= base_url() ?>" class="text-reset">Home</a>
          </p>
          <p>
            <a href="<?= base_url('services') ?>" class="text-reset">Services</a>
          </p>
          <p>
            <a href="<?= base_url('about-us') ?>" class="text-reset">About Us</a>
          </p>
          <!-- <p>
          <a href="#!" class="text-reset">Pricing</a>
        </p> -->

          <p>
            <a href="<?= base_url('our-team') ?>" class="text-reset">Our Team</a>
          </p>

          <p>
            <a href="<?= base_url('faqs') ?>" class="text-reset">FAQs</a>
          </p>

          <p>
            <a href="<?= base_url('contact') ?>" class="text-reset">Contact Us</a>
          </p>

        </div>

        <div class="col-md-3 col-lg-3 col-xl-2 mx-auto ms-0 ps-0 mb-4">

          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Contact Us
          </h6>

          <div class="">
            <form>
              <div class="mb-3">
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <input type="url" class="form-control" id="website" placeholder="Enter your website URL">
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 cus-z-1">

          <h6 class="text-uppercase fw-bold mb-4 text-white">Find Us</h6>
          <p><i class="fas fa-home me-3"></i> Office #381 Lytchett House, 13 Freeland Park, Wareham Road, Poole,
            Dorset, BH16 6FA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@allstartechnologies.co.uk
          </p>
          <p><i class="fas fa-phone me-3"></i>+44 754 654 6381</p>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13287.909350487344!2d73.0726037!3d33.6318296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95c4bdc7979b%3A0x519109fef7a9becf!2sAll%20Star%20Technologies!5e0!3m2!1sen!2s!4v1707116194142!5m2!1sen!2s"
            width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center px-4">

    <div class="row">

      <div class="col-md-3">
        <img src="<?= asset_url() ?>images/footer-circle.png" class="footer-cirlce-img " alt="">

      </div>

      <div class="col-md-7">

        <div class="row align-items-center mt-3 g-4">

          <div class="col-md-8">

            <h2 class="text-white text-start ps-5">Wanna Talk to Us?</h2>

          </div>

          <div class="col-md-4">

            <a class="btn-custom btn-blue shadow-none" href=""> Chat Now</a>

          </div>
        </div>

        <div class="row justify-content-start mt-5 g-4">

          <p class="text-start ps-5">© 2021 Copyright:
            <a class="text-white" href=""> All Star Technologies. Powered by Writers Planet Ltd.</a>
          </p>

        </div>

      </div>

      <div class="col-md-2">

        <img src="<?= asset_url() ?>images/right-blob.png" class="position-absolute footer-cirlce-img" alt="">
      </div>
    </div>

  </div>

</footer>


<div id="topcontrol" title="Scroll Back to Top">
  <img src="https://perfectessaywriting.com/wp-content/themes/theme/images/up.webp" alt="scroll to top" width="40"
    height="40">
</div>

<script>

  document.addEventListener('DOMContentLoaded', function () {
    var topControl = document.getElementById('topcontrol');

    window.addEventListener('scroll', function () {
      if (window.scrollY > window.innerHeight) {
        topControl.style.display = 'block';
      } else {
        topControl.style.display = 'none';
      }
    });

    topControl.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });

</script>


<?php $__env->startSection('title','Trikayarasa Food | Home'); ?>
    <?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        

      <div
        id="home"
        class="header-hero"
        style="background-image: url(images/yellow.png)"
      >
        <div class="container">
          <div class="justify-center row">
            <div class="w-full lg:w-2/3">
              <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                <h2
                  class="
                    mb-3
                    text-6xl
                    font-bold
                    text-white
                    header-title
                    wow
                    fadeInUp
                  "
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                 <?php echo e($home->title); ?>

                </h2>
                <p
                  class="mb-8 text-white text wow fadeInUp text-2xl"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                  <?php echo e($home->text); ?>

                </p>
                <a
                  href="#features"
                  class="page-scroll main-btn gradient-btn gradient-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                  >Get Started</a
                >
              </div>
              <!-- header hero content -->
            </div>
          </div>
          <!-- row -->
          <div class="justify-center row">
            <div class="w-full lg:w-2/3">
              <div
                class="text-center header-hero-image wow fadeIn"
                data-wow-duration="1.3s"
                data-wow-delay="1.4s"
              >
                <img src="/image/<?php echo e($home->image); ?>" alt="Hero Image" />
              </div>
              <!-- header hero image -->
            </div>
          </div>
          <!-- row -->
        </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
    <div class="pt-24 brand-area">
      <div class="container">
        <div class="row">
          <div class="w-full">
            <div class="items-center justify-center row lg:justify-between">
          <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
              <div
                class="single-logo hover:opacity-100 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <img src="/image/<?php echo e($customer->image); ?>" alt="brand" />
              </div>
              <!-- single logo -->
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
            <!-- brand logo -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>

    <!--====== BRAMD PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Savor the Taste of Quality, <span> Purchase Our Delicious Onion Treats!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row ">
                
              <?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
              

                <div class="w-full sm:w-2/3 lg:w-1/3 ">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="/image/<?php echo e($card->image); ?>" alt="shape">
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900"><?php echo e($card->text); ?></h4>
                            <p class="mb-8"><?php echo e($card->title); ?></p>
                        </div>
                    </div> <!-- single services -->
                </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

   

    <section id="about" class="relative pt-20 about-area">
      <div class="container">
        <div class="row">
          <div class="w-full lg:w-1/2">
            <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
            <div
              class="mx-4 mt-12 about-content wow fadeInLeftBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="mb-4 section-title">
                <div class="line"></div>
                <h3 class="title">
                 <?php echo e($about->text); ?>

                </h3>
              </div>
              <!-- section title -->
              <p class="mb-8">
                <?php echo e($about->title); ?>

              </p>
            </div>
            <!-- about content -->
          </div>
          
          <div class="w-full lg:w-1/2">
            <div
              class="mx-4 mt-12 text-center about-image wow fadeInRightBig"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img src="/image/<?php echo e($about->image); ?>" alt="about" />
            </div>
            <!-- about image -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
      
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<footer id="footer" class="relative z-10 footer-area pt-120">
  <div class="footer-bg" style="background-image: url(<?php echo e(url('images/red.jpg')); ?>)"></div>
  <div class="container">
    <div class="
        px-6
        pt-10
        pb-20
        mb-12
        bg-white
        rounded-lg
        shadow-xl
        md:px-12
        subscribe-area
        wow
        fadeIn
      " data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="row text-right">
        <div class="w-full lg:w-1/2 text-center">
          <div class="lg:mt-12 subscribe-content">
            <h1 class="text-2xl font-bold sm:text-6xl subscribe-title">
              <?php echo e($home->title); ?>

              <span class="block font-normal"></span>
            </h1>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="mt-12 subscribe-form"></div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- subscribe area -->
    <div class="footer-widget pb-120">
      <div class="row">
        <!-- Navigation and Contact Us Column -->
        <div class="w-full lg:w-2/5">
          <div class="row">
            <div class="w-full lg:w-1/2">
              <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Navigation</h4>
                </div>
                <ul class="link">
                  <li><a href="/" class="text-white style">Home</a></li>
                  <li><a href="gallery" class="text-white">Activities</a></li>
                  <li><a href="blog" class="text-white">News</a></li>
                  <li><a href="portfolio" class="text-white">Portfolio</a></li>
                  <li><a href="contact" class="text-white">Contact</a></li>
                  <li><a href="profile" class="text-white">Profile</a></li>
                </ul>
              </div>
              <!-- footer wrapper -->
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                </div>
                <ul class="contact text-white">
                  <li><?php echo e($about->phone); ?></li>
                  <li><?php echo e($about->emails); ?></li>
                  <li><?php echo e($about->locations); ?></li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
        </div>
        <!-- Follow Us and Map Column -->
        <div class="w-full lg:w-3/5">
          <div class="row">
            <div class="w-full lg:w-1/2">
              <div class="mt-12 social-media wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Follow Us</h4>
                </div>
                <ul class="social flex space-x-4">
                  <li>
                    <a href="https://www.instagram.com/pt.trikayarasajayafood?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 32px; height: 32px;" />
                    </a>
                  </li>
                  <li>
                    <a href="https://wa.me/085655111130" target="_blank">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 32px; height: 32px;" />
                    </a>
                  </li>
                </ul>
                <div class="mt-4 qr-code-container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="text-align: right;">
                </div>
                <!-- QR Code -->
              </div>
              <!-- social media -->
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mt-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Our Location</h4>
                </div>
                <div class="map-container pt-4" style="text-align: right;">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0125996964094!2d144.964326415316!3d-37.81410797975165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf4c0e0a1b4fd1e2!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1600355392995!5m2!1sen!2sau"
                    width="100%"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- footer widget -->
  </div>
</footer>

<style>
  .social img {
    transition: transform 0.3s ease;
  }

  .social img:hover {
    transform: scale(1.1);
  }
.link {
  font-size: 20px;
}
  .link a {
    transition: color 0.3s ease;
  }

  .link a:hover {
    color: #ff6347; /* Example hover color */
  }

  .footer-widget {
    padding-bottom: 120px;
  }

  .footer-title h4 {
    margin-bottom: 8px;
    font-size: 2rem;
    font-weight: bold;
    color: white;
  }

  .contact li,
  .link li {
    margin-bottom: 8px;
  }

  .contact li {
    font-size: 1rem;
  }

  .link a {
    font-size: 1rem;
    color: white;
  }

  .qr-code-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }
  
</style>
        
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2" class="particles"></div>
    </footer>
  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--====== ABOUT PART ENDS ======-->
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-company-profiles\resources\views/frontend/home.blade.php ENDPATH**/ ?>
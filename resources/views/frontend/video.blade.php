@extends('layouts.frontend')

@section('title','Gallery')
    @section('content')
<!--====== BRAMD PART START ======-->

    <section id="team" class="team-area pt-120">
      <div class="container">

        <nav class="flex mb-10" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/gallery" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Activities</a>
              </div>
            </li>
          </ol>
        </nav>

        <div class="justify-center row">
          <div class="w-full lg:w-2/3">
            <div class="pb-8 text-center section-title">
              <div class="m-auto line"></div>
              <h3 class="title"><span>Activities</span>Pages</h3>
              <span class="mt-4"><a href="/gallery" class="text-blue-500 btn">Photos</a> | <a href="/gallery/videos" class="text-blue-700 font-bold ">Videos</a> </span>
            </div>

            
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="justify-center row">
       @forelse ($gallery as $gallery)
           <div class="w-full sm:w-2/3 lg:w-1/3">
            <div
              class="mt-4 text-center single-team wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="relative team-image">
                  <video class="w-full max-h-60	" controls  >
                     <source src="/video/{{ $gallery->video }}" type="video/mp4"> 
                    <source src="/video/{{ $gallery->video }}" type="video/ogg"> 
                  </video>
              </div>
              <div class="p-8">
                <h5 class="mb-1 text-xl font-bold text-gray-900">{{ $gallery->name }}</h5>
                <p>{{ $gallery->title }}</p>
              </div>
            </div>
                        
            <!-- single team -->
          </div>
       @empty
           <h1 class="text-center">Halaman Masih Kosong </h1>
       @endforelse
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    <footer id="footer" class="relative z-10 footer-area pt-120">
  <div
    class="footer-bg"
    style="background-image: url({{ url('images/red.jpg') }})"
  ></div>
  <div class="container">
    <div
      class="
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
      "
      data-wow-duration="1s"
      data-wow-delay="0.5s"
    >
      <div class="row text-right">
        <div class="w-full lg:w-1/2 text-center">
          <div class="lg:mt-12 subscribe-content">
            <h1 class="text-2xl font-bold sm:text-4xl subscribe-title">
              @foreach ($home as $home)
                {{ $home->title }}
              @endforeach
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
        <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
          <div class="row">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
              <div
                class="mt-12 link-wrapper wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.6s"
              >
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">
                    Navigation
                  </h4>
                </div>
                <ul class="link">
                  <li><a href="/" class="text-white">Home</a></li>
                  <li><a href="gallery" class="text-white">Activities</a></li>
                  <li><a href="blog" class="text-white">News</a></li>
                  <li><a href="portfolio" class="text-white">Portfolio</a></li>
                  <li><a href="contact" class="text-white">Contact</a></li>
                  <li><a href="profile" class="text-white">Profile</a></li>
                </ul>
              </div>
              <!-- footer wrapper -->
            </div>
          </div>
        </div>
        <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-4/6">
          <div class="row">
            <div class="w-full lg:w-1/2">
              <div
                class="mt-12 footer-contact wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                </div>
                <ul class="contact text-white">
                  @foreach ($about as $about)
                    <li>{{ $about->phone }}</li>
                    <li>{{ $about->emails }}</li>
                    <li>{{ $about->locations }}</li>
                  @endforeach
                </ul>
              </div>
              <!-- footer contact -->
            </div>
            <div class="w-full lg:w-1/2">
              <div
                class="mt-12 social-media wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Follow Us</h4>
                </div>
                <ul class="social flex space-x-4">
                  <li>
                    <a href="https://www.instagram.com/pt.trikayarasajayafood?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                      <img
                        src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
                        alt="Instagram"
                        style="width: 32px; height: 32px;" 
                      />
                    </a>
                  </li>
                  <li>
                    <a href="https://wa.me/085655111130" target="_blank">
                      <img
                        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                        alt="WhatsApp"
                        style="width: 32px; height: 32px;" 
                      />
                    </a>
                  </li>
                </ul>
                <div
                  class="mt-4 qr-code-container wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.8s"
                  style="text-align: right;"
                >
                </div>
                <!-- QR Code -->
              </div>
              <!-- social media -->
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
      <!-- container -->
      <div id="particles-2" class="particles"></div>
    </footer>

    <!--====== TEAM PART ENDS ======-->
@endsection
@php
  $settings = Fusion\Models\Singles\Settings::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CentriAir</title>
  <link href="{{ url('theme/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <header>
    @include('partials.pre-nav')
    
    <div class="nav-bar">
      <div
        class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex items-center justify-between gap-x-2 py-4 md:py-8">
        <div class="left-container">
          <a href="{{ url('/') }}">
            <div class="w-20">
              @include('partials.logo')
            </div>
          </a>
        </div>
        <div class="right-container hidden md:block">
          <nav class="flex gap-x-8">
            <div class="font-light"><a href="{{ url('/') }}">Home</a></div>
            <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
            <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
            <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
            <div class="font-bold flex items-center gap-x-2">
              <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 67.662 101.309">
                  <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                    transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
                </svg>
              </div>
              <a href="{{ url('contact-us') }}">Contact Us</a>
            </div>
          </nav>
        </div>
        <div onclick="expandMenu()" class="block md:hidden">
          <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </div>
      </div>
      <div id="menu-bar"
        class="hidden w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex items-center justify-center gap-x-2 py-4 md:py-8">
        <nav class="flex flex-col gap-y-4 text-center justify-center">
          <div class="font-light"><a href="{{ url('/') }}">Home</a></div>
          <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
          <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
          <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <a href="{{ url('contact-us') }}">Contact Us</a>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <section class="bread-crumbs bg-card-outline-grey">
    <div
      class="bread-crumbs-container w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex items-center gap-x-2 py-4">
      <div class="bread-crumb-start">
        <p><a href="{{ url('/') }}">Home</a></p>
      </div>
      <div class="bread-crumb-separator">></div>
      <div class="bread-crumb-current text-blue-primary font-bold">
        <p>Contact Us</p>
      </div>
    </div>
  </section>
  <section class="contact-us-section  mb-20 md:mb-40">
    <div class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base gap-x-2 py-4">
      <div class="fade-in-element down our-services-header pt-8 flex justify-center flex-col text-center">
        <div class="text-black-title our-services-header font-bold uppercase text-3xl md:text-5xl pb-2">
          <h1>CONTACT US</h1>
        </div>
        <div class="our-services-sub-header text-blue-primary text-lg">
          <h2>Get In Touch</h2>
        </div>
      </div>
      <div class="divider h-0.5 bg-medium-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto my-12"></div>
      <div class="fade-in-element up our-services-sub-header-container flex flex-col justify-center text-center">
        @include('partials.contact-us-icons')
      </div>
    </div>
  </section>
  <section class="contact-us-section bg-landing-bg bg-cover relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:pt-32 md:pb-48 relative z-50">
      
      @include('partials.contact-us-form')

    </div>
    <div class="fade-in-element up hidden lg:block absolute -top-[99px] left-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#52A3D8" />
            <stop offset="1" stop-color="#315FAA" />
          </linearGradient>
        </defs>
        <path id="Path_725" data-name="Path 725" d="M1232.5,2009.514V1810.486l298,100.056Z"
          transform="translate(-1232.5 -1810.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <section class="contact-us-map-container md:relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-0 relative z-50">
      <div class="map-container h-[400px] w-full max-w-screen-sm md:max-w-screen-lg mx-auto relative">
        <div class="w-full h-full md:absolute -top-20">
          <iframe class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2506669981617!2d100.39512607617577!3d5.3787013354046245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac67cd9d56a7f%3A0x829dd527109be948!2s2891%2C%20Jalan%20Baru%2C%20Bandar%20Perai%20Jaya%2C%2013600%20Seberang%20Perai%2C%20Pulau%20Pinang!5e0!3m2!1sen!2smy!4v1684421776076!5m2!1sen!2smy"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <footer
    class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-2 relative z-50">
    <div
      class="footer-container sm:flex pb-2 sm:pb-0 text-center md:text-base sm:text-sm  sm:text-left justify-between font-light text-light-grey">
      <div class="copyright">&copy;{{ date('Y') }} Copyright CentriAir Solutions. All rights reserved</div>
      <div class="credits">Website designed by <a href="https://antwebstudio.com">Ant Web Studio</a></div>
    </div>
  </footer>
</body>

</html>

<script>
  expandMenu = () => {
    const menuBar = document.getElementById('menu-bar')
    if (menuBar.classList.contains('hidden')) {
      menuBar.classList.remove('hidden')
    } else {
      menuBar.classList.add('hidden')
    }
  }

  
  const callback = function(entries) {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add('in-view')
      }
    });
  };

  document.addEventListener("DOMContentLoaded", function(){
    const targets = document.querySelectorAll(".fade-in-element");

    const observer = new IntersectionObserver(callback);

    targets.forEach(function(target) {
      observer.observe(target);
    });
  });
</script>
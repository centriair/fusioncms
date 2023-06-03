{{--
replace: href="(\.\/)?([^"]+).html"
with: href="{{ url('$2') }}"

replace: src="\.\/([^"]+).(png|jpg|jpeg)"
with: src="{{ url('theme/$1.$2') }}"

replace: href="{{ url('theme/assets/css/style.css') }}"
with: href="{{ url('theme/assets/css/style.css') }}"
--}}
@php
  $brands = App\Models\Brand::limit(6)->get();
  $settings = Fusion\Models\Singles\Settings::first();
  $services = Fusion\Models\Collections\Services::get();
  
  $aboutUs = Fusion\Models\Singles\AboutUs::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
  <title>{{ $settings->name }}</title>
  <link href="{{ url('theme/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <header class="nav-bar">
    @include('partials.pre-nav')
    
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
        <nav class="flex gap-x-8 text-black-title ">
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <a href="{{ url('/') }}">Home</a>
          </div>
          <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
          <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
          <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
          <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
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
        <div class="font-bold flex items-center gap-x-2">
          <div class="triangle w-3">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
              <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
            </svg>

          </div>
          <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
        <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
        <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
        <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
      </nav>
    </div>
  </header>

  @include('partials.home-banner')

  <section class="about-us-section relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base md:flex items-center justify-center gap-x-4 py-8 md:py-24 z-50 relative">
      <div class="left-container fade-in-element down md:flex-col md:w-2/5 flex justify-center pb-4 md:pb-0">
        <div>
          @if($aboutUs->image->isNotEmpty())
          <img class="w-[300px]" src="{{ $aboutUs->image->first()->url }}">
          @else
          <img src="{{ url('theme/assets/photos/about-us.jpg') }}">
          @endif
        </div>
      </div>
      <div class="right-container fade-in-element up md:flex-col md:w-3/5 flex justify-center">
        <div class="about-us-container">
          <div class="text-black-title about-us-heading uppercase font-bold text-md md:text-lg md:text-xl flex gap-x-2">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <h2>About Us</h2>
          </div>
          <div class="about-us-headline text-light-grey font-light text-xl md:text-[27px] mt-2">
            <h2>Welcome to the solution for all your</h2>
          </div>
          <!-- <div class="about-us-headline text-md md:text-md md:text-lg">
            <h2>We also provide the best</h2>
          </div> -->
          <div class="about-us-headline text-blue-primary font-bold text-3xl">
            <h2>cooling needs!</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
          <div class="reset about-us-tag-line font-light pb-4 md:pb-4 sm:pb-2 text-[14px] leading-[170%]">
            <p>Say goodbye to buying and maintaining air conditioners with short warranties.</p>
            <p>At CentriAir, you can now experience a worry-free rental option for a cool and
              comfortable environment, up to 5 years warranty.</p>
            <p>Stay cool without the commitment – RENT an air conditioner today!</p>
          </div>
          <div class="inline-flex">
            <a href="{{ url('about-us') }}"
              class=" h-full w-full btn-primary button-primary">
              <p>Read More</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block absolute bottom-0 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#52A3D8" />
            <stop offset="1" stop-color="#315FAA" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <div class="divider h-0.5 bg-divider-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto"></div>
  
  @include('partials.steps')

  
  @include('partials.ask-the-expert')
  
  <section class="our-plans-section">
    <div
      class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down our-plans-header flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title our-plans-header-container py-[40px]">
          <div class="our-plans-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <h2>Our Plans</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="our-plans-tag-line text-md md:text-lg font-light">
            <p>Choose from our selection of reputable brands in the market</p>
          </div>
        </div>
      </div>
      <div class="fade-in-element up flex flex-wrap pb-4 md:pb-8">
        @foreach($brands->chunk(3) as $brands)
          @if($brands[0])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[0], 'container' => 'md:pr-4 sm:pr-4'])
          @endif
          @if($brands[1])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[1], 'container' => 'md:px-4 sm:px-4'])
          @endif
          @if($brands[2])
            @include('partials.our-plan-brand', ['homepage' => true, 'brand' => $brands[2], 'container' => 'md:pl-4 sm:pl-4'])
          @endif
        @endforeach
      </div>
      <div class="button-container flex justify-center">
        <a href="{{ url('our-plans') }}"
          class="btn-primary button-primary">
          <p>Book Now!</p>
        </a>
      </div>
    </div>
  </section>
  <section class="our-services-section bg-landing-bg bg-cover relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down our-services-header md:flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title  our-services-header-container  py-[40px]">
          <div class="our-services-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <h2>Other Services Provided</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="our-services-tag-line text-md md:text-lg font-light">
            <p>In addition to our core service, we offer a range of other services to cater to all your air conditioning needs:</p>
          </div>
        </div>
      </div>
      <div class="our-services-content md:flex gap-x-8  pb-4 md:pb-8">
        <div class="fade-in-element down left-container md:w-2/3 pb-4 md:pb-0">
          <div class="services flex flex-col gap-y-4">
            @foreach($services as $service)
            <div
              class="services-card bg-white @if($loop->first) rounded-t-xl @elseif($loop->last) rounded-b-xl  @endif px-8 py-4 flex flex-col md:flex-row justify-center text-center sm:text-left items-center gap-x-8 shadow-custom">
              @if($service->icon->isNotEmpty())
              <div class="left-icon w-20 sm:w-1/6 pb-4">
                <img src="{{ $service->icon->first()->url}}" />
              </div>
              @endif
              <div class="right-services sm:w-5/6 flex flex-col">
                <div class="text-black-title services-title font-bold text-xl">
                  <h2>{{ $service->title }}</h2>
                </div>
                <div class="services-divider h-0.5 bg-blue-primary w-20 my-4 mx-auto sm:mx-0"></div>
                <div class="services-description">
                  <h3>{{ $service->short_description }}</h3>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="fade-in-element up right-container md:w-1/3 h-auto shadow-custom">
        
          @if($aboutUs->services_image->isNotEmpty())
          <img class="h-full object-cover"
            src="{{ $aboutUs->services_image->first()->url }}">
          @else
          <img class="h-full object-cover"
            src="{{ url('theme/assets/photos/our-services.jpg') }}">
          @endif
        </div>
      </div>
      <div class="fade-in-element up our-services-button-container flex justify-center">
        <a href="{{ url('our-services') }}"
          class="btn-primary button-primary">
          <p>Read More</p>
        </a>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] right-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#52A3D8" />
            <stop offset="1" stop-color="#315FAA" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <section class="brands">
    <div class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32">
      <div class="flex md:flex-row gap-y-8 justify-center gap-x-12 lg:justify-between">
        @foreach($brands as $brand)
        <div class="fade-in-element right md:up image-container h-10 flex">
          <img class="object-contain" alt="{{ $brand->logoUrl }}" src="{{ $brand->logoUrl }}">
        </div>
        @endforeach
      </div>
    </div>
    </section>
  <section class="contact-us-section bg-landing-bg bg-cover bg-right relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      
      
      <div class="fade-in-element down contact-us-header flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title contact-us-header-container">
          <div class="contact-us-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>

            </div>
            <h2>Get in touch</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          @include('partials.contact-us-icons')
        </div>
      </div>
      <div class="conatct-us-divider h-0.5 bg-medium-grey w-3/4 my-4 mx-auto"></div>

      @include('partials.contact-us-form')
    </div>
    <div class="hidden lg:block absolute -top-[99px] left-0">
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
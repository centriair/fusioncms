@php
  $settings = Fusion\Models\Singles\Settings::first();
  $services = Fusion\Models\Collections\Services::get();
@endphp
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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
            <div class="font-bold flex items-center gap-x-2">
              <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 67.662 101.309">
                  <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                    transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
                </svg>
              </div>
              <a href="{{ url('our-services') }}">Other Services</a>
            </div>
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
          <div class="font-light"><a href="{{ url('/') }}">Home</a></div>
          <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
          <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3"><svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full"
                viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#52A3D8" />
              </svg>
            </div>
            <a href="{{ url('our-services') }}">Other Services</a>
          </div>
          <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
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
        <p>Other Services</p>
      </div>
    </div>
  </section>
  <section class="our-services-section mb-20 md:mb-40">
    <div class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base gap-x-2 py-4">
      <div class="fade-in-element down our-services-header pt-8 flex justify-center flex-col text-center">
        <div class="text-black-title our-services-header font-bold uppercase text-3xl md:text-5xl pb-2">
          <h1>OTHER SERVICES PROVIDED</h1>
        </div>
        <div class="our-services-sub-header text-blue-primary text-lg">
          <h2>Expanded Services Beyond Air Conditioner Rentals</h2>
        </div>
      </div>
      <div class="divider h-0.5 bg-medium-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto my-12"></div>
      <a id="service"></a>
      <div class="our-services-content flex flex-col-reverse flex-col md:flex-row gap-x-8">
        <div
          class="fade-in-element right left-container md:w-1/3 grid md:flex md:flex-col grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-2 md:gap-4 pb-8 md:pb-0 ">

          @foreach($services as $service)
          <div class="our-services-card-button-card" href="#service" onclick=changeCard({{ $loop->index }})>
            <div
              class="our-services-card-button w-full md:w-auto shadow-custom bg-white-grey text-blue-primary py-4 md:py-8 px-8 md:px-12 font-bold text-xl md:text-2xl">
              <h3>{{ $service->name }}</h3>
            </div>
          </div>
          @endforeach

        </div>
        <div class="divider-horizontal hidden md:block w-0.5 bg-medium-grey"></div>
        <div class="fade-in-element left right-container md:w-2/3">

          @foreach($services as $service)
          <div class="our-services-content-paragraph-container @if($loop->first)block @else hidden @endif">
            <div class="our-services-content-title-container flex items-center gap-x-8 pb-8">
              @if($service->icon->isNotEmpty())
              <div class="our-services-content-title-icon w-20">
                <img src="{{ $service->icon->first()->url }}" />
              </div>
              @endif
              <div class="text-black-title our-services-content-title font-bold text-xl md:text-2xl">
                <h2>{{ $service->title }}</h2>
              </div>
            </div>
            <div class="our-services-content-description">
              {!! $service->description !!}
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
            <div class="our-services-content-points">
              <ul class="brand-points">
                @foreach($service->summary as $summary)
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>{{ $summary['value'] }}</p>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
  
            @if(trim(strip_tags($service->additional_content)))
            <div class="our-services-content-table-container our-services-additional-content">
              {!! $service->additional_content !!}

              <div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
            </div>
            @endif

          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
  @include('partials.ask-the-expert')

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



  changeCard = (cardIndex) => {
    const cardArray = [0, 1, 2]
    const contentArray = document.getElementsByClassName('our-services-content-paragraph-container')
    const serviceCardArray = document.getElementsByClassName('our-services-card-button')

    cardArray.forEach(card => {
      if (card != cardIndex) {
        contentArray[card].classList.add('hidden')
        serviceCardArray[card].classList.add('bg-gradient-to-b', 'sm:bg-gradient-to-r', 'from-light-blue-primary', 'to-blue-primary', 'text-white')
        serviceCardArray[card].classList.remove('bg-white-grey', 'text-blue-primary')
      } else {
        contentArray[card].classList.remove('hidden')
        serviceCardArray[card].classList.remove('bg-gradient-to-b', 'sm:bg-gradient-to-r', 'from-light-blue-primary', 'to-blue-primary', 'text-white')
        serviceCardArray[card].classList.add('bg-white-grey', 'text-blue-primary')

      }
    })
    document.getElementById("service").scrollIntoView();

  }
  changeCard(0)

  const callback = function (entries) {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add('in-view')
      }
    });
  };

  document.addEventListener("DOMContentLoaded", function () {
    const targets = document.querySelectorAll(".fade-in-element");

    const observer = new IntersectionObserver(callback);

    targets.forEach(function (target) {
      observer.observe(target);
    });
  });

  const accordionHeader = document.querySelectorAll(".accordion-question-container");
  accordionHeader.forEach((header) => {
    header.addEventListener("click", function () {
      const accordionContent = header.parentElement.querySelector(".accordion-content");
      let accordionMaxHeight = accordionContent.style.maxHeight;

      if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
        accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
        header.querySelector(".plus-button").classList.toggle('hidden')
        header.querySelector(".minus-button").classList.toggle('hidden')
      } else {
        accordionContent.style.maxHeight = `0px`;
        header.querySelector(".plus-button").classList.toggle('hidden')
        header.querySelector(".minus-button").classList.toggle('hidden')
      }
    });
  });
</script>
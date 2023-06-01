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
  <header class="nav-bar">
    <div class="pre-nav-bar bg-blue-primary">
      <div class="w-full md:max-w-screen-lg mx-auto px-4 sm:px-8 text-base flex items-center justify-center gap-x-2 py-2">
        <div>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.48" height="14.039" viewBox="0 0 6.48 14.039">
              <path id="Path_728" data-name="Path 728"
                d="M1787.308,15.809V17.7h-1.47v2.4h1.47v7.05h2.827V20.069h1.973l.21-2.371h-2.183V16.349c0-.559.112-.78.653-.78h1.53v-2.46h-1.958C1788.257,13.109,1787.308,14.035,1787.308,15.809Z"
                transform="translate(-1785.838 -13.109)" fill="#fff" />
            </svg>
          </a>
        </div>
        <div class="separator text-white">|</div>
        <div>
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="15.996" height="16" viewBox="0 0 15.996 16">
              <g id="Group_199" data-name="Group 199" transform="translate(-1816.318 -12.128)">
                <path id="Path_729" data-name="Path 729"
                  d="M1824.461,12.128a7.829,7.829,0,0,0-7.845,7.453c0,.114-.008.228-.008.342a7.733,7.733,0,0,0,1.125,4.025l-1.415,4.18,4.349-1.382a7.862,7.862,0,0,0,11.647-6.823c0-.067,0-.133,0-.2A7.823,7.823,0,0,0,1824.461,12.128Zm0,14.346a6.571,6.571,0,0,1-3.632-1.085l-2.537.809.824-2.434a6.482,6.482,0,0,1-1.258-3.841,6.093,6.093,0,0,1,.033-.636,6.606,6.606,0,0,1,13.151.124c.015.17.022.339.022.512A6.585,6.585,0,0,1,1824.461,26.474Z"
                  fill="#fff" />
                <path id="Path_730" data-name="Path 730"
                  d="M1828.061,21.5c-.2-.1-1.14-.559-1.317-.621s-.305-.1-.434.095-.5.622-.61.747-.224.143-.419.047a5.2,5.2,0,0,1-1.548-.948,5.765,5.765,0,0,1-1.07-1.32c-.11-.191-.011-.294.085-.39s.191-.224.29-.334c.026-.033.048-.063.07-.092a2.336,2.336,0,0,0,.122-.228.346.346,0,0,0-.015-.335c-.048-.1-.434-1.036-.6-1.419s-.319-.316-.434-.316-.239-.018-.367-.018a.709.709,0,0,0-.515.239,2.139,2.139,0,0,0-.673,1.595,2.417,2.417,0,0,0,.1.651,4.336,4.336,0,0,0,.687,1.324,7.905,7.905,0,0,0,3.287,2.885c1.959.762,1.959.508,2.312.475a1.924,1.924,0,0,0,1.3-.908,1.578,1.578,0,0,0,.114-.908C1828.38,21.639,1828.251,21.592,1828.061,21.5Z"
                  fill="#fff" />
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
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
            <div class="font-bold flex items-center gap-x-2">
              <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 67.662 101.309">
                  <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                    transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
                </svg>
              </div>
              <a href="{{ url('about-us') }}">About Us</a>
            </div>
            <div class="font-light"><a href="{{ url('our-services') }}">Services</a></div>
            <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
            <div class="font-light"><a href="{{ url('contact-us') }}">Contact Us</a></div>
          </nav>
        </div>
        <div onclick="expandMenu()" class="block md:hidden">
          <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="#007AB7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>
            </div>
            <a href="{{ url('about-us') }}">About Us</a>
          </div>
          <div class="font-light"><a href="{{ url('our-services') }}">Services</a></div>
          <div class="font-light"><a href="{{ url('our-plans') }}">Our Plans</a></div>
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
        <p>About Us</p>
      </div>
    </div>
  </section>
  <section class="about-us-section">
    <div class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base gap-x-2 py-4">
      <div class="fade-in-element down about-us-header pt-8 flex justify-center flex-col text-center">
        <div class="text-black-title about-us-header font-bold uppercase text-3xl md:text-5xl pb-2">
          <h1>About Us</h1>
        </div>
        <div class="about-us-sub-header text-blue-primary text-lg">
          <h2>Rent Cool, With Peace Of Mind!</h2>
        </div>
      </div>
      <div class="divider h-0.5 bg-medium-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto my-12"></div>
      <div class="fade-in-element right about-us-content flex flex-col md:flex-row items-center gap-x-8">
        <div class="left-container md:w-auto pb-4 md:pb-0">
          @if($page->image->isNotEmpty())
          <img class="w-[300px]" src="{{ $page->image->first()->url }}">
          @else
          <img src="{{ url('theme/assets/photos/about-us.jpg') }}">
          @endif
        </div>
        <div class="fade-in-element right right-container md:w-3/5">
          <div class="text-black-title about-us-mission font-bold text-xl md:text-2xl">
            <h2>Your trusted partner for <span class="about-us-focus text-blue-primary">air conditioner rentals.</span></h2>
          </div>
          <div class="divider h-0.5 bg-blue-primary w-20 my-4 mx-auto sm:mx-0"></div>
          <div class="about-us-description">
            <h3>
              <div class="reset">
                {!! $page->content !!}
              </div>

              <div class="flex gap-x-4 md:gap-x-8">
                <ul class="brand-points w-1/2">
                  @foreach($page->green_list as $item)
                  <li class="point-items flex gap-x-2 md:gap-x-4 items-start">
                    <div class="pt-1">
                      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="#007AB7" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </div>
                    <div class="w-11/12">
                      <p>{{ $item['value'] }}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <ul class="brand-points w-1/2">
                  @foreach($page->red_list as $item)
                  <li class="point-items flex gap-x-2 md:gap-x-4 items-start">
                    <div class="pt-1">
                      <svg class="h-full w-full" width="20" height="20" stroke-width="2.5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 13.86 13.86"><defs><clipPath id="clip-path"><rect x="-991" y="-389" width="1144" height="315" fill="none"/></clipPath></defs><title>CentriAir2_text</title><path d="M0,12.9A1.18,1.18,0,0,1,.42,12L5.24,7.2c.21-.21.25-.31,0-.54C3.62,5.05,2,3.42.38,1.8A1,1,0,0,1,.07.64,1,1,0,0,1,1.76.34c1,.94,1.91,1.9,2.87,2.86.69.69,1.4,1.38,2.08,2.09.19.2.28.16.45,0Q9.6,2.82,12.07.37a1,1,0,0,1,1.71.26,1,1,0,0,1-.29,1.16L9.38,5.91c-.27.26-.52.54-.8.79s-.17.29,0,.46l4.89,4.89a1,1,0,0,1,.31,1.16,1,1,0,0,1-1.69.31L9.23,10.65C8.55,10,7.86,9.3,7.19,8.6c-.19-.2-.3-.22-.51,0-1.61,1.64-3.24,3.25-4.86,4.87a1,1,0,0,1-1.28.28A1,1,0,0,1,0,12.9Z" fill="#f01849"/></svg>
                    </div>
                    <div class="w-11/12">
                      <p>{{ $item['value'] }}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </h3>
          </div>
          <div class="reset">
            {!! $page->content_after !!}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-points relative">
    <div
      class="fade-in-element up about-us-points-container w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col items-center justify-between gap-x-2 relative z-50 py-8 md:py-16">
      <div class="about-us-card w-full grid grid-cols-1 sm:grid-cols-3  before:content-[''] before:absolute before:bg-medium-grey before:h-28 before:w-screen before:z-[-1] before:top-32 before:left-1/2 before:translate-x-[-50%]">
        @foreach($page->selling_points as $point)
        <div onclick="changeCard({{ $loop->index }})"
          class="cursor-pointer about-us-card-grid-item h-full active bg-white-grey text-blue-primary p-4 md:p-8 font-black  text-2xl uppercase text-center flex flex-col items-center justify-center">
          <h2>
            {{ $point->title }}
          </h2>
          <div class="about-us-card-divider h-0.5 bg-blue-primary w-20 mx-auto sm:mx-0 mt-2"></div>
        </div>
        @endforeach
      </div>
      @foreach($page->selling_points as $point)
      <div class="about-us-current-item-content bg-white-grey flex flex-col sm:flex-row p-8 gap-x-8">
        <div class="current-item-icon sm:w-1/6 pb-4 sm:pb-0 flex justify-center">
          @if($point->icon->isNotEmpty())
          <div class="icon-container w-32">
            <img src="{{ $point->icon->first()->url }}" />
          </div>
          @endif
        </div>
        <div class="current-item-description-container sm:w-5/6">
          <div class="current-item-title text-blue-primary font-bold text-2xl pb-4">
            <h2>
              {{ $point->title }}
            </h2>
          </div>
          <div class="current-item-description">
            <h3>
              {!! $point->content !!}
            </h3>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="hidden lg:block absolute -bottom-16 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  
  @include('partials.steps')

  <section class="quality-services-section bg-quality-services-bg bg-cover bg-right relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg bg-white-grey/50 sm:bg-transparent mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-16 relative z-50">
      <div class="quality-services-container text-center">
        <div class="fade-in-element down text-blue-primary font-bold text-3xl md:text-4xl py-1">
          <h2>We Provide Quality Services</h2>
        </div>
        <div class="fade-in-element down h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
        <div class="fade-in-element down quality-services-tag-line text-md md:text-lg font-light pb-4">
          <p>Any question? Just WhatsApp us!</p>
        </div>
        <div class="fade-in-element down quality-services-button-container flex justify-center">
          <a href="#"
            class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
            <p>Ask the Expert</p>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] left-0">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="298" height="199.028"
        viewBox="0 0 298 199.028">
        <defs>
          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
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
      class="footer-container sm:flex pb-2 sm:pb-0 text-center sm:text-left justify-between font-light text-light-grey">
      <div class="copyright">@2023, Copyright CentriAir Solutions. All rights reserved</div>
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

  changeCard = (cardName) => {
    const cardArray = [0, 1, 2]

    const itemArray = document.getElementsByClassName('about-us-current-item-content')
    const buttonArray = document.getElementsByClassName('about-us-card-grid-item')
    const dividerArray = document.getElementsByClassName('about-us-card-divider')

    cardArray.forEach(card => {
      if (card != cardName) {
        itemArray[card].classList.add('hidden')
        dividerArray[card].classList.add('bg-transparent')
        dividerArray[card].classList.remove('bg-blue-primary')
        buttonArray[card].classList.add('bg-gradient-to-b', 'sm:bg-gradient-to-r', 'from-light-blue-primary', 'to-blue-primary', 'text-white')
        buttonArray[card].classList.remove('bg-white-grey', 'text-blue-primary')
      } else {
        itemArray[card].classList.remove('hidden')
        dividerArray[card].classList.add('bg-blue-primary')
        dividerArray[card].classList.remove('bg-transparent')
        buttonArray[card].classList.add('bg-white-grey', 'text-blue-primary')
        buttonArray[card].classList.remove('bg-gradient-to-b', 'sm:bg-gradient-to-r', 'from-light-blue-primary', 'to-blue-primary', 'text-white')
      }
    })
  }
  changeCard(0)

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
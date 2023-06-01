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
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
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
        <div class="font-bold flex items-center gap-x-2">
          <div class="triangle w-3">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
              <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
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
  <section class="landing-section bg-landing-bg bg-cover">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex-col-reverse flex flex-col md:flex-row items-center justify-center py-8 md:py-0">
      <div class="left-container fade-in-element right pt-8 md:w-2/5 flex justify-center md:justify-normal">
        <div>
          <div class="header pb-4">
            <div class="relative pb-4 lg:pb-6">
              <h1>
                <span class="text-3xl lg:text-[43px] font-bold text-blue-primary uppercase">
                  RENT COOL, 
                </span><br/>
                <span class="text-5xl lg:text-[45px] font-light absolute left-[30px] md:left-[55px] top-[20px] lg:top-[30px] font-[mathilde]">
                  with peace of mind!
                </span>
              </h1>
            </div>
          </div>
          <div class="header-list">
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h3>Hassle-free air conditioner rental service</h3>
              </div>
            </div>
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h2>Wide selection of preferred brands</h2>
              </div>
            </div>
            <div class="header-list-item flex gap-x-2 items-start">
              <div class="header-list-check w-6 pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.729" height="22.729" viewBox="0 0 22.729 22.729">
                  <g id="Group_296" data-name="Group 296" transform="translate(-1368.5 -306.195)">
                    <path id="Path_822" data-name="Path 822"
                      d="M1374.511,317.558a.894.894,0,0,1,.667.311c.705.708,1.426,1.4,2.112,2.126.248.263.375.218.6-.014q3.287-3.312,6.593-6.606a.9.9,0,0,1,.825-.363.722.722,0,0,1,.592.523.745.745,0,0,1-.218.794q-1.152,1.155-2.306,2.308-2.548,2.549-5.1,5.1c-.514.513-.879.516-1.386.009q-1.423-1.421-2.843-2.844a.75.75,0,0,1-.194-.9A.719.719,0,0,1,1374.511,317.558Z"
                      fill="#007ab7" />
                    <circle id="Ellipse_43" data-name="Ellipse 43" cx="10.365" cy="10.365" r="10.365"
                      transform="translate(1369.5 307.195)" fill="none" stroke="#007ab7" stroke-miterlimit="10"
                      stroke-width="2" />
                  </g>
                </svg>
              </div>
              <div class="text-black-title header-list-name font-bold text-xl">
                <h2>Comprehensive 5-year warranty that covers everything</h2>
              </div>
            </div>
          </div>
          <div class="h-0.5 bg-blue-primary w-1/3 md:w-20 my-4"></div>
          <div class="header-tag-line text-[14px] leading-[170%] font-light pb-4">
            <h3>Experience the ultimate comfort and convenience with CentriAir. Rent cool today and stay worry-free!</h3>
          </div>
          <div class="header-button-container flex gap-x-2 md:gap-x-6">
            <a href="{{ url('our-plans') }}"
              class="button-primary bg-blue-primary text-white px-4 sm:px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
              <p>Our Plans</p>
            </a>
            <a href="{{ url('our-services') }}"
              class="button-secondary bg-white text-blue-primary px-4 sm:px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
              <p>Our Services</p>
            </a>
          </div>
        </div>
      </div>
      <div class="right-container fade-in-element left flex-col md:w-3/5 px-6 md:px-0">
        <div class="flex justify-center border-b-2 md:border-b-0 border-divider-grey px-6 md:px-0">
          <img src="{{ url('theme/assets/photos/landing-man.png') }}">
        </div>
      </div>
    </div>
  </section>
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
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
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
          <div class="reset about-us-tag-line font-light pb-4 text-[14px] leading-[170%]">
            <p>Say goodbye to buying and maintaining air conditioners with short warranties.</p>
            <p>At CentriAir, you can now experience a worry-free rental option for a cool and
              comfortable environment, up to 5 years warranty.</p>
            <p>Stay cool without the commitment – RENT an air conditioner today!</p>
          </div>
          <div class="inline-flex">
            <a href="{{ url('about-us') }}"
              class=" bg-blue-primary h-full w-full text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
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
            <stop offset="0" stop-color="#00aeef" />
            <stop offset="1" stop-color="#007ab7" />
          </linearGradient>
        </defs>
        <path id="Path_723" data-name="Path 723" d="M2376.5,1144.514V945.486l-298,100.056Z"
          transform="translate(-2078.5 -945.486)" fill="url(#linear-gradient)" />
      </svg>

    </div>
  </section>
  <div class="divider h-0.5 bg-divider-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto"></div>
  
  @include('partials.steps')

  <section class="quality-services-section bg-quality-services-bg bg-cover bg-right relative">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg bg-white-grey/50 sm:bg-transparent mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-16 relative z-50">
      <div class="quality-services-container text-center">
        <div class="fade-in-element down text-blue-primary font-bold text-3xl md:text-4xl py-1">
          <h2>We Provide Quality Services</h2>
        </div>
        <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
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
  <section class="our-plans-section">
    <div
      class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col py-8 md:py-32 relative z-50">
      <div class="fade-in-element down our-plans-header flex justify-center w-full text-center pb-4 md:pb-8">
        <div class="text-black-title our-plans-header-container py-[40px]">
          <div class="our-plans-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3">
              <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
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
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
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
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
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
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
          <p>Read More</p>
        </a>
      </div>
    </div>
    <div class="hidden lg:block absolute -top-[99px] right-0">
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
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>

            </div>
            <h2>Get in touch</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="contact-us-tag-line text-md md:text-lg font-light pb-4">
            <p>Customer satisfaction is our top priority,</p>
            <p>Don’t hesitate to contact us</p>
          </div>
          <div class="contact-us-button-container flex justify-center gap-x-4">
            <a href="#" class="w-12 block">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                <title>CentriAir_MU</title>
                <circle cx="17" cy="17" r="17" fill="#007ab7" />
                <path
                  d="M14.73,11.81v2.43h-1.9v3.08h1.9v9.06h3.63v-9.1h2.53l.28-3H18.36V12.5c0-.72.14-1,.84-1h2V8.34H18.65C15.94,8.34,14.73,9.53,14.73,11.81Z"
                  fill="#fff" />
              </svg>

            </a>
            <a href="#" class="w-12 block">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                <title>CentriAir_MU</title>
                <circle cx="17" cy="17" r="17" fill="#007ab7" />
                <path
                  d="M18.16,8a8.8,8.8,0,0,0-8.82,8.38c0,.13,0,.26,0,.39a8.74,8.74,0,0,0,1.26,4.53L9,26l4.89-1.55a8.94,8.94,0,0,0,4.27,1.09A8.8,8.8,0,0,0,27,16.77v-.23A8.8,8.8,0,0,0,18.16,8Zm0,16.14a7.39,7.39,0,0,1-4.08-1.22l-2.86.91.93-2.74a7.31,7.31,0,0,1-1.42-4.32c0-.24,0-.48,0-.72a7.43,7.43,0,0,1,14.8.14,5.52,5.52,0,0,1,0,.58A7.41,7.41,0,0,1,18.16,24.14Z"
                  fill="#fff" />
                <path
                  d="M22.21,18.54c-.22-.11-1.28-.63-1.48-.7s-.34-.11-.49.11-.56.7-.68.84-.25.16-.47.05a5.83,5.83,0,0,1-1.75-1.07,6.27,6.27,0,0,1-1.2-1.48c-.12-.22,0-.33.1-.44l.32-.38.08-.1a2,2,0,0,0,.14-.26.4.4,0,0,0,0-.37l-.67-1.6c-.18-.43-.36-.36-.49-.36l-.41,0a.82.82,0,0,0-.58.27,2.42,2.42,0,0,0-.76,1.8,3,3,0,0,0,.11.73,4.92,4.92,0,0,0,.78,1.49,9,9,0,0,0,3.7,3.25c2.2.85,2.2.57,2.6.53a2.16,2.16,0,0,0,1.46-1,1.84,1.84,0,0,0,.13-1C22.57,18.7,22.43,18.65,22.21,18.54Z"
                  fill="#fff" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="conatct-us-divider h-0.5 bg-medium-grey w-3/4 my-4 mx-auto"></div>
      <div class="contact-us content md:flex gap-x-1 pt-8">
        <div class="fade-in-element down left-container md:w-1/2 pb-8 md:pb-0">
          <div class="company-branding pb-8 flex flex-col">
            <div class="logo-container w-40 sm:w-48 mb-[16px]">
              @include('partials.logo')
            </div>
            <div class="text-black-title  company-name font-bold text-2xl uppercase">
              <h2>CentriAir Solutions Sdn Bhd</h2>
            </div>
            <div class="company-title text-md p">
              <h3>(1509505-X)</h3>
            </div>
          </div>
          <div class="company-details-container flex flex-col gap-y-2">
            <div class="company-details-row flex items-center gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M20,26.16H13.18c-1.63,0-2.23-.6-2.23-2.21V16c0-1.48.62-2.12,2.09-2.12H27c1.47,0,2.08.64,2.09,2.13V24c0,1.48-.62,2.12-2.09,2.12C24.62,26.17,22.29,26.16,20,26.16ZM20,25h7c.82,0,1-.14,1-.93V15.9c0-.79-.14-.93-1-.93H13c-.83,0-1,.14-1,1V24c0,.88.12,1,1,1Z"
                    fill="#007ab7" fill-rule="evenodd" />
                  <path
                    d="M20,21.4l5.35-4.71.37-.33c.3-.26.68-.41.9,0a.85.85,0,0,1-.15.82c-2,1.79-4,3.54-6,5.3a.66.66,0,0,1-1,0c-2-1.76-4-3.5-6-5.29a.89.89,0,0,1-.16-.82c.26-.43.64-.23,1,0l5,4.43Z"
                    fill="#007ab7" fill-rule="evenodd" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
                <h3>{{ $settings->contact_email }}</h3>
              </div>
            </div>
            <div class="company-details-row flex items-center gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M23.79,27.79A7,7,0,0,1,20.54,27a15.38,15.38,0,0,1-8-8.66,5.37,5.37,0,0,1-.28-3.07,3.61,3.61,0,0,1,.9-1.69q.41-.44.84-.84a1.77,1.77,0,0,1,2.49,0q.87.84,1.71,1.71a1.76,1.76,0,0,1,0,2.51,8.22,8.22,0,0,1-.66.66c-.16.14-.19.25,0,.45A15.91,15.91,0,0,0,22,22.49c.17.12.29.16.45,0a9.51,9.51,0,0,1,.71-.71,1.76,1.76,0,0,1,2.43,0c.61.58,1.2,1.18,1.79,1.8a1.63,1.63,0,0,1,.23,2.05A4.83,4.83,0,0,1,25,27.66,4.27,4.27,0,0,1,23.79,27.79Zm.12-1.19.43-.05a3.5,3.5,0,0,0,2-1.34.59.59,0,0,0,0-.94l-1.55-1.55a.6.6,0,0,0-1,0c-.35.34-.69.69-1,1a.63.63,0,0,1-.95.11,16.54,16.54,0,0,1-5.7-5.7.63.63,0,0,1,.1-.93c.35-.35.71-.69,1.06-1a.6.6,0,0,0,0-.94c-.52-.54-1-1.07-1.58-1.59a.6.6,0,0,0-1,0l-.61.59a2.57,2.57,0,0,0-.78,2.06,5.33,5.33,0,0,0,.37,1.77,14.37,14.37,0,0,0,7.79,8A6.4,6.4,0,0,0,23.91,26.6Z"
                    fill="#007ab7" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
                <h3><a href="tel: {{ str_replace(' ', '', $settings->contact_number) }}">{{ $settings->contact_number }}</a></h3>
              </div>
            </div>
            <div class="company-details-row flex items-start gap-x-2 md:gap-x-8">
              <div class="company-details-icon w-8 md:w-12 flex-shrink-0">
                <svg class="h-full w-full" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40">
                  <title>CentriAir_MU</title>
                  <path
                    d="M28.59,16.13a13,13,0,0,1-1.46,5.7,47,47,0,0,1-4.21,6.75c-.74,1-1.48,2.09-2.21,3.14-.45.65-1,.65-1.41,0-1.68-2.45-3.39-4.87-5-7.36a19.47,19.47,0,0,1-2.56-5.62,8.6,8.6,0,1,1,16.73-3.93C28.54,15.32,28.56,15.85,28.59,16.13ZM20,30.23c.88-1.24,1.72-2.41,2.54-3.58a35.37,35.37,0,0,0,3.54-5.95,9.92,9.92,0,0,0,1-5.08A7.13,7.13,0,0,0,16.88,10a7,7,0,0,0-4,6.5,8.57,8.57,0,0,0,1,3.9,47.12,47.12,0,0,0,2.35,4.3C17.35,26.53,18.67,28.33,20,30.23Z"
                    fill="#007ab7" />
                  <path
                    d="M24.28,16.38A4.28,4.28,0,1,1,20,12.07,4.29,4.29,0,0,1,24.28,16.38Zm-7.13-.06a2.86,2.86,0,1,0,2.9-2.81A2.86,2.86,0,0,0,17.15,16.32Z"
                    fill="#007ab7" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#007ab7" stroke-miterlimit="10" stroke-width="2" />
                </svg>
              </div>
              <div class="company-details">
              @foreach($settings->office as $office)
                <a class="hover:text-blue-primary" target="_blank" href="{{ $office->google_map }}">
                  <div>{!! nl2br($office->address) !!}</div></a>

                @if(!$loop->last)
                <div class="divider h-0.5 bg-blue-primary w-20 my-2 mx-0"></div>
                @endif
              @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="fade-in-element down right-container md:w-1/2">
          <div class="contact-us-form">
            {{ render_form($formName ?? 'contact_us') }}
          </div>
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
@php
  $brands = App\Models\Brand::limit(6)->get();
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
            <div class="font-bold flex items-center gap-x-2">
              <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 67.662 101.309">
                  <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                    transform="translate(-1727.037 -2282.491)" fill="#315FAA" />
                </svg>
              </div>
              <a href="{{ url('our-plans') }}">Our Plans</a>
            </div>
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
          <div class="font-light"><a href="{{ url('/') }}">Home</a></div>
          <div class="font-light"><a href="{{ url('about-us') }}">About Us</a></div>
          <div class="font-bold flex items-center gap-x-2">
            <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#315FAA" />
              </svg>
            </div>
            <a href="{{ url('our-plans') }}">Our Plans</a>
          </div>
          <div class="font-light"><a href="{{ url('our-services') }}">Other Services</a></div>
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
        <p>Our Plans</p>
      </div>
    </div>
  </section>
  <section class="our-plans-section  mb-20 md:mb-40">
    <div class=" w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base gap-x-2 py-4">
      <div class="fade-in-element down our-plans-header pt-8 flex justify-center flex-col text-center">
        <div class="our-plans-header font-bold uppercase text-3xl md:text-5xl pb-2">
          <h1>Our plans</h1>
        </div>
        <div class="our-plans-sub-header text-blue-primary text-lg">
          <h2>Best Package</h2>
        </div>
      </div>
      <div class="divider h-0.5 bg-medium-grey w-2/3 max-w-screen-xs md:max-w-screen-md mx-auto my-12"></div>
      <div class="fade-in-element up flex flex-wrap pb-4 md:pb-8">
        @foreach($brands->chunk(3) as $brands)
          @if($brands[0])
            @include('partials.our-plan-brand', ['brand' => $brands[0], 'container' => 'md:pr-4 sm:pr-4'])
          @endif
          @if($brands[1])
            @include('partials.our-plan-brand', ['brand' => $brands[1], 'container' => 'md:px-4 sm:px-4'])
          @endif
          @if($brands[2])
            @include('partials.our-plan-brand', ['brand' => $brands[2], 'container' => 'md:pl-4 sm:pl-4'])
          @endif
        @endforeach
      </div>
    </div>
  </section>
  
  @include('partials.ask-the-expert')

  <section class="brochure-section">
    <div class="brochure-points relative">
      <div
        class="brochure-points-container w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col items-center justify-between gap-x-2 relative z-50 py-12 md:py-24">
        <div class="fade-in-element down brochure-header flex justify-center w-full text-center">
          <div class="brochure-header-container pb-8">
            <div class="brochure-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
              <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 67.662 101.309">
                  <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                    transform="translate(-1727.037 -2282.491)" fill="#315FAA" />
                </svg>
              </div>
              <h2>DOWNLOAD THE BROCHURES</h2>
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
            <div class="brochure-tag-line text-md md:text-lg font-light pb-4">
              <p>Explore the features of various air conditioner brands by downloading our brochures.
              </p>
            </div>
          </div>
        </div>
        <div class="fade-in-element up brochure-card w-full grid grid-cols-1 sm:grid-cols-3 before:content-[''] before:absolute before:bg-medium-grey before:h-28 before:w-screen before:z-[-1] before:top-12 before:left-1/2 before:translate-x-[-50%]">
          <div onclick="changeCard(0)"
            class="cursor-pointer brochure-card-grid-item h-full active bg-white-grey text-blue-primary p-4 md:p-8 font-black  text-2xl md:text-3xl uppercase text-center flex flex-col items-center justify-center">
            <h2>
              midea
            </h2>
            <div class="brochure-card-divider h-0.5 bg-blue-primary w-20 mx-auto sm:mx-0 mt-2"></div>
          </div>
          <div onclick="changeCard(1)"
            class="cursor-pointer brochure-card-grid-item h-full bg-gradient-to-b sm:bg-gradient-to-r from-light-blue-primary to-blue-primary text-white p-4 md:p-8 font-black text-2xl md:text-3xl uppercase text-center flex flex-col items-center justify-center">
            <h2>
              panasonic
            </h2>
            <div class="brochure-card-divider bg-transparent h-0.5 w-20 mx-auto sm:mx-0 mt-2"></div>
          </div>
          <div onclick="changeCard(2)"
            class="cursor-pointer brochure-card-grid-item h-full bg-gradient-to-b sm:bg-gradient-to-r from-light-blue-primary to-blue-primary text-white p-4 md:p-8 font-black text-2xl md:text-3xl uppercase text-center flex flex-col items-center justify-center">
            <h2>
              daikin
            </h2>
            <div class="brochure-card-divider bg-transparent h-0.5 w-20 mx-auto sm:mx-0 mt-2"></div>
          </div>
        </div>
        
        
        <!-- Midea -->
        <div class="fade-in-element up z-50 brochure-current-item-content w-full bg-white-grey flex flex-col p-8 gap-x-8">
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>Xtreme saver inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/midea/Midea MSXS Series R32 WallMount Inverter Xtreme SavE.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>All easy pro inverter </p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/midea/Midea MSEP & MSAPB Series  R32 WallMount Inverter & Non-Inverter All Easy Pro.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>Airstill inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/midea/Midea MSFAAU Series R32 WallMount Inverter AirStill.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
        </div>
        <!-- Panasonic -->
        <div class="z-50 brochure-current-item-content hidden w-full bg-white-grey flex flex-col p-8 gap-x-8">
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>Standard inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/panasonic/Panasonic PU Series R32 WallMount Standard Inverter.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>X-Deluxe inverter </p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/panasonic/Panasonic XPU Series R32 WallMount X-Deluxe Inverter.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>X-premium inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/panasonic/Panasonic XU Series R32 X-Premium Inverter.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
        </div>
        <!-- Daikin -->
        <div class="z-50 brochure-current-item-content hidden w-full bg-white-grey flex flex-col p-8 gap-x-8">
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>Standard inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/daikin/Daikin FTKF Series R32 WallMount Standard-Inverter Built-in-Wifi.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
          <div class="brochure-item-row w-full group">
            <div class="brochure-item-content flex w-full">
              <div class="brochure-item-type w-11/12 text-light-grey group-hover:text-blue-primary">
                <p>Smarto inverter</p>
              </div>
              <div class="brochure-item-download-link w-6">
                <a target="_blank"  href="{{ url('theme/assets/pdf/daikin/Daikin FTKH Series R32 WallMount Premium-Inverter Built-in-Wifi.pdf') }}">
                  <svg class="fill-light-grey group-hover:fill-blue-primary" xmlns="http://www.w3.org/2000/svg"
                    width="100%" height="100%" viewBox="0 0 250.185 237.698">
                    <g id="Group_123" data-name="Group 123" transform="translate(-5770.66 -2086)">
                      <path id="Path_263" data-name="Path 263"
                        d="M5836.75,2229.99v-36.547q0-46.685.016-93.357c0-8.945,4.828-14.219,12.641-14.084a11.951,11.951,0,0,1,12.055,11.32c.125,1.709.1,3.432.1,5.154v127.441c2.125-.447,3.031-1.963,4.133-3.062,12.391-12.361,24.688-24.809,37.141-37.111,4.75-4.709,11.125-5.111,16.2-1.439a12.521,12.521,0,0,1,4.3,15.02,15.2,15.2,0,0,1-3.508,4.918q-30.5,30.483-61.016,60.971c-6.2,6.166-13.148,6.152-19.344-.029q-30.551-30.439-61-60.971c-3.836-3.834-5.508-8.23-3.742-13.609,1.617-4.977,5.18-7.711,10.172-8.512,4.719-.773,8.43,1.3,11.68,4.588q17.988,18.144,36.078,36.191C5833.7,2227.926,5834.523,2229.338,5836.75,2229.99Z"
                        transform="translate(46.669 0)" />
                      <path id="Path_264" data-name="Path 264"
                        d="M5895.492,2125.465q-55.605,0-111.2.014c-5.68.016-10.164-2.109-12.453-7.4a12.082,12.082,0,0,1,2.094-13.547c2.914-3.316,6.8-4.207,10.992-4.223q13.148-.021,26.281,0h193.313a26.958,26.958,0,0,1,6.523.49c6.461,1.621,10.1,6.328,9.773,12.926a12.187,12.187,0,0,1-11.3,11.676c-1.391.135-2.812.063-4.219.063Z"
                        transform="translate(0.004 198.214)" />
                    </g>
                  </svg>
                </a>
              </div>
            </div>
            <div class="divider h-0.5 bg-medium-grey w-full mx-auto my-4"></div>
          </div>
        </div>
        <!-- End Download -->

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

  changeCard = (cardName) => {
    const cardArray = [0, 1, 2]

    const itemArray = document.getElementsByClassName('z-50 brochure-current-item-content')
    const buttonArray = document.getElementsByClassName('brochure-card-grid-item')
    const dividerArray = document.getElementsByClassName('brochure-card-divider')

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
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

          <div class="our-services-content-paragraph-container hidden">
            <div class="our-services-content-title-container flex items-center gap-x-8 pb-8">
              <div class="our-services-content-title-icon w-20">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><title>CentriAir2_text</title><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#315FAA"/><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#315FAA"/><path d="M63.27,30.56A6.24,6.24,0,0,0,63,28.67,5.21,5.21,0,0,0,57.68,25H14a5.14,5.14,0,0,0-5.45,5.51V43.3a5.31,5.31,0,0,0,.25,1.88,5.12,5.12,0,0,0,5.28,3.63H48.64c3,0,6,0,9,.05a5.62,5.62,0,0,0,4.13-1.6,5.49,5.49,0,0,0,1.55-4.05c-.06-3-.05-6.14,0-9.13C63.26,32.89,63.26,31.73,63.27,30.56ZM61.5,43.23a3.47,3.47,0,0,1-3.79,3.82H14.41c-2.77,0-4.06-1.29-4.06-4.08V30.63c0-2.49,1.36-3.86,3.84-3.86H57.66c2.47,0,3.84,1.37,3.84,3.85Z" fill="#315FAA" stroke="#315FAA" stroke-miterlimit="10"/><path d="M52.59,40.88H19.29a5.16,5.16,0,0,0-.7,0,.82.82,0,0,0-.73.82.85.85,0,0,0,.74.88,4.16,4.16,0,0,0,.63,0H52.58a4.17,4.17,0,0,0,.73,0,.86.86,0,0,0,0-1.68A4.06,4.06,0,0,0,52.59,40.88Z" fill="#315FAA" stroke="#315FAA" stroke-miterlimit="10"/><path d="M55.29,30.31a.86.86,0,0,0-.84.88.84.84,0,0,0,.27.61.87.87,0,0,0,1.48-.64.84.84,0,0,0-.27-.61.87.87,0,0,0-.61-.24Z" fill="#315FAA" stroke="#315FAA" stroke-miterlimit="10"/></svg>
              </div>
              <div class="text-black-title our-services-content-title font-bold text-xl md:text-2xl">
                <h2>Air conditioner dismantling and Installation</h2>
              </div>
            </div>
            <div class="our-services-content-description">
              <p>
                The entire process will be handle with precision and efficiency. Our technicians will assess your space, taking into consideration factors such as airflow, size requirements, and energy efficiency, to determine the ideal placement for your new air conditioner. 
              </p>
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
            <div class="our-services-content-points">
              <ul class="brand-points">
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Meticulous dismantling with minimum disruption</p>
                  </div>
                </li>
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Space assessment conducted prior to installation</p>
                  </div>
                </li>
              </ul>
            </div><div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
            <div class=" our-services-additional-content">
              <div class="our-services-content-table-header font-bold text:xl md:text-2xl mb-6 uppercase">
                <h2>Installation Guideline</h2>
              </div>
              <div class="our-services-content-table mb-8">
                <div class="our-services-content-table-subheader font-bold text:xl md:text-2x mb-4">
                  <h3>What is included during installation (Free)?</h3>
                </div>
                <table class="border-2 border-table-odd w-full md:w-4/5">
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Copper pipe with Insulation</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd table-odd w-28">10 feets</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Cabling (indoor unit to outdoor
                      unit) 4 core cablen</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd table-odd w-28">10 feets</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Compressor bracket</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd table-odd w-28">01 set</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Wall drilling or coring and hole
                      cement</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd table-odd w-28">01 hole</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">PVC Drain pipe (surface only)</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd table-odd w-28">15 feets</td>
                  </tr>
                </table>
              </div>
              <div class="our-services-content-table pb-4">
                <div class="our-services-content-table-subheader font-bold text:xl md:text-2x mb-4">
                  <h3>What is NOT included? (Additional cost borne by customer)</h3>
                </div>
                <table class="border-2 border-table-odd w-full">
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Copper pipe with Insulation and
                      cabling 4 core
                      cable for 1.0hp/1.5hp</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM25.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Copper pipe with Insulation and
                      cabling 4 core
                      cable for 2.0hp</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM35.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Hacking and conceal for copper
                      pipe</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM15.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">PVC drain pipe</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per 10 feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM15.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Hacking and conceal for PVC drain
                      pipe</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM10.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">PVC trunkin (2" x 3") (white)</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM50.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">Cabling for incoming electrical 3
                      core 2.5mm</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM8.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">13amp plug top with safety fuse
                    </td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM5.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">13amp switch socket outlet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM10.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">15amp plug top</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM8.00</td>
                  </tr>
                  <tr class="odd:bg-table-odd even:bg-white">
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd font-bold">15amp switch socket outlet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">per feet</td>
                    <td class="py-1 px-2 md:px-4 border-2 border-table-odd w-28">RM15.00</td>
                  </tr>
                </table>
              </div>
              <div class="our-services-note">
                <p>Note: The above price are subject to change without prior notice.</p>
              </div>
              <div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
            </div>
          </div>
          <div class="our-services-content-paragraph-container hidden">
            <div class="our-services-content-title-container flex items-center gap-x-8 pb-8">
              <div class="our-services-content-title-icon w-20">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><title>CentriAir2_text</title><circle cx="35.77" cy="36" r="33.66" fill="#fff"/><path d="M36.08,0H36a36,36,0,0,0-.1,72H36a36,36,0,0,0,.1-72ZM59.36,59.51A32.89,32.89,0,0,1,36,69.17h-.12A33.14,33.14,0,0,1,12.64,12.49,32.89,32.89,0,0,1,36,2.83h.11A33.14,33.14,0,0,1,59.36,59.51Z" fill="#315FAA"/><path d="M54.34,38.29c-.14-.08-.15-.1-.15-.31V29.61A9.78,9.78,0,0,0,54,27.45,10.26,10.26,0,0,0,43.56,19H35.25c-.22,0-.25,0-.35-.19a2.71,2.71,0,0,0-2.32-1.33h0a2.68,2.68,0,0,0-2.3,1.31c-.11.19-.16.21-.39.21h0c-4.68,0-9.37,0-14,0a1,1,0,0,0-1.11,1.12c0,4.4,0,8.44,0,12.36a1.19,1.19,0,0,0,.27.87,1.15,1.15,0,0,0,.88.27c3.16,0,6.31,0,9.47,0h4.58c.23,0,.23,0,.31.14a2.7,2.7,0,0,0,2.32,1.36h0a2.79,2.79,0,0,0,2.37-1.36c.08-.14.1-.14.19-.14h4.07c.38,0,.41,0,.41.4v1.82c0,.75,0,1.49,0,2.24,0,.13,0,.13-.12.2a2.8,2.8,0,0,0-1.39,2.38A2.72,2.72,0,0,0,39.45,43c.15.09.16.1.16.31,0,1.79,0,3.58,0,5.38v3.53c0,1.75,0,3.51,0,5.26a1.06,1.06,0,0,0,.25.79,1,1,0,0,0,.81.26q6.24,0,12.48,0h0a1.05,1.05,0,0,0,.79-.26,1.08,1.08,0,0,0,.26-.83q0-4.38,0-8.74V43.29c0-.21,0-.22.14-.3a2.7,2.7,0,0,0,0-4.7Zm-7.44,2.6H41.16c-.36,0-.54-.09-.55-.25a.17.17,0,0,1,0-.12.76.76,0,0,1,.52-.14H52.64c.53,0,.54.17.54.25s0,.12,0,.13a.74.74,0,0,1-.51.13ZM35.34,26.3V25c0-1.16,0-2.31,0-3.47H39c1.69,0,3.37,0,5,0a7.82,7.82,0,0,1,7.68,7.66c0,1.64,0,3.28,0,4.93q0,1.88,0,3.75H42.09c0-1.3,0-2.6,0-3.89a2.67,2.67,0,0,0-2.86-2.87c-1.28,0-2.55,0-3.83,0h-.08v-.06c0-1.14,0-2.29,0-3.43ZM42.1,49.67V48c0-1.53,0-3.07,0-4.6v0h.06c3.16,0,6.33,0,9.49,0h.06v0q0,6.27,0,12.55h0c-3.19,0-6.38,0-9.56,0h0v-.07c0-1.53,0-3.05,0-4.58ZM32.83,32a1.51,1.51,0,0,1,0,.3c0,.3-.17.3-.25.29s-.24,0-.25-.29V20.44a.46.46,0,0,1,.14-.39.1.1,0,0,1,.08,0l.09,0c.1,0,.2.06.2.41V32ZM17.22,21.6v-.09H29.83v0c0,3.16,0,6.33,0,9.49v.07h-.1q-6.21,0-12.43,0h-.08V31C17.25,27.64,17.25,24.55,17.22,21.6Z" fill="#315FAA"/></svg>
              </div>
              <div class="text-black-title our-services-content-title font-bold text-xl md:text-2xl">
                <h2>Seamless concealment of air conditioner pipes</h2>
              </div>
            </div>
            <div class="our-services-content-description">
              <p>
                Air conditioner pipes can be a visual distraction, disrupting the overall aesthetic appeal of your interior. Our concealment service addresses this concern by strategically hiding the pipes, creating a more visually appealing environment while maintaining the functionality of your air conditioning system.</p>
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
            <ul class="our-services-content-points">
              <div class="brand-points">
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Seamless integration into your space is guaranteed</p>
                  </div>
                </li>
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Utilize high quality materials for the process</p>
                  </div>
                </li>
              </div>
            </ul>
            
            <div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
          </div>
          <div class="our-services-content-paragraph-container hidden">
            <div class="our-services-content-title-container flex items-center gap-x-8 pb-8">
              <div class="our-services-content-title-icon w-20">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.05 72">
                  <title>CentriAir_MU</title>
                  <path
                    d="M16.91,64.58c-.6,3-1.65,3.88-4.62,3.89-3.49,0-7,0-10.46,0-.65,0-1.29,0-1.67-.65s0-1.21.35-1.76c.82-1.38,1.62-2.78,2.49-4.13a1.11,1.11,0,0,0,0-1.4C2.09,59.14,1.27,57.72.43,56.3S0,54.05,1.65,54.06c.66,0,.83-.1.82-.84-.06-5.78,0-11.56,0-17.34A3.11,3.11,0,0,1,4,33.08a1.47,1.47,0,0,0,.75-1.54c0-5.85,0-11.71,0-17.56A3.74,3.74,0,0,1,8.61,9.93,44.06,44.06,0,0,0,32.93,1.41a6.89,6.89,0,0,1,2-1.24,3.76,3.76,0,0,1,3.57.76A44.18,44.18,0,0,0,56.41,9.07a38.39,38.39,0,0,0,6.68.85c2.8.08,4.2,1.5,4.21,4.28,0,5.81,0,11.63,0,17.45A1.4,1.4,0,0,0,68,33.07a3.32,3.32,0,0,1,1.6,3c0,5.78,0,11.56,0,17.34,0,.52.12.59.58.61,2,.1,2.36.75,1.29,2.54-.76,1.28-1.48,2.6-2.32,3.83a1.3,1.3,0,0,0,0,1.69c.86,1.36,1.67,2.75,2.49,4.14s.31,2.21-1.3,2.21H59.76c-3,0-4-.87-4.61-3.84-1.31.72-2.57,1.47-3.88,2.13a61.66,61.66,0,0,1-14.53,5.17,4.92,4.92,0,0,1-2.3-.21A58.71,58.71,0,0,1,16.91,64.58ZM36.14,34.84H6.75c-1.65,0-2,.33-2,1.94V52.09c0,1.63.33,1.95,2,1.95H65.29c1.69,0,2-.32,2-2.06V36.9c0-1.77-.3-2.06-2.1-2.06ZM36,32.43c7.68,0,15.37,0,23.06,0,.83,0,1.07-.18,1.06-1,0-4.5-.05-9,0-13.5,0-.86-.28-1.08-1.05-1.15a42.07,42.07,0,0,1-7-1.35A52.11,52.11,0,0,1,36.65,8.5c-.39-.26-.67-.41-1.16-.08A51.71,51.71,0,0,1,12.9,16.79c-.78.09-.94.37-.94,1.11,0,4.47,0,8.93,0,13.39,0,1,.24,1.17,1.17,1.16C20.74,32.41,28.35,32.43,36,32.43ZM7.21,22.68c0,2.89.06,5.78,0,8.67,0,1,.38,1.12,1.22,1.11s1.25-.06,1.24-1.11c-.06-5,0-10,0-15,0-1.38.21-1.64,1.58-1.78A50.24,50.24,0,0,0,33.55,6.83c2.92-1.87,2-1.93,4.92,0a49.85,49.85,0,0,0,22.24,7.76c1.6.17,1.73.37,1.73,2,0,5,0,10,0,15,0,.9.39,1,1.07.9.53-.09,1.38.46,1.37-.8,0-5.93,0-11.86,0-17.79a1.29,1.29,0,0,0-1.43-1.47c-1.12,0-2.25-.1-3.36-.24A47,47,0,0,1,37.29,3,1.78,1.78,0,0,0,34.8,3a46.75,46.75,0,0,1-26,9.37c-1.27.07-1.57.38-1.57,1.65Q7.21,18.35,7.21,22.68ZM18.56,56.49a17.66,17.66,0,0,0,4.06,3.11A52.94,52.94,0,0,0,33.38,64c1.32.38,2.57.86,4,.42,4.76-1.45,9.45-3.07,13.64-5.84a9.24,9.24,0,0,0,2.35-2.07Zm-1.68,1.86c-.07,3.74-.66,2.83,2.3,4.75a47.79,47.79,0,0,0,11.87,5.2c2.63.82,5.16,1.59,8,.64,5-1.66,10-3.35,14.44-6.26,1.88-1.22,2.11-2,1.52-4.31a22.41,22.41,0,0,1-4.88,3.57,54.89,54.89,0,0,1-10.46,4.25c-1.41.41-2.83,1.22-4.35.81C28.73,65.24,22.27,63.09,16.88,58.35ZM3.35,66h9.7a1.09,1.09,0,0,0,1.08-.47c.28-.53-.26-.72-.52-1-2.4-2.43-4.87-4.79-7.21-7.27-.89-.95-1.81-.89-3-.72.69,1.14,1.23,2.21,1.93,3.16a2.33,2.33,0,0,1,0,3.06C4.62,63.76,4.07,64.81,3.35,66Zm65.37-9.58c-1.09.16-2-.26-2.7.51-2.56,2.62-5.17,5.2-7.75,7.79-.2.2-.55.37-.4.73a.88.88,0,0,0,.8.52l.22,0h9.8c-.8-1.35-1.47-2.54-2.21-3.69a1.77,1.77,0,0,1,0-2.16C67.22,59,67.89,57.84,68.72,56.44ZM14.41,61.78V57.06c0-.33,0-.59-.45-.58-1.58,0-3.16,0-4.81,0Zm43.23-.44,5-4.86c-1.34,0-2.83,0-4.33,0-.45,0-.66.1-.65.61C57.66,58.61,57.64,60.13,57.64,61.34Z"
                    fill="#315FAA" /><text transform="translate(29.09 30.57)" font-size="24.19" fill="#315FAA"
                    font-family="Roboto-Bold, Roboto" font-weight="700">5</text><text transform="translate(9.07 50.9)"
                    font-size="17.35" fill="#315FAA" font-family="Roboto-Bold, Roboto" font-weight="700">YEARS</text>
                </svg>
              </div>
              <div class="text-black-title our-services-content-title font-bold text-xl md:text-2xl">
                <h2>General Parts & Compressors</h2>
              </div>
            </div>
            <div class="our-services-content-description">
              <p>
                CentriAir Solutions is your one-stop solution for all your air conditioning needs. Our 5-year warranty
                covers not only the inside and outside units but also the IC board, making it worth every penny. You
                don't need to look for other technicians for repairs; we've got you covered. Trust us for reliable and
                affordable air conditioning services.
              </p>
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4"></div>
            <div class="our-services-content-points">
              <ul class="brand-points">
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>5 years warranty</p>
                  </div>
                </li>
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Troubleshooting & Repair</p>
                  </div>
                </li>
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Include IC Board</p>
                  </div>
                </li>
                <li class="point-items flex gap-x-4 items-start">
                  <div class="w-1/12 sm:w-6">
                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="#315FAA" stroke-width="2.5" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                  </div>
                  <div class="w-11/12 sm:w-auto">
                    <p>Premium & Trusted Quality</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="divider h-0.5 bg-medium-grey max-w-screen-xs md:max-w-screen-md my-8"></div>
            <div class="our-services-note">
              <p>Click here to read the full <a href="#" class="text-blue-primary">warranty terms & conditions</a></p>
            </div>
            <div class="divider h-0.5 bg-transparent max-w-screen-xs md:max-w-screen-md my-8"></div>
          </div>
          <div class="our-services-content-paragraph-container hidden">
            <div class="our-services-content-title-container flex items-center gap-x-8 pb-8">
              <div class="our-services-content-title-icon w-20">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.05 72">
                  <title>CentriAir_MU</title>
                  <path
                    d="M16.91,64.58c-.6,3-1.65,3.88-4.62,3.89-3.49,0-7,0-10.46,0-.65,0-1.29,0-1.67-.65s0-1.21.35-1.76c.82-1.38,1.62-2.78,2.49-4.13a1.11,1.11,0,0,0,0-1.4C2.09,59.14,1.27,57.72.43,56.3S0,54.05,1.65,54.06c.66,0,.83-.1.82-.84-.06-5.78,0-11.56,0-17.34A3.11,3.11,0,0,1,4,33.08a1.47,1.47,0,0,0,.75-1.54c0-5.85,0-11.71,0-17.56A3.74,3.74,0,0,1,8.61,9.93,44.06,44.06,0,0,0,32.93,1.41a6.89,6.89,0,0,1,2-1.24,3.76,3.76,0,0,1,3.57.76A44.18,44.18,0,0,0,56.41,9.07a38.39,38.39,0,0,0,6.68.85c2.8.08,4.2,1.5,4.21,4.28,0,5.81,0,11.63,0,17.45A1.4,1.4,0,0,0,68,33.07a3.32,3.32,0,0,1,1.6,3c0,5.78,0,11.56,0,17.34,0,.52.12.59.58.61,2,.1,2.36.75,1.29,2.54-.76,1.28-1.48,2.6-2.32,3.83a1.3,1.3,0,0,0,0,1.69c.86,1.36,1.67,2.75,2.49,4.14s.31,2.21-1.3,2.21H59.76c-3,0-4-.87-4.61-3.84-1.31.72-2.57,1.47-3.88,2.13a61.66,61.66,0,0,1-14.53,5.17,4.92,4.92,0,0,1-2.3-.21A58.71,58.71,0,0,1,16.91,64.58ZM36.14,34.84H6.75c-1.65,0-2,.33-2,1.94V52.09c0,1.63.33,1.95,2,1.95H65.29c1.69,0,2-.32,2-2.06V36.9c0-1.77-.3-2.06-2.1-2.06ZM36,32.43c7.68,0,15.37,0,23.06,0,.83,0,1.07-.18,1.06-1,0-4.5-.05-9,0-13.5,0-.86-.28-1.08-1.05-1.15a42.07,42.07,0,0,1-7-1.35A52.11,52.11,0,0,1,36.65,8.5c-.39-.26-.67-.41-1.16-.08A51.71,51.71,0,0,1,12.9,16.79c-.78.09-.94.37-.94,1.11,0,4.47,0,8.93,0,13.39,0,1,.24,1.17,1.17,1.16C20.74,32.41,28.35,32.43,36,32.43ZM7.21,22.68c0,2.89.06,5.78,0,8.67,0,1,.38,1.12,1.22,1.11s1.25-.06,1.24-1.11c-.06-5,0-10,0-15,0-1.38.21-1.64,1.58-1.78A50.24,50.24,0,0,0,33.55,6.83c2.92-1.87,2-1.93,4.92,0a49.85,49.85,0,0,0,22.24,7.76c1.6.17,1.73.37,1.73,2,0,5,0,10,0,15,0,.9.39,1,1.07.9.53-.09,1.38.46,1.37-.8,0-5.93,0-11.86,0-17.79a1.29,1.29,0,0,0-1.43-1.47c-1.12,0-2.25-.1-3.36-.24A47,47,0,0,1,37.29,3,1.78,1.78,0,0,0,34.8,3a46.75,46.75,0,0,1-26,9.37c-1.27.07-1.57.38-1.57,1.65Q7.21,18.35,7.21,22.68ZM18.56,56.49a17.66,17.66,0,0,0,4.06,3.11A52.94,52.94,0,0,0,33.38,64c1.32.38,2.57.86,4,.42,4.76-1.45,9.45-3.07,13.64-5.84a9.24,9.24,0,0,0,2.35-2.07Zm-1.68,1.86c-.07,3.74-.66,2.83,2.3,4.75a47.79,47.79,0,0,0,11.87,5.2c2.63.82,5.16,1.59,8,.64,5-1.66,10-3.35,14.44-6.26,1.88-1.22,2.11-2,1.52-4.31a22.41,22.41,0,0,1-4.88,3.57,54.89,54.89,0,0,1-10.46,4.25c-1.41.41-2.83,1.22-4.35.81C28.73,65.24,22.27,63.09,16.88,58.35ZM3.35,66h9.7a1.09,1.09,0,0,0,1.08-.47c.28-.53-.26-.72-.52-1-2.4-2.43-4.87-4.79-7.21-7.27-.89-.95-1.81-.89-3-.72.69,1.14,1.23,2.21,1.93,3.16a2.33,2.33,0,0,1,0,3.06C4.62,63.76,4.07,64.81,3.35,66Zm65.37-9.58c-1.09.16-2-.26-2.7.51-2.56,2.62-5.17,5.2-7.75,7.79-.2.2-.55.37-.4.73a.88.88,0,0,0,.8.52l.22,0h9.8c-.8-1.35-1.47-2.54-2.21-3.69a1.77,1.77,0,0,1,0-2.16C67.22,59,67.89,57.84,68.72,56.44ZM14.41,61.78V57.06c0-.33,0-.59-.45-.58-1.58,0-3.16,0-4.81,0Zm43.23-.44,5-4.86c-1.34,0-2.83,0-4.33,0-.45,0-.66.1-.65.61C57.66,58.61,57.64,60.13,57.64,61.34Z"
                    fill="#315FAA" /><text transform="translate(29.09 30.57)" font-size="24.19" fill="#315FAA"
                    font-family="Roboto-Bold, Roboto" font-weight="700">5</text><text transform="translate(9.07 50.9)"
                    font-size="17.35" fill="#315FAA" font-family="Roboto-Bold, Roboto" font-weight="700">YEARS</text>
                </svg>
              </div>
              <div class="text-black-title our-services-content-title font-bold text-xl md:text-2xl">
                <h2>Frequently Asked Questions</h2>
              </div>
            </div>
            <div class="our-services-content-points">
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-rows first:border-t-2 border-b-2 border-medium-grey last:mb-8 py-4">
                <div class="accordion-question-container font-bold flex justify-between">
                  <h3>What are the payment options for my monthly rental?</h3>
                  <div class="plus-button w-4">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g data-name="add" id="add-2">
                          <g>
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="12" x2="12" y1="19" y2="5" />
                            <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="3" x1="5" x2="19" y1="12" y2="12" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="minus-button w-4 hidden">
                    <svg width="100%" height="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <title />
                      <g id="Complete">
                        <g id="minus">
                          <line fill="none" stroke="#315FAA" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" x1="4" x2="20" y1="12" y2="12" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="accordion-content overflow-hidden max-h-0">
                  <div class="pt-4">
                    <p>
                      1. Auto debit - Deduction via customer's debit/credit card<br />
                      2. Auto debit - Deduction via customer's debit/credit card<br />
                      3. Auto debit - Deduction via customer's debit/credit card<br />
                      4. Auto debit - Deduction via customer's debit/credit card<br />
                      5. Auto debit - Deduction via customer's debit/credit card<br />
                      6. Auto debit - Deduction via customer's debit/credit card<br />
                      <br />
                      A processing fee of RM 10 will be charged if you're not using auto debit (Depending on the order
                      number).
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
            class="btn-primary button-primary">
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
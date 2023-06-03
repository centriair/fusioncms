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
                    fill="#315FAA" fill-rule="evenodd" />
                  <path
                    d="M20,21.4l5.35-4.71.37-.33c.3-.26.68-.41.9,0a.85.85,0,0,1-.15.82c-2,1.79-4,3.54-6,5.3a.66.66,0,0,1-1,0c-2-1.76-4-3.5-6-5.29a.89.89,0,0,1-.16-.82c.26-.43.64-.23,1,0l5,4.43Z"
                    fill="#315FAA" fill-rule="evenodd" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#315FAA" stroke-miterlimit="10" stroke-width="2" />
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
                    fill="#315FAA" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#315FAA" stroke-miterlimit="10" stroke-width="2" />
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
                    fill="#315FAA" />
                  <path
                    d="M24.28,16.38A4.28,4.28,0,1,1,20,12.07,4.29,4.29,0,0,1,24.28,16.38Zm-7.13-.06a2.86,2.86,0,1,0,2.9-2.81A2.86,2.86,0,0,0,17.15,16.32Z"
                    fill="#315FAA" />
                  <circle cx="20" cy="20" r="19" fill="none" stroke="#315FAA" stroke-miterlimit="10" stroke-width="2" />
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
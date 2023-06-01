@php
    if (isset($page) && $page instanceof Fusion\Models\Singles\AboutUs) {

    } else if (isset($aboutUs)) {
        $page = $aboutUs;
    } else {
        $page = Fusion\Models\Singles\AboutUs::first();
    }
@endphp
  <section class="steps-section">
    <div
      class="w-full max-w-screen-sm md:max-w-screen-lg mx-auto px-8 text-base flex flex-col items-center justify-center py-8 md:py-24">
      <div class="fade-in-element down steps-header flex justify-center w-full text-center">
        <div class="text-black-title steps-header-container">
          <div class="steps-heading uppercase font-bold text-xl flex gap-x-2 justify-center">
            <div class="triangle w-3"><svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 67.662 101.309">
                <path id="Path_727" data-name="Path 727" d="M1727.037,2383.8H1794.7l-34.015-101.309Z"
                  transform="translate(-1727.037 -2282.491)" fill="#00aeef" />
              </svg>

            </div>
            <h2>How does it works?</h2>
          </div>
          <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
          <div class="steps-tag-line text-md md:text-lg font-light pb-4">
            <p>It is incredibly convenient to rent an air conditioner</p>
          </div>
        </div>
      </div>
      <div class="fade-in-element up steps-body grid grid-cols-2 md:grid-cols-3 gap-x-8 sm:gap-x-20 md:gap-x-48 gap-y-8 md:gap-y-16 py-4">
        @foreach($page->how_it_work as $step)
        <div class="grid-item text-center flex flex-col">
          @if($step->icon->isNotEmpty())
          <div class="grid-item-image w-28 mx-auto pb-2">
            <img src="{{ $step->icon->first()->url }}"/>
          </div>
          @endif
          <div class="grid-title">
            <h3>{{ $step->text }}</h3>
          </div>
        </div>
        @endforeach
      </div>
      <div class="steps-button-container flex justify-center">
        <a href="{{ url('our-plans') }}"
          class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
          <p>Our Plans</p>
        </a>
      </div>
    </div>
  </section>
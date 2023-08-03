@php
    if (isset($settings->banner) && $settings->banner->isNotEmpty()) {
        $banner = $settings->banner->first()->url;
        $bannerPosition = 'md:top-[69%] md:left-[18.5%]';
    }

    // Mobile version
    if (isset($settings->banner_mobile) && $settings->banner_mobile->isNotEmpty()) {
        $mobileBanner = $settings->banner_mobile->first()->url;
        $mobilePosition = 'top-[82%]';
    } else if (isset($settings->banner_tablet) && $settings->banner_tablet->isNotEmpty()) {
        $mobileBanner = $settings->banner_tablet->first()->url;
        $mobilePosition = 'top-[67%] left-[9%]';
    } else {
        $mobileBanner = $settings->banner->first()->url;
        $mobilePosition = 'top-[69%] left-[18.5%]';
    }
    
    // Tablet version
    if (isset($settings->banner_tablet) && $settings->banner_tablet->isNotEmpty()) {
        $tabletBanner = $settings->banner_tablet->first()->url;
        $tabletPosition = 'sm:top-[67%] sm:left-[9%]';
    } else if (isset($settings->banner_mobile) && $settings->banner_mobile->isNotEmpty()) {
        $tabletBanner = $settings->banner_mobile->first()->url;
        $tabletPosition = 'sm:top-[82%]';
    } else {
        $tabletBanner = $settings->banner->first()->url;
        $tabletPosition = 'top-[69%] left-[18.5%]';
    }
@endphp
@if(isset($banner))
  <section class="landing-section bg-landing-bg bg-cover">
    <div
      class="w-full relative mx-auto text-base flex-col-reverse flex flex-col md:flex-row items-center justify-center">
      <img class="hidden md:block" src="{{ $banner }}" />
      <img class="sm:hidden" src="{{ $mobileBanner }}" />
      <img class="hidden sm:block md:hidden" src="{{ $tabletBanner }}" />

      <div class="absolute flex {{ $bannerPosition.' '.$tabletPosition.' '.$mobilePosition }}">
        <a class="h-full w-full btn-primary button-primary" href="{{ url('our-plans') }}">Learn More</a>
      </div>
    </div>
  </section>
@endif
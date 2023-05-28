@php
    $showAsBrand = isset($productModel);
    $productModel = $productModel ?? $brand->getFirstProductModel();
    $sellingPoints = !$showAsBrand ? $brand->selling_points : $productModel->selling_points;
    $homepage = $homepage ?? false;
@endphp
@if($productModel)
<div class="flex flex-col sm:w-1/2 md:w-1/3 my-3 {{ $container }}">
    @if(!$showAsBrand)
        <div class="logo flex flex-wrap justify-center mb-8">
            @if(!$homepage)
                <img class="object-contain w-10/12 mb-5" src="{{ $brand->imageUrl }}">
            @endif
            <img class="h-10 object-contain" src="{{ $brand->logoUrl }}">
        </div>
    @endif
    <div class="grid-item h-full border-card-outline-grey border-2 rounded-xl">
    <div class="card flex flex-col">
        <div class="relative top-card rounded-t-xl bg-gradient-to-b from-medium-grey to-white-grey py-8">
        @if($showAsBrand && $productModel->energy_star)
            <div class="absolute top-1 right-1.5"><img class="w-12" src="{{ url('theme/assets/'.$productModel->energy_star.'-star.png') }}"/></div>
        @endif

        @foreach ($productModel->plans as $plan)
            <div class="top-card-item text-center">
                <div class="text-xl font-light">
                <p>{{ $plan->horse_power }}HP</p>
                </div>
                <div class="text-blue-primary font-bold flex justify-center items-baseline">
                <div class="text-3xl">
                    <p>RM{{ $plan->price_per_month }}/</p>
                </div>
                <div class="text-lg">
                    <p>mth</p>
                </div>
                </div>
            </div>

            @if(!$loop->last)
                <div class="h-0.5 bg-divider-grey w-20 my-4 md:my-8 mx-auto"></div>
            @endif
        @endforeach
        </div>

        <div class="bottom-card p-8">
        <div class="bottom-card-container">
            <div class="brand-name text-center font-bold">
            <p>{{ !$showAsBrand ? $brand->name.' Inverter' : $productModel->name }}</p>
            </div>
            <div class="h-0.5 bg-blue-primary w-20 my-4 mx-auto"></div>
            <ul class="brand-points">
                @if(isset($sellingPoints))
                    @foreach($sellingPoints as $point)
                        <li class="point-items flex gap-x-4 items-start">
                            <div class="w-1/12">
                            <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#007AB7" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            </div>
                            <div class="w-11/12">
                            <p>{{ $point['value'] }}</p>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        </div>
    </div>
    </div>
    
    @if(!$showAsBrand && !$homepage)
        <div class="steps-button-container flex justify-center pt-4 md:pt-8 mb-3">
        <a href="{{ $brand->url }}"
            class="button-primary bg-blue-primary text-white px-6 py-2 shadow-custom hover:bg-hover hover:text-blue-primary border-2 border-transparent hover:border-blue-primary">
            <p>Get Started</p>
        </a>
        </div>
    @else

    @endif
</div>
@endif
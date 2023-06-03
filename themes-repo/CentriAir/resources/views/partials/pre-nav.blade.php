<div class="pre-nav-bar bg-blue-primary">
    <div class="w-full md:max-w-screen-lg mx-auto px-4 sm:px-8 text-base flex items-center justify-center gap-x-2 py-2">
    @foreach($settings->social_media as $item)
        <div>
        <a href="{{ $item->link }}">
            @if($item->icon->isNotEmpty())
                <img src="{{ $item->icon->first()->url }}" />
            @endif
        </a>
        </div>
        @if(!$loop->last)
            <div class="separator text-white">|</div>
        @endif
    @endforeach
    </div>
</div>
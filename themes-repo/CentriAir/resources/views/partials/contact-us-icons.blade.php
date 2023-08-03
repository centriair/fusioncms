<div class="contact-us-tag-line text-md md:text-lg font-light pb-4">
    <p>Customer satisfaction is our top priority,</p>
    <p>Don't hesitate to contact us</p>
</div>
<div class="contact-us-button-container flex justify-center gap-x-4">
    @foreach($settings->social_media as $item)
        <a href="{{ $item->link }}" class="w-12 h-12 flex justify-center items-center hover:bg-light-blue-primary hover:bg-light-blue-primary-hover bg-blue-primary block rounded-full">
            @if($item->icon->isNotEmpty())
                <img class="h-6" src="{{ $item->icon->first()->url }}" />
            @endif
        </a>
    @endforeach
</div>
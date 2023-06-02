

<form method="post" action="{{ $form->path() }}" enctype="multipart/form-data" class="flex flex-col gap-y-8">
    @csrf
    
    @include('partials.alert', ['scrollIntoView' => true])

	@foreach($form->fields as $field)
        @php
            $rules = str_replace(' ', '', $field->validation['value']);
            $rules = is_array($rules) ? $rules : explode('|', $rules);
            $isRequired = in_array('required', $rules);
        @endphp
        
        @if ($field->type == 'input')
            <label @if($isRequired)class="required" @endif>
                <input type="text"
                name="{{ $field->handle }}"
                value="{{ old($field->handle) }}"
                @if($isRequired)required @endif
                class="pl-8 w-full shadow-custom p-4 placeholder:text-medium-grey placeholder:font-light placeholder:text-lg"
                placeholder="{{ $field->name }}">
            </label>
        @elseif($field->type == 'email')
            <label @if($isRequired)class="required" @endif>
                <input type="email"
                name="{{ $field->handle }}"
                value="{{ old($field->handle) }}"
                @if($isRequired)required @endif
                class="pl-8 w-full shadow-custom p-4 placeholder:text-medium-grey placeholder:font-light placeholder:text-lg"
                placeholder="{{ $field->name }}">
            </label>
        @else
            <label @if($isRequired)class="required" @endif>
                <textarea type="text" rows="5"
                name="{{ $field->handle }}"
                @if($isRequired)required @endif
                class="pl-8 w-full shadow-custom p-4 placeholder:text-medium-grey placeholder:font-light placeholder:text-lg"
                placeholder="{{ $field->name }}">{{ old($field->handle) }}</textarea>
            </label>
        @endif
        
    @endforeach
    
	{{ render_captcha($form) }}

    <div class="steps-button-container flex justify-end">
        <button
            class="btn-primary button-primary">
            <p>Send Message</p>
        </button>
    </div>
</form>
@php
    flash()->success('Inquiry has been received.');
    header('Location: '.url()->previous());
@endphp
OK
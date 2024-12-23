{{-- <x-error name="name"/> --}}
@props(['name', 'length'])
{{-- {{ __('Залишилось символів:') }} <span x-text="255 - $wire.name.length"></span> --}}
{{ __('Залишилось символів:') }} <span x-text="{{$length}} - $wire.{{$name}}.length"></span>
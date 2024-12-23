<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="{{$metaAutor}}">

        <title>{{ config('app.name') }} :: {{ $titlePage ?? 'Page Title app.blade' }}</title>
        
        <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon" />
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
      <div class="wrapper">

        {{-- <livewire:nav-bar lazy="true"/> --}}
        <livewire:nav-bar/>
        

        {{ $slot }}

        {{-- <x-includes.footer/> --}}

        <footer class="footer">footer</footer>
      </div>
    </body>
</html>

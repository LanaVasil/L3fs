<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta name="keywords" content="{{$metaKeys}}">
        <meta name="description" content="{{$metaDescription}}">
        <meta name="autor" content="{{$metaAutor}}"> --}}

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>{{ $title ?? 'Page'}}</title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
      <div class="container">
        <h1>jdksfljdskfjdslk</h1>
{{-- @if (Route::has('login'))
<livewire:welcome.navigation>
@endif --}}
        <i class="bi bi-bag-heart-fill"></i>
<i class="bi bi-app"></i>
<i class="bi bi-arrow-right-square-fill"></i>
<i class="bi bi-bag-check-fill"></i>
<i class="bi bi-calendar-plus-fill"></i>
<i class="bi bi-airplane"></i>
<i class="bi bi-bar-chart-fill"></i>
<i class="bi bi-bell-fill"></i>
        {{ $slot }}
      </div>
        
    </body>
</html>

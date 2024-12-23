{{-- <x-input name="name" label="Назва" type="text" wire:model="name"/> --}}

{{-- @props(['name', 'value','label','type']) --}}
@props(['name', 'label','type'])
{{-- <div class="mb-2"> --}}
  <label for="{{$name}}" class="form-label">{{$label}}</label>
  <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{$attributes}} required>
  {{-- <input type="{{$type}}" name="{{$name}}" value="{{$value}}" id="{{$name}}" class="form-control" {{$attributes}}> --}}
  {{-- @error("{{$name}}")<span class="text-danger">{{$message}}</span>@enderror --}}
{{-- </div> --}}
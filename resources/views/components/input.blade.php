{{-- <x-input name="note" label="Примітка" type="text" wire:model="note" value="" placeholder="У разі потреби додаткових характеристик"/> --}}

@props(['name', 'label', 'type', 'length'])
{{-- @if($asterisk) asterisk @endif --}}
<div class="mb-2">
  <label for="{{$name}}" class="form-label">{{$label}}</label>
  <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" {{$attributes}} >

  @error($name) <span class="text-danger">{{$message}}</span> @enderror
    
  {{-- Залишилось символів   --}}
  @if ($length*1>0) 
    <small><em>
      {{ __('Залишилось:') }} <span x-text="{{$length}} - $wire.{{$name}}.length"></span>
    </em></small>
  @endif

</div>

{{-- @$if($status)checked @endif --}}

{{-- якщо об'єднати add + edit порада як писати пропси
@props(['id' => null, 'name'])

<input {{ $attributes->class(['form-control'])->merge(['id' => $id ?? $name, 'name' => $name, 'type' => 'text']) }}> --}}
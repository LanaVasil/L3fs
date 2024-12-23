{{-- <x-button-sort title={{ $title }} name={{ $name }}/>  --}}
 {{-- не спрацює --}}
@props(['title', 'name', 'marker'='']) 


<th scope="col" wire:click="setSort('{{ $name }}')">
<button class="btn">{{ $title }} {{ $marker }}</i></button>
            
</th>  


{{-- не працює --}}

@if ($chkIdRows)
@php 
  echo '<pre>'; 
  print_r($chkIdRows); 
  echo '</pre>';    
@endphp
@endif
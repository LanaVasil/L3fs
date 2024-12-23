<div>

<div class="card offset-3 col-6">
  <div class="card-header">
    {{$tilte_page}}
  </div>

  <div class="card-body">
    @if(session('status'))
      <div class="alert alert-info">
        {{ session('status') }}
      </div>  
    @endif

    <h1 class="text-primary">Рахуємо: {{ $count }}</h1>
    <button wire:click="increment" class="btn btn-primary">+</button>
    <button wire:click="decrement" class="btn btn-secondary">-</button>
  </div>
</div>

<livewire:users.create-user/>

</div>

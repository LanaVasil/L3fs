<div class="card offset-3 col-6">
  <div class="card-body">

    <p>{{$name}}</p>
    <p>{{$email}}</p>
    <input type="text" wire:model.live="name">

    @foreach ($users as $item)
        <div wire:key="{{$item->id}}">
          <p>{{$item->name}}</p>
        </div>
    @endforeach

  </div>
</div> 
<div class="offset-3 col-6">
    <h1>Dynamic Dependent Dropdown</h1>
    <div class="mb-3">
      <select wire:model.live ="selectedunitype" class="form-select">
        <option value="">select unitype</option>
        @foreach ($unitypes as $unitype)
            <option value="{{$unitype->id}}">{{$unitype->name}}</option>
        @endforeach
      </select>
    </div>

    @if(!is_null($selectedunitype))
    <div class="mb-3">
      <select wire:model ="selectedunitype" class="form-select">
        <option value="">select unit</option>
            @foreach ($units as $unit)
              <option value="{{$unit->id}}">{{$unit->name}}</option>
            @endforeach

      </select>
    </div>
    @endif
</div>


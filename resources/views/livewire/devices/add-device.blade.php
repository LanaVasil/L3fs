<div class="container-fluid">
  <div class="card offset-3 col-6">

    <div class="card-header">
      <div class="row">
        <div class="col">
          <h2>{{$this->titlePage}}</h2>
        </div>
  
        <div class="col">
          <a href="/devices" wire:navigate class="btn btn-light rounded-pill float-end" >
            <i class="bi bi-arrow-90deg-left btn-outline-secondary"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="card-body">
      <form wire:submit="saveRow"> 

        <div class="mb-2">
          <x-select name="dev_type_id" label="Тип" :items=$devtypes wire:model="dev_type_id" value={{$dev_type_id}}/>          
          {{-- @error('dev_type_id') <span class="text-danger">{{$message}}</span>@enderror --}}
        </div>

        <div class="mb-2">
          <x-select name="brand_id" label="Бренд" :items=$brands wire:model="brand_id" value={{$brand_id}}/>

          {{-- <label for="brand_id" class="form-label">Бренд</label>
          <select name="brand_id" wire:model="brand_id" id="brand_id" class="form-select">
            <option value="">Оберіть з переліку</option>
            @foreach ( $brands  as  $item )
            <option value="{{ $item->id }}">{{ $item->name }}</option>   
            @endforeach
          </select> --}}
          {{-- @error('brand_id') <span class="text-danger">{{$message}}</span> --}}
          {{-- @enderror --}}
        </div>

          <x-input name="name" length="255" label="Назва" type="text" wire:model="name" value="" placeholder="від 3 до 255" />
          
          <x-input name="note" length="0" label="Примітка" type="text" wire:model="note" value="" placeholder="У разі потреби додаткових характеристик до 255 символів"/>
        
        <button type="submit" class="btn btn-outline-warning">Зберегти</button>
        <a href="/devices" class="btn btn-ligh float-end">Повернутись</a>

      </form>

    </div>    

  </div>
</div>

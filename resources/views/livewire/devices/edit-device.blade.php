<main class="main">


<div class="container-fluid">

  <x-breadcrums />  


  <div class="card offset-3 col-6">

    <div class="card-header">
      <div class="row">
        <div class="col-xl-1">
          <a href="/devices" wire:navigate class="btn btn-light rounded-pill" >
            <i class="bi bi-arrow-left btn-outline-secondary"></i>
          </a>
        </div>
        <div class="col-xl-11">
          <h1 class="h5">{{$this->titlePage}}</h1>
          
        </div>

      </div>
    </div>

    <div class="card-body">

      <div class="alert alert-warning" wire:dirty>
        Є незбережені зміни</і>  
      </div>

      <form wire:submit="updateRow"> 

        <x-select name="dev_type_id" label="Тип" :items=$devtypes wire:model="dev_type_id" value={{$dev_type_id}}/>         

        <x-select name="brand_id" label="Бренд" :items=$brands wire:model="brand_id" value={{$brand_id}}/>

        <x-input name="name" length="255" label="Назва" type="text" wire:model="name" value="{{$name}}"/>

        <x-input name="note" length="255" label="Примітка" type="text" wire:model="note" value="{{$note}}" placeholder="У разі потреби додаткових характеристик"/>

<div class="mb-2">
        <x-select-list name="status" label="Статус" :items=$statusList wire:model="status" value={{$status}}/>         
</div>
        {{-- <div class="form-check">
          <input class="form-check-input" type="checkbox" value="{{$status}}" id="status">
          <label class="form-check-label" for="status">
            Статус
          </label> --}}
        </div>

<div class="col">

        <button type="submit" class="btn btn-outline-warning">Зберегти</button>
     
        <a href="/devices" class="btn btn-ligh float-end">Повернутись</a>
</div>
      </form>

    </div>    

  </div>
</div>
</div>

</main>
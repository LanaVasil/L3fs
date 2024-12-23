<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$titleform}}</h1>
        <button wire:click="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div> 
        @endif
        
        <form>
          <div class="mb-3">
            <label for="InputName1" class="form-label">Назва</label>
            <input wire:model="name" id="InputName1" type="text" class="form-control @error('name') is-invalid @enderror" >
            {{-- <x-input-rest name="name" length="32"/> Залишилось символів --}}
            @error("name") <span class="text-danger">{{$message}}</span>@enderror
          </div>
          
          <div class="mb-3">
            <label for="InputStatus1" class="form-label">Статус</label>
            <input wire:model="status" id="InputStatus1" type="number" class="form-control @error('status') is-invalid @enderror" >
            @error('status')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="InputSort1" class="form-label">За порядком</label>
            <input wire:model="sort" id="InputSort1" type="number" class="form-control @error('sort') is-invalid @enderror" >
            @error('sort')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </form>


      </div>
      <div class="modal-footer">
          <button wire:click="close" type="button" class="btn btn-ligh" data-bs-dismiss="modal">Закрити</button>            
        @if ($editform)
          <button wire:click="update" type="button" class="btn btn-outline-warning">Зберегти зміни</button>
        @else
          <button wire:click="save" type="button" class="btn btn-outline-warning
        @endif        
      </div>
    </div>
  </div>
</div>
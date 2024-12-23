<main class="main">
<div>
    {{-- <h1>{{$this->title_page}}</h1> --}}

    <div class="offset-3 col-6">
      <form wire:submit="save">
        
        {{-- <x-input form="form.name" name="name" type="text" label="Name"/>
        <x-input form="form.email" name="email" type="email" label="Email"/>        
        <x-input form="form.password" name="password" type="password" label="Рassword"/> --}}


          <div class="mb-3">
              <label class="form-label">Name</label>
              <input wire:model="form.name" type="text" class="form-control">
              <div>
                @error('form.name')<span class="text-danger">{{$message}}</span>@enderror
              </div>
          </div>
          <div class="mb-3">
              <label class="form-label">Email</label>
              <input wire:model="form.email" type="email" class="form-control">
              <div>
                  @error('form.email')<span class="text-danger">{{$message}}</span>@enderror
              </div>
          </div>
          <div class="mb-3">
              <label class="form-label">password</label>
              <input wire:model.blur="form.password" type="password" class="form-control">
              <div>
                  @error("form.password")<span class="text-danger">{{$message}}</span>@enderror
              </div>
          </div> 

          <x-button class="btn btn-primary btn-sm">
            Submit
            <div wire:loading class="spinner-border spinner-border-sm"></div>
        </x-button>          
          {{-- <button  type="submit" class="btn btn-primary">
              Submit
              <div wire:loading class="spinner-border spinner-border-sm"></div>
          </button> --}}
      </form>
  </div>
</div>


</main>
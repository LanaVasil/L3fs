<div class="offset-3 col-6">
    <form wire:submit="save">
      <div class="mb-3">
        <label for="form-label">Name</label>
        <input wire:model="name" type="text" class="form-control">
        @error('name')<span class="text-danger">{{message}}</span>
      </div>

      <div class="mb-3">
        <label for="form-label">Email</label>
        <input wire:model="email" type="email" class="form-control">
      </div>

      <div class="mb-3">
        <label for="form-label">Password</label>
        <input wire:model="password" type="password" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary ">
        Submit
        <div wire:loading class="spinner-border spinner-border-sm">

        </div>
      </button>
    </form>
</div>

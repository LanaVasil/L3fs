<main class="main">
<div class="container-fluid">
    <div class="row">
        <div class="col">
          <h2>{{$this->titlePage}}</h2> 
        </div>
        <div class="col">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-light rounded-pill  float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus-lg"></i>
          </button>
        </div>
    </div>

      <table class="table">
        <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Назва</th>
          <th scope="col">Опис</th>
          <th scope="col">Вартість</th>
          <th scope="col">Дії</th>            
          </tr>
        </thead>
        <tbody>
          @foreach($brands as $item)
          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->sort}}</td>
            <td>
              <button @click="$dispatch('edit-mode',{id:{{$item->id}}})" type="button" class="btn btn-light rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-pencil"></i>  
              </button>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>    

  <livewire:brands.create-brand>

</div>
</main>

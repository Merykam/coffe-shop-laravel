@extends('layouts.app')

@section('sidebar')
<nav id="sidebarMenu" class="m-0 p-0 collapse collapse2 bg-dark d-lg-block sidebar collapse w-25 h-100 position-fixed">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-5 mt-5">
       
        <a href="#" class="fw-bold fs-5 text-decoration-none text-white py-2 ripple"
          ><i class="i1  ms-4 bi bi-speedometer"></i><span class="m-3">Home</span></a
        >
        <a href="#" class=" fw-bold fs-5 text-decoration-none text-white py-2 ripple"
          ><i class="i1 ms-4 bi bi-clipboard-data"></i><span class="m-3">Statistique</span></a
        >
        <a href="#data-table" class="fw-bold fs-5 text-decoration-none text-white py-2 ripple"
          ><i class="i1 ms-4 bi bi-menu-up"></i><span class="m-3">Menu</span></a
        >
       
      </div>
    </div>
  </nav>

@endsection

@section('content')
<div class="margin d-flex justify-content-around">

<div class="card card2 d-flex justify-content-center align-items-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-white fw-bold">Admins</h5>
    <h6 class="card-subtitle mb-2  text-white fw-bold">4</h6>
   
  </div>
</div>
<div class="card card2 d-flex justify-content-center align-items-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-white fw-bold">Drinks</h5>
    <h6 class="card-subtitle mb-2  text-white fw-bold">2</h6>
   
   
  </div>
</div>
<div class="card card2 d-flex justify-content-center align-items-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-white fw-bold">Commandes</h5>
    <h6 class="card-subtitle mb-2  text-white fw-bold">10</h6>
    
   
  </div>
</div>

</div>




 <!-- Modal -->
 <div class="btn3">
				<a href="{{ route('coffe.create') }}"  class="btn btn-dark"><i class="bi bi-plus"></i> Add new drink</a>
		</div>
  


  <main class="mainn">
             
          

<table class="table">
  <thead>
    <tr>
      <th scope="col">Drink</th>
      <th scope="col">Name</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($coffes as $coffe)
    <tr>
      <th scope="row">1</th>
      <td>{{$coffe['name']}}</td>
      <td>{{$coffe['price']}}</td>
      <td>{{$coffe['description']}}</td>
      <td>

      <div class="d-flex">

    
      <a href="{{route('coffe.edit',$coffe->id)}}" class="update">Update</a>

      <form method="post" action="{{route('coffe.destroy',$coffe->id)}}">
      @csrf 
      @method('DELETE')

      <button type="submit"  class="Delet ms-3" >Delete</button>

      </form>
      </div>
       
      </td>
    </tr>
@endforeach
   
  </tbody>
</table>

</main>


@endsection









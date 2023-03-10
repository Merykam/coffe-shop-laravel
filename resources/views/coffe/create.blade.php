@extends('layouts.app')





<div class="form-create">






<form action="{{route('coffe.store')}}" method="post">
    @csrf 
    <h3 class="text-white drink text-center bg-dark mt-5 fw-bold">Add new drink</h3>
<div class="form-row mt-3">


<div class="col mb-0">
    <label class="form-label fw-bold">Drink name</label>
    <input value="{{old('name')}}" type="text" class="form-control"  name="name" />
</div>

<div class="m-0 text-danger">
  @error('name')
  {{$message}}

  @enderror

</div>
  

<!-- <div class="col mb-3">
  <label class="form-label">Picture</label>
  <input type="file" class="form-control" id="task-title" name="pic"/>
</div> -->
<div class="col  mb-0">
  <label class="form-label fw-bold">Price</label>
  <input value="{{old('price')}}" type="number" class="form-control fw-bold" id="task-title" name="price"/>
</div>
<div class="m-0 text-danger" >
  @error('price')
  {{$message}}

  @enderror

</div>

<div class="col mb-0">
  <label class="form-label fw-bold">Description</label>
  <input value="{{old('description')}}" class="form-control fw-bold" id="task-description" name="description"></input>
</div>
<div class="m-0 text-danger">
  @error('description')
  {{$message}}

  @enderror

</div>


<div class="modal-footer">
        
        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>

        <button type="submit" name="Add_lyrics" class="btn task-action-btn" id="task-save-btn">Save</button>

    </div>


  </div>
  
</form>


</div>



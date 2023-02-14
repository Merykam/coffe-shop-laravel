@extends('layouts.app')

<div class="form-create">




<form action="{{route('coffe.update',['coffe'=>$coffes->id])}}" method="post">
    @method('PUT')
    @csrf 
<div class="form-row">


<div class=" col mb-0">
    <label class="form-label">Drink name</label>
    <input value="{{ $coffes->name}}" type="text" class="form-control"  name="name" />
</div>

<div class="m-0 text-danger">
  @error('name')
  {{$message}}

  @enderror

</div>
  

<div class="col  mb-0">
  <label class="form-label">Price</label>
  <input value="{{$coffes->price}}" type="number" class="form-control" id="task-title" name="price"/>
</div>
<div class="m-0 text-danger" >
 
  @error('price')
  {{$message}}

  @enderror

</div>

<div class="col mb-0">
  <label class="form-label">Description</label>
  <input value="{{$coffes->description}}" class="form-control" id="task-description" name="description"></input>
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



@extends('layouts.app')
@section('content')

<div class="container pt-5">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark fw-bold">{{ __('Chnage your profile') }}</div>

<form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf

        <div class="card-body">
          

          
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">{{ trans('name')}}</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mb-3 ">
                <label for="email" class="form-label fw-bold">{{ trans('email')}}</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mt-2 ">
                <button type="submit" class="button-create me-2 fw-bold bg-dark text-white">{{ trans('save changes')}}</button>
            </div>

            </div>
     
</form>
</div>
    </div>
    </div>
@endsection
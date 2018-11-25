@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Category') }}</div>
                    <div class="card-body">
                        <form method="POST" action="createCat">
                              {{ csrf_field() }}
                                <div class="form-group row">
                                        <label for="id" class="col-md-4 col-form-label text-md-right"><b>{{ __('Category Id') }}</b></label>
                                        <div class="col-md-6">
                                        <input type="number" class="form-control" placeholder="{{$id}}" value={{$id}} id="id" name="id" disabled>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right"><b>{{ __('Category Name') }}</b></label>
                                        <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" id="name" name="name" required>
                                        </div>
                                </div>
                                <br>
                                <div class="form-group row mb-0">
                                    
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                         </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
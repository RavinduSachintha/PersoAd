@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Your Advertisement Here') }}</div>
                    <div class="card-body">
                        <form method="POST" action="/adds_creating" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right"><b>{{ __('Title') }}</b></label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="body" class="col-md-4 col-form-label text-md-right"><b>{{ __('Category') }}</b></label>
                                        <div class="col-md-6">
                                            <select name="category">
                                                <option value="Electronic Appliances">Electronic Appliances</option>
                                                <option value="Electronic Appliances">Electronic Appliances</option>
                                                <option value="Electronic Appliances">Electronic Appliances</option>
                                                <option value="Electronic Appliances">Electronic Appliances</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="body" class="col-md-4 col-form-label text-md-right"><b>{{ __('Description') }}</b></label>
                                        <div class="col-md-6">
                                            <textarea  id="body" name="body" class="form-control" required></textarea>
                                        </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label for="body" class="col-md-4 col-form-label text-md-right"><b>{{ __('Upload Image') }}</b></label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" id="imgInp" name="photo" class="form-control-file" required>
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

            
                    
                  
            


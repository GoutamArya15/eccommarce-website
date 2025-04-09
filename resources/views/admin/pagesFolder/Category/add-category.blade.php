@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                <form class="forms-sample" method="POST" action="{{ route('category_process') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Category"
                            name="title" value="{{ old('title') }}">
                    </div>

                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Image</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Username"
                            name="image">
                    </div>
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('category-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

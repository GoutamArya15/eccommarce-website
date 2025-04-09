@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add User</h4>
                <form class="forms-sample" method="POST" action="{{ route('category_process') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">User Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="User Name"
                            name="name" value="{{ old('title') }}">
                    </div>

                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Email"
                            name="name" value="{{ old('title') }}">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('category-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

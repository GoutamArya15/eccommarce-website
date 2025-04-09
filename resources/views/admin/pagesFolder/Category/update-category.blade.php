@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Category</h4>
                <form class="forms-sample" action="{{ route('category.update_process', ['id' => $category['id']]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Category"
                            value="{{ $category['title'] }}" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Image</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Username"
                            name="image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('assets/uploads/categoryimage/' . $category['image_name']) }}" alt="category"
                            style="height: 70px;border-radius:8px;">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a class="btn btn-light" href="{{ route('category-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

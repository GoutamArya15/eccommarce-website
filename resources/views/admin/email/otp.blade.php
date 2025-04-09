@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Otp Validate</h4>
                <form class="forms-sample" method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter 5 digit Otp"
                            name="otp" value="{{ old('otp') }}">
                    </div>
                    @error('otp')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-light" href="/">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

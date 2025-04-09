@extends('admin.pagesFolder.admin-master')

@section('content')
    {{-- password change --}}
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Password</h4>
                <form class="forms-sample" method="POST" action="{{ route('change_password_save') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Current Password"
                            name="current_pass" value="{{ old('current_pass') }}">
                    </div>
                    @error('current_pass')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="New Password"
                            name="new_pass" value="{{ old('new_pass') }}">
                    </div>
                    @error('new_pass')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputUsername1" placeholder="Varify Password"
                            name="varify_pass" value="{{ old('varify_pass') }}">
                    </div>

                    @error('varify_pass')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a class="btn btn-light" href="{{ route('category-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>


    {{-- profile image change --}}

    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Profile Image</h4>
                <img src="{{ asset('assets/admin/images/faces/face28.jpg') }}" alt="" class="img-fluid"
                    height="50px" width="50px">
                <form class="forms-sample" method="POST" action="{{ route('update_profile') }}" style="margin-top: 25px">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control" id="exampleInputUsername1" name="profile_image">
                    </div>
                    @error('profile_image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a class="btn btn-light" href="{{ route('category-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

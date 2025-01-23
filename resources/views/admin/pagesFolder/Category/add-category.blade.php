@include('admin.includes.header')

<div class="container-scroller">
    @include('admin.includes.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.includes.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-9 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Category</h4>
                                <form class="forms-sample" method="POST" action="{{ route('category_process') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category Name</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Category" name="title" value="{{ old('title') }}">
                                    </div>

                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category Image</label>
                                        <input type="file" class="form-control" id="exampleInputUsername1"
                                            placeholder="Username" name="image">
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
                </div>
            </div>
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.
                        Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                            template</a> from BootstrapDash. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                        with <i class="ti-heart text-danger ms-1"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

@include('admin.includes.footer')

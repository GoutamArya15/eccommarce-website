@include('admin.includes.header')

<div class="container-scroller">
    @include('admin.includes.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.includes.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title mt-4">Category Table</h4>
                                <a href="{{ route('add_category') }}" class="btn btn-success text-white"
                                    style="height: 43px">Add Category</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Category Image</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Category as $item)
                                                <tr>
                                                    <td class="py-1">
                                                        <img src="{{ asset('assets/uploads/categoryImage/' . $item['image_name']) }}"
                                                            alt="image" style="100px">
                                                    </td>
                                                    <td>
                                                        {{ $item['title'] }}
                                                    </td>
                                                    <td>
                                                        <a class="nav-link dropdown-toggle pe-3" role="button"
                                                            id="pages" data-bs-toggle="dropdown"
                                                            aria-expanded="false"><span
                                                                style="position: relative;bottom: 6px;font-weight: bold;">...</span></a>
                                                        <ul class="dropdown-menu border-0  rounded-3 shadow"
                                                            aria-labelledby="pages">
                                                            <li><a href="{{ route('update', ['id' => $item['id']]) }}"
                                                                    class="dropdown-item"><i class="mdi mdi-pen"></i>
                                                                    Edit</a></li>
                                                            <li><a href="{{ route('delete_process', ['id' => $item['id']]) }}"
                                                                    class="dropdown-item"><i class="mdi mdi-delete"></i>
                                                                    Delete</a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
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

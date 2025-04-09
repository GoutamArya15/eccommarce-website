@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title mt-4">Category Table</h4>
                <a href="{{ route('add_category') }}" class="btn btn-success text-white" style="height: 43px">Add Category</a>
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
                            @if (empty($Category))
                                <tr>
                                    <td>Data Not Available</td>
                                </tr>
                            @endif
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
                                        <a class="nav-link dropdown-toggle pe-3" role="button" id="pages"
                                            data-bs-toggle="dropdown" aria-expanded="false"><span
                                                style="position: relative;bottom: 6px;font-weight: bold;">...</span></a>
                                        <ul class="dropdown-menu border-0  rounded-3 shadow" aria-labelledby="pages">
                                            <li><a href="{{ route('category.update', ['id' => $item['id']]) }}"
                                                    class="dropdown-item"><i class="mdi mdi-pen"></i>
                                                    Edit</a></li>
                                            <li><a href="{{ route('catrgoty.delete_process', ['id' => $item['id']]) }}"
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
@endsection

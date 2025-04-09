@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title mt-4">Products</h4>
                <a href="{{ route('add_product') }}" class="btn btn-success text-white" style="height: 43px">Add Product</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($products) }} --}}
                            @foreach ($products as $item)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{ asset('assets/uploads/products/' . $item['details']['product_image']) }}"
                                            alt="image" style="100px">
                                    </td>
                                    <td>
                                        {{ implode(', ', array_column($item['categories'], 'title')) }}
                                    </td>
                                    <td>
                                        {{ $item['product_name'] }}
                                    </td>
                                    <td>
                                        {{ $item['details']['product_price'] }}
                                    </td>
                                    <td>
                                        {{ $item['details']['product_description'] }}
                                    </td>

                                    <td>
                                        <a class="nav-link dropdown-toggle pe-3" role="button" id="pages"
                                            data-bs-toggle="dropdown" aria-expanded="false"><span
                                                style="position: relative;bottom: 6px;font-weight: bold;">...</span></a>
                                        <ul class="dropdown-menu border-0  rounded-3 shadow" aria-labelledby="pages">
                                            <li><a href="{{ route('product.update', ['id' => $item['id']]) }}"
                                                    class="dropdown-item"><i class="mdi mdi-pen"></i>
                                                    Edit</a></li>
                                            <li><a href="{{ route('product.delete_process', ['id' => $item['id']]) }}"
                                                    class="dropdown-item"><i class="mdi mdi-delete"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

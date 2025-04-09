@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Product</h4>
                <form class="forms-sample" method="POST"
                    action="{{ route('product.update_process', ['id' => $product['id']]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Product Name"
                            name="product_name" value="{{ $product['product_name'] }}">
                    </div>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Product Image</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" name="product_image">
                    </div>

                    <img src="{{ asset('assets/uploads/products/') . '/' . $product['details']['product_image'] }}"
                        alt="" height="100px" width="100px">

                    @error('product_image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Product Price</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Product Price"
                            name="product_price" value="{{ $product['details']['product_price'] }}">
                    </div>
                    @error('product_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Category</label>
                        <select class="categories w-50" name="category[]" multiple="multiple">
                            @php
                                $selectedCategories = array_column($product['categories'], 'id');
                            @endphp
                            @foreach ($category as $value)
                                <option value="{{ $value['id'] }}" @if (in_array($value['id'], $selectedCategories)) selected @endif>
                                    {{ $value['title'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea id="" cols="50" rows="2" name="product_desc">{{ $product['details']['product_description'] }}</textarea>
                    </div>
                    @error('product_desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a class="btn btn-light" href="{{ route('product-page') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.categories').select2({
                placeholder: "Select Category",
            });
        });
    </script>
@endsection

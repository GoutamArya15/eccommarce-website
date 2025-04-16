<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $g1 = Product::with('carts')->get();
        $products = Product::with(['details', 'categories'])->get()->toArray();
        return view('admin.pagesFolder.product.index', compact('products'));
    }

    public function add_product()
    {
        $category = Category::pluck('title', 'id')->toArray();
        // dd($category);
        return view('admin.pagesFolder.product.addProduct', compact('category'));
    }

    public function add_product_process(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products',
            'product_image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'product_price' => 'required|numeric',
            'category' => 'required|array|min:1',
            'product_desc' => 'required'
        ]);
        $slug = Str::slug($request->product_name, '-');
        $product = Product::create([
            'product_name' => $request->product_name,
            'product_slug' => $slug,
        ]);
        $product->categories()->sync($request->category);
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/uploads/products'), $imageName);
        } else {
            $imageName = null;
        }
        ProductDetail::create([
            'product_id' => $product->id,
            'product_description' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $imageName
        ]);
        // dd($product->id);
        return redirect()->route('product-page')->with('success', 'Product added successfully');
    }

    public function update($id)
    {
        $product = Product::with(['details', 'categories'])->where('id', $id)->first()->toArray();
        $category = Category::get()->toArray();
        return view('admin.pagesFolder.product.update', compact('product', 'category'));
    }

    public function update_process(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_name' => 'required|unique:products,product_name,' . $request->id,
            'product_image' => 'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'product_price' => 'required|numeric',
            'category' => 'required|array|min:1',
            'product_desc' => 'required'
        ]);

        // dd($request->all());
        $product = Product::findOrFail($request->id);
        $product->update([
            'product_name' => $request->product_name,
            'product_slug' => Str::slug($request->product_name)
        ]);
        $product->categories()->sync($request->category);

        $productDetail = ProductDetail::where('product_id', $request->id)->first();

        if ($request->hasFile('product_image')) {
            if ($productDetail) {
                $imagePath = public_path('assets/uploads/products/' . $productDetail->product_image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/uploads/products'), $imageName);
        } else {
            $imageName = $productDetail->product_image;
        }

        $productDetail->update([
            'product_description' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $imageName
        ]);
        return redirect()->route('product-page', $request->id)->with('success', 'Product updated successfully');
    }

    public function remove_product($id)
    {
        $product = Product::findOrFail($id);
        $productDetail = ProductDetail::where('product_id', $product->id)->first();
        if ($productDetail && $productDetail->image) {
            $imagePath = public_path('uploads/products/' . $productDetail->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        ProductDetail::where('product_id', $product->id)->delete();
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
//SELECT `product_id`,`category_id` FROM `category_product` WHERE `category_id` = 2;

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\fileExists;

class CategoryController extends Controller
{
    public function index()
    {
        $Category = Category::all()->toArray();
        // dd($Category);
        return view('admin.pagesFolder.Category.category', compact('Category'));
    }

    public function add_category()
    {
        return view('admin.pagesFolder.Category.add-category');
    }

    public function add_category_process(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $image_name = time() . '.' . $ext;
        $image->move(public_path('assets/uploads/categoryImage'), $image_name);
        $category = Category::create(
            [
                'title' => $request->title,
                'image_name' => $image_name
            ]
        );
        if ($category) {
            return redirect()->route('add_category')->with('success', 'Successfull Created Category');
        } else {
            return redirect()->back()->with('error', 'something went wrong!');
        }
    }

    public function update($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            return view('admin.pagesFolder.Category.update-category', compact('category'));
        } else {
            return back()->with('error', 'Some thing wrong');
        }
    }

    public function update_process(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg'
        ]);
        $dbcat = Category::where('id', $id)->first();
        if ($request->hasFile('image')) {
            // dd("hello");
            if ($dbcat) {
                $imagePath = public_path('assets/uploads/categoryImage/' . $dbcat->product_image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/uploads/categoryImage'), $imageName);
            }
        }
        // dd($imageName);
        $category = Category::findOrFail($id);
        $category->update([
            'title' => $request->title,
            'image_name' => $imageName
        ]);
        if ($category) {
            return redirect()->back()->with('success', 'Successfull updated Category');
        } else {
            return redirect()->back()->with('error', 'something went wrong!');
        }
    }

    // public function delete_process($id)
    // {
    //     $image_name = Category::where('id', $id)->value('image_name');
    //     $image_path =  public_path('assets/uploads/categoryImage/' . $image_name);
    //     if (fileExists($image_path)) {
    //         unlink($image_path);
    //     }
    //     $delet = Category::where('id', $id)->delete();
    //     if ($delet) {
    //         return redirect()->back()->with('success', 'Successfull Deleted Category');
    //     } else {
    //         return redirect()->back()->with('error', 'something went wrong!');
    //     }
    // }
}

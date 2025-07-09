<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('page_key', 'section_1')->get();
        return view('admin.products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            if ($product->media && file_exists(public_path('uploads/products/' . $product->media))) {
                unlink(public_path('uploads/products/' . $product->media));
            }

            $product->media = $fileName;
        }

        $product->title = $validated['title'];
        $product->save();

        return redirect()->route('products.index')->with('success', 'Section 1 updated successfully.');
    }

    public function productCategoryIndex()
    {
        $products = Product::where('page_key', 'section_2')->get();
        return view('admin.products.category-index', compact('products'));
    }

    public function productCategoryEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.category-edit', compact('product'));
    }

    public function productCategoryUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            if ($product->media && file_exists(public_path('uploads/products/' . $product->media))) {
                unlink(public_path('uploads/products/' . $product->media));
            }

            $product->media = $fileName;
        }

        $product->title = $validated['title'];
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product-categories.index')->with('success', 'Product category updated successfully.');
    }

    public function productCategoryIndex2()
    {
        $products = Product::where('page_key', 'section_2')->get();
        return view('admin.products.category-index-2', compact('products'));
    }

    public function productCategoryEdit2($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.category-edit-2', compact('product'));
    }

    public function productCategoryUpdate2(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            if ($product->media && file_exists(public_path('uploads/products/' . $product->media))) {
                unlink(public_path('uploads/products/' . $product->media));
            }

            $product->media = $fileName;
        }

        $product->title = $validated['title'];
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product-categories.index2')->with('success', 'Product category updated successfully.');
    }

    public function productCarouselIndex()
    {
        $products = Product::where('page_key', 'section_3')->get();
        return view('admin.products.carousel-index', compact('products'));
    }

    public function productCarouselCreate()
    {
        return view('admin.products.carousel-create');
    }

    public function productCarouselStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = new Product();
        $product->page_key = 'section_3';
        $product->media_type = 'image';
        $product->title = $validated['title'];
        $product->description = $request->description;

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);
            $product->media = $fileName;
        }

        $product->save();

        return redirect()->route('product-carousel.index')->with('success', 'Product carousel added successfully.');
    }

    public function productCarouselEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.carousel-edit', compact('product'));
    }

    public function productCarouselUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            if ($product->media && file_exists(public_path('uploads/products/' . $product->media))) {
                unlink(public_path('uploads/products/' . $product->media));
            }

            $product->media = $fileName;
        }

        $product->title = $validated['title'];
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product-carousel.index')->with('success', 'Product carousel updated successfully.');
    }

        public function productVisionIndex()
    {
        $products = Product::where('page_key', 'section_5')->get();
        return view('admin.products.vision-index', compact('products'));
    }

    public function productVisionEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.vision-edit', compact('product'));
    }

    public function productVisionUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            if ($product->media && file_exists(public_path('uploads/products/' . $product->media))) {
                unlink(public_path('uploads/products/' . $product->media));
            }

            $product->media = $fileName;
        }

        $product->title = $validated['title'];
        $product->description = $request->description;
        $product->save();

        return redirect()->route('product-vision.index')->with('success', 'Product vision updated successfully.');
    }

    public function section6(Request $request){
        $section = Product::where('page_key', 'section_6')->firstOrFail();
        return view('admin.products.section6', compact('section'));
    }

    public function updateSection6(Request $request, $id)
    {
        $section = Product::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // File Upload
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products'), $fileName);

            // Delete old image if exists
            if ($section->media && file_exists(public_path('uploads/products/' . $section->media))) {
                unlink(public_path('uploads/products/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Update other fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', '6th Section updated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::
        with(['images','comments.user'])
        ->paginate(config('global.paginate'));
        // dd($products);
        // return view ('products.index', compact('products'));
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $subcategories = [];
        $product = null;
        return view('products.create', compact('categories', 'subcategories', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());
        $product = Product::create($request->all());
        //dd($product);
        if ($product) {
            //
            //    dd($request);
            if ($request->hasFile('images')) {
                $files = $request->file('images');

                foreach ($files as $file) {
                    // Save or process each file as needed
                    $loc = $file->store('uploads');
                    $i = new Image();
                    $i->name = $loc;
                    $product->images()->save($i);
                    //echo Storage::path($loc) . "<br>";
                    //resize the images and store with same name. max resolution can be 1024px
                    //watermark
                    //image intervention
                    $manager = new ImageManager(new Driver());
                    $image = $manager->read(Storage::path($loc));
                    $image = $image
                        ->scaleDown(width: 800)
                        /*for old version*/
                        //  ->resize(800, null, function ($constraint) {
                        //      $constraint->aspectRatio();
                        //      $constraint->upsize();
                        //  })
                        ->place(storage_path("app/public") . '/logo.png', 'bottom-right')
                        ->save(Storage::path($loc));
                    //watermark end
                }
                return redirect()->route("products.create")->with("success", "Product saved successfully. ID is " . $product->id);
            } else {
                echo "image not available";
            }
            // 
        } else {
            echo "Product add failed";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // dd($product);
        $product->loadMissing(['images', 'comments.user']);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //dd($product->with('images')->get());
        $categories = Category::pluck('name', 'id');
        $subcategories = SubCategory::where('category_id', $product->category_id)->pluck('name', 'id');
        $product = Product::with('images')->find($product->id);
        // dd($product);
        return view('products.edit', compact('categories', 'subcategories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function deleteImage($id){
        //delete from table
        $image = Image::find($id);
        
        //delete from storage
        Storage::delete($image->name);
        $image->delete();
        
        // return redirect()->route('products.create')->with('success', 'Image deleted successfully');
        //json response
        return response()->json(['status'=>true,'message' => 'Image deleted successfully'], 200);
    }
    public function storecomment(Request $request, $id){
        $product = Product::find($id);
        $request->validate([
            'comment' => 'required|max:255|min:5',
        ]);
        $comment = new Comment();
        $comment->user_id =  auth()->user()->id;//Auth::id();
        
        $comment->comment = $request->comment;
        $product->comments()->save($comment);
        return redirect()->back()->with('success', 'Comment added successfully');
    }
}

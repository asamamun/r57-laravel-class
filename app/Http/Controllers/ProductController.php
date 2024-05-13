<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\SubCategory;
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
        $products = Product::with('images')->paginate(config('global.paginate'));
        // return view ('products.index', compact('products'));
        return view ('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $subcategories = [];
        $product = null;
        return view ('products.create', compact('categories', 'subcategories', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());
        $product = Product::create($request->all());
        //dd($product);
        if($product){
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
                     ->scaleDown(width:800)
                /*for old version*/
                     //  ->resize(800, null, function ($constraint) {
                    //      $constraint->aspectRatio();
                    //      $constraint->upsize();
                    //  })
                     ->place(storage_path("app/public").'/logo.png','bottom-right')
                     ->save(Storage::path($loc));
                     //watermark end
             }
              return redirect()->route("products.create")->with("success","Product saved successfully. ID is ".$product->id );
         } 
         else{
             echo "image not available";
         }
            // 
         }
         else{
             echo "Product add failed";
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
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
}

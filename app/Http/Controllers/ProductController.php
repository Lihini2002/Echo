<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the products that are recently added 
     * //we have to also decide on which attributes to show. 
     * 
     */
    public function index()
    {
        return view('admin.products.index', 
    ['products' => Product::paginate(20) 
    
]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $sellerId = Auth::id();
            
        // return view('admin.products.create', [
        //     'product' => new Product(),
        //     // 'categories' => CategoryController::whereNull('parent_id')->get()
        //     'categories' => Category::getTopLevelCategories(),
        //     'seller_id' => $sellerId

        // ]);
        
        //
    }


    /**
     * Store a newly created resource in storage.
     */
   
public function store(StoreProductRequest $request)
{
    // $validated = $request->validated();

    // Product::create($validated);

    // // Add any additional logic as needed

    // return redirect()->route('products')
    //                  ->with('success', 'Product created successfully.');
}


        //are we really redirecting this to this?
        //oka so we gotta change this to admin to seller because seller is the one who should be posting?
        //for now we just design it for admin adn then introduce seller later. 
        //product index is common to all. 
 
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //Fpr products name it with a space. 
        $quantity = 1; // Default quantity or fetched from somewhere
        return view('products .show', compact('product', 'quantity'));
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
    public function update(Request $request, Product $product)
    {
     //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {//
    }
}

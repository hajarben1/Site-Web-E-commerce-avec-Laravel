<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::latest()->paginate(5);
        return view('index',compact('products'))
        ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    /**public function create()
    {
       return view('create');
    }
    */
    public function create()
{
    return view('new_create');
}
public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'catégorie' => 'required',
        'prix' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    // Get the uploaded image file
    $imagePath = $request->file('image')->store('images', 'public');

    // Create a new product instance and set its attributes
    $product = new Product();
    $product->name = $validatedData['name'];
    $product->catégorie = $validatedData['catégorie'];
    $product->prix = $validatedData['prix'];
    $product->image = $imagePath;

    // Save the product in the database
    $product->save();

    // Redirect the user to a success page or perform any additional actions
    return redirect()->route('index')->with('success', 'Product created successfully!');
}


    /**
     * Store a newly created resource in storage.
     */
   /** public function store(Request $request)
  *  {
       * $request->validate([
       *     'catégorie'=> 'required',
          *  'name'=> 'required',
          *  'prix'=>'required',
            *'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
     *   ]);

       * $input = $request->all();
       
       * if ($image = $request->file('image')){
        *    $destinationPath = 'images/';
          *  $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           * $image->move($destinationPath, $profileImage);
          *  $input['image'] = "$profileImage";
      *  }

       * product:: create($input);
       * return redirect()->route('index')
        *                ->with('success','Product created successfully.');
   * }
*/
    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('show',compact('product'));
    }

   /** public function getInformation(product $product)
   * {
      *  $products = product::latest()->paginate(28);
       * return view('getInformation',compact('products'))
      *  ->with('i', (request()->input('page',1)-1)*28);
   * }
   */
 
   public function getInformation()
   {
       $travelProducts = product::where('catégorie', 'Travel')->latest()->paginate(6);
       $educationProducts = product::where('catégorie', 'Education')->latest()->paginate(5);
       $childrenProducts = product::where('catégorie', 'Children')->latest()->paginate(6);
       $businessProducts = product::where('catégorie', 'Business')->latest()->paginate(6);
       
       return view('getInformation', compact('travelProducts', 'educationProducts', 'childrenProducts', 'businessProducts'));
   }
   


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('edit')->with('product', $product);
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->name = $request->input('name');
    $product->catégorie = $request->input('catégorie');
    $product->prix = $request->input('prix');

    if ($request->hasFile('image')) {
        // Handle image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $product->image = 'images/' . $imageName;
    }
    

    $product->save();

    return redirect('index')->with('success', 'Product updated successfully');
}

    

    /**
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     * Update the specified resource in storage.
     */
   
   
    
 
    
     
    

    function search(Request $req)
    {
         $data= product::where('name','like', '%' .$req->input('query'). '%')->get();
         return view('search',['products'=>$data]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('index')
        ->with('success', 'Product deleted successfully.');
}
    

   
}

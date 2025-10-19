<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
     /**
     * 
     * Display a listing of the resource.
     * 
     * @return void
     */

     public function index() : View
     {
        $products = Products::latest()->paginate(10);

        return view('products.collections', compact('products'));
     }

     public function create() : View
     {
        return view('products.drop');
     }

     /**
      * Store a newly created resource in storage.
      * @param mixed $request
      * @return RedirectResponse
      */

     public function store(Request $request): RedirectResponse
     {
        $request->validate([
            'name' => 'required',
            'top_notes' => 'required',
            'middle_notes' => 'required',
            'base_notes' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer|min:0',
            'description' => 'required',
        ]);

        Products::create($request->all());

        return redirect()->route('products.drop')
            ->with('success', 'Product created successfully.');
     }
     
}

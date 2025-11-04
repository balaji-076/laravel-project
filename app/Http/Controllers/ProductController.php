<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /products
    public function index()
    {
        return Product::all();
    }

    // POST /products
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'stock' => 'integer',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    // GET /products/{id}
    public function show(Product $product)
    {
        return $product;
    }

    // PUT/PATCH /products/{id}
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required',
            'price' => 'sometimes|required|numeric',
            'description' => 'nullable|string',
            'stock' => 'integer',
        ]);

        $product->update($validated);
        return response()->json($product, 200);
    }

    // DELETE /products/{id}
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}

<?php  
namespace App\Http\Controllers\Api; 
use App\Http\Controllers\Controller; 
use App\Models\Product; 
use App\Http\Requests\StoreProductRequest; 
use App\Http\Requests\UpdateProductRequest; 
use App\Http\Resources\ProductResource; 
class ProductController extends Controller 
{ 
    /** 
     * Display a listing of the resource. 
     */ 
    public function index()
{
    $products = Product::all();

    return response()->json([
        'message' => 'Mostrando lista de productos',
        'data' => ProductResource::collection($products)
    ], 200);
}

 
    /** 
     * Store a newly created resource in storage. 
     */ 
    public function store(StoreProductRequest $request) 
    { 
        $product = Product::create($request->validated()); 
        return response()->json([
        'message' => 'Producto creado con éxito',
        'data' => new ProductResource($product)
    ], 201);     
        
    }
     /** 
     * Display the specified resource. 
     */ 
public function show(string $id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json([
            'message' => 'Producto no encontrado',
        ], 404);
    }

    return response()->json([
        'message' => 'Mostrando producto seleccionado',
        'data' => new ProductResource($product)
    ]);
}

 
    /** 
     * Update the specified resource in storage. 
     */ 
     public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Producto no encontrado'
            ], 404);
        }

        $product->update($request->validated());

        return response()->json([
            'message' => 'Producto actualizado correctamente',
            'data' => new ProductResource($product)
        ], 200);
    }
 
    /** 
     * Remove the specified resource from storage. 
     */ 
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Producto no encontrado'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Producto eliminado correctamente'
        ], 204);
    }
}
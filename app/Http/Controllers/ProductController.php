<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use  App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product) {

        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();

        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $product = $this->product->create($data);

        if (!$product) {
            return response()->json(['Não foi possivel criar o produto', 400]);
        }

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);

        if (!$product) {
            return response()->json('O produto não existe', 400);
        }

        return response()->json($product, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $product = $this->product->find($id);
       
        if(!$product) {
            return response()->json('Produto não existe');
        }
        
        $data = $request->all();
        $result = $this->product->update($data);
        
        return response()->json('Produto editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);

        if (!$product) {
            return response()->json('O produto não existe', 400);
        }
        
        $product->delete();

        return response()->json('Produto Deletado', 200);
    }
}

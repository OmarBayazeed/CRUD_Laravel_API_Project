<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $products =ProductResource::collection(Product::select('id', 'title', 'description', 'image')->get());

        if ($products) {
            return $this->apiResponse($products,'ok',200);
        }
        else
        {
            return $this->apiResponse(null,'there is no products',404);
        }
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),401);
        }

        $imageName = Str::random().'.'.$request->image->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('product/image', $request->image, $imageName);
        $product = Product::create($request->post()+['image' => $imageName]);
        if ($product) {
            return $this->apiResponse(new ProductResource($product),'product created successfully',201);
        }
        else
        {
            return $this->apiResponse(null,'can not create a product',401);
        }
    }


    public function show($id)
    {
        $product = new ProductResource(Product::select('id', 'title', 'description', 'image')->find($id));

        if ($product) {
            return $this->apiResponse($product,'ok',200);
        }
        else
        {
            return $this->apiResponse(null,'the product not found',404);
        }
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),401);
        }

        $product = Product::find($id);

        if (!$product) {
            return $this->apiResponse(null,'the product not found',404);
        }
        $product->fill($request->post())->update();

        if ($request->hasFile('image')) {
            if ($product->image) {
                $exist = Storage::disk('public')->exists('product/image/'. $product->image);
                if ($exist) {
                    $exist = Storage::disk('public')->delete('product/image/'. $product->image);
                }
            }
            $imageName = Str::random().'.'.$request->image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('product/image', $request->image, $imageName);
            $product->image = $imageName;
            $product->save();
        }

        if ($product) {
            return $this->apiResponse(new ProductResource($product),'product updated successfully',201);
        }
        else
        {
            return $this->apiResponse(null,'can not update this product',401);
        }


    }



    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return $this->apiResponse(null,'the product not found',404);
        }

        if ($product->image) {
            $exist = Storage::disk('public')->exists('product/image/'. $product->image);
            if ($exist) {
                $exist = Storage::disk('public')->delete('product/image/'. $product->image);
            }
        }
        $product->delete($id);

        if ($product) {
            return $this->apiResponse(null,'product deleted successfully',201);
        }
        else
        {
            return $this->apiResponse(null,'can not delete this product',401);
        }
    }
}

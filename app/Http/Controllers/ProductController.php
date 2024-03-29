<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainCatagory;
use App\Models\Product_image;
use App\Models\Product_spec;
use App\Models\SubCatagory;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showproduct()
    {
        $products = Product::all();
        $product_image = Product_image::all();
        $product_spec = Product_spec::all();
        return view('products.products', compact('products', 'product_image', 'product_spec'));
    }
    public function addproduct()
    {
        $subcatagory = SubCatagory::all();
        $catagory = MainCatagory::all();
        return view("products.addproducts", compact('subcatagory', 'catagory'));
    }

    public function newproduct(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg',
            'cost' => 'required|numeric|regex:/^\d*\.\d{1}[0-9]?$/',
            'product' => 'required',
            'product_status' => 'required',
            'description' => 'required',
            'catagory_name' => 'required',
            'subcatagory_name' => 'required',
            'addMoreInputFields.*.specification' => 'required',
        ]);

        // dd($request->all());

        $unique_id = Carbon::now()->timestamp . uniqid();

        $product = new Product();
        $product->unique_id = $unique_id;
        $product->product = $request->product;
        $product->description = $request->description;
        $product->cost = $request->cost;
        $product->status = $request->product_status;
        $product->catagory = $request->catagory_name;
        $product->subcatagory = $request->subcatagory_name;
        $product->save();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $insert[$key]['title'] = $file->getClientOriginalName();
                $insert[$key]['path'] = $file->storeAs('images', $file->getClientOriginalName());
                $insert[$key]['unique_id'] = $product->id;
            }
        }
        Product_image::insert($insert);

        foreach ($request->addMoreInputFields as $key => $value) {
            foreach ($value as $k => $v) {
                $upload[$key]['specification'] = $v;
                $upload[$key]['unique_id'] = $product->id;
            }
        }
        Product_spec::insert($upload);

        return back()->with("success", "Registerd Successfully...");
    }

    public function deleteproduct($id)
    {
        $product = Product::find($id);
        // dd($id);
        $unique_id = $product->unique_id;

        $product_img = Product_image::where('unique_id', $unique_id);
        $product_spec = Product_spec::where('unique_id', $unique_id);

        $product_spec->delete();
        $product_img->delete();
        $product->delete();
        return back()->with("success", "Prouduct deleted successfuly....");
    }

    public function editproduct($id)
    {
        $product = Product::find($id);
        $unique_id = $product->unique_id;
        $subcatagory = SubCatagory::all();
        $catagory = MainCatagory::all();
        // dd($product);
        
        // dd($product_img);
        $product_spec = Product_spec::where('unique_id', $unique_id)->get();
        // dd($product_spec);

        return view('products.editproducts', compact('product', 'product_spec', 'subcatagory', 'catagory'));
    }



    public function updateproduct($id, Request $request)
    {
        // dd($request);
        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg',
            'cost' => 'required|numeric|regex:/^\d*\.\d{1}[0-9]?$/',
            'product' => 'required',
            'description' => 'required',
            'catagory_name' => 'required',
            'subcatagory_name' => 'required',
            'product_status' => 'required',
            'addMoreInputFields.*.specification' => 'required',
        ]);

        // dd($request->all());
        $product = Product::find($id);
        $unique_id = $product->unique_id;
        $product->unique_id = $product->unique_id;
        $product->product = $request->product;
        $product->description = $request->description;
        $product->cost = $request->cost;
        $product->status = $request->product_status;
        $product->catagory = $request->catagory_name;
        $product->subcatagory = $request->subcatagory_name;
        $product->update();

        $product_img = Product_image::where('unique_id', $unique_id);
        $product_img->delete();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $insert[$key]['title'] = $file->getClientOriginalName();
                $insert[$key]['path'] = $file->store('images');
                $insert[$key]['unique_id'] = $unique_id;
            }
        }
        Product_image::insert($insert);

        $product_spec = Product_spec::where('unique_id', $unique_id);
        $product_spec->delete();
        foreach ($request->addMoreInputFields as $key => $value) {
            foreach ($value as $k => $v) {
                $upload[$key]['specification'] = $v;
                $upload[$key]['unique_id'] = $unique_id;
            }
        }
        Product_spec::insert($upload);

        // Product_spec::update($upload);

        return back()->with("success", "Updated Successfully...");
    }

    public function want_pid_based_pimages(Request $request)
    {
        $product = Product::find($request->id);
        $unique_id = $product->unique_id;
        $images = Product_image::where('unique_id', $unique_id)->get();
        // $record = $record->toJson();
        $data=[];
        $i=0;
        foreach($images as $img){
            $data[$i]["id"]=$img->id;
            $data[$i]["path"]=$img->path;
            $data[$i++]["name"]=$img->title;
        }
        // $data=$data->toJson();
        // dd($data);
        
        return response()->json([
            'status' => 'success',
            'images' => $data,
        ]);
    }
}

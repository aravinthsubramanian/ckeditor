<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaginationController extends Controller
{
    public function takeproduct(Request $request)
    {
        // Page Length
        $pageNumber = ($request->start / $request->length) + 1;
        $pageLength = $request->length;
        $skip       = ($pageNumber - 1) * $pageLength;

        // Page Order
        $orderColumnIndex = $request->order[0]['column'] ?? '0';
        $orderBy = $request->order[0]['dir'] ?? 'desc';

        // get data from products table
        $query = DB::table('products')->select('*');

        // Search
        $search = $request->search;
        $query = $query->where(function ($query) use ($search) {
            $query->orWhere('product', 'like', "%" . $search . "%");
            $query->orWhere('description', 'like', "%" . $search . "%");
            $query->orWhere('cost', 'like', "%" . $search . "%");
        });

        $orderByName = 'product';
        switch ($orderColumnIndex) {
            case '0':
                $orderByName = 'product';
                break;
            case '1':
                $orderByName = 'description';
                break;
            case '2':
                $orderByName = 'cost';
                break;
            case '3':
                $orderByName = 'status';
                break;
            case '4':
                $orderByName = 'catagory';
                break;
            case '5':
                $orderByName = 'subcatagory';
                break;
        }
        $query = $query->orderBy($orderByName, $orderBy);
        $recordsFiltered = $recordsTotal = $query->count();
        $products = $query->skip($skip)->take($pageLength)->get();


        return response()->json(["draw" => $request->draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $products], 200);
    }


    public function changeprostatus(Request $request){
        // dd($id);
        $product = Product::find($request->id);

        $product->unique_id = $product->unique_id;
        $product->unique_id = $product->unique_id;
        $product->product = $product->product;
        $product->description = $product->description;
        $product->cost = $product->cost;
        if($product->status == 'enable'){
            $product->status = 'disable';
            $flag='disable';
        }else{
            $product->status = 'enable';
            $flag='enable';
        }
        $product->catagory = $product->catagory;
        $product->subcatagory = $product->subcatagory;
        $product->update();

        if($flag == 'enable'){
            return response()->json(["success"=>"Enabled Successfully..."]);
        }else{
            return response()->json(["success"=>"Disabled Successfully..."]);
        }
    }

    public function getspecforid(){

    }
}

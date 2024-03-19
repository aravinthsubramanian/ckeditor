<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainCatagory;
use Illuminate\Http\Request;
use App\Models\SubCatagory;

class CatagoryController extends Controller
{
    public function showcatagory()
    {
        $catagory = MainCatagory::all();
        return view('catagories.catagories', compact('catagory'));
    }
    public function newcatagory()
    {
        return view('catagories.addcatagories');
    }

    public function addcatagory(Request $request)
    {
        $request->validate([
            'catagory_name' => 'required|max:64|unique:main_catagories,catagory|alpha_num',
            'catagory_status' => 'required',
        ]);
        // dd($request->all());
        $catagory = new MainCatagory();
        $catagory->catagory = $request->catagory_name;
        $catagory->catagory_status = $request->catagory_status;
        $catagory->save();
        return back()->with("success", "Registerd Successfully...");
    }
    public function editcatagory($id)
    {
        $catagory = MainCatagory::find($id);
        // dd($id);
        return view('catagories.editcatagories', compact('catagory'));
    }

    public function updatecatagory(Request $request, $id)
    {
        $request->validate([
            'catagory_name' => 'required|max:64|alpha_num',
            'catagory_status' => 'required',
        ]);
        $record = MainCatagory::find($id);
        // dd($id);
        if ($record) {
            $record->catagory = $request->catagory_name;
            $record->catagory_status = $request->catagory_status;
            $record->update();
        }
        return back()->with("success", "updated Successfully...");
    }

    public function delete_catagory($id)
    {
        $record = MainCatagory::find($id);
        // dd($id);
        if ($record) {
            $record->delete();
        }
        return back()->with("success", "deleted Successfully...");
    }




    public function newsubcatagory()
    {
        $catagory = MainCatagory::all();
        return view('subcatagories.addsubcatagories', compact('catagory'));
    }

    public function showsubcatagory()
    {
        $subcatagory = SubCatagory::all();
        return view('subcatagories.subcatagories', compact('subcatagory'));
    }
    public function editsubcatagory($id)
    {
        $catagory = MainCatagory::all();
        $subcatagory = SubCatagory::find($id);
        return view('subcatagories.editsubcatagories', compact('catagory', 'subcatagory'));
    }

    public function addsubcatagory(Request $request)
    {
        $request->validate([
            'catagory_name' => 'required',
            'subcatagory_name' => 'required|max:64|unique:sub_catagories,subcatagory|alpha_num',
            'subcatagory_status' => 'required',
        ]);
        // dd($request->all());
        $subcatagory = new SubCatagory();
        $subcatagory->catagory = $request->catagory_name;
        $subcatagory->subcatagory = $request->subcatagory_name;
        $subcatagory->subcatagory_status = $request->subcatagory_status;
        $subcatagory->save();
        return back()->with("success", "Registerd Successfully...");
    }

    public function delete_subcatagory($id)
    {   
        $record = SubCatagory::find($id);
        // dd($id);
        if ($record) {
            $record->delete();
        }
        return back()->with("success", "deleted Successfully...");
    }

    public function updatesubcatagory(Request $request, $id)
    {
        $request->validate([
            'catagory_name' => 'required',
            'subcatagory_name' => 'required|max:64|alpha_num',
            'subcatagory_status' => 'required',
        ]);
        $record = SubCatagory::find($id);
        // dd($request);
        if ($record) {
            $record->catagory = $request->catagory_name;
            $record->subcatagory = $request->subcatagory_name;
            $record->subcatagory_status = $request->subcatagory_status;
            $record->update();
        }
        return back()->with("success", "updated Successfully...");
    }

    public function wantcatagory($id)
    {
        $record = MainCatagory::find($id)->toJson();
        // $record = $record->toJson();
        // dd($record);
        return response($record);
    }

    public function wantsubcatagory(Request $request)
    {
        $record = SubCatagory::where([['catagory', $request->id], ['subcatagory_status', 'enable']])->get();
        // $record = $record->toJson();
        // dd($record);
        return response()->json([
            'status' => 'success',
            'subcategories' => $record,
        ]);;
    }
}

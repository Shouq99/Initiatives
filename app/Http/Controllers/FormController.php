<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\designform;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function indexdesign()
    {
        $design = designform::all();
 
        return view('AdminPanel.designform.index', compact('design'));
    }
    public function viewdesign()
    {
        $design = designform::all();
 
        return view('AdminPanel.designform.view', compact('design'));
    }
    
    public function createdesign()
    {
        return view('AdminPanel.designform.create');
    }

    public function storedesign(Request $request)
    {
        $design = new designform;    

        $design->name = $request->name;
        $design->city = $request->city;
        $design->number = $request->number;
        $design->requests = $request->requests;
        $design->subjects = $request->subjects;
        $design->email = $request->email;

        $design->save();
        return redirect()->back()->with('status',' Added Successfully');
    }
    
    public function editdesign($id)
    {
        $design = designform::find($id);
        return view('AdminPanel.designform.edit', compact('design'));
    }

    public function updatedesign(Request $request, $id)
    {   
        $design = designform::find($id);

        $design->name = $request->name;
        $design->city = $request->city;
        $design->number = $request->number;
        $design->subjects = $request->subjects;
        $design->requests = $request->requests;
        $design->email = $request->email;
       
        

        $design->update();
        return redirect()->back()->with('status',' Updated Successfully');
    }

    public function designform_status_upadated(Request $request, $invoice_id){ 
   
        $design = designform::find($invoice_id);
        $design->status = $request->status;
        $design->save();
        return redirect()->back()->with('status',' Updated Successfully');

    }

    public function destroydesign($id)
    {
        $design = designform::find($id);
    
        $design->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }


}

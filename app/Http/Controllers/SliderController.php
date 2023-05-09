<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        
        
        $slider = slider::all();
        return view('AdminPanel.slider.index', compact('slider'));
    }


    public function create()
    {
        return view('AdminPanel.slider.create');
    }

    public function store(Request $request)
    {
        $slider = new slider;
     

        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        $slider->image = $request->input('image');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extention;
            $file->move('uploads/slider_image/', $filename);
            $slider->image = $filename;
        }
        $slider->statuss = $request->input('statuss') == true ? '1' : '0';

        $slider->save();
        return redirect()->back()->with('status',' تمت اضافة الصورة بنجاح');
    }

    public function edit($id)
    {
        $slider = slider::find($id);
        return view('AdminPanel.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        
        $slider = slider::find($id);
        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/slider_image/'.$slider->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extention;
            $file->move('uploads/slider_image/', $filename);
            $slider->image = $filename;
        }
        $slider->statuss = $request->input('statuss') == true ?'1':'0';

        $slider->update();
        return redirect()->back()->with('status',' تمت تعديل البيانات بنجاح');
    }

    public function destroy($id)
    {
        $slider = slider::find($id);
        $destination = 'uploads/slider_image/'.$slider->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $slider->delete();
        return redirect()->back()->with('status','kid Deleted Successfully');
    }
    
}

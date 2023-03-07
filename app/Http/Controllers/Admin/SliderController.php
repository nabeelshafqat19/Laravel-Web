<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderFormRequest;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.index');
    }
    
    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request)
    {
        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $request->getClientOrignalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] = "uploads/slider/$filename";
        }
        
        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],

        ]);        

        return redirect('admin.slider')->with('message', 'Slider Added Successfully');
    }
}
?>
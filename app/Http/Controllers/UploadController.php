<?php

namespace App\Http\Controllers;

use App\Models\CvUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function show()
    {
        $cv = CvUpload::all();
        return view('show',compact('cv'));
    }
    public function download($file)
    {
        return response()->download(public_path('/uploads/'.$file));
    }
    public function store(Request $request)
    {
        $file = $request->file;
        // $filename = uniqid().$file->getClientOriginalName();
        // return $filename;
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        
        $fileName = time().'.'.$file->getClientOriginalName();  
   
        $file->move(public_path('uploads'), $fileName);
   
       CvUpload::create([
        'cv_file' => $fileName,
       ]);
       return redirect('/');
     
    }

}

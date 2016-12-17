<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImageController extends Controller
{
    public function imageUploadPost(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:pdf,png,jpg,gif,svg,pdf|max:2048',
        ]);

        $imageName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('profile-img'), $imageName);

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }
}

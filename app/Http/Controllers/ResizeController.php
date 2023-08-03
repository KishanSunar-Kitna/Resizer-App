<?php

namespace App\Http\Controllers;

use Image;

use Illuminate\Http\Request;

class ResizeController extends Controller
{
    public function proceedImage(Request $request)
    {
        // check file type
        $this->validate($request, [
            'picture' => "required|image|mimes:png,jpg"
        ]);
        $image = $request->file('picture');
        $destination_path = public_path('/thumbnail');

        // make image file
        $imgFile = Image::make($image->getRealPath());

        return view('output');
    }
}
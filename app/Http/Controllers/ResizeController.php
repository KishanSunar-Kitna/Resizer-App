<?php

namespace App\Http\Controllers;

use Image;

use Illuminate\Http\Request;

class ResizeController extends Controller
{
    public function proceedImage(Request $request)
    {
        // check file type
        $isValidFile = $this->validate($request, [
            'picture' => "required|image|mimes:png,jpg,webp"
        ]);

        // get file
        $image = $request->file('picture');

        // get dimensions
        $height = $request->input('height');
        $width = $request->input('width');

        // make file name
        $file['picture'] = time() . '.' . $image->getClientOriginalExtension();

        // make image file
        $imgFile = Image::make($image->getRealPath());

        // resize image instance
        $imgFile->resize($width, $height);


        // save image in desired location
        $imgFile->save(public_path('/images/') . $file['picture']);
        echo 'test';

        return back()->with('message', "Your passport size photo is ready")->with('out_file', $file['picture']);
    }
}
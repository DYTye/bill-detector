<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload (Request $request):string
    {

        $date = now()->format('Y-m-d');

        $exttension = $request->file('recipt')->getClientOriginalExtension();
        $filename = "upload_".$date. "." .$exttension;

        $path = $request -> file('recipt')-> storeAs('recipts',$filename);
        return $path;
    }
}

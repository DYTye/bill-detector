<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        return view('upload');
    }

    public function upload (Request $request):string
    {

        $date = now()->format('Y-m-d');

        $exttension = $request->file('recipt')->getClientOriginalExtension();
        $filename = "upload_".$date. "." .$exttension;

        $path = $request -> file('recipt')-> storeAs('recipts',$filename);
        return $path;
        
    }
}

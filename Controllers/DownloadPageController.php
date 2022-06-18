<?php

namespace App\Http\Controllers;


use App\Http\Controllers\FileMaster;




class DownloadPageController extends Controller
{
    public function retrieve($a){
       
        $filecont = file_get_contents(storage_path('app/public/'.$a));
        $filecont = str_replace("\r\n", ",", $filecont);
        $array = explode(",", $filecont);
        array_filter($array);
        return($array);
    }
   
    public function index(){
        $file = new FileMaster;
       $filename = $file->getFileName();     
        $array = $this->retrieve($filename);
        return view('Downloadpage',[
            'filename' => $filename,
            'namelist' => $array
        ]);
    }
}

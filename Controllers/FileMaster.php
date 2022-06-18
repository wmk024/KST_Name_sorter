<?php

namespace App\Http\Controllers;

class FileMaster extends Controller
{
    public $filename = 'sorted-names-list.txt';

  
    public function getFileName(){
        return $this->filename; 
    }
}
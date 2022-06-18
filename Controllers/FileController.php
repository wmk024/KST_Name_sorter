<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FileMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use  App\Http\Controllers\NamesMaster;
use App\Http\Controllers\SortController;

class FileController extends Controller
{
    public function seperate($names){
        $Seperated_Name=[];    
        for ($i=0; $i < count($names) ; $i++) { 
            $myStr  = $names[$i];
            $Arraynames = new NamesMaster;
            $Seperated = explode(' ',$myStr);
            $Arraynames->setLastName(array_pop($Seperated));
            $Arraynames->setFirstName(implode(" ", $Seperated));
           array_push($Seperated_Name, $Arraynames);
        }
        
        return $Seperated_Name;
    }
   
    
    public function read_file($file){
        $txt_file =fopen($file, 'r') ;
        $names= [];
        while ($line = fgets($txt_file)) {
            array_push($names,$line);
        }
        return $names;  
    }

    public function save_file($SortedName){
       $file = new FileMaster;
       $filename = $file->getFileName(); 

       $myfile = fopen($filename, "w");
       for ($i=0; $i < count($SortedName); $i++) { 
        fwrite($myfile, $SortedName[$i]);
       }
       fclose($myfile);
       File::move(public_path($filename), public_path('storage/'.$filename));
       return true;
    }

    public function execute(Request $request){
        $Unseperated_Namelist= $this->read_file($request->file('txt-File'));
        $Namelist= $this->seperate($Unseperated_Namelist);
        $sort = new SortController;
        $SortedName = $sort->sortName($Namelist);
        $this->save_file($SortedName);
       
        return redirect('/downloadpage');
     }
}

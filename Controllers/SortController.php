<?php

namespace App\Http\Controllers;

use Names;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function sortName($Namelist){
        $key_values = array_column($Namelist, 'lastname'); 
        array_multisort($key_values, SORT_ASC, $Namelist);
      
        $SortedName =[];
      foreach($Namelist as $Name){
        $fullname = $Name->getFullName();
        array_push($SortedName, $fullname);
      }
      return $SortedName;
      
    }
   
    
}

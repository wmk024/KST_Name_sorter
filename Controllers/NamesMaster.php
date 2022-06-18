<?php
namespace App\Http\Controllers;
class NamesMaster extends Controller
        {
            public $firstname;
            public $lastname;

            public function setFirstName($a){
                $this->firstname = $a;
            }
            public function setLastName($b){
                 $this->lastname = $b;
            }
            public function getFirstName(){
                return $this->firstname; 
            }
            public function getLastName(){
                return $this->lastname ;
            }
            public function getFullName(){

                return $this->firstname .' '.$this->lastname ;
            }
        }

<?php
namespace App\classes;

class Dprt_topdown{
 public $dprtments;

 public function getDprtwise(){
    return [ 
      0=> [
             
             "dept"=>"CSE",
             "dept_code"=>"c2"

      ],
      1=> [
       
        "dept"=>"English",
        "dept_code"=>"e1"
     ],
     
     2=> [
      
        "dept"=>"EEE",
        "dept_code"=>"e3"
     ],
     3=> [
      "dept"=>"BBA",
      "dept_code"=>"b1"
   ]

     ];
    }
}
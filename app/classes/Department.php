<?php
namespace App\classes;

class Department{
 public $departments;

 public $result=[];

 public function getDepartment(){
    return [ 
      0=> [
             "s_id"=>1,
             "dept"=>"CSE",
             "dept_code"=>"c2"

      ],
      1=> [
        "s_id"=>2,
        "dept"=>"English",
        "dept_code"=>"e1"
     ],
     2=> [
        "s_id"=>3,
        "dept"=>"CSE",
        "dept_code"=>"c2"
     ],
     3=> [
        "s_id"=>4,
        "dept"=>"EEE",
        "dept_code"=>"e3"
     ],
     4=> [
      "s_id"=>5,
      "dept"=>"BBA",
      "dept_code"=>"b1"
   ]

    ];
 } 
 public function getdeptByDetails($DetailsId){
   $this->departments= $this->getDepartment();

   foreach ($this->departments as $department){
       if ($department['s_id'] == $DetailsId){
           array_push($this->result,$department);
       }
   }
   return $this->result;

}

}
<?php
namespace App\classes;

class Subject{
 public $subjects;

 public $result=[];

 public function getSubject(){
    return [ 
      0=> [
             "s_id"=>1,
             "subject"=>"network",
             "subject_code"=>"405"

      ],
      1=> [
        "s_id"=>2,
        "subject"=>"english",
        "subject_code"=>"101"
     ],
     2=> [
        "s_id"=>3,
        "subject"=>"circuit",
        "subject_code"=>"305"
     ],
     3=> [
        "s_id"=>4,
        "subject"=>"SQA",
        "subject_code"=>"325"
     ],
     4=> [
      "s_id"=>5,
      "subject"=>"business",
      "subject_code"=>"150"
   ]
   

    ];
 } 
 public function getsubjectByDetails($DetailsId){
   $this->subjects= $this->getSubject();

   foreach ($this->subjects as $subject){
       if ($subject['s_id'] == $DetailsId){
           array_push($this->result,$subject);
       }
   }
   return $this->result;

}

}



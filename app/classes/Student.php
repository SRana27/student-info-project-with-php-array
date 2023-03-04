<?php
namespace App\classes;

class Student{
 public $students;
 public $student;
public $result=[];
public $deta; public function __construct(){


   $this->student = [ 
       "student_1"=>
         [
             "name" => "sohel",
         "s_id" => 1,
         "phone" =>[
          "phone1" =>  "017549863421",
          "phone2" =>  "016054875014" 
        ],
         "email" =>[
         "email1"=> "sohel@gmail.com",
         "email2"=> "rana@gmail.com",
         ],
          "image"=>"pic-1.jpg",
          "d_code"=>"c2"

      ],

      "student_2"=>
      [ 
         "name" => "rakib islam",
         "s_id" => 2,
         "phone" =>[
         "phone1" => "0175498634211",
             ],
         "email" =>[
                 "email1"=> "rakib@gmail.com",
                "email2"=> "r_isalm@gmail.com"
                 ],
       "image"=>"pic-2.jpg",
       "d_code"=>"e1"
    ],

   "student_3"=>
   [ "name" => "korim hasan",
   "s_id" => 3,
   "phone" =>[
    "phone1" =>  "018549863421",
    "phone2" =>  "014785254455" ,
    ],
    "email" =>[
        "email1"=> "korim@gmail.com",
        "email2"=> "k_hasan@gmail.com"
    ],
    "image"=>"pic-3.jpg", 
    "d_code"=>"c2"

    ],

    "student_4"=>
   [ 
    "name" => "sakib",
    "s_id" => 4,
    "phone" =>[
    "phone1" =>  "019549863421",
    "phone2" =>  "019585414525"
    ],
    "email" =>[
        "email1"=> "sakib@gmail.com",
    ],
    "image"=> "pic-6.jpg",
    "d_code"=>"e3"

],
"student_5"=>
 [  
        "name" => "farhana",
        "s_id" => 5,
        "phone" =>[
        "phone1" =>  "017549863421",
        "phone2" =>  "01875856988"
        ],
        "email" =>[
            "email1"=> "farhana@gmail.com",
            "email2"=> "f@gmail.com"
        ],
        "image"=> "pic-5.jpg",
        "d_code"=>"b1"
    
        ]

];


 }

 public function getAllStudent(){

    return $this->student;

     }

     public function getstudentByDetails($DetailsId){
        $this->students= $this->getAllStudent();
     
        foreach ($this->students as $student){
            if ($student['s_id'] == $DetailsId){
                array_push($this->result,$student);
            }
        }
        return $this->result;
     
     }

     public function getBydeprtmentwise($did){
        $this->students= $this->getAllStudent();

        foreach ($this->students as $student){
            if ($student['d_code'] == $did){
                array_push($this->result,$student);
            }
        }
        return $this->result;
    }
}
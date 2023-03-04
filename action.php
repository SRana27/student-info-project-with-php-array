<?php

require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Student;
use App\classes\Subject;
use App\classes\Department;
use App\classes\Dprt_topdown;


$department= new Dprt_topdown();
$getDprtwise=$department->getDprtwise();

if (isset($_GET['page'])){
    if($_GET['page']=='home'){
        include 'pages/home.php';
    }
    elseif($_GET['page']=='student_info'){

        $student=new Student();
        $student_info =$student->getAllStudent();
        include 'pages/student_info.php';
    }
    elseif($_GET['page']=='dept_wise'){
        $dprtment_code=$_GET['dprtment_code'];
        $student =new Student();    
        $getDepartmentwise=$student->getBydeprtmentwise($dprtment_code);
        include 'pages/dept_wise.php';
    }

    elseif($_GET['page']=='details'){

        $details = $_GET['details_id'];
         $student=new Student();
         $getstudentDetails = $student->getstudentByDetails($details);
        $subject = new Subject();
        $getsubjectdDetails = $subject->getsubjectByDetails($details);
         $department = new Department();
        $getdepartmentDetails=  $department->getdeptByDetails($details);
       include 'pages/details.php';
        
    }
    
    
  }
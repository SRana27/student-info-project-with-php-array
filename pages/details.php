<?php include 'header.php'?>
<section class="p-5">
     <div class="container">
         <div class="row">
             <div class="col-md-6 pt-5 m-auto">
                <div class="card">
                        <div class="card-header">
                         <h3 class="text-center"> Student Details</h3>
                        </div>
                       
                    <div class="card-body">
                      <table  class="table table-bordered table-hover">
                          <?php foreach ($getstudentDetails as $student) { ?>
                            
                              <div class="col-md-4 m-auto pb-2">
                               <img src="assets/img/<?php echo $student['image']; ?>" height="200px" width="200">
                             </div>
                              <tr>
                              <td>
                                 <b>Name:</b> </td>
                                 <td>  <?php echo $student['name'];?>
                          </td> 
                          </tr>
                                  <tr>
                                     <td>  
                                     <b> Email:</b>  </td>
                                     <td> <?php
                                         if(is_array($student['email'])){
                                             foreach ($student['email'] as $student_email){
                                              echo $student_email;
                                              echo '<br>';
                                             }
                                         }else {
                                             echo $student['email'];
                                         }
                                         ?> 
                                        </td> 
                                        <tr>
                                <tr>
                                <td>
                                    <b>
                                     Phone:</b></td> 
                                     <td>
                                        <?php
                                        if(is_array($student['phone'] )){

                                            foreach ($student['phone'] as $student_phone){
                                                echo $student_phone;
                                                echo '<br>';
                                            }
                                        }else {
                                            echo $student['phone'];
                                        }

                                        ?> 
                                    </td>
                                 <tr>

                         <?php } ?>  
                          
                                    
                         <?php foreach ($getsubjectdDetails as $subject) { ?>
                           <tr>
                            <td><b>
                           Subject:</b></td>
                           <td> <?php echo $subject['subject'];?>
                         </td>
                         </tr> 
                         <tr>
                            <td><b>
                           Subject Code:</b></td>
                           <td> <?php echo $subject['subject_code'];?>
                         </td>
                         </tr> 
                        <?php } ?>
                        
                         
                         <?php foreach ( $getdepartmentDetails as $department) { ?>
                           <tr>
                            <td>
                                <b>
                           Department:</b></td> 
                           <td>
                            <?php echo $department['dept'];?>
                         </td> 
                         </tr>
                         <tr>
                            <td>
                                <b>
                           Department Code:</b></td> 
                           <td>
                            <?php echo $department['dept_code'];?>
                         </td> 
                         </tr>
                        <?php } ?>
                         
                         </table>              
                    </div>   

                    
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'?>
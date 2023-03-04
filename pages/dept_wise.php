<?php include 'header.php'?>

<section class="p-100 h-100">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         <h3 class="text-center">Departmental Student</h3>
                     </div>
                     <div class="card-body">
                         <table class="table table-bordered table-hover">
                             <thead>
                               <tr class="text-center">
                                  
                                   <th>Name</th>
                                   <th>Eamil</th>
                                   <th> Phone</th>
                                   <th>Image</th>
                                   <th>Details</th>
                               </tr>
                             </thead>
                             <tbody>
                             <?php
                              foreach ( $getDepartmentwise as $student){?>
                                <tr class="text-center">
                                     <td><?php echo $student['name']; ?></td>
                                   
                                     <td>
                                         <?php
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
                                    <td><?php
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
                                    <td class="mt-2">
                                    <img src="assets/img/<?php echo $student['image']?>" height="75px" width="80px"
                                     alt=""> 
                                    </td>
                                    <td class="pt-4"><a href="action.php?page=details&&details_id=<?php echo $student['s_id']?>"class="btn btn-outline-primary"> Details </a>
                                </tr>
                             <?php } ?>
                             
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </section>


<?php include 'footer.php'?>
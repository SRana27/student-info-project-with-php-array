
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand"><img src="assets/img/ewu.png" class="pic" ></a>
        <ul class="navbar-nav ">
            <li>
                <a href="action.php?page=home" class="nav-link"> home</a>
            </li>
            <li>
                <a href="action.php?page=student_info" class="nav-link">Student_info</a>
            </li>
          
            <li class="dropdown">
                <a href=""class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Department</a>
                <ul class="dropdown-menu">
                <?php foreach ($getDprtwise as $dprt) {  ?>
                    <li>
                        <a href="action.php?page=dept_wise&&dprtment_code=<?php echo $dprt['dept_code'];?>" class="dropdown-item">
                            <?php echo $dprt['dept']?>
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            
                </ul>
            </li>
           

        </ul>
    </div>

</nav>

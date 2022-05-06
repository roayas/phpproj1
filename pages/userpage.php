<?php
session_start();
$admin = 'rooayaseen@gmail.com';
// $_SESSION['lastaLI']
// print_r($_SESSION['arr']);
// $_SESSION['fn'];
// $_SESSION['mobile'];
// $_SESSION['date'];
// $_SESSION['email'];
// $_SESSION['pass'];
// $_SESSION['date_create'];
if($_SESSION['email'] !== $admin ){
    echo '<style type="text/css">
    table {
        display: none;
    }
    </style>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userpage.css">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
    <div class="profile">
        <div class="overlay">
            <div class="about">
                <div id ='pic'></div>
            
               <h1>Welcome <?php echo $_SESSION['fn'] ;?></h1>
                <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Last Login</th>
            </tr>
        </thead>
        <tbody>
            <tr >
               
                <td><?php echo $_SESSION['fn'] ;?> </td>
                <td><?php echo $_SESSION['email'] ;?> </td><!--User Email-->
                <td><?php echo $_SESSION['pass'] ;?> </td> <!--User Password-->
                <td><?php echo $_SESSION['date_create'] ;?> </td> <!--User Date Create-->
                <td><?php echo $_SESSION['lastaLI'] ;?></td> <!--User Last Login Date-->
            </tr>
        </tbody>
    </table>
            </div>
            <ul class="social-icons">
                <li><a href="https://web.facebook.com/roaa.yaseen.9/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ro-a-yaseen-58076696/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/rooayaseen" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/roaa.yaseen.9/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
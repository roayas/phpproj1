<?php
session_start();
 

if (isset($_POST['submit'])){
    $Email =$_POST['email'];
    $Password= $_POST['Password'];
  //   foreach ($_SESSION["usersData"] as $key => $value) {
  //     // print_r($_SESSION["usersData"][count($_SESSION["usersData"])-1]);
  //     if($LoginEmail == $value["email"] && $LoginPassword == $value["password"]){
  //         $_SESSION["userEmail"]= $value["email"];
  //         $_SESSION["userName"]= $value["name"];
  //         $_SESSION["userMobile"]= $value["mobile"];
  //         $_SESSION["usersData"][$key]["Last-Login-Date"]= date("d-m-Y");
  //         $_SESSION["usersData"];
  //         header('Location: ../Welcome Page/index.php');
  //     }else if($LoginEmail == $value["email"] && $LoginPassword != $value["password"]){
  //         echo "<span style='color: red;'> The password is wrong </span>";
  //         break;
  //     }else if($value == $_SESSION["usersData"][count($_SESSION["usersData"])-1]){
  //         $notFound= "<span style='color: red;'> You are not registered </span>";
  //     }
  // }

  foreach ($_SESSION["usersData"] as $key => $value){
    if($Email== $value["email"]&& $Password== $value["password"]){
             $_SESSION["userEmail"]= $value["email"];
             $_SESSION["userName"]= $value["name"];
             $_SESSION["userMobile"]= $value["mobile"];
             $_SESSION["usersData"][$key]["Last-Login-Date"]= date("d-m-Y"); //Date log in
             $_SESSION["usersData"];
           
             
           header('location:userpage.php');
    }  else if ($Email !== $value["email"]){
      $wrong1= '<style type="text/css">
      #i11, #one1{
          display: inline;
      }
      </style>';

  } else if ($Password !== $value["password"]){
    $wrong2= '<style type="text/css">
        #i22, #two2{
            display: inline;
        }
        </style>';


}

  }




    



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="login.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  
  <title> LOG IN form</title>


  
</head>
<body>
<p id='logo'>ROA</p>
  <section id="intro">
    <div class="container">
      <div class="left-col">
        
        
      </div>
      <div class="right-col">
        
        <div class="form-container">
          <form  method="post">
            <h1>Login</h1>
            <div class="field-group">
          
            <div class="field-group">
              <label for="Email">Email Address</label><br>
              <input name='email' id="Email" value="" type="email"  required="true">
              <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i11'>
              <p class="error-text" id='one1'>Invalid email</p>
              <?php if(isset($wrong1)){echo $wrong1;}?>               
            </div>
            <div class="field-group">
              <label for="password">Password </label><br>
              <input name='Password' id="password" value="" type="password"  required="true">
              <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i22'>
              <p class="error-text" id='two2'>wrong password</p> 
              
              <?php if(isset($wrong2)){echo $wrong2;}?>              
            </div>
          
            <input type="submit" value='Login' name='submit' id='login'> 
            <p class="form-footer">By clicking the button, you are agreeing to our <span>Terms and Services</span></p>
          </form>
        </div>
        
      </div>
    </div>
  </section>

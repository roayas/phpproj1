<?php

session_start();

$arr= array('');

if (isset($_POST['submit'])){
$fname = $_POST['fname'];
// $checkFN= validateName($fname);
$mobile= $_POST['Mobile'];
// $checkMobile = validateMobile($mobile);
$date = $_POST['Date'];
// $checkdate=validatedate($date);
$email= $_POST['Email'];
// $checkEmaile= validateEmail($email);
$pass= $_POST['password'];
// $checkpass=checkPassword($pass);
$Confirm= $_POST['Confirm'];
// $checkco=checkcPass($pass,$Confirm);






///////////////////////////////////////////
// function validateName($a){
//     echo '<style type="text/css">
//     #i1, #one {
//         display: none;
//     }
//     </style>';
   $letters = "/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i";
   $aa= '/^([\w]{2,})+\s+([\w\s]{2,})+$/i';
    if (preg_match($aa,$fname)) {
        $checkFN= true;
       
        
    }
    else  {
        $checkFN= false;
        $b= '<style type="text/css">
        #i1, #one {
            display: inline;
        }
        </style>';
       
        
        
    }
// } 





// function validateMobile($a){
//     echo '<style type="text/css">
//     #i5, #five {
//         display: none;
//     }
//     </style>';
   $number = "/^\\(?([0-9]{3})\\)?[-.\\s]?([0-9]{3})[-.\\s]?([0-9]{4})?[-.\\s]?([0-9]{4})$/";
    if (preg_match($number,$mobile)) {
        $checkMobile= true;
      
       
        
    }
    else  {
        $c= '<style type="text/css">
        #i5, #five {
            display: inline;
        }
        </style>';
        $checkMobile= false;
        
        
        
    }
// } 

// function validatedate($a){
//     echo '<style type="text/css">
//     #i6, #six {
//         display: none;
//     }
//     </style>';

    
    if((floor((time() - strtotime($date)) / 31556926)) >16) {
        $checkdate= true;
      
       
      
    }else{
        $d= '<style type="text/css">
        #i6, #six {
            display: inline;
        }
        </style>';
        $checkdatee= false;
        
        
        
        
    }
// }


// function validateEmail($a){
//     echo '<style type="text/css">
//     #i7, #seven {
//         display: none;
//     }
//     </style>';
    $filter2= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";
    
    if (preg_match($filter2,$email)) {
        $checkEmaile= true;
       
      
    }else{
        $e= '<style type="text/css">
        #i7, #seven {
            display: inline;
        }
        </style>';
        $checkEmaile= false;
        
       
        
        
    }
// }





// function checkPassword($a) {
//     echo '<style type="text/css">
//     #i8, #eight {
//         display: none;
//     }
//     </style>';
    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=(.*[\d]){2,})[A-Za-z\d?]{8,32}$/";
     $num = "/[\d]{2,}/";
    $capital = "/[A-Z]/";
    $symboles = "/[#$@!%&*?]/";
    if (preg_match($regex,$pass)) { //To check from 2 passwords syntax
        
        $f= '<style type="text/css">
    #i8, #eight {
        display: inline;
    }
    </style>';
    $checkpass= false;
   

    }
    else if (!preg_match($capital,$pass)) { //To check from the first letter
        $f= '<style type="text/css">
        #i8, #eight2{
            display: inline;
        }
        </style>';
        
        $checkpass= false;
        
        
    }
    else if (!preg_match($num,$pass)) {
       
        $f= '<style type="text/css">
        #i8, #eight3{
            display: inline;
        }
        </style>';
        
        $checkpass= false;
        
        
    }
    else if (!preg_match($symboles ,$pass)) {
      
        $f= '<style type="text/css">
        #i8, #eight4{
            display: inline;
        }
        </style>';
        
        $checkpass= false;
       
        
    }
    else if (strpos($pass, ' ')) {
      
        $f= '<style type="text/css">
        #i8, #eight5{
            display: inline;
        }
        </style>';
        
        $checkpass= false;
       
       
    }else{
        $checkpass= true;
        
       
    }
// }




// function checkcPass($a,$b){
//     echo '<style type="text/css">
//     #i9, #nine{
//         display: none;
//     }
//     </style>';
    if ($pass != $Confirm) {
        $g= '<style type="text/css">
        #i9, #nine{
            display: inline;
        }
        </style>';
        
        $checkco= false;
        
        
    }else{
        $checkco= true;
        
        
       
    }
// }
if($checkFN && $checkMobile && $checkEmaile && $checkdate && $checkpass && $checkco ){

$_SESSION['fn']= $fname;
$_SESSION['mobile']= $mobile;
$_SESSION['date']= $date;
$_SESSION['email']= $email;
$_SESSION['pass']= $pass;
$_SESSION['date_create']=date("Y-m-d"); //Date Create
array_push($arr,$_SESSION['fn'],$_SESSION['mobile'],$_SESSION['date'],$_SESSION['email'],$_SESSION['pass'],$_SESSION['date_create']);
$_SESSION['arr']=$arr;
    header('location:login.php');
}
else {
   
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="signup.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  
  <title> sign up form</title>



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
          <h1>Sign Up</h1>
            <div class="field-group">
              <label for="first-name">Full Name</label>
              <input name='fname' id="first-name" type="text"  required="true">
              <img src="../img/icon-error (1).svg" class="error-icon" alt="" id="i1">
              <p class="error-text" id ='one'>the name should be like this: Joe Sam Mon Doe</p> 
              <?php if(isset($b)){echo $b;}?>             
            </div>
            <div class="field-group">
                <label for="Mobile">Mobile Numde</label>
                <input name='Mobile' id="Mobile" type="number"  required="true">
                <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i5'>
                <p class="error-text" id='five'>Mobile Numde must be 14 diget</p> 
                <?php if(isset($c)){echo $c;}?>              
              </div>
              <div class="field-group">
                <label for="Date"> Date of Birth</label>
                <input name='Date' id="Date" type="date"  required="true">
                <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i6'>
                <p class="error-text" id ='six'>age can not be under 16</p> 
                <?php if(isset($d)){echo $d;}?>              
              </div>
            <div class="field-group">
              <label for="Email">Email Address</label>
              <input name='Email' id="Email" value="" type="email"  required="true">
              <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i7'>
              <p class="error-text" id='seven'>Looks like this is not email</p>
              <?php if(isset($e)){echo $e;}?>               
            </div>
            <div class="field-group">
              <label for="password">Password </label>
              <input name='password' id="password" value="" type="password"  required="true">
              <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i8'>
              <p class="error-text" id='eight'>password syntax is Incorrect'</p> 
              <p class="error-text" id='eight2'>first letter must be capital</p>  
              <p class="error-text" id='eight3'>password must contain 2 numbers at least</p> 
              <p class="error-text" id='eight4'>password must contain  at least 1 special character</p> 
              <p class="error-text" id='eight5'>password can not contain a space</p> 
              <?php if(isset($f)){echo $f;}?>              
            </div>
            <div class="field-group">
                <label for="Confirm">Confirm Password</label>
                <input name='Confirm' id="Confirm" value="" type="password"  required="true">
                <img src="../img/icon-error (1).svg" class="error-icon" alt="" id='i9'>
                <p class="error-text" id='nine'>Password not matching</p> 
                <?php if(isset($g)){echo $g;}?>              
              </div>
            <input type="submit" value='Sign Up' name='submit' id = 'signup'> 
            <p class="form-footer">By clicking the button, you are agreeing to our <span>Terms and Services</span></p>
          </form>
        </div>
        
      </div>
    </div>
  </section>


</body>
</html>
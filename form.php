<?php include("connection.php")?>;

<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<meta name ="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Registration Form </title>


</head>
<body>
<div class="container">
  <form action="#" method="post">
    <div class ="title">
        Optima Registration
</div>

<div class="form">
    

       <div class ="input_field">
        <label>First Name</label>
        <input type ="text" class="input" name="Fname" required>
       </div>

       <div class ="input_field">
        <label>Last Name</label>
        <input type ="text" class="input" name="Lname" required>
       </div>

       <div class ="input_field">
        <label>Password</label>
        <input type ="password" class="input" name="Password" required>
       </div>

       <div class ="input_field">
        <label>Confirm Password</label>
        <input type ="password" class="input" name="Conpassword" required>
       </div>

       <div class ="input_field">
        <label>Gender</label>
        <div class="custom_select">
        <select name="Gender"  required >
             <option value="not selected">select</option>
             <option value="M">male</option>
             <option value="F">female</option>
        </select>
        </div>
       </div>

       <div class ="input_field">
        <label>phone</label>
        <input type ="text" class="input" name="Phone" required>
       </div>

      
       <div class ="input_field">
        <label>Email</label>
        <input type ="text" class="input" name="Email">
       </div>

     

       <div class ="input_field terms">
        <label class="check">
          <input type="checkbox" required>
          <span class="checkmark"></span>
        </label>
        <p>Agree with the terms and condition</p>
       </div>

        <div class ="input_field">
         <input type="submit" value="Register" class ="btn" name="register">
         <div>
         </div>
         </form>
     </div>
 </body> 

</html>




<?php

error_reporting(0);


    if ($_POST['register'])
    {


      $Fname          =  $_POST['Fname'];
      $Lname          =  $_POST['Lname'];
      $Password       =  $_POST['Password'];
      $Conpassword    =  $_POST['Conpassword'];
      $Gender         =  $_POST['Gender'];
      $Phone          =  $_POST['Phone'];
      $Email          =  $_POST['Email'];
      $Address        =  $_POST['Address'];

     $query  =  "INSERT INTO Registration_Details (Fname,Lname,Password,Conpassword,Gender,Phone,Email) VALUES
                                                  ('$Fname','$Lname','$Password','$Conpassword','$Gender','$Phone','$Email')";

       $data = mysqli_query($conn, $query);

       if($data)
       {
             echo "<script> alert ('registered Successfully...')</script>";
        }
        else

        {
            echo "failed to enter data";
        }

    }
?>





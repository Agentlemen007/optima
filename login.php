<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale">
         <link rel="stylesheet" type="text/css" href="login-style.css">

        <title>login</title>
    </head>
    <body>
        
        <div class="center">
            <h1>login</h1>
            <form action="#" method="POST" autocomplete="off">

          <div class ="form">
            <input type="text" class="textfield" placeholder ="username" name="username">
            <input type="password" class="textfield" placeholder ="password" name="password">
            <div class="forgetpass"><a href="#" class="link" onclick="message()"> forget password?</a></div>
            
             <input type="submit" name="login" value ="login" class="btn">
             <div class ="SignUp">New Member ?<a href="#" class="link"> signup Here</a></div>
</div>
</div>
</form>

<script>
    function message()
    {
        alert("please remid your password")
    }


</script>
    </body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
       $query="SELECT * FROM Registration_Details WHERE Email = '$username' && Password= '$password'  ";
   $data= mysqli_query($conn, $query);
    $total=mysqli_num_rows($data);
   // echo $total;
   if($total==1)
   {    
      $_SESSION['user_name'] =$username;
       echo  header("location: display.php");
   }
   else{

     echo  "invalid password";
   }
}




?>
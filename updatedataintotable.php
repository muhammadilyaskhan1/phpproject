 <?php
 include('loginandlogout using section part1.php');
$rollno=$_GET['rollno'];
$sql="SELECT * FROM `student` WHERE rollno='$rollno'";

$num=mysqli_query($conn,$sql);
$result=mysqli_num_rows($num);
      $data=mysqli_fetch_assoc($num);



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login and and logout usingphp.css">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
    <form action="" method="post" class="form"> 
    username <input type="text" name="username"value="<?php echo $data['username']?>">   
    password <input type="password" name="password" id="psw1" value="<?php echo $data['password']?>"> 
  <button name="update" >update</button>
  <input type="checkbox" name=""  class="checkbox" id="checkbox"  onclick="togglepassword()">  show password

  </form>
 
  </div>
  <style>
 
</style>
<script>
    
function togglepassword() {
    if(psw1.type==="password"){
        psw1.type="text"
    }
else{
    psw1.type="password"
}

}




</script>
 


</body>
</html>
<?php
 

if(isset($_POST['update'])){
       
    $username=$_POST['username'];
    $password=$_POST['password'];
   $sql="UPDATE `student` SET `username`='$username',`password`='$password' WHERE rollno='$rollno'";
     
     $num=mysqli_query($conn,$sql);
 if($num>0){
     echo"<h1> values update into database</h1>";

 }
 else{
     echo" <h1>values  cannot updates into database</h1>";
    
 }
}











?>
 
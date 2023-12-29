 
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
    username <input type="text" name="username">   
    password<input type="password" name="password" id="psw1"> 
  <button name="submit" >submit</button>
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
$servername="localhost";
$username="root";
$password="";
$databasename="school";

$conn=mysqli_connect("localhost","root","","school");
if(!$conn){
    die("database connect connected");
}
else{
    echo("database can be connected");

 
    if(isset($_POST['submit'])){
       
        $username=$_POST['username'];
        $password=$_POST['password'];
         $sql=" INSERT INTO `student`(`username`, `password`) VALUES ('$username','$password')";
         
         $num=mysqli_query($conn,$sql);
     if($num>0){
         echo" values insert into database";
 
     }
     else{
         echo" values cannot insert into database";
        
     }
    }
 










}



?>















 


 
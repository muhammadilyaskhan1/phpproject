<?php

include('loginandlogout using section part1.php');

  
$sql="SELECT * FROM `student`";
      
$num=mysqli_query($conn,$sql);
      $result=mysqli_num_rows($num);
      $data=mysqli_fetch_assoc($num);
  

?>
<div id="tabled"> 
<table id="displaydata" border="8" width="800px";height="500px"; > 
<tr>
     <th>rollno</th>
<th>username</th>
<th>password</th>
<th colspan="2" width="30%">opration</th>

</tr>
</div>
<style>
#displaydata{
background-color:yellow;
 
 
}
 #tabled{
    
    display:flex;
    justify-content: center;
    align-item:center;
    
     color:blue;
     font-size:20px;
}

</style>
<?php
 if($data!=0){
     ?>
 
<?php
while($data=mysqli_fetch_assoc($num)){
    echo"<tr>
  <td>".$data['rollno']."</td>
    <td>".$data['username']."</td>
    <td> ".$data['password']."</td>
    <td> <a href='updatedataintotable.php?rollno=$data[rollno]'><button name='update'>update</button></a>
    <td> <a href='deletedataintotable.php?rollno=$data[rollno]'><button name='delete'>delete</button></a>
    </tr>";
}
}
?>


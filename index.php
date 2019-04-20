
<!DOCTYPE html>
<html>
<body>

<?php
   
    
    if(isset($_POST['submit'])){
       
       if(empty($_POST['username'])){
           echo "<p style='color:red'>Field must not be empty</p>";
       }
        else if(strlen($_POST['username'])<5||  strlen($_POST['username'])>10){
            echo "<p style='color:red'>Field must be between 6 and 10 char</p>";
        }
        else{
            echo "Welcome:".$_POST['username'];
        }
    }

?>


<form action="" method="POST" enctype="multipart/form-data"> 
  <input type="text" name="username" placeholder="type"><br>   
    <input type="submit" name="submit" value="GO">
</form>



</body>
</html>
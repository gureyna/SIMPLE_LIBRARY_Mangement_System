<?php
   include("database/connection.php");

?>
<?php
     if (isset($_GET['id'])){
         $id=$_GET['id'];
         $sql = "DELETE FROM std_reg WHERE std_Id = $id";

         $result=mysqli_query($mycon,$sql);
         header("location:showStd.php");
     }

   

?>
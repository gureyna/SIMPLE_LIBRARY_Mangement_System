<?php
   include("database/connection.php");

?>
<?php

   if(isset ($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM books_reg WHERE book_id=$id";
    $result=mysqli_query($mycon,$sql);
    if($result){
        header("Location:showBooks.php?message=detetedBooks");
        
    }
  
   }


?>
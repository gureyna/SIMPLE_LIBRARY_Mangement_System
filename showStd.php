<?php 
   include("database/connection.php")
?> 

<?php
   $sql="SELECT * FROM std_reg";
   $result=mysqli_query($mycon,$sql); 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show students</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
        <div class="nav_head">
                <h1>logo</h1>      
            <nav>    
              <a href="index.php">Home</a>           
              <a href="Addstd.php">AddStudent</a>
              <a href="showStd.php">ShowStudent</a> 
              <a href="addBooks.php">AddBooks</a> 
              <a href="showBooks.php">ShowBooks</a> 
            </nav>
        </div>
    </header>
  <h1 class="bg-primary text-center text-light p-3">SHOW STUDENTS</h1>  <br>
    <div class="container">


    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Faculty</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result)):
      
    
    ?>
    <tr>
      <th><?php echo $row['std_Id'] ?></th>
      <td><?php echo $row['std_name'] ?></td>
      <td><?php echo $row['std_class'] ?></td>
      <td><?php echo $row['std_Faculty'] ?></td>
      <td><?php echo $row['std_gender']?></td>
      <td>
        <a href="edit_std.php ?id=<?php echo $row['std_Id'] ?> " class="btn btn-warning btn-sm">Update</a>
        <a href="delete_std.php ?id=<?php echo $row['std_Id']?> " class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    <tr>
      <?php 
      endwhile
      ?>
  </tbody>
</table>

   
      
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
   include("database/connection.php");
   
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add students</title>
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

  <h1 class="bg-primary text-center text-light p-3">ADD STUDENTS</h1>  <br>
    <div class="container">
      
      <form action="Addstd.php" method="post">
        <div class="formgroup"> 
          <label for="name" class= "mb-2">Name</label>
          <input type="text" class="form-control" id="name" name="name" required> <br>
        </div>
       
        <div class="formgroup"> 
          <label for="class" class= "mb-2">Class</label>
          <input type="text" class="form-control" id="class" name="class" required> <br>
        </div>

        <div class="formgroup"> 
          <label for="faculty" class= "mb-2">faculty</label>
          <input type="faculty" class="form-control" id="faculty" name="faculty" required> <br>
        </div>
        
        <div class="formgroup
      <div class="formgroup"> 
        <label for="gender" class= "mb-2">Gender</label>
        <input type="gender" class="form-control" id="gender" name="gender"  placeholder="write gender" required> <br>
      </div>
      <button type="submit" class="btn btn-success mt-3 mb-4" name="save">AddStudent</button>
      </form>

      <?php 
      if(isset($_POST['save'])){
      $name= $_POST['name'];
      $class= $_POST['class'];
      $faculty= $_POST['faculty'];
      $gender= $_POST['gender'];

    

      $sql = "INSERT INTO std_reg( std_name , std_class , std_Faculty ,std_gender) VALUES
      ('$name','$class','$faculty','$gender')";

      $insert = mysqli_query($mycon, $sql);

      if($insert){
        header("Location:showStd.php?message=success");
      }
        else{
          header("Location:AddStd.php?message=error");
        }
      
      }

      ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
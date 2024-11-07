<?php
   include("database/connection.php");
?>
<?php 
  if (isset($_GET['id'])){
  $id = $_GET['id'];
  
  $sql = "SELECT * FROM std_reg WHERE std_Id  = $id";

  $result = mysqli_query($mycon, $sql);
  $row = mysqli_fetch_assoc($result);
  $id = $row['std_Id'];
  $stdname = $row['std_name'];
  $stdclass = $row['std_class'];
  $stdFaculty  = $row['std_Faculty'];
  $stdgender  = $row['std_gender'];
  }
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

  <h1 class="bg-primary text-center text-light p-3">EDIT STUDENTS</h1>  <br>
    <div class="container">
      
      <form action="edit_std.php" method="post">
        <div class="formgroup"> 
          <label for="name" class= "mb-2">Name</label>
          <input type="text" class="form-control" id="name" name="name" value = " <?php  echo   $stdname ?>" required> <br>
        </div>
       
        <div class="formgroup"> 
          <label for="class" class= "mb-2">Class</label>
          <input type="text" class="form-control" id="class" name="class" value = " <?php  echo   $stdclass ?>" required> <br>
        </div>

        <div class="formgroup"> 
          <label for="faculty" class= "mb-2">faculty</label>
          <input type="faculty" class="form-control" id="faculty" name="faculty"
          value = " <?php  echo $stdFaculty ?>" required> <br>
        </div>
        
        <div class="formgroup
      <div class="formgroup"> 
        <label for="gender" class= "mb-2">Gender</label>
        <input type="gender" class="form-control" id="gender" name="gender"  placeholder="write gender" 
        value = "<?php  echo   $stdgender ?>" required>
        <br>
        <input type="hidden" name="std_Id" value="<?php echo $id; ?>">

      </div>
      <button type="submit" class="btn btn-warning mt-3 " name="update">UPPDATE Student</button>
      </form>

      <?php 
      if(isset($_POST['update'])){
      $id = $_POST['std_Id'];
      $name= $_POST['name'];
      $class= $_POST['class'];
      $faculty= $_POST['faculty'];
      $gender= $_POST['gender'];

    
      
      $sql = "UPDATE  std_reg SET
      std_name = '$name',std_class = '$class',std_Faculty = '$faculty', std_gender = '$gender' WHERE std_Id = $id";
      $insert = mysqli_query($mycon, $sql);

      if($insert){
        header("Location:showStd.php?message=success");
      }
        else{
          header("Location:edit_std.php?message=error");
        }
      
      }

      ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
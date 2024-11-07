<?php
   include("database/connection.php");
?>
<?php 
  if (isset($_GET['id'])){
  $id = $_GET['id'];
  
  $sql = "SELECT * FROM books_reg WHERE book_id = $id";

  $result = mysqli_query($mycon, $sql);
  $row = mysqli_fetch_assoc($result);
  $id = $row['book_id'];
  $subject = $row['subject'];
  $title = $row['title'];
  $Language = $row['language'];
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Books</title>
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
  <h1 class="bg-primary text-center text-light p-3">UBDATE BOOKS</h1>  <br>
    <div class="container">
      <form action="edit_books.php" method="post">
        <div class="formgroup"> 
          <label for="subject" class= "mb-2">subject</label>
          <input type="text" class="form-control" id="subject" name="subject"
          value="<?php echo $subject ?>" required> <br>
        </div>
       
        <div class="formgroup"> 
          <label for="title" class= "mb-2">title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>" required> <br>
        </div>

        <div class="formgroup"> 
          <label for="Language" class= "mb-2">Language</label>
          <input type="text" class="form-control" id="Language" name="Language" value=" <?php  echo $Language ?>" required> <br>

          <input type="hidden" name="book_id" value="<?php echo $id; ?>">

        </div>
        <button type="submit" class="btn btn-warning mt-3 " name="Update">Update Books</button>
</form>
    <?php 
       if(isset($_POST['Update'])){
        $id = $_POST['book_id'];
        $subject = $_POST['subject'];
        $title = $_POST['title'];
        $Language = $_POST['Language'];

        $sql = "UPDATE  books_reg SET 
        subject = '$subject', title = '$title', language = '$Language' WHERE book_id = $id";
        
        $result = mysqli_query($mycon, $sql);

        if($result){
          header("Location:showBooks.php?message=success");
          }
          else{
            header("Location:addBooks.php?message=error");
  
        }


       }
    ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
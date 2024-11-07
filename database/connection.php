<?php 
  $server="localhost";
  $user="root";
  $password="";
  $dbname="librarydb";
  
  $mycon = mysqli_connect($server,$user,$password,$dbname);
  
  if (!$mycon) {
    die("Connection failed: ". mysqli_connect_error());
  }
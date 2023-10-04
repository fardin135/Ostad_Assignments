<?php
// connection
$databasename = 'cse102spring2022';
$tablename = $databasename ;
$link = mysqli_connect('localhost','root','', $tablename);
$link = mysqli_connect('localhost','root','','cse102spring2022');
// if($link){
// echo "Connected!";
// }
if (isset($_REQUEST['submitbtn'])) {
// code...
$student_id = $_REQUEST['student_id'];
 $student_name = $_REQUEST['student_name'];
 $cgpa = $_REQUEST['cgpa'];
 $department = $_REQUEST['department'];

if (!empty($student_id) && !empty($student_name) && !empty($cgpa) && !empty($department)) {
    // code...
    $query = "INSERT INTO $tablename(student_id,student_name,cgpa,department)
        VALUE ('$student_id','$student_name','$cgpa','$department')";
        $createquery = mysqli_query($link,$query);

        if ($createquery) {
        // code...
        echo "data inserted successfully!";
      }



  }
  }
 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Den CRUDerna</title>
  </head>
  <body>
<div class="d-flex shadow m-5 p-3">
<form class="form-control d-flex justify-content-around" action="" method="post">
  <input class="form-control" type="text" name="student_id" placeholder="Student ID">
  <input class="form-control" type="text" name="student_name" placeholder="Student Name">
  <input class="form-control" type="text" name="cgpa" placeholder="CGPA">
  <input class="form-control" type="text" name="department" placeholder="Department">
  <input class="form-control btn btn-primary" type="submit" name="submitbtn" placeholder="Submit">

  <!-- <input type="text" name="student_name" value=""> -->
  <!-- <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="text" name="" value=""> -->

</form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

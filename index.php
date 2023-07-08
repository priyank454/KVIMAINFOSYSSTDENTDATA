<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>INFOSYS DATA STUDENT</title>
</head>
<body>


<?php

include('11database.php');




?>

<img src="INFOSYSimg1.jpeg" height="200px" width="1600px">

<?php

if(isset($_POST['done'])){

    $fullname= $_POST['fullname'];
    $class=$_POST['class'];
    $group=$_POST['group'];
    $attendence=$_POST['attendence'];
    $homework=$_POST['homework'];
    $revisionwork=$_POST['revisionwork'];
    $index=$_POST['index'];
    $email=$_POST['email'];



    $qry="INSERT INTO `studentinformation`(`id`, `fullname`, `class`, `group`, `attendence`, `homework`, `revisionwork`,`index`,`email`) VALUES (NULL,'$fullname','$class','$group','$attendence','$homework','$revisionwork','$index','$email')";

    $run=mysqli_query($conn,$qry);
    if($run == true){

        ?>
        <script>
            alert("YOUR DETAIL SUBITTED SUCCESFULLY");



        </script>
        <?php





    }





};
?>




<form action="index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputfullname">FULL-Name</label>
    <input type="text" name="fullname" class="form-control" id="exampleInputfullname" aria-describedby="emailHelp" placeholder="Enter Full-Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleInputclass">Class</label>
    <input type="text" name="class" class="form-control" id="exampleInputclass" aria-describedby="emailHelp" placeholder="Enter Class">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleInputgroup">Group</label>
    <input type="text" name="group" class="form-control" id="exampleInputgroup" aria-describedby="emailHelp" placeholder="Enter Group">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleInputattendence">Attendence</label>
    <input type="text" name="attendence" class="form-control" id="exampleattendence" aria-describedby="emailHelp" placeholder="Enter Attendence">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>


  <div class="form-group">
    <label for="exampleInputhomework">Home Work</label>
    <input type="text" name="homework" class="form-control" id="exampleInputhomework" aria-describedby="emailHelp" placeholder="Enter Home Work">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleInputrevisionwork">Revision Work</label>
    <input type="text" name="revisionwork" class="form-control" id="exampleInputrevisionwork" aria-describedby="emailHelp" placeholder="Enter Revision Work">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleInputindex">Index</label>
    <input type="text" name="index" class="form-control" id="exampleInputindex" aria-describedby="emailHelp" placeholder="Enter Index">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputemail">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Enter Email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  

  <button type="submit"  name="done" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>
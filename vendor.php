<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>vendor list</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3><span>Vendor List</span></h3>

      <a href="catering.html" class="btn">Catering</a>
      <a href="florist.html" class="btn">Florist</a>
      <a href="lightening.html" class="btn">Lightening</a>
      <a href="decoration.html" class="btn">Decoration</a>
   </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Image Slider</title>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    /* .main2{
      width: 100%;
      height: 20%;
      background-color: green;
      position: relative;
    } */
    .main{
      width: 100%;
      display: block;
      height:auto;
      position: absolute;
    }
    /* .main1{
      width: 100%;
      height: 50px;
      position: relative;
    } */
  </style>
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
</head>

<body>
  <div class="main">
 <div class="main1">
 <?php include 'navbar.php';?>
 </div>
 <div class="main2">
 <?php include 'slider.php';?>
  </div>
  <div class="main2">
 <?php include 'rekha.php';?>
  </div>
 
  </div>
</body>

</html>

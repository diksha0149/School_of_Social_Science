<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>School of Social Science</title>
  <style>
    .main{
      width: 100%;
      display: block;
      height:auto;
      object-fit: cover;
      position: relative;
    }
    /* .main2, .main3{
      /* position: relative; 
      display: inline-flex;
      align-items: center;
      justify-content: center;
      /* width: 100%;
      height: 200px;
      border: 2px solid black; 
      /* margin: 10px; 
    } */
    @media (max-width: 1080px){
      .main{
        display: block;
        position: relative;
        /* margin-top: 100px; */
      }
}
/* .main4{
  height: auto;
  border: 2px solid black;
  position: relative;
  width: 100%;
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
  <div class="main3">
  <?php include 'rekha.php';?>
  </div>
  <div class="main4">
  <?php include 'navbar_highlights.php';?>
  </div>
  <div class="main5">
  <?php include 'highlights.php';?>
  </div>
  <div class="main6">
  <?php include 'footer.php';?>
  </div>
  </div>
</body>

</html>

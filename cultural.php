<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        .wraper{
            width:100%;
            height: auto;
            display: grid;
            grid-template-columns: auto auto auto auto;
        }
        .box1{
            width:90%;
            height:40vh;
            border:2px solid black;
            margin: 10px;
        }
        .box1 img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
        h1{
            text-align: center;
            margin:10px;
            font-size:50px;
        }
        h2{
            text-align: center;
            margin: 10px;
        }
        @media screen and (max-width: 1400px) {
            .wraper{
            grid-template-columns: auto auto auto ;
            }
            h1{
            margin-top:0px;
           }
        
        }
        @media screen and (max-width: 1200px) {
            h1{
            margin-top:70px;
           }
        
        }
        @media screen and (max-width: 800px) {
            .wraper{
            grid-template-columns: auto auto  ;
            }
            h1{
            margin-top:100px;
        }
        }
        @media screen and (max-width: 600px) {
            .wraper{
            grid-template-columns: auto  ;
        }
        h1{
            margin-top:100px;
        }
       }
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<h1>Cultural Events</h1>
<!-- <h2>Teacher's Day</h2> -->

  <div class="wraper">
  <div class="box1"><img src="cultural/16.jpg" alt=""></div>
     <div class="box1"><img src="cultural/17.jpg" alt=""></div>
     <div class="box1"><img src="cultural/18.jpg" alt=""></div>
     <div class="box1"><img src="cultural/19.jpg" alt=""></div>
     <div class="box1"><img src="cultural/20.jpg" alt=""></div>
     <div class="box1"><img src="cultural/21.jpg" alt=""></div>
     <div class="box1"><img src="cultural/22.jpg" alt=""></div>
     <div class="box1"><img src="images/teachersday1.jpg" alt=""></div>
     <div class="box1"><img src="images/teachersday3.jpg" alt=""></div>
     <div class="box1"><img src="images/teachers.jpg" alt=""></div>
     <div class="box1"><img src="images/alumni.jpg" alt=""></div>
     <div class="box1"><img src="images/alumni1.jpg" alt=""></div>
     <div class="box1"><img src="images/alumni2.jpg" alt=""></div>
     <div class="box1"><img src="cultural/1.jpg" alt=""></div>
     <div class="box1"><img src="cultural/2.jpg" alt=""></div>
     <div class="box1"><img src="cultural/3.jpg" alt=""></div>
     <div class="box1"><img src="cultural/4.jpg" alt=""></div>
     <div class="box1"><img src="cultural/5.jpg" alt=""></div>
     <div class="box1"><img src="cultural/6.jpg" alt=""></div>
     <div class="box1"><img src="cultural/7.jpg" alt=""></div>
     <div class="box1"><img src="cultural/8.jpg" alt=""></div>
     <div class="box1"><img src="cultural/9.jpg" alt=""></div>
     <div class="box1"><img src="cultural/10.jpg" alt=""></div>
     <div class="box1"><img src="cultural/11.jpg" alt=""></div>
     <div class="box1"><img src="cultural/12.jpg" alt=""></div>
     <div class="box1"><img src="cultural/13.jpg" alt=""></div>
     <div class="box1"><img src="cultural/14.jpg" alt=""></div>
     <div class="box1"><img src="cultural/15.jpg" alt=""></div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
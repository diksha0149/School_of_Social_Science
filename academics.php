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
<h1>Academic Events</h1>
<h2>National Conference on "Gender Equity in India"</h2>

  <div class="wraper">
    
     <div class="box1"><img src="images/gender.jpg" alt=""></div>
     <div class="box1"><img src="images/gender2.jpg" alt=""></div>
     <div class="box1"><img src="images/gender1.jpg" alt=""></div>

  </div>

  <h2>Issues on Sustainable Agriculture Development</h2>

  <div class="wraper">
    
     <div class="box1"><img src="images/sustainable.jpg" alt=""></div>
     <div class="box1"><img src="images/sustainable1.jpg" alt=""></div>
     <div class="box1"><img src="images/sustainable2.png" alt=""></div>

  </div>

  <h2>Workshop on Research Methodology</h2>

<div class="wraper">
  
   <div class="box1"><img src="images/event_research.jpg" alt=""></div>
   <div class="box1"><img src="images/event_research_methodology.jpg" alt=""></div>
   <div class="box1"><img src="images/event reserchm.jpg" alt=""></div>

</div>

</body>
</html>
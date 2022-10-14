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
<h1>Field Visit</h1>
  <div class="wraper">
    
     <div class="box1"><img src="field_visit/1.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/2.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/3.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/4.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/5.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/6.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/7.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/8.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/9.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/10.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/11.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/12.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/13.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/14.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/15.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/16.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/17.jpg" alt=""></div>
     <div class="box1"><img src="field_visit/18.jpg" alt=""></div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
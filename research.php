<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <style>
        .feed{
            width: 100%;
            /* top: 100px; */
           position: relative;
        }
        .feedback_head{
            font-size: 40px;
            font-weight: 900;
            text-align: center;
        }
        .feed h3{
            width: auto;
            height: 50%;
            position: relative;
            margin: 10px 10px 10px 10px;
            padding: 10px;
            background: #eee;
            box-shadow: 0 8px 8px -4px grey;
            align-items: center;
            justify-content: center;
            /* border: 2px solid red; */
        }
        .feed a{
            text-decoration: none;
        }
        .foot{
       position: relative;
            bottom: 0;
            left: 0;
       }
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<div class="feed">
    <div class="feedback_head">Research</div>
<h3>
<a href="Notice/Research_Paper_Publication.pdf" style="color:black ;" >1. Research Paper Publication</a>
</h3>
<h3>
<a href="Notice/Ph.D._Awarded_2014-18.docx" style="color:black;">2. Ph.D Scholars</a>
</h3>
  
 <h3>
<a href="Notice/Research_Scholars_-2014-18.pdf" style="color:black;">3. Research Scholars</a>
</h3>

</div>
<div class="foot">
  <?php include 'footer.php';?>
    </div>
</body>
</html>
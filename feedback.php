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
            top: 100px;
           position: absolute;
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
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<div class="feed">
    <div class="feedback_head">Feedback Analysis</div>
<h3>
<a href="Notice/feed_parent.pdf" style="color:black ;" >1. Parent's Feedback</a>
</h3>
<h3>
<a href="Notice/feed_student.pdf" style="color:black;">2. Student's Feedback</a>
</h3>
  
 <h3>
<a href="Notice/feed_teacher.pdf" style="color:black;">3. Teachers's Feedback</a>
</h3>

<h3> 
<a href="Notice/feed_alumini.pdf" style="color:black;">4. Alumini's Feedback</a>
</h3>

</div>
<?php include 'footer.php';?>
</body>
</html>
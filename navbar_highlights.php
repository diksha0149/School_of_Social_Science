 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika&family=Signika+Negative&display=swap" rel="stylesheet">
    <style>
        .out{
            width: 100%;
            height: auto;
            display: grid;
            margin: 10px auto;
            align-items: center;
            position: relative;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            font-family: 'Signika Negative', sans-serif;
        }
        .in{
            border-radius: 10px;
            box-shadow: 0 6px 13px rgb(0 0 0 / 0.2);
            height: 200px;
            margin: 10px;
            padding: 30px 20px 20px 20px;
            text-align: center;
            font-size:40px;
            color: white;
        }
        .in a{
            margin: auto;
            color: white;
            text-decoration: none;
        }
        .in:hover{
            transform: scale(1.1);
        }

        @media screen and (max-width: 1000px) {
            .out{
            grid-template-columns: auto auto ;
            }
}
@media screen and (max-width: 500px) {
            .out{
            grid-template-columns: auto;
            }
}
.cc{
    color: white;
}
.a1{
    background-image: linear-gradient(#941f29,rgb(34, 17, 17));
    opacity: 1;
}
.a2{
    background-image: linear-gradient(#883e0c,rgb(34, 17, 17));
    opacity: 1;
}
    </style>
</head>
<body>
<div class="out">
    <div class="in a1">
    <a href="syllabus.php"><i class="fas fa-book" aria-hidden="true"></i>
   <div class="cc">Syllabus</div>
    </a>
    </div>
    <div class="in a2">
    <a href="Field_visit.php"><i class="fa fa-users" aria-hidden="true"></i>
    <div class="cc">Field Visits</div>
    </a>
    </div>
    <div class="in a1">
    <a href="Notice/Placement.pdf"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
    <div class="cc">Placement</div>
    </a>    
    </div>
    <div class="in a2">
    <a href="activities.php"><i class="fa fa-tasks" aria-hidden="true"></i>
    <div class="cc">Activities</div>
    </a>
    </div>
</div>
</body>
</html>



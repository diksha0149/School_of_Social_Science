<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <style>
        .news_outer{
            /* margin: 10px; */
            border: 10px;
            top: 20px;
            box-shadow: 0 6px 13px rgb(0 0 0 / 0.2);
            width: 80%;
            margin-right:auto;
            margin-left:auto;
            overflow: hidden;
            align-items: center;
            text-align: center;
            height: 200px;
            animation: marquee 5s linear infinite;
        }
        .news{
            width:100%;
            direction:up;
            margin: 10px auto;
            height: 500px;
            animation: marquee 5s linear infinite;
        }
        .news_head{
            align-items: center;
            text-align: center;
            font-size: 20px;
            border: 2px solig green;
            background : green;
            padding: 10px;
            color: white;
        }
        .news_outer{
            /* display: inline; */
            
            
        }
        ul{
            list-style-type: none;
            margin: 10px; 
            text-align : center; 
            animation: marquee 5s linear infinite;
        }
        .news_outer a{
            color: brown;
        }
        </style>
</head>
<body>
    <div class="news_outer">
    <div class="news_head">Latest News</div>
    <marquee class="news" onmouseover="this.stop();" onmouseout="this.start();" direction="up">
    <ul>
     <li><a href="Notice/VISITING-FACULTY-%20POSITIONS-SOSS.pdf">Visiting Faculty Required for session 2022-23</a></li>
     <li><a href="B.A.-SCHEME-SOCIOLOGY-PSYCHOLOGY-GEOGRAPHY-22-4-22.pdf">B.A. SCHEME SOCIOLOGY, PSYCHOLOGY, GEOGRAPHY</a></li>
     <li><a href="Notice/Scheme-of-MA-Clinical-Psychology-20-22_9-06-22.pdf">Scheme of MA Clinical Psychology</a></li>
     <li><a href="Notice/Scheme-of-MA-Political-Science_20-22_9-6-22.pdf">Scheme of MA Political Science</a></li>
     <li><a href="Notice/Scheme-of-MA-Sociology-20-22_9-6-22.pdf">Scheme of MA Sociology</a></li>
     <li><a href="Notice/Scheme-of-MBA-Pub-Ad-20-22_9-6-22.pdf">Scheme of MBA Pub Ad</a></li>
     <li><a href="Notice/Scheme-of-MBA-RD-20-22_9-6-22.pdf">Scheme of MBA RD</a></li>
     <li><a href="Notice/Scheme-of-MSW%20_20-22__9-6-22.pdf">Scheme of MSW</a></li>
     <li><a href="Notice/fee-chaalan-1.pdf">Fees Challan Form - 2021</a></li>
     <li><a href="Notice/challan.mp4">Fees Challan Video - 2021</a></li>
     <li><a href="Notice/Fee-Details-Diploma-Courses-2021.pdf">Fees Structure for Diploma Courses Courses for Session 2020-21</a></li>
     <li><a href="Notice/ProgrammeOutcome.pdf"> Programme Outcomes</a></li>
    </ul>
    </marquee>
    </div>
</body>
</html>
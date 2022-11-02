<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto slideshow</title>
    <!--Stylesheet-->
    <!-- <link rel="stylesheet" href="slider.css"> -->
    <style>
        .box1{
            width: 60%;
            height: 400px;
            position: relative;
            border: 20px solid #fffffff;
            /* border-radius: 8px;
            box-shadow: 10px 25px 28px rgba(0,0,0,0.3); */
            overflow: hidden;
            margin-right:auto;
            margin-left:auto;
            /* margin: 10px auto; */
            border-radius: 8px;
        }
        .containerr{
            width: 100%;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            overflow: hidden;
            border: 20px solid black;
            border-radius: 8px;
            box-shadow: 10px 25px 30px rgba(30,30,200,0.3);
        }
        .wrapper{
            width: 100%;
            display: flex;
             border-radius: 8px black;
            box-shadow: 10px 25px 28px rgba(0,0,0,0.3);
            animation: slide 27s infinite;
        }

@keyframes slide{
    0%{
        transform: translateX(0);
    }
    10%{
        transform: translateX(0);
    }
    20%{
        transform: translateX(-100%);
    }
    25%{
        transform: translateX(-100%);
    }
    30%{
        transform: translateX(-200%);
    }
    35%{
        transform: translateX(-200%);
    }
    40%{
        transform: translateX(-300%);
    }
    45%{
        transform: translateX(-300%);
    }
    50%{
        transform: translateX(-400%);
    }
    55%{
        transform: translateX(-400%);
    }
    60%{
        transform: translateX(-500%);
    }
    65%{
        transform: translateX(-500%);
    }
    70%{
        transform: translateX(-600%);
    }
    75%{
        transform: translateX(-600%);
    }
    80%{
        transform: translateX(-700%);
    }
    85%{
        transform: translateX(-700%);
    }
    90%{
        transform: translateX(-800%);
    }
    100%{
        transform: translateX(-800%);
    }
    }
    img{
        width: 100%;
        height: 100px;
        object-fit: scale-down;
    }
        .outer-box{
            width: 100%;
            display: inline-flex;
        }
        .box2{
            width: 28%;
            height: 400px;
            position:  relative;
            /* margin: 10px auto; */
            border: 10px;
            box-shadow: 0 6px 13px rgb(0 0 0 / 0.2);
        
        }
        .news_head{
            text-align: center;
            font-size:30px;
            background: green;
        }
        .box2 .news{
            width: 100%;
            height: auto;
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
        @media screen and (max-width: 1000px) {
           .outer-box{
            display: block;
           }
           .box2{
            width: 100%;
            height: auto;
           }

        }
        .news a{
            color: black;
        }
    </style>
</head>
<body>
    <div class="outer-box">
        <div class="box1">
            <div class="containerr">
                <div class="wrapper">
                    <img src="Slider/15.png">
                    <img src="Slider/13.png">
                    <img src="Slider/12.png">
                    <img src="Slider/5.jpg">
                    <img src="Slider/7.jpg">
                    <img src="Slider/11.png">
                    <img src="Slider/4.jpg">
                    <img src="Slider/3.jpg">
                    <img src="Slider/14.png">
                </div>
            </div>
        </div>
        <div class="box2">
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
    </div>
</body>
</html>
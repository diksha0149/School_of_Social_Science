<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto slideshow</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="slider.css">
    <style>
        .container{
            width: 50%;
            height: 400px;
            position: relative;
            border: 20px solid #fffffff;
            border-radius: 8px;
            box-shadow: 10px 25px 28px rgba(0,0,0,0.3);
            overflow: hidden;
            margin-right:auto;
            margin-left:auto;
            border-radius: 8px;
        }
        .img-container{
            width: 80%;
            display: flex;
            animation: slide 18s infinite;
        }
        .img-container img{
            width:auto;
            height:400px;
            object-fit: contain;
        }
        @keyframes slide {
            0%{
                transform : translateX(0);
            }
            10%{
                transform: translateX(0);
            }
            20%{
                transform : translateX(-100%);
            }
            30%{
                transform : translateX(-200%);
            }
            40%{
                transform: translateX(-300%);
            }
            50%{
                transform: translateX(-400%);
            }
            60%{
                transform : translateX(-500%);
            }
            70%{
                transform: translateX(-600%);
            }
            80%{
                transform: translateX(-700%);
            }
            90%{
                transform: translateX(-800%);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="img-container">
            <img src="Slider/1.jpg">
            <img src="Slider/2.jpg">
            <img src="Slider/3.jpg">
            <img src="Slider/8.jpg">
            <img src="Slider/5.jpg">
            <img src="Slider/6.jpg">
            <img src="Slider/7.jpg">
            <img src="Slider/4.jpg">
            <img src="Slider/9.png">
        </div>
    </div>
</body>
</html>
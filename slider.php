<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider</title>
    <link rel="stylesheet" href="slider.css">
    <style>
    .cllg_logo img{
    width: 45%;
    height: 200px;
    position: absolute;
    margin-left: 5px; 
    margin-right: auto;
    top: 200px;
  }
      </style>
  </head>
  <body>
  <div class="cllg_logo">
          <img src="Images/head2.png" alt="">
  </div>
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="Images/alumni.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/alumni1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/alumni2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/6days.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

  </body>
</html>
      
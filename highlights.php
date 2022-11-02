<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <style>
        .outer_box{
            display: grid;
            grid-template-columns: auto auto auto auto;
            background: none;
            margin: 10px;
        }
.contain {
  position: relative;
  text-align: center;
  color: white;
  object-fit: fit;
 margin: 10px;
 padding: 5px;
 border: 2px solid black;
  /* height: fit-content; */
  height: auto;
  border: 10px;
    box-shadow: 0 6px 13px rgb(0 0 0 / 0.2);
}
.contain img{
    object-fit: contain;
    /* h: 100%; */
    height:200px;
    width:auto;
}
.centered {
  color: black;
  position: relative;
  bottom: 0px;
  font-weight: 900;
}
.contain:hover{
    transform: scale(1.1);
}
.contain a{
  text-decoration: none;
}
@media screen and (max-width: 700px) {
            .outer_box{
            grid-template-columns: auto auto;
            }
}
@media screen and (max-width: 500px) {
            .outer_box{
            grid-template-columns: auto;
            }
}
</style>
</head>
<body>
<div class="outer_box"> 
    <div class="contain"><a href="#">
    <img src="images/2.png" alt="Snow" style="width:100%;">
    <div class="centered">"Indore For Kerela" An Initiative By SOSS</div>
    </a>
    </div>
    <div class="contain"><a href="#">
    <img src="images/3.png" alt="Snow" style="width:100%;">
    <div class="centered">Two Days Workshop on "Issues Of Sustainable Agricultural Development (15/11/18 to 16/11/18)"</div>
    </a>    
    </div>
    <div class="contain"><a href="#">
    <img src="images/4.jpg" alt="Snow" style="width:100%;">
    <div class="centered">National Conference On "Gender Equity In India" (03/11/18)</div>
    </a>
    </div>
    <div class="contain"><a href="#">
    <img src="images/5.jpg" alt="Snow" style="width:100%;">
    <div class="centered">Six Days Workshop on "Research Methodology" (24/09/18 to 29/09/18)</div>
    </a>
    </div>
</div>
</body>
</html>
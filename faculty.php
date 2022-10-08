<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <!-- <link rel="stylesheet" href="faculty.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap');

{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
/* .navbar{
  top:0%;
} */
body{
	height: 100vh;
	font-family: "Raleway", sans-serif;
	/* background: #2F3238; */
  /* position: absolute; */
}

.container{
	margin: 30px;
  /* margin-top: 100px; */
}
.container h1{
  font-size: 40px;
  font-weight: 900px;
  align-item: center;
  text-align: center;
}
.row{
	width: 100%;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}

.image{
	background: #50A7FF;
	position: relative;
	flex: 1;
	max-width: 250px;
	height: 250px;
	margin: 20px;
	overflow: hidden;
  border: 5px grey;
  box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.3);
  align-items: inline;
}

.image img{
	opacity: 0.8;
	position: relative;
	vertical-align: top;
	transition: 0.6s;
	width: fit-content;
  width: 250px;
  height: 250px;
  object-fit: fill;
  transition-property: opacity;
}

.image:hover img{
	opacity: 1;
}

.image .details{
	z-index: 1;
	position: absolute;
	top: 0%;
	right: 0;
	color: #fff;
	width: 100%;
	height: 100%;
}

.image .details h2{
	text-align: center;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 300;
	margin-top: 70px;
	transition: 0.4s;
	transition-property: transform;
}

.image .details h2 span{
	font-weight: 900;
}

.image:hover .details h2{
	transform: translateY(-30px);
}

.image .details p{
	margin: 30px 30px 0 30px;
	font-size: 10px;
	font-weight: 600;
	text-align: center;
	opacity: 0;
	transition: 0.6s;
	transition-property: opacity, transform;
}

.image:hover .details p{
	opacity: 1;
	transform: translateY(-40px);
}

.more{
	position: absolute;
	background: rgba(255, 255, 255, 0.8);
	width: 100%;
	object-fit: contain;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px;
	bottom: 0px;
	transition: 0.6s;
	transition-property: bottom;
  font-size:10px;
}

/* .image:hover .more{
	bottom: 0%;
} */

.more .read-more{
	color: #000;
	text-decoration: none;
	font-size: 15px;
	font-weight: 900;
	text-transform: uppercase;
  pointer-events: none;
  align-items:block;
  display: inline;
}

.more .read-more span{
	font-weight: 900;
}

.more .icon-links i{
	color: #000;
	font-size: 15px;
}

.more .icon-links a:not(:last-child) i{
	margin-right: 20px;
}

/* Responsive CSS */

@media (max-width: 1080px){
  .image {
    flex: 100%;
    width: 300px;
    height: 300px;
  }
}
@media (max-width: 1250px){
  .container{
    position: relative;
    margin-top:80px;
  }
}
@media (max-width: 400px){
 
	.image .details p{
		font-size: 16px;
	}

	.more .read-more, .more .icon-links a i{
		font-size: 18px;
	}
}
      

      </style>
  </head>
  <body>
    <!-- <div class="navbar"> -->
  <?php include 'navbar.php';?>
<!-- </div> -->
    <!--image card layout start-->
    <div class="container">
      <h1>Faculty Profile</h1>
       <!--image row start-->
       <div class="row">
        <!--image card start-->
        <div class="image">
        <img src="images/Dr. Rekha Acharya.JPG" alt="">
          <div class="details">
          <div class="more">
              <div class="read-more">
              <a>Dr. Rekha Acharya</a>
              <a>Head of Department</a>
              </div>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Varsha Patel.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Varsha Patel</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Sarika Dixit.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Sarika Dixit</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Mr. Arvind Parihar.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Arvind Parihar</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Rashmi Jain.jpg" alt="">
          <a href="#" class="read-more">Dr. Rashmi Jain</a>
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Rashmi Jain</a>
              <div class="icon-links">
                <a href="images/Dr. Rashmi Jain.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr.Shilpa Kumrawat.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Shilpa Kumrawat</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Jyoti Chauhan.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Jyoti Chauhan</a>
              <div class="icon-links">
                <a href="images/Dr. Jyoti Chauhan.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Pramod Kumar Janoliya.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Pramod Kumar</a>
              <div class="icon-links">
                <a href="images/Dr. Pramod Kumar Janoliya.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Prita Asati.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Prita Asati</a>
              <div class="icon-links">
                <a href="images/Dr. Prita Asati.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Rajendra Singh.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Rajendra Singh</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Mudita gupta.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Mudita gupta</a>
              <div class="icon-links">
                <a href="images/Dr. Mudita Gupta.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Surinder kaur Chawla.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Surinder kaur Chawla</a>
              <div class="icon-links">
                <a href="images/Dr. Surinder Kaur Chawla.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Shefali Rajwal.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Shefali Rajwal</a>
              <div class="icon-links">
                <a href="images/Dr. Shefali Rajwal.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Dr. Savita Singh.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Dr. Savita Singh</a>
              <div class="icon-links">
                <a href="images/Dr. Savita Singh.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/AKANSHA.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Akansha Tripathi</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        
        <!--image card start-->
        <div class="image">
          <img src="images/Ms.Neetu.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Neetu Jalodia</a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Mr.SatyamSamrat.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Mr. Satyam Samrat</a>
              <div class="icon-links">
                <a href="images/Mr. Satyam Samrat Acharya.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Ms.Veethika.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Veethika Acharya</a>
              <div class="icon-links">
                <a href="images/Ms. Veethika Acharya.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        
        <!--image card start-->
        <div class="image">
          <img src="images/Mr.KartikeyaBhardwaj.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Mr. Kartikeye Bhardwaj</a>
              <div class="icon-links">
                <a href="images/Ms. Jyoti Joshi.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Mr. Mithlesh H. Jani.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Mr. Mithlesh H. jani</a>
              <div class="icon-links">
                <a href="images/Mr. Mithlesh H. jani.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Mr. Sumit Kumar Jha.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Mr. Sumit Kumar</a>
              <div class="icon-links">
                <a href="images/Mr. Sumit Kumar.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
       
        <!--image card start-->
        <div class="image">
          <img src="images/Mr. Suhel Khan.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Mr. Suhel Khan</a>
              <div class="icon-links">
                <a href="images/Mr. Suhel Khan.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Ms. Shilpa Kamath.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Shilpa Kamath</a>
              <div class="icon-links">
                <a href="images/Ms. Shilpa Kamath.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Ms. Jhanvi Gupta.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Jhanvi Gupta</a>
              <div class="icon-links">
                <a href="images/Ms. Jhanvi Gupta.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/Ms. Jyoti Joshi.jpg" alt="">
          <div class="details">
            <div class="more">
              <a href="#" class="read-more">Ms. Jyoti Joshi</a>
              <div class="icon-links">
                <a href="images/Ms. Jyoti Joshi.pdf"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
    </div>
    <!--image card layout end-->

  </body>
</html>
      
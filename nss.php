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
            .image__description {
               overflow: scroll;
                padding: 10px;
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
       .about_nss{
        width: 100%;
        height: 400px;
        border: 5px grey;
  box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.3);
  position: relative;
       }
       .about_nss img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        object-fit: contain;
        height: inherit;
       }
       .para{
        height: 400px;
        z-index: 200;
       }
        .nss_head{
            text-align: center;
            font-size: 40px;
        }
        .image__img {
            display: block;
            width: 100%;
        }

.image__overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
	color: #ffffff;
	font-family: 'Quicksand', sans-serif;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	opacity: 0;
	transition: opacity 0.25s;
    margin: 10px auto;
}

.image__overlay--blur {
	backdrop-filter: blur(5px);
}

/* .image__overlay--primary {
	background: #009578;
} */

.image__overlay>* {
	transform: translateY(20px);
	transition: transform 0.25s;
}

.image__overlay:hover {
	opacity: 1;
}

.image__overlay:hover>* {
	transform: translateY(0);
}

.image__title {
	font-size: 2em;
	font-weight: bold;
}

.image__description {
	font-size: 1.25em;
	margin-top: 0.25em;
    
    padding: 10px;
}
    </style>
</head>
<body>
<?php include 'navbar.php';?>

<!-- <div class="about_nss"> 
<img src="images/nss.jpg" alt></div>
<div class="para">About SOSS-DAVV NSS UNIT
NSS SOSS-DAVV Unit is the Devi Ahilya University chapter of the National Service Scheme, which is organized under the Ministry of Youth Affairs and Sports of the Government of India. Our only purpose is to encourage students to participate in nation-building activities through a variety of events and projects that help communities in and around IIPS. We both believe that such activities are virtually usually a source of considerable pleasure and fulfillment. The Unit's mission is to instill social responsibility in students and provide impartial service to society. NSS volunteers strive to ensure that everyone in need receives assistance to improve their quality of life and live a dignified life. Volunteers learn how to live a happy life despite a lack of resources from people in communities in this way. It also assists catastrophe victims by giving food, clothing, and first assistance in both natural and man-made disasters. "Not Me But You," the NSS motto, captures the essence of democratic living and emphasizes the importance of unselfish service. NSS educates students to value the viewpoints of others and to be sensitive to other living creatures. The NSS concept is well enshrined in this motto, which emphasizes the belief that each individual's well-being is ultimately dependent on the well-being of society as a whole, and that NSS volunteers should try to improve society's well-being.
</div> -->
<div class="about_nss">
		<img class="image__img" src="images/nss.jpg" alt="Bricks">
		<div class="image__overlay image__overlay--primary">
            <h1 class="nss_head">About SOSS-DAVV NSS UNIT</h1>
			<p class="image__description">
NSS SOSS-DAVV Unit is the Devi Ahilya University chapter of the National Service Scheme, which is organised under the Ministry of Youth Affairs and Sports of the Government of India. Our only purpose is to encourage students to participate in nation-building activities through a variety of events and projects that help communities in and around IIPS. We both believe that such activities are virtually usually a source of considerable pleasure and fulfilment. The Unit's mission is to instil social responsibility in students and provide impartial service to society. NSS volunteers strive to ensure that everyone in need receives assistance in order to improve their quality of life and live a dignified life. Volunteers learn how to live a happy life despite a lack of resources from people in communities in this way. It also assists catastrophe victims by giving food, clothing, and first assistance in both natural and man-made disasters. "Not Me But You," the NSS motto, captures the essence of democratic living and emphasises the importance of unselfish service. NSS educates students to value the viewpoints of others and to be sensitive of other living creatures. The NSS concept is well enshrined in this motto, which emphasises the belief that each individual's well-being is ultimately dependent on the well-being of society as a whole, and that NSS volunteers should try to improve society's well-being.

			</p>
		</div>
	</div>
  <div class="wraper">
    
        <div class="box1"><img src="nss/1.jpg" alt></div>
        <div class="box1"><img src="nss/2.jpg" alt></div>
        <div class="box1"><img src="nss/3.jpg" alt></div>
        <div class="box1"><img src="nss/4.jpg" alt></div>
        <div class="box1"><img src="nss/5.jpg" alt></div>
        <div class="box1"><img src="nss/6.jpg" alt></div>
        <div class="box1"><img src="nss/7.jpg" alt></div>
        <div class="box1"><img src="nss/8.jpg" alt></div>
        <div class="box1"><img src="nss/9.jpg" alt></div>
        <div class="box1"><img src="nss/10.jpg" alt></div>
        <div class="box1"><img src="nss/11.jpg" alt></div>
        <div class="box1"><img src="nss/12.jpg" alt></div>
        <div class="box1"><img src="nss/13.jpg" alt></div>
        <div class="box1"><img src="nss/14.jpg" alt></div>
        <div class="box1"><img src="nss/15.jpg" alt></div>
        <div class="box1"><img src="nss/16.jpg" alt></div>
        <div class="box1"><img src="nss/17.jpg" alt></div>
        <div class="box1"><img src="nss/18.jpg" alt></div>
        <div class="box1"><img src="nss/19.jpg" alt></div>
        <div class="box1"><img src="nss/20.jpg" alt></div>
        <div class="box1"><img src="nss/21.jpg" alt></div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>
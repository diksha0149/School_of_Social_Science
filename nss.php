<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of Social Science</title>
    <style>
    .image {
    position: relative;
    width: 100%;
    padding : 10px;
    margin: auto;
    align: center;
    margin:auto;
}

.image__img {
    display: block;
    width: 90%;
    align: center;
    margin:auto;
}

.image__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    align: center;
    margin:auto;
    height: 100%;
    padding:auto;
     background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    /* margin: 10px; */
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    align: center;
    background: rgba(0, 0, 0, 0.6);
}

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover > * {
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
header { 
  padding: .9vw;
  font-size: 0;
  display: -ms-flexbox;
  -ms-flex-wrap: wrap;
  -ms-flex-direction: column;
  -webkit-flex-flow: row wrap; 
  flex-flow: row wrap; 
  display: -webkit-box;
  display: flex;
}
header div { 
  -webkit-box-flex: auto;
  -ms-flex: auto;
  flex: auto; 
  width: 400px; 
  height:400px;
  margin: .5vw; 
  object-fit: contain;
}
header div img { 
  width: 400px; 
  height: 400px; 
  
}
@media screen and (max-width: 1500px) {
.image{
    margin-top:100px;
}
  
}
@media screen and (max-width: 400px) {
  header div { margin: 0px; }
  header { padding: 0px; }
  
}
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<div class="image">
    <img class="image__img" src="Images/nss.jpg" alt="Bricks">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">About SOSS-DAVV NSS UNIT</div>
        <p class="image__description">
        
       NSS SOSS-DAVV Unit is the Devi Ahilya University chapter of the National Service Scheme, which is organized under the Ministry of Youth Affairs and Sports of the Government of India. Our only purpose is to encourage students to participate in nation-building activities through a variety of events and projects that help communities in and around IIPS. We both believe that such activities are virtually usually a source of considerable pleasure and fulfillment. The Unit's mission is to instill social responsibility in students and provide impartial service to society. NSS volunteers strive to ensure that everyone in need receives assistance to improve their quality of life and live a dignified life. Volunteers learn how to live a happy life despite a lack of resources from people in communities in this way. It also assists catastrophe victims by giving food, clothing, and first assistance in both natural and man-made disasters. "Not Me But You," the NSS motto, captures the essence of democratic living and emphasizes the importance of unselfish service. NSS educates students to value the viewpoints of others and to be sensitive to other living creatures. The NSS concept is well enshrined in this motto, which emphasizes the belief that each individual's well-being is ultimately dependent on the well-being of society as a whole, and that NSS volunteers should try to improve society's well-being.

        </p>
    </div>
</div>
<div>
<header>
<div><img src="nss/1.jpg" alt></div>
<div><img src="nss/2.jpg" alt></div>
<div><img src="nss/3.jpg" alt></div>
<div><img src="nss/4.jpg" alt></div>
<div><img src="nss/5.jpg" alt></div>
<div><img src="nss/6.jpg" alt></div>
<div><img src="nss/7.jpg" alt></div>
<div><img src="nss/8.jpg" alt></div>
<div><img src="nss/9.jpg" alt></div>
<div><img src="nss/10.jpg" alt></div>
<div><img src="nss/11.jpg" alt></div>
<div><img src="nss/12.jpg" alt></div>
<div><img src="nss/13.jpg" alt></div>
<div><img src="nss/14.jpg" alt></div>
<div><img src="nss/15.jpg" alt></div>
<div><img src="nss/16.jpg" alt></div>
<div><img src="nss/17.jpg" alt></div>
<div><img src="nss/18.jpg" alt></div>
<div><img src="nss/19.jpg" alt></div>
<div><img src="nss/20.jpg" alt></div>
<div><img src="nss/21.jpg" alt></div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</header>
</div>
</body>
</html>
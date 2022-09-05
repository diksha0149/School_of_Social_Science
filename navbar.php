<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <div class="navbar">

    <!-- Navbar logo -->
    <div class="nav-header">
      <div class="nav-logo">
        <a href="#">
          <!-- <img src="logo.png" width="100px" alt="logo"> -->
        </a>
      </div>
    </div>

    <!-- responsive navbar toggle button -->
    <input type="checkbox" id="nav-check">
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <!-- Navbar items -->
    <div class="nav-links" id="nav-link">
      <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us<span class="caret"></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a href="#">Vision/Mission</a>
          <a href="acheivement.php">Achievements</a>
          <a href="society.php">SOSS For Society</a>
        </div>
      </div>

      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Academics<span class="caret"></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a href="timetable11.php">Time Table</a>
          <a href="syllabus12.php">Syllabus</a>
          <a href="activities.php">Activities</a>
          <a href="Notice/op.pdf">Programs</a>
        </div>
      </div>

      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/var/www/html/admissions.html"><i class="fa fa-folder" aria-hidden="true"></i> Admission  <span class="caret"></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a href="Notice/fees.pdf">Fee Structure</a>
          <a href="Notice/Admission2019-20.pdf">Admission Notice</a>
          <a href="Notice/brochure.pdf">Brochure</a>
        </div>
      </div>
      <a href="Notice/associations.pdf"><i class="fa fa-handshake-o"></i> Faculty</a>
      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"  href="events.php"><i class="fa fa-users" aria-hidden="true"></i> Student's Corner<span class="caret" ></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a  href="event_academic.php" id="acad">Placements</a>
          <a href="event_cultural.php" id="cult">Research</a>
          <a href="event_community.php" id="commu">Internships</a>
        </div>
      </div>
      <!-- <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-users"></i> Student's Corner <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Notice/Placement.pdf">Placement</a></li>
                   <li><a href="research.php">Research</a></li>
                   <li><a href="Notice/INTERNSHIPS.pdf">Internships</a></li>
                </ul>
              </li> -->
      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown"  href="events.php"><i class="fa fa-trophy" aria-hidden="true"></i> Events<span class="caret" ></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a  href="event_academic.php" id="acad">Academics</a>
          <a href="event_cultural.php" id="cult">Cultural</a>
          <a href="event_community.php" id="commu">Community</a>
        </div>
      </div>

      <div class="dropdown">
        <a class="dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-book"></i> Feedback<span class="caret"></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="drop-content">
          <a href="feedback.php">Feedback Analysis</a>
          <a href="Notice/Feedbackform.pdf">Student Feedback Form</a>
        </div>
      </div>
      <a href="Notice/associations.pdf"><i class="fa fa-handshake-o"></i> Our Associations</a>
      <a href="http://www.dauniv.ac.in/"><i class="fa fa-bank"></i> DAVV</a>
      </div>

  </div>
  <script>
    // let navbar= document.getElementById("nav-link");
    // let dropdown_icon=document.querySelector(".nav-btn");
    // dropdown_icon.addEventListener(
    //   "click",
    //   function(){
    //     if(navbar.style.display==="none"){
    //       navbar.style.display="block";
    //     }
    //   }
    // )
    // navbar.addEventListener(
    //   "click",
    //   function(){
    //     if(navbar.style.display!=="none"){
    //       navbar.style.display="none";
    //     }
    //       // navbar.style.display="block";
    //   }
    // )
  </script>
</body>

</html>
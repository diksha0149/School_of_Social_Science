<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School of Social Science</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
        /* @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"); */


.container {
  display: flex;
  flex-direction: column;
  /* justify-content: center;
  align-items: center; */
  margin-top: 20px;
  /* position: relative; */
  height: auto;
}
.sub_menu{
    /* position: relative; */
    display: inline-grid;
}
.submenu a{
    text-decoration: none;
}
.title {
  text-align: center;
  /* background: yellow; */
}
.heading{
  margin-top: 20px;
  padding: 5px;
  margin-left: 20px;
}
.faq {
  max-width: auto;
  margin: 10px;
  background: #eee;
  box-shadow: 0 8px 8px -4px grey;
  position: relative;
  cursor: pointer;
  padding: 0px;
  top: 20px;
}

.faq-question {
  margin: 15px;
  height: auto;
  font-size: 20px;
  font-weight: 900;
  overflow-wrap: break-word;
}

.faq-toggle {
  position: absolute;
  right: 25px;
  top: 20px;
  font-size: 20px;
}

.faq-icon {
  transition: transform 0.5s ease;
}

.faq-answer {
  text-align: justify;
  line-height: 24px;
  margin: 10px;
  max-height: 0;
  /* height: auto: */
  overflow: hidden;
  overflow-wrap: break-word;
  transition: max-height 0.8s ease-in-out;
}
.faq-answer a{
  text-decoration: none;
  color: black;
  /* margin-left: 20px; */
}
.faq-answer ul li{
  padding: 10px;

}
.faq.active .faq-answer {
  max-height: 300px;
}

.faq.active .faq-icon {
  transform: rotate(180deg);
}
.footer{
  bottom: 0px;
  /* width: 20%;
  height: 200px;
  border: 2px solid black; */
  top: 40px;
  position: relative;
}
@media screen and (max-width: 600px) {
    .container{
        top: auto;
    }
}

    </style>
  </head>
  <body>
  <?php include 'navbar.php';?>
    <div class="container">
      <h1 class="title">Syllabus</h1>
      <div class="faq">
        <h2 class="faq-question">DIPLOMA COURSES</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
            <ul>
                <li><a href="#">PG DIPLOMA in GUIDANCE and COUNSELLING</a></li>
                <li><a href="#">PG DIPLOMA in LABOUR LAW and PERSONNEL MANAGEMENT</a></li>
            </ul>
        </div>
      </div>
      
      <div class="faq">
        <h2 class="faq-question">UNDER GRADUATION COURSES</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="#">B.S.W.</a></li>
                <li><a href="#">B.A. GEOGRAPHY</a></li>
                <li><a href="#">B.A. PSYCHOLOGY</a></li>
                <li><a href="#">B.A.SOCIOLOGY</a></li>
            </ul>

        </div>
      </div>
      
      <div class="faq">
        <h2 class="faq-question">POST GRADUATION COURSES</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="#">M.S.W.</a></li>
                <li><a href="#">M.A. CLINICAL PSYCHOLOGY</a></li>
                <li><a href="#">M.A. POLITICAL SCIENCE</a></li>
                <li><a href="#">M.A.SOCIOLOGY</a></li>
                <li><a href="#">M.B.A. PUBLIC ADMINISTRATION and POLICY</a></li>
                <li><a href="#">M.B.A. RURAL DEVELOPMENT</a></li>
                <li><a href="#">M.A.SOCIOLOGY</a></li>
            </ul>

        </div>
</div>
        <div class="faq">
        <h2 class="faq-question">M. Phil Courses</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <!-- <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/BSW 1 sem.jpg">M.S.W.</a></li>
                <li><a href="TimeTable/BSW 3 sem.jpg">M.A. CLINICAL PSYCHOLOGY</a></li>
                <li><a href="TimeTable/BSW 5 sem.jpg">M.A. POLITICAL SCIENCE</a></li>
                <li><a href="TimeTable/B.A. geography 5 sem.jpg">M.A.SOCIOLOGY</a></li>
                <li><a href="TimeTable/BSW 3 sem.jpg">M.B.A. PUBLIC ADMINISTRATION and POLICY</a></li>
                <li><a href="TimeTable/BSW 5 sem.jpg">M.B.A. RURAL DEVELOPMENT</a></li>
                <li><a href="TimeTable/B.A. geography 5 sem.jpg">M.A.SOCIOLOGY</a></li>
            </ul>

        </div> -->
</div>
        <div class="faq">
        <h2 class="faq-question">Ph. D Courses</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <!-- <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/BSW 1 sem.jpg">M.S.W.</a></li>
                <li><a href="TimeTable/BSW 3 sem.jpg">M.A. CLINICAL PSYCHOLOGY</a></li>
                <li><a href="TimeTable/BSW 5 sem.jpg">M.A. POLITICAL SCIENCE</a></li>
                <li><a href="TimeTable/B.A. geography 5 sem.jpg">M.A.SOCIOLOGY</a></li>
                <li><a href="TimeTable/BSW 3 sem.jpg">M.B.A. PUBLIC ADMINISTRATION and POLICY</a></li>
                <li><a href="TimeTable/BSW 5 sem.jpg">M.B.A. RURAL DEVELOPMENT</a></li>
                <li><a href="TimeTable/B.A. geography 5 sem.jpg">M.A.SOCIOLOGY</a></li>
            </ul>

        </div> -->
        </div>
      
     
    

      

     

      

    </div>
    <div class="footer">
    <?php include 'footer.php';?>
</div>
    <script>
        const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faqs.forEach(item => {
            if (item !== faq) {
                item.classList.remove("active");
            }
        })
        faq.classList.toggle("active");
    })
})
    </script>
  </body>
</html>

<!-- <h3>
<a href="Notice/timetable.pdf" style="color:black;">4. M. Phil Courses</a>
</h3> 
 <h3>
<a href="Notice/timetable.pdf" style="color:black;">5. Ph. D Courses</a>
</h3> -->


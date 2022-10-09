<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");


.container {
  display: flex;
  flex-direction: column;
  /* justify-content: center;
  align-items: center; */
  margin-top: 20px;
  height: 100vh;
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
}
.heading{
  margin-top: 25px;
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
  height: 10px;
  font-size: 20px;
  font-weight: 900;
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
  transition: max-height 0.8s ease-in-out;
}
.faq-answer a{
  text-decoration: none;
  color: black;
  margin-left: 20px;
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

    </style>
  </head>
  <body>
  <?php include 'navbar.php';?>
    <div class="container">
      <h1 class="title">Time Table</h1>
      <h2 class="heading">Diploma Courses</h2>
      <div class="faq">
        <h2 class="faq-question">Diploma Courses</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
            <ul>
                <li><a href="TimeTable/diploma.jpg">PG DIPLOMA in GUIDANCE and COUNSELLING</a></li>
                <li><a href="pgdiploma.jpg">PG DIPLOMA in LABOUR LAW and PERSONNEL MANAGEMENT</a></li>
            </ul>
        </div>
      </div>
      <h2 class="heading">Post Graduation Courses</h2>
      <div class="faq">
        <div class="faq-question">M.A. CLINICAL PSYCHOLOGY</div>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MACP1.jpg">M.A. CLINICAL PSYCHOLOGY SEM 1</a></li>
                <li><a href="TimeTable/MACP3.jpg">M.A. CLINICAL PSYCHOLOGY SEM 3</a></li>
            </ul>
        </div>
      </div>
      
      <div class="faq">
        <h2 class="faq-question">M.A. POLITICAL SCIENCE</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MA_Pol_1.jpg">MA Political Science  Sem 1</a></li>
                <li><a href="TimeTable/MA_Pol_3.jpg">MA Political Science Sem 3</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">M.A.SOCIOLOGY</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MA_sociology_1.jpg">MA Sociology Sem 1</a></li>
                <li><a href="TimeTable/MA_sociology_3.jpg">MA Sociology Sem 3</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">M.B.A. PUBLIC ADMINISTRATION and POLICY</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MBA_sem3.jpg">M.B.A. PUBLIC ADMINISTRATION and POLICY SEM 3</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">M.B.A. RURAL DEVELOPMENT</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MBA_RD_sem3.jpg">M.B.A. PUBLIC ADMINISTRATION and POLICY SEM 3</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">M.S.W.</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/MSW 1 sem.jpg">M.S.W. SEM 1</a></li>
                <li><a href="TimeTable/MSW 3rd Sem.jpg">M.S.W. SEM 3</a></li>
            </ul>
        </div>
      </div>

      <h2 class="heading">Under Graduation Courses</h2>
      <div class="faq">
        <h2 class="faq-question">B.A. GEOGRAPHY</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/B.A. geography 1 sem.jpg">B.A. GEOGRAPHY SEM 1</a></li>
                <li><a href="TimeTable/B.A. geography 3 sem.jpg">B.A. GEOGRAPHY SEM 3</a></li>
                <li><a href="TimeTable/B.A. geography 5 sem.jpg">B.A. GEOGRAPHY SEM 5</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">B.A. PSYCHOLOGY</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
        <li><a href="TimeTable/B.A. psychology 1 sem.jpg">B.A. PSYCHOLOGY SEM 1</a></li>
                <li><a href="TimeTable/B.A. psychology 3 sem.jpg">B.A. PSYCHOLOGY SEM 3</a></li>
                <li><a href="TimeTable/B.A. psychology 5 sem.jpg">B.A. PSYCHOLOGY SEM 5</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">B.A.SOCIOLOGY</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/BA Sociology 1 sem.jpg">B.A.SOCIOLOGY SEM 1</a></li>
                <li><a href="TimeTable/BA Sociology 3 sem.jpg">B.A.SOCIOLOGY SEM 3</a></li>
            </ul>
        </div>
      </div>

      <div class="faq">
        <h2 class="faq-question">B.S.W.</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/BSW 1 sem.jpg">B.S.W. SEM 1</a></li>
                <li><a href="TimeTable/BSW 3 sem.jpg">B.S.W. SEM 3</a></li>
                <li><a href="TimeTable/BSW 5 sem.jpg">B.S.W. SEM 5</a></li>
            </ul>
        </div>
      </div>

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

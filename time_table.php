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
  height: 15px;
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
      <h1 class="title">Frequently Asked Question</h1>
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
      <div class="faq">
        <h2 class="faq-question">Post Graduation Courses</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
        <ul>
                <li><a href="TimeTable/diploma.jpg">M.A. CLINICAL PSYCHOLOGY</a></li>
                <li><a href="pgdiploma.jpg">M.A. POLITICAL SCIENCE</a></li>
                <li><a href="TimeTable/diploma.jpg">M.A.SOCIOLOGY</a></li>
                <li><a href="pgdiploma.jpg">M.B.A. PUBLIC ADMINISTRATION and POLICY</a></li>
                <li><a href="TimeTable/diploma.jpg">M.B.A. RURAL DEVELOPMENT</a></li>
                <li><a href="pgdiploma.jpg">M.S.W.</a></li>
            </ul>
        </div>
      </div>
      <div class="faq">
        <h2 class="faq-question">Under Graduate Courses</h2>
        <div class="faq-toggle">
          <i class="fa-solid fa-angle-down faq-icon"></i>
        </div>
        <div class="faq-answer">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate corporis neque, ab quaerat illum sint enim minima perspiciatis nostrum, tempora, beatae asperiores non iste porro quisquam doloremque minus! Voluptatum hic,
          ducimus labore vero expedita itaque. Saepe at vel aperiam illum iure dolorem veniam neque quas ipsa corrupti officiis exercitationem, repellendus aspernatur sint qui quasi laudantium enim accusamus laboriosam consequatur vitae!
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

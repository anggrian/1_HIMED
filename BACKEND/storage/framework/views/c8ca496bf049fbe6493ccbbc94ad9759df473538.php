<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <title>Responsive Sticky Navbar | CodingNepal</title> -->
  <!-- css navbar -->
  <?php echo $__env->yieldContent('page'); ?>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <nav class="navbar" style="position: fixed;">
    <div class="content" style="width: 100%;">
      <div class="logo">
        <a href="#">Robovision</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">CONTACT</a></li>
        <button class="btn-primary"> Register </button>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!-- <div class="banner"></div> -->
  <!-- javascript buat navbar -->
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = () => {
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = () => {
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = () => {
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

  <!-- 
  <section class="section-home">
    <div class="container">
      <div class="home">
        <h3 class="h3-home">Creative landing page template</h3>
        <h1 class="bold h1-home">IT Automation Experts for AI Soluations and job Schaduling.</h1>
        <p>Lorem ipsum dolor sit amet, adipisicing elit. Quod corrupti laborum, quasi? Dolor sapiente amet optio harum dolores, voluptate, tempora dolorem fugiat fuga autem .</p>
        <div class="btn-home">
          <div class="btn">contact us</div>
          <div class="btn">learn more</div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-dua">
    <div class="container">
      <div class="realtime">
        <div class="realtime-col realtime-col-satu">
          <div class="kolom-2 card-satu">
            <h5>Realtime Live Chat</h5>
            <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
          </div>
          <div class="kolom-2 card-dua">
            <h5>Chart Modules</h5>
            <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
          </div>
          <div class="kolom-2 card-tiga">
            <h5>Social Assistant</h5>
            <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
          </div>
          <div class="kolom-2 card-empat">
            <h5>AI Solutions</h5>
            <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
          </div>
        </div>
        <div class="realtime-col realtime-col-dua">
          <h4>A Straight Forward Structare for Powerful Automation Results.</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur!</p>
          <button class="btn  btn-realtime">Read More</button>
        </div>
      </div>
    </div>
  </section>
  <section class="section-tiga">
    <div class="container">
      <div class="result">
        <h4 class="h4-result">A Straight Forward Structare for Powerful Results.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur!</p>
        <button class="btn btn-result">READ MORE</button>
      </div>
    </div>
  </section> -->



</body>

</html><?php /**PATH C:\xampp\htdocs\1_HIMED\BACKEND\resources\views/web/navbar/navbar.blade.php ENDPATH**/ ?>

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
<?php /**PATH C:\xampp\htdocs\1_HIMED\HIMED\resources\views/Frontend/navbar.blade.php ENDPATH**/ ?>
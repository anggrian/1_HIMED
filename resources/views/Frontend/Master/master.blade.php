<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style_frontend/assett/navbar/navbar.css') }}">

    <!-- Font Awesome -->
    <link href="{{ asset('style_frontend/fontawesome/css/all.css') }}" rel="stylesheet">
    <!--load all styles -->
    <!-- Css sendiri -->
    <link rel="stylesheet" href="{{ asset('style_frontend/css/style.css') }}">


    <!-- font google popins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>
    <!--  -->

    <title>HIMED | MADTIVE</title>
</head>

<body>
    {{-- tampilan navbar --}}
    <nav class="navbar" style="position: fixed; ">
        <div class="content" style="width: 100%;">
            <div class="logo">
                <img src="{{ asset('IMAGE_HIMED/himed.png') }}" alt="gamabar logo" style="width: 20%">
            </div>
            <ul class="menu-list" style="width:100%;">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="{{ route('index') }}">HOME</a></li>
                <li><a href="{{ route('tentang.frontend') }}">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="blog">BLOG</a></li>
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

    {{-- halaman isi --}}
    @yield('frontend')

    <!-- 10. Awal Section Footer -->
    <div class="footer-frontend">
        <div class="container">
            <!-- Awal Footer  -->
            <div class="container-footer">
                <div class="kolom robovision pt-4">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('style_frontend/img/logo.png') }}" alt="logo"
                                class="img-robovision"> <span class="text-robovision">RoboVision</span> </a>
                    </div>
                    <div class="text-header-robovision">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo
                        id
                        repellat quisquam? Autem expedita earum quae laborum ipsum ad.
                    </div>
                    <div class="icon-footer pt-3">
                        <a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href=""><i class="fab fa-twitter-square fa-2x"></i></a>
                        <a href=""><i class="fab fa-google-plus-square fa-2x"></i></a>
                        <a href=""><i class="fab fa-instagram-square fa-2x"></i></a>
                        <a href=""><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>

                <div class="kolom privacy-tos pt-4">
                    <h5>PRIVACY &amp; TOS</h5>
                    <a href="">
                        <p>Advertiser Agreement</p>
                    </a>
                    <a href="">
                        <p>Acceptable Use Policy</p>
                    </a>
                    <a href="">
                        <p>Privacy Policy</p>
                    </a>
                    <a href="">
                        <p>Technology Privacy</p>
                    </a>
                    <a href="">
                        <p>Developer Agreement</p>
                    </a>
                </div>

                <div class="kolom navigate pt-4">
                    <h5>NAVIGATE</h5>
                    <a href="">
                        <p>Advertisers</p>
                    </a>
                    <a href="">
                        <p>Developers</p>
                    </a>
                    <a href="">
                        <p>Resources</p>
                    </a>
                    <a href="">
                        <p>Company</p>
                    </a>
                    <a href="">
                        <p>Connect</p>
                    </a>
                </div>

                <div class="kolom contact-us pt-4">
                    <h5>CONTACT US</h5>
                    <a href="">
                        <p>Mailing Address:xx00 E. Union Ave</p>
                    </a>
                    <a href="">
                        <p>Suite 1100. Denver, CO 80237</p>
                    </a>
                    <a href="">
                        <p>+999 90932 627</p>
                    </a>
                    <a href="">
                        <p>support@yourdomain.com</p>
                    </a>
                </div>
            </div>
            <!-- Akhir Footer  -->
        </div>
    </div>
    <!-- Akhir Section Foter -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->


</body>

</html>

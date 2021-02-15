    
    <!-- 1. Awal Section  Creative landing page template (HOME)-->
    <section class="section-home">
        <div class="container">
            <div class="home">
                <h3 class="h3-home">Creative landing page template</h3>
                <h1 class="bold h1-home">IT Automation Experts for AI Soluations and job Schaduling.</h1>
                <p>Lorem ipsum dolor sit amet, adipisicing elit. Quod corrupti laborum, quasi? Dolor sapiente amet optio harum dolores, voluptate, tempora dolorem fugiat fuga autem .</p>
                <div class="btn-home">
                    <div class="btn  btn-primary">contact us</div>
                    <div class="btn  btn-primary">learn more</div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1. Akhir Section  Creative landing page template (HOME)-->

    <!------- Bagian Section 2 Realtime live chat (features) ------->
    <section class="section-dua faq-timeline-area">
        <div class="container">
            <div class="realtime">
                <div class="realtime-col realtime-col-satu">
                    <div class="kolom-lom card-satu">
                        <h5>Realtime Live Chat</h5>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
                    </div>
                    <div class="kolom-lom card-dua">
                        <h5>Chart Modules</h5>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
                    </div>
                    <div class="kolom-lom card-tiga">
                        <h5>Social Assistant</h5>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
                    </div>
                    <div class="kolom-lom card-empat">
                        <h5>AI Solutions</h5>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit. Tenetur quae dignissimos atque minima sit amet</p>
                    </div>
                </div>
                <div class="realtime-col realtime-col-dua">
                    <h4>A Straight Forward Structare for Powerful Automation Results.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo laboriosam, dolorum ducimus aliquam consequuntur!</p>
                    <button class="btn  btn-primary">Read More</button>
                </div>
            </div>
        </div>
    </section>
    <!------- Bagian Akhir Section 2 ------->

    <!-- 3. Awal Section  A Straight Forward -->
    <section class="bub-right">
        <div class="container container-result">
            <div class="result">
                <h4>{{$abouts->title_about}}</h4>
                <p>{{ strip_tags($abouts->description_about)}}</p>
                <p></p>
                <button class="btn btn-primary">READ MORE</button>
            </div>
            <div class="img-result">
                <img src="assets/uploads/{{ $abouts->img_about}}" alt="" class="gambar-result">
            </div>
        </div>
    </section>
    <!-- / 3. Akhir Section  A Straight Forward -->

    <!-- 4. Awal Section  How it works-->
    <section class="hex-pat-1">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <img src="{{ asset('style_frontend/img/section-icon/section-icon-2.svg')}}" alt="***">
                    <h2 class="bold font-header">How it works</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <!-- Content How it works -->
                <div class="card-hiw">
                    <div class="card shadow">
                        <div class="header-hiw">
                            <div class="service_icon">
                                <img src="{{ asset('style_frontend/img/icon h1-h3/h1.png')}}" class="colored-icon" alt="">
                                <!-- <span class="badge bg-secondary">4</span> -->
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="bold">Register New Account</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header-hiw">
                            <div class="service_icon">
                                <img src="{{ asset('style_frontend/img/icon h1-h3/h1.png')}}" class="colored-icon" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="bold">Setup Account Info</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header-hiw">
                            <div class="service_icon">
                                <img src="{{ asset('style_frontend/img/icon h1-h3/h1.png')}}" class="colored-icon" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="bold">Start Buying & Selling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Akhir Section How it works -->

    <!-- 5. Awal Section  Core Our Features-->
    <section class="bub-right">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <img src="{{ asset('style_frontend/img/section-icon/section-icon-2.svg')}}" alt="***">
                    <h2 class="bold font-header">Core Our Features</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <!-- Content Core Our Features -->
                <div class="content-cof">
                    <div class="img-cof">
                        <img src="{{ asset('style_frontend/img/about/about1.svg')}}" alt="" class="img-cof-about">
                    </div>
                    <div class="modal-cof">
                        <div class="card mb-3">
                            <div class="row g-0 sub-cof">
                                <div class="col-md-4">
                                    <img src="{{ asset('style_frontend/img/feature/feature1.svg')}}" alt="..." class="img-cof-feature">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Measure the customer experience</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0 sub-cof">
                                <div class="col-md-4">
                                    <img src="{{ asset('style_frontend/img/feature/feature2.svg')}}" alt="..." class="img-cof-feature">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Measure the customer experience</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0 sub-cof">
                                <div class="col-md-4">
                                    <img src="{{ asset('style_frontend/img/feature/feature3.svg')}}" alt="..." class="img-cof-feature">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Measure the customer experience</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. Akhir Section Core Our Features -->
    
    <!-- 6. Awal Section Our Services -->
    <section class="hex-pat-1">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <img src="{{ asset('style_frontend/img/section-icon/section-icon-3.svg')}}" alt="***">
                    <h2 class="bold font-header">Our Services</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <!-- Card Our Services -->
                <div class="card-our-services">
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s1.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s2.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s3.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                </div>
                <div class="card-our-services">
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s4.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s5.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="header"><img src="{{ asset('style_frontend/img/Our-Services/s6.png')}}" alt="" class="img-our-services"></div>
                        <div class="content">
                            <h6 class="bold">Enterprise Job Scheduling</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maxi ut accumsan ut, posuere sit Lorem ipsum quam, maximus ut accumsan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 6. Akhir Section Our Services -->

    <!-- 7. Awal Section Frequently Questions -->
    <section class="faq-timeline-area">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <img src="{{ asset('style_frontend/img/section-icon/section-icon-5.svg')}}" alt="img_section-icon-5.svg">
                    <h2 class="bold font-header">Frequently Questions</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <div class="content-frequntly">
                    <div class="image-frequntly">
                        <img src="{{ asset('style_frontend/img/about/about3.svg')}}" alt="img_about-3" class="frequntly">
                    </div>
                    <div class="menu-frequntly">
                        <a href="" class="btn btn-frequntly">What are the objectives of this Software?</a>
                        <a href="" class="btn btn-frequntly">What is the best features and services we deiver?</a>
                        <a href="" class="btn btn-frequntly">Why this app important to me?</a>
                        <a href="" class="btn btn-frequntly">how may I take part in and purchase this Software?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 7. Akhir Section Frequently Questions -->

    <!-- 8. Awal Section Our Pricing Plans  / oop -->
    <section style="background: #edf6fd;">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <img src="{{ asset('style_frontend/img/section-icon/section-icon-2.svg')}}" alt="img_section-icon-5.svg">
                    <h2 class="bold font-header">Our Pricing Plans</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <!-- Card Our Pricing Plans -->
                <div class="card-our-pricing-plans">
                    
                    <div class="col-lg-4 col-md-6 pad-opp d-flex justify-content-center">
                        <div class="card-opp">
                            <div class="header-oop">
                                <h5 class="h5-oop">{{$packages->title_package}}</h5>
                                <h1 class="h1-oop">$2</h1>
                                <p class="p-oop">per month</p>
                            </div>
                            <div class="table-oop">
                                <p class="p-sub-opp">250GB Bandwidth</p>
                                <p class="p-sub-opp">08 Email Account</p>
                                <p class="p-sub-opp">Unlimited Database </p>
                                <p class="p-sub-opp">10GB Free Disk </p>
                                <p class="p-sub-opp">24/7 Support</p>
                            </div>
                            <div class="btn-oop">
                                <a href="" class="btn btn-primary">Start</a>
                            </div>
                        </div>
                    </div>

                
                {{-- <div class="card-our-pricing-plans">
                    <div class="col-lg-4 col-md-6 pad-opp d-flex justify-content-center">
                        <div class="card-opp-noactive">
                            <div class="header-oop">
                                <h5 class="h5-oop">bussines</h5>
                                <h1 class="h1-oop">$24.99</h1>
                                <p class="p-oop">per month</p>
                            </div>
                            <div class="table-oop">
                                <p class="p-sub-opp">250GB Bandwidth</p>
                                <p class="p-sub-opp">08 Email Account</p>
                                <p class="p-sub-opp">Unlimited Database </p>
                                <p class="p-sub-opp">10GB Free Disk </p>
                                <p class="p-sub-opp">24/7 Support</p>
                            </div>
                            <div class="btn-oop">
                                <a href="" class="btn btn-primary">Start</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pad-opp d-flex justify-content-center">
                        <div class="card-opp">
                            <div class="header-oop">
                                <h5 class="h5-oop">bussines</h5>
                                <h1 class="h1-oop">$24.99</h1>
                                <p class="p-oop">per month</p>
                            </div>
                            <div class="table-oop">
                                <p class="p-sub-opp">250GB Bandwidth</p>
                                <p class="p-sub-opp">08 Email Account</p>
                                <p class="p-sub-opp">Unlimited Database </p>
                                <p class="p-sub-opp">10GB Free Disk </p>
                                <p class="p-sub-opp">24/7 Support</p>
                            </div>
                            <div class="btn-oop">
                                <a href="" class="btn btn-primary">Start</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pad-opp d-flex justify-content-center">
                        <div class="card-opp-noactive">
                            <div class="header-oop">
                                <h5 class="h5-oop">bussines</h5>
                                <h1 class="h1-oop">$24.99</h1>
                                <p class="p-oop">per month</p>
                            </div>
                            <div class="table-oop">
                                <p class="p-sub-opp">250GB Bandwidth</p>
                                <p class="p-sub-opp">08 Email Account</p>
                                <p class="p-sub-opp">Unlimited Database </p>
                                <p class="p-sub-opp">10GB Free Disk </p>
                                <p class="p-sub-opp">24/7 Support</p>
                            </div>
                            <div class="btn-oop">
                                <a href="" class="btn btn-primary">Start</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- 8. Akhir Section Our Pricing Plans -->

    <!-- 9. Awal Section Loved By Our Clients -->
    <section class="faq-timeline-area">
        <div class="container">
            <div class="content">
                <div class="header-content">
                    <h2 class="bold font-header">Loved By Our Clients</h2>
                    <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                </div>
                <!-- Card Loved By Our Clients -->
                <div class="card-profile">
                    <div class="row">
                        <div class="col-lg-6 pad-opp">
                            <div class="single-testimonial">
                                <!-- Testimonial Image -->
                                <div class="header-img">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('style_frontend/img/test-img/3.jpg')}}" alt="" class="img-lovly">
                                    </div>
                                </div>
                                <!-- Testimonial Feedback Text  -->
                                <div class="testimonial-description">
                                    <div class="testimonial_text">
                                        <p class="ptd">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis magni, quisquam, accusantium dolores atque, doloribus odit minus maiores sunt mollitia consequatur, soluta quasi.</p>
                                    </div>
                                    <!-- Admin Text -->
                                    <div class="admin_text">
                                        <h5>Jebin Khan</h5>
                                        <p class="ptd">Head of Marketing, Designing World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-testimonial">
                                <!-- Testimonial Image -->
                                <div class="header-img">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('style_frontend/img/test-img/2.jpg')}}" alt="" class="img-lovly">
                                    </div>
                                </div>
                                <!-- Testimonial Feedback Text  -->
                                <div class="testimonial-description">
                                    <div class="testimonial_text">
                                        <p class="ptd">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis magni, quisquam, accusantium dolores atque, doloribus odit minus maiores sunt mollitia consequatur, soluta quasi.</p>
                                    </div>
                                    <!-- Admin Text -->
                                    <div class="admin_text">
                                        <h5>Ajoy Das</h5>
                                        <p class="ptd">Head of Marketing, Designing World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 9. Akhir Section Loved By Our Clients -->

    <!-- 10. Awal Section Footer -->
    <footer>
        <div class="container">
            <div class="section-footer">
                <div class="box-section">
                    <h2 class="font-footer">So What s Next?</h2>
                    <h1>Are You Ready? Let’S Work!</h1>
                </div>
                <div class="readmore">
                    <a href="#" class="btn btn-danger rounded-pill">READ MORE</a>
                </div>
            </div>
            <!-- Awal Footer  -->
            <div class="container-footer">
                <div class="kolom robovision pt-4">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('style_frontend/img/logo.png')}}" alt="logo" class="img-robovision"> <span class="text-robovision">RoboVision</span> </a>
                    </div>
                    <div class="text-header-robovision">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.
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
    </footer>
    <!-- Akhir Section Foter -->


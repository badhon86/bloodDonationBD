@extends('layouts.welcome2nav')
@section('main')
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>আপনি কি<span> রক্ত দাতা </span>খুঁজছেন?
      </h1>
      <h2></h2>
      <div class="d-flex">
        <a href="donar.html" class="btn-get-started scrollto">এখানে ক্লিক করুন</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
      </div>
      <br>

      <head>

        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      </head>
      <body>
        <div class="search-box">
          <input type="text" placeholder="সার্চ করতে টাইপ করুন . . .">
          <div class="search-icon">
            <i class="fas fa-search"></i>
          </div>
    <div class="cancel-icon">
            <i class="fas fa-times"></i>
          </div>
    <div class="search-data">
    </div>
    </div>
    <script>
          const searchBox = document.querySelector(".search-box");
          const searchBtn = document.querySelector(".search-icon");
          const cancelBtn = document.querySelector(".cancel-icon");
          const searchInput = document.querySelector("input");
          const searchData = document.querySelector(".search-data");
          searchBtn.onclick =()=>{
            searchBox.classList.add("active");
            searchBtn.classList.add("active");
            searchInput.classList.add("active");
            cancelBtn.classList.add("active");
            searchInput.focus();
            if(searchInput.value != ""){
              var values = searchInput.value;
              searchData.classList.remove("active");
              searchData.innerHTML = "আপনি টাইপ করলেন " + "<span style='font-weight: 500;'>" + values + "</span>";
            }else{
              searchData.textContent = "";
            }
          }
          cancelBtn.onclick =()=>{
            searchBox.classList.remove("active");
            searchBtn.classList.remove("active");
            searchInput.classList.remove("active");
            cancelBtn.classList.remove("active");
            searchData.classList.toggle("active");
            searchInput.value = "";
          }
        </script>

      </body>





    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>আমাদের সম্পর্কে</h2>
          <h3>এটি একটি অলাভজনক  <span>সংস্থা</span></h3>
          <p>আপনার রক্ত একজনের জীবন বাঁচাতে পারে(সৃষ্টিকর্তার সহযোগীতায়),রক্ত দানে নিজে এগিয়ে আসুন,অন্যকেও উৎসাহিত করুন।</p>
        </div>



      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>রক্তদাতা B(-ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>রক্তদাতা AB(-ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>রক্তদাতা O(-ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>রক্তদাতা A(-ve)</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>রক্তদাতা AB(+ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>রক্তদাতা O(+ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-blood-drop"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>রক্তদাতা B(+ve)</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>রক্তদাতা A(+ve)</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>সেবা</h2>
          <h3>আমাদের <span>সেবাসমূহ </span></h3>
          <p>আমরা এমন একটা প্লাটফর্ম বানাতে চেষ্টা করেছি যেখান থেকে এদেশের রক্ত প্রত্যাশী প্রতিটি মানুষ এখান থেকে সাহায্য পায়।</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">ফরমপূরন</a></h4>
              <p>আমরা একটা প্লাটফর্ম তৈরি করছি,যেটাতে আপনি ২ মিনিট সময় দিয়েই তথ্য সমূহ পূরণ করতে পারবেন।</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="donar.html">রক্তদাতার সন্ধান</a></h4>
              <p> এখানে আপনি আপনার ব্লাড গ্রুপ অনুযায়ী রক্তদাতার সন্ধান, ফোন নম্বর এবং ঠিকানা পেয়ে যাবেন। </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">একে অপরের সহযোগিতা</a></h4>
              <p>এই যারা রক্ত দিবে তারা স্বেচ্ছায় এবং প্রতিদান ছাড়া রক্ত দান করবে।যদি কেউ ফোনের মধ্যে বা বিকাশ করে কোন টাকা দাবি বা সহযোগিতা চায় তাহলে এড়িয়ে যাবেন।</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>টিম</h2>
          <h3>আমাদের <span>টিম</span></h3>
          <p>যেকোনো প্রয়োজনে আমাদের টিম এর সাথে যোগাযোগ করুন। আমরা সর্বদা আপনার পাশে থাকার চেষ্টা করবো।</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ এডমিন</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ এডমিন</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>নামঃ.........।</h4>
                <span>পজিশনঃ মডারেটর</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>সাধারণ জিজ্ঞাসা</h2>
          <h3>সচরাচর জিজ্ঞাস্য এবং<span> উত্তর </span></h3>
          <p>এখানে আমাদের কিছু সাধারণ প্রশ্নের উত্তর দেওয়ার চেষ্টা করা হয়েছে যা আপনার মনে উদয় হতে পারে </p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">কেন আমি রক্ত দান করব? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                রক্ত হ'ল সবচেয়ে মূল্যবান উপহার যা যে কেউ অন্য ব্যক্তিকে দিতে পারে - জীবনের উপহার। আপনার রক্তদানের সিদ্ধান্ত একটি জীবন বা আপনার রক্তের উপাদানগুলি - লাল কোষ, প্লেটলেট এবং প্লাজমা - যা নির্দিষ্ট শর্তযুক্ত রোগীদের জন্য পৃথকভাবে ব্যবহার করা যেতে পারে তার মধ্যে পৃথক করা গেলেও জীবন বাঁচাতে পারে।
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">রক্তদানের কী কী সুবিধা রয়েছে? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                রক্তদানের স্বাস্থ্যের সুবিধার মধ্যে রয়েছে স্বাস্থ্য এবং ক্যান্সার এবং হিমোক্রোমাটোসিসের ঝুঁকি হ্রাস। এটি লিভার এবং অগ্ন্যাশয়ের ক্ষতির ঝুঁকি হ্রাস করতে সহায়তা করে। রক্ত দান কার্ডিওভাসকুলার স্বাস্থ্যের উন্নতি এবং স্থূলত্ব হ্রাস করতে সহায়তা করতে পারে।
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">আপনি কখন রক্ত দান করবেন না? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                আপনি রক্তদান করতে না পারার অন্যান্য কারণগুলি: আপনি গত বছরে হেপাটাইটিস বা জন্ডিসের অভিজ্ঞতা পেয়েছেন। আপনার কিছু নির্দিষ্ট ক্যান্সার হয়েছে, বা ক্যান্সারের চিকিত্সা করা হচ্ছে। লিউকেমিয়া বা লিম্ফোমা এবং হজকিনের রোগের মতো রক্তের ক্যান্সার দাতা এবং গ্রহীতা উভয়কেই সুরক্ষার জন্য আপনাকে অনুদান প্রদান থেকে অযোগ্য ঘোষণা করে।
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">কে রক্ত দেবে না? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                আপনার যদি এইডস থাকে বা কখনও ইতিবাচক এইচআইভি পরীক্ষা হয়ে থাকে বা আপনি যদি এমন কোনও কিছু করে থাকেন যা আপনাকে এইচআইভিতে সংক্রামিত হওয়ার ঝুঁকি তৈরি করে তবে আপনার রক্ত দেওয়া উচিত নয়।
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">আমি কি 2 মাস পরে রক্ত দান করতে পারি? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                2 বার রক্তদানের মধ্যে সর্বনিম্ন বিরতি 12 সপ্তাহ (3 মাস) হয়। এই ব্যবধানটি আমাদের শরীরে ভাল আমাদের দেহকে আয়রন স্টক পুনরুদ্ধার করতে দেয়। প্লেটলেট (অ্যাফেরেসিস) দাতারা তার চেয়ে বেশি বার দান করতে পারেন - প্রতি দুই সপ্তাহে একবার এবং বছরে 24 বার পর্যন্ত 24.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">আমি কখন রক্ত দান করতে পারি? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                রাষ্ট্রীয় আইন অনুসারে অনুমোদিত রক্ত সরবরাহের ক্ষেত্রে রক্তদানের ক্ষেত্রে আপনার বয়স কমপক্ষে 17 বছর বা পিতামাতার / অভিভাবকের সম্মতিতে 16 বছর বয়সী হতে হবে। যতক্ষণ না আপনি নিজের ক্রিয়াকলাপে কোনও সীমাবদ্ধতা বা সীমাবদ্ধতা না রেখে রক্তদানের জন্য উচ্চ বয়সের সীমা নেই।
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>যোগাযোগ</h2>
          <h3>যোগাযোগ করুন <span></span></h3>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>ঠিকানা </h3>
              <p>Salimullah RD, Muhammadpur, Dhaka-1207</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>ইমেইল করুন </h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>কল করুন </h3>
              <p>+880 1789554885</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Salimullah%20road,%20Mohammadpur&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->




          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=Salimullah%20road,%20Mohammadpur&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection

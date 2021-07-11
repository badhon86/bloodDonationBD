<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>স্বেচ্ছায় রক্তদান</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="{{ route('donar') }}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{ route('donar') }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ route('donar') }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ route('donar') }}" class="skype"><i class="icofont-skype"></i></a>
        <a href="{{ route('donar') }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">স্বেচ্ছায় <span>রক্ত</span> দান<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">হোম</a></li>
          <li><a href="#about">আমাদের সম্পর্কে</a></li>
          <li><a href="#services">সেবা</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">মেম্বারস</a></li> -->
          <li class="drop-down"><a>রক্তদাতা</a>
            <ul>
              <li><a class="">বিভাগ নির্বাচন করুন </a></li>
              <li class="drop-down"><a href="{{ route('donar') }}">ঢাকা</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ঢাকা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সাভার</a></li>
                      <li><a href="{{ route('donar') }}">ধামরাই</a></li>
                      <li><a href="{{ route('donar') }}">কেরাণীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">নবাবগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">দোহার</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নরসিংদী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নরসিংদী</a></li>
                      <li><a href="{{ route('donar') }}">বেলাবো</a></li>
                      <li><a href="{{ route('donar') }}">মনোহরদী</a></li>
                      <li><a href="{{ route('donar') }}">পলাশ</a></li>
                      <li><a href="{{ route('donar') }}">রায়পুরা</a></li>
                      <li><a href="{{ route('donar') }}">শিবপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">গাজীপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">গাজীপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">কালিয়াকৈর</a></li>
                      <li><a href="{{ route('donar') }}">কাপাসিয়া</a></li>
                      <li><a href="{{ route('donar') }}">শ্রীপুর</a></li>
                      <li><a href="{{ route('donar') }}">কালীগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">শরীয়তপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">শরিয়তপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">নড়িয়া</a></li>
                      <li><a href="{{ route('donar') }}">জাজিরা</a></li>
                      <li><a href="{{ route('donar') }}">গোসাইরহাট</a></li>
                      <li><a href="{{ route('donar') }}">ভেদরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">ডামুড্যা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">টাঙ্গাইল</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ধনবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">বাসাইল</a></li>
                      <li><a href="{{ route('donar') }}">ভুয়াপুর</a></li>
                      <li><a href="{{ route('donar') }}">দেলদুয়ার</a></li>
                      <li><a href="{{ route('donar') }}">ঘাটাইল</a></li>
                      <li><a href="{{ route('donar') }}">গোপালপুর</a></li>
                      <li><a href="{{ route('donar') }}">মধুপুর</a></li>
                      <li><a href="{{ route('donar') }}">মির্জাপুর</a></li>
                      <li><a href="{{ route('donar') }}">দেলদুয়ার</a></li>
                      <li><a href="{{ route('donar') }}">নাগরপুর</a></li>
                      <li><a href="{{ route('donar') }}">সখিপুর</a></li>
                      <li><a href="{{ route('donar') }}">টাঙ্গাইল সদর</a></li>
                      <li><a href="{{ route('donar') }}">কালিহাতী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নারায়ণগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">আড়াইহাজার</a></li>
                      <li><a href="{{ route('donar') }}">বন্দর</a></li>
                      <li><a href="{{ route('donar') }}">নারায়নগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">রূপগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">সোনারগাঁ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">কিশোরগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নিকলী</a></li>
                      <li><a href="{{ route('donar') }}">ইটনা</a></li>
                      <li><a href="{{ route('donar') }}">কটিয়াদী</a></li>
                      <li><a href="{{ route('donar') }}">ভৈরব</a></li>
                      <li><a href="{{ route('donar') }}">তাড়াইল</a></li>
                      <li><a href="{{ route('donar') }}">হোসেনপুর</a></li>
                      <li><a href="{{ route('donar') }}">পাকুন্দিয়া</a></li>
                      <li><a href="{{ route('donar') }}">কুলিয়ারচর</a></li>
                      <li><a href="{{ route('donar') }}">কিশোরগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}">করিমগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বাজিতপুর</a></li>
                      <li><a href="{{ route('donar') }}">অষ্টগ্রাম</a></li>
                      <li><a href="{{ route('donar') }}">মিঠামইন</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মানিকগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">হরিরামপুর</a></li>
                      <li><a href="{{ route('donar') }}">সাটুরিয়া</a></li>
                      <li><a href="{{ route('donar') }}">মানিকগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}">ঘিওর</a></li>
                      <li><a href="{{ route('donar') }}">শিবালয়</a></li>
                      <li><a href="{{ route('donar') }}">দৌলতপুর</a></li>
                      <li><a href="{{ route('donar') }}">সিংগাইর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">রাজবাড়ী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">রাজবাড়ী সদর</a></li>
                      <li><a href="{{ route('donar') }}">গোয়ালন্দ</a></li>
                      <li><a href="{{ route('donar') }}">পাংশা</a></li>
                      <li><a href="{{ route('donar') }}">বালিয়াকান্দি</a></li>
                      <li><a href="{{ route('donar') }}">কালুখালী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মুন্সিগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">মুন্সিগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}">শ্রীনগর</a></li>
                      <li><a href="{{ route('donar') }}">সিরাজদিখান</a></li>
                      <li><a href="{{ route('donar') }}">লৌহজং</a></li>
                      <li><a href="{{ route('donar') }}">গজারিয়া</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">গোপালগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">গোপালগঞ্জ সদর, , , , </a></li>
                      <li><a href="{{ route('donar') }}">কাশিয়ানী</a></li>
                      <li><a href="{{ route('donar') }}">টুংগীপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">কোটালীপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">মুকসুদপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ফরিদপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ফরিদপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">আলফাডাঙ্গা</a></li>
                      <li><a href="{{ route('donar') }}">বোয়ালমারী</a></li>
                      <li><a href="{{ route('donar') }}">সদরপুর</a></li>
                      <li><a href="{{ route('donar') }}">নগরকান্দা</a></li>
                      <li><a href="{{ route('donar') }}">ভাঙ্গা</a></li>
                      <li><a href="{{ route('donar') }}">চরভদ্রাসন</a></li>
                      <li><a href="{{ route('donar') }}">মধুখালী</a></li>
                      <li><a href="{{ route('donar') }}">সালথা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মাদারীপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">মাদারীপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">শিবচর</a></li>
                      <li><a href="{{ route('donar') }}">কালকিনি</a></li>
                      <li><a href="{{ route('donar') }}">রাজৈর</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">রংপুর</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">দিনাজপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নবাবগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বীরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">ঘোড়াঘাট</a></li>
                      <li><a href="{{ route('donar') }}">বিরামপুর</a></li>
                      <li><a href="{{ route('donar') }}">পার্বতীপুর</a></li>
                      <li><a href="{{ route('donar') }}">বোচাগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">কাহারোল</a></li>
                      <li><a href="{{ route('donar') }}">ফুলবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">দিনাজপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">হাকিমপুর</a></li>
                      <li><a href="{{ route('donar') }}">খানসামা</a></li>
                      <li><a href="{{ route('donar') }}">বিরল</a></li>
                      <li><a href="{{ route('donar') }}">চিরিরবন্দর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">পঞ্চগড়</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">পঞ্চগড়, , , , </a></li>
                      <li><a href="{{ route('donar') }}">দেবীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বোদা</a></li>
                      <li><a href="{{ route('donar') }}">আটোয়ারী</a></li>
                      <li><a href="{{ route('donar') }}">তেতুলিয়া</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নীলফামারী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নীলফামারী সদর</a></li>
                      <li><a href="{{ route('donar') }}">ডোমার</a></li>
                      <li><a href="{{ route('donar') }}">ডিমলা</a></li>
                      <li><a href="{{ route('donar') }}">জলঢাকা</a></li>
                      <li><a href="{{ route('donar') }}">কিশোরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">সৈয়দপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">রংপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">রংপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">গংগাচড়া</a></li>
                      <li><a href="{{ route('donar') }}">তারাগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বদরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">মিঠাপুকুর</a></li>
                      <li><a href="{{ route('donar') }}">পীরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">কাউনিয়া</a></li>
                      <li><a href="{{ route('donar') }}">পীরগাছা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">গাইবান্ধা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সাদুল্লাপুর</a></li>
                      <li><a href="{{ route('donar') }}">গাইবান্ধা সদর</a></li>
                      <li><a href="{{ route('donar') }}">পলাশবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">সাঘাটা</a></li>
                      <li><a href="{{ route('donar') }}">গোবিন্দগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">সুন্দরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">ফুলছড়ি</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">লালমনিরহাট</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">লালমনিরহাট সদর</a></li>
                      <li><a href="{{ route('donar') }}">কালীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">হাতীবান্ধা</a></li>
                      <li><a href="{{ route('donar') }}">পাটগ্রাম</a></li>
                      <li><a href="{{ route('donar') }}">আদিতমারী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">কুড়িগ্রাম</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">কুড়িগ্রাম সদর</a></li>
                      <li><a href="{{ route('donar') }}">নাগেশ্বরী</a></li>
                      <li><a href="{{ route('donar') }}">ভুরুঙ্গামারী</a></li>
                      <li><a href="{{ route('donar') }}">ফুলবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">রাজারহাট</a></li>
                      <li><a href="{{ route('donar') }}">উলিপুর</a></li>
                      <li><a href="{{ route('donar') }}">চিলমারী</a></li>
                      <li><a href="{{ route('donar') }}">রৌমারী</a></li>
                      <li><a href="{{ route('donar') }}">চর রাজিবপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ঠাকুরগাঁও</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ঠাকুরগাঁও সদর</a></li>
                      <li><a href="{{ route('donar') }}">পীরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">রাণীশংকৈল</a></li>
                      <li><a href="{{ route('donar') }}">হরিপুর</a></li>
                      <li><a href="{{ route('donar') }}">বালিয়াডাঙ্গী</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="drop-down"><a href="{{ route('donar') }}">রাজশাহী</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">রাজশাহী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">পবা</a></li>
                      <li><a href="{{ route('donar') }}">দুর্গাপুর</a></li>
                      <li><a href="{{ route('donar') }}">মোহনপুর</a></li>
                      <li><a href="{{ route('donar') }}">চারঘাট</a></li>
                      <li><a href="{{ route('donar') }}">পুঠিয়া</a></li>
                      <li><a href="{{ route('donar') }}">বাঘা</a></li>
                      <li><a href="{{ route('donar') }}">গোদাগাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">তানোর</a></li>
                      <li><a href="{{ route('donar') }}">বাগমারা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">সিরাজগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">বেলকুচি</a></li>
                      <li><a href="{{ route('donar') }}">চৌহালি</a></li>
                      <li><a href="{{ route('donar') }}">কামারখন্দ</a></li>
                      <li><a href="{{ route('donar') }}">কাজীপুর</a></li>
                      <li><a href="{{ route('donar') }}">রায়গঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">শাহজাদপুর</a></li>
                      <li><a href="{{ route('donar') }}">সিরাজগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">তাড়াশ</a></li>
                      <li><a href="{{ route('donar') }}">উল্লাপাড়া</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">পাবনা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সুজানগর</a></li>
                      <li><a href="{{ route('donar') }}">ঈশ্বরদী</a></li>
                      <li><a href="{{ route('donar') }}">ভাঙ্গুড়া</a></li>
                      <li><a href="{{ route('donar') }}">পাবনা সদর</a></li>
                      <li><a href="{{ route('donar') }}">বেড়া</a></li>
                      <li><a href="{{ route('donar') }}">আটঘরিয়া</a></li>
                      <li><a href="{{ route('donar') }}">চাটমোহর</a></li>
                      <li><a href="{{ route('donar') }}">সাঁথিয়া</a></li>
                      <li><a href="{{ route('donar') }}">ফরিদপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">বগুড়া</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">কাহালু</a></li>
                      <li><a href="{{ route('donar') }}">বগুড়া সদর</a></li>
                      <li><a href="{{ route('donar') }}">সারিয়াকান্দি</a></li>
                      <li><a href="{{ route('donar') }}">শাজাহানপুর</a></li>
                      <li><a href="{{ route('donar') }}">দুপচাচিঁয়া</a></li>
                      <li><a href="{{ route('donar') }}">আদমদিঘি</a></li>
                      <li><a href="{{ route('donar') }}">নন্দিগ্রাম</a></li>
                      <li><a href="{{ route('donar') }}">ধুনট</a></li>
                      <li><a href="{{ route('donar') }}">সোনাতলা</a></li>
                      <li><a href="{{ route('donar') }}">গাবতলী</a></li>
                      <li><a href="{{ route('donar') }}">শেরপুর</a></li>
                      <li><a href="{{ route('donar') }}">শিবগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নাটোর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নাটোর সদর</a></li>
                      <li><a href="{{ route('donar') }}">সিংড়া</a></li>
                      <li><a href="{{ route('donar') }}">বড়াইগ্রাম</a></li>
                      <li><a href="{{ route('donar') }}">বাগাতিপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">লালপুর</a></li>
                      <li><a href="{{ route('donar') }}">গুরুদাসপুর</a></li>
                      <li><a href="{{ route('donar') }}">নলডাঙ্গা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">জয়পুরহাট</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">আক্কেলপুর</a></li>
                      <li><a href="{{ route('donar') }}">কালাই</a></li>
                      <li><a href="{{ route('donar') }}">ক্ষেতলাল</a></li>
                      <li><a href="{{ route('donar') }}">পাঁচবিবি</a></li>
                      <li><a href="{{ route('donar') }}">জয়পুরহাট সদর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">চাঁপাইনবাবগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">চাঁপাইনবাবগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}">গোমস্তাপুর</a></li>
                      <li><a href="{{ route('donar') }}">নাচোল</a></li>
                      <li><a href="{{ route('donar') }}">ভোলাহাট</a></li>
                      <li><a href="{{ route('donar') }}">শিবগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নওগাঁ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নওগাঁ সদর</a></li>
                      <li><a href="{{ route('donar') }}">মহাদেবপুর</a></li>
                      <li><a href="{{ route('donar') }}">বদলগাছী</a></li>
                      <li><a href="{{ route('donar') }}">পত্নিতলা</a></li>
                      <li><a href="{{ route('donar') }}">ধামইরহাট</a></li>
                      <li><a href="{{ route('donar') }}">নিয়ামতপুর</a></li>
                      <li><a href="{{ route('donar') }}">মান্দা</a></li>
                      <li><a href="{{ route('donar') }}">আত্রাই</a></li>
                      <li><a href="{{ route('donar') }}">রাণীনগর</a></li>
                      <li><a href="{{ route('donar') }}">পোরশা</a></li>
                      <li><a href="{{ route('donar') }}">সাপাহার</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">খুলনা</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">খুলনা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ফুলতলা</a></li>
                      <li><a href="{{ route('donar') }}">পাইকগাছা</a></li>
                      <li><a href="{{ route('donar') }}">দিঘলিয়া</a></li>
                      <li><a href="{{ route('donar') }}">রূপসা</a></li>
                      <li><a href="{{ route('donar') }}">তেরখাদা</a></li>
                      <li><a href="{{ route('donar') }}">ডুমুরিয়া</a></li>
                      <li><a href="{{ route('donar') }}">বটিয়াঘাটা</a></li>
                      <li><a href="{{ route('donar') }}">দাকোপ</a></li>
                      <li><a href="{{ route('donar') }}">কয়রা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">যশোর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">যশোর সদর</a></li>
                      <li><a href="{{ route('donar') }}">অভয়নগর</a></li>
                      <li><a href="{{ route('donar') }}">বাঘারপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">চৌগাছা</a></li>
                      <li><a href="{{ route('donar') }}">ঝিকরগাছা</a></li>
                      <li><a href="{{ route('donar') }}">কেশবপুর</a></li>
                      <li><a href="{{ route('donar') }}">শার্শা</a></li>
                      <li><a href="{{ route('donar') }}">মণিরামপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">সাতক্ষীরা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সাতক্ষীরা সদর</a></li>
                      <li><a href="{{ route('donar') }}">আশাশুনি</a></li>
                      <li><a href="{{ route('donar') }}">দেবহাটা</a></li>
                      <li><a href="{{ route('donar') }}">কলারোয়া</a></li>
                      <li><a href="{{ route('donar') }}">শ্যামনগর</a></li>
                      <li><a href="{{ route('donar') }}">তালা</a></li>
                      <li><a href="{{ route('donar') }}">কালিগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মেহেরপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">মেহেরপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">মুজিবনগর</a></li>
                      <li><a href="{{ route('donar') }}">গাংনী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নড়াইল</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নড়াইল সদর</a></li>
                      <li><a href="{{ route('donar') }}">লোহাগড়া</a></li>
                      <li><a href="{{ route('donar') }}">কালিয়া</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">চুয়াডাঙ্গা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">চুয়াডাঙ্গা সদর, , , </a></li>
                      <li><a href="{{ route('donar') }}">আলমডাঙ্গা</a></li>
                      <li><a href="{{ route('donar') }}">দামুড়হুদা</a></li>
                      <li><a href="{{ route('donar') }}">জীবননগর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">কুষ্টিয়া</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">কুষ্টিয়া সদর</a></li>
                      <li><a href="{{ route('donar') }}">কুমারখালী</a></li>
                      <li><a href="{{ route('donar') }}">খোকসা</a></li>
                      <li><a href="{{ route('donar') }}">মিরপুর</a></li>
                      <li><a href="{{ route('donar') }}">দৌলতপুর</a></li>
                      <li><a href="{{ route('donar') }}">ভেড়ামারা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মাগুরা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">মাগুরা সদর</a></li>
                      <li><a href="{{ route('donar') }}">শালিখা</a></li>
                      <li><a href="{{ route('donar') }}">শ্রীপুর</a></li>
                      <li><a href="{{ route('donar') }}">মহম্মদপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">বাগেরহাট</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">বাগেরহাট সদর</a></li>
                      <li><a href="{{ route('donar') }}">ফকিরহাট</a></li>
                      <li><a href="{{ route('donar') }}">মোল্লাহাট</a></li>
                      <li><a href="{{ route('donar') }}">শরণখোলা</a></li>
                      <li><a href="{{ route('donar') }}">রামপাল</a></li>
                      <li><a href="{{ route('donar') }}">মোড়েলগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">কচুয়া</a></li>
                      <li><a href="{{ route('donar') }}">মোংলা</a></li>
                      <li><a href="{{ route('donar') }}">চিতলমারী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ঝিনাইদহ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ঝিনাইদহ সদর</a></li>
                      <li><a href="{{ route('donar') }}">শৈলকুপা</a></li>
                      <li><a href="{{ route('donar') }}">হরিণাকুন্ডু</a></li>
                      <li><a href="{{ route('donar') }}">কালীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">কোটচাঁদপুর</a></li>
                      <li><a href="{{ route('donar') }}">মহেশপুর</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">চট্টগ্রাম</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">চট্টগ্রাম</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">কর্ণফুলী</a></li>
                      <li><a href="{{ route('donar') }}">রাঙ্গুনিয়া</a></li>
                      <li><a href="{{ route('donar') }}">সীতাকুন্ড</a></li>
                      <li><a href="{{ route('donar') }}">মীরসরাই</a></li>
                      <li><a href="{{ route('donar') }}">পটিয়া</a></li>
                      <li><a href="{{ route('donar') }}">সন্দ্বীপ</a></li>
                      <li><a href="{{ route('donar') }}">বাঁশখালী</a></li>
                      <li><a href="{{ route('donar') }}">বোয়ালখালী</a></li>
                      <li><a href="{{ route('donar') }}">আনোয়ারা</a></li>
                      <li><a href="{{ route('donar') }}">চন্দনাইশ</a></li>
                      <li><a href="{{ route('donar') }}">সাতকানিয়া</a></li>
                      <li><a href="{{ route('donar') }}">লোহাগাড়া</a></li>
                      <li><a href="{{ route('donar') }}">হাটহাজারী</a></li>
                      <li><a href="{{ route('donar') }}">ফটিকছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">রাউজান</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">কুমিল্লা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">কুমিল্লা সদর</a></li>
                      <li><a href="{{ route('donar') }}">বরুড়া</a></li>
                      <li><a href="{{ route('donar') }}">ব্রাহ্মণপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">চান্দিনা</a></li>
                      <li><a href="{{ route('donar') }}">চৌদ্দগ্রাম</a></li>
                      <li><a href="{{ route('donar') }}">দাউদকান্দি</a></li>
                      <li><a href="{{ route('donar') }}">হোমনা</a></li>
                      <li><a href="{{ route('donar') }}">লাকসাম</a></li>
                      <li><a href="{{ route('donar') }}">মুরাদনগর</a></li>
                      <li><a href="{{ route('donar') }}">নাঙ্গলকোট</a></li>
                      <li><a href="{{ route('donar') }}">দেবিদ্বার</a></li>
                      <li><a href="{{ route('donar') }}">মেঘনা</a></li>
                      <li><a href="{{ route('donar') }}">মনোহরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">সদর দক্ষিণ</a></li>
                      <li><a href="{{ route('donar') }}">তিতাস</a></li>
                      <li><a href="{{ route('donar') }}">বুড়িচং</a></li>
                      <li><a href="{{ route('donar') }}">লালমাই</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ফেনী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ফেনী সদর</a></li>
                      <li><a href="{{ route('donar') }}">ছাগলনাইয়া</a></li>
                      <li><a href="{{ route('donar') }}">সোনাগাজী</a></li>
                      <li><a href="{{ route('donar') }}">ফুলগাজী</a></li>
                      <li><a href="{{ route('donar') }}">পরশুরাম</a></li>
                      <li><a href="{{ route('donar') }}">দাগনভূঞা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">রাঙ্গামাটি</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">রাঙ্গামাটি সদর</a></li>
                      <li><a href="{{ route('donar') }}">কাপ্তাই</a></li>
                      <li><a href="{{ route('donar') }}">কাউখালী</a></li>
                      <li><a href="{{ route('donar') }}">বাঘাইছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">বরকল</a></li>
                      <li><a href="{{ route('donar') }}">লংগদু</a></li>
                      <li><a href="{{ route('donar') }}">রাজস্থলী</a></li>
                      <li><a href="{{ route('donar') }}">বিলাইছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">জুরাছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">নানিয়ারচর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নোয়াখালী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নোয়াখাল</a></li>
                      <li><a href="{{ route('donar') }}">কোম্পানীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বেগমগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">হাতিয়া</a></li>
                      <li><a href="{{ route('donar') }}">সুবর্ণচর</a></li>
                      <li><a href="{{ route('donar') }}">কবিরহাট</a></li>
                      <li><a href="{{ route('donar') }}">সেনবাগ</a></li>
                      <li><a href="{{ route('donar') }}">চাটখিল</a></li>
                      <li><a href="{{ route('donar') }}">সোনাইমুড়ী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">চাঁদপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">চাঁদপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">হাইমচর</a></li>
                      <li><a href="{{ route('donar') }}">কচুয়া</a></li>
                      <li><a href="{{ route('donar') }}">শাহরাস্তি</a></li>
                      <li><a href="{{ route('donar') }}">মতলব</a></li>
                      <li><a href="{{ route('donar') }}">হাজীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">মতলব</a></li>
                      <li><a href="{{ route('donar') }}">ফরিদগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">কক্সবাজার</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">লক্ষ্মীপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">কমলনগর</a></li>
                      <li><a href="{{ route('donar') }}">রায়পুর</a></li>
                      <li><a href="{{ route('donar') }}">রামগতি</a></li>
                      <li><a href="{{ route('donar') }}">রামগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">খাগড়াছড়ি</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">খাগড়াছড়ি সদর</a></li>
                      <li><a href="{{ route('donar') }}">দিঘীনালা</a></li>
                      <li><a href="{{ route('donar') }}">পানছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">লক্ষীছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">মহালছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">মানিকছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">রামগড়</a></li>
                      <li><a href="{{ route('donar') }}">মাটিরাঙ্গা</a></li>
                      <li><a href="{{ route('donar') }}">গুইমারা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">বান্দরবান</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">বান্দরবান সদর</a></li>
                      <li><a href="{{ route('donar') }}">আলীকদম</a></li>
                      <li><a href="{{ route('donar') }}">নাইক্ষ্যংছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">রোয়াংছড়ি</a></li>
                      <li><a href="{{ route('donar') }}">লামা</a></li>
                      <li><a href="{{ route('donar') }}">রুমা</a></li>
                      <li><a href="{{ route('donar') }}">থানচি</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}"> লক্ষ্মীপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">লক্ষ্মীপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">কমলনগর</a></li>
                      <li><a href="{{ route('donar') }}">রায়পুর</a></li>
                      <li><a href="{{ route('donar') }}">রামগতি</a></li>
                      <li><a href="{{ route('donar') }}">রামগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}"> ব্রাহ্মণবাড়িয়া</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ব্রাহ্মণবাড়িয়া সদর</a></li>
                      <li><a href="{{ route('donar') }}">কসবা</a></li>
                      <li><a href="{{ route('donar') }}">নাসিরনগর</a></li>
                      <li><a href="{{ route('donar') }}">সরাইল</a></li>
                      <li><a href="{{ route('donar') }}">আশুগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">আখাউড়া</a></li>
                      <li><a href="{{ route('donar') }}">নবীনগর</a></li>
                      <li><a href="{{ route('donar') }}">বাঞ্ছারামপুর</a></li>
                      <li><a href="{{ route('donar') }}">বিজয়নগর</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">সিলেট</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">সিলেট</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সিলেট সদর</a></li>
                      <li><a href="{{ route('donar') }}">বালাগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বিয়ানীবাজার</a></li>
                      <li><a href="{{ route('donar') }}">বিশ্বনাথ</a></li>
                      <li><a href="{{ route('donar') }}">কোম্পানীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">ফেঞ্চুগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">গোলাপগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">জৈন্তাপুর</a></li>
                      <li><a href="{{ route('donar') }}">কানাইঘাট</a></li>
                      <li><a href="{{ route('donar') }}">জকিগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">দক্ষিণ সুরমা</a></li>
                      <li><a href="{{ route('donar') }}">ওসমানী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">মৌলভীবাজার</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">মৌলভীবাজার সদর</a></li>
                      <li><a href="{{ route('donar') }}">বড়লেখা</a></li>
                      <li><a href="{{ route('donar') }}">কমলগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">কুলাউড়া</a></li>
                      <li><a href="{{ route('donar') }}">রাজনগর</a></li>
                      <li><a href="{{ route('donar') }}">শ্রীমঙ্গল</a></li>
                      <li><a href="{{ route('donar') }}">জুড়ী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">হবিগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">হবিগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}">নবীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বাহুবল</a></li>
                      <li><a href="{{ route('donar') }}">আজমিরীগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বানিয়াচং</a></li>
                      <li><a href="{{ route('donar') }}">লাখাই</a></li>
                      <li><a href="{{ route('donar') }}">চুনারুঘাট</a></li>
                      <li><a href="{{ route('donar') }}">মাধবপুর</a></li>
                      <li><a href="{{ route('donar') }}">শায়েস্তাগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">সুনামগঞ্জ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">সুনামগঞ্জ সদর</a></li>
                      <li><a href="{{ route('donar') }}"> দক্ষিণ সুনামগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বিশ্বম্ভরপুর</a></li>
                      <li><a href="{{ route('donar') }}">ছাতক</a></li>
                      <li><a href="{{ route('donar') }}">জগন্নাথপুর</a></li>
                      <li><a href="{{ route('donar') }}">দোয়ারাবাজার</a></li>
                      <li><a href="{{ route('donar') }}">তাহিরপুর</a></li>
                      <li><a href="{{ route('donar') }}">ধর্মপাশা</a></li>
                      <li><a href="{{ route('donar') }}">জামালগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">শাল্লা</a></li>
                      <li><a href="{{ route('donar') }}">দিরাই</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">ময়মনসিংহ</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ময়মনসিংহ</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ময়মনসিংহ সদর</a></li>
                      <li><a href="{{ route('donar') }}">ফুলবাড়ীয়া</a></li>
                      <li><a href="{{ route('donar') }}">ত্রিশাল</a></li>
                      <li><a href="{{ route('donar') }}">ভালুকা</a></li>
                      <li><a href="{{ route('donar') }}">মুক্তাগাছা</a></li>
                      <li><a href="{{ route('donar') }}">ধোবাউড়া</a></li>
                      <li><a href="{{ route('donar') }}">ফুলপুর</a></li>
                      <li><a href="{{ route('donar') }}">হালুয়াঘাট</a></li>
                      <li><a href="{{ route('donar') }}">গৌরীপুর</a></li>
                      <li><a href="{{ route('donar') }}">গফরগাঁও</a></li>
                      <li><a href="{{ route('donar') }}">ঈশ্বরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">নান্দাইল</a></li>
                      <li><a href="{{ route('donar') }}">তারাকান্দা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">শেরপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">শেরপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">নালিতাবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">শ্রীবরদী</a></li>
                      <li><a href="{{ route('donar') }}">নকলা</a></li>
                      <li><a href="{{ route('donar') }}">ঝিনাইগাতী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">জামালপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">জামালপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">মেলান্দহ</a></li>
                      <li><a href="{{ route('donar') }}">ইসলামপুর</a></li>
                      <li><a href="{{ route('donar') }}">দেওয়ানগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">সরিষাবাড়ী</a></li>
                      <li><a href="{{ route('donar') }}">মাদারগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বকশীগঞ্জ</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">নেত্রকোণা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">নেত্রকোণা সদর</a></li>
                      <li><a href="{{ route('donar') }}">বারহাট্টা</a></li>
                      <li><a href="{{ route('donar') }}">দুর্গাপুর</a></li>
                      <li><a href="{{ route('donar') }}">কেন্দুয়া</a></li>
                      <li><a href="{{ route('donar') }}">আটপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">মদন</a></li>
                      <li><a href="{{ route('donar') }}">খালিয়াজুরী</a></li>
                      <li><a href="{{ route('donar') }}">কলমাকান্দা</a></li>
                      <li><a href="{{ route('donar') }}">মোহনগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">পূর্বধলা</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="drop-down"><a href="{{ route('donar') }}">বরিশাল</a>
                <ul>
                  <li><a>জেলা নির্বাচন করুন </a></li>
                  <li class="drop-down"><a href="{{ route('donar') }}">বরিশাল</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">বরিশাল সদর</a></li>
                      <li><a href="{{ route('donar') }}">বাকেরগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">বাবুগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">উজিরপুর</a></li>
                      <li><a href="{{ route('donar') }}">বানারীপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">গৌরনদী</a></li>
                      <li><a href="{{ route('donar') }}">আগৈলঝাড়া</a></li>
                      <li><a href="{{ route('donar') }}">মেহেন্দিগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">মুলাদী</a></li>
                      <li><a href="{{ route('donar') }}">হিজলা</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ঝালকাঠি</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ঝালকাঠি সদর</a></li>
                      <li><a href="{{ route('donar') }}">কাঠালিয়া</a></li>
                      <li><a href="{{ route('donar') }}">নলছিটি</a></li>
                      <li><a href="{{ route('donar') }}">রাজাপুর</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">পটুয়াখালী</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">পটুয়াখালী সদর</a></li>
                      <li><a href="{{ route('donar') }}">বাউফল</a></li>
                      <li><a href="{{ route('donar') }}">দুমকি</a></li>
                      <li><a href="{{ route('donar') }}">দশমিনা</a></li>
                      <li><a href="{{ route('donar') }}">কলাপাড়া</a></li>
                      <li><a href="{{ route('donar') }}">মির্জাগঞ্জ</a></li>
                      <li><a href="{{ route('donar') }}">গলাচিপা</a></li>
                      <li><a href="{{ route('donar') }}">রাঙ্গাবালী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">পিরোজপুর</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">পিরোজপুর সদর</a></li>
                      <li><a href="{{ route('donar') }}">নাজিরপুর</a></li>
                      <li><a href="{{ route('donar') }}">কাউখালী</a></li>
                      <li><a href="{{ route('donar') }}">ভান্ডারিয়া</a></li>
                      <li><a href="{{ route('donar') }}">মঠবাড়ীয়া</a></li>
                      <li><a href="{{ route('donar') }}">নেছারাবাদ</a></li>
                      <li><a href="{{ route('donar') }}">ইন্দুরকানী</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">ভোলা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">ভোলা সদর</a></li>
                      <li><a href="{{ route('donar') }}">বোরহান উদ্দিন</a></li>
                      <li><a href="{{ route('donar') }}">চরফ্যাশন</a></li>
                      <li><a href="{{ route('donar') }}">দৌলতখান</a></li>
                      <li><a href="{{ route('donar') }}">মনপুরা</a></li>
                      <li><a href="{{ route('donar') }}">তজুমদ্দিন</a></li>
                      <li><a href="{{ route('donar') }}">লালমোহন</a></li>

                    </ul>
                  </li>
                  <li class="drop-down"><a href="{{ route('donar') }}">বরগুনা</a>
                    <ul>
                      <li><a>উপজেলা নির্বাচন করুন </a></li>
                      <li><a href="{{ route('donar') }}">বরগুনা সদর</a></li>
                      <li><a href="{{ route('donar') }}">আমতলী</a></li>
                      <li><a href="{{ route('donar') }}">বেতাগী</a></li>
                      <li><a href="{{ route('donar') }}">বামনা</a></li>
                      <li><a href=""{{ route('donar') }}"">পাথরঘাটা</a></li>
                      <li><a href="{{ route('donar') }}">তালতলি</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a href="#contact">যোগাযোগ করুন</a></li>
          <li><a href="{{ route('donar') }}">ডোনার নিবন্ধন</a></li>
          {{-- <li><a href="{{ route('donar') }}">এডমিন</a></li> --}}

          <li><a href="{{ route('login') }}" target="_blank" >লগইন</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}" target="_blank" > রেজিস্টার</a></li>
            @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>


  @yield('main')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>আমাদের সংবাদ সংকলনে যোগদান করুন</h4>

            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="সাবস্ক্রাইব">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>স্বেচ্ছায় <span>রক্ত</span> দান<span>.</span></h3>
            <p>
              Salimullah ROAD <br>
              Mohammadpur, Dhaka-1207<br>
              Bangladesh <br><br>
              <strong>Phone:</strong> +880 1839584948<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>দরকারী লিংক</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">হোম</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">আমাদের সম্পর্কে</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">সেবা</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">সেবা পাবার শর্ত</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">গোপনীয়তা নীতি</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>আমাদের সেবাসমূহ</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">ওয়েব ডিজাইন</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">ওয়েব ডেভেলপমেন্ট</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">পণ্য ব্যবস্থাপনা</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">মার্কেটিং</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('donar') }}">গ্রাফিক ডিজাইন</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>আমাদের সামাজিক নেটওয়ার্ক</h4>

            <div class="social-links mt-3">
              <a href="{{ route('donar') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{ route('donar') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ route('donar') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ route('donar') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="{{ route('donar') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; কপিরাইট <strong><span>বাঁধন সরকার</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

         ডেভেলপ বাই_ <a href="https://badhonsarkar.com">বাঁধন সরকার </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="{{ route('donar') }}" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

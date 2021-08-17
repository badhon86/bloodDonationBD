@extends('layouts.welcome2nav')
@section('main')
<br>
<br>
<br>
<br>

<!-- ======= donar Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>রক্তদাতা</h2>
        <h3>রক্তদাতাদের <span>তালিকা</span></h3>

      </div>

      <div class="row">

        @foreach ($gdData as $Data)
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3> {{$Data->fist_name}} </h3>
            <h4><sup>গ্রুপ</sup>{{$Data->blood_group}}<span> </span></h4>
            <ul>
              <li><i class="icofont-ui-call"></i>{{$Data->phone}}</li>
              <li><i class="icofont-address-book"></i>{{$Data->address}}</li>
              <li><i class="icofont-users-alt-4"></i>{{$Data->gender}}</li>
              <li><i class="icofont-clock-time"></i>Last Donate: {{$Data->lastdonate}}</li>
            </ul>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
         </div>
         <br>
        </div>
        @endforeach
        {{-- <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3> সরকার </h3>
            <h4><sup>গ্রুপ</sup>AB<span> (+ve)</span></h4>
            <ul>
              <li><i class="icofont-ui-call"></i>+880 1797589372</li>
              <li><i class="icofont-address-book"></i>Salimullah RD, Mohammadpur, Dhaka-1207</li>
              <li><i class="icofont-users-alt-4"></i>Male</li>
              <li><i class="icofont-clock-time"></i>Last Donate: 06/06/2021</li>
            </ul>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
         </div>
         <br>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3> সরকার </h3>
            <h4><sup>গ্রুপ</sup>AB<span> (+ve)</span></h4>
            <ul>
              <li><i class="icofont-ui-call"></i>+880 1797589372</li>
              <li><i class="icofont-address-book"></i>Salimullah RD, Mohammadpur, Dhaka-1207</li>
              <li><i class="icofont-users-alt-4"></i>Male</li>
              <li><i class="icofont-clock-time"></i>Last Donate: 06/06/2021</li>
            </ul>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
         </div>
         <br>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3> সরকার </h3>
            <h4><sup>গ্রুপ</sup>AB<span> (+ve)</span></h4>
            <ul>
              <li><i class="icofont-ui-call"></i>+880 1797589372</li>
              <li><i class="icofont-address-book"></i>Salimullah RD, Mohammadpur, Dhaka-1207</li>
              <li><i class="icofont-users-alt-4"></i>Male</li>
              <li><i class="icofont-clock-time"></i>Last Donate: 06/06/2021</li>
            </ul>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
         </div>
         <br>
        </div>
 --}}


      </div>

    </div>
  </section><!-- End donar Section -->
@endsection

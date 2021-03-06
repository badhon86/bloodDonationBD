@extends('layouts.welcome2nav')
@section('main')
<br>
<br>
<br>
<br>
<br>
<br>


<section>




        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <style>

        </style>


        <div class="testbox1">

          <form method="post" action="{{route('store')}}">
            @csrf
            <h2>রক্তদাতার নিবন্ধন ফর্ম</h2>
            <h5>ব্যক্তিগত তথ্য</h5>
            <div class="item">
              <p>আপনার পুরো নাম (নিবন্ধিত হিসাবে)</p>
              <div class="name-item">
                <input type="text" name="fist_name" placeholder="নামের প্রথম অংশ" required/>
                <input type="text" name="last_name" placeholder="নামের শেষাংশ" required />
              </div>
            </div>
            <div class="item">
              <p>সেক্স </p>
              <select name="gender">
                <option value="">সেক্স</option>
                <option selected value="male">পুরুষ</option>
                <option value="female">মহিলা</option>
              </select>
            </div>
            <div class="item">
                <p>জন্ম তারিখ নির্বাচন করুন</p>
                <input type="date" name="birth_date" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>

            <div class="item">
              <p>রক্তের গ্রুপ নির্ধারণ করুন </p>
              <select name="blood_group">
                <option value="AB(+ve)">AB(+ve)</option>
                <option value="AB(-ve)">AB(-ve)</option>
                <option value="A(+ve)">A(+ve)</option>
                <option value="B(+ve)">B(+ve)</option>
                <option value="O(+ve)">O(+ve)</option>
                <option value="A(-ve)">A(-ve)</option>
                <option value="B(-ve)">B(-ve)</option>
                <option value="O(-ve)">O(-ve)</option>
              </select>
            </div>
            <div class="item">
              <p>ঠিকানা</p>
              <input type="text" name="address" placeholder="আপনার ঠিকানা" required/>
              {{-- <input type="text" name="name" placeholder="রাস্তার ঠিকানা লাইন 2"/> --}}
              <div class="city-item">
                <input type="text" name="division" placeholder="আপনার বিভাগ টাইপ করুন" required/>
                <input type="text" name="district" placeholder="আপনার জেলা টাইপ করুন" required/>
                <input type="text" name="upozilla" placeholder="আপনার উপজেলা টাইপ করুন" required/>

                <select name="nationality">
                  <option value="bangladeshi">বাংলাদেশী </option>
                  {{-- <option value="1">Russia</option>
                  <option value="2">Germany</option>
                  <option value="3">France</option>
                  <option value="4">Armenia</option>
                  <option value="5">USA</option> --}}
                </select>
              </div>
            </div>
            <div class="item">
              <p>ইমেইল </p>
              <input type="text" name="email" placeholder="আপনার ইমেইল টাইপ করুন(যদি থাকে)"/>
            </div>
            <div class="item">
              <p>ফোন </p>
              <input type="text" name="phone" placeholder="আপনার ফোন নম্বর টাইপ করুন" required/>
            </div>
            {{-- <div class="item preferred-metod">
              <p>আপনার সাথে যোগাযোগের মাধ্যম</p>
              <div class="preferred-metod-item">
                <label><input type="checkbox" name="name"> <span>ইমেইল</span></label>
                <label><input type="checkbox" name="name"> <span>ফোন</span></label>
                <label><input type="checkbox" name="name"> <span>U.S. Mail</span></label>
              </div>
            </div> --}}
            {{-- <h5>Inf</h5> --}}

            <div class="item">
                <p>শেষ কবে রক্ত দান করেছেন? </p>
                <input type="date" name="lastdonate" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>
            <div class="btn-block">
              <button type="submit">নিবন্ধন করুন</button>
            </div>
            @if (Session ::has('success'))
            <div class="div alert alert-success">{{ Session::get('success') }}</div>
           @endif
          </form>
        </div>
</section>


@endsection

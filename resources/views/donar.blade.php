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
          <forms action="/">
            <h2>রক্তদাতার নিবন্ধন ফর্ম</h2>
            <h5>ব্যক্তিগত তথ্য</h5>
            <div class="item">
              <p>আপনার পুরো নাম (নিবন্ধিত হিসাবে)</p>
              <div class="name-item">
                <input type="text" name="name" placeholder="নামের প্রথম অংশ" />
                <input type="text" name="name" placeholder="নামের শেষাংশ" />
              </div>
            </div>
            <div class="item">
              <p>সেক্স </p>
              <select>
                <option value="">সেক্স</option>
                <option selected value="1">পুরুষ</option>
                <option value="2">মহিলা</option>
              </select>
            </div>
            <div class="item">
                <p>জন্ম তারিখ নির্বাচন করুন</p>
                <input type="date" name="name" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>

            <div class="item">
              <p>রক্তের গ্রুপ নির্ধারণ করুন </p>
              <select>
                <option value="1">AB(+ve)</option>
                <option value="2">AB(-ve)</option>
                <option value="3">A(+ve)</option>
                <option value="4">B(+ve)</option>
                <option value="5">O(+ve)</option>
                <option value="6">A(-ve)</option>
                <option value="7">B(-ve)</option>
                <option value="8">O(-ve)</option>
              </select>
            </div>
            <div class="item">
              <p>ঠিকানা</p>
              <input type="text" name="name" placeholder="আপনার ঠিকানা"/>
              {{-- <input type="text" name="name" placeholder="রাস্তার ঠিকানা লাইন 2"/> --}}
              <div class="city-item">
                <input type="text" name="name" placeholder="আপনার বিভাগ টাইপ করুন" />
                <input type="text" name="name" placeholder="আপনার জেলা টাইপ করুন" />
                <input type="text" name="name" placeholder="আপনার উপজেলা টাইপ করুন" />

                <select>
                  <option value="1">বাংলাদেশী </option>
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
              <input type="text" name="name" placeholder="আপনার ইমেইল টাইপ করুন(যদি থাকে)"/>
            </div>
            <div class="item">
              <p>ফোন </p>
              <input type="text" name="name" placeholder="আপনার ফোন নম্বর টাইপ করুন"/>
            </div>
            <div class="item preferred-metod">
              <p>আপনার সাথে যোগাযোগের মাধ্যম</p>
              <div class="preferred-metod-item">
                <label><input type="checkbox" name="name"> <span>ইমেইল</span></label>
                <label><input type="checkbox" name="name"> <span>ফোন</span></label>
                {{-- <label><input type="checkbox" name="name"> <span>U.S. Mail</span></label> --}}
              </div>
            </div>
            {{-- <h5>Inf</h5> --}}

            <div class="item">
                <p>শেষ কবে রক্ত দান করেছেন? </p>
                <input type="date" name="name" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>
            {{-- <div class="item">
              <p>Name(s) of the person(s) involved</p>
              <textarea rows="5"></textarea>
            </div>
            <div class="item">
              <p>Please describe your complaint in detail. Include the names of persons, locations, and dates involved. If this complaint is against specific person(s), please list their names and titles</p>
              <textarea rows="5"></textarea>
            </div>
            <div class="item">
              <p>What attempts have you made to resolve this complaint up to now? Please state who you contacted and what transpired</p>
              <textarea rows="5"></textarea>
            </div>
            <div class="item">
              <p>Why do you think the complaint was not able to be resolved in your prior attempts?</p>
              <textarea rows="5"></textarea>
            </div>
            <div class="item">
              <p>What resolution would you consider fair? What resolution do you seek?</p>
              <textarea rows="5"></textarea>
            </div>
            <div class="item">
              <p>Any other information you want to provide?</p>
              <textarea rows="5"></textarea>
            </div> --}}
            <div class="btn-block">
              <button type="submit" href="/">নিবন্ধন করুন </button>
            </div>
          </forms>
        </div>
</section>


@endsection

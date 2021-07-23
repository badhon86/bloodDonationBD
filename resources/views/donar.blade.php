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
          section, body {
          min-height: 100%;
          }
          body, div, form, input, select, p {
          padding: 0;
          margin: 0;
          outline: none;
          font-family: Roboto, Arial, sans-serif;
          font-size: 14px;
          color: #666;
          line-height: 22px;
          }
          h1 {
          margin: 15px 0;
          font-weight: 400;
          }
          .testbox {
          display: flex;
          justify-content: center;
          align-items: center;
          height: inherit;
          padding: 3px;
          }
          form {
          width: 70%;
          padding: 20px;
          background: #fff;
          box-shadow: 0 2px 5px #ccc;
          }
          input, select, textarea {
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 3px;
          }
          input {
          width: calc(100% - 10px);
          padding: 5px;
          }
          select {
          width: 100%;
          padding: 7px 0;
          background: transparent;
          }
          textarea {
          width: calc(100% - 6px);
          }
          .item {
          position: relative;
          margin: 10px 0;
          }
          .item:hover p, .item:hover i {
          color: #1f961b;
          }
          input:hover, select:hover, textarea:hover, .preferred-metod label:hover input {
          box-shadow: 0 0 5px 0 #bbb2b2;
          }
          .preferred-metod label {
          display: block;
          margin: 5px 0;
          }
          .preferred-metod:hover input {
          box-shadow: none;
          }
          .preferred-metod-item input, .preferred-metod-item span {
          width: auto;
          vertical-align: middle;
          }
          .preferred-metod-item input {
          margin: 0 5px 0 0;
          }
          input[type="date"]::-webkit-inner-spin-button {
          display: none;
          }
          .item i, input[type="date"]::-webkit-calendar-picker-indicator {
          position: absolute;
          font-size: 20px;
          color: #a9a9a9;
          }
          .item i {
          right: 1%;
          top: 30px;
          z-index: 1;
          }
          [type="date"]::-webkit-calendar-picker-indicator {
          right: 0;
          z-index: 2;
          opacity: 0;
          cursor: pointer;
          }
          .btn-block {
          margin-top: 20px;
          text-align: center;
          }
          button {
          width: 150px;
          padding: 10px;
          border: none;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
          background-color: #0d5a1a;
          font-size: 16px;
          color: #fff;
          cursor: pointer;
          }
          button:hover {
          background-color: #c01010;
          }
          @media (min-width: 568px) {
          .name-item, .city-item {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          }
          .name-item input, .city-item input {
          width: calc(50% - 20px);
          }
          .city-item select {
          width: calc(50% - 8px);
          }
          }
        </style>


        <div class="testbox">
          <form action="/">
            <h2>রক্ত দাতা নিবন্ধন ফর্ম</h2>
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
                <p>জন্ম তারিখ সিলেক্ট করুন</p>
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
              <input type="text" name="name" placeholder="রাস্তার ঠিকানা"/>
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
              <input type="text" name="name" placeholder="আপনার ইমেইল টাইপ করুন"/>
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
          </form>
        </div>
</section>


@endsection

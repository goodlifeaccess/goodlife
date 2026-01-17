
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
@include('includes.header')

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
<section class="ftco-section1 img" style="background:#692c91;">
<div class="overlay"></div>
<div class="to-hide">
<div class=" row d-flex align-items-center justify-content-end  flex-column  pb-3 to-hide" >
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">CSI Project(Community and Social Involvement)</h2>
</div>
</div>
@php
$galleries= [
    [
        'image' => 'images/umuganda/1.jpg',
    ],
    [
        'image' => 'images/umuganda/2.jpg',
    ],
    [
        'image' => 'images/umuganda/3.jpg',
    ],
    [
        'image' => 'images/umuganda/4.jpg',
    ],
    [
        'image' => 'images/umuganda/5.jpg',
    ],
    [
        'image' => 'images/umuganda/6.jpg',
    ],
    [
        'image' => 'images/umuganda/7.jpg',
    ],
    [
        'image' => 'images/umuganda/8.jpg',
    ]


  
];

    @endphp

    @php
$freescreeningImg= [
    [
        'image' => 'images/screening/screening2.jpg',
    ],
    [
        'image' => 'images/screening/screening3.jpg',
    ],
    [
        'image' => 'images/screening/screening1.jpg',
    ]


  
];

    @endphp
</div>
</section>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-sm-8 col-lg-6">
        <img src="images/umuganda/2.jpg" class="d-block mx-lg-auto img-fluid" alt="Umuganda" loading="lazy" style="width: 500px">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Umuganda</h1>
        <p class="">Umuganda also translated as ‘coming together in common purpose to achieve an outcome’ was started  the period immediately after independence in 1962, organized under special circumstances and was considered as an individual contribution to nation building.
            During umuganda, <strong style="color: #692c91">Goodlife</strong> offers Community Based Health Insurance (Mutuelle de santé) to the citizens from poor families.
        </p>
        <ul>
          <li>Mutual de sante: 1,200 + sponsorships in the communities</li>
        </ul>
      </div>
 
    </div>
  </div>
  <!-- <div class="b-example-divider"></div> -->
  
  <div class="row px-4">


    @foreach($galleries as $index => $data)
    <a class="col-md-6 col-lg-3 ftco-animate "  data-lightbox="mygallery" href="{{ asset($data['image']) }}" data-setbg="{{  asset($data['image']) }}">
          <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url('{{  asset($data['image']) }}')"></div>
              </div>
          </div>
          </a>
     
                      @endforeach
  </div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-sm-8 col-lg-6">
        <img src="images/screening/screening1.jpg" class="d-block mx-lg-auto img-fluid" alt="Umuganda" loading="lazy" style="width: 500px">
      </div>
      <div class="col-lg-6">
        <h3 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Free Health Screening</h3>
        <ul>
          <li>we offer free health screening in the communities around us</li>
        </ul>
      </div>
 
    </div>
  </div>

  <div class="row px-4">


@foreach($freescreeningImg as $index => $data)
<a class="col-md-6 col-lg-4 ftco-animate "  data-lightbox="mygallery" href="{{ asset($data['image']) }}" data-setbg="{{  asset($data['image']) }}">
      <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url('{{  asset($data['image']) }}')"></div>
          </div>
      </div>
      </a>
 
                  @endforeach
</div>
@include('includes.footer')

</body>
</html>
@endsection
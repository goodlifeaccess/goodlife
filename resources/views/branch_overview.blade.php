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

  <body class="bg-light" data-spy="scroll" data-target=".site-navbar-target1" data-offset="300">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <br><br>
      <div class="img-wrap">
      <img style="  height: 400px; width:100%;
  object-fit: cover;" class="d-block mx-auto mb-4 img-fluid" src="{{asset('images/stores/'.$branch['image'])}}" alt="logo">

      </div>
      <h2>  {{ $branch['name'] }} Overview</h2>
      <p class="lead">Below are the informations that can help you to quick get support from your nearest branch 24/7.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Contact(s)</span> 
        </h4>
        <ul class="list-group mb-3">
        @if(is_array($branch['phone']))
            @foreach($branch['phone'] as $key => $phone)
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ $key }}</h6>
              <!-- <small class="text-muted">(Receptionist)</small> -->
            </div>
            <span class="text-muted"><a href="tel:">{{ $phone }}</a></span>
          </li>
            @endforeach
        @else
          
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">
              <span class="text-muted"><a href="tel:">  {{ $branch['phone'] }}</a></span>
              </h6>
       
            </div>
          
          </li>
        @endif
      
         
        </ul>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Emails(s)</span> 
        </h4>
        <ul class="list-group mb-3">
        @if(is_array($branch['email']))
            @foreach($branch['email'] as $key => $email)
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ $key }}</h6>
              <!-- <small class="text-muted">(Receptionist)</small> -->
            </div>
            <span class="text-muted"><a href="tel:">{{ $email }}</a></span>
          </li>
            @endforeach
        @else
          
            <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">
              <span class="text-muted"><a href="tel:">  {{ $branch['email'] }}</a></span>
              </h6>
       
            </div>
          
          </li>
        @endif
      
         
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Review on Google Map</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
          <iframe src="{{ $branch['map'] }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </form>
      </div>
    </div>
  </main>
  <br><br>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
      @include('includes.footer')

    </body>
    </html>
    @endsection


@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('includes.header')
<section class="ftco-section1 img" style="background:#692c91;">
<div class="overlay"></div>
<div class="container">
<div class="to-hide row d-flex align-items-center justify-content-end flex-column  pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 >Our  Branches</h2>
</div>
</div>

</div>
</section>

<section class="ftco-section" id="doctor-section">
<div class="container-fluid px-5">
<div class="row justify-content-center mb-5 pb-2">
<div class="col-md-8 text-center heading-section ftco-animate">
<p> 
    these are our branches in different places in Rwanda where you can get our services.
</p>
    </div>
</div>
<div class="row">
    @foreach($branches as $branch)
    @php
        // Use the branch name to create a suitable image name
        $imageName = strtolower(str_replace(' ', '_', $branch['name'])) . '.jpg';
        $phoneNumbers = is_array($branch['phone']) ? implode(', ', $branch['phone']) : $branch['phone'];
        // Format the email addresses for display
        $emailAddresses = is_array($branch['email']) ? implode(', ', $branch['email']) : $branch['email'];
    @endphp
    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url('{{ asset('images/stores/' . $branch['image']) }}')"></div>
            </div>
            <div class="text pt-3 text-center">
                <h3 class="mb-2">{{ $branch['name'] }}</h3>
                <span class="position mb-2">{{ $branch['address'] }}</span>
                <span class="position mb-2">{{ $phoneNumbers }}</span>


                <div class="faded">
                    <p></p>
                    <!-- <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul> -->
                    <!-- <p><a href="mailto:{{ $branch['email'] }}" class="btn btn-primary">contact</a> -->
                    &nbsp; <a href="{{ route('branches.show', $branch['name']) }}" class="btn btn-primary">View More</a></p>

                </div>
            </div>
        </div>
    </div>
@endforeach

</div>
</div>
</section>

@include('includes.footer')

</body>
</html>
@endsection
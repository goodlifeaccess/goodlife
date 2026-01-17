
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target1" data-offset="300">

@include('includes.header')
<section class="ftco-section1 img" style="background:#692c91;">
<div class="overlay"></div>
<div class="container">
<div class="to-hide row d-flex align-items-center justify-content-end flex-column  pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 >Contact Us</h2>
</div>
</div>

</div>
</section>
<section class="ftco-section contact-section" id="contact-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<p>You can reach out to us, using different approach that is convenient to you.</p>
</div>
</div>
<div class="row justify-content-center d-flex contact-info mb-5">
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-map-signs"></span>
</div>
<h3 class="mb-4">Address</h3>
<p>	Silverback Mall, Sonatube , Kigali 24J3+V2 Kigali, RW</p>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-phone2"></span>
</div>
<h3 class="mb-4">Contact Number</h3>
<p><a href="tel://250 791 232 266">+250 791 232 266</a></p>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-paper-plane"></span>
</div>
<h3 class="mb-4">Email Address</h3>
<p><a style="text-transform: lowercase;" href="mail:info@goodlife.rw"><span>
info@goodlife.rw</span></a></p>
</div>
</div>

</div>
<div class="row no-gutters block-9">
<div class="col-md-6 order-md-last d-flex">
<form class="bg-light p-5 contact-form" action="{{ route('contact.send') }}" method="POST">
@csrf
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Subject">
</div>
<div class="form-group">
<textarea id cols="30" rows="7" name="message"  class="form-control" placeholder="Message"></textarea>
</div>
<div class="alert-msg" style="text-align: left;">
            @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
            </div>
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
</div>
</form>
</div>
<div class="col-md-6 d-flex">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.862029253818!2d30.092222317382813!3d-1.967778099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1716985665655!5m2!1sen!2srw" style="border:0; width:100%" class="map-home" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</div>
</div>
</section>
@include('includes.footer')

</body>
</html>
@endsection
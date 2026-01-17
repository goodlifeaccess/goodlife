@extends('layouts.master')
@section('title', 'Homepage')
@section('content')


    @include('includes.header')

    <section class="hero-wrap js-fullheight"
        data-section="home" data-stellar-background-ratio="0.5">
        {{-- <div class="overlay"></div> --}}
        <div class="main-container ">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 pt-5 ftco-animate">
                    <div class="mt-5">
                        <span class="subheading" style="color:#fff; font-weight:bold">Goodlife “Look Good, Feel good, Pay
                            Less!”</span>
                        <h2 class="mb-4" style="color:white; font-weight:bold">Retail Health and Personal Care Products.
                        </h2>
                        <p class="mb-4" style="color:white;">Goodlife Health and Beauty is a leading retail, pharmaceutical
                            and cosmetic group in Rwanda.</p>
                        <p><a href="/branches" class="btn btn-primary py-3 px-4">Visit our branches</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-brands">
        <ul class="brand">
            <li>
                <img src="images/brands/Sensodyne.jpeg">
            </li>
            <li>
                <img src="images/brands/Prosmile.jpeg">
            </li>
            <li>
                <img src="images/brands/Whitedent.jpeg">
            </li>
            <li>
                <img src="images/brands/Amara.jpeg">
            </li>

            <li>
                <img src="images/brands/zuri.jpg">
            </li>

            <li>
                <img src="images/brands/aveeno.png">
            </li>
            <li>
                <img src="images/brands/Bodycology.png">
            </li>
            <li>
                <img src="images/brands/Cantu.webp">
            </li>
            <li>
                <img src="images/brands/Cerave.jpg">
            </li>
            <li>
                <img src="images/brands/Cetaphil.png">
            </li>
            <li>
                <img src="images/brands/Cinnabar.jpg">
            </li>
            <li>
                <img src="images/brands/Dermomed.jpg">
            </li>
            <li>
                <img src="images/brands/Johnson.png">
            </li>
            <li>
                <img src="images/brands/La Roche.png">
            </li>
            <li>
                <img src="images/brands/Mustela.jpg">
            </li>
            <li>
                <img src="images/brands/Nivea.svg">
            </li>
            <li>
                <img src="images/brands/Old Spice.png">
            </li>
            <li>
                <img src="images/brands/Pampers.png">
            </li>
            <li>
                <img src="images/brands/Prosmile.jpeg">
            </li>
            <li>
                <img src="images/brands/Sebamed.png">
            </li>

            <li>
                <img src="images/brands/SVR.png">
            </li>
            <li>
                <img src="images/brands/Topicrem.svg">
            </li>
            <li>
                <img src="images/brands/Vaseline.png">
            </li>

            <li>
                <img src="images/brands/Zwitsal.jpg">
            </li>

        </ul>
    </section>

    <section class=" ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">

            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <h2 class="pt-4"><span>Your well being is our #1 priority</span></h2>
            </div>
            <div class="row d-flex">
                <!-- <div class=" col-md-6 col-lg-5 d-flex ">
    <div class="about-img img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_about.png);">
    </div>
    </div> -->
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-md-5">
                    <div class="pb-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                <h2 class="mb-4">We Are <span>Goodlife</span></h2>
                                <p>We take pride in being Rwanda's premier pharmacy, health, and
                                    beauty retailer, dedicated to ensuring our customers enjoy a
                                    delightful shopping experience.</p>
                                <p><a href="/about" class="btn btn-primary py-3 px-4">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro img" style="background-image: url('images/RANGA Visuals(15).jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <h2>Your Service is Our Priority</h2>
                    <p>
                        Our goal is to provide a comprehensive destination where you can
                        find a wide range of top-quality health and beauty products, all in
                        one convenient place.

                    </p>
                    <p class="mb-0"><a href="/branches" class="btn btn-white px-4 py-3">Search Places</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb" id="service-section">
        <div class="container-fluid px-0">
            <!-- <div class="row no-gutters">
    <div class="col-md-4 d-flex">
    <div class="img img-dept align-self-stretch" style="background-image: url(images/bg_about.png);"></div>
    </div>
    <div class="col-md-12"> -->
            <div class="row no-gutters">
                <div class=" row col-md-12">
                    <div class="service-wrap col-md-6 p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <img src="images/icons/accessability.png" width="40px">
                            </div>
                            <h3><a href="#">Accessibility</a></h3>
                            <p>
                                Accessibility of quality generics and branded
                                generics on premises, at competitive prices often
                                1/10th the cost of name brands
                            </p>
                        </div>
                    </div>
                    <div class="service-wrap col-md-6 col-lg-6 p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <img src="images/icons/bar-graph.png" width="40px">
                            </div>
                            <h3><a href="#">Provision of generics and branded generics</a></h3>
                            <p>
                                Provision of generics and branded generics and
                                quality environmentally-friendly fast moving
                                consumer goods such as Cinnabar Green refillable
                                lotion, shampoo, conditioner
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12">
                    <div class="service-wrap col-md-6 p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <img src="images/icons/result.png" width="40px">
                            </div>
                            <h3><a href="#">Coordinated follow-up</a></h3>
                            <p>
                                Coordinated follow-up of patients with chronic
                                disease medications.
                            </p>
                        </div>
                    </div>
                    <div class="service-wrap col-md-6 col-lg-6 p-4 ftco-animate">
                        <div class="text p-2 text-center">
                            <div class="icon">
                                <img src="images/icons/social-services.png" width="40px">
                            </div>
                            <h3><a href="#">Optimize public health with all points-of call
                                </a></h3>
                            <p>
                                Optimize public health by leveraging every interaction point to deliver comprehensive and
                                accessible health interventions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div>
    </div> -->
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 py-5">
                    <div class="py-lg-5">
                        <div class="row justify-content-center pb-5">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-3">Our Services</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <!-- <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-health"></span></div> -->
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3"> Health and beauty</h3>
                                        <p>Provision of generics and branded generics and
                                            quality environmentally-friendly fast moving
                                            consumer goods such as Cinnabar Green refillable
                                            lotion, shampoo, conditioner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch">
                                <div class="media block-6 services d-flex">
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">Pharmacy </h3>
                                        <p>Coordinated follow-up of patients with chronic
                                            disease medications.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-flex">
                                    <div class="media-body pl-md-4">
                                        <h3 class="heading mb-3">free health screening </h3>
                                        <p>We offer free health screenings as part of our community health initiatives</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php

        $branchesMob = [
            [
                'name' => 'Head Office',
                'address' => 'Sonatube, Kicukiro',
                'phone' => '+250 791 232 266 (Reception)',
                'email' => 'info@goodlife.rw'
            ],
            [
                'name' => 'Silverback',
                'address' => 'Sonatube, Kicukiro',
                'phone' => [
                    'Pharmacy' => '+250 791 232 150',
                    'Frontshop' => '+250 791 232 245'
                ],
                'email' => 'goodlifepharma@goodlife.rw',
            ],
            [
                'name' => 'Mundi center',
                'address' => 'RwandEx KN 3rd, Mundi center',
                'phone' => '+250 798 666 605',
                'email' => 'mundipharma@goodlife.rw',
            ],
            [
                'name' => 'EZA Kisimenti ',
                'address' => 'Kisimenti, 19 KG 1 Ave',
                'phone' => '+250 781 661 716',
                'email' => 'ezapharma@goodlife.rw',
            ]

        ];


        $galleries = [
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

        $teams = [
            [
                'name' => 'Grant Beyers',
                'position' => 'CEO and Co-Founder',
                'image' => 'images/team/Grantf.png',
            ],

            [
                'name' => 'Hashiem Wagiet',
                'position' => 'Head of Operations',
                'image' => 'images/team/Hashiemf.png',
            ],
            [
                'name' => 'Nduwayezu Emmanuel',
                'position' => 'Finance Manager',
                'image' => 'images/team/Rafikif.png',
            ],
            [
                'name' => 'Landrine Mugema',
                'position' => 'Human Resources Manager',
                'image' => 'images/team/Lanyf.png',
            ],
            [
                'name' => 'Ernest Tuyishimire',
                'position' => 'Pharmacist Supervisor',
                'image' => 'images/team/Ernestf.png',
            ],
            [
                'name' => 'Jeanette Murekeyisoni',
                'position' => 'Pharmacist Supervisor ',
                'image' => 'images/team/Jeannettef.png',
            ],
            [
                'name' => 'Ignace Twaranamahoro',
                'position' => 'Purchase Planner',
                'image' => 'images/team/Ignacef.png',
            ],
            [
                'name' => 'Atif Crawford',
                'position' => 'Marketing and Merchandise Coordinator',
                'image' => 'images/team/Atif.jpg',
            ],
            [
                'name' => 'Alfred Kwizera',
                'position' => 'Head of IT',
                'image' => 'images/team/Alfred1.png',
            ],


        ];


    @endphp
    <section class="ftco-facts img ftco-counter" style="background-image: url(images/RANGA14.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 heading-section heading-section-white">
                    <span class="subheading">facts</span>
                    <h2 class="mb-4">
                        Goodlife Health and Beauty is the leading pharmacy and cosmetic retail group in Rwanda.
                    </h2>
                    <p class="mb-0"><a href="/about" class="btn btn-secondary px-4 py-3">Learn more</a></p>
                </div>
                <div class="col-md-7">
                    <div class="row pt-4">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="strong" data-number="2">3</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="strong" data-number="5">14</strong>
                                    <span>Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="strong" data-number="84">200 + </strong>
                                    <span>employees</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="strong" data-number="84">7 + </strong>
                                    <span>Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="doctor-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center heading-section ftco-animate">
                    <h2 class="mb-4 text-center">Our Corporate Social Investment (CSI PROJECT)</h2>
                    <h3 class="mb-4 text-center">Our Umuganda Program</h3>
                    <p>Some highlights from our Umuganda Program where we work with a surrounding community </p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>
        <div class="row px-4">


            @foreach($galleries as $index => $data)
                <a class="col-md-6 col-lg-3 ftco-animate " data-lightbox="mygallery" href="{{ asset($data['image']) }}"
                    data-setbg="{{  asset($data['image']) }}">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url('{{  asset($data['image']) }}')">
                            </div>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>



    </section>
    <section class="ftco-section" id="doctor-section">
        <div class="container-fluid px-5">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Branches</h2>
                    <p>
                        These are our branches in different places in Rwanda where you can get our services.
                    </p>
                </div>
            </div>
            <div class="desktop-post">
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
                                                <div class="img align-self-stretch"
                                                    style="background-image: url('{{ asset('images/stores/' . $branch['image']) }}')"></div>
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
                                                    &nbsp; <a href="{{ route('branches.show', $branch['name']) }}"
                                                        class="btn btn-primary">View more</a></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    @endforeach


                </div>
            </div>
            <!-- <div class="mobile-post">
      <div class="d-flex flex-column align-items-center">

    <div class="row ">

        @foreach($branchesMob as $branch)
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
                    <div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg)"></div>
                </div>
                <div class="text pt-3 text-center">
                    <h3 class="mb-2">{{ $branch['name'] }}</h3>
                    <span class="position mb-2">{{ $branch['address'] }}</span>
                    <span class="position mb-2">{{ $phoneNumbers }}</span>


                    <div class="faded">
                        <p></p>
                         <ul class="ftco-social text-center">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul> 
                        <p><a href="mailto:{{ $branch['email'] }}" class="btn btn-primary">contact</a></p>

                    </div>
                </div>
            </div>
        </div>
    @endforeach


    </div>

     <div class="d-flex">

      <button class="btn btn-secondary">See More</button>

     </div>


     </div> -->

        </div>
        </div>
    </section>
    <section class="ftco-section img"
        style="background-image: url(images/bg_31.jpg); background-repeat:no-repeat; backgound-size:100% 100%">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white">
                    <h2 class="mb-4">Our Team</h2>
                </div>
            </div>
            <div class="row gy-4 gy-lg-0 gx-xxl-5 pb-5">

                @foreach($teams as $team)

                    <div class="col-12 col-md-6 col-lg-3 mt-4">
                        <div class="card border-0 border-bottom border-[blue] shadow-sm overflow-hidden">
                            <div class="card-body p-0">
                                <figure class="m-0 p-0">
                                    <img class="team-imge" loading="lazy" width="100%" src="{{asset('' . $team['image'])}}"
                                        alt="{{$team['name']}}">
                                    <figcaption class="m-0 p-4 " style="height: 200px;">
                                        <p class="mb-0">{{ $team['name'] }}</h6>
                                        <p class="text-secondary ">{{ $team['position'] }}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                @endforeach



            </div>
        </div>
    </section>
    <section class="bg-light py-3 py-md-5 py-xl-8">

    </section>
    <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Contact Us</h2>
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
                        <p> Sonatube, Kicukiro</p>
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
                        <p><a style="text-transform: lowercase;" href="mail:info@goodlife.rw"><span
                                    style="text-transform: lowercase;">
                                    info@goodlife.rw</span></a></p>
                    </div>
                </div>

            </div>
            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name id cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.862029253818!2d30.092222317382813!3d-1.967778099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1716985665655!5m2!1sen!2srw"
                        style="border:0; width:100%" class="map-home" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const brandList = document.querySelector('.brand');
            const clones = brandList.innerHTML;
            brandList.innerHTML += clones;
        });

    </script>
    </body>

    </html>
@endsection
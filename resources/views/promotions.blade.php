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
                        <h2 >Promotions</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">


            <style>
                .promotions-container {
                    padding: 20px;
                }

                .promotions-grid {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 30px;
                }

                .promotion-card {
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                    overflow: hidden;
                    transition: transform 0.3s ease;
                    height: 850px;
                }

                .promotion-card:hover {
                    transform: translateY(-5px);
                }

                .promotion-image {
                    width: 100%;
                    height: 100%;
                    /* object-fit: cover; */
                    display: block;
                }

                /* Responsive styles */
                @media (max-width: 768px) {
                    .promotions-grid {
                        grid-template-columns: 1fr;
                    }

                    .promotion-card {
                        height: 60vh;
                    }
                }
            </style>
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h3 class="mb-4">End of Month Special Offers</h3>
                    <p>Check out our latest promotional prices on a variety of products!</p>
                </div>
            </div>
            <div class="main-container mb-5">
                <div class="promotions-grid">
                    <div class="promotion-card">
                        <img src="/images/1.jpeg" alt="Promotion 1" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/2.png" alt="Promotion 2" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/3.png" alt="Promotion 3" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/4.png" alt="Promotion 4" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/5.png" alt="Promotion 5" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/6.png" alt="Promotion 6" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/7.png" alt="Promotion 7" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/8.png" alt="Promotion 8" class="promotion-image">
                    </div>
                    <div class="promotion-card">
                        <img src="/images/promotions/black/9.png" alt="Promotion 9" class="promotion-image">
                    </div>
                   
                </div>
            </div>

        </section>

    </body>

    </html>
    @include('includes.footer')
@endsection
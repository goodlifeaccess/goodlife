@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
  @include('includes.header')
  <section class="ftco-section1 img" style="background:#692c91;">
    <div class="overlay"></div>
    <div class="to-hide">
    <div class=" row d-flex align-items-center justify-content-end  flex-column  pb-3 to-hide">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
      <h2 class="mb-4">About Us</h2>
      </div>
    </div>

    </div>
  </section>
  <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 col-lg-5 d-flex">
      <div class="img d-flex align-self-stretch align-items-center"
        style="background-image:url(images/bg_about.png);">
      </div>
      </div>
      <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
      <div class="py-md-5">
        <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
          <h2 >We Are <span>Goodlife</span></h2>
          <p>Founded in 2022, Goodlife Health and Beauty is a leading retail, pharmaceutical and cosmetic group in
          Rwanda. Our philosophy entails a pharmacy first approach, and we strive to give our customers a
          satisfying shopping experience by offering a one-stop destination shop for all health and beauty
          products</p>

        </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
    <div class="container">
    <div class="row d-flex">
      <div class="col-md-12">
      <div class="py-lg-5">
        <div class="row">
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex">
          <!-- <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-health"></span></div> -->
          <div class="media-body pl-md-4">
            <div class="card mb-3"
            style="background-color:#57812f; color: #fff; text-align:center; position:relative; border-radius:30px; overflow:hidden; height:500px;">
            <div class="card-body">
              <h5 class="card-title text-center">Mission</h5>

              <p class="card-text">
              Our mission is to provide accessible and affordable health and beauty products and services to
              our customers, with a focus on service excellence, convenience, innovation and experience.
              </p>
              <p class="card-text">
              Provide the most efficient and cost-effective quality healthcare services while maintaining a
              contented dedicated workforce and satisfying all stakeholders.
              </p>
              <p class="card-text">
              We care about and contribute to the wellbeing of people, the environment and communities. We are
              passionate about leading innovation within the unique attributes of our organization. Our focus
              on a clear vision and growth strategy provides our people with unlimited opportunities.
              </p>
              <div style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0.2; z-index:0;">
              <img src="images/compassion.png" alt="..." style="width:100%; height:100%; object-fit:cover;">
              </div>
            </div>

            </div>
          </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex">

          <div class="media-body pl-md-4">
            <div class="card mb-3"
            style="background-color:#664a73; color: #fff; text-align:center; position:relative; border-radius:30px; overflow:hidden; height:500px;">
            <div class="card-body">
              <h5 class="card-title text-center">Vision</h5>
              <p class="card-text" style="position:relative; z-index:1;">
              Our vision is to be the customer's first choice of pharmacy, health and beauty retailer in
              Rwanda through our quality health care and beauty offering at the best possible prices.
              </p>
              <div style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0.2; z-index:0;">
              <img src="images/compassion.png" alt="..." style="width:100%; height:100%; object-fit:cover;">
              </div>
            </div>
            </div>

          </div>
          </div>
        </div>



        <div class="col-md-12 ">
          <div class="py-lg-5">
          <div class="row">
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">

              <div class="media-body pl-md-4">
              <div class="card mb-3"
                style="background-color:#46bcce; color: #fff; text-align:center; position:relative; border-radius:30px; overflow:hidden; height:500px;">
                <div class="card-body" style="position:relative; z-index:1;">
                <h5 class="card-title text-center">Purpose</h5>
                <p class="card-text">
                  Goodlife Health and Beauty goes beyond being just a pharmacy and retail store; we deliver
                  healthcare in various ways, extending our services, products, and initiatives to encompass
                  communities, by co-funding health care for underprivileged communities through our
                  Umuganda involvement projects.
                </p>
                </div>
                <div
                style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0.2; z-index:0;">
                <img src="images/compassion.png" alt="..."
                  style="width:100%; height:100%; object-fit:cover;">
                </div>
              </div>
              </div>
            </div>
            </div>
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <!-- <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-health"></span></div> -->
              <div class="media-body pl-md-4">
              <div class="card mb-3"
                style="background-color:#4584b0; color: #fff; text-align:center; position:relative; border-radius:30px; overflow:hidden; height:500px;">
                <div class="card-body">
                <h5 class="card-title text-center">Ethics</h5>
                <p class="card-text" style="position:relative; z-index:1;">
                  Goodlife Health & Beauty is committed to a policy of fair dealing and integrity in the
                  conduct of their business. This commitment, which is actively endorsed by the Board of
                  Directors, is based on a fundamental belief that business should be conducted honestly,
                  fairly and legally.
                </p>
                <div
                  style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0.2; z-index:0;">
                  <img src="images/compassion.png" alt="..."
                  style="width:100%; height:100%; object-fit:cover;">
                </div>
                </div>
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
  </section>

  @include('includes.footer')

  </body>

  </html>
@endsection
<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

// Start routing
// route();

?>


<body>
  <!-- Loader -->
  <!-- <div class="loader">
      <div class="loader-inner">
        <img src="images/loader.gif" alt="loader" />
      </div>
    </div> -->

  <?php require_once '../includes/nav.php' ?>

  <!-- banner -->
  <section>
    <div class="banner">
      <img src="/assets/images/banner/banner_1.png" alt="banner" />
      <img src="/assets/images/banner/banner_3.png" alt="banner" />
      <img src="/assets/images/banner/banner.png" alt="banner" />
      <img src="/assets/images/banner/banner_2.png" alt="banner" />
    </div>
  </section>

  <!-- latest-news -->
  <section class="latest-news">
    <div class="container">
      <div class="latest-news-content d-flex align-items-center justify-content-between">
        <h5 class="d-flex gap-2">
          <img src="/assets/images/announce.png" alt="star" /> LATEST
        </h5>
        <marquee behavior="" direction="">
          <span>
            << Nothing to show here, please check back later.>>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; << Nothing to show here, please check back later.>>
          </span>
        </marquee>
      </div>
    </div>
  </section>

  <!-- counter -->
  <section class="counter glass-card">
    <div class="container">
      <!-- <div class="row">
        <div class="col-12 col-sm-3">
          <div class="counter_box text-center">
            <img src="/assets/images/crowd-of-users.png" alt="icon" />
            <h1>25142</h1>
            <p>Population</p>
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="counter_box text-center">
            <img src="/assets/images/voting-box.png" alt="icon" />
            <h1>18450</h1>
            <p>Voters</p>
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="counter_box text-center">
            <img src="/assets/images/organization.png" alt="icon" />
            <h1>40</h1>
            <p>Members</p>
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="counter_box text-center">
            <img src="/assets/images/school.png" alt="icon" />
            <h1>25</h1>
            <p>Schools</p>
          </div>
        </div>
      </div> -->
      <p style="font-size: 1rem; font-weight: 600;">
        Freserganj Gram Panchayat, located in Namkhana block of South 24 Parganas, West Bengal, is a progressive rural administration dedicated to sustainable development, public welfare, and inclusive growth. Spanning 32.85 sq. km., it covers 17 villages and 20 wards, serving 25,142 residents in 7,125 households.</p>
      <p style="font-size: 1rem; font-weight: 600;">We focus on infrastructure development, quality education, public health services, safe drinking water access, and livelihood promotion. With primary, junior high, and high schools, child education centers, and healthcare facilities, we strive to meet community needs while empowering residents.</p>
      <p style="font-size: 1rem; font-weight: 600;">Guided by transparency, good governance, and active community participation, Freserganj Gram Panchayat works towards building a self-reliant, healthy, and prosperous rural society—ensuring that every citizen benefits from growth and opportunities.</p>
      </p>
      <div class="transparent-line text-center">
        <img src="/assets/images/line.svg" alt="line" />
      </div>
    </div>
  </section>

  <!-- about section -->
  <!-- <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <div class="about-content">
              <h2>About Us</h2>
              <p>
                Welcome to the official website of Freserganj Gram Panchayat, a
                coastal Panchayat under Namkhana Block in South 24 Parganas
                District, located in the heart of the Sundarban delta. Spanning
                an area of 36.80 sq. km, it comprises 18 Gram Sansads and has a
                population of approximately 21,500. Bounded by tidal rivers and
                creeks like the Muriganga, this Panchayat is known for its
                fishing economy, tourism, and cultural harmony. It is accessible
                by train from Sealdah (South) and by road from Kolkata. Despite
                its rural character, Freserganj plays a key role in regional
                trade and ecological preservation. Peace, development, and
                sustainability define the vision of this Gram Panchayat.
              </p>
              <button class="btn btn-primary btn-whit-outline">
                Know More
              </button>
            </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="position-relative about-c-img">
              <img
                src="images/about2.jpeg"
                loading="lazy"
                alt="about-img"
                class="about-img1"
                style="
                  border-radius: 100%;
                  width: 282px;
                  height: 282px !important;
                "
              />
              <img
                src="images/about4.jpeg"
                loading="lazy"
                class="about-img2"
                style="
                  border-radius: 100%;
                  object-fit: cover;
                  width: 218px;
                  height: 218px !important;
                "
              />
              <img
                src="images/about1.jpeg"
                loading="lazy"
                class="about-img3"
                style="
                  border-radius: 100%;
                  object-fit: cover;
                  width: 206px;
                  height: 206px !important;
                "
              />
              <img
                src="images/about3.jpeg"
                loading="lazy"
                class="about-img4"
                style="
                  border-radius: 100%;
                  object-fit: cover;
                  width: 101px;
                  height: 101px !important;
                "
              />
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Service -->
  <!-- about section -->
  <section class="about">
    <div class="container">
      <div class="row scheme">
        <div class="scheme-item cards" data-url="/grievance">
          <img src="/assets/images/promotion.png" alt="" />
            <p>Lodge Your Grievance</p>
        </div>
        <div class="scheme-item cards" data-url="/tourism">
          <img src="/assets/images/destination.png" alt="" />
            <p>Tourism</p>
        </div>
        <div class="scheme-item cards" data-url="/helpdesk">
          <img src="/assets/images/customer-service.png" alt="" />
          <p>Helpdesk</p>
        </div>
        <div class="scheme-item cards" data-url="/meeting">
          <img src="/assets/images/meeting.png" alt="" />
          <p>Meeting</p>
        </div>
        <div class="scheme-item cards" data-url="/asset">
          <img src="/assets/images/asset.png" alt="" />
          <p>Asset management</p>
        </div>
        <div class="scheme-item cards" data-url="/property-tax">
          <img src="/assets/images/property-tax.png" alt="" />
          <p>Online property tax</p>
        </div>
        <div class="scheme-item cards" data-url="/public-health">
          <img src="/assets/images/public-health.png" alt="" />
          <p>Public health</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Ministers -->
  <section class="our-ministers">
    <div class="container">
      <div class="our-ministers-heading">
        <h2>Our Members</h2>
      </div>
      <div class="our-ministers-card">
        <div class="row">
          <div class="col-sm-5">
            <div class="card-modi-ji">
              <img src="/assets/images/default-profile.png" alt="modi ji" width="280px" height="280px" style="border-radius: 100%;" />
              <p>G.P. Pradhan</p>
              <h3>Kasinath Jana</h3>
              <div class="pmg-social d-flex gap-2 align-items-center justify-content-center mt-20">
                <!-- <a href=""><img src="images/linkedin.svg" alt="linkedin"></a> -->
                <a href=""><img src="/assets/images/facebook2.svg" alt="facebook" /></a>
                <!-- <a href=""><img src="images/instagram.svg" alt="instagram"></a> -->
                <a href=""><img src="/assets/images/twitter2.svg" alt="linkedin" /></a>
              </div>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="pmg-team">
              <div class="pmg-team-content d-flex gap-3 align-items-center">
                <img src="/assets/images/default-profile.png" alt="name" width="156px" height="156px" style="border-radius: 100%;" />
                <div class="pmg-team-title ashwini-ji">
                  <p>Upa-Pradhan</p>
                  <h3>Kanika Khan Mondal</h3>
                </div>
              </div>

              <div class="pmg-team-content d-flex flex-column align-items-center">
                <img src="/assets/images/default-profile.png" alt="name" width="120px" height="120px" style="border-radius: 100%;" />
                <div class="pmg-team-title minister-ji text-center">
                  <p>Member</p>
                  <h3>Dipak Kumar Das</h3>
                </div>
              </div>

              <div class="pmg-team-content d-flex flex-column align-items-center">
                <img src="/assets/images/default-profile.png" alt="name" width="120px" height="120px" style="border-radius: 100%;" />
                <div class="pmg-team-title minister-ji text-center">
                  <p>MEMBER</p>
                  <h3>Ranajet Barman</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- our service -->

  <section class="services-panel glass-card">
    <div class="container">
      <h2 class="section-heading mb-20">Public Information & Resources</h2>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade faqPage active show" id="nav-accordion-one" role="tabpanel"
          aria-labelledby="nav-accordion-one-tab">
          <div class="row service-card-row">
            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-services.png" alt="icon" loading="lazy" />
                    <h3>PMAY-G</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="pmayg.html">
                    <p>Comming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-care.png" alt="icon" loading="lazy" />
                    <h3>15th Finance Commission</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="15th-finance.html">
                    <p>Comming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-services.png" alt="icon" loading="lazy" />
                    <h3>MGNREGA</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Comming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>5th FC</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Comming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-care.png" alt="icon" loading="lazy" />
                    <h3>Public distribution system</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/pds">
                    <p>Total beneficiary</p>
                    <h3>0</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-care.png" alt="icon" loading="lazy" />
                    <h3>Community toilet & Burning ghat</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/Community_toilet">
                    <p>Total</p>
                    <h3>10</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>Bina mulya samajik suraksha yojana (pmssy)</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Cooming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>Social security</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Comming Soon</p>
                    <h3></h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-care.png" alt="icon" loading="lazy" />
                    <h3>Agriculture</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/farmers">
                    <p>Total Farmers</p>
                    <h3>3786</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>SC, ST & OBC Certificate</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/cast">
                    <p>Total Inquiry</p>
                    <h3>173</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/multiple-users-silhouette.png" alt="icon" loading="lazy" />
                    <h3>Staff profile</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/staff-profile">
                    <p>Total Staff</p>
                    <h3>16</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/group.png" alt="icon" loading="lazy" />
                    <h3>Membar profile</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/member-profile">
                    <p>Total Membar</p>
                    <h3>20</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front service-card">
                    <img src="/assets/images/group.png" alt="icon" loading="lazy" />
                    <h3>Pradhan-&-Upapradhan</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="<?= BASE_URL ?>/pradhan-upapradhan">
                    <p>Upto</p>
                    <h3>2025</h3>
                    <img src="/assets/images/next1.png" alt="" width="40px" class="flip-next" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div
            class="tab-pane fade faqPage"
            id="nav-accordion-two"
            role="tabpanel"
            aria-labelledby="nav-accordion-two-tab"
          >
            <div class="row hi">

              <div class="col-sm-3">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front service-card">
                      <img src="images/box.png" alt="icon" loading="lazy" />
                      <h3>SC, ST & OBC Certificate</h3>
                    </div>
                    <div class="flip-card-back service-card">
                      <h3>More Info</h3>
                      <p>This is back side</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front service-card">
                      <img src="images/box.png" alt="icon" loading="lazy" />
                      <h3>SC, ST & OBC Certificate</h3>
                    </div>
                    <div class="flip-card-back service-card">
                      <h3>More Info</h3>
                      <p>This is back side</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front service-card">
                      <img src="images/box.png" alt="icon" loading="lazy" />
                      <h3>SC, ST & OBC Certificate</h3>
                    </div>
                    <div class="flip-card-back service-card">
                      <h3>More Info</h3>
                      <p>This is back side</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div> -->
      </div>
    </div>
  </section>

  <!-- Station Gallery -->

  <section class="station-gallery">
    <div class="container">
      <h2 class="section-heading mb-20">Gallery</h2>

      <!-- tab services -->
      <div class="services-tab">
        <ul class="state-tab-nav nav nav-tabs border-bottom-0 d-flex align-items-center gap-3"
          style="margin-bottom: 60px" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="nav-accordion-three-tab" data-bs-toggle="tab"
              data-bs-target="#nav-accordion-three" type="button" role="tab" aria-controls="nav-accordion-three"
              aria-selected="false" tabindex="-1">
              Community Moments
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nav-accordion-four-tab" data-bs-toggle="tab"
              data-bs-target="#nav-accordion-four" type="button" role="tab" aria-controls="nav-accordion-four"
              aria-selected="true">
              Highlights & Attractions
            </button>
          </li>
        </ul>
      </div>
      <!-- tab -->
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade faqPage active show" id="nav-accordion-three" role="tabpanel"
          aria-labelledby="nav-accordion-three-tab">
          <div class="tab-content" id="nav-tabContent-state">
            <div class="state-carousel-1 tab-pane fade faqPage active show" id="nav-accordion-state-1" role="tabpanel"
              aria-labelledby="nav-accordion-state-1-tab">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row mb-20">
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community.jpeg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community2.jpeg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community3.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community4.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community5.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row mb-20">
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community6.jpeg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community7.jpeg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community8.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community9.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community3.webp" alt="img"
                          loading="lazy" />
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade faqPage" id="nav-accordion-four" role="tabpanel"
          aria-labelledby="nav-accordion-four-tab">
          <div class="tab-content" id="nav-tabContent-state">
            <div class="state-carousel-1 tab-pane fade faqPage active show" id="nav-accordion-state-3" role="tabpanel"
              aria-labelledby="nav-accordion-state-3-tab">
              <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row mb-20">
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights.jpeg" alt="img"
                          width="618px" height="332px" loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights2.jpeg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights3.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights4.jpeg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights5.jpg" alt="img"
                          loading="lazy" />
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row mb-20">
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights6.jpg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights7.jpg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights.jpg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights2.jpg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="images/gallery/highlights/Highlights3.jpg" alt="img" loading="lazy" />
                      </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" 3
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- social media section -->
  <section class="social_media_main glass-card">
    <img src="/assets/images/icons/right-circle.svg" alt="circle" loading="lazy" class="left-circle" />
    <div class="container">
      <div class="social_media">
        <div class="social_media_content-left">
          <h2>Geographical Overview of the Panchayat</h2>
          <p>
            Explore the geographical layout of our Gram Panchayat, including
            village boundaries, important landmarks, and infrastructure. This
            map helps you understand our region better and stay informed about
            your local area.
          </p>
          <!-- <div class="social_media_icon">
                <a href=""> <img src="images/icons/icon-facebook.svg" alt="media icon"> </a>
                <a href=""> <img src="images/icons/icon-youtube.svg" alt="media icon"> </a>
                <a href=""> <img src="images/icons/icon-twitter.svg" alt="media icon"> </a>                
              </div> -->
        </div>
        <div class="social_media_content-left">
          <a href="/assets/images/map.jpeg" data-lightbox="image-1" data-title="My caption"><img
              src="/assets/images/map.jpeg" alt="mobile" loading="lazy" style="
                width: 768px !important;
                height: 602px !important;
                object-fit: contain;
              " /></a>
        </div>
      </div>
    </div>
    <!-- <img src="images/flag.png" alt="flag" loading="lazy" class="flag-men"> -->
    <img src="/assets/images/icons/right-circle.svg" alt="circle" loading="lazy" class="right-circle" />
  </section>

  <!-- Recruitment and chat part -->
  <!-- <section class="recruitment">
  <div class="recruitment_content recruitment_content-one">
    <img src="images/icons/icon-job.svg" alt="icon">
    <h2>Recruitment</h2>
    <p>See our current job openings.</p>
    <button class="btn btn-primary-railway">View Jobs</button>
  </div>
  <div class="recruitment_content recruitment_content-two">
    <img src="images/icons/icon-message.svg" alt="icon">
    <h2>Railway Tenders</h2>
    <p>Check Railway Tenders</p>
    <button class="btn btn-primary-railway">View Tenders</button>
  </div>
</section> -->

  <!-- footer -->

</body>

</html>
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>
<script type="text/javascript" src="/assets/js/slick/slick/slick.min.js"></script>
<script src="/assets/js/lightbox2/dist/js/lightbox.js"></script>

<script>
  $(document).ready(function() {
    $(".banner").slick({
      dots: false,
      arrows: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $(".service-card-row").slick({
      dots: false,
      arrows: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,

      responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          },
        },
      ],
    });
  });

  document.querySelectorAll(".flip-card-back").forEach((card) => {
    card.addEventListener("click", () => {
      const url = card.getAttribute("data-url");
      if (url) window.location.href = url;
    });
  });

  document.querySelectorAll(".cards").forEach((card) => {
    card.addEventListener("click", () => {
      const url = card.getAttribute("data-url");
      if (url) window.location.href = url;
    });
  });
</script>
<!-- google translate -->
<!-- Google Translate Code -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "en"
      },
      "google_translate_element"
    );
  }
</script>
<script type="text/javascript" src="./assets/js/google-translate.js"></script>
<!-- End Google Translate Code -->
<!-- accessibility -->
<script src="./assets/js/weights.js"></script>
<!-- font increase -->
<script>
  var $affectedElements = $("*"); // Can be extended, ex. $("div, p, span.someClass")

  // Storing the original size in a data attribute so size can be reset
  $affectedElements.each(function() {
    var $this = $(this);
    $this.data("orig-size", $this.css("font-size"));
  });

  $("#btn-increase").click(function() {
    changeFontSize(1);
  });

  $("#btn-decrease").click(function() {
    changeFontSize(-1);
  });

  $("#btn-orig").click(function() {
    $affectedElements.each(function() {
      var $this = $(this);
      $this.css("font-size", $this.data("orig-size"));
    });
  });

  function changeFontSize(direction) {
    $affectedElements.each(function() {
      var $this = $(this);
      $this.css("font-size", parseInt($this.css("font-size")) + direction);
    });
  }
</script>

<!-- light dark theme -->

<script>
  const checkbox = document.getElementById("checkbox");
  const isDarkMode = localStorage.getItem("darkMode") === "true";
  checkbox.checked = isDarkMode;
  const toggleDarkMode = () => {
    const isDarkMode = checkbox.checked;
    document.body.classList.toggle("dark", isDarkMode);
    localStorage.setItem("darkMode", isDarkMode);
  };
  checkbox.addEventListener("change", toggleDarkMode);
  toggleDarkMode();
</script>
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
      <img src="/assets/images/banner.jpg" alt="banner" />
      <img src="/assets/images/banner.jpg" alt="banner" />
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
            << Description of Latest Updates 2 goes here.>>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; << Description of Latest Updates 2 goes here.>>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<< Description of Latest Updates 2 goes here.>>
          </span>
        </marquee>
      </div>
    </div>
  </section>

  <!-- counter -->
  <section class="counter">
    <div class="container">
      <div class="row">
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
      </div>
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
        <div class="scheme-item">
          <img src="/assets/images/promotion.png" alt="" />
          <a href="">
            <p>Lodge Your Grievance</p>
          </a>
        </div>
        <div class="scheme-item">
          <img src="/assets/images/destination.png" alt="" />
          <p>Tourism</p>
        </div>
        <div class="scheme-item">
          <img src="/assets/images/customer-service.png" alt="" />
          <p>Helpdesk</p>
        </div>
        <div class="scheme-item">
          <img src="/assets/images/meeting.png" alt="" />
          <p>Meeting</p>
        </div>
        <div class="scheme-item">
          <img src="/assets/images/asset.png" alt="" />
          <p>Asset management</p>
        </div>
        <div class="scheme-item">
          <img src="/assets/images/property-tax.png" alt="" />
          <p>Online property tax</p>
        </div>
        <div class="scheme-item">
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
              <img src="/assets/images/280x280.png" alt="modi ji" />
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
                <img src="/assets/images/156x156.png" alt="name" />
                <div class="pmg-team-title ashwini-ji">
                  <p>Upa-Pradhan</p>
                  <h3>Kanika Khan Mondal</h3>
                </div>
              </div>

              <div class="pmg-team-content d-flex flex-column align-items-center">
                <img src="/assets/images/120x120.png" alt="name" />
                <div class="pmg-team-title minister-ji text-center">
                  <p>Member</p>
                  <h3>Dipak Kumar Das</h3>
                </div>
              </div>

              <div class="pmg-team-content d-flex flex-column align-items-center">
                <img src="/assets/images/120x120.png" alt="name" />
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

  <section class="services-panel">
    <div class="container">
      <h2 class="section-heading mb-20">Public Information & Resources</h2>

      <!-- tab services -->
      <!-- <div class="services-tab">
          <ul
            class="nav nav-tabs border-bottom-0 d-flex align-items-center justify-content-center"
            style="margin-bottom: 60px"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="nav-accordion-one-tab"
                data-bs-toggle="tab"
                data-bs-target="#nav-accordion-one"
                type="button"
                role="tab"
                aria-controls="nav-accordion-one"
                aria-selected="false"
                tabindex="-1"
              >
                Public Records & Welfare Data
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="nav-accordion-two-tab"
                data-bs-toggle="tab"
                data-bs-target="#nav-accordion-two"
                type="button"
                role="tab"
                aria-controls="nav-accordion-two"
                aria-selected="true"
              >
                Panchayat Members & Contacts
              </button>
            </li>
          </ul>
        </div> -->
      <!-- tab -->
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
                    <p>Houses Completed</p>
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
                    <h3>15th Finance Commission</h3>
                  </div>
                  <div class="flip-card-back service-card" data-url="15th-finance.html">
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
                    <img src="/assets/images/social-services.png" alt="icon" loading="lazy" />
                    <h3>MGNREGA</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>5th FC</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <h3>Public distribution system</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                  <div class="flip-card-back service-card">
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
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>Bina mulya samajik suraksha yojana (pmssy)</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>Social security</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <h3>Agriculture</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <img src="/assets/images/social-security.png" alt="icon" loading="lazy" />
                    <h3>SC, ST & OBC Certificate</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                    <img src="/assets/images/multiple-users-silhouette.png" alt="icon" loading="lazy" />
                    <h3>Staff profile</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Total Staff</p>
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
                    <img src="/assets/images/group.png" alt="icon" loading="lazy" />
                    <h3>Membar profile</h3>
                  </div>
                  <div class="flip-card-back service-card">
                    <p>Total Membar</p>
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
                    <img src="/assets/images/group.png" alt="icon" loading="lazy" />
                    <h3>Pradhan-&-Upapradhan</h3>
                  </div>
                  <div class="flip-card-back service-card">
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
                        <img class="w-100" src="/assets/images/gallery/community/Community.webp" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community2.webp" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community3.webp" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community4.avif" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community5.jpg" alt="img"
                          loading="lazy" />
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row mb-20">
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community6.jpg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/community/Community7.png" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community.webp" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/community/Community2.webp" alt="img"
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
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights.jpg" alt="img"
                          width="618px" height="332px" loading="lazy" style="height: 332px" />
                      </div>
                      <div class="col-sm-6">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights2.jpg" alt="img"
                          loading="lazy" style="height: 332px" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights3.jpg" alt="img"
                          loading="lazy" />
                      </div>
                      <div class="col-sm-4">
                        <img class="w-100" src="/assets/images/gallery/highlights/Highlights4.jpg" alt="img"
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
  <section class="social_media_main">
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

  <div class="terms">
    <div class="container">
      <ul>
        <li><a href="">Terms & Conditions</a></li>
        <li><a href="">Privacy Policy</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>
    </div>
  </div>

  <!-- accessibility html -->
  <!-- accessibility panel -->
  <div class="uwaw uw-light-theme gradient-head uwaw-initial paid_widget" id="uw-main">
    <div class="relative second-panel">
      <h3>Accessibility options by UX4G</h3>
      <div class="uwaw-close" onclick="closeMain()"></div>
    </div>
    <div class="uwaw-body">
      <div class="lang">
        <div class="lang_head">
          <i></i>
          <span>Language</span>
        </div>
        <div class="language_drop" id="google_translate_element">
          <!-- google translate list coming inside here -->
        </div>
      </div>
      <div class="h-scroll">
        <div class="uwaw-features">
          <div class="uwaw-features__item reset-feature" id="featureItem_sp">
            <button id="speak" class="uwaw-features__item__i" data-uw-reader-content="Enable the UserWay screen reader"
              aria-label="Enable the UserWay screen reader" aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-speaker"> </span>
              </span>
              <span class="uwaw-features__item__name">Screen Reader</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon_sp" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem">
            <button id="btn-s9" class="uwaw-features__item__i" data-uw-reader-content="Enable the UserWay screen reader"
              aria-label="Enable the UserWay screen reader" aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-bigger-text"> </span> </span><span class="uwaw-features__item__name">Bigger
                Text</span>
              <div class="uwaw-features__item__steps reset-steps" id="featureSteps">
                <!-- Steps span tags will be dynamically added here -->
              </div>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-st">
            <button id="btn-small-text" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-small-text"> </span> </span><span class="uwaw-features__item__name">Small
                Text</span>
              <div class="uwaw-features__item__steps reset-steps" id="featureSteps-st">
                <!-- Steps span tags will be dynamically added here -->
              </div>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-st" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-lh">
            <button id="btn-s12" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-line-hight"> </span>
              </span>
              <span class="uwaw-features__item__name">Line Height</span>
              <div class="uwaw-features__item__steps reset-steps" id="featureSteps-lh">
                <!-- Steps span tags will be dynamically added here -->
              </div>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-lh" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-ht">
            <button id="btn-s10" onclick="highlightLinks()" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-highlight-links"> </span>
              </span>
              <span class="uwaw-features__item__name">Highlight Links</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-ht" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-ts">
            <button id="btn-s13" onclick="increaseAndReset()" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-text-spacing"> </span>
              </span>
              <span class="uwaw-features__item__name">Text Spacing</span>
              <div class="uwaw-features__item__steps reset-steps" id="featureSteps-ts">
                <!-- Steps span tags will be dynamically added here -->
              </div>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-ts" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-df">
            <button id="btn-df" onclick="toggleFontFeature()" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-dyslexia-font"> </span>
              </span>
              <span class="uwaw-features__item__name">Dyslexia Friendly</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-df" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-hi">
            <button id="btn-s11" onclick="toggleImages()" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-hide-images"> </span>
              </span>
              <span class="uwaw-features__item__name">Hide Images</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-hi" style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-Cursor">
            <button id="btn-cursor" onclick="toggleCursorFeature()" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-cursor"> </span>
              </span>
              <span class="uwaw-features__item__name">Cursor</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-cursor"
                style="display: none">
              </span>
            </button>
          </div>

          <div class="uwaw-features__item reset-feature" id="featureItem-ht-dark">
            <button id="dark-btn" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__name">
                <span class="light_dark_icon">
                  <input type="checkbox" class="light_mode uwaw-featugres__item__i" id="checkbox" />
                  <label for="checkbox" class="checkbox-label">
                    <!-- <i class="fas fa-moon-stars"></i> -->
                    <i class="fas fa-moon-stars">
                      <span class="icon icon-moon"></span>
                    </i>
                    <i class="fas fa-sun">
                      <span class="icon icon-sun"></span>
                    </i>
                    <span class="ball"></span>
                  </label>
                </span>
                <span class="uwaw-features__item__name">Light-Dark</span>
              </span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-ht-dark"
                style="display: none; pointer-events: none">
              </span>
            </button>
          </div>

          <!-- Invert Colors Widget -->

          <div class="uwaw-features__item reset-feature" id="featureItem-ic">
            <button id="btn-invert" class="uwaw-features__item__i"
              data-uw-reader-content="Enable the UserWay screen reader" aria-label="Enable the UserWay screen reader"
              aria-pressed="false">
              <span class="uwaw-features__item__icon">
                <span class="icon icon-invert"> </span>
              </span>
              <span class="uwaw-features__item__name">Invert Colors</span>
              <span class="tick-active uwaw-features__item__enabled reset-tick" id="tickIcon-ic" style="display: none">
              </span>
            </button>
          </div>
        </div>
      </div>
      <!-- Reset Button -->
    </div>
    <div class="reset-panel">
      <!-- copyright accessibility bar -->
      <div class="copyrights-accessibility">
        <button class="btn-reset-all" id="reset-all" onclick="resetAll()">
          <span class="reset-icon"> </span>
          <span class="reset-btn-text">Reset All Settings</span>
        </button>
        <a href="https://www.ux4g.gov.in" target="_blank" class="copyright-text">
          <span class="uwaw-features__item__name ux4g-copy ux4g-copyright">Created by</span>
          <img src="/assets/images/ux4g-logo.svg" alt="logo" loading="lazy" width="93" height="25" />
        </a>
      </div>
    </div>
  </div>
</body>

</html>
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>
<script type="text/javascript" src="/assets/js/slick/slick/slick.min.js"></script>
<script src="/assets/js/lightbox2/dist/js/lightbox.js"></script>

<script>
  $(document).ready(function () {
    $(".banner").slick({
      dots: false,
      arrows: true,
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
      //autoplay: true,
      //autoplaySpeed: 3000,
      //speed: 1000,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,

      responsive: [
        {
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
</script>
<!-- google translate -->
<!-- Google Translate Code -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      { pageLanguage: "en" },
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
  $affectedElements.each(function () {
    var $this = $(this);
    $this.data("orig-size", $this.css("font-size"));
  });

  $("#btn-increase").click(function () {
    changeFontSize(1);
  });

  $("#btn-decrease").click(function () {
    changeFontSize(-1);
  });

  $("#btn-orig").click(function () {
    $affectedElements.each(function () {
      var $this = $(this);
      $this.css("font-size", $this.data("orig-size"));
    });
  });

  function changeFontSize(direction) {
    $affectedElements.each(function () {
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
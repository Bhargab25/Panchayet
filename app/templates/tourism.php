<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;


?>
<style>
    .slider-for img {
        width: 70%;
        height: 400px;
        object-fit: fill;
        margin: auto;
        border-radius: 10px;
    }

    .slider-nav img {
        width: 200px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    .slider-nav {
        margin-top: 15px;
        width: 50%;
        margin: auto;
    }

    .slider-nav .slick-slide {
        padding: 5px;
    }

    .neon-text {
        text-align: center;
        font-size: 3rem;
        font-weight: bold;
        color: #da3822ff;
        text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
        animation: glow 1.5s infinite alternate;
    }

    @media (max-width: 768px) {
        .slider-for img {
            width: 100%;
            height: 200px;
            object-fit: fill;
        }

        .slider-nav img {
            width: 150px;
            height: 50px;
            object-fit: cover;
        }

        .slider-nav {
            width: 80%;
        }
    }

    @keyframes glow {
        0% {
            text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
        }

        100% {
            text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 40px #00d4ff, 0 0 80px #00d4ff, 0 0 160px #00d4ff;
        }
    }
</style>

<body class="bg">
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
            <img src="/assets/images/banner/banner_8.png" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter glass-card">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Tourism</h3>
                    <p class="page-location">
                        Home <span>>></span> Tourism
                    </p>
                </div>

                <!-- <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total</td>
                                <td>0</td>
                            </tr>
                        </table>
                    </div>
                </div> -->
                <div class="neon-container">
                    <h1 class="neon-text">
                        PANTHANIBAS MOMO CHITTE
                    </h1>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="container my-4">
        <div class="row">
            <div class="slider-for">
                <div><img src="/assets/images/hotel/hotel_area.webp" alt="Slide 1"></div>
                <div><img src="/assets/images/hotel/hotel_front.webp" alt="Slide 2"></div>
                <div><img src="/assets/images/hotel/hotel_name.webp" alt="Slide 3"></div>
                <div><img src="/assets/images/hotel/hotel_top.webp" alt="Slide 8"></div>
                <div><img src="/assets/images/hotel/hotel_night.webp" alt="Slide 4"></div>
                <div><img src="/assets/images/hotel/hotel_rode.webp" alt="Slide 5"></div>
                <div><img src="/assets/images/hotel/hotel_room.webp" alt="Slide 6"></div>
                <div><img src="/assets/images/hotel/hotel_bed.webp" alt="Slide 7"></div>
            </div>

            <!-- Navigation Thumbnails -->
            <div class="slider-nav">
                <div><img src="/assets/images/hotel/hotel_area.webp" alt="Slide 1"></div>
                <div><img src="/assets/images/hotel/hotel_front.webp" alt="Slide 2"></div>
                <div><img src="/assets/images/hotel/hotel_name.webp" alt="Slide 3"></div>
                <div><img src="/assets/images/hotel/hotel_top.webp" alt="Slide 8"></div>
                <div><img src="/assets/images/hotel/hotel_night.webp" alt="Slide 4"></div>
                <div><img src="/assets/images/hotel/hotel_rode.webp" alt="Slide 5"></div>
                <div><img src="/assets/images/hotel/hotel_room.webp" alt="Slide 6"></div>
                <div><img src="/assets/images/hotel/hotel_bed.webp" alt="Slide 7"></div>
            </div>
        </div>

        <div class="col-md-12 glass-dark-card p-2">
            <p style="font-size: 1.2rem; font-weight: 700; line-height: 1.6; text-align: left; max-width: 800px; margin: auto;">
                Welcome to <strong>Panthanibas Momo Chitte Guest House</strong> – your perfect getaway in the heart of
                <strong>Bakkhali, Freserganj Coastal</strong>. Nestled near serene beaches and natural beauty, we offer
                a comfortable stay with <strong>free Wi-Fi</strong>, warm hospitality, and easy access to local attractions.
                <br><br>
                For bookings and inquiries, call us at
                <span style="color: red; font-weight: bold;">9635026116</span> (Phone) or
                <span style="color: green; font-weight: bold;">9332759678</span> (WhatsApp).
                You can also email us at
                <a href="mailto:panthanibasmomochitte@gmail.com" style="text-decoration: none; font-weight: bold; color: #0056b3;">
                    panthanibasmomochitte@gmail.com
                </a>.
                <br><br>
                Address: Bakkhali, P.S.-Freserganj Coastal, South 24 Parganas, West Bengal – 743357.
                <br><br>
                Book your stay today and experience the charm of the coast with us!
            </p>
        </div>
    </section>

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
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav',
            autoplay: true,
            autoplaySpeed: 3000
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    });

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
<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;


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
            <img src="/assets/images/banner/banner_5.png" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Gram Panchayat at a Glance</h3>
                    <p class="page-location">
                        Home <span>>></span> Gram Panchayat at a Glance
                    </p>
                </div>

                <!-- <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Villages</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>Total Wards</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Total Population</td>
                                <td>45,000</td>
                            </tr>
                            <tr>
                                <td>Total Households</td>
                                <td>10,200</td>
                            </tr>
                        </table>
                    </div>
                </div> -->

                <div>
                    <p class="text-center mb-3">
                        The Gram Panchayat of Freserganj in Namkhana block is a dynamic rural community committed to sustainable development, social welfare, and inclusive progress. Spanning 17 villages and 20 wards, it serves a population of 25,142 across 7,125 households. The Panchayat administration is proactive in enhancing infrastructure, education, public health, access to safe drinking water, and livelihoods. Through continuous efforts, Freserganj Gram Panchayat strives to improve the quality of life for all its residents and build a stronger, healthier community.
                    </p>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <!-- Additional info section (optional for future enhancement) -->
    <section class="container my-4">
        <div class="row">
            <div style="background:#fdfd57; border-radius:12px; padding:28px 16px; margin:20px auto; max-width:950px; box-shadow:0 0 14px #bbbbbb40; font-family:sans-serif;">
                <h2 style="color:#2446b1; font-size:2.1rem; font-weight:800; text-align:center; letter-spacing:1px; margin-top:0">একনজরে ফ্রেজারগঞ্জ গ্রাম পঞ্চায়েত</h2>
                <div style="background:#e2fa9a; border-radius:8px; padding:12px 18px; margin:12px 0 24px 0; font-size:1.15em; color:#128e0a; font-weight:700;">
                    <span>ভৌগলিক অবস্থান : মোট আয়তন ৩২.৮৫ বর্গ কিলোমিটার <br>
                        সীমান্ত: উত্তরে শিবরামপুর, দক্ষিণে বঙ্গোপসাগর, পূর্বে বঙ্গোপসাগর, পশ্চিমে এডওয়ার্ড ক্রিক</span>
                </div>

                <div style="display:flex; flex-wrap:wrap; gap:30px;">
                    <!-- প্রশাসনিক তথ্য -->
                    <div style="flex:1 1 288px; min-width:288px;">
                        <h3 style="color:#089b1c; margin-bottom:8px;">প্রশাসনিক তথ্য</h3>
                        <ul style="margin:0 0 10px 18px; padding:0; font-size:1em; color:#17307e;">
                            <li>লোকসভা কেন্দ্র : মথুরাপুর (২০ তম সংরক্ষিত)</li>
                            <li>বিধানসভা কেন্দ্র : ১৩২, সাগর</li>
                            <li>গ্রাম সংখ্যা মোট : ১৭</li>
                            <li>গ্রাম পঞ্চায়েতের সদস্য সংখ্যা : ২০</li>
                            <li>পঞ্চায়েত সমিতির সদস্য সংখ্যা : ৩</li>
                            <li>মৌজা সংখ্যা : ৫</li>
                            <li>পোস্ট অফিস সংখ্যা : ৩</li>
                            <li>স্থানীয় থানা : ১</li>
                            <li>প্রাথমিক স্বাস্থ্য কেন্দ্র : ১</li>
                            <li>সুপ্রাথমিক কেন্দ্র : ১৪</li>
                            <li>রেশন দোকান : ৩</li>
                        </ul>
                    </div>
                    <!-- জনসংখ্যা তথ্য -->
                    <div style="flex:1 1 255px; min-width:220px;">
                        <h3 style="color:#089b1c; margin-bottom:8px;">জনসংখ্যা সম্পর্কিত তথ্য</h3>
                        <div style="background:#e0f7fc; border:1.5px solid #17b5c6; border-radius:6px; padding:13px 16px 8px 16px; margin-bottom:14px;">
                            <div>মোট জনসংখ্যা : <b>২৫,১৪২</b></div>
                            <div>পুরুষ : <b>১২,১৬৩</b></div>
                            <div>মহিলা : <b>১২,৯৮০</b></div>
                            <div>পরিবার সংখ্যা : <b>৭,১২৫</b></div>
                        </div>
                    </div>
                    <!-- শিক্ষা তথ্য -->
                    <div style="flex:1 1 255px; min-width:220px;">
                        <h3 style="color:#089b1c; margin-bottom:8px;">শিক্ষা সম্পর্কিত তথ্য</h3>
                        <ul style="margin:0 0 10px 18px; padding:0; font-size:1em; color:#17307e;">
                            <li>শিক্ষার হার : ৯০.৮৬%</li>
                            <li>প্রাইমারি স্কুল : ১২</li>
                            <li>জুনিয়র হাইস্কুল : ২</li>
                            <li>উচ্চ-মাধ্যমিক স্কুল : ২</li>
                            <li>শিশু শিক্ষা কেন্দ্র : ৯</li>
                            <li>অঙ্গনওয়াড়ি কেন্দ্র : ৩৮</li>
                            <li>সরকারি গ্রন্থাগার : ১</li>
                            <li>মাধ্যমিক শিক্ষা কেন্দ্র : ১</li>
                            <li>প্রাইভেট স্কুল : ১</li>
                        </ul>
                    </div>
                    <!-- অন্যান্য তথ্য -->
                    <div style="flex:1 1 246px; min-width:220px;">
                        <h3 style="color:#089b1c; margin-bottom:8px;">অন্যান্য তথ্য</h3>
                        <ul style="margin:0 0 10px 18px; padding:0; font-size:1em; color:#17307e;">
                            <li>নলকূপ : ৩০৩</li>
                            <li>কমিউনিটি সেন্টার : ৫</li>
                            <li>রাষ্ট্রীয় ব্যাংক : ৩</li>
                            <li>ক্যালভার্ট : ৫২</li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Block -->
                <div style="margin-top:28px; background:#d2eafa; border-radius:8px; padding:12px 14px;">
                    <h4 style="color:#0946a6; font-size:1.08em; margin-bottom:7px;">ফ্রেজারগঞ্জ গ্রাম পঞ্চায়েতের প্রশাসনিক ব্যক্তিত্ব ও জরুরি নম্বর:</h4>
                    <ul style="margin-left:18px; color:#092364; font-size:1em;">
                        <li><b>প্রধান:</b> কাশীনাথ জানা — 9733607976</li>
                        <li><b>উপপ্রধান:</b> কনিকা খাঁ মণ্ডল — 9734262363</li>
                        <li><b>নামখানা ব্লক উন্নয়ন আধিকারিক:</b> 9004062826</li>
                        <li><b>ফ্রেজারগঞ্জ কোষ্টাল পুলিশ থানা:</b> 9434175448</li>
                        <li><b>ব্লক প্রাথমিক স্বাস্থ্যকেন্দ্র:</b> ...</li>
                        <li><b>নামখানা বিদ্যুৎ অফিস:</b> 03210 244031</li>
                        <li><b>পি. এইচ. ই. অফিস:</b> ...</li>
                        <li><b>জরুরী ভিত্তিক অ্যাম্বুলেন্স:</b> 9733088488</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

</body>

</html>
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="/assets/js/lightbox2/dist/js/lightbox.js"></script>

<script>
    $(document).ready(function() {

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
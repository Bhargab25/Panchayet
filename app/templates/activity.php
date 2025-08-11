<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;


?>
<style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(145deg, #f2f6fa, #ffffff);
        border: 1px solid #e0e0e0;
        border-radius: 1rem;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .icon-wrapper img {
        transition: transform 0.3s ease;
    }

    .hover-card:hover .icon-wrapper img {
        transform: scale(1.1);
    }
    .hover-zoom img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 6px;
    }

    .hover-zoom:hover img {
        transform: scale(1.1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        border: 5px solid #007bff;
        /* Optional blue border */
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
            <img src="/assets/images/banner/banner_5.png" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter glass-card">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Activity</h3>
                    <p class="page-location">
                        Home <span>>></span> Activity
                    </p>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>

        <div class="row">
             <p class="text-center" style="font-size: 1rem; font-weight: bold;">দীর্ঘ দিনের প্রতীক্ষার অবসান, স্লুইস গেট নির্মাণ ( সংসদ নম্বর - ৫ )</p>
            <div class="col-md-12">
                <div class="text-center">
                    <img src="/assets/images/line.svg" alt="line" />
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4 mb-2 hover-zoom mx-1">
                        <a href="/assets/images/tubewell/sGate.webp" data-lightbox="image-3" data-title="Sluice Gate">
                            <img style="width: 400px; height: 400px; object-fit: cover;" src="/assets/images/tubewell/sGate.webp" alt="Sluice Gate">
                        </a>
                    </div>
                    <div class="col-md-4 mb-2 hover-zoom mx-1">
                        <a href="/assets/images/tubewell/sGate_2.webp" data-lightbox="image-2" data-title="Sluice Gate">
                            <img style="width: 400px; height: 400px; object-fit: cover;" src="/assets/images/tubewell/sGate_2.webp" alt="Sluice Gate">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="container my-4">
        <div class="row g-4 justify-content-center">
            <?php
            // Example file list (adjust paths as needed)
            $files = [
                ['title' => 'পঞ্চায়েতের নিজেস্ব আয়ের উৎস (OSR) 2023-24', 'file' => '/assets/images/files/আয়_ও_ব্যয়ের_23_24.xlsx'],
                ['title' => 'পঞ্চায়েতের নিজেস্ব আয়ের উৎস (OSR) 2024-25', 'file' => '/assets/images/files/আয়_ও_ব্যয়ের.xlsx'],
                ['title' => 'Total Expenditure - 15 CFC,5 TH SFC,and OSR 2023-24', 'file' => '/assets/images/files/All_Fund_2023_24.xlsx'],
                ['title' => 'Total Expenditure - 15 CFC,5 TH SFC,and OSR 2024-25', 'file' => '/assets/images/files/Scheme_Payment_2024_25.xlsx'],
                ['title' => '2023-24 অর্থবর্ষের হিসাব', 'file' => '/assets/images/files/form27_23_24.pdf'],
                ['title' => '2024-25 অর্থবর্ষের হিসাব', 'file' => '/assets/images/files/form27_24_25.pdf'],
            ];

            foreach ($files as $item):
            ?>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <a href="<?= htmlspecialchars($item['file']) ?>" download class="text-decoration-none">
                        <div class="card h-100 shadow-lg border-0 rounded-4 text-center p-4 hover-card">
                            <div class="icon-wrapper mb-3">
                                <img src="/assets/images/icons/download.gif" alt="download" width="60" />
                            </div>
                            <h5 class="card-title mb-0 text-dark" style="font-weight: bolder;"><?= htmlspecialchars($item['title']) ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
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
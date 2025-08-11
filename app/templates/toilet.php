<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Fetch electors data
try {
    $stmt = $pdo->query("SELECT * FROM toilet ORDER BY location ASC");
    $stuff = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $stuff = [];
    error_log("Database query failed: " . $e->getMessage());
}
?>
<style>
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
                    <h3 class="page-heading">Community toilet</h3>
                    <p class="page-location">
                        Home <span>>></span> Community toilet
                    </p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Toilet</td>
                                <td><?= count($stuff) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow rounded-4 p-4 border-0">
                    <h4 class="mb-4 text-center">Community toilet</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Location</th>
                                    <th>Sansad No.</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1;
                                foreach ($stuff as $row): ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= htmlspecialchars($row['location'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['sansad'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['year'] ?? '-') ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php if (empty($stuff)): ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No records available</td>
                                    </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img src="/assets/images/line.svg" alt="line" />
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-4 mb-2 hover-zoom mx-1">
                        <a href="/assets/images/tubewell/toilet.webp" data-lightbox="image-3" data-title="Community Toilet">
                            <img src="/assets/images/tubewell/toilet.webp" alt="Community Toilet" width="100%">
                        </a>
                    </div>
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
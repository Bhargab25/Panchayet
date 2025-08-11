<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;
$stmt = $pdo->query("SELECT village_name, total_farmers FROM krishak_bandhu_farmers");
$farmers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<style>
    .farmer-card {
        border-radius: 16px;
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        /* Other nice combos: 
       #ff7e5f → #feb47b OR #00c6ff → #0072ff
    */
        color: #fff;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .farmer-card:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .card h4 {
        font-size: 1.25rem;
    }

    .badge {
        border-radius: 50px;
    }

    @media (max-width: 768px) {
        .card h4 {
            font-size: 1rem;
        }
    }
</style>

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
        </div>
    </section>

    <!-- counter -->
    <section class="counter glass-card">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Farmers</h3>
                    <p class="page-location">
                        Home <span>>></span> Farmers
                    </p>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm text-center" style="background: linear-gradient(to right, #007bff, #00c6ff); border-radius: 16px;">
                            <div class="card-body text-white">
                                <h5 class="mb-0 fw-semibold">Krishak Bandhu farmers data in Freserganj GP</h5>
                                <h5><span class="fs-3 fw-bold">3786</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Farmers</td>
                                <td>3786</td>
                            </tr>
                        </table>
                    </div>
                </div> -->
            </div>

            <div class="transparent-line text-center">
                <img src="/assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="container my-4">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($farmers as $farmer): ?>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100 farmer-card">
                        <div class="card-body d-flex flex-column justify-content-between text-white">
                            <h6 class="mb-2 opacity-75">Village</h6>
                            <h4 class="fw-bold"><?= htmlspecialchars($farmer['village_name']) ?></h4>
                            <div class="mt-3">
                                <span class="badge bg-light text-dark fs-5 p-2 px-3">
                                    <?= htmlspecialchars($farmer['total_farmers']) ?> Farmers
                                </span>
                            </div>
                        </div>
                    </div>
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
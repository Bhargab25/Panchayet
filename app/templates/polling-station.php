<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Fetch electors data
try {
    $stmt = $pdo->query("SELECT * FROM electors ORDER BY ac_number, part_no, section_no");
    $electors = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $electors = [];
    error_log("Database query failed: " . $e->getMessage());
}
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
        </div>
    </section>

    <!-- counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Polling Station</h3>
                    <p class="page-location">
                        Home <span>>></span> Polling Station
                    </p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Stations</td>
                                <td><?= count($electors) ?></td>
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
                    <h4 class="mb-4 text-center">Section-wise Elector Count</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>AC Number</th>
                                    <th>Part No</th>
                                    <th>Section No</th>
                                    <th>Section Details</th>
                                    <th>Electors</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1;
                                foreach ($electors as $row): ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= htmlspecialchars($row['ac_number'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['part_no'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['section_no'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['section_details'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['number_of_electors'] ?? '0') ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php if (empty($electors)): ?>
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
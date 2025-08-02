<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Fetch tubewell data
try {
    $stmt = $pdo->query("SELECT sansad, location, depth, year FROM tubewell ORDER BY sansad DESC");
    $tubewells = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $tubewells = [];
    // Optionally log error for production
    error_log("Database query failed: " . $e->getMessage());

}

try{
    // Fetch submersible data
    $stmt = $pdo->query("SELECT sansad, location, type, year FROM submersible ORDER BY sansad DESC");
    $submersibles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $submersibles = [];
    // Optionally log error for production
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
            <img src="./assets/images/banner.jpg" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Drinking water</h3>
                    <p class="page-location">
                        Home <span>>></span> Drinking water
                    </p>
                    <p class="notable">Notable achievement:</p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Tubewell</td>
                                <td>303</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="transparent-line text-center">
                <img src="./assets/images/line.svg" alt="line" />
            </div>
        </div>
    </section>

    <!-- Submersible and Tubewell - Sansad-wise Section -->
    <section class="container my-5">
        <div class="row">
            <!-- Submersible Section -->
            <div class="col-md-6 mb-4">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Submersible</h4>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table id="submersibleTable" class="table table-striped table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Sansad</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Year Installed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($submersibles)): ?>
                                    <?php foreach ($submersibles as $row): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['sansad']) ?></td>
                                            <td><?= htmlspecialchars($row['location']) ?></td>
                                            <td><?= htmlspecialchars($row['type']) ?></td>
                                            <td><?= htmlspecialchars($row['year']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No data available</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tubewell Section -->
            <div class="col-md-6 mb-4">
                <div class="card shadow border-0">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Tubewell</h4>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table id="tubewellsTable" class="table table-striped table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Sansad</th>
                                    <th>Location</th>
                                    <th>Depth (ft)</th>
                                    <th>Year Installed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($tubewells)): ?>
                                    <?php foreach ($tubewells as $row): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['sansad']) ?></td>
                                            <td><?= htmlspecialchars($row['location']) ?></td>
                                            <td><?= htmlspecialchars($row['depth']) ?></td>
                                            <td><?= htmlspecialchars($row['year']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No data available</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img src="./assets/images/line.svg" alt="line" />
                </div>
                <div class="text-center row">
                    <div class="col-md-6 mb-2">
                        <a href="./assets/images/tubewell/tubewell_1.jpg" data-lightbox="image-3"
                            data-title="My caption"></a><img src="./assets/images/tubewell/tubewell_1.jpg" alt=""></a>
                    </div>
                    <div class="col-md-6 mb-2">
                        <a href="./assets/images/tubewell/tubewell_2.jpg" data-lightbox="image-2"
                            data-title="My caption"></a><img src="./assets/images/tubewell/tubewell_2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>

</html>
<!-- JS here -->
<script src="https://img1.digitallocker.gov.in/nad/v-22/assets/js/jquery.min.js"></script>
<script src="https://img1.digitallocker.gov.in/ux4g/UX4G@1.0.0-beta1/js/ux4g.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="./assets/js/lightbox2/dist/js/lightbox.js"></script>

<script>
    $(document).ready(function () {
        $('#tubewellsTable').DataTable({
            "paging": true,
            "searching": true,
            "info": false,
            "lengthChange": false,
            "pageLength": 15,
            "language": {
                "emptyTable": "No data available in table"
            }
        });
        $('#submersibleTable').DataTable({
            "paging": true,
            "searching": true,
            "info": false,
            "lengthChange": false,
            "pageLength": 15,
            "language": {
                "emptyTable": "No data available in table"
            }
        });
    });

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
<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Fetch electors data
try {
    $stmt = $pdo->query("SELECT * FROM vrp_staff ORDER BY post DESC");
    $stuff = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $stuff = [];
    error_log("Database query failed: " . $e->getMessage());
}
?>

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
                    <h3 class="page-heading">Swachh bharat mission</h3>
                    <p class="page-location">
                        Home <span>>></span> Swachh bharat mission
                    </p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Team Members</td>
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
                    <h4 class="mb-4 text-center">VCT & VRP Team</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Name</th>
                                    <th>Post</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sl = 1;
                                foreach ($stuff as $row): ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= htmlspecialchars($row['name'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['post'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($row['contact_number'] ?? '-') ?></td>
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
    </section>


    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow rounded-4 p-4 border-0">
                    <h4 class="mb-4 text-center">View all Project Under Swachh Bharat Mission</h4>
                    <div class="row g-4 justify-content-center">
                        <?php
                        // Example file list (adjust paths as needed)
                        $files = [
                            ['title' => 'Click here to view', 'file' => '/assets/images/files/Freserganj_SBM.pdf'],
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
                </div>
            </div>
        </div>
    </section>

    <section class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow rounded-4 p-4 border-0">
                    <h4 class="mb-4 text-center">WB Rural Sanitation Monitoring System</h4>
                    <div class="table-responsive">
                        <table id="electorTable" class="table table-hover table-striped table-bordered">
                            <thead class="table-dark text-white">
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Gram Panchayat (Mouza)</th>
                                    <th>DPR Cost (SBMG)</th>
                                    <th>No of project completed (as per WB Rural Sanitation)</th>
                                    <th>Mouza wish capping (in Rs)</th>
                                    <th>Project completion amount (as per WB Rural Sanitation)</th>
                                    <th>Mouza wish capping in hand (in Rs)</th>
                                    <th>Expenditure Vs Capping (in %)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>AMRABATI</td>
                                    <td>3,750,660</td>
                                    <td>60</td>
                                    <td>3,750,660</td>
                                    <td>481,613</td>
                                    <td>3,274,447</td>
                                    <td>12.82</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BIJAYBATI</td>
                                    <td>2,752,134</td>
                                    <td>58</td>
                                    <td>2,752,134</td>
                                    <td>395,389</td>
                                    <td>2,356,745</td>
                                    <td>14.37</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>DEBNIBAS</td>
                                    <td>647,192</td>
                                    <td>55</td>
                                    <td>647,192</td>
                                    <td>386,799</td>
                                    <td>260,393</td>
                                    <td>59.77</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>LAKSHMIPUR ABAD</td>
                                    <td>280,672</td>
                                    <td>6</td>
                                    <td>280,672</td>
                                    <td>45,425</td>
                                    <td>235,247</td>
                                    <td>16.18</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SHIBPUR</td>
                                    <td>3,527,832</td>
                                    <td>49</td>
                                    <td>3,527,832</td>
                                    <td>440,573</td>
                                    <td>3,087,259</td>
                                    <td>12.49</td>
                                </tr>
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
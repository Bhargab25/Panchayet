<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;
$schemesName = ['NSAP', 'Jai Bangla', 'Lakshmir Bhandar', 'Taposili Bandhu', 'Manabik', 'Fisherman Welfare', 'Agriculture pension'];

function schemeToTableName($scheme)
{
    $table = strtolower($scheme);
    $table = preg_replace('/\s+/', '_', $table); // spaces to underscores
    $table = preg_replace('/[^a-z0-9_]/', '', $table); // remove invalid chars
    return $table;
}

// Fetch beneficiaries for each scheme
$schemes = [];
foreach ($schemesName as $scheme) {
    $tableName = schemeToTableName($scheme);
    try {
        $stmt = $pdo->query("SELECT name, father_or_husband, mouza, gp, phone_no FROM $tableName ORDER BY name ASC");
        $beneficiaries = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($beneficiaries) {
            $schemes[$scheme] = $beneficiaries;
        } else {
            $schemes[$scheme] = [];
        }
    } catch (PDOException $e) {
        // Log error or handle it as needed
        error_log("Error fetching beneficiaries for $scheme: " . $e->getMessage());
        $schemes[$scheme] = [];
    }
}

$totalPeople = 0;

foreach ($schemes as $beneficiaries) {
    $totalPeople += count($beneficiaries);
}
?>

<style>
    /* Card shadow style on tab content */
    .tab-content {
        background: #fff;
    }

    /* Sticky header for table */
    thead.sticky-top {
        position: sticky;
        top: 0;
        z-index: 10;
        background-color: #f8f9fa;
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
            <img src="/assets/images/banner/banner_5.png" alt="banner" />
        </div>
    </section>

    <!-- counter -->
    <section class="counter">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Social scheme ( Pensioner )</h3>
                    <p class="page-location">
                        Home <span>>></span> Social scheme ( Pensioner )
                    </p>
                    <p class="notable">Notable achievement:</p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Beneficiary</td>
                                <td><?php echo $totalPeople; ?></td>
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
    <section class="container my-5">
        <h2 class="text-primary fw-bold mb-4">Scheme Beneficiary Lists</h2>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="schemeTabs" role="tablist">
            <?php $i = 0;
            foreach ($schemes as $schemeName => $beneficiaries): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $i === 0 ? 'active' : '' ?>" id="tab-<?= $i ?>" data-bs-toggle="tab"
                        data-bs-target="#scheme-<?= $i ?>" type="button" role="tab" aria-controls="scheme-<?= $i ?>"
                        aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                        <?= htmlspecialchars($schemeName) ?>
                    </button>
                </li>
                <?php $i++; endforeach; ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content border border-top-0 p-4 rounded-bottom shadow-sm">
            <?php $i = 0;
            foreach ($schemes as $schemeName => $beneficiaries): ?>
                <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="scheme-<?= $i ?>" role="tabpanel"
                    aria-labelledby="tab-<?= $i ?>">
                    <?php if (empty($beneficiaries)): ?>
                        <p class="text-muted">No data available for this scheme.</p>
                    <?php else: ?>
                        <div class="table-responsive" style="max-height: 600px; overflow-y:auto;">
                            <table class="table table-striped table-hover align-middle mb-0">
                                <thead class="table-light sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>Beneficiary Name</th>
                                        <th>Father/Husband</th>
                                        <th>Mouza</th>
                                        <th>GP</th>
                                        <th>Phone No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($beneficiaries as $key => $beneficiary): ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= htmlspecialchars($beneficiary['name']) ?></td>
                                            <td><?= htmlspecialchars($beneficiary['father_or_husband']) ?></td>
                                            <td><?= htmlspecialchars($beneficiary['mouza']) ?></td>
                                            <td><?= htmlspecialchars($beneficiary['gp']) ?></td>
                                            <td><?= htmlspecialchars($beneficiary['phone_no']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
                <?php $i++; endforeach; ?>
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
<script src="/assets/js/lightbox2/dist/js/lightbox.js"></script>

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
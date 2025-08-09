<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Fetch electors data
// Fetch VCT & VRP team data
try {
    $stmt = $pdo->query("SELECT * FROM caste_enquiry_list ORDER BY name ASC");
    $stuff = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $stuff = [];
    error_log("Database query failed: " . $e->getMessage());
}

// Fetch SC/ST/OBC inquiry data
try {
    $stmt2 = $pdo->query("SELECT * FROM sending_caste_inquiry ORDER BY mouza, name");
    $casteData = $stmt2->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $casteData = [];
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
                    <h3 class="page-heading">SC, ST & OBC</h3>
                    <p class="page-location">
                        Home <span>>></span> SC, ST & OBC
                    </p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Inquiry</td>
                                <td><?= count($stuff) + count($casteData)  ?></td>
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

    <section class="container my-4">
        <div class="card shadow rounded-4 p-4 border-0">
            <h4 class="mb-4 text-center">TOTAL SENDING CASTE ENQUIRY LIST</h4>
            <div class="table-responsive">
                <table id="enquiry" class="table table-hover table-striped table-bordered">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Sl. No</th>
                            <th>Application No</th>
                            <th>Name</th>
                            <th>Father/Husband</th>
                            <th>Address</th>
                            <th>Caste</th>
                            <th>Sub Caste</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl2 = 1;
                        foreach ($stuff as $row): ?>
                            <tr>
                                <td><?= $sl2++ ?></td>
                                <td><?= htmlspecialchars($row['application_no'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['name'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['father_or_husband'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['address'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['caste'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['sub_caste'] ?? '-') ?></td>
                            </tr>
                        <?php endforeach ?>
                        <?php if (empty($stuff)): ?>
                            <tr>
                                <td colspan="9" class="text-center">No records available</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container my-4">
        <div class="card shadow rounded-4 p-4 border-0">
            <h4 class="mb-4 text-center">SC, ST & OBC Inquiry List</h4>
            <div class="table-responsive">
                <table id="submersibleTable" class="table table-hover table-striped table-bordered">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>Sl. No</th>
                            <th>Application No</th>
                            <th>Name</th>
                            <th>Father/Husband</th>
                            <th>Address</th>
                            <th>Phone No</th>
                            <th>Caste Type</th>
                            <th>Sub Caste</th>
                            <th>Mouza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sl2 = 1;
                        foreach ($casteData as $row): ?>
                            <tr>
                                <td><?= $sl2++ ?></td>
                                <td><?= htmlspecialchars($row['application_no'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['name'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['father_or_husband'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['address'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['phone_no'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['caste_type'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['sub_caste'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($row['mouza'] ?? '-') ?></td>
                            </tr>
                        <?php endforeach ?>
                        <?php if (empty($casteData)): ?>
                            <tr>
                                <td colspan="9" class="text-center">No records available</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
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
        $('#enquiry').DataTable({
            "paging": true,
            "searching": true,
            "info": false,
            "lengthChange": false,
            "pageLength": 20,
            "language": {
                "emptyTable": "No data available in table"
            }
        });
        $('#submersibleTable').DataTable({
            "paging": true,
            "searching": true,
            "info": false,
            "lengthChange": false,
            "pageLength": 20,
            "language": {
                "emptyTable": "No data available in table"
            }
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
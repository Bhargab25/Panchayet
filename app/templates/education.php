<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;

// Define school types and their corresponding table names
$schoolTypes = [
    'ICDS' => 'icds_schools',
    'SSK and MSK' => 'ssk_msk_schools',
    'Primary School and Junior High School' => 'primary_junior_schools',
    'High School' => 'high_schools'
];

// Fetch school data for each type
$schoolsData = [];
foreach ($schoolTypes as $type => $tableName) {
    try {
        $stmt = $pdo->query("SELECT * FROM $tableName ORDER BY name ASC");
        $schools = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $schoolsData[$type] = $schools ?: [];
    } catch (PDOException $e) {
        error_log("Error fetching schools for $type: " . $e->getMessage());
        $schoolsData[$type] = [];
    }
}
?>

<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --success-color: #27ae60;
        --light-bg: #f8f9fa;
        --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --border-radius: 8px;
    }

    .total-table {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--card-shadow);
        overflow: hidden;
        max-width: 300px;
    }

    .school-section {
        margin: 40px 0;
    }

    .section-card {
        background: white;
        /* height: 800px;
        overflow-x: scroll; */
        border-radius: var(--border-radius);
        box-shadow: var(--card-shadow);
        padding: 30px;
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .section-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .section-title {
        color: var(--primary-color);
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--secondary-color);
    }

    .section-icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: var(--secondary-color);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .school-stats {
        display: flex;
        justify-content: space-around;
        margin: 20px 0;
        padding: 20px;
        background: var(--light-bg);
        border-radius: var(--border-radius);
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--secondary-color);
        display: block;
    }

    .stat-label {
        color: #6c757d;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .data-table {
        margin-top: 20px;
    }

    .table {
        background: white;
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--card-shadow);
    }

    .table thead th {
        background: var(--primary-color);
        color: white;
        border: none;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        padding: 15px 10px;
    }

    .table tbody td {
        padding: 12px 10px;
        border-top: 1px solid #e9ecef;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background-color: rgba(52, 152, 219, 0.05);
    }

    /* DataTables custom styling */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 8px 16px;
        margin: 2px;
        border-radius: 4px;
        border: 1px solid var(--secondary-color);
        color: var(--secondary-color);
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: var(--secondary-color);
        color: white;
    }

    .dataTables_wrapper .dataTables_filter input {
        border: 2px solid #e9ecef;
        border-radius: 4px;
        padding: 8px 12px;
        margin-left: 10px;
    }

    .dataTables_wrapper .dataTables_filter input:focus {
        border-color: var(--secondary-color);
        outline: none;
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
    <section class="counter">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="page-heading">Educational Institutions</h3>
                    <p class="page-location">
                        Home <span>>></span> Educational Institutions
                    </p>
                    <p class="notable">Notable achievement:</p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Educational Institutions</td>
                                <td><?php echo array_sum(array_map('count', $schoolsData)); ?></td>
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

    <!-- Schools Data Section -->
    <section class="container">
        <?php foreach ($schoolsData as $type => $schools): ?>
            <div class="section-card">
                <h4 class="section-title">
                    <span class="section-icon">
                        <i class="fas fa-school"></i>
                    </span>
                    <?php echo $type; ?>
                </h4>

                <div class="school-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo count($schools); ?></span>
                        <span class="stat-label">Total Schools</span>
                    </div>
                    <?php if (!empty($schools)): ?>
                        <div class="stat-item">
                            <span class="stat-number">
                                <?php
                                // Calculate total students if columns exist
                                $totalStudents = 0;
                                foreach ($schools as $school) {
                                    // Assume columns like class_1, class_2, etc. or total_students
                                    if (isset($school['total_student'])) {
                                        $totalStudents += $school['total_student'];
                                    } else {
                                        // Sum up individual class columns if they exist
                                        for ($i = 1; $i <= 6; $i++) {
                                            if (isset($school["class_$i"])) {
                                                $totalStudents += $school["class_$i"];
                                            }
                                        }
                                    }
                                }
                                echo $totalStudents;
                                ?>
                            </span>
                            <span class="stat-label">Total Students</span>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($schools)): ?>
                    <div class="data-table">
                        <div class="table-responsive">
                            <table class="table school-table" id="<?php echo strtolower(str_replace(' ', '_', $type)); ?>_table">
                                <thead class="sticky-top">
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>School Name</th>
                                        <th>School Code</th>
                                        <th>Address</th>
                                        <th>Head Teacher</th>
                                        <th>Contact</th>
                                        <th>Total Students</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($schools as $index => $school): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($school['name'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($school['code'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($school['address'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($school['hm_name'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($school['contact'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($school['total_student'] ?? 'N/A'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="no-data">
                        <i class="fas fa-school"></i>
                        <h5>No Data Available</h5>
                        <p>No schools found for this category.</p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
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
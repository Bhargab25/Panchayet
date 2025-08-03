<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

$health_centers = [
    // 1. Shibpur HWC (from Image 1)
    [
        'type' => 'HWC',
        'name' => 'Shibpur HWC',
        'location' => 'Kalbari Bus Stand',
        'staff' => [
            '1st_ANM' => [
                'name' => 'Rita Das (HA(F))',
                'phone' => '9735583871'
            ],
            '2nd_ANM' => [
                'name' => 'Sabita Rani Das Bera (CHA)',
                'phone' => '8343917117'
            ],
            'CHO' => [
                'name' => 'Putul Bhunia',
                'phone' => '7407242290'
            ],
        ],
        'asha' => [
            ['name' => 'Pratima Mondal', 'phone' => '9775057362'],
            ['name' => 'Aruna Das', 'phone' => '9609394150'],
            ['name' => 'Hasi Rani Mondal', 'phone' => '8001673159'],
            ['name' => 'Anita Pramanik', 'phone' => '8145088799'],
            ['name' => 'Dipti Mondal', 'phone' => '8695442427'],
            ['name' => 'Krishna Mondal', 'phone' => '9046885989'],
        ],
        'health_supervisor' => 'Nil',
    ],
    // 2. Bijoybati HWC (from Image 2)
    [
        'type' => 'HWC',
        'name' => 'Bijoybati HWC',
        'staff' => [
            'CHO' => [
                'name' => 'Jayashree Das',
                'phone' => '7063650327'
            ],
            '1st_ANM' => [
                'name' => 'Pravati Barik',
                'phone' => '9735248411'
            ],
            '2nd_ANM' => [
                'name' => 'Anamika Mondal Shit',
                'phone' => '9647372376'
            ],
        ],
        'asha' => [
            ['name' => 'Shibani Samanta', 'phone' => '8116510329'],
            ['name' => 'Indrani Maity', 'phone' => '7797200291'],
            ['name' => 'Manasi Mondal', 'phone' => '8972890325'],
            ['name' => 'Dipika Das', 'phone' => '9382410154'],
            ['name' => 'Anima Laya Jana', 'phone' => '9635441282'],
        ],
        'health_supervisor' => [
            ['name' => 'Suchitra Das', 'phone' => '8436734585'],
            ['name' => 'Suprity Jana', 'phone' => '977505362'],
            ['name' => 'Swarnamayee Jana', 'phone' => '7074648758'],
            ['name' => 'Ashalata Samanta', 'phone' => '9836007294'],
            ['name' => 'Bidyutlata Sasmol', 'phone' => '9734590988'],
            ['name' => 'Radharani Das', 'phone' => '9609003515'],
            ['name' => 'Putul Das Bhoumik', 'phone' => '8945000970'],
            ['name' => 'Santi Sardar', 'phone' => '8001178848'],
        ]
    ],
    // 3. Debnibag PHC (from Image 3)
    [
        'type' => 'PHC',
        'name' => 'Debnibag PHC',
        'staff' => [
            '1st_ANM' => [
                'name' => 'Rina Pramanik'
                // phone missing (not visible in image)
            ],
            '2nd_ANM' => [
                'name' => 'Biplabi Ghoroi Das (CHA)'
                // phone missing
            ],
            'CHO' => [
                'name' => 'Binita Sikdar'
                // phone missing
            ],
        ],
        'asha' => [
            ['name' => 'Suranjana Mondal'],
            ['name' => 'Sabita Jana'],
            ['name' => 'Swapna Jana'],
        ],
        'icds_worker' => [
            ['name' => 'Manjusree Jana'],
            ['name' => 'Soma Mondal'],
            ['name' => 'Aparna Mondal'],
            ['name' => 'Baronali Maiti'],
            ['name' => 'Chinmoyee Geri'],
            ['name' => 'Bandana Pradhan'],
            ['name' => 'Arpita Patra'],
        ],
    ],
];

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
                    <h3 class="page-heading">Public Health</h3>
                    <p class="page-location">
                        Home <span>>></span> Public Health
                    </p>
                    <p class="notable">Notable achievement:</p>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <div>
                        <table class="table table-bordered total-table">
                            <tr>
                                <td>Total Centers</td>
                                <td>3</td>
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
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 text-primary fw-bold">Health & Wellness Centers (HWC)</h2>
                <?php foreach ($health_centers as $center): ?>
                    <?php if ($center['type'] === 'HWC'): ?>
                        <div class="card mb-4 shadow-sm border-0 rounded-3" style="transition: box-shadow 0.3s ease;">
                            <div class="card-header bg-light border-bottom-0">
                                <h4 class="mb-0"><?= htmlspecialchars($center['name'] ?? '') ?>
                                    <?php if (!empty($center['location'])): ?>
                                        <small class="text-muted"> — <?= htmlspecialchars($center['location']) ?></small>
                                    <?php endif; ?>
                                </h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    <span class="text-secondary fw-semibold">1st ANM:</span>
                                    <span><?= htmlspecialchars($center['staff']['1st_ANM']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['1st_ANM']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['1st_ANM']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-2">
                                    <span class="text-secondary fw-semibold">2nd ANM:</span>
                                    <span><?= htmlspecialchars($center['staff']['2nd_ANM']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['2nd_ANM']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['2nd_ANM']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-3">
                                    <span class="text-secondary fw-semibold">CHO:</span>
                                    <span><?= htmlspecialchars($center['staff']['CHO']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['CHO']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['CHO']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <span class="text-secondary fw-semibold d-block mb-1">ASHA Workers:</span>
                                        <ul class="list-unstyled ps-3 mb-0" style="max-height:140px; overflow-y:auto;">
                                            <?php foreach ($center['asha'] as $asha): ?>
                                                <li class="mb-1">
                                                    <?= htmlspecialchars($asha['name'] ?? '') ?>
                                                    <?php if (!empty($asha['phone'])): ?>
                                                        <small class="text-muted ms-2">(<?= htmlspecialchars($asha['phone']) ?>)</small>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-secondary fw-semibold d-block mb-1">Health Supervisor:</span>
                                        <ul class="list-unstyled ps-3 mb-0" style="max-height:140px; overflow-y:auto;">
                                            <?php if (is_array($center['health_supervisor'])) {  ?>
                                                <?php foreach ($center['health_supervisor'] as $icds): ?>
                                                    <li class="mb-1">
                                                        <?= htmlspecialchars($icds['name'] ?? '') ?>
                                                        <?php if (!empty($icds['phone'])): ?>
                                                            <small class="text-muted ms-2">(<?= htmlspecialchars($icds['phone'] ?? '') ?>)</small>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php } else { ?>
                                                <li class="mb-1">No health supervisors assigned</li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="col-12">
                <h2 class="mb-4 text-primary fw-bold">Public Health Centers (PHC/ICDS)</h2>
                <?php foreach ($health_centers as $center): ?>
                    <?php if ($center['type'] === 'PHC'): ?>
                        <div class="card mb-4 shadow-sm border-0 rounded-3" style="transition: box-shadow 0.3s ease;">
                            <div class="card-header bg-light border-bottom-0">
                                <h4 class="mb-0"><?= htmlspecialchars($center['name']) ?></h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">
                                    <span class="text-secondary fw-semibold">1st ANM:</span>
                                    <span><?= htmlspecialchars($center['staff']['1st_ANM']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['1st_ANM']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['1st_ANM']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-2">
                                    <span class="text-secondary fw-semibold">2nd ANM:</span>
                                    <span><?= htmlspecialchars($center['staff']['2nd_ANM']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['2nd_ANM']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['2nd_ANM']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-3">
                                    <span class="text-secondary fw-semibold">CHO:</span>
                                    <span><?= htmlspecialchars($center['staff']['CHO']['name'] ?? '') ?></span>
                                    <?php if (!empty($center['staff']['CHO']['phone'])): ?>
                                        <span
                                            class="badge bg-info text-dark ms-2"><?= htmlspecialchars($center['staff']['CHO']['phone']) ?></span>
                                    <?php endif; ?>
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <span class="text-secondary fw-semibold d-block mb-1">ASHA Workers:</span>
                                        <ul class="list-unstyled ps-3 mb-0" style="max-height:140px; overflow-y:auto;">
                                            <?php foreach ($center['asha'] as $asha): ?>
                                                <li class="mb-1"><?= htmlspecialchars($asha['name'] ?? '') ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-secondary fw-semibold d-block mb-1">ICDS Workers:</span>
                                        <ul class="list-unstyled ps-3 mb-0" style="max-height:140px; overflow-y:auto;">
                                            <?php foreach ($center['icds_worker'] as $icds): ?>
                                                <li class="mb-1"><?= htmlspecialchars($icds['name'] ?? '') ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
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
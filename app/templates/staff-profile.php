<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
require_once '../router/route.php';

global $pdo;
$stmt = $pdo->query("SELECT * FROM gram_panchayat_staff ORDER BY designation ASC, name ASC");
$staff = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_staff = count($staff);


?>

<style>
    .staff-bg-effect {
        position: relative;
        z-index: 1;
        padding: 44px 0 18px 0;
        overflow: hidden;
    }

    .staff-bg-effect::before {
        content: "";
        position: absolute;
        z-index: 0;
        inset: 0;
        background:
            radial-gradient(circle at 25% 40%, #cfe7fa80 0, #1ccbb340 80%, transparent 90%),
            radial-gradient(circle at 75% 68%, #f9f87160 15%, #b8e99410 60%, transparent 95%);
        opacity: 0.85;
        animation: subtleMove 8s infinite alternate;
    }

    @keyframes animateStaffBG {
        0% {
            background-position: 22% 44%, 83% 80%;
        }

        100% {
            background-position: 25% 54%, 80% 86%;
        }
    }

    .gp-staff-card {
        background: rgba(255, 255, 255, 0.98);
        border-radius: 18px;
        box-shadow: 0 4px 16px #1b2b4595;
        transition: box-shadow 0.3s, transform 0.22s;
        position: relative;
        overflow: hidden;
    }

    .gp-staff-card:hover {
        box-shadow: 0 8px 28px #bbbecc57;
        transform: translateY(-5px) scale(1.018);
    }

    .gp-staff-img {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 12px;
        border: 3px solid #e9ecf2;
        background: #fcfcfb;
        box-shadow: 0 1px 5px #aed0e230;
    }

    .gp-staff-btn {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        border: none;
        outline: none;
        border-radius: 6px;
        padding: 6px 14px 6px 12px;
        background: #f6fcff;
        color: #159d78;
        font-weight: 600;
        font-size: 0.95em;
        margin: 4px 3px 0 3px;
        transition: background 0.19s, color 0.19s;
        cursor: pointer;
        text-decoration: none;
    }

    .gp-staff-btn:hover {
        background: #1eecb3;
        color: #fff;
    }

    .gp-staff-card h5 {
        font-size: 1.08em;
        font-weight: 700;
        margin-bottom: 7px;
        color: #137885;
    }

    .gp-staff-designation {
        color: #ab39a7;
        font-weight: 600;
        font-size: 0.97em;
        letter-spacing: 0.7px;
        margin-bottom: 3px;
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
            <div class="row justify-content-center mb-3">
                <div class="col-12 col-md-8 text-center">
                    <h3 class="page-heading" style="color:#452a7a;font-weight:730;">Gram Panchayat Staff</h3>
                    <p class="fw-semibold text-secondary"><?php echo $total_staff; ?> Staff Members | Updated as of <?php echo date("F Y"); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="staff-bg-effect">
        <div class="container position-relative" style="z-index:2;">
            <div class="row g-4">
                <?php foreach ($staff as $person): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="gp-staff-card shadow-sm h-100 py-4 text-center">
                            <?php
                            $imgBase = '/assets/images/staff/' . strtolower(str_replace(' ', '_', $person['name']));
                            $imgPath = file_exists($_SERVER['DOCUMENT_ROOT'] . $imgBase . '.jpg') ? $imgBase . '.jpg'
                                : (file_exists($_SERVER['DOCUMENT_ROOT'] . $imgBase . '.png') ? $imgBase . '.png'
                                    : '/assets/images/default-profile.png');
                            ?>
                            <img src="<?php echo $imgPath; ?>" alt="Profile" class="gp-staff-img">
                            <div class="gp-staff-designation"><?php echo htmlspecialchars($person['designation']); ?></div>
                            <h5><?php echo htmlspecialchars($person['name']); ?></h5>
                            <div>
                                <a class="gp-staff-btn" href="tel:<?php echo htmlspecialchars($person['mobile_no']); ?>">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                                <a class="gp-staff-btn" style="background:#eaffea; color:#25ce41;"
                                    href="https://wa.me/<?php echo preg_replace('/\D/', '', $person['whatsapp_no']); ?>" target="_blank">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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